@extends('layouts.app')

@section('title') Peržiūrėti skelbimai @stop

@section('content')
    <div class="container py-50px">
        <div class="lg:text-18px font-light mb-6">
            Jūsų peržiūrėtų skelbimų sąrašas (iki 100 skelbimų)
        </div>
        @repeat(3)
            @include('partials.ad-perziureti')
        @endrepeat
    </div>
@stop
