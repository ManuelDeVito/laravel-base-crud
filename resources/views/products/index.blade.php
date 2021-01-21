@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Tutti i prodotti
                </h1>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <div class="card-header text-center">
                                    Prodotto {{ $product->id }}
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">{{ 'Nome: ' .$product->name }}</li>
                                    <li class="list-group-item">{{ 'Codice: ' .$product->code }}</li>
                                    <li class="list-group-item">{{ 'Prezzo: ' .$product->price .'€' }}</li>
                                    <li>
                                        <a href="{{ route('products.show', ['product' => $product->id ]) }}" class="btn btn-info">
                                            Dettagli
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 text-center space">
                        <a href="{{ route('products.create') }}" class="btn btn-primary">
                            Inserisci nuovo prodotto
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
