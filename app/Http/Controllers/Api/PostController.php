<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $content = $request->content;
        //$user情報をとりたいときは
        $user = $request->user();
        // $userId = $request->user()->id;
        return response()->json(compact('content','user'),200);
    }
}
