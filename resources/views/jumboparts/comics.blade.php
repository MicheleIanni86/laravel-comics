@extends('layout.app')

@section('main-content')
<div class="body-comics container-comics">
  <div class="badge-comics">CURRENT SERIES</div>
  
  <div class="container text-center">
    
    
    <div class="row g-4 ">
      @foreach ($comics as $index => $comic)
      <div class="col-2">
        <div class="card card-comics mt-5">
          <a href="{{ route('comic-info', ['index' => $index]) }}">
            <img src="{{ $comic['thumb'] }}" alt="">
          </a>
        </div>
        <h5 class="title-comics mb-5" type="button">{{ $comic['series'] }}</h5>
      </div>
      @endforeach 
    </div>
    
    <button class="btn btn-primary rounded-0 px-5 mb-3 fw-bold">LOAD MORE</button>
  </div>

  
  </div>
  @include('partials.prefooter')
</div>
@endsection
    
