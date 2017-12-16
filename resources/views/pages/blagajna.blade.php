@extends('layouts.base')

@section('title', '- blagajna')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/blagajna.css') }}">
    <script src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')
<div id="blagajna-width">
    <h3>Podatki kupca</h3>

    <form id="validator-form" data-toggle="validator" role="form" action="{{ url('blagajna-form') }}" method="post">
        <div class="form-group">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input id="ids-blagajna" type="hidden" name="ids" value=''>
        </div>
        <div class="form-group">
            <label for="name" class="control-label">Ime in priimek*</label>
            <input type="text" name="name" class="form-control" id="inputName" data-error="Prosimo vpišite svoje ime in priimek" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="address" class="control-label">Ulica in hišna številka*</label>
            <input type="text" name="address" class="form-control" id="inputName" data-error="Prosimo vpišite svojo ulico in hišno številko" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="post_number" class="control-label">Poštna številka*</label>
            <input type="text" name="post_number" pattern="[0-9\s]+" class="form-control" id="inputName" data-error="Prosimo vpišite svojo poštno številko" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="post" class="control-label">Pošta*</label>
            <input type="text" name="post" class="form-control" id="inputName" data-error="Prosimo vpišite svojo pošto" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="phone" class="control-label">Telefonska številka*</label>
            <input type="text" name="phone" pattern="[+0-9]+" class="form-control" id="inputName" data-error="Prosimo vpišite svojo telefonsko številko (030XXXXXX)" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="email" class="control-label">Email*</label>
            <input type="email" name="email" class="form-control" id="inputEmail" data-error="Prosimo vpišite svoj email" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="extra-text" class="control-label">Dodatno sporočilo*</label>
            <textarea rows="3" name="extra-text" class="form-control" id="inputName"></textarea>
        </div>
        <div class="form-group">
            <div class="radio">
                <label>
                    <input type="radio" name="gridRadios" id="gridRadios1" value="pay_on_delivery" onclick="shipping_click()" checked required>
                    Plačilo ob povzetju (doplačilo 2,5€ poštnine)
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gridRadios" id="gridRadios2" value="pay_before_delivery" onclick="no_shipping_click()" required>
                    Plačilo s predhodnim nakazilom
                </label>
            </div>
        </div>

        <div class="form-group row recaptcha">
            <div class="g-recaptcha" data-sitekey="6Lc2Fy4UAAAAAC3xfk_6pyRCVXH12xUnU8WilKW4"></div>
        </div>

        <table class="table">
            <tbody>
            <tr>
                <td class="pull-left">Cena brez poštnine</td>
                <td class="pull-right" id="total_no_shipping"></td>
            </tr>
            <tr>
                <td class="pull-left">Poštnina</td>
                <td class="pull-right" id="shipping"></td>
            </tr>
            <tr>
                <td class="pull-left">Skupaj cena</td>
                <td class="pull-right" id="total"></td>
            </tr>
            </tbody>
        </table>

        <button type="submit" class="btn btn-primary">Naroči</button>
    </form>
</div>
@endsection

@section('scripts')
    <script src='{{ asset('js/validator.min.js') }}'></script>
    <script src='{{ asset('js/blagajna.js') }}'></script>
@endsection