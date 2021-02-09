@extends('layout')

@section('header')
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#">Home</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Cocktails</a>
            <a class="py-2 d-none d-md-inline-block" href="#">About us</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Contact</a>
        </div>
    </nav>
@endsection

@section('content')

    <div class="content position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal" style="font-style: italic;">It's beginning to look a lot like cocktails</h1>
            <p class="lead font-weight-normal">In the mood for some cocktails? Not in the mood to get out your house? Check out our cocktails and order now!</p>
            <a class="btn btn-outline-secondary" href="#">Wine not?</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
@endsection