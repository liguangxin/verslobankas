<header class="py-4 lg:py-8">
    <div class="container">
        <div class="flex items-center justify-between">
            <div>
                <a href="/" class="hidden lg:block"><img src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo@2x.png 2x') }}" alt=""></a>
                <a href="/" class="lg:hidden"><img src="{{ asset('images/logo-mini.svg') }}" alt=""></a>
            </div>
            <div class="hidden lg:flex items-center text-blue-1">
                <div class="flex items-center text-14px">
                    <a class="flex mr-6" href="javascript:">
                        <img src="{{ asset('images/heart.svg') }}" class="pr-1" alt="">
                        (0)
                    </a>
                    <a class="flex mr-6" href="javascript:">
                        <img src="{{ asset('images/clock.svg') }}" class="pr-1" alt="">
                        (0)
                    </a>
                    <a class="flex" href="javascript:">
                        <img src="{{ asset('images/chat.svg') }}" alt="">
                    </a>
                </div>
                <div class="flex text-12px ml-8 mr-25px">
                    <a href="{{ route('my-search.index') }}" class="mr-4">Paieškos (3)</a>
                    <a href="javascript:">Mano skelbimai (2)</a>
                </div>
                <div class="relative">
                    <a href="javascript:" class="block">
                        <img src="{{ asset('images/user-icon-1.svg') }}" class="overlay_trigger" data-modal="profile_menu" alt="">
                    </a>
                    <div id="profile_menu" class="profile-menu modal-content">
                        <div class="flex items-center border-b border-blue-9 pb-4 mb-4">
                            <img src="{{ asset('images/user-icon-1.svg') }}" class="mr-4" alt="">
                            <div class="text-12px font-light">
                                <div>Jack Doe</div>
                                <div class="text-blue-1">Vilnius</div>
                            </div>
                        </div>
                        <ul>
                            <li class="mb-3">
                                <a href="javascript:" class="flex items-center text-12px font-light">
                                    <img src="{{ asset('images/profile-user.svg') }}" class="mr-3" alt="">
                                    Mano skelbimai
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="javascript:" class="flex items-center text-12px font-light">
                                    <img src="{{ asset('images/profile-heart.svg') }}" class="mr-3" alt="">
                                    Įsimintini skelbimai
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="javascript:" class="flex items-center text-12px font-light">
                                    <img src="{{ asset('images/profile-clock.svg') }}" class="mr-3" alt="">
                                    Peržiūrėti skelbimai
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="{{ route('my-search.index')}}" class="flex items-center text-12px font-light">
                                    <img src="{{ asset('images/profile-search.svg') }}" class="mr-3" alt="">
                                    Išsaugotos paieškos
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="javascript:" class="flex items-center text-12px font-light">
                                    <img src="{{ asset('images/profile-chat.svg') }}" class="mr-3" alt="">
                                    Pokalbiai
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="javascript:" class="flex items-center text-12px font-light">
                                    <img src="{{ asset('images/profile-settings.svg') }}" class="mr-3" alt="">
                                    Paskyros nustatymai
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="javascript:" class="flex items-center text-12px font-light">
                                    <img src="{{ asset('images/profile-logout.svg') }}" class="mr-3" alt="">
                                    Atsijungti
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="lg:hidden flex">
                <a href="javascript:" class="flex flex-col items-center justify-center bg-blue-3 rounded-custom-1 w-40px h-40px">
                    <svg width="12" height="12" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 12 12"><g><g><path d="M6,0c-0.30113,0 -0.54545,0.24433 -0.54545,0.54545v4.9091v0h-4.9091c-0.30112,0 -0.54545,0.24432 -0.54545,0.54545c0,0.30113 0.24433,0.54545 0.54545,0.54545h4.9091v0v4.9091c0,0.30112 0.24432,0.54545 0.54545,0.54545c0.30113,0 0.54545,-0.24433 0.54545,-0.54545v-4.9091v0h4.9091c0.30112,0 0.54545,-0.24432 0.54545,-0.54545c0,-0.30113 -0.24433,-0.54545 -0.54545,-0.54545h-4.9091v0v-4.9091c0,-0.30112 -0.24432,-0.54545 -0.54545,-0.54545z" fill="#ffffff" fill-opacity="1"></path></g></g></svg>
                    <span class="text-12px text-white">Įdėk</span>
                </a>
                <a href="javascript:" class="flex flex-col items-center justify-center px-4">
                    <img src="{{ asset('images/heart.svg') }}" class="pr-1" alt="">
                    <span class="text-blue-1 text-12px">Įsimintini</span>
                </a>
                <a href="javascript:" class="flex flex-col items-center justify-center pr-4">
                    <img src="{{ asset('images/clock.svg') }}" class="pr-1" alt="">
                    <span class="text-blue-1 text-12px">Paieškos</span>
                </a>
                <button class="hamburger hamburger--collapse" type="button">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
            </div>
        </div>
    </div>
</header>
