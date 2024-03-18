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

@endsection