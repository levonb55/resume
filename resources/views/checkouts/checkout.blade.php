@extends('layouts.main')

@section('title', 'Resume - Checkout')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <main>
        <section class="dashboard_content">
            <div class="clon">
                <div class="the_company websites">
                    <div class="second_block">
                        <h2 class="text-center">Get Full Access to Resumes & Job Tools!</h2>
                    </div>

                    <div class="row dow_row">
                        <div class="col-md-4 dow_col_left">
                            <div class="dow_col_left_head">
                                Best Price
                            </div>
                            <div class="dow_col_left_body">
                                <div class="month_acces">
{{--                                    <h4>ONE TIME ACCESS</h4>--}}
                                    <span>$29.99</span>
                                </div>
                                <ul class="dow_left_ul">
                                    <li>
                                        <p>Dozens of professional designs</p>
                                        <i class="fas fa-check"></i>
                                    </li>
                                    <li>
                                        <p>Multiple Formats (DOC, PDF, TXT)</p>
                                        <i class="fas fa-check"></i>
                                    </li>
                                    <li>
                                        <p>One Time Download in 3 formats</p>
                                        <i class="fas fa-check"></i>
                                    </li>
                                </ul>
                            </div>
{{--                            <div class="dow_col_left_footer">--}}
{{--                                <div class="check">--}}
{{--                                    <label for="ch1" class="containera">--}}
{{--                                        <input type="checkbox" id="ch1">--}}
{{--                                        <span class="checkmark"></span>--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
{{--                        <div class="col-md-4 dow_col_right">--}}
{{--                            <div class="tips">--}}

{{--                                <div class="dropdown show">--}}
{{--                                    <div class="customer btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true">--}}
{{--                                        <img src="img/customer-service.png">--}}
{{--                                    </div>--}}
{{--                                    <div class="dropdown-menu dropdown-menu-right show" x-placement="bottom-end" style="position: absolute; transform: translate3d(0px, 40px, 0px); top: 0px; left: 0px; will-change: transform;">--}}
{{--                                        <h4>IMPORTANT!</h4>--}}
{{--                                        <ul>--}}
{{--                                            <li>--}}
{{--                                                <p>14-day money back guarantee. You may cancel by email, by chat or by calling us toll-free at 444 - 444 - 4444</p>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <p>Pay $125.40 up-front and save 62%. Automatically renews each year. Cancel anytime.</p>--}}
{{--                                            </li>--}}
{{--                                            <li>--}}
{{--                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                </div>

            </div>

            <h2 class="text-center">Checkout</h2>
            <form action="{{ route('checkout') }}" method="POST">
                @csrf
                <div class="col-md-4 offset-md-4">
                    <div class="form-group">
                        <label for="full_name">Full name:</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile phone:</label>
                        <input type="text" class="form-control" id="mobile" name="mobile"  value="{{ old('mobile') }}">
                    </div>
                </div>

                <div class="back_continue experience_page">
                    <a href="{{ route('resume-review') }}" class="back_left">
                        <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                    </a>
                    <button type="submit" class="continue_right">
                        Checkout
                    </button>
                </div>
            </form>

        </section>
    </main>
@endsection
