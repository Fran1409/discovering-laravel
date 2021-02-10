@extends('layout')

@section('header')
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="/">Home</a>
            <a class="py-2 d-none d-md-inline-block" href="cocktails">Cocktails</a>
            <a class="py-2 d-none d-md-inline-block" href="about">About us</a>
            <a class="py-2 d-none d-md-inline-block" href="contact">Contact</a>
        </div>
    </nav>
@endsection

@section('content')
    <div class="box">
        <div class="row">
            <h3>Cocktails are on their way!</h3>
        </div>
    </div>
@endsection

@section('footer')
    <footer class="container py-5">
        <div class="row">
        <div class="col-12 col-md">
            <h6><a href="#">Cocktails</a></h6>        
            <small class="d-block mb-3 text-muted">&copy; BeCode 2020-2021</small>
        </div>
        <div class="col-6 col-md">
            <h6><a href="#">About us</a></h6>
        </div>
        <div class="col-6 col-md">
            <h6>Contact</h6>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="#">Team</a></li>
                <li><a class="text-muted" href="#">Locations</a></li>
                <li><a class="text-muted" href="#">Privacy</a></li>
                <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
        </div>
        </div>
    </footer>
@endsection