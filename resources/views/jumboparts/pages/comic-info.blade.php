@extends('layout.app')

@section('main-content')
<div class="row-blue">
    <div class="container-img-thumb">
        <img src="{{ $comic['thumb'] }}" alt="">
        <div class="badge-up">COMIC BOOK</div>
        <div class="badge-down">VIEW GALLERY</div>
    </div>

</div>
<div class="container">

      
        <h5>{{ $comic['series'] }}</h5>

</div>
@endsection