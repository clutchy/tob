@extends('layouts.base')

@section('title', '- blagajna')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blagajna.css') }}">
    <script src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')
    <div id="blagajna-width">
        <h3>Podatki kupca</h3>

        <form id="validator-form" data-toggle="validator" role="form" action="{{ url('kontakt-form') }}" method="post">
            <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div class="form-group">
                <label for="name" class="control-label">Ime in priimek*</label>
                <input type="text" name="name" class="form-control" id="inputName" data-error="Prosimo vpišite svoje ime in priimek" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label">Email*</label>
                <input type="email" name="email" class="form-control" id="inputEmail" data-error="Prosimo vpišite svoj email" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="extra-text" class="control-label">Vaše sporočilo*</label>
                <textarea rows="3" name="extra-text" class="form-control" id="inputName" data-error="Prosimo vpišite sporočilo" required></textarea>
                <div class="help-block with-errors"></div>
            </div>

            <div class="form-group row recaptcha">
                <div class="g-recaptcha" data-sitekey="6Lc2Fy4UAAAAAC3xfk_6pyRCVXH12xUnU8WilKW4"></div>
            </div>

            <button type="submit" class="btn btn-primary">Pošlji</button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src='{{ asset('js/validator.min.js') }}'></script>
@endsection