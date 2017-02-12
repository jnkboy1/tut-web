<?php

namespace codetech\Http\Controllers;

use Illuminate\Http\Request;

use codetech\Http\Requests;

class CodexController extends Controller
{
    public function index(Request $request)
    {
        $param = $request->input('type');
        return view('codex.index',compact('param'));
    }

    public function result(Request $request)
    {
        $code = $request->input('code');
        return $code;
    }
}
