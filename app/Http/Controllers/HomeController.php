<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movie;


class HomeController extends Controller
{
    public function index(){
        $movies = movie::All();
        return view("movies.index", compact("movies"));
    }
}
