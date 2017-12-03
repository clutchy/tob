<?php

namespace App\Http\Controllers;

use App\Tbag;
use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{
    public function getIndex(Request $request) {
        $empty = $request->input('empty');

        $tbags = Tbag::all();

        return view('pages.welcome', ['tbags' => $tbags, 'empty' => $empty]);
    }

    public function getBlagajna() {
        return view('pages.blagajna');
    }

    public function postBlagajnaForm(Request $request)
    {
        $this->validate($request, [
            "name" => "required|max:255",
            "address" => "required",
            "post_number" => "required",
            "post" => "required",
            "phone" => "required",
            "email" => "required|email"
        ]);

        $name = $request->input('name');
        $address = $request->input('address');
        $post_number = $request->input('post_number');
        $post = $request->input('post');
        $phone = $request->input('phone');
        $email = $request->input('email');
        $extra_text = $request->input('extra-text');

        $total = floatval(0);

        if ($request->input('gridRadios') == 'pay_on_delivery')
        {
            $total += 2.5;
        }
        else if ($request->input('gridRadios') != 'pay_before_delivery')
        {
            return redirect()->action('PagesController@getBlagajna');
        }

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $ids = json_decode($request->input('ids'));
        $token = $request->input('g-recaptcha-response');

        $data = array('secret' => env('RECAPTCHA_SECRET'), 'response' => $token);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if (!$result)
        {
            return "Pošiljanje obrazca neuspešno";
        }

        $result = json_decode($result);
        if (!$result->success) {
            return "Pošiljanje obrazca neuspešno";
        }

        $tbags = array();

        if ($ids == null)
        {
            return "V košarici ni nobene torbice";
        }

        foreach($ids as $key => $count) {
            $tbag = Tbag::all()->where('tbag_id', '=', $key)->first();
            if ($tbag)
            {
                $tbags[$tbag->tbag_id] = array($tbag, $count);
                $total += $tbag->tbag_price * $count;
            }
        }

        $data = array(
            "name" => $name,
            "address" => $address,
            "post_number" => $post_number,
            "post" => $post,
            "phone" => $phone,
            "email" => $email,
            "extra_text" => $extra_text,
            "total" => $total,
            "tbags" => $tbags
        );

        Mail::send("emails.contact", $data, function ($message) use ($data) {
            $message->from("25d73db3d6-2738f2@inbox.mailtrap.io");
            $message->to($data["email"]);
            $message->subject("TOB naročilo");
        });

        $empty = true;
        return redirect()->action('PagesController@getIndex', ['empty' => $empty]);
    }

    public function getKosarica() {
        return view('pages.kosarica');
    }

    public function getPodrobnosti(Request $request)
    {
        $id = $request->input('tbag_id');
        $tbag = Tbag::all()->where('tbag_id', '=', $id)->first();

        return view('pages.podrobnosti')->with('tbag', $tbag);
    }
}