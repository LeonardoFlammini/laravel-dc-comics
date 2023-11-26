@extends('layouts.mainLayout')

@section('page_title')
| Products
@endsection

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
            <tr>
                <td>A</td>
                <td>B</td>
                <td>C</td>
                <td>D</td>
            </tr>
        </tbody>
    </table>
@endsection
