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
        <p>Silahkan lihat promo menarik yang adaaa</p>
    </section>

    <!-- featured products -->
    <section class="container mt-4">
        <h2>Featured Products</h2>
        <div class="row row-cols-md-4 row-cols-2">
            @foreach($products as $product)
            <div class="card rounded overflow-hidden col">
                <a href="/description"><img class="w-100" src="{{ asset($product->image_url ?? 'images/placeholder.svg') }}" alt=""></a>
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">Rp {{ number_format($product->price) }}</p>
                    <a class="btn btn-sm btn-dark px-3" href="#">Add to Cart</a>
                </div>  
            </div>
            @endforeach
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

    <form action="/product/{{ $product->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- @method('PUT') -->
        <div class="row">
            <div class="col-lg-5">
                <div class="card bg-primary">
                    <div class="card-body">
                        <div class="mb-1">
                            <label for="">Name</label>
                            <input type="text" class="form-control" placeholder="Nama Produk" name="name" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Description</label>
                            <input type="text" class="form-control" placeholder="Deskripsi Produk" name="description" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Price</label>
                            <input type="number" class="form-control" placeholder="Harga Produk" name="price" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Stock</label>
                            <input type="number" class="form-control" placeholder="Stock Produk" name="stock" required>
                        </div>
                        <div class="mb-1">
                            <label for="">Category</label>
                            <select name="category_id" required id="category_id" class="form-select">
                                <option value="1">Pakaian</option>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="">Image</label>
                            <input type="file" class="form-control" placeholder="Gambar Produk" name="image_url" required>
                        </div>
                        <div class="mb-1">
                            <button type="submit" class="btn btn-outline-warning" name="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection