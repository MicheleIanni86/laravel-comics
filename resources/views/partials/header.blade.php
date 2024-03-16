
<header>

<div class="stripes-blue">
    <div class="container d-flex justify-content-end">
        <p class=" m-0">DCM POWERˢᴹ VISA&#169;</p>
        <p class="ms-5 m-0">ADDITIONAL DC SITES &#9660;</p>
    </div>
</div>

<div class="d-flex container justify-content-between align-items-center">
    <img class="img-logo" src="{{ Vite::asset('/resources/images/dc-logo.png') }}" alt="">
    <ul class="d-flex gap-5 m-0">
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'characters']) href="{{ route('characters') }}">CHARACTERS</a>
        </li>
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'comics']) href="{{ route('comics') }}">COMICS</a>
        </li>
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'movies']) href="{{ route('movies') }}">MOVIES</a>
        </li>
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'tv']) href="{{ route('tv') }}">TV</a>
        </li>
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'games']) href="{{ route('games') }}">GAMES</a>
        </li>
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'collectibles']) href="{{ route('collectibles') }}">COLLECTIBLES</a>
        </li>
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'videos']) href="{{ route('videos') }}">VIDEOS</a>
        </li>
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'fans']) href="{{ route('fans') }}">FANS</a>
        </li>
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'news']) href="{{ route('news') }}">NEWS</a>
        </li>
        <li>
            <a @class(['link', 'active' => Route::currentRouteName() == 'shop']) href="{{ route('shop') }}">SHOP</a>
        </li>
    </ul>
</div>
<div class="container-img-jumbo">
    <img  src="{{ Vite::asset('/resources/images/jumbotron.jpg') }}" alt="">
</div>

</header>

