<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Laravel 10',
            'descriptions' => 'Aprendendo laravél 10'
        ];

        return view('main', $data);
    }
}
