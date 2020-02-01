@extends('layouts.app')

@section('title') Mano paieškos @stop

@section('content')
    <div class="container max-w-687px py-45px">
        <div class="lg:text-18px font-light mb-18px lg:mb-8">
            Jūsų peržiūrėtų skelbimų sąrašas (iki 100 skelbimų) <span class="text-blue-3 font-normal ml-1">(3)</span>
        </div>
        <div class="lg:hidden text-12px font-light mb-24px">
            Norėdami koreguoti spauskite ant skelbimo
        </div>
        @repeat(3)
            <mano-paieskos iteration="{{ $iteration }}"></mano-paieskos>
        @endrepeat
    </div>
@endsection
