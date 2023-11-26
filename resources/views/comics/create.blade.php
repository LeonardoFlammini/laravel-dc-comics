@extends('layouts.mainLayout')

@section('page_title')
    | Crea Prodotto
@endsection

@section('main_content')
    <h1>Inserisci nuovo prodotto</h1>
    <form action="{{route('comics.store')}}" method="POST" class="mt-5">
        <div class="row mb-3">
            <div class="col-8">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="thumb" class="form-label">Link Immagine thumb</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="sale_date" class="form-label">Data di commercio</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-8">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-3">
                <button type="submit" class="btn btn-primary" style='width: 100%'>Crea</button>
            </div>
            <div class="col-2">
            <button type="Annulla" class="btn btn-danger " style='width: 100%'>Reset</button>
            </div>
        </div>
    </form>
@endsection
