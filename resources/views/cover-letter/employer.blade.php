@extends('layouts.main')

@section('title', 'Cover Letter - Employer')

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
                        <div class="step-separator " data-step="1">
                            <div class="step_seperator_child" style="background: #18358A;width: 30%;    height: 100%;" ></div>
                        </div>
                        <div class="steps_number active2">SKILLS & STRENGTH</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step " data-step="2">
                            2
                        </div>
                        <div class="step-separator " data-step="2"></div>
                        <div class="steps_number ">EXPERIENCE</div>
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

            <form action="{{ route('cover-letter.employer') }}" method="POST">
                @csrf
                <div class="clon">
                    <div class="start_header">
                        <div class="header_inputs">
                            <h2>What employer are you writing to?</h2>
                            <p>Cover letters for a specific employer get the best results.</p>
                            <div class="skills_inp form_header">
                                <div class="study">
                                    <label>Desired Company</label>
                                    <input type="text" placeholder="Apple Inc." name="employer" value="{{ old('employer') ?? $cover->employer}}">
                                    @error('employer')
                                        <strong><span class="text-danger header-error"> {{ $message }} </span></strong>
                                    @enderror
                                </div>
                               @if(!$cover->employer)
                                    <div class="skills_dont_job">
                                        <a href="{{ route('cover-letter.strengths') }}">I don't have a company in mind</a>
                                    </div>
                               @endif
                            </div>
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
                                            <p>If you know the name of your intended recipient, it's smart to include that
                                                as well. You can do that when we show you your cover letter.</p>
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
                        <a href="{{ route('cover-letter.job') }}" class="back_left">
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