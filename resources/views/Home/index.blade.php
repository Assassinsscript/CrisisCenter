@extends('app')

@section('title')
    Accueil
@stop

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center text-success">
                Catégories
            </h1>
            <div class="list-group">
            @foreach($categories as $index => $category)
                <a href="{{ url("$index") }}" class="list-group-item text-center">{{ $category }}</a>
            @endforeach
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            @forelse($products as $product)
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="{{ $product->MainImageUrl }}" alt="...">
                        <div class="caption">
                            <h3 class="text-center">{{ str_limit($product->Name, 20) }}</h3>
                            <p class="text-center">{{ str_limit($product->Description, 100) }}</p>
                            <p class="text-center"><a href="{{ $product->BestOffer->ProductURL }}" class="btn btn-primary" role="button">Voir l'offre</a></p>
                            <p class="text-center"><a href="{{ route('addToCart', ['productId' => $product->Id]) }}" class="btn btn-success" role="button">Ajouter au panier</a></p>
                            <h3 class="text-center text-success">{{ $product->BestOffer->SalePrice }} €</h3>
                        </div>
                    </div>
                </div>
            @empty
                <h1 class="text-center text-danger">Rien dans cette catégorie</h1>
            @endforelse
        </div>
    </div>

@stop