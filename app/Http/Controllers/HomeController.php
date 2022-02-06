<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyModel;

class HomeController extends Controller
{
    public function index()
    {
        $movies = MyModel::all();
        return view('home', compact('movies'));
    }
}
