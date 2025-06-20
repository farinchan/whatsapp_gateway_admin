@extends('back.app')
@section('content')
    <!--begin::Container-->
    <div id="kt_content_container" class=" container-xxl ">
        <div class="card card-flush mb-5">

            <div class="card-header mt-6">

                <div class="card-title">
                    <h2 class="mb-5">
                        Whatsapp Session
                    </h2>
                </div>
                <div class="card-toolbar">
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <a href="#" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#add_session">
                            <i class="ki-duotone ki-plus fs-2"></i>Tambah session</a>

                        <div class="modal fade" tabindex="-1" id="add_session">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Tambah Session Whatsapp</h3>

                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <form action="{{ route('back.home.createSession') }}" method="post">
                                        @csrf

                                        <div class="modal-body">
                                            <div class="mb-10">
                                                <label class="form-label required">Nama Session</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon3">
                                                        {{ Str::slug(substr(Auth::user()->name, 0, 5)) }}{{ Auth::user()->id }}_
                                                    </span>
                                                    <input type="text" class="form-control" name="session_name" required
                                                        value="{{ old('session_name') }}" aria-describedby="basic-addon3"
                                                        placeholder="Nama Session Whatsapp">
                                                </div>
                                                @error('session_name')
                                                    <small class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                                <small class="text-muted">Session nama tidak menggunakan spasi,</small>


                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label required">No Telp</label>

                                                <input type="text" class="form-control" name="phone_number" required
                                                    value="{{ old('phone_number') }}" placeholder="No Telp Whatsapp"
                                                    aria-label="No Telp Whatsapp" aria-describedby="basic-addon3">
                                                @error('phone_number')
                                                    <small class="text-danger">
                                                        {{ $message }}
                                                    </small>
                                                @enderror
                                                <small class="text-muted">No telp menggunakan kode negara di depan tanpa
                                                    spasi atau strip, contoh: (<code>+628xxx</code>)</small>


                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="card-body pt-0">
                <select class="form-select" aria-label="Select example">
                    @foreach ($sessions as $session)
                        <option value="{{ $session->id }}"
                            {{ $session->id == request('session') ? 'selected' : '' }}>
                            {{ $session->session_name    }} ({{ $session->phone_number }})
                        </option>

                    @endforeach
                </select>

            </div>
        </div>
        <div class="card card-flush">

            <div class="card-header mt-6">
                <h2 class="mb-5">
                    Whatsapp API Setting
                </h2>
            </div>

            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-md-5">
                        <div class="fv-row mb-10 px-10">
                            <label class="fw-bold fs-6 mb-2">Status Server</label>
                            <div class="border  rounded mt-3">
                                <div class="text-center ">
                                    <p class="text-gray-700 fs-3 fw-bold py-7" id="status_server">
                                        Loading...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="fv-row mb-10 px-10">
                            <label class="fw-bold fs-6 mb-2">Session Whatsapp</label>
                            <div class="border  rounded mt-3">
                                <div class="text-center ">
                                    <p class="text-gray-700 fs-3 fw-bold py-7" id="status_whatsapp">
                                        Loading...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid mb-10 px-10">
                            <button class="btn btn-flex btn-primary px-6 justify-content-center mb-5" id="start_button">
                                <i class="fa-solid fa-play fs-2x"></i>
                                <span class="d-flex flex-column align-items-start ms-2">
                                    <span class="fs-3 fw-bold">Start</span>
                                    <span class="fs-7">Hubungkan Ke whatsapp</span>
                                </span>
                            </button>
                            <button class="btn btn-flex btn-danger px-6 justify-content-center mb-5" id="stop_button">
                                <i class="fa-solid fa-stop fs-2x"></i>
                                <span class="d-flex flex-column align-items-start ms-2">
                                    <span class="fs-3 fw-bold">Stop</span>
                                    <span class="fs-7">Matikan koneksi whatsapp</span>
                                </span>
                            </button>
                            <button class="btn btn-flex btn-warning px-6 justify-content-center mb-5" id="reset_button">
                                <i class="fa-solid fa-repeat fs-2x"></i>
                                <span class="d-flex flex-column align-items-start ms-2">
                                    <span class="fs-3 fw-bold">reset</span>
                                    <span class="fs-7">hubungkan kembali ke whatsapp</span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="border border-hover-primary rounded mt-3">
                            <div class="text-center pt-15 pb-15">
                                <h2 class="fs-2x fw-bold mb-0">Whatsapp QR Code</h2>
                                <p class="text-gray-500 fs-4 fw-semibold py-7" id="info">
                                    Silahkan scan QR Code untuk menghubungkan ke Whatsapp API <br>
                                    Qr Code akan berubah setiap 30 detik
                                </p>
                                <img class="p-10" style="width: 100%" alt="" id="qr_code">
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
    <script>
        $(document).ready(function() {
            let status_server = $('#status_server');
            let status_whatsapp = $('#status_whatsapp');
            let qr_code = $('#qr_code');
            let info = $('#info');
            let start_button = $('#start_button');
            let stop_button = $('#stop_button');
            let reset_button = $('#reset_button');


            function getMySession() {
                $.ajax({
                    url: '{{ route('api.whatsapp.get-my-session') }}',
                    type: 'GET',
                    success: function(response) {
                        // console.log(response);
                        status_whatsapp.text(`${response.status} (${response.message})`);
                        if (response.status === 'Terhubung') {
                            info.html(
                                'Anda Sudah Terhubung ke Whatsapp API <br> Klik Stop Untuk Mematikan Koneksi'
                            );
                            start_button.hide();
                            stop_button.show();
                            reset_button.show();
                        } else {
                            info.html(
                                'Anda Belum Terhubung ke Whatsapp API, Silahkan Klik Start Untuk Terhubung'
                            );

                            start_button.show();
                            stop_button.hide();
                            reset_button.hide();
                        }
                    },
                    error: function(error) {
                        console.log(error);
                        status_whatsapp.text('Error (Error Get Session)');
                    }
                });
            }

            function stopSession() {
                $.ajax({
                    url: '{{ route('api.whatsapp.delete-session') }}',
                    type: 'POST',
                    success: function(response) {
                        console.log(response);
                        getMySession();
                    },
                    error: function(error) {
                        console.log(error);
                        status_whatsapp.text('Error (Error Stop Session)');
                    }
                });
            }

            function startSession() {
                start_button.attr('disabled', true);
                ws.send(JSON.stringify({
                    "session": "{{ env('WHATSAPP_API_SESSION') }}",
                }));
            }


            const ws = new WebSocket('{{ env('WHATSAPP_API_WEBSOCKET_URL') }}');
            ws.onopen = function() {
                console.log('Connected to WebSocket Server');
                status_server.text('Terhubung (WebSocket Connected)');

            };

            ws.onmessage = (e) => {
                console.log('Message:', e.data);
                let data = JSON.parse(e.data);
                if (data.type === 'qr') {
                    qr_code.attr('src', data.qr);
                    info.html(
                        'Silahkan scan QR Code untuk menghubungkan ke Whatsapp API <br> Qr Code akan berubah setiap 30 detik'
                    );
                }
            };

            ws.onerror = function(error) {
                console.log('WebSocket Error ', error);
                status_server.text('Error (WebSocket Error)');
            };
            ws.onclose = () => {
                console.log('WebSocket Closed');
                status_server.text('Tidak Terhubung (WebSocket Closed)');
            };



            getMySession();

            stop_button.click(function() {
                stopSession();
            });
            start_button.click(function() {
                startSession();
            });

            reset_button.click(function() {
                stopSession();
                setTimeout(() => {
                    startSession();
                }, 1000);
            });

        });
    </script>
@endsection
