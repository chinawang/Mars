@extends('app')
@section('content')
    <h1 align="center">Edit Article</h1>
    <br/>
    {{--{!! Form::open(['url'=>'article/store']) !!}--}}
    {!! Form::model($article,['url'=>'article/update']) !!}
    {!! Form::hidden('id',$article->id) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',$article->title,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('introduction','Introduction:') !!}
        {!! Form::text('introduction',$article->introduction,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tag_list','Tag:') !!}
        {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control js-example-basic-multiple','multiple'=>'multiple']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('author','Author:') !!}
        {!! Form::text('author',$article->author,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content','Content:') !!}
        {!! Form::textarea('content',$article->content,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at','Publish Time:') !!}
        {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Article',['class'=>'btn btn-success form-control']) !!}
    </div>
    {!! Form::close() !!}

    <ul>
        <li>{{ $article_tags }}</li>
        <li>{{ $article->published_at }}</li>
    </ul>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <script type="text/javascript">
        $(function() {
            $(".js-example-basic-multiple").select2({
                placeholder: "Add Tags"
            });
        });
    </script>

@endsection