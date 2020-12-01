@extends('layouts.app')

@section('content')
    @foreach($products as $product)
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">
                        @foreach ($product->categories as $category)
                            {{ $category->name }}
                        @endforeach
                    </strong>
                    <h5 class="mb-0">{{  $product->title }}</h5>
                    <div class="mb-1 text-muted">{{  $product->created_at->format('d/m/Y') }}</div>
                    <p class="mb-auto">{{  $product->subtitle }}</p>
                    <strong class="mb-auto text-warning"  style="font-size: 1.5rem">{{  $product->getPrice() }}</strong>
                    <a href="{{ route('products.show', $product->slug)  }}" class="stretched-link btn btn-primary">Voir l'article</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
                </div>
            </div>
        </div>
    @endforeach
    {{ $products->appends(request()->input())->links()}}
@endsection
