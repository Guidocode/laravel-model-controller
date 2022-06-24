<?php

namespace App\Http\Controllers;

use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();

        dump($movies);

        return view('movie', compact('movies'));
    }
}
