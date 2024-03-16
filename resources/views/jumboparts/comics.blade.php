@extends('layout.app')

@section('main-content')
<div class="body-comics">
  
  <div class="container">
    
    <h1>Comics</h1>
    
    <div class="row g-4">
      
      @foreach ($comics as $comic)
      <div class="col-2">
        <div class="card card-comics">
          <img src="{{ $comic['thumb'] }}" alt="">
        </div>
        <h5 class="title-comics" type="button">{{ $comic['series'] }}</h5>
      </div>
      @endforeach 
    </div>
    
  </div>
</div>
@endsection
    
