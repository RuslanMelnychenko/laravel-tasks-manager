@extends('layouts.app')
@section('title', __('auth.register.title'))

@section('content')
    <div class="border-2 max-w-md p-6 rounded-lg mx-auto mt-12">
        <form action="{{ route('register.action') }}" method="post">
            <h1 class="text-2xl text-center mb-2">{{ __('auth.register.title') }}</h1>
            <x-forms.input type="email" required value="{{ old('email') }}" class="my-2" name="email"
                           autocomplete="username" placeholder="{{ __('auth.input.email') }}"/>
            @error('email')
            <x-forms.input-error :message="$message"/> @enderror
            <x-forms.input type="password" class="my-2" name="password" autocomplete="new-password"
                           placeholder="{{ __('auth.input.password') }}"/>
            @error('password')
            <x-forms.input-error :message="$message"/> @enderror
            <x-forms.input type="password" class="my-2" name="password_confirmation " autocomplete="new-password"
                           placeholder="{{ __('auth.input.password_confirmation') }}"/>
            @csrf
            <div class="text-center">
                <x-forms.submit value="{{ __('auth.register.btn') }}" class="my-2"/>
            </div>
        </form>
    </div>
@endsection
