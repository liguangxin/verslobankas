@extends('layouts.app')

@section('title') Peržiūrėti skelbimai @stop

@section('content')
    <div class="container py-50px h-full flex flex-col items-center justify-center">
        <div class="w-117px h-117px bg-blue-2 flex items-center justify-center rounded-10px mb-8">
            <img src="{{ asset('images/clock-blue.svg') }}" alt="">
        </div>
        <div class="text-18px font-light tracking-0.3px mb-4">Peržiūrėtų skelbimų nėra</div>
        <div class="font-light text-blue-1 tracking-0.3px mb-50px text-center">
            Čia jūs galėsite pamatyti visus savo peržiūrėtus verslo skelbimus
        </div>
        <a href="" class="flex items-center justify-center bg-blue-3 text-white text-12px uppercase font-medium tracking-0.5px bg-blue-2 rounded-4px py-15px px-24px">
            Grįžti į ankstesnį puslapį
        </a>
    </div>
@stop
