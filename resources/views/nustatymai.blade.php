@extends('layouts.app')

@section('title') Nustatymai @stop

@section('content')
    <nustatymai :user="{{ auth()->user() }}"></nustatymai>
@stop
