@extends('layouts/main')

@section('title', 'Login/Register')

@section('content')
    <main>
        <section>
            <div class="container login_container">
                <div class="flex_container">
                    <div class="flex_item">
                        <div class="log_reg">
                            <p class="Login1">Login</p>
                            <p class="Registration1"> Registration</p>
                        </div>

                        <!--                    LOGIN-->
                        <div class="login" id="login_form">
                            <form action="">
                                <input type="email" placeholder="Email" required>
                                <input type="password" placeholder="Password" required>
                                <div class="form_check">
                                    <div>
                                        <input type="checkbox" id="form_check">
                                        <label for="form_check">Remember Me</label>
                                    </div>
                                    <a href="#">Forgot password</a>

                                </div>
                                <div class="pr_add bord_button">
                                    <button class="btn btn-blue" type="submit">LOGIN</button>
                                </div>
                            </form>
                            <div class="form_footer">
                                <p>Not a member? <span class="Registration1">Register now</span></p>
                            </div>
                        </div>

                        <!--                    REGISTRATION-->
                        <div class="registraion d-none" id="registration_form">
                            <form method="POST" action="{{ route('register') }}" id="register">
                                <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="First Name" required>
                                <span class="text-danger mb-2 error" id="first_name_error"></span>

                                <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required>
                                <span class="text-danger mb-2 error" id="last_name_error"></span>

                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" required>
                                <span class="text-danger mb-2 error" id="email_error"></span>

                                <input type="text" name="address" value="{{ old('address') }}" placeholder="Address" required>
                                <span class="text-danger mb-2 error" id="address_error"></span>

                                <input type="password" name="password" placeholder="Password" required>
                                <span class="text-danger mb-2 error" id="password_error"></span>

                                <input type="password" name="password_confirmation" placeholder="Password Confirmation" required>

                                <div class="pr_add bord_button">
                                    <button class="btn btn-blue" type="submit">REGISTER</button>
                                </div>
                            </form>
                            <div class="form_footer">
                                <p>Already have an account? <span class="Login1">Login</span> </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('extra-scripts')
    <script src="{{ asset('js/login.js') }}"></script>
@endsection