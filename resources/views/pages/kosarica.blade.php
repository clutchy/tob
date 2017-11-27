@extends('layouts.base')

@section('title', '- kosarica')

@section('head')
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/kosarica.css') }}">
@endsection

@section('content')
    <table id="cart" class="table table-hover table-condensed center">
        <thead>
        <tr>
            <th style="width:50%">Izdelek</th>
            <th style="width:10%">Cena izdelka</th>
            <th style="width:8%">Količina</th>
            <th style="width:22%" class="text-center">Cena</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody id="cart-items">
        </tbody>
        <tfoot>
        <tfoot>
        <tr class="visible-xs">
            <td class="text-center skupaj-class"><strong></strong></td>
        </tr>
        <tr>
            <td class="pull-left"><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Nadaljuj z nakupovanjem</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center skupaj-class"><strong></strong></td>
            <td><a href="{{ url('/blagajna') }}" class="btn btn-success btn-block">Na blagajno <i class="fa fa-angle-right"></i></a></td>
        </tr>
        </tfoot>
    </table>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.tmpl.min.js') }}"></script>
    <script src="{{ asset('js/jquery.tmplPlus.min.js') }}"></script>
    <script src="{{ asset('js/kosarica.js') }}"></script>
@endsection