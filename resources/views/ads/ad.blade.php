@extends('layouts.app')

@section('title') Parduodu transporto įmonę @stop

@push('header-css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
@endpush

@push('footer-scripts')
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
@endpush

@section('content')
    @include('partials.subheader')
    <div class="container py-4">
        <div class="hidden lg:flex items-center justify-between pb-24px">
            <div class="text-14px tracking-0.5px font-light">
                <a href="javascript:">Parduodu versla</a>  <span class="text-purple-2">/</span>
                <a href="javascript:">Vilnius</a>  <span class="text-purple-2">/</span>
                <a href="javascript:">Transportas</a>
            </div>
            <a href="javascript:">
                <img src="{{ asset('images/arrow-back-1.svg') }}" alt="Atgal">
            </a>
        </div>
        <div class="flex flex-col lg:flex-row lg:items-start">
            <div class="flex-1 lg:mr-13px">
                <div class="relative mb-25px">
                    <button class="absolute right-0 top-0 mt-10px mr-10px lg:mr-23px w-42px h-42px bg-blue-2 rounded-7px flex items-center justify-center" type="button">
                        <img src="{{ asset('images/heart-2.svg') }}" alt="">
                    </button>
                    <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1544411451-4d629e09a6bb.jpeg') }}" class="block bg-cover bg-center rounded-10px h-216px lg:h-394px" style="background-image:url({{ asset('images/tmp/photo-1544411451-4d629e09a6bb.jpeg') }})"></a>
                    <div class="flex justify-center py-10px lg:py-0 lg:absolute lg:left-0 lg:right-0 lg:mx-auto lg:-mt-70px">
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1573090951351-f256de340dea.jpeg') }}" class="bg-cover bg-center w-56px h-56px border-2 border-blue-5 rounded-10px mr-12px" style="background-image: url({{ asset('images/tmp/photo-1573090951351-f256de340dea_thumb.jpeg') }})"></a>
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1560879052-0cccc41ec8fb.jpeg') }}" class="bg-cover bg-center w-56px h-56px border-2 border-blue-5 rounded-10px mr-12px" style="background-image: url({{ asset('images/tmp/photo-1560879052-0cccc41ec8fb_thumb.jpeg') }})"></a>
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1568392388563-e7b357fa41d8.jpeg') }}" class="bg-cover bg-center w-56px h-56px border-2 border-blue-5 rounded-10px mr-12px" style="background-image: url({{ asset('images/tmp/photo-1568392388563-e7b357fa41d8_thumb.jpeg') }})"></a>
                        <a href="javascript:" id="ad_more_photos" class="flex items-center justify-center w-56px h-56px border-white rounded-10px bg-blue-11 border-2 border-blue-5">
                            <span class="text-blue-1 text-24px font-medium tracking-0.45px">+2</span>
                        </a>
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1569414205711-e5279497fa38.jpeg') }}" class="hidden"></a>
                        <a data-fancybox="gallery" href="{{ asset('images/tmp/photo-1579031421760-6455c964d968.jpeg') }}" class="hidden"></a>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row tracking-0.5px text-14px font-light bg-white rounded-8px p-12px mb-4 lg:mb-8">
                    <div class="flex items-center pb-4 lg:pb-0 mb-4 lg:mb-0 border-b lg:border-b-0 lg:pr-8 lg:mr-8 lg:border-r border-blue-4">
                        <div class="bg-yellow-1 text-white text-12px rounded flex items-center justify-center w-45px h-23px mr-24px">
                            <span class="mr-1">4</span>
                            <svg width="11" height="10" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 11 10"><g><g><path d="M8.31027,6.3249c-0.06268,0.06268 -0.08357,0.14398 -0.08357,0.22801l0.45603,2.61174c0.04179,0.24891 -0.06268,0.51871 -0.2698,0.6627c-0.20712,0.14399 -0.47693,0.16534 -0.72538,0.06268l-2.34419,-1.22326c-0.08358,-0.04178 -0.16534,-0.04178 -0.24891,0l-2.34418,1.22326c-0.10447,0.06268 -0.20712,0.08358 -0.3116,0.08358c-0.14398,0 -0.2698,-0.04179 -0.39289,-0.1231c-0.20712,-0.14399 -0.31159,-0.41379 -0.2698,-0.66269l0.45603,-2.61396c0.0209,-0.08357 -0.02089,-0.16534 -0.08357,-0.22801l-1.90675,-1.865c-0.18623,-0.18623 -0.24891,-0.45603 -0.16534,-0.70449c0.08358,-0.2489 0.2907,-0.41379 0.53961,-0.45603l2.61535,-0.3979c0.08357,-0.02089 0.16533,-0.06268 0.20711,-0.14399l1.1814,-2.38372c0.12309,-0.23029 0.35338,-0.37473 0.60229,-0.37473c0.2698,0 0.49781,0.14399 0.60229,0.37428l1.1814,2.38372c0.04178,0.08358 0.10447,0.12536 0.20711,0.14399l2.61396,0.372c0.2698,0.04179 0.47693,0.20711 0.5605,0.45603c0.08357,0.24892 0.02089,0.51871 -0.16534,0.70449z" fill="#ffffff" fill-opacity="1"></path></g></g></svg>
                        </div>
                        <div class="">
                            Atnaujintas prieš: <span class="font-medium">1d. 3val.</span>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex items-center pr-4 mr-4 lg:pr-8 lg:mr-8 lg:border-r lg:border-blue-4">
                            <img src="{{ asset('images/eye.svg') }}" class="mr-1 lg:mr-4" alt="">
                            <div>
                                Peržiūros: <span class="font-medium">612</span>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="{{ asset('images/heart-2.svg') }}" class="mr-1 lg:mr-4" alt="">
                            <div>
                                Įsimintas: <span class="font-medium">12</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col lg:flex-row lg:justify-between border-b border-blue-4 pb-24px mb-24px">
                    <div class="mb-4 lg:mb-0">
                        <h1 class="text-26px font-light tracking-0.5px leading-tight">Parduodu transporto įmonę</h1>
                        <div class="font-light text-blue-1">Vilnius</div>
                    </div>
                    <div class="text-26px font-medium tracking-0.5px uppercase text-blue-3">
                        8,000 EUR
                    </div>
                </div>
                <div class="text-14px tracking-0.58px leading-32px border-b border-blue-4 pb-24px mb-24px">
                    <div class="lg:flex lg:justify-between">
                        <span class="font-light">Miestas:</span>
                        <span class="font-medium">Vilnius</span>
                    </div>
                    <div class="lg:flex lg:justify-between">
                        <span class="font-light">Kategorija:</span>
                        <span class="font-medium">Automobiliai</span>
                    </div>
                    <div class="lg:flex lg:justify-between">
                        <span class="font-light">Praėjųsių metų apyvarta:</span>
                        <span class="font-medium">100,000 - 300,000 EUR</span>
                    </div>
                    <div class="lg:flex lg:justify-between">
                        <span class="font-light">Vidutinis lankytojų skaičius:</span>
                        <span class="font-medium">1229</span>
                    </div>
                </div>
                <div class="flex flex-col-reverse lg:items-center lg:flex-row lg:justify-between mb-21px">
                    <div class="text-24px font-light tracking-0.45px mt-4 lg:mt-0">Aprašymas</div>
                    <div class="flex -ml-1 lg:ml-0 -mr-1">
                        <button type="button" class="h-42px lg:h-47px w-42px lg:w-47px rounded-8px bg-blue-2 flex items-center justify-center mx-1">
                            <img src="{{ asset('images/adactions-messenger.svg') }}" alt="">
                        </button>
                        <button type="button" class="h-42px lg:h-47px w-42px lg:w-47px rounded-8px bg-blue-2 flex items-center justify-center mx-1">
                            <img src="{{ asset('images/adactions-share.svg') }}" alt="">
                        </button>
                        <button type="button" class="h-42px lg:h-47px w-42px lg:w-47px rounded-8px bg-blue-2 flex items-center justify-center mx-1">
                            <img src="{{ asset('images/adactions-print.svg') }}" alt="">
                        </button>
                        <button type="button" class="h-42px lg:h-47px w-42px lg:w-47px rounded-8px bg-blue-2 flex items-center justify-center mx-1">
                            <img src="{{ asset('images/adactions-stop.svg') }}" alt="">
                        </button>
                        <button type="button" class="h-42px lg:h-47px w-42px lg:w-47px rounded-8px bg-blue-2 flex items-center justify-center mx-1">
                            <img src="{{ asset('images/adactions-edit.svg') }}" alt="">
                        </button>
                        <button type="button" class="h-42px lg:h-47px w-42px lg:w-47px rounded-8px bg-blue-2 flex items-center justify-center mx-1">
                            <img src="{{ asset('images/adactions-copy.svg') }}" alt="">
                        </button>
                    </div>
                </div>
                <div class="mb-10">
                    <div class="cms text-14px font-light tracking-0.26px leading-21px mb-6">
                        <p>Parduodamas pelningai veikiantis ir kiekvieną mėnesį augantis verslas.
                            Įmonė pradėjo veiklą nuo 2018-10 ir per pirmuosius trijus mėnesius (2018-10/11/12) gavo 4630 EUR pajamų iš kurių 2540 EUR gryno pelno. Visi pinigai buvo investuojami į reklamą (kino teatre, blogeriai, Google AdWords reklama).</p>
                        <p>Pagrindinė MB „Skruzdis“ veiklos sritis – skruzdėlių fermų gamyba bei prekyba. Įmonė veiklą vykdo – Lietuvoje, Latvijoje ir pradėda Estijoje.</p>
                        <p>Skruzdėlių ferma – yra ryški ir ypatinga dovana, tinkanti bet kokiai progai. Mūsų fermos puikiai tinka vaikams – jiems tai malonus ir įdomus užsiėmimas, kuris ugdo sąmoningumą ir motorinius įgūdžius. Skruzdėlės – tai nedideli namų augintiniai. Vaikai, rūpindamiesi jomis, mokosi atsakingumo ir rūpestingumo.</p>
                    </div>
                    <a href="javascript:" class="text-14px underline text-blue-3">Rodyti visą skelbimą</a>
                </div>
                <div>
                    <div class="text-24px font-light tracking-0.45px mt-4 lg:mt-0 mb-4">Komentarai (4)</div>
                    <div class="text-14px tracking-0.26px mb-21px">
                        Puslapis sukurtas 2019-08-02. Nuo sukūrimo datos skundų negauta.
                    </div>
                    <div class="border border-dashed border-blue-1 h-87px mb-4 flex items-center justify-center rounded-8px text-18px font-light text-blue-1 tracking-0.3px">
                        Komentarų nėra
                    </div>
                    @repeat(3)
                        <div class="bg-white p-4 rounded-8px relative mb-4">
                            <div class="flex items-center text-12px">
                                <img src="{{ asset('images/user-icon-1.svg') }}" alt="" class="mr-4">
                                <div class="flex flex-col lg:flex-row flex-1">
                                    <div class="font-light mb-3 lg:mb-0 lg:mr-8">
                                        <div>Jack Doe</div>
                                        <div class="text-blue-1">Vilnius</div>
                                    </div>
                                    <div class="flex-1 flex flex-col lg:flex-row justify-between">
                                        <div class="font-light mb-3 lg:mb-0 lg:pr-12">Sveiki, mano sudomino. Ar galetumete man paskambinti? Mano nr 867420316</div>
                                        <div class="flex-none text-blue-1 pr-6">2019-08-04</div>
                                    </div>
                                    <button class="absolute top-0 right-0 mt-25px mr-13px">
                                        <img src="{{ asset('images/comment-del.svg') }}" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endrepeat
                </div>
                <div class="flex flex-col lg:flex-row items-center justify-between mt-4 lg:mt-24px mb-8">
                    <a href="javascript:" class="text-14px text-blue-3 tracking-0.58px mb-3 lg:mb-0">Visi komentarai (3)</a>
                    <button type="button" class="w-full lg:w-auto border border-blue-3 px-40px py-15px rounded-4px uppercase text-blue-3 text-12px font-medium block">
                        KOMENTUOTI
                    </button>
                </div>
            </div>
            <div class="w-full max-w-337px bg-white p-4 lg:p-8">
                <div class="lg:pb-24px lg:mb-24px lg:border-b lg:border-blue-2">
                    @include('partials.user-avatar')
                </div>
                <a href="tel:+37067607905" class="flex items-center w-full text-12px tracking-0.5px bg-blue-2 rounded-4px p-4 mb-4 lg:mb-24px lg:mr-12px">
                    <img src="{{ asset('images/phone.svg') }}" class="pr-4" alt="">
                    +37067607905
                </a>
                @include('partials.email-to-seller-btn', ['additional_classes' => ''])
                <div class="mt-24px lg:mt-70px text-14px text-center">
                    <a href="/pardavejo-skelbimai" class="underline text-blue-3">Visi pardavėjo skelbimai (3)</a>
                </div>
            </div>
        </div>
        <div class="hidden lg:flex lg:items-center lg:justify-between bg-white p-4 lg:p-8 mb-28px shadow-custom-1 border border-blue-11 rounded-10px">
            @include('partials.user-avatar')
            <div class="lg:flex">
                <a href="tel:+37067607905" class="flex items-center text-12px tracking-0.5px bg-blue-2 rounded-4px p-4 pr-56px lg:mr-12px">
                    <img src="{{ asset('images/phone.svg') }}" class="pr-6" alt="">
                    +37067607905
                </a>
                @include('partials.email-to-seller-btn', ['additional_classes' => 'lg:w-auto'])
            </div>
        </div>
        <div>
            <h4 class="text-22px font-light tracking-0.41px mb-21px">Panašūs verslo skelbimai</h4>
            @repeat(3)
                @if($iteration < 1)
                    @include('partials.ad', ['promoted' => true])
                @else
                    @include('partials.ad', ['promoted' => false])
                @endif
            @endrepeat
        </div>
        <div class="mb-50px">
            @include('partials.footer-cities')
        </div>
    </div>
@endsection
