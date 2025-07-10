      <div class="card mb-12">
          <div class="card-body flex-column p-5">
              <div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
                  <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                      <h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">Dokumentasi Api</h1>
                      <p class="fw-semibold fs-6 fs-lg-5 text-gray-600 mb-5 mb-lg-10">Panduan lengkap untuk menggunakan
                          API kami, termasuk cara penggunaannya dengan berbagai bahasa pemrograman. <br>
                          Untuk memulai, silakan pilih salah satu opsi di bawah ini untuk melihat dokumentasi API yang
                          sesuai dengan kebutuhan Anda.</p>

                  </div>
                  <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                      <img src="{{ asset('back/media/illustrations/sketchy-1/17.png') }}" alt=""
                          class="mw-100 mh-125px mh-lg-275px mb-lg-n12" />
                  </div>
              </div>
              <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
                  <ul class="nav flex-wrap border-transparent fw-bold">
                      <li class="nav-item my-1">
                          <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase
                              {{ request()->routeIs('back.documentation.sendMessage') ? 'active' : '' }}"
                              href="{{ route('back.documentation.sendMessage') }}">Kirim Pesan</a>
                      </li>
                      <li class="nav-item my-1">
                          <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase
                              {{ request()->routeIs('back.documentation.sendImage') ? 'active' : '' }}"
                              href="{{ route('back.documentation.sendImage') }}">Kirim Pesan Dengan Gambar</a>
                      </li>
                      <li class="nav-item my-1">
                          <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase
                                {{ request()->routeIs('back.documentation.sendDocument') ? 'active' : '' }}"
                              href="{{ route('back.documentation.sendDocument') }}">Kirim Pesan Dengan Dokumen</a>
                      </li>
                      <li class="nav-item my-1">
                          <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase
                              {{ request()->routeIs('back.documentation.sendBulkMessage') ? 'active' : '' }}"
                              href="{{ route('back.documentation.sendBulkMessage') }}">Kirim Pesan Massal</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
