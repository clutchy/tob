@extends('layouts.base')

@section('title')
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        @include('includes.carousel')

        <div class="row">
            @foreach ($tbags as $tbag)
                <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="thumbnail">
                        <!-- TODO: Change to image name -->
                        <form method="GET" action="{{ url('podrobnosti') }}">
                            <input class="img-form" type="image" name="tbag_id" value="{{ $tbag->tbag_id }}" src="http://placehold.it/320x150" alt="" />
                        </form>
                        <div class="caption">
                            <h4 class="pull-right">{{ $tbag->tbag_price }} €</h4>
                            <h4 class="tbag_name"><a href="#">{{ $tbag->tbag_name }}</a></h4>
                            <p class="item-description">{{ $tbag->description }} dsdasfjdsa jksdlafj lsdk jsdk dsjsf sl</p>
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
    <script src="{{ asset('js/welcome.js') }}"></script>
@endsection