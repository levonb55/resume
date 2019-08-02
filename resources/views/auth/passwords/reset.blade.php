@extends('layouts/main')

@section('title', 'Password Reset')

@section('content')
    <main>
        <section>
            <div class="container login_container">
                <div class="flex_container">
                    <div class="flex_item">
                        <h2 class="text-center">Reset Password</h2>
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">

                            <input type="email" name="email" placeholder="Email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="text-danger mb-2"> {{ $message }} </span>
                            @enderror

                            <input type="password" name="password" required>
                            @error('password')
                                <span class="text-danger mb-2"> {{ $message }} </span>
                            @enderror

                            <input type="password" name="password_confirmation" required>

                            <div class="pr_add bord_button">
                                <button class="btn btn-blue" type="submit">Reset Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
