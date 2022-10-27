<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        return view('index', [
            "title" => "Welcome to My Library",
            "main" => "This apllication is to manage my mini library",
            "writers" => Writer::all()
        ]);
    }

    public function show(Writer $writer)
    {
       // $writer = Writer::find($writer);
        return view('show', [
            'title' => 'Show Writer',
            'main' => 'Writer',
            'writers' => $writer
        ]);

    }
}
