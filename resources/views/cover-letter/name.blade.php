@extends('layouts.main')

@section('title', 'Cover Letter - Name')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <main>
        <section class="dashboard_content Cover_content">
            <div class="check">

                <div class="step-container cover_step">

                    <div class="d-inline-block">
                        <div class="step-separator active1 "></div>
                        <div class="step active1" data-step="1">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator active1" data-step="1">
                        </div>
                        <div class="steps_number active2">SKILLS & STRENGTH</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step active1" data-step="2">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator active1" data-step="2">
                        </div>
                        <div class="steps_number active2">EXPERIENCE</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step active1" data-step="3">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator active1" data-step="3"></div>
                        <div class="steps_number active2">PERSONALIZATION</div>
                    </div>
                </div>
            </div>

            <form action="" method="POST">
                @csrf
                <div class="clon step_seven">
                    <div class="start_header ">
                        <div class="header_inputs">
                            <h2>How would you like your name to appear?</h2>
                        </div>
                    </div>
                    <div class="start_body form_header">
                        <div class="study">
                            <label>First name</label>
                            <input type="text" name="first_name" value="{{ $cover->first_name }}">
                            @error('first_name')
                                <strong><span class="text-danger header-error"> {{ $message }} </span></strong>
                            @enderror
                        </div>
                        <div class="study">
                            <label>Last name</label>
                            <input type="text" name="last_name" value="{{ $cover->last_name }}">
                            @error('last_name')
                                <strong><span class="text-danger header-error"> {{ $message }} </span></strong>
                            @enderror
                        </div>

                    </div>
{{--                    <div class="start_footer">--}}
{{--                        <p>By clicking "Continue", you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>.</p>--}}
{{--                    </div>--}}
                </div>
                <div class="back_continue experience_page">
                    @if($cover->complete)
                        <a href="{{ route('cover-letter.review') }}" class="back_left">
                            <p>Cancel</p>
                        </a>
                    @else
                        <a href="{{ route('cover-letter.style') }}" class="back_left">
                            <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                        </a>
                    @endif
                    <button type="submit" class="continue_right">
                        Continue <span class="fas fa-long-arrow-alt-right"></span>
                    </button>
                </div>
            </form>
        </section>
    </main>
@endsection