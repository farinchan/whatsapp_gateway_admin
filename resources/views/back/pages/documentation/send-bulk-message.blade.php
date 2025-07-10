@extends('back.app')
@section('styles')
    <link href="{{ asset('back/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class=" container-xxl ">
        @include('back.pages.documentation.header')
        <div class="card card-flush mb-5">

            <div class="card-header mt-6">

                <div class="card-title">
                    <h2 class="">
                        Send Bulk Message
                    </h2>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-5">
                    <h4 class="mb-3">API Endpoint</h4>
                    <p class="mb-4">
                        Endpoint ini digunakan untuk mengirim pesan WhatsApp secara massal menggunakan API. Anda perlu menyediakan <code>session</code> yang valid, nilai <code>delay</code> (dalam milidetik) antar pesan, dan array <code>data</code> berisi daftar nomor tujuan (<code>to</code>) beserta isi pesan (<code>text</code>) yang akan dikirim.
                    </p>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 150px;">Method</th>
                            <td><span class="badge badge-success">POST</span></td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><code>{{ route('api.v1.whatsapp.send-bulk-message') }}</code></td>
                        </tr>
                        <tr>
                            <th>Headers</th>
                            <td>
                                <ul class="mb-0">
                                    <li><code>Accept: application/json</code></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th>Body</th>
                            <td>
                                <pre class="mb-0"><code>{
    "session": "YOUR_SESSION_ID",
    "delay" : 2000,
    "data" : [
        {
            "to" : "62xxxxxxxxxxx",
            "text" : "YOUR_MESSAGE_TEXT_1"
        },
        {
            "to" : "62xxxxxxxxxxx",
            "text" : "YOUR_MESSAGE_TEXT_2"
        },
        {
            "to": "6289613390766",
            "urlDocument": "https://your-url.test/your-document.pdf",
            "fileName": "your-document.pdf",
            "caption": "Hei, Check this Document"
        }
        ...
    ]
 }</code></pre>
                            </td>
                        </tr>
                        <tr>
                            <th>Response</th>
                            <td>
                                <pre class="mb-0"><code>{
    "status": "success",
    "data": {
        "message": "Bulk Message is Processing"
    }
 }</code></pre>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
        <div class="card card-flush mb-5">

            <div class="card-header mt-6">

                <div class="card-title">
                    <h2 class="">
                        Documentation
                    </h2>
                </div>
                <div class="card-toolbar">
                    <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#curl">cURL</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-bs-toggle="tab" href="#php">PHP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#javascript">Javascript</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#python">Python</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#go">Go</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#iot">IoT</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="curl" role="tabpanel">
                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                            <div class="highlight-code">
                                <pre class="language-bash" tabindex="0"><code class="language-bash">
<span class="token bash language-bash"><span class="token comment"># Contoh cURL untuk POST API Send Bulk Whatsapp Message</span>
curl -X POST '{{ route('api.v1.whatsapp.send-bulk-message') }}' \
  -H 'Accept: application/json' \
  -H 'Content-Type: application/json' \
  -d '{
    "session": "YOUR_SESSION_ID",
    "delay": 2000,
    "data": [
      {
        "to": "62xxxxxxxxxxx",
        "text": "YOUR_MESSAGE_TEXT_1"
      },
      {
        "to": "62xxxxxxxxxxx",
        "text": "YOUR_MESSAGE_TEXT_2"
      }
    ]
}'
</span>
                                </code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="php" role="tabpanel">
                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                            <div class="highlight-code">
                                <pre class="language-php" tabindex="0"><code class="language-php">
<span class="token php language-php"><span class="token delimiter important">&lt;?php</span>
// Contoh PHP Native untuk POST API Send Bulk Whatsapp Message
$url = '{{ route('api.v1.whatsapp.send-bulk-message') }}';
$data = [
    'session' => 'YOUR_SESSION_ID',
    'delay' => 2000,
    'data' => [
        [
            'to' => '62xxxxxxxxxxx',
            'text' => 'YOUR_MESSAGE_TEXT_1'
        ],
        [
            'to' => '62xxxxxxxxxxx',
            'text' => 'YOUR_MESSAGE_TEXT_2'
        ]
    ]
];
$options = [
    'http' => [
        'header'  => "Content-type: application/json\r\nAccept: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data)
    ]
];
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$response = json_decode($result, true);
print_r($response);
</span>
                                </code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="javascript" role="tabpanel">
                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                            <div class="highlight-code">
                                <pre class="language-javascript" tabindex="0"><code class="language-javascript">
