@extends('front.layout', ['home' => false, 'about' => false, 'goals' => false, 'team' => true, 'work' => false, 'involved' => false, 'contact' => false])
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <style>
        .video-gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .video-card {
            width: 280px;
            text-align: center;
            font-family: Arial, sans-serif;
            margin: 50px 0px;
        }

        .thumb {
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border-radius: 8px;
            transition: transform .3s;
        }

        .thumb img {
            height: 400px;
            width: 100%;
            display: block;

        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            font-size: 42px;
            color: #ffffff;
            z-index: 2;

            /* الهالة الدائرية */
            width: 70px;
            height: 70px;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: radial-gradient(circle,
                    rgba(10, 25, 47, 0.55) 0%,
                    rgba(10, 25, 47, 0.35) 40%,
                    rgba(10, 25, 47, 0.15) 65%,
                    rgba(10, 25, 47, 0) 100%);
        }

        .thumb:hover {
            transform: scale(1.05);
        }

        .video-title {
            margin-top: 10px;
            font-size: 16px;
            color: #1a1a1a;
            font-weight: bold;
        }
    </style>
@endsection
@section('content')
<section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-primary overlay-show overlay-op-7"
        style="background-image: url('{{ asset('front/img/home/IMG-20251206-WA0004.jpg') }}'); background-position: center center;
        background-size: cover;">

        <div class="container">

            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold text-color-secondary ">
                    {{ __('general.video_gallery') }}

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
        <div class="container pt-5 ">
            <div class="video-gallery">

                <!-- بطاقة فيديو واحدة -->
                <div class="video-card">
                    <a data-fancybox="videos" href="{{ asset('front/vedios/vedio1.mp4') }}">
                        <div class="thumb">
                            <img src="{{ asset('front/vedios/vedio1.png') }}" alt="Video 1">
                            <span class="play-icon">&#9658;</span>
                        </div>

                    </a>
                </div>
                <div class="video-card">
                    <a data-fancybox="videos" href="{{ asset('front/vedios/vedio2.mp4') }}">
                        <div class="thumb">
                            <img src="{{ asset('front/vedios/vedio2.png') }}" alt="Video 2">
                            <span class="play-icon">&#9658;</span>
                        </div>

                    </a>
                </div>
                <div class="video-card">
                    <a data-fancybox="videos" href="{{ asset('front/vedios/vedio3.mp4') }}">
                        <div class="thumb">
                            <img src="{{ asset('front/vedios/vedio3.png') }}" alt="Video 2">
                            <span class="play-icon">&#9658;</span>
                        </div>

                    </a>
                </div>
                <div class="video-card">
                    <a data-fancybox="videos" href="{{ asset('front/vedios/vedio4.mp4') }}">
                        <div class="thumb">
                            <img src="{{ asset('front/vedios/vedio4.png') }}" alt="Video 2">
                            <span class="play-icon">&#9658;</span>
                        </div>

                    </a>
                </div>

            </div>

            <!-- Fancybox JS -->


        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
@endsection
