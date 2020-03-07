@extends('layouts.app')

@section('title') Pridėti skelbimą @stop

@section('content')
    <div class="subheading px-40px py-24px lg:py-36px bg-blue-2 text-center font-light lg:font-normal text-14px lg:text-18px">
        Jeigu esi prisiregistravęs, nepamiršk <a href="{{ route('login') }}" class="text-blue-3 underline">prisijungti »</a>
    </div>
    <prideti-skelbima></prideti-skelbima>
@stop
