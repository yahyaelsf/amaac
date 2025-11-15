@extends('admin.layouts.dashboard')
@push('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}">
@endpush
@section('content')
    {{-- <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand fa fa-list"></i>
                </span>
                <h3 class="kt-portlet__head-title">{{ $pageTitle }}</h3>
            </div>
        </div>
        <div class="kt-portlet__body">
            <form action="{{ route('admin.questions.store') }}" method="post">

                @csrf

                @isset($question)
                    <input type="hidden" name="pk_i_id" value="{{ $question->getKey() }}"/>
                @endisset



                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">@lang('buttons.save')</button>
                    <a href="{{ route('admin.questions.index') }}" class="btn btn-secondary ml-2">@lang('buttons.close')</a>
                </div>

            </form>
        </div>
    </div> --}}
    <div class="row">
        <div class="col-xxl">
            <div class="card mb-4">
                <h5 class="card-header">Form Separator</h5>
                <form class="card-body" data-select2-id="28">
                    <h6 class="mb-b fw-semibold">1. Account Details</h6>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-username">Username</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-username" class="form-control" placeholder="john.doe">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-email">Email</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                                <input type="text" id="multicol-email" class="form-control" placeholder="john.doe"
                                    aria-label="john.doe" aria-describedby="multicol-email2">
                                <span class="input-group-text" id="multicol-email2">@example.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="row form-password-toggle">
                        <label class="col-sm-3 col-form-label" for="multicol-password">Password</label>
                        <div class="col-sm-9">
                            <div class="input-group input-group-merge">
                                <input type="password" id="multicol-password" class="form-control"
                                    placeholder="············" aria-describedby="multicol-password2">
                                <span class="input-group-text cursor-pointer" id="multicol-password2"><i
                                        class="ti ti-eye-off"></i></span>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4 mx-n4">
                    <h6 class="mb-3 fw-semibold">2. Personal Info</h6>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-full-name">Full Name</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-full-name" class="form-control" placeholder="John Doe">
                        </div>
                    </div>
                    <div class="row mb-3" data-select2-id="27">
                        <label class="col-sm-3 col-form-label" for="multicol-country">Country</label>
                        <div class="col-sm-9" data-select2-id="26">
                            <div class="position-relative" data-select2-id="25">
                                <select id="multicol-country" class="select2 form-select select2-hidden-accessible"
                                    data-allow-clear="true" data-select2-id="multicol-country" tabindex="-1"
                                    aria-hidden="true">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="Australia" data-select2-id="37">Australia</option>
                                    <option value="Bangladesh" data-select2-id="38">Bangladesh</option>
                                    <option value="Belarus" data-select2-id="39">Belarus</option>
                                    <option value="Brazil" data-select2-id="40">Brazil</option>
                                    <option value="Canada" data-select2-id="41">Canada</option>
                                    <option value="China" data-select2-id="42">China</option>
                                    <option value="France" data-select2-id="43">France</option>
                                    <option value="Germany" data-select2-id="44">Germany</option>
                                    <option value="India" data-select2-id="45">India</option>
                                    <option value="Indonesia" data-select2-id="46">Indonesia</option>
                                    <option value="Israel" data-select2-id="47">Israel</option>
                                    <option value="Italy" data-select2-id="48">Italy</option>
                                    <option value="Japan" data-select2-id="49">Japan</option>
                                    <option value="Korea" data-select2-id="50">Korea, Republic of</option>
                                    <option value="Mexico" data-select2-id="51">Mexico</option>
                                    <option value="Philippines" data-select2-id="52">Philippines</option>
                                    <option value="Russia" data-select2-id="53">Russian Federation</option>
                                    <option value="South Africa" data-select2-id="54">South Africa</option>
                                    <option value="Thailand" data-select2-id="55">Thailand</option>
                                    <option value="Turkey" data-select2-id="56">Turkey</option>
                                    <option value="Ukraine" data-select2-id="57">Ukraine</option>
                                    <option value="United Arab Emirates" data-select2-id="58">United Arab Emirates
                                    </option>
                                    <option value="United Kingdom" data-select2-id="59">United Kingdom</option>
                                    <option value="United States" data-select2-id="60">United States</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 select2-primary">
                        <label class="col-sm-3 col-form-label" for="multicol-language">Language</label>
                        <div class="col-sm-9">
                            <div class="position-relative"><select id="multicol-language"
                                    class="select2 form-select select2-hidden-accessible" multiple=""
                                    data-select2-id="multicol-language" tabindex="-1" aria-hidden="true">
                                    <option value="en" selected="" data-select2-id="4">English</option>
                                    <option value="fr" selected="" data-select2-id="5">French</option>
                                    <option value="de">German</option>
                                    <option value="pt">Portuguese</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label" for="multicol-birthdate">Birth Date</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-birthdate" class="form-control dob-picker flatpickr-input"
                                placeholder="YYYY-MM-DD" readonly="readonly">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label" for="multicol-phone">Phone No</label>
                        <div class="col-sm-9">
                            <input type="text" id="multicol-phone" class="form-control phone-mask"
                                placeholder="658 799 8941" aria-label="658 799 8941">
                        </div>
                    </div>
                    <div class="pt-4">
                        <div class="row justify-content-end">
                            <div class="col-sm-9">
                                <button type="submit"
                                    class="btn btn-primary me-sm-2 me-1 waves-effect waves-light">Submit</button>
                                <button type="reset" class="btn btn-label-secondary waves-effect">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/libs/moment/moment.js') }}"></script>
    <script>
        $(".tags-selects").select2({
            tags: true,
            tokenSeparators: [',', '  '],
            width: '100%'
        });

        datepickerList = document.querySelectorAll('.dob-picker');
        if (datepickerList) {
            datepickerList.forEach(function(datepicker) {
                datepicker.flatpickr({
                    monthSelectorType: 'static'
                });
            });
        }
        var select2 = $('.select2');
        if (select2.length) {
            select2.each(function() {
                var $this = $(this);
                $this.wrap('<div class="position-relative"></div>').select2({
                    placeholder: 'Select value',
                    dropdownParent: $this.parent()
                });
            });
        }
    </script>
@endpush
