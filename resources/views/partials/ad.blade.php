<div class="vbad {{ ($promoted ? 'vbad-promoted' : '') }} flex flex-col lg:flex-row rounded-lg p-12px mb-2 relative">
    <div class="absolute top-0 right-0 flex items-center text-12px font-light text-blue-1 mt-18px mr-15px">
        <span class="mr-2 tracking-custom-1">Įsiminti skelbimą</span>
        <svg width="17" height="15" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 15"><g><g><path d="M4.4828,1.17227c0.84789,0 1.70032,0.33855 2.35577,1.01182l1.25636,1.28945c0.10948,0.11105 0.2567,0.17429 0.41073,0.17429c0.15478,0 0.30201,-0.06324 0.41073,-0.17429l1.24428,-1.28329c1.31071,-1.34575 3.39449,-1.34575 4.70535,0c1.31071,1.34575 1.31071,3.49133 0,4.837c-2.12382,2.18021 -4.24842,4.36574 -6.37244,6.54595l-6.36026,-6.55227c-1.30996,-1.34729 -1.31071,-3.49132 0,-4.837c0.65535,-0.67327 1.50173,-1.01182 2.34958,-1.01182zM4.48281,0.00004c-1.14914,0 -2.29604,0.4527 -3.17105,1.35116c-1.75014,1.79692 -1.74788,4.70512 0,6.50291l6.771,6.9716c0.10947,0.11105 0.2567,0.17429 0.41073,0.17429c0.15478,0 0.30201,-0.06324 0.41073,-0.17429c2.26048,-2.32058 4.5225,-4.63879 6.78317,-6.95936c1.75015,-1.79692 1.75015,-4.71203 0,-6.50903c-1.75014,-1.79691 -4.59807,-1.79691 -6.34828,0l-0.83354,0.86375l-0.84563,-0.86991c-0.87506,-0.89846 -2.02795,-1.35116 -3.17723,-1.35116z" fill="#0063aa" fill-opacity="1"></path></g></g></svg>
    </div>
    <div class="mr-24px">
        <a href="javascript:" class="bg-cover bg-center bg-blue-2 flex items-center justify-center w-98px h-92px lg:w-168px lg:h-157px rounded-lg">
            <img src="{{ asset('images/watermark.svg') }}" alt="">
        </a>
    </div>
    <div>
        <div class="flex items-center">
            <a href="javascript:">
                <h3 class="vbad-title text-14px lg:text-16px leading-tight lg:leading-normal tracking-0.3px mt-3 lg:mt-0 mr-2">
                    Parduodu transporto įmonę
                </h3>
            </a>
            @if($promoted)
                <div class="bg-yellow-1 text-white text-12px rounded flex items-center justify-center w-36px h-18px mx-2">
                    <span class="mr-1">{{ ($iteration == 0 ? '4' : '2') }}</span>
                    <svg width="11" height="10" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 11 10"><g><g><path d="M8.31027,6.3249c-0.06268,0.06268 -0.08357,0.14398 -0.08357,0.22801l0.45603,2.61174c0.04179,0.24891 -0.06268,0.51871 -0.2698,0.6627c-0.20712,0.14399 -0.47693,0.16534 -0.72538,0.06268l-2.34419,-1.22326c-0.08358,-0.04178 -0.16534,-0.04178 -0.24891,0l-2.34418,1.22326c-0.10447,0.06268 -0.20712,0.08358 -0.3116,0.08358c-0.14398,0 -0.2698,-0.04179 -0.39289,-0.1231c-0.20712,-0.14399 -0.31159,-0.41379 -0.2698,-0.66269l0.45603,-2.61396c0.0209,-0.08357 -0.02089,-0.16534 -0.08357,-0.22801l-1.90675,-1.865c-0.18623,-0.18623 -0.24891,-0.45603 -0.16534,-0.70449c0.08358,-0.2489 0.2907,-0.41379 0.53961,-0.45603l2.61535,-0.3979c0.08357,-0.02089 0.16533,-0.06268 0.20711,-0.14399l1.1814,-2.38372c0.12309,-0.23029 0.35338,-0.37473 0.60229,-0.37473c0.2698,0 0.49781,0.14399 0.60229,0.37428l1.1814,2.38372c0.04178,0.08358 0.10447,0.12536 0.20711,0.14399l2.61396,0.372c0.2698,0.04179 0.47693,0.20711 0.5605,0.45603c0.08357,0.24892 0.02089,0.51871 -0.16534,0.70449z" fill="#ffffff" fill-opacity="1"></path></g></g></svg>
                </div>
            @endif
            <a href="#" class="mx-2">
                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 14"><g><g><path class="vbad-comments-icon" d="M9.51258,6.30149c0.20468,0 0.35063,0.15856 0.35063,0.35985c0,0.20129 -0.16078,0.35986 -0.36488,0.35986h-5.59022c-0.2041,0 -0.36488,-0.15856 -0.36488,-0.35986c0,-0.20128 0.16078,-0.35985 0.36488,-0.35985zM9.51258,3.51442c0.20468,0 0.35063,0.158 0.35063,0.35985c0,0.20129 -0.16078,0.35986 -0.36488,0.35986h-5.59022c-0.2041,0 -0.36488,-0.15856 -0.36488,-0.35986c0,-0.20128 0.16078,-0.35985 0.36488,-0.35985zM10.18127,0.07005c1.76418,0 3.19346,1.42931 3.19346,3.17931l0.00057,4.11177c0,1.75003 -1.42931,3.17931 -3.17931,3.17931h-1.60417c-0.68527,0.90402 -1.95387,2.39141 -3.4561,3.23736c-0.14583,0.07291 -0.30648,0.11678 -0.45232,0.11678c-0.21875,0 -0.42326,-0.07292 -0.59815,-0.21875c-0.30648,-0.2478 -0.40845,-0.65625 -0.26261,-1.02084c0.30648,-0.78721 0.39364,-1.53119 0.40845,-2.09971l-0.99179,0.00057c-1.75003,0 -3.17931,-1.42931 -3.17931,-3.17931v-4.12723c0,-1.75003 1.42931,-3.17931 3.17931,-3.17931h6.94196zM12.63149,3.24974c0,-1.3414 -1.09382,-2.43506 -2.4355,-2.43506h-6.95676c-1.34165,0 -2.4355,1.09363 -2.4355,2.43506l0.00057,4.1416c0,1.3414 1.09382,2.43506 2.4355,2.43506h1.3565c0.18972,0 0.3498,0.14582 0.36461,0.34974c0.02905,0.65619 -0.02963,1.66207 -0.45236,2.75571c-0.02962,0.1162 0.02906,0.17487 0.05812,0.20392c0.02905,0.02962 0.10198,0.05866 0.18972,0.01481c1.47262,-0.83104 2.72717,-2.34798 3.3396,-3.17904c0.05811,-0.08772 0.17491,-0.14583 0.2917,-0.14583h1.80879c1.34165,0 2.4355,-1.09363 2.4355,-2.43506z" fill="#0063aa" fill-opacity="1"></path></g></g></svg>
            </a>
        </div>
        <div class="hidden lg:flex text-12px text-blue-1 py-2">
            <div class="mr-2">2019-06-21</div>
            <div class="font-light">Vilnius</div>
        </div>
        <div class="text-12px font-light tracking-custom-1 pt-3 lg:pt-0 pb-4">
            Parduodu transporto įmonę. Veiklą vykdų nuo 1997m. gera reputacija, eu licencija, geros salygos su
            detalių ir kuro tiekėjais (tiek Lietuvoje, tiek užsienyje) Įmonė veiklą vykdo ir šiuo metu. Yra
            pastovūs klientai ir gera apyvarta. Kaina dar paderinsime proto ribose.
        </div>
        <div class="flex items-center justify-between border-t border-blue-10 pt-12px">
            <div class="hidden lg:flex items-center text-13px font-light">
                <div class="bg-blue-2 rounded-8px px-2 py-1 mr-24px">Internetinis verslas</div>
                <div class="flex items-center text-blue-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="16" viewBox="0 0 28 16"><g><g><path fill="#9fa9c5" d="M21.732 14.497c3.02 0 3.02-4.636 0-4.636-3.022 0-3.022 4.636 0 4.636zM10.129 11.51h8.036c.727-3.946 6.41-3.946 7.136 0h1.319c.355-1.352-.353-4.45-1.054-5.799C22.513-.155 11.338 1.352 10.738 2c-.363.396-.686.857-1.086 1.425-.442.628-.974 1.38-1.78 2.364a.658.658 0 0 1-.596.28c-2.557-.203-4.934.712-5.725 2.707-.204.52-.262 1.047-.164 1.514.101.483.367.916.806 1.22h.799c.728-3.945 6.41-3.945 7.137 0zm8.035 1.333h-8.035c-.727 3.95-6.41 3.95-7.135 0-.502 0-1.08.077-1.38-.128C-1.97 10.33.664 4.405 7.03 4.717 7.953 3.577 9.457 1.17 10.165.8c.894-.465 3.564-.93 6.517-.767 3.812.215 8.19 1.461 10.063 5.064 1.173 2.252 2.005 7.745.294 7.745H25.3c-.726 3.95-6.408 3.95-7.135 0zM6.56 14.497c3.018 0 3.018-4.636 0-4.636-3.022 0-3.022 4.636 0 4.636z"/></g></g></svg>
                    <span class="ml-3">Automobiliai</span>
                </div>
            </div>
            <div class="lg:hidden flex text-12px text-blue-1 py-2">
                <div class="mr-2">2019-06-21</div>
                <div class="font-light">Vilnius</div>
            </div>
            <div class="font-medium tracking-0.3px">8,000 EUR</div>
        </div>
    </div>
</div>
