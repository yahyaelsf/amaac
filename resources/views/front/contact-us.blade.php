@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => false, 'work' => false , 'involved' => false , 'contact' => true])
@section('css')
    <style>

    </style>
@endsection
@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/slider1.png') }}');">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary "> Contact Us </h1>
                    <span class="sub-title">Connect with the American Muslim and Arab Affairs
                        Council. </span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href={{ url('/') }}">Home</a></li>
                        <li class="active">Contact Us </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container" bis_skin_checked="1">

					<div class="row py-4" bis_skin_checked="1">
						<div class="col-lg-6" bis_skin_checked="1">

							<h2 class="font-weight-bold text-8 mt-2 mb-0 text-color-secondary">Contact Us</h2>
							<p class="mb-4">Feel free to ask for details, don't save any questions!</p>

							<form class="contact-form" action="php/contact-form.php" method="POST" novalidate="novalidate">
								<div class="contact-form-success alert alert-success d-none mt-4" bis_skin_checked="1">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="contact-form-error alert alert-danger d-none mt-4" bis_skin_checked="1">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message text-1 d-block"></span>
								</div>

								<div class="row" bis_skin_checked="1">
									<div class="form-group col-lg-6" bis_skin_checked="1">
										<label class="form-label mb-1 text-2">Full Name</label>
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" required="">
									</div>
									<div class="form-group col-lg-6" bis_skin_checked="1">
										<label class="form-label mb-1 text-2">Email Address</label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="email" required="">
									</div>
								</div>
								<div class="row" bis_skin_checked="1">
									<div class="form-group col" bis_skin_checked="1">
										<label class="form-label mb-1 text-2">Subject</label>
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control text-3 h-auto py-2" name="subject" required="">
									</div>
								</div>
								<div class="row" bis_skin_checked="1">
									<div class="form-group col" bis_skin_checked="1">
										<label class="form-label mb-1 text-2">Message</label>
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control text-3 h-auto py-2" name="message" required=""></textarea>
									</div>
								</div>
								<div class="row" bis_skin_checked="1">
									<div class="form-group col" bis_skin_checked="1">
										<input type="submit" value="Send Message" class="btn btn-primary btn-modern" data-loading-text="Loading...">
									</div>
								</div>
							</form>

						</div>
						<div class="col-lg-6" bis_skin_checked="1">

							<div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="800" bis_skin_checked="1" style="animation-delay: 800ms;">
								<h4 class="mt-2 mb-1 text-color-primary">Our <strong class="text-color-secondary">Office</strong></h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
									<li><i class="fas fa-map-marker-alt top-6 text-color-primary"></i> <strong class="text-dark text-color-primary">Address:</strong> Melbourne, 121 King St, Australia</li>
									<li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> (123) 456-789</li>
									<li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
								</ul>
							</div>

							<div class="appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="950" bis_skin_checked="1" style="animation-delay: 950ms;">
								<h4 class="pt-5 text-color-primary">Business <strong class="text-color-secondary">Hours</strong></h4>
								<ul class="list list-icons list-dark mt-2">
									<li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
									<li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
									<li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
								</ul>
							</div>

							<h4 class="pt-5 text-color-primary">Get in <strong class="text-color-secondary">Touch</strong></h4>
							<p class="lead mb-0 text-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

						</div>

					</div>

				</div>
@endsection
