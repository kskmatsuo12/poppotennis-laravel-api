<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Services\Test;
// use App\Facades\TestFacade; // useする
use App\Models\Item;
use App\Models\Post;
use Carbon\Carbon;

use DB;

class TestController extends Controller
{
    public function index()
    {
        // $items = Post::select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as date'),'title')
        //   ->take(10)
        //   ->get();
  
        // $items = $items->groupBy('date')->map(function($item) { return $item; });
        // dd($items);
        $today = Carbon::now()->format('Y-m');
        $start = $today.'-01 00:00:00';
        $end = $today.'-31 23:59:59';
        $posts = Post::where('created_at','>',$start)
                  ->where('created_at','<',$end)
                  ->get();
  
        $items = Item::select('title');
        $results = Post::select('title','created_at')
            ->union($items)
            ->whereNotNull('title')
            ->get();

        $user = \Test::getTestUser();
    }
}
