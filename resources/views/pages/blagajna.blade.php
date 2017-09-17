@extends('layouts.base')

@section('title', '- blagajna')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blagajna.css') }}">
    <script src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')
<div id="blagajna-width">
    <h3>Podatki kupca</h3>

    <table class="table">
        <tbody>
        <tr>
            <td>Cena brez poštnine</td>
            <td id="total_no_shipping"></td>
        </tr>
        <tr>
            <td>Poštnina</td>
            <td id="shipping"></td>
        </tr>
        <tr>
            <td>Skupaj cena</td>
            <td id="total"></td>
        </tr>
        </tbody>
    </table>

    <form id="blagajna-form" action="{{ url('blagajna-form') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input id="ids-blagajna" type="hidden" name="ids">
        <div class="form-group row">
            <label class="pull-left" for="name">Ime*</label>
            <input name="name" type="text" class="form-control">
            <label class="pull-left" for="surname">Priimek*</label>
            <input name="surname" type="text" class="form-control">
            <label class="pull-left" for="address">Ulica in hišna številka*</label>
            <input name="address" type="text" class="form-control">
            <label class="pull-left" for="post_number">Poštna številka*</label>
            <input name="post_number" type="number" class="form-control">
            <label class="pull-left" for="post">Pošta*</label>
            <input name="post" type="text" class="form-control">
            <label class="pull-left" for="phone">Telefonska številka*</label>
            <input name="phone" type="text" class="form-control">
        </div>
        <div class="form-group row">
            <label class="pull-left" for="email">Email naslov*</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group row">
            <label class="pull-left" for="extra-text">Dodatno sporočilo</label>
            <textarea name="extra-test" class="form-control" id="extra-text" rows="5"></textarea>
        </div>
        <fieldset class="form-group row">
            <div class="col-form-legend col-sm-12">
                <label class="pull-left">Način plačila</label>
            </div>
            <div class="col-sm-8">
                <div class="form-check pull-left">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="pay_on_delivery" onclick="shipping_click()" checked>
                        Plačilo ob povzetju (doplačilo 2,5€ poštnine)
                    </label>
                </div>
                <div class="form-check pull-left">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="pay_before_delivery" onclick="no_shipping_click()">
                        Plačilo s predhodnim nakazilom
                    </label>
                </div>
            </div>
        </fieldset>
        <div class="form-group row">
            <div class="g-recaptcha" data-sitekey="6Lc2Fy4UAAAAAC3xfk_6pyRCVXH12xUnU8WilKW4"></div>
        </div>
        <button type="submit" class="btn btn-primary">Naroči</button>
    </form>
</div>
@endsection

@section('scripts')
    <script src='{{ asset('js/blagajna.js') }}'></script>
@endsection