@extends('layouts.app')

@section('title') Peržiūrėti skelbimai @stop

@section('content')
    <div class="container py-50px">
        @repeat(3)
            @include('partials.ad-perziureti')
        @endrepeat
    </div>
@stop
