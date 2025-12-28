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
            <form action="{{ route('internship.application.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
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


                        <h4 class="mb-3 text-color-secondary">{{ __('form.basic_information') }}</h4>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.full_name') }}</label>
                                <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control"
                                    required>
                                @error('full_name')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.email') }}</label>
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.phone') }}</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"
                                    required>
                                @error('phone')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.location') }}</label>
                                <input type="text" name="location" value="{{ old('location') }}" class="form-control"
                                    required>
                                @error('location')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.timezone') }}</label>
                                <select name="timezone" class="form-control">
                                    @foreach (['UTC-5', 'UTC-6', 'UTC+0', 'UTC+2'] as $tz)
                                        <option value="{{ $tz }}"
                                            {{ old('timezone') == $tz ? 'selected' : '' }}>
                                            {{ $tz }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('timezone')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.languages') }}</label>
                                <select name="languages[]" class="form-control select2" multiple>
                                    @foreach (['Arabic', 'English', 'Other'] as $lang)
                                        <option value="{{ $lang }}"
                                            {{ in_array($lang, old('languages', [])) ? 'selected' : '' }}>
                                            {{ $lang }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('languages')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.linkedin') }}</label>
                                <input type="url" name="linkedin" value="{{ old('linkedin') }}" class="form-control">
                                  @error('linkedin')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.portfolio') }}</label>
                                <input type="url" name="portfolio" value="{{ old('portfolio') }}" class="form-control">
                                  @error('portfolio')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        {{-- ================= Education / Status ================= --}}
                        <h4 class="mt-4 mb-3 text-color-secondary">{{ __('form.education_status') }}</h4>

                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.current_status') }}</label>
                                <select name="status" class="form-control" required>
                                    @foreach (['Student', 'Recent graduate', 'Career switcher'] as $s)
                                        <option {{ old('status') == $s ? 'selected' : '' }}>{{ $s }}</option>
                                    @endforeach
                                </select>
                                @error('status')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.university') }}</label>
                                <input type="text" name="university" value="{{ old('university') }}"
                                    class="form-control" required>
                                @error('university')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.major') }}</label>
                                <input type="text" name="major" value="{{ old('major') }}" class="form-control"
                                    required>
                                @error('major')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.academic_year') }}</label>
                                <select name="academic_year" class="form-control">
                                    @foreach (['1', '2', '3', '4', 'Master', 'Other'] as $y)
                                        <option {{ old('academic_year') == $y ? 'selected' : '' }}>{{ $y }}
                                        </option>
                                    @endforeach
                                </select>
                                 @error('academic_year')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.gpa') }}</label>
                                <input type="text" name="gpa" value="{{ old('gpa') }}" class="form-control"
                                    required>
                                @error('gpa')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.graduation_required') }}</label>
                                <select name="required_for_graduation" id="required_for_graduation" class="form-control">
                                    <option {{ old('required_for_graduation') == 'No' ? 'selected' : '' }}>No</option>
                                    <option {{ old('required_for_graduation') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                </select>
                                 @error('required_for_graduation')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div id="graduation-extra-fields" style="display: none;">
                                <div class="col-md-6 mb-3">
                                    <label>{{ __('form.university_letter') }}</label>
                                    <input type="file" name="university_letter" class="form-control">
                                @error('university_letter')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label>{{ __('form.required_hours') }}</label>
                                    <input type="text" name="required_hours" class="form-control mb-2"
                                        placeholder="{{ __('form.required_hours') }}">
                                @error('required_hours')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                            </div>

                        </div>
                        <h4 class="mt-4 mb-3 text-color-secondary">{{ __('form.internship_tracks') }}</h4>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.primary_track') }}</label>
                                <select name="primary_track" class="form-control" required>
                                    @foreach (['Media & Social Content', 'PR & Partnerships', 'Research & Policy', 'Civil Rights / Legal Research', 'Events & Field Operations', 'Graphic Design', 'Web / Tech / Data', 'Translation & Editing', 'Other'] as $track)
                                        <option {{ old('primary_track') == $track ? 'selected' : '' }}>{{ $track }}
                                        </option>
                                    @endforeach
                                </select>
                                 @error('primary_track')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label>{{ __('form.secondary_track') }}</label>
                                <select name="secondary_track" class="form-control">
                                    <option value="">—</option>
                                    @foreach (['Media & Social Content', 'PR & Partnerships', 'Research & Policy', 'Web / Tech / Data'] as $track)
                                        <option {{ old('secondary_track') == $track ? 'selected' : '' }}>
                                            {{ $track }}</option>
                                    @endforeach

                                </select>
                                 @error('secondary_track')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <h4 class="mt-4 mb-3 text-color-secondary">{{ __('form.skills_tools') }}</h4>

                        <label>{{ __('form.skills') }}</label>
                        <div class="row mt-2">

                            @php
                                $skills = [
                                    'writing',
                                    'research',
                                    'design',
                                    'video_editing',
                                    'social_media',
                                    'events',
                                    'data_sheets',
                                    'outreach',
                                    'other',
                                ];
                            @endphp

                            @foreach ($skills as $skill)
                                <div class="col-md-4">
                                    <div class="form-check form-check-rtl">
                                        <input class="form-check-input" type="checkbox" name="skills[]"
                                            value="{{ $skill }}"
                                            {{ in_array($skill, old('skills', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label">
                                            {{ __('form.skills_list.' . $skill) }}
                                        </label>
                                    </div>
                                </div>
                            @endforeach

                            @error('skills')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12 mb-3">
                                <label>{{ __('form.tools') }}</label>
                                <input type="text" name="tools" value="{{ old('tools') }}" class="form-control"
                                    placeholder="{{ __('form.tools_placeholder') }}">
                                @error('tools')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-12 mb-3">
                                <label>{{ __('form.strengths') }}</label>
                                <textarea name="strengths" rows="2" class="form-control"
                                    placeholder="{{ __('form.strengths_placeholder') }}">{{ old('strengths') }}</textarea>
                                @error('strengths')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- ================= Availability ================= --}}
                        <h4 class="mt-4 mb-3 text-color-secondary">{{ __('form.availability') }}</h4>

                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <label>{{ __('form.start_date') }}</label>
                                <input type="date" name="start_date" value="{{ old('start_date') }}"
                                    class="form-control" required>
                                @error('start_date')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>{{ __('form.duration') }}</label>
                                <select name="duration" class="form-control" required>
                                    @foreach (['4 weeks', '8 weeks', '12 weeks', '16 weeks', 'Other'] as $d)
                                        <option {{ old('duration') == $d ? 'selected' : '' }}>{{ $d }}</option>
                                    @endforeach
                                </select>
                                @error('duration')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-4 mb-3">
                                <label>{{ __('form.hours_per_week') }}</label>
                                <select name="hours_per_week" class="form-control" required>
                                    @foreach (['5–8', '9–12', '13–20', '20+'] as $h)
                                        <option {{ old('hours_per_week') == $h ? 'selected' : '' }}>{{ $h }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('hours_per_week')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        {{-- ================= Attachments ================= --}}
                        <h4 class="mt-4 mb-3 text-color-secondary">{{ __('form.attachments') }}</h4>

                        <div class="mb-3">
                            <label>{{ __('form.cv') }}</label>
                            <input type="file" name="cv" class="form-control" required>
                            @error('cv')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                            @enderror
                        </div>
                        <h4 class="mt-4 mb-3 text-color-secondary">{{ __('form.declarations') }}</h4>

                        <div class="form-check mb-2">
                            <div>
                                <input type="checkbox" name="code_of_conduct" required>
                                {{ __('form.conduct') }}
                            </div>

                            <div>
                                <input type="checkbox" name="privacy" required>
                                {{ __('form.privacy') }}
                            </div>

                            <div>
                                <input type="checkbox" name="work_usage" required>
                                {{ __('form.work_usage') }}
                            </div>

                            <div>
                                <input type="checkbox" name="confidentiality" required>
                                {{ __('form.confidentiality') }}
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label>{{ __('form.signature') }}</label>
                                <input type="text" name="signature" class="form-control" required>
                                @error('signature')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label>{{ __('form.date') }}</label>
                                <input type="date" name="signature_date" class="form-control" required>
                                @error('signature_date')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                    </div>
                </div>


                <button type="submit" class="btn btn-modern btn-secondary btn-lg w-100">
                    Submit Internship Application
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const select = document.getElementById('required_for_graduation');
        const extraFields = document.getElementById('graduation-extra-fields');

        function toggleFields() {
            if (select.value === 'Yes') {
                extraFields.style.display = 'flex';
                extraFields.classList.add('row');
            } else {
                extraFields.style.display = 'none';
            }
        }

        // تشغيل عند التحميل (عشان old())
        toggleFields();

        // تشغيل عند التغيير
        select.addEventListener('change', toggleFields);
    });
</script>
@endsection
