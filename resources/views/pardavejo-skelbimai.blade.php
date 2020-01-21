@extends('layouts.app')

@section('title') Pardavėjo skelbimai @stop

@section('content')
    <div class="container py-45px">
        <div class="lg:flex lg:items-center lg:justify-between bg-white p-4 lg:p-8 mb-28px shadow-custom-1 border border-blue-11 rounded-10px">
            <div class="flex items-center border-b lg:border-0 border-blue-2 pb-24px lg:pb-0 mb-24px lg:mb-0">
                <div class="pr-14px">
                    <img src="{{ asset('images/tmp_profile_photo.jpg') }}" class="w-72px rounded-20px" alt="">
                </div>
                <div class="flex-1 text-14px leading-tight">
                    <div>Šarūnas Bužinskis</div>
                    <div class="text-blue-1">Vinius</div>
                </div>
            </div>
            <div class="lg:flex">
                <div class="text-12px tracking-0.5px bg-blue-2 rounded-4px p-4 mb-2 lg:mb-0 lg:mr-12px">
                    Užsiregistravo: <span class="font-medium">2019-02-10</span>
                </div>
                <div class="text-12px tracking-0.5px bg-blue-2 rounded-4px p-4 mb-2 lg:mb-0 lg:mr-8">
                    Įdėjo skelbimų: <span class="font-medium">26</span>
                </div>
                <button class="flex items-center w-full lg:w-auto bg-blue-3 text-white text-12px uppercase font-medium tracking-0.5px bg-blue-2 rounded-4px p-4">
                    <svg width="17" height="12" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 12"><g><g><path d="M0.06684,10.87678c0,-0.20052 -0.06684,-0.33334 -0.06684,-0.53385v-7.27422l4.33778,3.53644l-4.27089,4.27089zM16.0824,11.68758c-0.20052,0.13397 -0.46702,0.20096 -0.73438,0.20096h-13.81422c-0.26736,0 -0.53385,-0.06699 -0.73438,-0.20096l4.40444,-4.41401l1.00087,0.86907c1.60156,1.27098 2.93667,1.27098 4.47133,0l1.00087,-0.86907l4.40445,4.41401zM15.34884,0c0.86718,0 1.53471,0.66753 1.53471,1.53471v0.26736l-6.80645,5.606c-1.20137,1.00086 -2.00173,1.00086 -3.20311,0l-6.87333,-5.606v-0.26736c0,-0.86718 0.66753,-1.53471 1.53471,-1.53471zM16.87357,3.07006l-0.00005,0.00004v-0.00077zM16.87352,10.34355c0,0.20052 0,0.33334 -0.06669,0.53385l-4.26105,-4.27089l4.32774,-3.53641z" fill="#ffffff" fill-opacity="1"></path></g></g></svg>
                    <span class="ml-4">RAŠYTI LAIŠKĄ PARDAVĖJUI</span>
                </button>
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
