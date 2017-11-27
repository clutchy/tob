@extends('layouts.base')

@section('title')
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/podrobnosti.css') }}">
@endsection

@section('content')
<div class="col-md-12">
    <div class="thumbnail">
        <img id="podrobnosti-img" class="img-responsive" src="{{ asset('tob_slike/' . $tbag->img_name . '/' . $tbag->img_name) }}1.jpg" alt="">

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="col-sm-4">
                        <img class="slide-image" src="{{ asset('tob_slike/' . $tbag->img_name . '/' . $tbag->img_name) }}1.jpg" alt="" onclick="change_image('{{ asset('tob_slike/' . $tbag->img_name . '/' . $tbag->img_name) }}1.jpg', '0');">
                    </div>
                    <div class="col-sm-4">
                        <img class="slide-image" src="{{ asset('tob_slike/' . $tbag->img_name . '/' . $tbag->img_name) }}2.jpg" alt="" onclick="change_image('{{ asset('tob_slike/' . $tbag->img_name . '/' . $tbag->img_name) }}2.jpg', '1');">
                    </div>
                    <div class="col-sm-4">
                        <img class="slide-image" src="{{ asset('tob_slike/' . $tbag->img_name . '/' . $tbag->img_name) }}3.jpg" alt="" onclick="change_image('{{ asset('tob_slike/' . $tbag->img_name . '/' . $tbag->img_name) }}3.jpg', '2');">
                    </div>
                </div>
            </div>
            <!--a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a-->
        </div>

        <div class="caption-full">
            <h4 class="pull-right">{{ $tbag->tbag_price }}€</h4>
            <h4><a href="#">{{ $tbag->tbag_name }}</a></h4>
            <h4>Dimenzije torbice</h4>
            <p>Odprta: cca {{ $tbag->open_width }}x{{ $tbag->open_heigth }}</p>
            <p>Zaprta: cca {{ $tbag->close_width }}x{{ $tbag->close_heigth }}</p>
            <h4>Opis</h4>
            <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
            <p>Want to make these reviews work? Check out
                <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                </strong>over at maxoffsky.com!</p>
            <p>{{ $tbag->description }}</p>
            <div class="ratings">
                <td>
                    <tr>
                        <form action="{{ url('kosarica') }}">
                            <input class="btn btn-primary pull-right" type="submit" value="Kupi" onclick="kupi_click('{{ json_encode($tbag) }}', '1');" />
                        </form>
                    </tr>
                    <tr>
                        <button type="button" class="btn btn-primary pull-left" onclick="kosarica_click('{{ json_encode($tbag) }}', '1');">
                            V košarico
                        </button>
                    </tr>
                </td>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/podrobnosti.js') }}"></script>
@endsection