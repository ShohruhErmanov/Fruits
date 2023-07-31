<!-- latest news -->
<div class="latest-news mt-150 mb-150">
    <div class="container">
        <div class="row">
            @foreach ($news as $new)
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ route('news', $new->slug) }}"><img src="/images/news/{{ $new->image }}" alt=""></a>
                        <div class="news-text-box">
                            <h3><a href="{{ route('news', $new->slug) }}">{{ $new->title }}</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i>
                                    {{ $new->created_at->format('m M Y') }}</span>
                            </p>
                            <p class="excerpt">{{ \Str::limit($new->text) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center">
            <nav class="d-inline-block">
                {{ $news->links() }}
            </nav>
        </div>
    </div>
</div>
<!-- end latest news -->
