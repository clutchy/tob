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

    <form id="validator-form" data-toggle="validator" role="form">
        <div class="form-group">
            <label for="inputName" class="control-label">Name</label>
            <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
        </div>
        <div class="form-group has-feedback">
            <label for="inputTwitter" class="control-label">Twitter</label>
            <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
            </div>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="control-label">Email</label>
            <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="inputPassword" class="control-label">Password</label>
            <div class="form-inline row">
                <div class="form-group col-sm-6">
                    <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                    <div class="help-block">Minimum of 6 characters</div>
                </div>
                <div class="form-group col-sm-6">
                    <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="radio">
                <label>
                    <input type="radio" name="gridRadios" id="gridRadios1" required>
                    Plačilo ob povzetju (doplačilo 2,5€ poštnine)
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gridRadios" id="gridRadios2" required>
                    Plačilo s predhodnim nakazilom
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                    Check yourself
                </label>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

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
            <input name="email" type="email" class="form-control is-valid" id="email" aria-describedby="emailHelp">
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