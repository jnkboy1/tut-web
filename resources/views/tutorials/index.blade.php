
@extends('layouts.tutorial')

@section('styles')

@endsection

@section('content')
<div class="container">
  <div>
    <h1>Tutorials Library</h1>
  </div>
  <div class="row">
    @foreach(["HTML", "CSS", "PHP"] as $a)
      <div class="col-md-4 tut-lib" data-tut-id="{{ $a }}">
        <a href="tutorial/{{ strtolower($a)}}" style="color:white;text-decoration:none">{{ $a }}</a>
      </div>
    @endforeach
  </div>
</div>
@endsection
@section('script')
  $(function(){
    var tutLibs = $('.tut-lib');
    var rowWidth = $('.row').width();
    var rowHeight = $('.row').height();
    tutLibs.each(function(index){
      var colors = ["teal", "green", "gray"];
      $(this).css({'width':rowWidth/5,'cursor':'pointer','height':90,'color':'white','font-size':'50px','text-align':'center',
      'margin-left':'100px','background':colors[index],'box-shadow':'4px 4px 5px #bbb','border-radius':'14%'});
    });
  });
@endsection