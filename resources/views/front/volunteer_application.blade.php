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
                    <h1 class="text-9 font-weight-bold text-color-secondary "> {{ __('team.Be Part of Our Impactful Team') }}
                    </h1>
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
            <form action="{{ route('volunteer.send') }}" method="POST">
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
                <div class="card mb-4 bg-primary text-color-secondary">
                    <div class="card-body">



                        <div class="card mb-4 bg-primary text-color-secondary">
                            <div class="card-body">

                                <h4 class="mb-3 text-color-secondary">
                                    {{ __('volunteer.title') }}
                                </h4>

                                {{-- A) Basic Info --}}
                                <div class="row">

                                    <div class="col-md-6 mb-3">
                                        <label>{{ __('volunteer.full_name') }} *</label>
                                        <input type="text" name="full_name" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>{{ __('volunteer.age_group') }} *</label>
                                        <select name="age_group" class="form-control" required>
                                            <option value="">{{ __('form.select') }}</option>
                                            <option value="under_18">Under 18</option>
                                            <option value="18_24">18–24</option>
                                            <option value="25_34">25–34</option>
                                            <option value="35_plus">35+</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>{{ __('volunteer.email') }} *</label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>{{ __('volunteer.phone') }} *</label>
                                        <input type="text" name="phone" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>{{ __('volunteer.city') }} *</label>
                                        <input type="text" name="city" class="form-control" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label>{{ __('volunteer.languages') }}</label>
                                        <input type="text" name="languages" class="form-control">
                                    </div>
                                </div>

                                {{-- B) Skills --}}
                                <h4 class="mt-3 mb-3 text-color-secondary">
                                    {{ __('volunteer.skills') }}
                                </h4>

                                <div class="row">
                                    @php
                                        $skills = [
                                            'event_support',
                                            'flyer_distribution',
                                            'photo_video',
                                            'social_media',
                                            'graphic_design',
                                            'writing_translation',
                                            'research_data',
                                            'communications',
                                            'logistics',
                                        ];
                                    @endphp

                                    @foreach ($skills as $skill)
                                        <div class="col-md-4">
                                            <div class="form-check form-check-rtl">
                                                <input class="form-check-input" type="checkbox" name="skills[]"
                                                    value="{{ $skill }}">
                                                <label class="form-check-label">
                                                    {{ __('volunteer.' . $skill) }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-2">
                                    <input type="text" name="other_skill" class="form-control"
                                        placeholder="{{ __('volunteer.other') }}">
                                </div>

                                {{-- C) Availability --}}
                                <h4 class="mt-4 mb-3 text-color-secondary">
                                    {{ __('volunteer.availability') }}
                                </h4>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>{{ __('volunteer.hours_per_week') }} *</label>
                                        <select name="hours_per_week" class="form-control" required>
                                            <option>1–3</option>
                                            <option>4–6</option>
                                            <option>7–10</option>
                                            <option>10+</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>{{ __('volunteer.preferred_times') }}</label>
                                        <input type="text" name="preferred_times" class="form-control">
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>{{ __('volunteer.volunteer_style') }}</label>
                                        <select name="volunteer_style" class="form-control">
                                            <option value="micro">Micro-tasks</option>
                                            <option value="ongoing">Ongoing</option>
                                            <option value="both">Both</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- D) Field --}}
                                <h4 class="mt-4 mb-3 text-color-secondary">
                                    {{ __('volunteer.field') }}
                                </h4>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label>{{ __('volunteer.local_volunteer') }}</label>
                                        <select name="local_volunteer" class="form-control">
                                            <option value="1">{{ __('form.yes') }}</option>
                                            <option value="0">{{ __('form.no') }}</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>{{ __('volunteer.transportation') }}</label>
                                        <select name="transportation" class="form-control">
                                            <option value="1">{{ __('form.yes') }}</option>
                                            <option value="0">{{ __('form.no') }}</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <label>{{ __('volunteer.coverage_areas') }}</label>
                                        <input type="text" name="coverage_areas" class="form-control">
                                    </div>
                                </div>

                                {{-- E) Emergency --}}
                                <h4 class="mt-4 mb-3 text-color-secondary">
                                    {{ __('volunteer.emergency') }}
                                </h4>

                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="emergency_name" class="form-control"
                                            placeholder="{{ __('volunteer.emergency_name') }}" required>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="emergency_phone" class="form-control"
                                            placeholder="{{ __('volunteer.emergency_phone') }}" required>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="emergency_relation" class="form-control"
                                            placeholder="{{ __('volunteer.emergency_relation') }}" required>
                                    </div>
                                </div>

                                {{-- F) Consents --}}
                                <h4 class="mt-4 mb-3 text-color-secondary">
                                    {{ __('volunteer.consents') }}
                                </h4>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" required>
                                    <label class="form-check-label">
                                        {{ __('volunteer.code_of_conduct') }}
                                    </label>
                                </div>

                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        {{ __('volunteer.photo_release') }}
                                    </label>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" required>
                                    <label class="form-check-label">
                                        {{ __('volunteer.privacy_policy') }}
                                    </label>
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-modern btn-secondary btn-lg w-100">
                            {{ __('volunteer.submit') }}
                        </button>



                    </div>
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
