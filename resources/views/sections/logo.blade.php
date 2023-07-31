<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    @foreach ($logoes as $logo)
                    <div class="single-logo-item">
                        <img src="/images/logo/{{ $logo->image }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel -->
