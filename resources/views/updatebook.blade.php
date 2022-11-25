@extends('layout')


@section('container')
    <h1>{{$pagetitle}}</h1>

    <form action="{{route('books.update', $book->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control"  name="title" value="{{$book->title}}">
            @if($errors->has('title'))
                <p class="text-danger">
                    {{$errors->first('title')}}
                </p>

            @endif
        </div>
        <div class="mb-3">
            <label for="title">Synopsis</label>
            <input type="text" class="form-control"  name="synopsis" value="{{$book->synopsis}}">
            @if($errors->has('synopsis'))
                <p class="text-danger">
                    {{$errors->first('synopsis')}}
                </p>

            @endif
        </div>
        <div class="mb-3">
            <label for="title">Cover Photo</label>
            <br>
            <img src="{{asset('storage/'.$book->coverphoto)}}" class="mx-auto d-block rounded-3" width="110" >
            <input type="file" class="form-control"  name="coverphoto" value="{{$book->coverphoto}}">
        </div>
        <div class="mb-3">
            <label for="title">Writer Name</label>
            <input type="text" name="writer_name" class="form-control" >
        </div>

        <button type="submit" class="btn btn-outline-dark">Submit</button>
    </form>
@endsection
