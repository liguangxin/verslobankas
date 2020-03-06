@extends('layouts.app')

@section('title') Pridėti skelbimą @stop

@section('content')
    <div class="subheading py-36px bg-blue-2 text-center text-18px">
        Jeigu esi prisiregistravęs, nepamiršk <a href="{{ route('login') }}" class="text-blue-3 underline">prisijungti »</a>
    </div>
    <prideti-skelbima></prideti-skelbima>
@stop
