<!-- single product -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="/images/product/{{ $fruits->image }}" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{ $fruits->title }}</h3>
                    <p class="single-product-pricing"><span>Per Kg</span> {{ $fruits->money }}</p>
                    <p>{{ $fruits->text }}</p>
                    <div class="single-product-form">
                        <a href="{{ route('cart') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single product -->
