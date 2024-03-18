@extends('layout.app')

@section('main-content')
<div class="row-blue">
    <div class="container-img-thumb">
        <img src="{{ $comic['thumb'] }}" alt="">
    </div>

</div>
<div class="container">

      
        <h5>{{ $comic['series'] }}</h5>

</div>
@endsection