@extends('layouts.app')

@section('content')
    <div class="container py-8 lg:py-56px max-w-435px">
        <div class="text-center text-14px mb-8">Slaptažodžio priminimas</div>

        @if (session('status'))
            <div role="alert" class="flex items-center bg-green-3 border border-green-1 rounded-4px p-21px mb-4">
                <div><img src="{{ asset('images/success.svg') }}" alt=""></div>
                <div class="text-14px font-light text-green-1 tracking-0.58px ml-25px">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        @error('email')
            <div class="flex items-start bg-red-2 border border-red-3 rounded-4px p-21px mb-4" role="alert">
                <div class="text-14px font-light tracking-0.58px text-red-3">{{ $message }}</div>
            </div>
        @enderror

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <label class="block relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" svg-inline="" role="presentation" focusable="false" tabindex="-1" class="icon absolute left-0 top-0 mt-15px ml-15px"><path fill="#9fa9c5" d="M8.618 17.75c-2.04 0-4.084.004-6.123-.005-1.198-.004-2.016-.547-2.355-1.528-.335-.97-.078-2.065.879-2.67 1.537-.969 3.16-1.803 4.766-2.661.164-.086.47.004.675.098 1.48.65 2.943.654 4.431.016.258-.11.65-.126.887-.008a89.61 89.61 0 014.166 2.24c1.23.712 1.692 1.905 1.263 3.033-.368.965-1.137 1.472-2.306 1.48-2.093.013-4.19.008-6.283.004zM4.06 5.449C4.056 2.072 6.44-.327 9.256.036c1.688.217 2.8 1.251 3.511 2.74 1.002 2.097.585 4.725-.989 6.303-1.193 1.194-2.628 1.664-4.26 1.173C5.675 9.7 4.681 8.322 4.22 6.52c-.106-.421-.13-.863-.159-1.071z"></path></svg>
                <input type="email" class="form-input text-14px pl-50px py-13px block w-full mb-12px @error('email') is-invalid @enderror" name="email" placeholder="El. pašto adresas" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </label>

            <button type="submit" class="border border-blue-3 px-27px py-15px rounded-4px uppercase w-full text-blue-3 text-12px font-medium block mx-auto my-24px">
                Siųsti atstatymo nuorodą
            </button>
        </form>
    </div>
@endsection
