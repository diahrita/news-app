<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index()
    {
        $data = Article::with('category')->get();
        // $data = DB::table('articles')->get();
        return view('home.home', compact('data'));
    }
}
