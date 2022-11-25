@extends('layout')


@section('container')
    <h1>{{$pagetitle}}</h1>

    <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control"  name="title">
            @if($errors->has('title'))
                <p class="text-danger">
                    {{$errors->first('title')}}
                </p>

            @endif
        </div>
        <div class="mb-3">
            <label for="title">Synopsis</label>
            <input type="text" class="form-control"  name="synopsis">
            @if($errors->has('synopsis'))
                <p class="text-danger">
                    {{$errors->first('synopsis')}}
                </p>

            @endif
        </div>
        <div class="mb-3">
            <label for="title">Cover Photo</label>
            <input type="file" class="form-control"  name="coverphoto">
            @if($errors->has('coverphoto'))
                <p class="text-danger">
                    {{$errors->first('coverphoto')}}
                </p>

            @endif
        </div>
        <div class="mb-3">
            <label for="title">Writer Name</label>
            <select name="writer_id" id="" class="form-select">
                @foreach($writers as $writer)
                    <option value="{{$writer->id}}">{{$writer->nama}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-outline-dark">Submit</button>
    </form>
@endsection
