@extends('admin.layouts.dashboard')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/css/pages/app-chat.css') }}" />
@endpush
@section('content')
    <div class="app-chat card overflow-hidden">
        <div class="row g-0">


            <!-- Chat & Contacts -->
            <div class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end" id="app-chat-contacts">

                <hr class="container-m-nx m-0" />
                <div class="sidebar-body">
                    <div class="chat-contact-list-item-title">
                        <h5 class="text-primary mb-0 px-4 pt-3 pb-2">Chats</h5>
                    </div>
                    <!-- Chats -->
                    <ul class="list-unstyled chat-contact-list" id="chat-list">
                        <li class="chat-contact-list-item chat-list-item-0 d-none">
                            <h6 class="text-muted mb-0">No Chats Found</h6>
                        </li>
                        @foreach ($allUsers as $chatUser)
                        <li class="chat-contact-list-item">
                            <a class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar avatar-online">
                                    <img src="{{ asset('admin/assets/img/avatars/13.png') }}" alt="Avatar"
                                        class="rounded-circle" />
                                </div>
                                <div class="chat-contact-info flex-grow-1 ms-2">
                                    <h6 class="chat-contact-name text-truncate m-0">{{ $chatUser->s_email }}</h6>
                                    <p class="chat-contact-status text-muted text-truncate mb-0">
                                        {{ \App\Models\Message::where('fk_i_user_id', $chatUser->pk_i_id)->latest()->first()?->message }}
                                    </p>
                                </div>
                                <small class="text-muted mb-auto">5 Minutes</small>
                            </a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>
            <!-- /Chat contacts -->

            <!-- Chat History -->
            <div class="col app-chat-history bg-body">
                <div class="chat-history-wrapper">
                    <div class="chat-history-header border-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex overflow-hidden align-items-center">
                                <i class="ti ti-menu-2 ti-sm cursor-pointer d-lg-none d-block me-2"
                                    data-bs-toggle="sidebar" data-overlay data-target="#app-chat-contacts"></i>
                                <div class="flex-shrink-0 avatar">
                                    <img src="{{ asset('admin/assets/img/avatars/2.png') }}" alt="Avatar"
                                        class="rounded-circle" data-bs-toggle="sidebar" data-overlay
                                        data-target="#app-chat-sidebar-right" />
                                </div>
                                <div class="chat-contact-info flex-grow-1 ms-2">
                                    <h6 class="m-0">Felecia Rower</h6>
                                    <small class="user-status text-muted">NextJS developer</small>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="chat-history-body bg-body">
                        <ul class="list-unstyled chat-history">
                            {{-- <li class="chat-message chat-message-right">
                                <div class="d-flex overflow-hidden">
                                    <div class="chat-message-wrapper flex-grow-1">
                                        <div class="chat-message-text">
                                            <p class="mb-0">How can we help? We're here for you! 😄</p>
                                        </div>
                                        <div class="text-end text-muted mt-1">
                                            <i class="ti ti-checks ti-xs me-1 text-success"></i>
                                            <small>10:00 AM</small>
                                        </div>
                                    </div>
                                    <div class="user-avatar flex-shrink-0 ms-3">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('admin/assets/img/avatars/1.png') }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="chat-message">
                                <div class="d-flex overflow-hidden">
                                    <div class="user-avatar flex-shrink-0 me-3">
                                        <div class="avatar avatar-sm">
                                            <img src="{{ asset('admin/assets/img/avatars/2.png') }}" alt="Avatar"
                                                class="rounded-circle" />
                                        </div>
                                    </div>
                                    <div class="chat-message-wrapper flex-grow-1">
                                        <div class="chat-message-text">
                                            <p class="mb-0">Hey John, I am looking for the best admin template.</p>
                                            <p class="mb-0">Could you please help me to find it out? 🤔</p>
                                        </div>
                                        <div class="chat-message-text mt-2">
                                            <p class="mb-0">It should be Bootstrap 5 compatible.</p>
                                        </div>
                                        <div class="text-muted mt-1">
                                            <small>10:02 AM</small>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            
                        </ul>
                    </div>
                    <!-- Chat message form -->
                    <div class="chat-history-footer shadow-sm">
                        <form class="form-send-message d-flex justify-content-between align-items-center">
                            <input class="form-control message-input border-0 me-3 shadow-none"
                                placeholder="Type your message here" />
                            <div class="message-actions d-flex align-items-center">

                                <button class="btn btn-primary d-flex send-msg-btn">
                                    <i class="ti ti-send me-md-1 me-0"></i>
                                    <span class="align-middle d-md-inline-block d-none">Send</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Chat History -->



            <div class="app-overlay"></div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('admin/assets/js/app-chat.js') }}"></script>
@endpush
