@extends('layout.app')

@section('main-content')
<div class="body-comics">
  
  <div class="container">
    
    <h1>Comics</h1>
    
    <div class="row g-4">
      
      @foreach ($comics as $comic)
      <div class="col-2">
        <div class="card">
          <img src="{{ $comic['thumb'] }}" alt="">
          <h3>{{ $comic['series'] }}</h3>
        </div>
      </div>
      @endforeach 
    </div>
    
  </div>
</div>
@endsection
    
