<!-- products -->
<div class="product-section mt-150 mb-150">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        @foreach ($filters as $filter)
                        <li data-filter=".{{ $filter->data }}">{{ $filter->title }}</li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>

        <div class="row product-lists">
            @foreach ($products as  $product)
            <div class="col-lg-4 col-md-6 text-center {{  $product->filter->data  }}">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="{{ route('product', $product->slug) }}"><img src="/images/product/{{ $product->image }}" alt=""></a>
                    </div>
                    <h3>{{ $product->title }}</h3>
                    <p class="product-price"><span>Per Kg</span> {{ $product->money }} </p>
                    <a href="{{ route('cart') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <nav class="d-inline-block">
                {{ $products->links() }}
            </nav>
        </div>
    </div>
</div>
<!-- end products -->
