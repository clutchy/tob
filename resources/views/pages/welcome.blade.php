@extends('layouts.base')

@section('title')
@endsection

@section('active-class')
    active
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
@endsection

@section('content')

@isset($empty)
    <script>
        window.onload = function () {
            empty_basket();
        };
    </script>
@endisset

<div class="row">
    <div class="col-md-12">
        @include('includes.carousel')
        <div class="row">
            @foreach ($tbags as $tbag)
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <!-- TODO: Change to image name -->
                        <form class="podrobnosti-form" method="GET" action="{{ url('podrobnosti') }}">
                            <input class="img-form" type="image" name="tbag_img" src="{{ asset('tob_slike/' . $tbag->img_name . '/' . $tbag->img_name) }}.jpg" alt="" />
                            <input class="hidden" type="text" name="tbag_id" value="{{ $tbag->tbag_id }}"/>
                        </form>
                        <div class="caption">
                            <h4 class="pull-right">{{ $tbag->tbag_price }} €</h4>
                            <h4 class="tbag_name"><a href="{{ url('podrobnosti') }}?tbag_id={{ $tbag->tbag_id }}">{{ $tbag->tbag_name }}</a></h4>
                            <p class="item-description">{{ str_limit($tbag->description, 200) }}</p>
                            <div class="ratings">
                                <td>
                                    <tr>
                                        <form action="{{ url('kosarica') }}">
                                            <input class="btn btn-primary pull-right" type="submit" value="Kupi" onclick="kupi_click('{{ json_encode($tbag) }}', '1')" />
                                        </form>
                                    </tr>
                                    <tr>
                                        <button type="button" class="btn btn-primary pull-left" onclick="kosarica_click('{{ json_encode($tbag) }}', '1')">
                                            V košarico
                                        </button>
                                    </tr>
                                </td>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>

@endsection

@section('scripts')
@endsection