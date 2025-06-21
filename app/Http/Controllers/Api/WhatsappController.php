<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsappController extends Controller
{
    private $url_wa;
    private $secret_key;

    public function __construct()
    {
        $this->url_wa = env('WHATSAPP_API_URL');
        $this->secret_key = env('WHATSAPP_API_SECRET');
    }

    public function getAllSessions(Request $request)
    {
        try {
            $response_wa = Http::get($this->url_wa  . "/sessions?key=" . $this->secret_key);

            if ($response_wa->status() != 200) {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to get all sessions',
                    'error' => $response_wa->json(),
                ];

                return response()->json($response, $response_wa->status());
            } else {
                $response = [
                    'status' => 'success',
                    'data' => $response_wa->json()['data'],
                ];

                return response()->json($response);
            }
        } catch (\Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage(),
            ];

            return response()->json($response, 500);
        }
    }

    public function getMySession(Request $request)
    {
        $session = $request->session;
        if (!$session) {
            return response()->json([
                'status' => 'error',
                'message' => 'Session is required',
            ], 400);
        }
        try {
            $response_wa = Http::get($this->url_wa  . "/sessions?key=" . $this->secret_key);

            if ($response_wa->status() != 200) {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to get session',
                    'error' => $response_wa->json(),
                ];

                return response()->json($response, $response_wa->status());
            } else {
                if (in_array($session, $response_wa->json()['data'])) {
                    $response = [
                        'status' => 'Terhubung',
                        'message' => 'Session found',
                        'data' => $response_wa->json()['data'],
                    ];

                    return response()->json($response);
                } else {
                    $response = [
                        'status' => 'Tidak Terhubung',
                        'message' => 'Session not found',
                    ];

                    return response()->json($response);
                }
            }
        } catch (\Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage(),
            ];

            return response()->json($response, 500);
        }
    }


    public function deleteSession(Request $request)
    {
        $session = $request->session;
        if (!$session) {
            return response()->json([
                'status' => 'error',
                'message' => 'Session is required',
            ], 400);
        }
        try {
            $response_wa = Http::get($this->url_wa  . "/delete-session", [
                'session' => $session,
            ]);

            if ($response_wa->status() != 200) {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to delete session',
                    'error' => $response_wa->json(),
                ];

                return response()->json($response, $response_wa->status());
            } else {
                $response = [
                    'status' => 'success',
                    'message' => 'Session deleted successfully',
                ];

                return response()->json($response);
            }
        } catch (\Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage(),
            ];

            return response()->json($response, 500);
        }
    }

    public function sendMessage(Request $request)
    {
        $session = $request->session;
        if (!$session) {
            return response()->json([
                'status' => 'error',
                'message' => 'Session is required',
            ], 400);
        }
        try {
            $response_wa = Http::post($this->url_wa  . "/send-message", [
                'session' => $session,
                'to' => $request->phone,
                'text' => $request->message
            ]);

            if ($response_wa->status() != 200) {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to send message',
                    'error' => $response_wa->json(),
                ];

                return response()->json($response, $response_wa->status());
            } else {
                $response = [
                    'status' => 'success',
                    'message' => 'Message sent successfully',
                ];

                return response()->json($response);
            }
        } catch (\Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage(),
            ];

            return response()->json($response, 500);
        }
    }

    public function sendBulkMessage(Request $request)
    {
        // example of request data
        // {
        //     "delay": 1000,
        //     "data": [
        //         {
        //             "to": "6281234567890",
        //             "text": "Hello, this is a message",
        //             "isGroup": false
        //         },
        //         {
        //             "to": "6281234567891",
        //             "text": "Hello, this is a message",
        //             "isGroup": false
        //         }
        //     ]
        // }
        $session = $request->session;
        if (!$session) {
            return response()->json([
                'status' => 'error',
                'message' => 'Session is required',
            ], 400);
        }
        try {
            $response_wa = Http::post($this->url_wa  . "/send-bulk-message", [
                'session' => $session,
                'delay' => $request->delay,
                'data' => $request->data
            ]);

            if ($response_wa->status() != 200) {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to send bulk message',
                ];

                return response()->json($response, $response_wa->status());
            } else {
                $response = [
                    'status' => 'success',
                    'message' => 'Bulk message sent successfully',
                ];

                return response()->json($response);
            }
        } catch (\Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage(),
            ];

            return response()->json($response, 500);
        }
    }

    public function sendImage(Request $request)
    {
        $session = $request->session;
        if (!$session) {
            return response()->json([
                'status' => 'error',
                'message' => 'Session is required',
            ], 400);
        }
        try {
            $response_wa = Http::post($this->url_wa  . "/send-image", [
                'session' => $session,
                'to' => $request->phone,
                'urlImage' => $request->image,
                'text' => $request->message
            ]);

            if ($response_wa->status() != 200) {
                $response = [
                    'status' => 'error',
                    'message' => 'Failed to send image',
                ];

                return response()->json($response, $response_wa->status());
            } else {
                $response = [
                    'status' => 'success',
                    'message' => 'Image sent successfully',
                ];

                return response()->json($response);
            }
        } catch (\Exception $e) {
            $response = [
                'status' => 'error',
                'message' => $e->getMessage(),
            ];

            return response()->json($response, 500);
        }
    }
}
