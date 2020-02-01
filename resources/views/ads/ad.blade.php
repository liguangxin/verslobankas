@extends('layouts.app')

@section('title') Parduodu transporto įmonę @stop

@section('content')
    @include('partials.subheader')
    <div class="container pt-4">
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
            <div class="flex-1"></div>
            <div class="w-full max-w-337px bg-white p-4 lg:p-8">
                <div class="pb-24px mb-24px border-b border-blue-2">
                    @include('partials.user-avatar')
                </div>
                <a href="tel:+37067607905" class="flex items-center w-full text-12px tracking-0.5px bg-blue-2 rounded-4px p-4 mb-24px lg:mr-12px">
                    <img src="{{ asset('images/phone.svg') }}" class="pr-4" alt="">
                    +37067607905
                </a>
                @include('partials.email-to-seller-btn', ['additional_classes' => ''])
                <div class="mt-70px text-14px text-center">
                    <a href="/pardavejo-skelbimai" class="underline text-blue-3">Visi pardavėjo skelbimai (3)</a>
                </div>
            </div>
        </div>
    </div>
@endsection
