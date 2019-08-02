@extends('layouts/main')

@section('title', 'Password Reset')

@section('content')
    <main>
        <section>
            <div class="container login_container">
                <div class="flex_container">
                    <div class="flex_item">
                        @if (session('status'))
                            <div class="text-danger text-center mb-4">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h2 class="text-center">Reset Password</h2>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="text-danger mb-2"> {{ $message }} </span>
                            @enderror

                            <div class="pr_add bord_button">
                                <button class="btn btn-blue" type="submit">Send Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
