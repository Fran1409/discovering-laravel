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
<div class="cocktails">
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/cosmopolitan.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Cosmopolitan - €11</h5>
                <p class="card-text">Lipsmackingly sweet and sour, the Cosmopolitan cocktail of vodka, cranberry, orange liqueur and citrus is a good-time in a glass.</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/lazyredcheeks.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Lazy Red Cheeks - €10</h5>
                <p class="card-text">This cocktail containts rasberries, vodka, cane sugar, violet syrup and lime juice. The name for the cocktail was created by Tom Barman.</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/pornstarmartini.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Pornstar Martini - €12</h5>
                <p class="card-text">Combining flavors of passion fruit and vanilla, and served with a shot of sparkling wine, this modern classic cocktail will dazzle your tastebuds.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/longisland.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Long Island Iced Tea - €12</h5>
                <p class="card-text">A Long Island iced tea is a type of alcoholic mixed drink typically made with vodka, tequila, light rum, triple sec, gin, and a splash of cola, which gives the drink the same amber hue as iced tea.</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/margarita.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Margarita - €12</h5>
                <p class="card-text">A margarita is a cocktail consisting of tequila, orange liqueur, and lime juice often served with salt on the rim of the glass.</p>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/bart.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Bart - €10</h5>
                <p class="card-text">Bart is a combination of Amaretto and (multivitamin) orange juice.</p>
                </div>
            </div>
        </div>
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