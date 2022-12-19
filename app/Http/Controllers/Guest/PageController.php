<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('film', compact('movies'));
    }
    public function about()
    {

        return view('about');
    }
    //
}
