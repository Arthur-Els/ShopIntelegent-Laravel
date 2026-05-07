@extends('layout.app')

@section('content')

    <hr>
    <!-- product -->
    <section class="jarak container d-flex">
        <div class="d-flex row row-cols-md-2 row-cols-1">
            <img class="border rounded w-25 col" src="{{ asset('images/placeholder.svg') }}" alt="">
            <div class="p-2 col">
                <h2>Product Name</h2>
                <p>$99.9</p>
                <h5>Description</h5>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis, odit nihil odio mollitia earum, deleniti tempora culpa aliquam alias, est ab. Eos, dicta quam! Totam dolor sunt temporibus cupiditate iure?</p>
                <div>
                    <button class="btn border border-dark">1 | +</button>
                    <button class="btn btn-dark">Add to Cart</button>
                </div>
            </div>
        </div>
    </section>

    <!-- related products -->
    <section class="container mt-4">
        <h2>Related Products</h2>
        <div class="row row-cols-3">
            <div class="border text-center col">
            <img class="w-50" src="{{ asset('images/placeholder.svg') }}" alt="">
            </div>

            <div class="border text-center col">
            <img class="w-50" src="{{ asset('images/placeholder.svg') }}" alt="">
            </div>

            <div class="border text-center col">
            <img class="w-50" src="{{ asset('images/placeholder.svg') }}" alt="">
            </div>
        </div>
    </section>

    <!-- related products kicil -->
    <section class="container mt-4">
        <h3>Related Products</h3>
        <div class="row row-cols-4">
            <div class="border text-center col">
            <img class="w-50" src="{{ asset('images/placeholder.svg') }}" alt="">
            </div>

            <div class="border text-center col">
            <img class="w-50" src="{{ asset('images/placeholder.svg') }}" alt="">
            </div>

            <div class="border text-center col">
            <img class="w-50" src="{{ asset('images/placeholder.svg') }}" alt="">
            </div>
        </div>
    <hr>
    </section>

@endsection