@extends('layouts.base')

@section('title', '- blagajna')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blagajna.css') }}">
    <script src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')
<div id="blagajna-width">
    <form id="blagajna-form" action="{{ url('blagajna-form') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input id="ids-blagajna" type="hidden" name="ids">
        <h3>Naročilo</h3>
        <div class="form-group">
            <label class="pull-left" for="email">Email naslov</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email naslov">
        </div>
        <div class="form-group">
            <label class="pull-left" for="extra-text">Dodatno sporočilo</label>
            <textarea class="form-control" id="extra-text" rows="5"></textarea>
        </div>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6Lc2Fy4UAAAAAC3xfk_6pyRCVXH12xUnU8WilKW4"></div>
        </div>
        <button type="submit" class="btn btn-primary">Naroči</button>
    </form>
</div>
@endsection

@section('scripts')
    <script src='{{ asset('js/blagajna.js') }}'></script>
@endsection