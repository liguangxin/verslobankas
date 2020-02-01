@extends('layouts.app')

@section('title') Pardavėjo skelbimai @stop

@section('content')
    <div class="container py-45px">
        <div class="lg:flex lg:items-center lg:justify-between bg-white p-4 lg:p-8 mb-28px shadow-custom-1 border border-blue-11 rounded-10px">
            @include('partials.user-avatar')
            <div class="lg:flex">
                <div class="text-12px tracking-0.5px bg-blue-2 rounded-4px p-4 mb-2 lg:mb-0 lg:mr-12px">
                    Užsiregistravo: <span class="font-medium">2019-02-10</span>
                </div>
                <div class="text-12px tracking-0.5px bg-blue-2 rounded-4px p-4 mb-2 lg:mb-0 lg:mr-8">
                    Įdėjo skelbimų: <span class="font-medium">26</span>
                </div>
                @include('partials.email-to-seller-btn', ['additional_classes' => 'lg:w-auto'])
            </div>
        </div>

        <div class="flex lg:text-18px font-light mb-30px">
            Aktyvių skelbimų <span class="text-blue-3 font-normal ml-1">(3)</span>
        </div>

        @repeat(3)
            @include('partials.ad', ['promoted' => false])
        @endrepeat
    </div>
@stop
