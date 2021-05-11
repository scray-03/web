<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Visitor;
use App\Helpers\UserSystemInfoHelper;


class GuestController extends Controller
{
    public function index()
    {
        $last_news = News::orderby('id', 'desc')->take(6)->get();
        $pop_news = News::orderby('visitors', 'desc')->take(5)->get();
        $side_news = News::orderby('id', 'desc')->take(8)->get();
        return view('index', compact('last_news', 'pop_news', 'side_news'));
    }
    public function category($id)
    {
        $category = Category::get();
        $cat = Category::where('id', $id)->first();
        $cat_news = News::where('cat_id', $id)->orderby('id', 'desc')->get();
        $side_news = News::orderby('id', 'desc')->take(8)->get();
        return view('category', compact('category', 'cat', 'cat_news', 'side_news'));
    }
    public function post($id)
    {
        $getip = UserSystemInfoHelper::get_ip();
        $NewVisitor = new Visitor;
        $NewVisitor->ip = $getip;
        $NewVisitor->news_id = $id;
        $NewVisitor->save();
        $visitor_count = Visitor::where('news_id' , $id)->distinct('ip')->count();
        $news_visitors = News::findOrfail($id);
        $news_visitors->visitors = $visitor_count;
        $news_visitors->save();
        $post = News::where('id', $id)->first();
        $side_news = News::orderby('id', 'desc')->take(8)->get();
        return view('post', compact('post', 'side_news'));
    }
    public function search(Request $request)
    {
        $results = News::where('title', 'LIKE', "%{$request->search}%")->get();
        $side_news = News::orderby('id', 'desc')->take(8)->get();
        return view('search', compact('results','side_news'));
    }
}
