<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index()
    {
        $data = Movie::all();
        dump($data);
        return view("movies.index");
    }

    function show()
    {
        return view("movies.show");
    }

    function edit()
    {
        return view("movies.edit");
    }
}

