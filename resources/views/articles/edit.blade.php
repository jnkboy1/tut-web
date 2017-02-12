

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit {{ $article->title }}</h2>
            </div>
            <div class="col-md-10">
                {!! Form::model($article, [
                    'method' => 'PATCH',
                    'route' => ['articles.update', $article->id]
                ]) !!}

                <div class="form-group">
                    {{--{!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}--}}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {{-- {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!} --}}
                    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {{--{!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}--}}
                    {!! Form::text('tag', null, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Update Article', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}
            </div>
        </div>

    </div>
   
@endsection