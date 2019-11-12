@extends('layouts.main')

@section('title', 'Cover Letter - Experience')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/jquery-ui.min.css') }}">
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
                        <div class="step active1" data-step="1">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator " data-step="2"></div>
                        <div class="steps_number active2">EXPERIENCE</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step " data-step="3">
                            3
                        </div>
                        <div class="step-separator" data-step="3"></div>
                        <div class="steps_number ">PERSONALIZATION</div>
                    </div>
                </div>
            </div>

            <form action="{{ route('cover-letter.experience') }}" method="POST">
                @csrf
                <input type="hidden" value="{{ $cover->experience ? $cover->experience : 5 }}" name="experience" class="cover-experience">
                <div class="clon step_four">
                    <div class="start_header ">
                        <div class="header_inputs">
                            <h2>How long have you been working?</h2>
                            <p>Include relevant internships, volunteer work, and unpaid jobs.</p>

                            <div class="skills_inp form_header">
                                <div class="study">
                                    <div id="slider"></div>
                                    @error('experience')
                                        <strong><span class="text-danger header-error"> {{ $message }} </span></strong>
                                    @enderror
                                </div>
                            </div>

                            @if(!$cover->experience)
                                <div class="skills_dont_job">
                                    <a href="{{ route('cover-letter.style') }}">I don't have experience.</a>
                                </div>
                            @endif

                        </div>
                        <div class="tips">
                            <div class="dropdown show">
                                <div class="customer btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <img src="{{ asset('assets/images/customer-service.png') }}">
                                </div>
                                <div class="dropdown-menu dropdown-menu-right show">
                                    <h4>What you need to know</h4>
                                    <ul>
                                        <li>
                                            <p>We'll customize your letter based on how much experience you have.</p>
                                        </li>
                                        <li>
                                            <p>Remember, if you've been working for 8-10 years or more in your target field, interships and unpaid work will be less relevant to a potential employer.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back_continue experience_page">
                    @if($cover->complete)
                        <a href="{{ route('cover-letter.review') }}" class="back_left">
                            <p>Cancel</p>
                        </a>
                    @else
                        <a href="{{ route('cover-letter.strengths') }}" class="back_left">
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

@section('extra-scripts')
    <script src="{{ asset('assets/libs/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/cover-experience.js') }}"></script>
@endsection