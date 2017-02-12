
@extends('layouts.tutorial')

@section('styles')
table { margin: 0 auto; } 
textarea, iframe { width: 500px; height: 500px; }
.link { font-family: Verdana, Geneva, sans-serif; font-weight: bold; font-size: 12px; color: #008000; }
.h1 { color: #008000; }
#btn-run{
    border-radius:0px;
    background:#34a853;
}
#btn-reset{
    border-radius:0px;
}
#view{
    border:1px solid #d7eafa;
    min-height:413px;
    box-shadow:0px 0px 5px #bbb;
}
#code{
    box-shadow:0px 0px 7px #bbb;
}
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Codex Editor</h3>
            </div>
            <div class="col-md-6">
                <h3>Output</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" id="ctn-code">
                <textarea id="code" placeholder="Write your code here.." autocorrect="off" spellcheck="false" style="background:#2c2c2c;color:white;border-radius:0px" name="code" rows="20" class="form-control"></textarea>
                <button class="btn btn-success" id="btn-run"><span class="fa fa-play"></span>&nbsp;&nbsp;Run</button>
                <button class="btn btn-info" id="btn-reset"><span class="fa fa-undo"></span>&nbsp;&nbsp;Reset</button>
            </div>
            <div class="col-md-6" id="view">
                <div id="codex-loading">Loading..</div>
            </div>            
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ URL::asset('js/codextab.js') }}"></script> 
    <script src="{{ URL::asset('js/codexcolors.js') }}"></script>     
@endsection