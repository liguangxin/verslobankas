<ul>
    @auth
        <li class="mb-3">
            <a href="/mano-skelbimai" class="flex items-center text-12px font-light">
                <img src="{{ asset('images/profile-user.svg') }}" class="mr-3" alt="">
                Mano skelbimai
            </a>
        </li>
    @endauth
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
        <a href="{{ route('mano-paieskos')}}" class="flex items-center text-12px font-light">
            <img src="{{ asset('images/profile-search.svg') }}" class="mr-3" alt="">
            Išsaugotos paieškos
        </a>
    </li>
    @auth
        <li class="mb-3">
            <a href="javascript:" class="flex items-center text-12px font-light">
                <img src="{{ asset('images/profile-chat.svg') }}" class="mr-3" alt="">
                Pokalbiai
            </a>
        </li>
    @endauth
    @auth
        <li class="mb-3">
            <a href="javascript:" class="flex items-center text-12px font-light">
                <img src="{{ asset('images/profile-settings.svg') }}" class="mr-3" alt="">
                Paskyros nustatymai
            </a>
        </li>
    @endauth
    @auth
        <li class="mb-3">
            <a href="javascript:" class="flex items-center text-12px font-light">
                <img src="{{ asset('images/profile-logout.svg') }}" class="mr-3" alt="">
                Atsijungti
            </a>
        </li>
    @endauth
</ul>
