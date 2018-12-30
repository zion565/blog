<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class DeshboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = DB::table('posts')
                     ->where('user_id', $user_id)
                     ->orderBy('id','desc')
                     ->get();
        //$user = User::find($user_id);

       // $user = User::orderBy('created_at','desc');
        //return view('deshboard')->with('posts',$user->posts);
        return view('deshboard')->with('posts',$user);
    }
}
