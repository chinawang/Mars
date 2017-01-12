@extends('app')
@section('content')
    @foreach($article_list as $article)
    <article class="format-image group">
        <h2>
            <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
            {{--<a href="{{ action('ArticleController@detail',[$article->id]) }}">{{ $article->title }}</a>--}}
        </h2>
        <ul class="post-meta pad group">
            <li><i class="fa fa-clock-o"></i>{{ $article->published_at }}</li>
            @if($article->tags)
                @foreach($article->tags as $tag)
                <li><i class="fa fa-tag"></i>{{ $tag->name }}</li>
                @endforeach
            @endif
        </ul>
        <div class="post-inner">
            <div class="post-deco">
                <div class="hex hex-small">
                    <div class="hex-inner"><i class="fa"></i></div>
                    <div class="corner-1"></div>
                    <div class="corner-2"></div>
                </div>
            </div>
            <div class="post-content pad">
                <div class="entry custome">
                    {{ $article->introduction }}
                </div>
                <a class="more-link-custom" href="/articles/{{ $article->id }}"><span><i>查看详细</i></span></a>
            </div>
        </div>
    </article>
    @endforeach
    <br/>
    <a class="more-link-custom" href="/article/create">
        <span>
            <i>
                Create New Article
            </i>
        </span>
    </a>
@endsection