<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function view($id, $name)
    {
        if ($id <= 0) {
            abort(404);
        }

        $movie = [
            'title' => 'Aquaman',
            'categories' => 'Sci-FI',
            'director' => 'James Wan',
            'date' => '19 décembre 2018',
            'synopsis' => 'Lorem',
            'img_affiche' => 'aquaman-affiche.jpg',
        ];

        return view('video.view', compact('movie'));
    }
}
