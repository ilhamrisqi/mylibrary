@extends('layout')

@section('container')



    <div class="container mt-5">
        <table class="table table-success table-striped mt-2 mx-auto w-50">
            <h1 class="text-center">MY LIBRARY</h1>
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
                        <img class="img-fluid mt-auto" src="image/{{$pn['image']}}"></td>
                    <td><button class='btn btn-dark'>Delete</button></td>
                    <td><button class='btn btn-dark'>Edit</button></td>

                </tr>
            @endforeach
            </tbody>
        </table>
        </table>
    </div>

@endsection
