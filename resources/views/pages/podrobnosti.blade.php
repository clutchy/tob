@extends('layouts.base')

@section('title')
@endsection

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/podrobnosti.css') }}">
@endsection

@section('content')

<div class="col-md-12">
    <div class="thumbnail">
        <img class="img-responsive" src="http://placehold.it/1200x600" alt="">
        <div class="caption-full">
            <h4 class="pull-right">{{ $tbag->tbag_price }}</h4>
            <h4><a href="#">{{ $tbag->tbag_name }}</a>
            </h4>
            <p>See more snippets like these online store reviews at <a target="_blank" href="http://bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
            <p>Want to make these reviews work? Check out
                <strong><a href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this building a review system tutorial</a>
                </strong>over at maxoffsky.com!</p>
            <p>{{ $tbag->description }}</p>
        </div>
    </div>
</div>
@endsection