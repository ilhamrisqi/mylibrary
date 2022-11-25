@extends('layout')
@section('container')

    <h2>{{ $writers['nama'] }}</h2>
    <h2>{{ $writers['contact'] }}</h2>
    <h2>{{ $writers['negara'] }}</h2>
    <h2>{{ $writers['deskripsi'] }}</h2>
    <img class="w-25 " src="/image/{{ $writers['image'] }}" alt="">


        <table class="table table-success table-striped mt-2 mx-auto w-50">
            <h1 class="text-center">Books</h1>
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Synopsis</th>
                <th scope="col">Cover Photo</th>


            </tr>
            </thead>
            <tbody>

            @foreach($writers->books as $book)
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$book->title}}</td>
                    <td>{{$book->synopsis}}</td>
                    <td>
                        <img class="mx-auto d-block rounded-3" width="110" src="image/{{$book->coverphoto}}"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </table>


@endsection
