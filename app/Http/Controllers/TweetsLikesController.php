<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetsLikesController extends Controller
{
    public function store(Tweet $tweet)
    {
        return $tweet->like(current_user());
    }

    public function destroy(Tweet $tweet)
    {
        return $tweet->dislike(current_user());
    }
}
