<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $arrayMovies = [
            [
                'title' => 'Aquaman',
                'img' => 'aquaman-carre.jpg',
                'short_description' => 'TOTO'
            ],
            [
                'title' => 'Aquaman',
                'img' => 'aquaman-carre.jpg',
                'short_description' => 'TOTO'
            ],
            [
                'title' => 'Aquaman',
                'img' => 'aquaman-carre.jpg',
                'short_description' => 'TOTO'
            ],
            [
                'title' => 'Aquaman',
                'img' => 'aquaman-carre.jpg',
                'short_description' => 'TOTO'
            ],
            [
                'title' => 'Aquaman',
                'img' => 'aquaman-carre.jpg',
                'short_description' => 'TOTO'
            ],
            [
                'title' => 'Aquaman',
                'img' => 'aquaman-carre.jpg',
                'short_description' => 'TOTO'
            ],
            [
                'title' => 'Aquaman',
                'img' => 'aquaman-carre.jpg',
                'short_description' => 'TOTO'
            ],
            [
                'title' => 'Aquaman',
                'img' => 'aquaman-carre.jpg',
                'short_description' => 'TOTO'
            ],
            [
                'title' => 'Aquaman',
                'img' => 'aquaman-carre.jpg',
                'short_description' => 'TOTO'
            ]
        ];
        return view('home.index', compact('arrayMovies'));
    }
}
