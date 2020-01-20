@extends('layouts.app')

@section('title') Pardavėjo skelbimai @stop

@section('content')
    <div class="container py-45px">
        <div class="flex justify-between lg:justify-start lg:text-18px font-light mb-30px">
            Aktyvių skelbimų <span class="text-blue-3 font-normal ml-1">(3)</span>
        </div>

        @repeat(3)
            @include('partials.ad', ['promoted' => false])
        @endrepeat
    </div>
@stop
