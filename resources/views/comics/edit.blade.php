@extends('layouts.mainLayout')

@section('page_title')
    | Modifica Prodotto
@endsection

@include('partials.header')

@section('main_content')
    <h1>Modifica {{$comic->title}}</h1>
    <form action="{{route('comics.update',$comic)}}" method="POST" class="mt-5">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-8">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="thumb" class="form-label">Link Immagine thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="sale_date" class="form-label">Data di commercio</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-3">
                <button type="submit" class="btn btn-primary" style='width: 100%'>Crea</button>
            </div>
            <div class="col-2">
            <button type="reset" class="btn btn-danger " style='width: 100%'>Reset</button>
            </div>
        </div>
    </form>
@endsection
