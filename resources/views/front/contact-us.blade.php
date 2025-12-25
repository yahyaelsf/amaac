@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => true])
@section('css')
    <style>
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
        style="background-image: url('{{ asset('front/img/home/IMG-20251206-WA0009.jpg') }}'); background-position: center center;
        background-size: cover;">

        <div class="container">

            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary "> {{ __('general.contact_page.header.title') }}
                    </h1>
                    <span class="sub-title text-color-secondary"> </span>
                </div>
                {{-- <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-secondary d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Contact Us </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container">
            <div class="row pt-5">
                <div class="col">

                    {{-- Intro Section --}}
                    <div class="row text-center pb-5">
                        <div class="col-md-9 mx-md-auto">
                            <div class="overflow-hidden mb-3">
                                <h1 class="font-weight-bold text-8 mb-0 appear-animation text-color-secondary "
                                    data-appear-animation="maskUp">
                                    {{ __('general.contact_page.touch.title') }}</span>
                                </h1>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="lead mb-0 appear-animation text-color-secondary" data-appear-animation="maskUp"
                                    data-appear-animation-delay="200">
                                    {{ __('general.contact_page.touch.text') }}
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="container" bis_skin_checked="1">

            <div class="row py-4" bis_skin_checked="1">
                <div class="col-lg-6" bis_skin_checked="1">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0 text-color-secondary">
                        {{ __('general.contact_page.intro.title') }}</h2>
                    <p class="mb-4 text-color-secondary">{{ __('general.contact_page.intro.subtitle') }}</p>

                    <form class="contact-form" action="{{ route('contact.send') }}" method="POST" novalidate="novalidate">
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
                        <div class="contact-form-success alert alert-success d-none mt-4 text-color-secondary"
                            bis_skin_checked="1">
                            {{ __('general.contact_page.form.success') }}
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4 text-color-secondary"
                            bis_skin_checked="1">
                            {{ __('general.contact_page.form.error') }}
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row text-color-light" bis_skin_checked="1">
                            <div class="form-group col-lg-6" bis_skin_checked="1">
                                <label class="form-label mb-1 text-2 text-color-secondary">
                                    {{ __('general.contact_page.form.fields.name') }}</label>
                                <input type="text" value="{{ old('name') }}" data-msg-required="Please enter your name."
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
                                    @error('name')
                                        <small class="text-danger d-block mt-1">
                                            {{ $message }}
                                        </small>
                                    @enderror
                            </div>
                            <div class="form-group col-lg-6" bis_skin_checked="1">
                                <label
                                    class="form-label mb-1 text-2 text-color-secondary">{{ __('general.contact_page.form.fields.email') }}</label>
                                <input type="email" value="{{ old('email') }}" data-msg-required="Please enter your email address."
                                    data-msg-email="Please enter a valid email address." maxlength="100"
                                    class="form-control text-3 h-auto py-2" name="email" required="">
                                     @error('email')
                                        <small class="text-danger d-block mt-1">
                                            {{ $message }}
                                        </small>
                                    @enderror
                            </div>
                        </div>
                        <div class="row text-color-light" bis_skin_checked="1">
                            <div class="form-group col" bis_skin_checked="1">
                                <label
                                    class="form-label mb-1 text-2 text-color-secondary">{{ __('general.contact_page.form.fields.subject') }}</label>
                                <input type="text" value="{{ old('subject') }}" data-msg-required="Please enter the subject."
                                    maxlength="100" class="form-control text-3 h-auto py-2 text-color-" name="subject"
                                    required="">
                                     @error('subject')
                                        <small class="text-danger d-block mt-1">
                                            {{ $message }}
                                        </small>
                                    @enderror
                            </div>
                        </div>
                        <div class="row text-color-light" bis_skin_checked="1">
                            <div class="form-group col" bis_skin_checked="1">
                                <label
                                    class="form-label mb-1 text-2 text-color-secondary">{{ __('general.contact_page.form.fields.message') }}</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                    class="form-control text-3 h-auto py-2" name="message" required="">{{ old('message') }}</textarea>
                                    @error('message')
                                        <small class="text-danger d-block mt-1">
                                            {{ $message }}
                                        </small>
                                    @enderror
                            </div>
                        </div>
                        <div class="row" bis_skin_checked="1">
                            <div class="form-group col" bis_skin_checked="1">
                                <input type="submit" value="{{ __('general.contact_page.form.submit') }}"
                                    class="btn btn-modern btn-secondary" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6" bis_skin_checked="1">
                    <div class="mt-5">
                        <h4 class="font-weight-normal line-height-1 mb-5 text-color-secondary">
                            {{ __('general.contact_page.location.title') }}
                        </h4>

                        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                        <div id="googlemaps" class="google-map small" style="position: relative; overflow: hidden;">
                            <div
                                style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                <div class="gm-err-container">
                                    <div class="gm-err-content">
                                        <div class="gm-err-icon">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.9799223158952!2d-77.03873797545137!3d38.90157444645846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7bbd9d49f1f%3A0x12f6b3d6b63564ed!2zMTc3NSBJIFN0IE5XIHN1aXRlIDExNTAsIFdhc2hpbmd0b24sIERDIDIwMDA22Iwg2KfZhNmI2YTYp9mK2KfYqiDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2s!4v1764745507298!5m2!1sar!2s"
                                                width="600" height="450" style="border:0;" allowfullscreen=""
                                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                        <div class="gm-err-title">Oops! Something went wrong.</div>
                                        <div class="gm-err-message">This page didn't load Google Maps correctly. See the
                                            JavaScript console for technical details.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="appear-animation animated fadeIn appear-animation-visible mt-3"
                        data-appear-animation="fadeIn" data-appear-animation-delay="800" bis_skin_checked="1"
                        style="animation-delay: 800ms;">
                        <h4 class="mt-2 mb-1 text-color-secondary">
                            {{ __('general.contact_page.office.title') }}
                        </h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li class="text-color-secondary-100"><i
                                    class="fas fa-map-marker-alt top-6 text-color-primary bg-color-secondary"></i> <strong
                                    class="text-secondary text-color-secondary">{{ __('general.contact_page.office.address_label') }}</strong>
                                {{ __('general.contact_page.office.address') }}
                            </li>
                            <li class="text-color-secondary-100"><i
                                    class="fas fa-phone top-6 text-color-primary bg-color-secondary"></i> <strong
                                    class="text-secondary">{{ __('general.contact_page.office.phone_label') }}</strong>
                                {{ __('general.contact_page.office.phone') }}
                            </li>
                            <li><i class="fas fa-envelope top-6 text-color-primary bg-color-secondary"></i> <strong
                                    class="text-secondary">{{ __('general.contact_page.office.email_label') }}</strong> <a
                                    class="text-color-secondary-100"
                                    href="mailto:mail@example.com">info@amaacouncil.com</a></li>
                        </ul>
                    </div>
                    {{--
                    <div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn"
                        data-appear-animation-delay="950" bis_skin_checked="1" style="animation-delay: 950ms;">
                        <h4 class="pt-5 text-color-light">Business <strong class="text-color-secondary">Hours</strong>
                        </h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li class="text-color-light-300"><i class="far fa-clock top-6 text-color-light"></i> Monday -
                                Friday - 9am to 5pm</li>
                            <li class="text-color-light-300"><i class="far fa-clock top-6 text-color-light"></i> Saturday
                                - 9am to 2pm</li>
                            <li class="text-color-light-300"><i class="far fa-clock top-6 text-color-light"></i> Sunday -
                                Closed</li>
                        </ul>
                    </div> --}}

                    {{-- <h4 class="pt-5 text-color-secondary">{{ __('general.contact_page.touch.title') }}</h4>
                    <p class="lead mb-0 text-4 text-color-secondary">{{ __('general.contact_page.touch.text') }}</p> --}}

                </div>

            </div>

        </div>
    </section>
    <script>
        function closeSuccessModal() {
            document.getElementById('successModal').remove();
        }
    </script>
@endsection
