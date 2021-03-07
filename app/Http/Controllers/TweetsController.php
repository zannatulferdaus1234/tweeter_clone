<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Models\User;

class TweetsController extends Controller
{
   // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('tweets.index',[
            'tweets' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'body' => 'required|max:255'
        ]);
        Tweet::create([
            'user_id'=> auth()->id(),
            'body' => $attributes['body'],
        ]);

        return redirect()->route('home');

    }
}
