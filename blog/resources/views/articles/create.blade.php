@extends('app')
@section('content')
    <h1 align="center">Create New Article</h1>
    <br/>
    {!! Form::open(['url'=>'article/store']) !!}
    <div class="form-group">
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('introduction','Introduction:') !!}
        {!! Form::text('introduction',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tag_list','Tag:') !!}
        {!! Form::select('tag_list[]',$tags,null,['class'=>'form-control js-example-basic-multiple','multiple'=>'multiple']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('author','Author:') !!}
        {!! Form::text('author',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content','Content:') !!}
        {!! Form::textarea('content',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('published_at','Publish Time:') !!}
        {!! Form::input('date','published_at',date('Y-m-d'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Publish Article',['class'=>'btn btn-success form-control']) !!}
    </div>
    {!! Form::close() !!}

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