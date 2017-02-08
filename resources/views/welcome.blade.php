@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-2">
            <div class="panel panel-success">
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
            </div>
            @foreach($status as $s) 
                <b>{{ $s->text }}</b> by {{ $s->user->name }} <span style="color:gray"> {{ $s->created_at->diffForHumans() }}</span> 
                <hr> 
                <a href="status/{{ $s->id }}/like" data-status-id="{{ $s->id }}" class="like_status"><span class="fa fa-heart"></span></a>
                <span id="likes_count">{{ $s->likes->count() }}</span>
                <br>
            @endforeach
        </div>
    </div>
</div>
@endsection
