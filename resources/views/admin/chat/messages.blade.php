 @php
     $name = $user->s_email ?? 'User';
     $initials = strtoupper(mb_substr($name, 0, 2));
 @endphp
 <div class="chat-history-header border-bottom">
     <div class="d-flex justify-content-between align-items-center">
         <div class="d-flex overflow-hidden align-items-center">
             <i class="ti ti-menu-2 ti-sm cursor-pointer d-lg-none d-block me-2" data-bs-toggle="sidebar" data-overlay
                 data-target="#app-chat-contacts"></i>
             <div class="flex-shrink-0 avatar">
                 <div
                     style="width: 35px; height: 35px; background: #7367f0; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                     {{ $initials }}
                 </div>
             </div>
             <div class="chat-contact-info flex-grow-1 ms-2">
                 <h6 class="mb-2">{{ $user->s_email }}</h6>
             </div>
         </div>

     </div>
 </div>
 <div class="chat-history-body bg-body">
     <ul class="list-unstyled chat-history">

         @foreach ($messages as $msg)
             @if ($msg->is_from_admin)
                 <li class="chat-message chat-message-right">
                     <div class="d-flex overflow-hidden">
                         <div class="chat-message-wrapper flex-grow-1">
                             <div class="chat-message-text">
                                 <p class="mb-0">{{ $msg->message }}</p>
                             </div>
                             <div class="text-end text-muted mt-1">
                                 {{-- <i class="ti ti-checks ti-xs me-1 text-success"></i> --}}
                                 <small>{{ $msg->dt_created_date->format('h:i A') }}</small>
                             </div>
                         </div>
                         <div class="user-avatar flex-shrink-0 ms-3 pe-3">
                             <div class="avatar avatar-sm">
                                 <div
                                     style="width: 35px; height: 35px; background:rgb(39, 165, 10); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                     Me
                                 </div>
                             </div>
                         </div>
                     </div>
                 </li>
             @else
                 <li class="chat-message">
                     <div class="d-flex overflow-hidden">
                         <div class="user-avatar flex-shrink-0 me-3">
                             <div class="avatar avatar-sm">
                                 <div
                                     style="width: 30px; height: 30px; background: #7367f0; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                     {{ $initials }}
                                 </div>
                             </div>
                         </div>
                         <div class="chat-message-wrapper flex-grow-1">
                             <div class="chat-message-text">
                                 <p class="mb-0"> {{ $msg->message }}</p>

                             </div>
                             <div class="text-muted mt-1">
                                 <small>{{ $msg->dt_created_date->format('h:i A') }}</small>
                             </div>
                         </div>
                     </div>
                 </li>
             @endif
             {{-- <div class="flex {{ $msg->is_from_admin ? 'justify-end' : 'justify-start' }}">
                 <div
                     class="max-w-md px-4 py-2 rounded-lg {{ $msg->is_from_admin ? 'bg-purple-500 text-white' : 'bg-gray-200' }}">
                     {{ $msg->message }}
                     <div class="text-xs mt-1 text-right opacity-70">
                         {{ $msg->dt_created_date->format('h:i A') }}
                     </div>
                 </div>
             </div> --}}
         @endforeach

     </ul>
 </div>
 <!-- Chat message form -->
 <div class="chat-history-footer shadow-sm">
     <form class="form-send-message d-flex justify-content-between align-items-center" action="{{ route('admin.chat.send') }}" method="POST">
     @csrf
         <input class="form-control message-input border-0 me-3 shadow-none" placeholder="Type your message here" name="message"/>
         <input type="hidden" value="{{ auth()->user()->pk_i_id }}" name="fk_i_user_id">
         <div class="message-actions d-flex align-items-center">

             <button class="btn btn-primary d-flex send-msg-btn">
                 <i class="ti ti-send me-md-1 me-0"></i>
                 <span class="align-middle d-md-inline-block d-none">Send</span>
             </button>
         </div>
     </form>
 </div>
