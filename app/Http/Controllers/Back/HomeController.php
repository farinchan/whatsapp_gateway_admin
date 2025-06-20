<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\WaSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'title' => 'Whatsapp Setting',
            'breadcrumbs' => [
                [
                    'name' => 'Home',
                    'link' => route('back.home.index')
                ],
            ],
            'sessions' => WaSession::where('user_id', Auth::id())->get(),
        ];
        return view('back.pages.home.index', $data);
    }

    public function createSession(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'session_name' => 'required|max:150|unique:wa_sessions,session_name',
            'phone_number' => 'required|max:15'
        ],  [
            'session_name.required' => 'Session name is required',
            'session_name.max' => 'Session name must not exceed 150 characters',
            'phone_number.required' => 'Phone number is required',
            'phone_number.max' => 'Phone number must not exceed 15 characters',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', 'Session creation failed due to validation errors.');
        }

        WaSession::create([
            'session_name' => Str::slug(substr(Auth::user()->name, 0, 5)) . Auth::user()->id  . '_' . $request->session_name,
            'phone_number' => $request->phone_number,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Session created successfully.');
    }
}
