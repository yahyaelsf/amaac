@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        [dir="rtl"] .form-check-rtl {
            display: flex;
            gap: 15px;
        }

        [dir="rtl"] .form-check-rtl .form-check-input {
            margin-left: 0;
            margin-right: 0;
        }
                /* Modal Overlay */
        .amaa-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(11, 58, 83, 0.85);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        /* Modal Box */
        .amaa-modal {
            background: #ffffff;
            max-width: 460px;
            width: 90%;
            padding: 35px 30px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            animation: scaleIn 0.35s ease;
        }

        /* Icon */
        .amaa-modal-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background: #0B3A53;
            color: #fff;
            font-size: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Title */
        .amaa-modal h3 {
            color: #0B3A53;
            font-size: 22px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        /* Text */
        .amaa-modal p {
            color: #555;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        /* Animation */
        @keyframes scaleIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }
    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/team/WhatsApp Image 2025-12-19 at 12.04.541AM.jpeg') }}'); background-position: center center;
        background-size: cover;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary "> {{ __('team.page_title') }}</h1>
                    {{-- <span class="sub-title">Building Bridges of Understanding and Cooperation</span> --}}
                </div>
                {{-- <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Team</li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="page-header page-header-modern bg-primary">
        <div class="container">
            <form action="{{ route('membership.send') }}" method="POST" enctype="multipart/form-data">
                @csrf
                 @if (session('success'))
                            <div id="successModal" class="amaa-modal-overlay">
                                <div class="amaa-modal">
                                    <div class="amaa-modal-icon">
                                        ✓
                                    </div>

                                    <h3>{{ __('general.contact_page.form.success') }}</h3>

                                    <p>
                                        Thank you for reaching out to AMAA Council.
                                        Your message has been successfully sent and our team will contact you shortly.
                                    </p>

                                    <button onclick="closeSuccessModal()" class="btn btn-secondary btn-modern">
                                        Close
                                    </button>
                                </div>
                            </div>
                        @endif
                <!-- A) Basic Information -->
                <div class="card mb-4 bg-primary text-color-secondary">
                    <div class="card-body">
                        <h4 class="mb-3 text-color-secondary"> {{ __('form.basic_information') }}</h4>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label> {{ __('form.full_name') }}</label>
                                <input type="text" name="full_name" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label> {{ __('form.email') }}</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.phone') }}</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.location') }}</label>
                                <input type="text" name="location" class="form-control" required>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.timezone') }} </label>
                                <select name="timezone" class="form-control">
                                    <option value="">{{ __('form.select') }}</option>
                                    <option>UTC-5</option>
                                    <option>UTC-6</option>
                                    <option>UTC+0</option>
                                    <option>UTC+2</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.languages') }}</label>
                                <select name="languages[]" class="form-control select2" multiple>
                                    <option>Arabic</option>
                                    <option>English</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.linkedin') }}</label>
                                <input type="url" name="linkedin" class="form-control">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.photo') }}</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <h4 class="mb-3 text-color-secondary">{{ __('form.professional_profile') }}</h4>

                            <div class="col-md-4 mb-3">
                                <label>{{ __('form.current_title') }}</label>
                                <input type="text" name="current_title" class="form-control" required>
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>{{ __('form.organization') }}</label>
                                <input type="text" name="organization" class="form-control">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>{{ __('form.experience_years') }}</label>
                                <select name="experience_years" class="form-control" required>
                                    <option>0–2</option>
                                    <option>3–5</option>
                                    <option>6–10</option>
                                    <option>10+</option>
                                </select>
                            </div>

                            <label>{{ __('form.expertise') }}</label>
                            <div class="row mt-1">
                                @php
                                    $expertise = [
                                        'civil_rights',
                                        'policy',
                                        'media',
                                        'government',
                                        'interfaith',
                                        'community',
                                        'fundraising',
                                        'events',
                                        'education',
                                        'business',
                                        'other',
                                    ];
                                @endphp

                                @foreach ($expertise as $item)
                                    <div class="col-md-4">
                                        <div class="form-check  form-check-rtl">
                                            <input class="form-check-input" type="checkbox" name="expertise[]"
                                                value="{{ $item }}">

                                            <label class="form-check-label">{{ __('form.expertises.' . $item) }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-3">
                                <label>{{ __('form.bio') }}</label>
                                <textarea name="bio" rows="3" class="form-control"></textarea>
                            </div>
                            <h4 class="mt-3 mb-3 text-color-secondary">{{ __('form.contribution') }}</h4>
                            <label>{{ __('form.contribution_type') }}</label>
                            <div class="row mt-2">
                                @php
                                    $contributions = [
                                        'supportive_member',
                                        'advisor',
                                        'committee_member',
                                        'speaker',
                                        'trainer',
                                        'researcher',
                                    ];
                                @endphp

                                @foreach ($contributions as $item)
                                    <div class="col-md-4">
                                        <div class="form-check  form-check-rtl">
                                            <input class="form-check-input" type="checkbox" name="contribution_types[]"
                                                value="{{ $item }}">
                                            <label class="form-check-label">{{ __('form.contributions.' . $item) }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <label class="mt-3">{{ __('form.committees') }}</label>
                            <div class="row mt-2">
                                @php
                                    $committees = [
                                        'anti_islamophobia',
                                        'civil_rights',
                                        'policy',
                                        'media',
                                        'community',
                                        'events',
                                    ];
                                @endphp

                                @foreach ($committees as $item)
                                    <div class="col-md-4">
                                        <div class="form-check  form-check-rtl">
                                            <input class="form-check-input" type="checkbox" name="committees[]"
                                                value="{{ $item }}">
                                            <label class="form-check-label">{{ __('form.committeess.' . $item) }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="mt-3">
                                <label>{{ __('form.initiative') }}</label>
                                <textarea name="initiative" rows="4" class="form-control"></textarea>
                            </div>
                            <h4 class="mt-3 mb-3 text-color-secondary">{{ __('form.availability') }}</h4>

                            <div class="col-md-4 mb-3">
                                <label>{{ __('form.hours_per_month') }}</label>
                                <select name="hours_per_month" class="form-control" required>
                                    <option>2–4</option>
                                    <option>5–10</option>
                                    <option>10–20</option>
                                    <option>20+</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>{{ __('form.participation') }} </label>
                                <select name="participation_mode" class="form-control mb-3">
                                    <option>Online</option>
                                    <option>In-person</option>
                                    <option>Both</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label>{{ __('form.travel') }}</label>
                                <select name="travel_availability" class="form-control">
                                    <option>Yes</option>
                                    <option>No</option>
                                    <option>Sometimes</option>
                                </select>
                            </div>
                            <h4 class="mt-3 mb-3 text-color-secondary">{{ __('form.attachments') }} </h4>

                            <div class="mb-3">
                                <label>{{ __('form.cv') }}</label>
                                <input type="file" name="cv" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>{{ __('form.references') }}</label>
                                <textarea name="references" rows="3" class="form-control"></textarea>
                            </div>

                            <div class="mb-3">
                                <label>{{ __('form.links') }}</label>
                                <textarea name="links" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                        <h4 class="mb-3 mt-3 text-color-secondary">{{ __('form.declarations') }}</h4>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" required>
                            <label class="form-check-label">
                                {{ __('form.commit_values') }}
                            </label>
                        </div>

                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" required>
                            <label class="form-check-label">
                                {{ __('form.privacy') }}
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                {{ __('form.contact_permission') }}
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>{{ __('form.signature') }}</label>
                                <input type="text" name="signature" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label>{{ __('form.date') }}</label>
                                <input type="date" name="signature_date" class="form-control">
                            </div>
                        </div>

                    </div>
                </div>


                <button type="submit" class="btn btn-modern btn-secondary btn-lg w-100">
                    {{ __('form.submit') }}
                </button>

            </form>


        </div>
    </section>
@endsection
@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: "Select languages",
                allowClear: true,
                width: '100%'
            });
        });
         function closeSuccessModal() {
            document.getElementById('successModal').remove();
        }
    </script>
@endsection
