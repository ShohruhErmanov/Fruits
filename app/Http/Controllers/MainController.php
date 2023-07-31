<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Product;
use App\Models\Banner;
use App\Models\Testimons;
use App\Models\News;
use App\Models\Logo;
use App\Models\Network;
use App\Models\Filter;
use App\Models\Comment;
use App\Models\Contact;

class MainController extends Controller
{
    public function index()
    {
        $networks = Network::all();
        $logoes = Logo::all();
        $news = News::latest()->paginate(3);
        $testimons = Testimons::all();
        $banners = Banner::all();
        $products = Product::latest()->paginate(3);
        $features = Feature::all();
        return view('index', compact('features', 'products', 'banners', 'testimons', 'news', 'logoes', 'networks'));
    }

    public function about()
    {
        $testimons = Testimons::all();
        $logoes = Logo::all();
        $networks = Network::all();
        return view('about', compact('testimons', 'logoes', 'networks'));
    }

    public function new()
    {
        $networks = Network::all();
        $logoes = Logo::all();
        $news = News::latest()->paginate(6);
        return view('news', compact('logoes', 'networks', 'news'));
    }

    public function contact()
    {
        $contacts = Contact::all();
        $networks = Network::all();
        return view('contact', compact('networks', 'contacts'));
    }

    public function shop()
    {
        $filters = Filter::all();
        $products = Product::latest()->paginate(6);
        $networks = Network::all();
        $logoes = Logo::all();
        return view('shop', compact('logoes', 'networks', 'products', 'filters'));
    }

    public function cart()
    {
        $networks = Network::all();
        $logoes = Logo::all();
        return view('cart', compact('logoes', 'networks'));
    }

    public function product($slug)
    {
         $products = Product::latest()->paginate(3);
         $logoes = Logo::all();
         $networks = Network::all();
         $fruits = Product::where('slug', $slug)->first();
        return view('singleproduct', compact('products', 'logoes', 'networks', 'fruits'));
    }

    public function news($slug)
    {
        $comments = Comment::latest()->paginate(10);
        $networks = Network::all();
        $logoes = Logo::all();
        $posts = News::where('slug', $slug)->first();
        return view('singlenews', compact('networks', 'logoes', 'comments', 'posts'));
    }

    public function search (Request $request)
    {
        $key = $request->key;
        $products = Product::where('title', 'like', '%' . $key . '%')->get();
        $networks = Network::all();
        return view('search', compact('key', 'products', 'networks'));
    }
}
