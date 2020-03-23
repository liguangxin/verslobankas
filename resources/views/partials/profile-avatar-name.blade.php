<div class="flex items-center border-b border-blue-9 pb-4 mb-4">
    @auth
        <img src="{{ asset('images/user-icon-1.svg') }}" class="mr-4" alt="">
        <div class="text-12px font-light">
            <div>{{ auth()->user()->name }}</div>
            <div class="text-blue-1">{{ auth()->user()->city }}</div>
        </div>
    @endauth

    @guest
        <div class="flex h-48px w-full">
            <a href="{{ route('login') }}" class="flex items-center justify-center flex-1 text-10px font-medium uppercase tracking-0.45px text-blue-3 bg-blue-5 rounded-4px mr-4px">PRISIJUNGTI</a>
            <a href="{{ route('login') }}" class="flex items-center justify-center flex-1 text-10px font-medium uppercase tracking-0.45px text-white bg-blue-3 rounded-4px ml-4px">REGISTRUOTIS</a>
        </div>
    @endguest
</div>
