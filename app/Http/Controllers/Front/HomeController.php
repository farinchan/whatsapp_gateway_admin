<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'page_title' => 'Home',
            'title' => 'Home',
            'breadcrumbs' => [
                [
                    'name' => 'Home',
                    'link' => route('home.index')
                ],
            ],
            'blogs' => Blog::where('status', 'published')->latest()->take(6)->get(),
        ];

        return view('front.pages.home', $data);
    }
}
