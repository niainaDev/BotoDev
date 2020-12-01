@extends('layouts.app')
@section('content')
    @if(Cart::count() > 0)
        <div class="site-section">
            <div class="container">
                <div class="row mb-5">
                    <form class="col-md-12" method="post">
                        <div class="site-blocks-table">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Produit</th>
                                    <th class="product-price">Prix</th>
                                    <th class="product-quantity">Quantité</th>
                                    <th class="product-total">Total</th>
                                    <th class="product-remove">Supprimer</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $product)
                                    <tr>
                                        <td class="product-thumbnail">
                                            <img src="images/cloth_1.jpg" alt="Image" class="img-fluid">
                                        </td>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{ $product->model->title }}</h2>
                                        </td>
                                        <td>{{ $product->model->getPrice() }}</td>
                                        <td>
                                            <div class="input-group mb-3" style="max-width: 120px;">
                                                <div class="input-group-prepend">
                                                    <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                                </div>
                                                <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                                </div>
                                            </div>

                                        </td>
                                        <td>$49.00</td>
                                        <td class="text-center">
                                            <form method="post" action="{{ route('cart.destroy', $product->rowId) }}" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">x</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-5">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <button class="btn btn-primary  btn-block">Mettre à jour le panier</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-outline-primary  btn-block">Boutique</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="text-black h4" for="coupon">Coupon</label>
                                <p>Entrez votre code coupon si vous en avez un.</p>
                            </div>
                            <div class="col-md-8 mb-3 mb-md-0">
                                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                            </div>
                            <div class="col-md-4">
                                <button class="btn btn-dark btn-sm">Appliquer coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pl-5">
                        <div class="row justify-content-end">
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12 text-right border-bottom mb-5">
                                        <h5 class="text-black h4 text-uppercase">Détails du commande</h5>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <span class="text-black">Sous-total</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black">{{Cart::subtotal() }}</strong>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <span class="text-black">Taxe</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black">{{ Cart::tax() }}</strong>
                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <span class="text-black">Total</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <strong class="text-black">{{ Cart::total() }}</strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-success btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Procéder au paiement</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-12 alert alert-info">
            Votre panier est vide
        </div>
    @endif
@endsection


