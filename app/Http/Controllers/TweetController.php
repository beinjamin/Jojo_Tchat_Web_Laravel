<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets = Tweet::with('user')->get();
        return Inertia::render('Pages/Tweets/index.vue', [
            'tweets' => $tweets
        ]);
    }
}
