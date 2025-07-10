<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentationController extends Controller
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
                    'name' => 'Documentation',
                ],
                [
                    'name' => 'Send Message',
                    'link' => route('back.documentation.sendMessage')
                ],
            ],
        ];

        return view('back.pages.documentation.send-message', $data);
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
                    'name' => 'Documentation',
                ],
                [
                    'name' => 'Send Image',
                    'link' => route('back.documentation.sendImage')
                ],
            ],
        ];

        return view('back.pages.documentation.send-image', $data);
    }

    public function sendDocument(Request $request)
    {
        $data = [
            'title' => 'Documentation',
            'breadcrumbs' => [
                [
                    'name' => 'Home',
                    'link' => route('back.home.index')
                ],
                [
                    'name' => 'Documentation',
                ],
                [
                    'name' => 'Send Document',
                    'link' => route('back.documentation.sendDocument')
                ],
            ],
        ];

        return view('back.pages.documentation.send-document', $data);
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
                    'name' => 'Documentation',
                ],
                [
                    'name' => 'Send Bulk Message',
                    'link' => route('back.documentation.sendBulkMessage')
                ],
            ],
        ];

        return view('back.pages.documentation.send-bulk-message', $data);
    }
}
