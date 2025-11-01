@extends('layouts.admin')

@section('title', 'Login')

@section('content')

<form method="POST" action="{{ route('auth.login') }}">
    @csrf

    <div class="mb-3">
        @error ('auth')
            <div class="alert alert-danger">
                {{ $message }}
            </div>
        @enderror

        <x-form.label for="username">Gebruikersnaam</x-form.label>
        <x-form.input id="username"
                      name="username"
                      value="{{ old('username') }}"
                      class="@error($errors->any()) is-invalid @enderror"
                      required
        ></x-form.input>

    </div>

    <div class="mb-3">
        <x-form.label for="password">Wachtwoord</x-form.label>
        <x-form.input id="password"
                      type="password"
                      name="password"
                      class="@error($errors->any()) is-invalid @enderror"
                      required
        ></x-form.input>
    </div>

    <div class="d-flex justify-content-between">

        <div class="d-flex gap-2">
            <x-form.button>Login</x-form.button>

            <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#cancelModal">
                Ga terug
            </a>
        </div>
    </div>
</form>
@endsection
