@extends('layouts.main')

@section('title', 'Resume - Checkout')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
@endsection

@section('content')
    <main>
        <section class="dashboard_content">

            @if(session()->has('payment-warning'))
                <div class="alert alert-primary">
                    You need to pay to be able to download!
                </div>
            @endif

            @if(session()->has('payment-error'))
                <div class="alert alert-danger error">
                    {{ session()->get('payment-error') }}
                </div>
            @endif

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
            <form action="{{ route('checkout') }}" method="POST" id="payment-form">
                @csrf
                <div class="col-md-4 offset-md-4">
                    <div class="form-group">
                        <label for="name_on_card">Cardholder Name:</label>
                        <input type="text" class="form-control" name="name" id="name_on_card" value="{{ old('name_on_card') }}">
                        @error('name')
                            <span class="text-danger error">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ old('address') }}">
                        @error('address')
                            <span class="text-danger error">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}">
                        @error('city')
                            <span class="text-danger error">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="country">Select a Country:</label>
                        <select class="form-control" id="country" name="country">
                            <option></option>
                            @foreach($countries as $country)
                                <option value="{{ $country->iso_3166_2 }}">{{ $country->full_name }}</option>
                            @endforeach
                        </select>
                        @error('country')
                            <span class="text-danger error">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="postal_code">Postal Code:</label>
                        <input type="text" class="form-control" name="postal_code" id="postal_code" value="{{ old('postal_code') }}">
                        @error('postal_code')
                            <span class="text-danger error">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="card-element">
                            Credit or debit card
                        </label>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" class="card-errors" role="alert"></div>
                    </div>
                </div>

                <div class="back_continue experience_page">
                    <a href="{{ route('resume-review') }}" class="back_left">
                        <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                    </a>
                    <button type="submit" class="continue_right" id="payment-button">
                        Checkout
                    </button>
                </div>
            </form>

        </section>
    </main>
{{--    @dd(config('services.stripe.key'))--}}
@endsection

@section('extra-scripts')
    <script>
        (function () {
            // Create a Stripe client.
            var stripe = Stripe(@json(config('services.stripe.key')));

            // Create an instance of Elements.
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            var form = document.getElementById('payment-form');
            var paymentBtn = document.getElementById('payment-button');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Disable the submit button to prevent repeated clicks
                paymentBtn.disabled = true;

                var options = {
                    name: document.getElementById('name_on_card').value,
                    address_line1: document.getElementById('address').value,
                    address_city: document.getElementById('city').value,
                    address_country: document.getElementById('country').value,
                    address_zip: document.getElementById('postal_code').value
                };

                stripe.createToken(card, options).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;

                        // Enable the submit button
                        paymentBtn.disabled = false;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        })();

        //Scrolls into errors
        if(errorElement = document.querySelector('.error')) {
            errorElement.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
        }
    </script>
@endsection
