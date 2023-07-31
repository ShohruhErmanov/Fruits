<!-- single article section -->
<div class="mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-article-section">
                    <div class="single-article-text">
                       <img src="/images/news/{{ $posts->image }}" alt="">
                        <p class="blog-meta">
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> {{ $posts->created_at->format('m M, Y') }}</span>
                        </p>
                        <h2>{{ $posts->title }}</h2>
                        <p>{{ $posts->text }}</p>
                    </div>

                    <div class="comments-list-wrap">
                        <h3 class="comment-count-title">Comments</h3>
                        <div class="comment-list">
                            @foreach ($comments as $comment)
                            <div class="single-comment-body">
                                <div class="comment-text-body">
                                    <h4>{{ $comment->name }} <span class="comment-date">{{ $comment->created_at->format('M m, Y') }}</span> <a href="#">reply</a></h4>
                                    <p>{{ $comment->text }}</p>
                                </div>

                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="comment-template">
                        <h4>Leave a comment</h4>
                        <p>If you have a comment dont feel hesitate to send us your opinion.</p>
                        <form action="{{ route('admin.comment.store') }}" method="POST">
                            @csrf
                            <p>
                                <input type="text" placeholder="Your Name" name="name">
                                <input type="email" placeholder="Your Email" name="email">
                            </p>
                            <p><textarea name="text" id="comment" cols="30" rows="10" placeholder="Your Message"></textarea></p>
                            <p><input type="submit" value="Submit"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end single article section -->
