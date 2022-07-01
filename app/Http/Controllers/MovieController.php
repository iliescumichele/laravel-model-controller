<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function index(){
        $movieItems = Movie::all();
        //@dump($movieItems);

        return view('movies', compact('movieItems'));
    }
}
