<?php

namespace codetech\Http\Controllers;

use Illuminate\Http\Request;

use codetech\Http\Requests;
use Illuminate\Support\Facades\Input;
use Auth;
use codetech\Status;
use codetech\Like;

class StatusController extends Controller
{
    
    public function create()
    {
        $st = Input::only('status_text');
        $user = Auth::user();
        $text = $st['status_text'];
        $status = new Status;
        //$status->setTable('status');
        $status->text = $text;
        $status->user_id = $user->id;
        $status->save();
        return redirect('/');

    }

    public function destroy($id)
    {
        $status = Status::find($id);
        if(is_logged_in())
        {

            if($status->user_id === get_logged_in_user()->id)
            {
                $status->delete();
                return redirect('/');
            }
            else{
                flash('You can\'t delete other users\'s posts!','danger');
                return redirect('/');
            }
        }
        else{
            return redirect('/login');
        }
        //return $next($request);
    }

    public function like($id)
    {
        if(Auth::guest())
        {
            return redirect()->guest('/login');
        }
        else{
            $likes = Like::whereStatusId($id)->whereUserId(Auth::user()->id);
            if(!is_null($likes))
            {
                #flash('Already liked', 'danger');
               // return redirect('/');
               $data = "Already liked";
               return $data;
            }
            else{
                $like = new Like;
                $status = Status::find($id);
                $user = Auth::user();
                $like->status_id = $status->id;
                $like->user_id = $user->id;
                $like->save();
                return $status->likes->count();
            }
        }
        return $next($request);
        
    }

    // public function unlike($id)
    // {
    //     $user = Auth::user();
    //     if(!is_null($user))
    //     {
    //         $like = Like::find
    //     }
    // }
}
