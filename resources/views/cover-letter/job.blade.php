@extends('layouts.main')

@section('title', 'Cover Letter - Job')

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
                            <div class="step-separator " data-step="1"></div>
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

            <form action="{{ route('cover-letter.job') }}" method="POST">
                @csrf
                <div class="clon">
                    <div class="start_header">
                        <div class="header_inputs">
                            <h2>What’s the job title you’re applying for?</h2>
                            <p>You’ll want to make it clear to the employer which job you want.</p>

                            <div class="skills_inp form_header">
                                <div class="study">
                                    <label>Desired Position</label>
                                    <input type="text" class="prof-search" placeholder="Accountant" name="job" value="{{ old('job') ?? $cover->job }}">
                                    @error('job')
                                        <strong><span class="text-danger header-error"> {{ $message }} </span></strong>
                                    @enderror
                                </div>
                               @if(!$cover->job)
                                    <div class="skills_dont_job">
                                        <a href="{{ route('cover-letter.employer') }}">I don't have a job in mind</a>
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
                                            <p>It's okay to create a cover letter without a specific job in mind right now. You can always come back to enter that information later.</p>
                                        </li>
                                        <li>
                                            <p>Answer the following questions so that we can help you create a professional cover letter</p>
                                        </li>
{{--                                        <li>--}}
{{--                                            <p>Rest assured we will find you a great job</p>--}}
{{--                                        </li>--}}
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
                        <a href="{{ route('cover-letter.choose-template') }}" class="back_left">
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
    <script src="{{asset('js/experience.js')}}"></script>
@endsection