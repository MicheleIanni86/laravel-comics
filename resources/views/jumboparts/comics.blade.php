@extends('layout.app')

@section('main-content')
<div class="body-comics container-comics">
  <div class="badge-comics">CURRENT SERIES</div>
  
  <div class="container text-center">
    
    
    <div class="row g-4 ">
      @foreach ($comics as $comic)
      <div class="col-2">
        <div class="card card-comics mt-5">
          <img src="{{ $comic['thumb'] }}" alt="">
        </div>
        <h5 class="title-comics mb-5" type="button">{{ $comic['series'] }}</h5>
      </div>
      @endforeach 
    </div>
    
    <button class="btn btn-primary rounded-0 px-5 mb-3 fw-bold">LOAD MORE</button>
  </div>

  <div class="container-link">
    <div class="container">
      <ul>
        <li>
          <a href="#">
            <img src="{{ Vite::asset('/resources/images/buy-comics-digital-comics.png') }}" alt="">
          </a>
            
          <p>DIGITAL COMICS</p>
        </li>

        <li>
          <a href="#">
            <img src="{{ Vite::asset('/resources/images/buy-comics-merchandise.png') }}" alt="">
          </a>
            <p>DC MERCHANDISE</p>
        </li>

        <li>
          <a href="#">
            <img src="{{ Vite::asset('/resources/images/buy-comics-subscriptions.png') }}" alt="">
          </a>
            <p>SUBSCRIPTION</p>
        </li>

        <li>
          <a href="#">
            <img src="{{ Vite::asset('/resources/images/buy-comics-shop-locator.png') }}" alt="">
          </a>
            <p>COMIC SHOP LOCATOR</p>
        </li>

        <li>
          <a href="#">
            <svg version="1.1" id="Layer_2_1_" class="dimension-svg" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 79.5 50.9" xml:space="preserve"><style>.st0{fill:none;stroke:#fff;stroke-width:1.7732;stroke-miterlimit:10}</style><path class="st0" d="M73.9 49.6H5.3c-2.1 0-3.8-1.7-3.8-3.8V5.4c0-2.1 1.7-3.8 3.8-3.8h68.6c2.1 0 3.8 1.7 3.8 3.8v40.3c0 2.1-1.7 3.9-3.8 3.9zM1.5 15.4h76.2"/><path fill="#fff" stroke="#fff" stroke-width=".998" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M50.1 22.1l-9.7 1.4 5.1-16.4L29 30.2l9.3-1.3L34.4 44z"/></svg>
          </a>
            <p>DC POWER VISA</p>
        </li>
      </ul>

  
 
      </div>
    </div>
  
  </div>

</div>
@endsection
    
