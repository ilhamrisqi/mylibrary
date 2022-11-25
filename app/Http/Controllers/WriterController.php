<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index(Request $request)
    {
        if ($request-> has ('search')) {
            return view('index', [
                "title" => "Welcome to My Library",
                "main" => "This apllication is to manage my mini library",
                "writers" => Writer::where('nama', 'like', '%' . $request->search . '%')->orWhere('contact', 'like', '%' . $request->search . '%')->paginate(),
                "books" => Book::whereRelation('writer', 'writer_name', 'like', '%' . $request->search . '%')->get()

            ]);
        } else {
            return view('index', [
                "title" => "Welcome to My Library",
                "main" => "This apllication is to manage my mini library",
                "writers" => Writer::paginate(3),
                "books" => Book::all()

            ]);
        }
    }



    public function show(Writer $writer)
    {
        $writer->load('books');
        return view('show', [
            'title' => 'Show Writer',
            'main' => 'Writer',
            'writers' => $writer
        ]);

    }
}
