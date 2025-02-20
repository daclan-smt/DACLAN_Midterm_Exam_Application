<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $movies = [
            ['title' => 'Spirited Away', 'year' => 2001, 'director' => 'Hayao Miyazaki'],
            ['title' => 'My Neighbor Totoro', 'year' => 1988, 'director' => 'Hayao Miyazaki'],
            ['title' => 'Princess Mononoke', 'year' => 1997, 'director' => 'Hayao Miyazaki'],
            ['title' => 'Howl\'s Moving Castle', 'year' => 2004, 'director' => 'Hayao Miyazaki'],
            ['title' => 'Kiki\'s Delivery Service', 'year' => 1989, 'director' => 'Hayao Miyazaki'],
        ];

        return view('movies.index', compact('movies'));
    }
}
