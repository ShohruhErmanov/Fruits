<!-- latest news -->
<div class="latest-news pt-150 pb-150">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> News</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($news as $new)
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-news">
                    <a href="{{ route('news', $new->slug) }}"><img src="/images/news/{{ $new->image }}" alt=""></a>
                    <div class="news-text-box">
                        <h3><a href="{{ route('news', $new->slug) }}">{{ $new->title }}</a></h3>
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> {{ $new->created_at->format('m M Y') }}</span>
                        </p>
                        <p class="excerpt">{{ \Str::limit($new->text) }}</p>
                        <a href="{{ route('news', $new->slug) }}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="{{ route('new', $new->slug) }}" class="boxed-btn">More News</a>
            </div>
        </div>
    </div>
</div>
<!-- end latest news -->
