<footer>
    <div class="bgr-footer">
        <div class="container container-footer  d-flex">
            <div class="left-footer d-flex gap-5 ">
                <div class="row pt-4">
                        <div class="col-4">

                            {{-- first column --}}
                            <ul class="m-0 p-0 d-flex flex-column">
                                <span class="first-title-link mb-1">DC COMICS</span>
                                <li>
                                    <a Route::currentRouteName() == 'characters' href="{{ route('characters') }}">Characters</a>
                                </li>
                                <li>
                                    <a Route::currentRouteName() == 'comics' href="{{ route('comics') }}">Comics</a>
                                </li>
                                <li>
                                    <a Route::currentRouteName() == 'movies' href="{{ route('movies') }}">Movies</a>
                                </li>
                                <li>
                                    <a Route::currentRouteName() == 'tv' href="{{ route('tv') }}">Tv</a>
                                </li>
                                <li>
                                    <a Route::currentRouteName() == 'games' href="{{ route('games') }}">Games</a>
                                </li>
                                <li>
                                    <a Route::currentRouteName() == 'videos' href="{{ route('videos') }}">Videos</a>
                                </li>
                                <li>
                                    <a Route::currentRouteName() == 'fans' href="{{ route('fans') }}">Fans</a>
                                </li>
                                <li>
                                    <a Route::currentRouteName() == 'news' href="{{ route('news') }}">News</a>
                                </li>
                            </ul>

                            <ul class="mt-3 p-0 d-flex flex-column">
                                <span class="first-title-link mb-1">SHOP</span>
                                <li>
                                    <a href="#">Shop DC</a>
                                </li>
                                <li>
                                    <a href="#">Shop DC Collectibles</a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-4">
                            {{-- second column --}}
                            <ul class="m-0 p-0 d-flex flex-column">
                                <span class="first-title-link mb-1">DC</span>
                                <li>
                                    <a href="#">Terms Of Use</a>
                                </li>
                                <li>
                                    <a href="#">Privacy policy (New)</a>
                                </li>
                                <li>
                                    <a href="#">Ad Choices</a>
                                </li>
                                <li>
                                    <a href="#">Advertising</a>
                                </li>
                                <li>
                                    <a href="#">Jobs</a>
                                </li>
                                <li>
                                    <a href="#">Subscriptions</a>
                                </li>
                                <li>
                                    <a href="#">Talent Workshops</a>
                                </li>
                                <li>
                                    <a href="#">CPSC Certificates</a>
                                </li>
                                <li>
                                    <a href="#">Ratings</a>
                                </li>
                                <li>
                                    <a href="#">Shop Help</a>
                                </li>
                                <li>
                                    <a href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>    
                            
                        <div class="col-4">
                            {{-- third column --}}
                            <ul class="m-0 p-0 d-flex flex-column">
                                <span class="first-title-link mb-1">SITES</span>
                                <li>
                                    <a href="#">DC</a>
                                </li>
                                <li>
                                    <a href="#">MAD Magazine</a>
                                </li>
                                <li>
                                    <a href="#">DC Kids</a>
                                </li>
                                <li>
                                    <a href="#">DC Universe</a>
                                </li>
                                <li>
                                    <a href="#">DC Power Visa</a>
                                </li>
                            </ul>
                        </div>    
                        
                        <div class="col-4">

                            {{-- last column --}}
 
                        </div>
                        </div>
                </div>
                <div class="right-footer">
                    <img src="{{ Vite::asset('/resources/images/dc-logo-bg.png') }}" alt="">
                </div>
            </div>
            
            


    </div>
        
</footer>