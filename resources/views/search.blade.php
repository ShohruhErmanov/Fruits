@extends('layouts.site')
@section('title')
    Search
@endsection
@section('content')


<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Search</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->
    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                </div>
            </div>

            @if (count($products) > 0)
            <h2 class="news__title">{{ $key  }} <br> so'zi bo'yicha qidiruv natijalari: {{ count($products) }}</h2>
            @else
            <h1>{{ $key }}</h1> <h3>bu so'z orqali malumot topilmadi.</h3>
            @endif


            <div class="row">
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="{{ route('product', $product->slug) }}"><img
                                        src="/images/product/{{ $product->image }}" alt=""></a>
                            </div>
                            <h3>{{ $product->title }}</h3>
                            <p class="product-price"><span>Per Kg</span> {{ $product->money }} </p>
                            <a href="{{ route('cart') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end product section -->
@endsection
