<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //metodo per gestire la rotta
    public function index() {
        $movies = Movie::all();
        // dd($movies);
        return view('movies.index', compact('movies'));
    }
}