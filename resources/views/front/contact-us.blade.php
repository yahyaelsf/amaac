@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => false, 'work' => false, 'involved' => false, 'contact' => true])
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/IMG-20251119-WA0016.jpg') }}'); background-position: center center;
        background-size: cover;">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary "> Connect with the American Muslim and Arab
                        Affairs
                        Council. </h1>
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
        <div class="container" bis_skin_checked="1">

            <div class="row py-4" bis_skin_checked="1">
                <div class="col-lg-6" bis_skin_checked="1">

                    <h2 class="font-weight-bold text-8 mt-2 mb-0 text-color-secondary">Contact Us</h2>
                    <p class="mb-4 text-color-secondary">Feel free to ask for details, don't save any questions!</p>

                    <form class="contact-form" action="php/contact-form.php" method="POST" novalidate="novalidate">
                        <div class="contact-form-success alert alert-success d-none mt-4 text-color-secondary"
                            bis_skin_checked="1">
                            <strong>Success!</strong> Your message has been sent to us.
                        </div>

                        <div class="contact-form-error alert alert-danger d-none mt-4 text-color-secondary"
                            bis_skin_checked="1">
                            <strong>Error!</strong> There was an error sending your message.
                            <span class="mail-error-message text-1 d-block"></span>
                        </div>

                        <div class="row text-color-light" bis_skin_checked="1">
                            <div class="form-group col-lg-6" bis_skin_checked="1">
                                <label class="form-label mb-1 text-2 text-color-secondary">Full Name</label>
                                <input type="text" value="" data-msg-required="Please enter your name."
                                    maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
                            </div>
                            <div class="form-group col-lg-6" bis_skin_checked="1">
                                <label class="form-label mb-1 text-2 text-color-secondary">Email Address</label>
                                <input type="email" value="" data-msg-required="Please enter your email address."
                                    data-msg-email="Please enter a valid email address." maxlength="100"
                                    class="form-control text-3 h-auto py-2" name="email" required="">
                            </div>
                        </div>
                        <div class="row text-color-light" bis_skin_checked="1">
                            <div class="form-group col" bis_skin_checked="1">
                                <label class="form-label mb-1 text-2 text-color-secondary">Subject</label>
                                <input type="text" value="" data-msg-required="Please enter the subject."
                                    maxlength="100" class="form-control text-3 h-auto py-2 text-color-" name="subject"
                                    required="">
                            </div>
                        </div>
                        <div class="row text-color-light" bis_skin_checked="1">
                            <div class="form-group col" bis_skin_checked="1">
                                <label class="form-label mb-1 text-2 text-color-secondary">Message</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                    class="form-control text-3 h-auto py-2" name="message" required=""></textarea>
                            </div>
                        </div>
                        <div class="row" bis_skin_checked="1">
                            <div class="form-group col" bis_skin_checked="1">
                                <input type="submit" value="Send Message" class="btn btn-modern btn-secondary"
                                    data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-lg-6" bis_skin_checked="1">
                    <div class="mt-5">
                        <h4 class="font-weight-normal line-height-1 mb-5 text-color-secondary">Our <strong
                                class="font-weight-extra-bold">Location</strong></h4>

                        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                        <div id="googlemaps" class="google-map small" style="position: relative; overflow: hidden;">
                            <div
                                style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                <div class="gm-err-container">
                                    <div class="gm-err-content">
                                        <div class="gm-err-icon">
                                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3104.9799223158952!2d-77.03873797545137!3d38.90157444645846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b7bbd9d49f1f%3A0x12f6b3d6b63564ed!2zMTc3NSBJIFN0IE5XIHN1aXRlIDExNTAsIFdhc2hpbmd0b24sIERDIDIwMDA22Iwg2KfZhNmI2YTYp9mK2KfYqiDYp9mE2YXYqtit2K_YqQ!5e0!3m2!1sar!2s!4v1764745507298!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                        <h4 class="mt-2 mb-1 text-color-secondary">Our <strong
                                class="text-color-secondary">Office</strong>
                        </h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li class="text-color-secondary-100"><i
                                    class="fas fa-map-marker-alt top-6 text-color-primary bg-color-secondary"></i> <strong
                                    class="text-secondary text-color-secondary">Address:</strong> 1775 Eye Street NW STE
                                1150
                                Washington, D.C.
                            </li>
                            <li class="text-color-secondary-100"><i
                                    class="fas fa-phone top-6 text-color-primary bg-color-secondary"></i> <strong
                                    class="text-secondary">Phone:</strong> +1 312-622-6666
                            </li>
                            <li><i class="fas fa-envelope top-6 text-color-primary bg-color-secondary"></i> <strong
                                    class="text-secondary">Email:</strong> <a class="text-color-secondary-100"
                                    href="mailto:mail@example.com">info@ammac.com</a></li>
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

                    <h4 class="pt-5 text-color-secondary">Get in <strong class="text-color-secondary">Touch</strong></h4>
                    <p class="lead mb-0 text-4 text-color-secondary">AMAAC is here to listen and respond. Whether you are a
                        community member in need of support, a journalist seeking information, or an organization exploring
                        partnership, we invite you to reach out. We do our best to respond to all messages in a timely
                        manner.</p>

                </div>

            </div>

        </div>
    </section>
@endsection
