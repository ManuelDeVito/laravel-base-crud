@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Inserisci nuovo prodotto
                </h1>
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name='name' class="form-control" placeholder="Nome prodotto">
                    </div>
                    <div class="form-group">
                        <label>Codice</label>
                        <input type="text" name='code' class="form-control" placeholder="Codice prodotto">
                    </div>
                    <div class="form-group">
                        <label>Descrizione</label>
                        <input type="text" name='description' class="form-control" placeholder="Descrizione prodotto">
                    </div>
                    <div class="form-group">
                        <label>Prezzo</label>
                        <input type="number" name='price' class="form-control" placeholder="Prezzo prodotto">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Salva prodotto
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
