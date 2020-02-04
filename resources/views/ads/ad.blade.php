@extends('layouts.app')

@section('title') Parduodu transporto įmonę @stop

@push('header-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endpush

@push('footer-scripts')
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush

@section('content')
    @include('partials.subheader')
    <div class="container py-4">
        <div class="hidden lg:flex items-center justify-between pb-24px">
            <div class="text-14px tracking-0.5px font-light">
                <a href="javascript:">Parduodu versla</a>  <span class="text-purple-2">/</span>
                <a href="javascript:">Vilnius</a>  <span class="text-purple-2">/</span>
                <a href="javascript:">Transportas</a>
            </div>
            <a href="javascript:">
                <img src="{{ asset('images/arrow-back-1.svg') }}" alt="Atgal">
            </a>
        </div>
        <div class="flex flex-col lg:flex-row">
            <div class="flex-1 lg:mr-13px">
                <div class="relative mb-25px">
                    <button class="absolute right-0 top-0 mt-10px mr-10px lg:mr-23px w-42px h-42px bg-blue-2 rounded-7px flex items-center justify-center" type="button">
                        <img src="{{ asset('images/heart-2.svg') }}" alt="">
                    </button>
                    <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1544411451-4d629e09a6bb.jpeg') }}" class="block bg-cover bg-center rounded-10px h-216px lg:h-394px" style="background-image:url({{ asset('images/tmp/photo-1544411451-4d629e09a6bb.jpeg') }})"></a>
                    <div class="flex justify-center py-10px lg:py-0 lg:absolute lg:left-0 lg:right-0 lg:mx-auto lg:-mt-70px">
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1573090951351-f256de340dea.jpeg') }}" class="bg-cover bg-center w-56px h-56px border-2 border-blue-5 rounded-10px mr-12px" style="background-image: url({{ asset('images/tmp/photo-1573090951351-f256de340dea_thumb.jpeg') }})"></a>
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1560879052-0cccc41ec8fb.jpeg') }}" class="bg-cover bg-center w-56px h-56px border-2 border-blue-5 rounded-10px mr-12px" style="background-image: url({{ asset('images/tmp/photo-1560879052-0cccc41ec8fb_thumb.jpeg') }})"></a>
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1568392388563-e7b357fa41d8.jpeg') }}" class="bg-cover bg-center w-56px h-56px border-2 border-blue-5 rounded-10px mr-12px" style="background-image: url({{ asset('images/tmp/photo-1568392388563-e7b357fa41d8_thumb.jpeg') }})"></a>
                        <a href="javascript:" id="ad_more_photos" class="flex items-center justify-center w-56px h-56px border-white rounded-10px bg-blue-11 border-2 border-blue-5">
                            <span class="text-blue-1 text-24px font-medium tracking-0.45px">+2</span>
                        </a>
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1569414205711-e5279497fa38.jpeg') }}" class="hidden"></a>
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1579031421760-6455c964d968.jpeg') }}" class="hidden"></a>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row tracking-0.5px text-14px font-light bg-white rounded-8px p-12px mb-4 lg:mb-0">
                    <div class="flex items-center pb-4 lg:pb-0 mb-4 lg:mb-0 border-b lg:border-b-0 lg:pr-8 lg:mr-8 lg:border-r border-blue-4">
                        <div class="bg-yellow-1 text-white text-12px rounded flex items-center justify-center w-45px h-23px mr-24px">
                            <span class="mr-1">4</span>
                            <svg width="11" height="10" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 11 10"><g><g><path d="M8.31027,6.3249c-0.06268,0.06268 -0.08357,0.14398 -0.08357,0.22801l0.45603,2.61174c0.04179,0.24891 -0.06268,0.51871 -0.2698,0.6627c-0.20712,0.14399 -0.47693,0.16534 -0.72538,0.06268l-2.34419,-1.22326c-0.08358,-0.04178 -0.16534,-0.04178 -0.24891,0l-2.34418,1.22326c-0.10447,0.06268 -0.20712,0.08358 -0.3116,0.08358c-0.14398,0 -0.2698,-0.04179 -0.39289,-0.1231c-0.20712,-0.14399 -0.31159,-0.41379 -0.2698,-0.66269l0.45603,-2.61396c0.0209,-0.08357 -0.02089,-0.16534 -0.08357,-0.22801l-1.90675,-1.865c-0.18623,-0.18623 -0.24891,-0.45603 -0.16534,-0.70449c0.08358,-0.2489 0.2907,-0.41379 0.53961,-0.45603l2.61535,-0.3979c0.08357,-0.02089 0.16533,-0.06268 0.20711,-0.14399l1.1814,-2.38372c0.12309,-0.23029 0.35338,-0.37473 0.60229,-0.37473c0.2698,0 0.49781,0.14399 0.60229,0.37428l1.1814,2.38372c0.04178,0.08358 0.10447,0.12536 0.20711,0.14399l2.61396,0.372c0.2698,0.04179 0.47693,0.20711 0.5605,0.45603c0.08357,0.24892 0.02089,0.51871 -0.16534,0.70449z" fill="#ffffff" fill-opacity="1"></path></g></g></svg>
                        </div>
                        <div class="">
                            Atnaujintas prieš: <span class="font-medium">1d. 3val.</span>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex items-center pr-4 mr-4 lg:pr-8 lg:mr-8 lg:border-r lg:border-blue-4">
                            <img src="{{ asset('images/eye.svg') }}" class="mr-1 lg:mr-4" alt="">
                            <div>
                                Peržiūros: <span class="font-medium">612</span>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('images/heart-2.svg') }}" class="mr-1 lg:mr-4" alt="">
                            <div>
                                Įsimintas: <span class="font-medium">12</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-full max-w-337px bg-white p-4 lg:p-8">
                <div class="lg:pb-24px lg:mb-24px lg:border-b lg:border-blue-2">
                    @include('partials.user-avatar')
                </div>
                <a href="tel:+37067607905" class="flex items-center w-full text-12px tracking-0.5px bg-blue-2 rounded-4px p-4 mb-4 lg:mb-24px lg:mr-12px">
                    <img src="{{ asset('images/phone.svg') }}" class="pr-4" alt="">
                    +37067607905
                </a>
                @include('partials.email-to-seller-btn', ['additional_classes' => ''])
                <div class="mt-24px lg:mt-70px text-14px text-center">
                    <a href="/pardavejo-skelbimai" class="underline text-blue-3">Visi pardavėjo skelbimai (3)</a>
                </div>
            </div>
        </div>
    </div>
@endsection
