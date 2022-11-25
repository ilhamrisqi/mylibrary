@extends('layout')

@section('container')



    <div class="container mt-5">
        <table class="table table-success table-striped mt-2 mx-auto w-50">
            <h1 class="text-center">MY LIBRARY</h1>
            <form action="/" method="GET" class="form-inline w-25 d-flex gap-2 ">
                <input type="search" placeholder="Search" name="search" class="form-control">
                <button type="submit" class="btn btn-outline-success ">Search</button>
            </form>
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Negara</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Contact</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>


            </tr>
            </thead>
            <tbody>
            @php($i=0)
            @foreach($writers as $pn)
            <tr>
                <td>{{$loop -> iteration}}</td>
                <td><a href="/writer/{{ $pn['id'] }}">{{ $pn['nama'] }}</a></td>
                <td>{{$pn['negara']}}</td>
                <td>{{$pn['deskripsi']}}</td>
                <td>{{$pn['contact']}}</td>
                <td>
                    <img class="img-fluid mt-auto" src="{{$pn['image']}}"></td>
                <td><button class='btn btn-dark'>Delete</button></td>
                <td><button class='btn btn-dark'>Edit</button></td>

            </tr>
            @endforeach
            </tbody>
        </table>

        {{ $writers->links() }}


        <h1>Books</h1>


        @if(Auth::user() && Auth::user()->status == 'admin')
            <a href="{{route("books.create")}}" class="btn btn-dark">Create Book</a>
        @endif

        <table class="">
            <h1 class="text-center">Books</h1>
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Synopsis</th>
                <th scope="col">Name</th>
                <th scope="col">Cover Photo</th>
                @if(Auth::user() && Auth::user()->status == 'admin')
                    <th scope="col">Action</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @php($i=0)
            @foreach($books as $book)
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->synopsis}}</td>
                    <td>{{$book->writer->nama}}</td>

                    <td>
                        <img src="{{asset('storage/'.$book->coverphoto)}}" class="mx-auto d-block rounded-3" width="110" >
                    </td>
                    @if(Auth::user() && Auth::user()->status == 'admin')
                        <td>
                            <div class="mt-2">
                                <a href ="{{route("books.edit", $book->id)}}" class="btn btn-dark">Update</a>
                            </div>
                            <div class="mt-2">
                                <form action="{{route('books.destroy', $book->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    @endif

                </tr>
            @endforeach

        </table>
    </div>

@endsection
