<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Home',
             'breadcrumbs' => [
                [
                    'name' => 'Home',
                    'link' => route('back.home.index')
                ],
                [
                    'name' => 'sd',
                    'link' => route('back.home.index')
                ],
            ],
        ];
        return view('back.pages.home.index', $data);
    }
}
