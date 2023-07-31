<!-- features list section -->
<div class="list-section pt-80 pb-80">
    <div class="container">

        <div class="row">
           @foreach ($features as $feature)
           <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="list-box d-flex align-items-center">
                <div class="list-icon">
                    <i class="{{ $feature->icon }}"></i>
                </div>
                <div class="content">
                    <h3>{{ $feature->title }}</h3>
                    <p>{{ $feature->text }}</p>
                </div>
            </div>
        </div>
           @endforeach
        </div>

    </div>
</div>
<!-- end features list section -->
