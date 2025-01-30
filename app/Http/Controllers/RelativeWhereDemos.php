<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class RelativeWhereDemos extends Controller
{
    public function __invoke(Request $request)
    {
        Post::query()
            ->where('published_at', '>', now())
            ->where('expire_at', '<', now())
            ->dumpRawSql();
    }
}
