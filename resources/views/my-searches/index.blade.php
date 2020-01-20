@extends('layouts.app')

@section('content')
    <div class="container max-w-687px py-45px">
        <div class="flex justify-between lg:justify-start lg:text-18px font-light mb-8">
            Jūsų peržiūrėtų skelbimų sąrašas (iki 100 skelbimų) <span class="text-blue-3 font-normal ml-1">(3)</span>
        </div>
        @repeat(3)
            <div class="flex items-center bg-white p-2 lg:p-24px border border-blue-5 mb-2 rounded-lg">
                <div class="flex items-center">
                    <button type="button" class="w-30px">
                        <img src="{{ asset('images/close.svg') }}" alt="">
                    </button>
                </div>
                <div class="flex items-center">
                    <div class="hidden lg:block mr-3">
                        <span class="bg-yellow-1 text-white text-12px px-6px inline-block min-w-28px text-center rounded">+9</span>
                    </div>
                    <div>
                        <div class="text-12px lg:text-13px font-light">Antraštės tekstas</div>
                        <div class="text-10px text-blue-1">Kompiuterija | Vilnius</div>
                    </div>
                </div>
                <div class="text-10px flex justify-end flex-1 lg:mr-4">
                    <div class="flex flex-col lg:flex-row lg:items-center mr-3">
                        <div class="hidden lg:block max-w-90px">Gauti naujus skelbimus ekrane</div>
                        <div class="lg:hidden">Gauti ekrane</div>
                        <div class="lg:ml-4">
                            <label class="custom-switcher custom-switcher-2">
                                <input type="checkbox" class="custom-switcher-input">
                                <span class="custom-switcher-wrap">
                                    <span class="custom-switcher-circle"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center">
                        <div class="hidden lg:block max-w-90px">Gauti naujus skelbimus el. paštu</div>
                        <div class="lg:hidden">El. paštu</div>
                        <div class="lg:ml-4">
                            <label class="custom-switcher custom-switcher-2">
                                <input type="checkbox" class="custom-switcher-input">
                                <span class="custom-switcher-wrap">
                                    <span class="custom-switcher-circle"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block">
                    <button class="overlay_trigger bg-blue-2 p-3 rounded" data-modal="my_search_{{ $iteration }}">
                        <svg width="17" height="17" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g><g><path d="M15.68392,4.21074l-1.08327,1.08327l-2.88819,-2.88819l1.08327,-1.08327c0.49735,-0.49735 1.3076,-0.49662 1.80569,0l1.08327,1.08327c0.24129,0.24056 0.37412,0.5623 0.37412,0.90246c-0.00073,0.34018 -0.1343,0.66043 -0.37486,0.90246zM6.04687,13.85187l-4.03709,1.15412l1.15389,-4.03972l7.83707,-7.84366l2.88398,2.88641zM15.32289,0.60074c-0.89358,-0.89432 -2.34924,-0.89432 -3.24352,0l-9.72926,9.73077c-0.06114,0.06114 -0.10608,0.13702 -0.12965,0.22027l-1.44093,5.04548c-0.05083,0.17827 -0.00073,0.36907 0.12966,0.50019c0.09724,0.09724 0.22689,0.14955 0.36097,0.14955c0.04715,0 0.0943,-0.00663 0.13997,-0.01989l5.04549,-1.44166c0.08324,-0.02358 0.15985,-0.06852 0.221,-0.12966l9.72775,-9.72925c0.4339,-0.43317 0.67184,-1.00925 0.67184,-1.62216c0,-0.61291 -0.23794,-1.18899 -0.67184,-1.62216z" fill="#9fa9c5" fill-opacity="1"></path></g></g></svg>
                    </button>
                </div>
            </div>
            <div id="my_search_{{ $iteration }}" class="mysearch-edit modal-content absolute">
                ok
            </div>
        @endrepeat
    </div>
@endsection
