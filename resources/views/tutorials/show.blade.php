
@extends('layouts.tutorial')

@section('styles')

@endsection
@section('navbar')
    <div class="navbar navbar-default navbar-fixed-left">
  <a class="navbar-brand" href="#">HTML</a>
  <ul class="nav navbar-nav">
   <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
     <ul class="dropdown-menu" role="menu">
      <li><a href="#" >Sub Menu1</a></li>
      <li><a href="#">Sub Menu2</a></li>
      <li><a href="#">Sub Menu3</a></li>
      <li class="divider"></li>
      <li><a href="#">Sub Menu4</a></li>
      <li><a href="#">Sub Menu5</a></li>
     </ul>
   </li>
   @foreach($tutorials as $t)
    <li><a href="/articles/{{ $t->id }}" class="ln-tut-left" data-art-id="{{ $t->id }}">{{ $t->title }}</a></li>
   @endforeach
  </ul>
</div>
<div class="container">
 <div class="row" id="ajax-container">
   <div id="loading">
        <img src="{{ URL::asset('img/ring-alt.gif') }}" class="center" style="margin-left:400px;margin-top:200px">
   </div>
 </div>
</div>
@endsection
@section('content')
@endsection