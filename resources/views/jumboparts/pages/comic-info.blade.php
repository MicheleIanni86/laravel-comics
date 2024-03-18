@extends('layout.app')

@section('main-content')
{{-- image --}}
<div class="row-blue">
    <div class="container-img-thumb">
        <img src="{{ $comic['thumb'] }}" alt="">
        <div class="badge-up">{{ strtoupper($comic['type']) }}</div>
        <div class="badge-down">VIEW GALLERY</div>
    </div>

</div>
<div class="container mb-5">

    <div class="row mt-5">
        <div class="col-8">
            <h5 class="title-comics-info">{{ strtoupper($comic['title']) }}</h5>

            <div class="box-check my-4">
                <div class="d-flex price-avaible w-75 p-3">
                    <div class="w-75">U.S. Price <span class="text-white fw-bold">{{ $comic['price'] }}</span></div>
                    <div class="w-25 text-end">AVAILABLE</div>
                </div>
                <div class="w-25 text-center p-3 text-white fw-600">
                    <span>Check Availability &#9660;</span>
                </div>
            </div>
            <p>{{ $comic['description'] }}</p>
        </div>
        
        <div class="col-4 text-end">
            <h5 >ADVERTISEMENT</h5>
            <img  src="{{ Vite::asset('/resources/images/adv.jpg') }}" alt="">
        </div>

    </div>
</div>

<div class="main-info">
    <div class="container">

        <div class="row g-5 py-5">

            <div class="col-6">
                <div class="talent-specs mb-4">Talent</div>

                    <div class="d-flex col-art-written">
                      <div class="w-25">
                          <p class="title-talent">Art By:</p>              
                      </div>
         
                      <div class="w-75">
                            <p><a href="#">Mattia Volonterio, Michele Ianni, Demetrio Padre, Luca Polzone, Yousef, Nicola Teora, Nicola Gallo, Graziano Paladino, Serena Malusà, Simone Cappadona, Simone Pucci</a><p>
                      </div>
                    </div>

                    <div class="d-flex col-art-written" id="col-art-written-last">
                        <div class="w-25">
                            <p class="title-talent">Written By:</p>              
                        </div>
           
                        <div class="w-75">
                              <p><a href="#">Brad Meltzer, Tom King, Scott Snyder, Geoff Jhons, Brian Michaela Bendis, Paul Dini, Louise Simonson, Richard Donner, Marv Woldman, Peterj. Toimmasi, Dan Jurgens, Jerry Siegel, Paul Levitz</a><p>
                        </div>
                      </div>
         

            </div>
            
            
            <div class="col-6">
                <div class="talent-specs mb-4">Specs</div>

                <div class="d-flex col-serie-price-date">
                        <div class="w-25">
                          <p class="title-specs">Series:</p>              
                        </div>
       
                        <div class="w-75">
                          <p ><a href="#" id="title-serie-specs">{{ strtoupper($comic['series']) }}</a><p>
                        </div>
                </div>

                <div class="d-flex col-serie-price-date">
                        <div class="w-25">
                          <p class="title-specs">U.S. Price:</p>              
                        </div>
         
                        <div class="w-75">
                          <p>{{ $comic['price'] }}<p>
                        </div>
                </div>

                <div class="d-flex col-serie-price-date" id="col-serie-price-date-last">
                    <div class="w-25">
                      <p class="title-specs">One Sale Date:</p>              
                    </div>
     
                    <div class="w-75">
                      <p>{{ $comic['sale_date'] }}<p>
                    </div>
            </div>                

            </div>

        </div>

        
    </div>
    <div class="last-info mt-5">
        <div class="container">
            <div class="row">
                <div class="col-3 d-flex justify-content-between p-2">
                    <p>DIGITAL COMICS</p>
                    <img src="{{ Vite::asset('/resources/images/buy-comics-digital-comics.png') }}" alt="">
                </div>
                <div class="col-3 d-flex justify-content-between p-2">
                    <p>SHOP DC</p>
                    <img src="{{ Vite::asset('/resources/images/buy-comics-merchandise.png') }}" alt="">
                </div>
                <div class="col-3 d-flex justify-content-between p-2">
                    <p>COMIC SHOP LOCATOR</p>
                    <img src="{{ Vite::asset('/resources/images/buy-comics-shop-locator.png') }}" alt="">
                </div>
                <div class="col-3 d-flex justify-content-between p-2">
                    <p>SUBSCRIPTIONS</p>
                    <img src="{{ Vite::asset('/resources/images/buy-comics-subscriptions.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>
</div>
    
@endsection