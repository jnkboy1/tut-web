
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Create a new Article</h2>
            </div>
            <div class="col-md-10">
                <!-- <form method="post" action="/articles">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                    <!--<label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter the title">
                    <br>
                    <textarea id="editor" class="editor" name="body"></textarea>
                    <br>
                    <input type="text" name="tag" class="form-control" placeholder="Enter Tag for this Article; as- HTML">
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-md btn-success" value="Submit Article">
                        </div>
                    </div>
                </form> -->
                {!! Form::open([
                    'route' => 'articles.store'
                ]) !!}

                <div class="form-group">
                   {{-- {!! Form::label('t', 'Title:', ['class' => 'control-label']) !!}--}}
                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter title..']) !!}
                </div>

                <div class="form-group">
                    {{--{!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}--}}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {{--{!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}--}}
                    {!! Form::text('tag', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Submit Article', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>

    </div>
   
@endsection