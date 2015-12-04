@extends('app')

@section('title', "Panier")

@section('content')
    <h1>
        Panier
    </h1>
    @if ($cart === null)
        <div class="alert alert-danger">
            Vous n'avez pas encore ajouté de produit à votre panier !
        </div>
    @else
        <table class="table table-bordered white-bg">
            <thead>
                <tr>
                    <th>
                        Nom
                    </th>
                    <th>
                        Qte
                    </th>
                    <th>
                        Prix Unitaire
                    </th>
                    <th>
                        Prix Total
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cart_products as $product_id => $cart_product)
                    <tr>
                        <td>
                            <a href="{{ $products[$product_id]->BestOffer->ProductURL }}" target="_blank">
                                {{ $products[$product_id]->Name }}
                            </a>
                        </td>
                        <td>
                            {{ $cart_product->Quantity }}
                        </td>
                        <td class="text-right">
                            {{ number_format($cart_product->Price, 2, ',', ' ') }} €
                        </td>
                        <td class="text-right">
                            {{ number_format($cart_product->Price * $cart_product->Quantity, 2, ',', ' ') }} €
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfooter>
                <tr class="font-bold lead">
                    <td class="text-right" colspan="3">
                        Total
                    </td>
                    <td class="text-right">
                        {{ number_format($cart->TotalPrice, 2, ',', ' ') }} €
                    </td>
                </tr>
            </tfooter>
        </table>

        <div class="text-center">
            <a href="{{ $cart->CheckoutUrl }}" class="btn btn-lg btn-primary">
                Commander sur CDiscount <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    @endif
@stop