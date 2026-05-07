@extends('layout.app')

@section('content')

    <section class="jarak container mt-4">
        <form class="d-flex input-group" role="search">
            <button class="btn border" type="submit">🔎</button>
            <input class="form-control" type="search" placeholder="search for product...">
        </form>
    </section>
    
    <!-- banner promosi -->
    <section class="container mt-4 border rounded text-center p-4 bg-secondary text-white">
        <h1>Promotional Banner</h1>
        <p>Silahkan lihat promo menarik yang ada</p>
    </section>

    <!-- featured products -->
    <section class="container mt-4">
        <h2>Featured Products</h2>
        <div class="row row-cols-md-4 row-cols-2">
            <div class="card rounded overflow-hidden col">
                <a href="/description"><img class="w-100" src="{{ asset('images/placeholder.svg') }}" alt=""></a>
                <div class="card-body text-center">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text">$99.9</p>
                    <a class="btn btn-sm btn-dark px-3" href="#">Add to Cart</a>
                </div>  
            </div>
            
            <div class="card rounded overflow-hidden col">
                <a href="/description"><img class="w-100" src="{{ asset('images/placeholder.svg') }}" alt=""></a>
                <div class="card-body text-center">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text">$99.9</p>
                    <a class="btn btn-sm btn-dark px-3" href="#">Add to Cart</a>
                </div>
            </div>

            <div class="card rounded overflow-hidden col">
                <a href="/description"><img class="w-100" src="{{ asset('images/placeholder.svg') }}" alt=""></a>
                <div class="card-body text-center">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text">$99.9</p>
                    <a class="btn btn-sm btn-dark px-3" href="#">Add to Cart</a>
                </div>
            </div>

            <div class="card rounded overflow-hidden col">
                <a href="/description"><img class="w-100" src="{{ asset('images/placeholder.svg') }}" alt=""></a>
                <div class="card-body text-center">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text">$99.9</p>
                    <a class="btn btn-sm btn-dark px-3" href="#">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- kategori -->
    <section class="container mt-4">
        <h2>Categories</h2>

        <div class="row row-cols-md-4 row-cols-2">
            <div class="card rounded overflow-hidden col p-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Category</h5>
               </div>
            </div>
            
            <div class="card rounded overflow-hidden col p-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Category</h5>
               </div>
            </div>

            <div class="card rounded overflow-hidden col p-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Category</h5>
               </div>
            </div>
            
            <div class="card rounded overflow-hidden col p-4">
                <div class="card-body text-center">
                    <h5 class="card-title">Category</h5>
               </div>
            </div>
        </div>
        <hr>
    </section>

@endsection