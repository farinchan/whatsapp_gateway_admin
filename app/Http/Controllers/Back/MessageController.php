<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\WaSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function sendMessage(Request $request)
    {
        $data = [
            'title' => 'Documentation',
            'breadcrumbs' => [
                [
                    'name' => 'Home',
                    'link' => route('back.home.index')
                ],
                [
                    'name' => 'Message',
                ],
                [
                    'name' => 'Send Message',
                    'link' => route('back.documentation.sendMessage')
                ],
            ],
            'sessions' => WaSession::where('user_id', Auth::id())->get(),
        ];

        return view('back.pages.message.send-message', $data);
    }

    public function sendImage(Request $request)
    {
        $data = [
            'title' => 'Documentation',
            'breadcrumbs' => [
                [
                    'name' => 'Home',
                    'link' => route('back.home.index')
                ],
                [
                    'name' => 'Message',
                ],
                [
                    'name' => 'Send Image',
                    'link' => route('back.documentation.sendImage')
                ],
            ],
            'sessions' => WaSession::where('user_id', Auth::id())->get(),

        ];

        return view('back.pages.message.send-image', $data);
    }

    public function sendImageProcess(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'session' => 'required|exists:wa_sessions,session_name',
                'phone' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'message' => 'nullable|string',
            ],
            [
                'session.required' => 'Session is required',
                'session.exists' => 'Session does not exist',
                'phone.required' => 'Phone number is required',
                'image.required' => 'Image is required',
                'image.image' => 'The file must be an image',
                'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg',
                'image.max' => 'The image may not be greater than 2MB',
            ]
        );
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', $validator->errors()->first());
        }

        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . Auth::id() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('upload', $fileName, 'public');
        }
        try {
            $response = Http::post(route('api.v1.whatsapp.send-image'), [
                'session' => $request->session,
                'phone' => $request->phone,
                'image' => Storage::url($imagePath),
                // 'image' => "https://upload.wikimedia.org/wikipedia/id/b/b0/Kamen_rider_eurodata.png",
                'message' => $request->message,
            ]);
            return redirect()->back()->with('success', $response->json()['message'] ?? '-');
        } catch (\Throwable $th) {
            // If there is an error, you can redirect back with an error message
            return redirect()->back()->with('error', 'An error occurred: ' . $th->getMessage());
        }


        return redirect()->back()->with('success', 'Image sent successfully');
    }


    public function sendBulkMessage(Request $request)
    {
        $data = [
            'title' => 'Documentation',
            'breadcrumbs' => [
                [
                    'name' => 'Home',
                    'link' => route('back.home.index')
                ],
                [
                    'name' => 'Message',
                ],
                [
                    'name' => 'Send Bulk Message',
                    'link' => route('back.documentation.sendBulkMessage')
                ],
            ],
            'sessions' => WaSession::where('user_id', Auth::id())->get(),

        ];

        return view('back.pages.message.send-bulk-message', $data);
    }

    public function sendBulkMessageProcess(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'session' => 'required|exists:wa_sessions,session_name',
                'delay' => 'nullable|integer|min:1000',
                'phones' => 'required|array',
                'message' => 'required|string',
            ],
            [
                'session.required' => 'Session is required',
                'session.exists' => 'Session does not exist',
                'delay.integer' => 'Delay must be an integer',
                'delay.min' => 'Delay must be at least 1000 milliseconds',
                'phone.required' => 'Phone numbers are required',
                'phone.array' => 'Phone numbers must be an array',
                'phone.*.required' => 'Each phone number is required',
                'message.required' => 'Message is required',
            ]
        );
        // dd($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error', $validator->errors()->first());
        }

        try {
            $data = [];
            foreach ($request->phones as $phone) {
                $data[] = [
                    'to' => $phone['phone'],
                    'text' => $request->message,
                ];
            }
            $response = Http::post(route('api.v1.whatsapp.send-bulk-message'), [
                'session' => $request->session,
                'delay' => $request->delay ?? 1000, // Default to 1000 milliseconds if not provided
                'data' => $data,
            ]);

            return redirect()->back()->with('success', $response->json()['message'] ?? '-');
        } catch (\Throwable $th) {
            // If there is an error, you can redirect back with an error message
            return redirect()->back()->with('error', 'An error occurred: ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Bulk message sent successfully');
    }
}
