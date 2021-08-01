<div class="container">
    @foreach ($articles as $article)
        <div class="article-title">
            <h3>
                {{ $article->title }}
            </h3>
        </div>
        <div class="article-date">
            <p>
                2021-9-1
            </p>
        </div>
        <div class="article-content">
            <p>
                {{ $article->content }}
            </p>
        </div>
    @endforeach
</div>
