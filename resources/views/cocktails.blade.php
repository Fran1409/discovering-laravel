@extends('layout')
@extends('header')



@section('content')
<div class="box">
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
                <h5 class="card-title">Margarita - €11</h5>
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
    <div class="row">
        <form method="post" action="/cocktails">
            @csrf
            <fieldset>
                <legend>Order here</legend>

                <div class="form-row">
                    <div class="form-group col-lg">
                        <label for="email">E-mail:</label>
                        <input type="text" id="email" name="email" class="form-control" value="{{ old('email')}}">
                        @error('email')
                            <p class="text-danger">{{$errors->first('email') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="street">Street + streetnumber:</label>
                        <input type="text" name="street" id="street" class="form-control" value="{{ old('street')}}">
                        @error('street')
                            <p class="text-danger">{{$errors->first('street') }}</p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md">
                        <label for="zipcode">Zipcode:</label>
                        <input type="text" id="zipcode" name="zipcode" class="form-control" value="{{ old('zipcode')}}">
                        @error('zipcode')
                            <p class="text-danger">{{$errors->first('zipcode') }}</p>
                        @enderror
                    </div>
                    <div class="form-group col-md">
                        <label for="city">City:</label>
                        <input type="text" id="city" name="city" class="form-control" value="{{ old('city')}}">
                        @error('city')
                            <p class="text-danger">{{$errors->first('city') }}</p>
                        @enderror
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Fill in which cocktail(s)</legend>
                <div class="form-row">
                    <div class="form-group col-lg">
{{--                         <input type="text" id="cocktails" name="cocktails" class="form-control" value="{{ old('cocktails')}}">
 --}}
                        <select multiple id="cocktails" name="cocktails" class="form-control">
                            <option value="cosmopolitan">Cosmopolitan - €11</option>
                            <option value="lazyredcheeks">Lazy Red Cheeks - €10</option>
                            <option value="pornstarmartini">Pornstar Martini - €12</option>
                            <option value="longislandicedtea">Long Island Iced Tea - €12</option>
                            <option value="margarita">Margarita - €11</option>
                            <option value="bart">Bart - €10</option>
                        </select>
                        @error('cocktails')
                            <p class="text-danger">{{$errors->first('cocktails') }}</p>
                        @enderror
                    </div>
                </div>
            </fieldset>

            <button type="submit" class="btn btn-secondary" name="submit">Order!</button>
        </form>
    </div>
</div>
@endsection

@extends('footer')