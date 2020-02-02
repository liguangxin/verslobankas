@extends('layouts.app')

@section('title') Parduodu transporto įmonę @stop

@push('header-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endpush

@push('footer-scripts')
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
            <div class="flex-1">
                <div class="relative">
                    <button class="absolute right-0 top-0 mt-10px mr-10px lg:mr-23px w-42px h-42px bg-blue-2 rounded-7px flex items-center justify-center" type="button">
                        <img src="{{ asset('images/heart-2.svg') }}" alt="">
                    </button>
                    <a href="javascript:" class="block bg-cover bg-center rounded-10px h-216px lg:h-394px lg:mr-13px" style="background-image:url({{ asset('images/tmp/photo-1544411451-4d629e09a6bb.jpeg') }})"></a>
                    <div class="flex justify-center py-10px lg:py-0 lg:absolute lg:left-0 lg:right-0 lg:mx-auto lg:-mt-70px">
                        <a href="javascript:" class="bg-cover bg-center w-56px h-56px border-2 border-blue-5 rounded-10px mr-12px" style="background-image: url({{ asset('images/tmp/photo-1573090951351-f256de340dea_thumb.jpeg') }})"></a>
                        <a href="javascript:" class="bg-cover bg-center w-56px h-56px border-2 border-blue-5 rounded-10px mr-12px" style="background-image: url({{ asset('images/tmp/photo-1573090951351-f256de340dea_thumb.jpeg') }})"></a>
                        <a href="javascript:" class="bg-cover bg-center w-56px h-56px border-2 border-blue-5 rounded-10px mr-12px" style="background-image: url({{ asset('images/tmp/photo-1573090951351-f256de340dea_thumb.jpeg') }})"></a>
                        <a href="javascript:" class="flex items-center justify-center w-56px h-56px border-white rounded-10px bg-blue-11 border-2 border-blue-5">
                            <span class="text-blue-1 text-24px font-medium tracking-0.45px">+2</span>
                        </a>
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
