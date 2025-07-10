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
                        Send Document
                    </h2>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-5">
                    <h4 class="mb-3">API Endpoint</h4>
                    <p class="mb-4">
                        Endpoint ini digunakan untuk mengirim gambar melalui pesan WhatsApp menggunakan API. Anda perlu
                        menyediakan <code>session</code> yang valid, nomor <code>to</code> tujuan, URL <code>urlDocument</code>
                        yang akan dikirim, dan isi <code>caption</code> opsional.
                    </p>
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 150px;">Method</th>
                            <td><span class="badge badge-success">POST</span></td>
                        </tr>
                        <tr>
                            <th>URL</th>
                            <td><code>https://api.wa-gateway.torkatatech.com/send-document</code></td>
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
    "to" : "62xxxxxxxxxxx",
    "urlDocument" : "https://your-url.test/your-document.pdf",
    "fileName" : "your-document.pdf",
    "caption" : "YOUR_MESSAGE_TEXT"
 }</code></pre>
                            </td>
                        </tr>
                        <tr>
                            <th>Response</th>
                            <td>
                                <pre class="mb-0"><code>{
    "data": {
        "id": "3EB0xxxxxxxxxxxxxx",
        "status": 1,
        "message": "Not Text",
        "remoteJid": "628xxxxxxxxxxx@s.whatsapp.net"
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
<span class="token bash language-bash"><span class="token comment"># Contoh cURL untuk POST API Send Whatsapp document</span>
curl -X POST 'https://api.wa-gateway.torkatatech.com/send-document' \
  -H 'Accept: application/json' \
  -H 'Content-Type: application/json' \
  -d '{
    "session": "YOUR_SESSION_ID",
    "to": "62xxxxxxxxxxx",
    "urlDocument": "YOUR_document_URL",
    "fileName": "your-document.pdf",
    "caption": "YOUR_MESSAGE_TEXT"
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
                    <span class="token comment">// Contoh PHP Native untuk POST API Send Whatsapp document</span>
                    <span class="token variable">$url</span> = <span class="token string single-quoted-string">'https://api.wa-gateway.torkatatech.com/send-document'</span>;
                    <span class="token variable">$data</span> = [
                        <span class="token string single-quoted-string">'session'</span> =&gt; <span class="token string single-quoted-string">'YOUR_SESSION_ID'</span>,
                        <span class="token string single-quoted-string">'to'</span> =&gt; <span class="token string single-quoted-string">'62xxxxxxxxxxx'</span>,
                        <span class="token string single-quoted-string">'urlDocument'</span> =&gt; <span class="token string single-quoted-string">'YOUR_document_URL'</span>,
                        <span class="token string single-quoted-string">'fileName'</span> =&gt; <span class="token string single-quoted-string">'your-document.pdf'</span>,
                        <span class="token string single-quoted-string">'caption'</span> =&gt; <span class="token string single-quoted-string">'YOUR_MESSAGE_TEXT'</span>
                    ];
                    <span class="token variable">$options</span> = [
                        <span class="token string single-quoted-string">'http'</span> =&gt; [
                            <span class="token string single-quoted-string">'header'</span>  =&gt; <span class="token string single-quoted-string">"Content-type: application/json\r\nAccept: application/json\r\n"</span>,
                            <span class="token string single-quoted-string">'method'</span>  =&gt; <span class="token string single-quoted-string">'POST'</span>,
                            <span class="token string single-quoted-string">'content'</span> =&gt; <span class="token function">json_encode</span>(<span class="token variable">$data</span>)
                        ]
                    ];
                    <span class="token variable">$context</span>  = <span class="token function">stream_context_create</span>(<span class="token variable">$options</span>);
                    <span class="token variable">$result</span> = <span class="token function">file_get_contents</span>(<span class="token variable">$url</span>, <span class="token keyword">false</span>, <span class="token variable">$context</span>);
                    <span class="token variable">$response</span> = <span class="token function">json_decode</span>(<span class="token variable">$result</span>, <span class="token keyword">true</span>);
                    <span class="token function">print_r</span>(<span class="token variable">$response</span>);
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
                    <span class="token javascript language-javascript"><span class="token comment">// Contoh JavaScript untuk POST API Send Whatsapp document</span>
                    <span class="token keyword">fetch</span>(<span class="token string single-quoted-string">'https://api.wa-gateway.torkatatech.com/send-document'</span>, {
                        <span class="token property">method</span>: <span class="token string single-quoted-string">'POST'</span>,
                        <span class="token property">headers</span>: {
                            <span class="token string single-quoted-string">'Accept'</span>: <span class="token string single-quoted-string">'application/json'</span>,
                            <span class="token string single-quoted-string">'Content-Type'</span>: <span class="token string single-quoted-string">'application/json'</span>
                        },
                        <span class="token property">body</span>: <span class="token function">JSON</span>.<span class="token function">stringify</span>({
                            <span class="token string single-quoted-string">'session'</span>: <span class="token string single-quoted-string">'YOUR_SESSION_ID'</span>,
                            <span class="token string single-quoted-string">'to'</span>: <span class="token string single-quoted-string">'62xxxxxxxxxxx'</span>,
                            <span class="token string single-quoted-string">'urlDocument'</span>: <span class="token string single-quoted-string">'YOUR_document_URL'</span>,
                            <span class="token string single-quoted-string">'fileName'</span>: <span class="token string single-quoted-string">'your-document.pdf'</span>,
                            <span class="token string single-quoted-string">'caption'</span>: <span class="token string single-quoted-string">'YOUR_MESSAGE_TEXT'</span>
                        })
                    })
                    .<span class="token function">then</span>(<span class="token keyword">response</span> =&gt; response.<span class="token function">json</span>())
                    .<span class="token function">then</span>(<span class="token keyword">data</span> =&gt; {
                        <span class="token function">console</span>.<span class="token function">log</span>(<span class="token keyword">data</span>);
                    })
                    .<span class="token function">catch</span>(<span class="token keyword">error</span> =&gt; {
                        <span class="token function">console</span>.<span class="token function">error</span>(<span class="token keyword">error</span>);
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
                    <span class="token python language-python"><span class="token comment"># Contoh Python untuk POST API Send Whatsapp document</span>
                    <span class="token keyword">import</span> requests
                    <span class="token keyword">import</span> json

                    <span class="token variable">url</span> = <span class="token string single-quoted-string">'https://api.wa-gateway.torkatatech.com/send-document'</span>
                    <span class="token variable">headers</span> = {
                        <span class="token string single-quoted-string">'Accept'</span>: <span class="token string single-quoted-string">'application/json'</span>,
                        <span class="token string single-quoted-string">'Content-Type'</span>: <span class="token string single-quoted-string">'application/json'</span>
                    }
                    <span class="token variable">payload</span> = {
                        <span class="token string single-quoted-string">'session'</span>: <span class="token string single-quoted-string">'YOUR_SESSION_ID'</span>,
                        <span class="token string single-quoted-string">'to'</span>: <span class="token string single-quoted-string">'62xxxxxxxxxxx'</span>,
                        <span class="token string single-quoted-string">'urlDocument'</span>: <span class="token string single-quoted-string">'YOUR_document_URL'</span>,
                        <span class="token string single-quoted-string">'fileName'</span>: <span class="token string single-quoted-string">'your-document.pdf'</span>,
                        <span class="token string single-quoted-string">'caption'</span>: <span class="token string single-quoted-string">'YOUR_MESSAGE_TEXT'</span>
                    }

                    <span class="token variable">response</span> = requests.<span class="token function">post</span>(<span class="token variable">url</span>, headers=<span class="token variable">headers</span>, data=json.dumps(<span class="token variable">payload</span>))
                    <span class="token variable">data</span> = response.<span class="token function">json</span>()
                    print(<span class="token variable">data</span>)
                    </code></pre>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="go" role="tabpanel">
                        <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                data-bs-original-title="Copy code" data-kt-initialized="1">copy</button>
                            <div class="highlight-code">
                                <pre class="language-clike" tabindex="0"><code class="language-clike">
<span class="token go language-clike"><span class="token comment">// Contoh Go untuk POST API Send Whatsapp document</span>
<span class="token keyword">package</span> main

<span class="token keyword">import</span> (
    <span class="token string">"bytes"</span>
    <span class="token string">"encoding/json"</span>
    <span class="token string">"fmt"</span>
    <span class="token string">"io/ioutil"</span>
    <span class="token string">"net/http"</span>
)

<span class="token keyword">func</span> <span class="token function">main</span>() {
    url := <span class="token string">"https://api.wa-gateway.torkatatech.com/send-document"</span>
    payload := map[string]string{
        <span class="token string">"session"</span>: <span class="token string">"YOUR_SESSION_ID"</span>,
        <span class="token string">"to"</span>:   <span class="token string">"62xxxxxxxxxxx"</span>,
        <span class="token string">"urlDocument"</span>:   <span class="token string">"YOUR_document_URL"</span>,
        <span class="token string">"fileName"</span>: <span class="token string">"your-document.pdf"</span>,
        <span class="token string">"caption"</span>: <span class="token string">"YOUR_MESSAGE_TEXT"</span>,
    }
    jsonData, _ := json.Marshal(payload)

    req, _ := http.NewRequest(<span class="token string">"POST"</span>, url, bytes.NewBuffer(jsonData))
    req.Header.Set(<span class="token string">"Accept"</span>, <span class="token string">"application/json"</span>)
    req.Header.Set(<span class="token string">"Content-Type"</span>, <span class="token string">"application/json"</span>)

    client := &http.Client{}
    resp, err := client.Do(req)
    <span class="token keyword">if</span> err != nil {
        fmt.Println(<span class="token string">"Error:"</span>, err)
        <span class="token keyword">return</span>
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
// Contoh ESP32 (Arduino) untuk POST API Send Whatsapp document
#include WiFi.h
#include HTTPClient.h

const char* ssid = "YOUR_WIFI_SSID";
const char* password = "YOUR_WIFI_PASSWORD";
const char* serverUrl = "https://api.wa-gateway.torkatatech.com/send-document";

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

    String payload = "{\"session\":\"YOUR_SESSION_ID\",\"to\":\"62xxxxxxxxxxx\",\"urlDocument\":\"YOUR_document_URL\",\"fileName\":\"YOUR_document_URL\",\"caption\":\"YOUR_MESSAGE_TEXT\"}";
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
