@extends('app')
@section('content')
    <article class="format-image group">
        <h2 class="post-title pad">
            <a href="/articles/{{ $article->id }}" rel="bookmark">{{ $article->title }}</a>
        </h2>
        <ul class="post-meta pad group">
            <li>
                {{ $article->published_at }}
            </li>
            <li>
                {{ $article->author }}
            </li>
        </ul>
        <ul class="post-meta pad group">
            @if($article->tags)
                @foreach($article->tags as $tag)
                    <li>
                        <i class="fa fa-tag"></i>
                        {{ $tag->name }}
                    </li>
                @endforeach
            @endif
        </ul>

        <div class="post-inner">
            <div class="post-content pad">
                <div class="entry custome">
                    {{ $article->content }}
                </div>
            </div>
        </div>
    </article>
    <br/>
    <a class="more-link-custom" href="/article/edit/{{ $article->id }}">
        <span>
            <i>
                Edit This Article
            </i>
        </span>
    </a>
    <a class="more-link-custom" href="/article/delete/{{ $article->id }}">
        <span>
            <i>
                Delete This Article
            </i>
        </span>
    </a>
@endsection