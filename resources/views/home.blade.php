@extends('layouts.app')

@section('title') Pagrindinis @stop

@section('content')
    @include('partials.categories')
    @include('partials.ad-filters')
    @include('partials.ad-list')
    @include('partials.footer-cities')
@endsection
