
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <b>{{ $article->title }}</b>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                {!! $article->body !!}
            </div>
        </div>
    </div>
@endsection