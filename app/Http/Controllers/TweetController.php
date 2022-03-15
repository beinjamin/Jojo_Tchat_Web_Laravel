<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::with('user')->orderBy('created_at', 'DESC')->get();
        //dd($tweets);
        return Inertia::render('Tweets/Index', [
            'tweets' => $tweets
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => ['required', 'max:250'],
            'user_id' => ['exists:users,id']
        ]);
    }
}
