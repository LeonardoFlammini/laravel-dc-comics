@extends('layouts.mainLayout')
@section('page_title')
    | {{$comic->title}}
@endsection

@include('partials.header')

@section('main_content')
<h1 class="mb-3" style= 'display:inline-block'> Title: {{$comic->title}}</h1>
<span style='margin-left: 5px'>({{$comic->type}})</span>
<br>
<span> <strong>Series:</strong> {{$comic->series}}</span>
<div class="img-card-lf float-start me-3" style='width: 300px'>
    <img class="img-thumbnail" src="{{$comic->thumb}}" alt="">
</div>
<h3 class="mt-3">Description</h3>
<p class="description">{{$comic->description}}</p>
<h3>Price: {{$comic->price}}</h3>



@endsection
