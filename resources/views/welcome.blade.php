@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <!-- <div class="panel panel-success">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    <form method="post" action="/status/create">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"/>
                        <div class="input-group">
                            <input type="text" placeholder="What's new?" name="status_text" class="form-control">
                            <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">Post</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div> -->
            @foreach($articles as $a) 
                <a href="articles/{{ $a->id }}">{{ $a->title }}</a> by {{ $a->user->name }} <span style="color:gray"> {{ $a->updated_at->diffForHumans() }}</span> 
                
                <div class="">
                    <a href="articles/{{ $a->id }}/edit" class="">Edit</a>
                    {!! Form::open([
                        'method' => 'DELETE',
                        'route' => ['articles.destroy', $a->id]
                    ]) !!}
                        {!! Form::submit('Delete this Article', ['class' => '']) !!}
                    {!! Form::close() !!}
                </div>
                <hr> 
                
            @endforeach
        </div>
    </div>
</div>
@endsection
