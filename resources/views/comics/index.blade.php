@extends('layouts.mainLayout')

@section('page_title')
| Products
@endsection

@include('partials.header')

@section('main_content')
    <h1>Prodotti</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->price}}</td>
                <td><a href="{{route('comics.show', $comic)}}" class="btn btn-success">Details <i class="fa-regular fa-eye" style='margin-left:5px'></i></a></td>
            </tr>
            @endforeach

        </tbody>
    </table>

    {{ $comics->links() }}

@endsection
