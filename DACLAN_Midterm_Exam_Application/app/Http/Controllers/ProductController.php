<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Spirited Away', 'year' => 2001],
            ['title' => 'My Neighbor Totoro', 'year' => 1988],
            ['title' => 'Princess Mononoke', 'year' => 1997],
            ['title' => 'Howl\'s Moving Castle', 'year' => 2004],
            ['title' => 'Kiki\'s Delivery Service', 'year' => 1989],
        ];

        return view('movies.index', compact('movies'));
    }
}