<span class="token javascript language-javascript">// Contoh JavaScript untuk POST API Send Bulk Whatsapp Message
fetch('{{ route('api.v1.whatsapp.send-bulk-message') }}', {
    method: 'POST',
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        session: 'YOUR_SESSION_ID',
        delay: 2000,
        data: [
            {
                to: '62xxxxxxxxxxx',
                text: 'YOUR_MESSAGE_TEXT_1'
            },
            {
                to: '62xxxxxxxxxxx',
                text: 'YOUR_MESSAGE_TEXT_2'
            }
        ]
    })
})
.then(response => response.json())
.then(data => {
    console.log(data);
})
.catch(error => {
    console.error(error);
});
</span>
                                </code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="python" role="tabpanel">
                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                            <div class="highlight-code">
                                <pre class="language-python" tabindex="0"><code class="language-python">
<span class="token python language-python"># Contoh Python untuk POST API Send Bulk Whatsapp Message
import requests
import json

url = '{{ route('api.v1.whatsapp.send-bulk-message') }}'
headers = {
    'Accept': 'application/json',
    'Content-Type': 'application/json'
}
payload = {
    'session': 'YOUR_SESSION_ID',
    'delay': 2000,
    'data': [
        {
            'to': '62xxxxxxxxxxx',
            'text': 'YOUR_MESSAGE_TEXT_1'
        },
        {
            'to': '62xxxxxxxxxxx',
            'text': 'YOUR_MESSAGE_TEXT_2'
        }
    ]
}

response = requests.post(url, headers=headers, data=json.dumps(payload))
data = response.json()
print(data)
</span>
                                </code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="go" role="tabpanel">
                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                            <div class="highlight-code">
                                <pre class="language-clike" tabindex="0"><code class="language-clike">
<span class="token go language-clike">// Contoh Go untuk POST API Send Bulk Whatsapp Message
package main

import (
    "bytes"
    "encoding/json"
    "fmt"
    "io/ioutil"
    "net/http"
)

func main() {
    url := "{{ route('api.v1.whatsapp.send-bulk-message') }}"
    payload := map[string]interface{}{
        "session": "YOUR_SESSION_ID",
        "delay":   2000,
        "data": []map[string]string{
            {
                "to":   "62xxxxxxxxxxx",
                "text": "YOUR_MESSAGE_TEXT_1",
            },
            {
                "to":   "62xxxxxxxxxxx",
                "text": "YOUR_MESSAGE_TEXT_2",
            },
        },
    }
    jsonData, _ := json.Marshal(payload)

    req, _ := http.NewRequest("POST", url, bytes.NewBuffer(jsonData))
    req.Header.Set("Accept", "application/json")
    req.Header.Set("Content-Type", "application/json")

    client := &http.Client{}
    resp, err := client.Do(req)
    if err != nil {
        fmt.Println("Error:", err)
        return
    }
    defer resp.Body.Close()

    body, _ := ioutil.ReadAll(resp.Body)
    fmt.Println(string(body))
}
</span>
                                </code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="iot" role="tabpanel">
                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                            <div class="highlight-code">
                                <pre class="language-clike" tabindex="0"><code class="language-clike">
// Contoh ESP32 (Arduino) untuk POST API Send Bulk Whatsapp Message
#include WiFi.h
#include HTTPClient.h

const char* ssid = "YOUR_WIFI_SSID";
const char* password = "YOUR_WIFI_PASSWORD";
const char* serverUrl = "{{ route('api.v1.whatsapp.send-bulk-message') }}";

void setup() {
  Serial.begin(115200);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("WiFi connected");

  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    http.begin(serverUrl);
    http.addHeader("Content-Type", "application/json");
    http.addHeader("Accept", "application/json");

    String payload = "{\"session\":\"YOUR_SESSION_ID\",\"delay\":2000,\"data\":[{\"to\":\"62xxxxxxxxxxx\",\"text\":\"YOUR_MESSAGE_TEXT_1\"},{\"to\":\"62xxxxxxxxxxx\",\"text\":\"YOUR_MESSAGE_TEXT_2\"}]}";
    int httpResponseCode = http.POST(payload);

    if (httpResponseCode > 0) {
      String response = http.getString();
      Serial.println(response);
    } else {
      Serial.print("Error on sending POST: ");
      Serial.println(httpResponseCode);
    }
    http.end();
  }
}

void loop() {
  // kosongkan loop
}
</code></pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!--end::Container-->
@endsection

@section('scripts')
    <script src="{{ asset('back/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
@endsection
