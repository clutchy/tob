@extends('layouts.base')

@section('title')
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/o-nas.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
@endsection

@section('content')
    @include('includes.carousel')

    <div class="o-nas-container">
        <div class="col-md-12">
            <h3>TOB - tobak torbice</h3>
            <p>
                Praktična ročno izdelana torbica za shranjevanje tobaka v vrečki, papirčkov in filtrov. Torbica je sestavljena iz
                velikega žepa, ki je namenjen shranjevanju vrečke s tobakom, malega žepa, ki se prilega papirčkom in omogoča
                enostavno jemanje posamičnega pairčka, in srednjega žepa, za shranjevanje ostalih kadilskih pripomočkov (filtri,
                vžigalnik). Torbica se zapre z dvojnim pripogibom in na koncu še z ježkom, ki omogoča prilagajanje debeline glede
                na vsebino. Izdelek je izdelan v Sloveniji. Dimenzije (odprta: 15x21cm, zaprta: cca 15x7,5cm)
            <p>
            <h3>Dostava</h3>
            <p>
                Ko prjememo naročilo, pošiljko odpremimo v dveh delovnih dneh. Za dostavo poskrbi Pošta Slovenije ali GLS dostavna
                služba, v večini primerov pošiljka prispe že naslednji delovni dan od dneva odpreme, vendar najkasneje v roku treh
                delovnih dni. GLS vas bo obveščal o podrobnostih glede dostave.
            </p>

            <h3>Stroški pošiljanja in način plačila</h3>
            <p>Na voljo imate dve opcije načina plačila:</p>
            <ul>
                <li>Plačilo ob povzetju: poleg vrednosti izdelka plačate še stroške pošiljanja, ki znašajo 2,5€.</li>
                <li>Plačilo s predhodnim nakazilom: Ne plačate stroškov pošiljanja.</li>
            </ul>

            <h3>Brez stroškov pošiljanja</h3>
            <p>
                Kot najugodnejši način plačila priporočamo plačilo s predhodnim nakazilom. Pri plačilu preko vaše banke je strošek
                izvedbe plačila praviloma najnižji. Pošta Slovenije, banke in mobilni operaterji uporabnikom za vsako plačilo
                obračunajo provizijo skladno s svojim cenikom. Ti stroški niso upoštevani v cenah izdelkov in storitev.Plačilo s
                predhodnim nakazilom priporočamo, kot cenovno najugodnejši način plačila! Naročeno blago lahko na vaši banki ali
                spletni banki plačate z nakazilom na transakcijski račun. Plačilo izvedete na osnovi prejetega elektronskega
                sporočila potem, ko oddate naročilo. Dobavni rok prične teči z dnevom zaznave prejema sredstev na naš račun.
            </p>
        </div>
    </div>

@endsection

@section('scripts')
@endsection