@extends('layouts.app')

@section('title') Mano skelbimai @stop

@section('content')
    <div class="bg-blue-8">
        <div class="container">
            <ul class="tabbed-nav flex text-12px uppercase tracking-0.5px font-medium text-blue-1">
                <li class="active">
                    <a href="javascript:" class="py-21px px-8 block">Aktyvūs skelbimai (3)</a>
                </li>
                <li class="">
                    <a href="javascript:" class="py-21px px-8 block">PASYVŪS SKELBIMAI (0)</a>
                </li>
                <li class="">
                    <a href="javascript:" class="py-21px px-8 block">ADMINISTRACIJOS PRANEŠIMAI (0)</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container py-45px">
        <div class="flex items-center justify-between mb-24px">
            <div class="flex justify-between lg:justify-start lg:text-18px font-light mb-8 lg:mb-0">
                Mano pasyvūs skelbimai <span class="text-blue-3 font-normal ml-1">(3)</span>
            </div>
            <button class="flex items-center justify-center mb-4 lg:mb-0 w-full lg:w-auto bg-blue-3 text-white text-12px uppercase font-medium tracking-0.5px bg-blue-2 rounded-4px py-4 px-24px">
                ATNAUJINTI VISUS SKELBIMUS
            </button>
        </div>

        <div class="vbad flex flex-col lg:flex-row rounded-10px p-12px mb-2 relative">
            <div class="flex-1 pr-8">
                <div class="flex">
                    <div class="mr-24px">
                        <a href="javascript:" class="bg-cover bg-center bg-blue-2 flex items-center justify-center w-98px h-92px lg:w-108px lg:h-108px rounded-lg">
                            <img src="{{ asset('images/watermark.svg') }}" alt="">
                        </a>
                    </div>
                    <div class="flex-1">
                        <div class="pt-8px border-b border-blue-10 pb-4 mb-10px">
                            <div class="flex justify-between">
                                <div>
                                    <div class="text-blue-1 text-12px">Parduodu versla > Kompiuteriai / IT</div>
                                    <div>Parduodu transporto įmonę</div>
                                </div>
                                <div class="flex flex-1 max-w-287px text-12px font-light tracking-0.23px">
                                    <div class="flex-1 pr-24px">
                                        <div class="flex justify-between">
                                            <span>Rodytas</span>
                                            <span class="text-green-1 font-normal">11 872</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span>Skaitytas</span>
                                            <span class="text-green-1 font-normal">259</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex justify-between">
                                            <span>Komentarai</span>
                                            <span class="text-green-1 font-normal">23</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <span>Įsimintinas</span>
                                            <span class="text-green-1 font-normal">4</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-12px flex justify-between">
                                <div class="flex">
                                    <div class="text-13px font-light bg-green-1 inline-block text-white px-2 py-1 rounded-8px mr-27px">Aktyvus iki 2020-08-09</div>
                                    <div class="flex items-center text-13px font-light">
                                        Skelbimo pozicija
                                        <span class="bg-yellow-1 text-white rounded-8px ml-13px px-3 py-1">31</span>
                                    </div>
                                </div>
                                <div class="font-medium tracking-0.3px">
                                    900 EUR
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="border border-blue-3 px-27px py-15px rounded-4px uppercase text-blue-3 text-12px font-medium block mr-4">
                        PARYŠKINTI SKELBIMĄ
                    </button>
                    <button class="border border-blue-3 px-27px py-15px rounded-4px uppercase text-blue-3 text-12px font-medium block">
                        IŠKELTI SKELBIMĄ
                    </button>
                </div>
            </div>
            <div class="w-157px pt-8px">
                <ul class="text-blue-1 text-12px font-light">
                    <li class="mb-8px">
                        <a href="javascript:" class="flex items-center">
                            <span class="w-24px"><img src="{{ asset('images/vbad-edit.svg') }}" alt=""></span>
                            Redaguoti
                        </a>
                    </li>
                    <li class="mb-8px">
                        <a href="javascript:" class="flex items-center">
                            <span class="w-24px"><img src="{{ asset('images/vbad-renew.svg') }}" alt=""></span>
                            Atnaujinti
                        </a>
                    </li>
                    <li class="mb-8px">
                        <a href="javascript:" class="flex items-center">
                            <span class="w-24px"><img src="{{ asset('images/vbad-extend.svg') }}" alt=""></span>
                            Pratęsti galiojimą
                        </a>
                    </li>
                    <li class="mb-8px">
                        <a href="javascript:" class="flex items-center">
                            <span class="w-24px"><img src="{{ asset('images/vbad-hide.svg') }}" alt=""></span>
                            Paslėpti
                        </a>
                    </li>
                    <li class="mb-8px">
                        <a href="javascript:" class="flex items-center">
                            <span class="w-24px"><img src="{{ asset('images/vbad-delete.svg') }}" alt=""></span>
                            Pašalinti
                        </a>
                    </li>
                    <li class="mb-8px">
                        <a href="javascript:" class="flex items-center">
                            <span class="w-24px"><img src="{{ asset('images/vbad-disable-comments.svg') }}" alt=""></span>
                            Išjungti komentarus
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
@stop
