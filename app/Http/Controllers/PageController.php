<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
public function index() 
{
    return view('home');
}
public function characters() 
{
    return view('jumboparts.characters');
}
public function comics() 
{
    $comics = config('comics');
    return view('jumboparts.comics', compact('comics'));
}
public function comicInfo($index) 
{
    $comics = config('comics');

    if(!array_key_exists($index, $comics)) 
    abort(404);

    $comic = $comics[$index];
    return view('jumboparts.pages.comic-info', compact('comic'));
}
public function movies() 
{
    return view('jumboparts.movies');
}
public function tv() 
{
    return view('jumboparts.tv');
}
public function games() 
{
    return view('jumboparts.games');
}
public function collectibles() 
{
    return view('jumboparts.collectibles');
}
public function videos() 
{
    return view('jumboparts.videos');
}
public function fans() 
{
    return view('jumboparts.fans');
}
public function news() 
{
    return view('jumboparts.news');
}
public function shop() 
{
    return view('jumboparts.shop');
}
}
