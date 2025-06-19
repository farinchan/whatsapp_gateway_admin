<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true"
    data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
    data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <div class="card-title">
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Fajri -  Support Team</a>
                    <div class="mb-0 lh-1">
                        <span class="badge badge-secondary badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Offline</span>
                    </div>
                </div>
            </div>
            <div class="card-toolbar">
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-outline ki-cross-square fs-2"></i>
                </div>
            </div>
        </div>
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">

                <div class="d-flex justify-content-start mb-10 ">
                    <div class="d-flex flex-column align-items-start">
                        <div class="d-flex align-items-center mb-2">
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                    src="{{ asset("back/media/avatars/300-25.jpg") }}" /></div>
                            <div class="ms-3">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Support</a>
                                <span class="text-muted fs-7 mb-1">2 mins</span>
                            </div>
                        </div>
                        <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                            data-kt-element="message-text">
                            Ada yang bisa kami bantu ? </div>
                    </div>
                </div>

                {{-- <div class="d-flex justify-content-end mb-10 ">
                    <div class="d-flex flex-column align-items-end">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-3">
                                <span class="text-muted fs-7 mb-1">5 mins</span>
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                            </div>
                            <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                    src="{{ asset("back/media/avatars/300-1.jpg") }}" /></div>
                        </div>
                        <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                            data-kt-element="message-text">
                            Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on
                            GitHub. </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                placeholder="Type a message"></textarea>
            <div class="d-flex flex-stack">
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                        data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-outline ki-paper-clip fs-3"></i> </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                        data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-outline ki-cloud-add fs-3"></i> </button>
                </div>
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
            </div>
        </div>
    </div>
</div>
