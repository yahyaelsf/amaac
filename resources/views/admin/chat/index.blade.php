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
                            @php
                                $name = $chatUser->s_email ?? 'User';
                                $initials = strtoupper(mb_substr($name, 0, 2));
                                $colors = ['#EF4444', '#3B82F6', '#10B981', '#F59E0B', '#8B5CF6', '#EC4899'];
                                $color = $colors[array_rand($colors)];
                            @endphp
                            <li class="chat-contact-list-item chat-contact" data-user-id="{{ $chatUser->pk_i_id }}">
                                <a class="d-flex align-items-center">
                                    <div class="flex-shrink-0 avatar ">
                                        {{-- <img src="{{ asset('admin/assets/img/avatars/13.png') }}" alt="Avatar"
                                            class="rounded-circle" /> --}}
                                        <div
                                            style="width: 35px; height: 35px; background: {{ $color }}; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                            {{ $initials }}
                                        </div>
                                    </div>

                                    <div class="chat-contact-info flex-grow-1 ms-2">
                                        <h6 class="chat-contact-name text-truncate m-0">{{ $chatUser->s_email }}</h6>
                                        <p class="chat-contact-status text-muted text-truncate mb-0">
                                            {{ \App\Models\Message::where('fk_i_user_id', $chatUser->pk_i_id)->latest()->first()?->message }}
                                        </p>
                                    </div>
                                    {{-- <small class="text-muted mb-auto">5 Minutes</small> --}}
                                    <input type="hidden" name="fk_i_user_id" value="{{ $chatUser->pk_i_id }}">

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
                    <div id="chat-window" class="flex-1 overflow-y-auto space-y-3">
                        {{-- Loaded via AJAX --}}
                    </div>
                </div>
            </div>






            <div class="app-overlay"></div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('admin/assets/js/app-chat.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).on('click', '.chat-contact', function() {
            let userId = $(this).data('user-id');

            $.get(`/admin/chat/messages/${userId}`, function(data) {
                $('#chat-window').html(data);
                $('input[name="fk_i_user_id"]').val(userId); // update hidden input for send form
            });
            $('.chat-contact').removeClass('active'); // remove from all
            $(this).addClass('active'); // add to clicked one
        });
    </script>
@endpush
