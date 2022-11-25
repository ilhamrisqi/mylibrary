<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBookRequest;
use App\Http\Requests\UpdateWriterRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('createbook', [
            "pagetitle"=>"Create Book",
            "writers"=>\App\Models\Writer::all()
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            "title"=>"required|string|max:155",
            "synopsis"=>"required",
            "coverphoto"=>"required|image",
        ]);


        Book::create([
            "title" => $request->title,
            "synopsis" => $request->synopsis,
            "coverphoto" => $request->file('coverphoto')->store('coverphotos', 'public'),
            "writer_id" => $request->writer_id

        ]);
        return redirect('/');
    }
    public function show(Book $book)
    {
    }

    public function edit($id)
    {
        return view('updatebook', [
            "pagetitle"=>"Update Book",
            "book"=>Book::findOrFail($id),
        ]);
    }


    public function update(UpdateBookRequest $request, Book $book)
    {
        $book = Book::findOrFail($book->id);

        if ($request->file('coverphoto')){
            unlink('storage/'.$book->coverphoto);
            $book->update([
                "title" => $request->title,
                "synopsis" => $request->synopsis,
                "coverphoto" => $request->file('coverphoto')->store('coverphotos', 'public')
            ]);
        }else{
            $book->update([
                "title" => $request->title,
                "synopsis" => $request->synopsis,
            ]);
        }
        $book->update([
            "title" => $request->title,
            "synopsis" => $request->synopsis,
        ]);
        return redirect('/');
    }


    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/');
    }
}
