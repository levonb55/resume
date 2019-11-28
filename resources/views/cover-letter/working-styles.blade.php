@extends('layouts.main')

@section('title', 'Cover Letter - Working Style')

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
                        <div class="step active1" data-step="1">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator " data-step="2">
                            <div class="step_seperator_child" style="background: #18358A;width: 70%;height: 100%;" ></div>
                        </div>
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

            <form action="{{ route('cover-letter.style') }}" method="POST">
                @csrf
                <div class="clon step_six">
                    <div class="start_header ">
                        <div class="header_inputs">
                            <h2>How would you describe your working style?</h2>
                            <p>We’ll use this to personalize the tone of your letter to help you stand out from the crowd.</p>
                        </div>
                    </div>
                    <div class="start_body">
    {{--                    <div class="btn btn_tool str_button">--}}
    {{--                        <div class="str_btn_head">--}}
    {{--                            Organizer--}}
    {{--                        </div>--}}
    {{--                        <div class="str_btn_body">--}}
    {{--                            You're highly detail-oriented and a stickler for rules.--}}
    {{--                        </div>--}}
    {{--                        <span class="fas fa-check d-none"></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="btn btn_tool str_button">--}}
    {{--                        <div class="str_btn_head">--}}
    {{--                            Leader--}}
    {{--                        </div>--}}
    {{--                        <div class="str_btn_body">--}}
    {{--                            You're a risk-taker who likes making decisions.--}}
    {{--                        </div>--}}
    {{--                        <span class="fas fa-check d-none"></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="btn btn_tool str_button">--}}
    {{--                        <div class="str_btn_head">--}}
    {{--                            Team Player--}}
    {{--                        </div>--}}
    {{--                        <div class="str_btn_body">--}}
    {{--                            You enjoy collaborating and helping others.--}}
    {{--                        </div>--}}
    {{--                        <span class="fas fa-check d-none"></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="btn btn_tool str_button">--}}
    {{--                        <div class="str_btn_head">--}}
    {{--                            Creator--}}
    {{--                        </div>--}}
    {{--                        <div class="str_btn_body">--}}
    {{--                            You value new ideas and a more open-minded environment.--}}
    {{--                        </div>--}}
    {{--                        <span class="fas fa-check d-none"></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="btn btn_tool str_button">--}}
    {{--                        <div class="str_btn_head">--}}
    {{--                            Analyzer--}}
    {{--                        </div>--}}
    {{--                        <div class="str_btn_body">--}}
    {{--                            You like to think through tasks logically.--}}
    {{--                        </div>--}}
    {{--                        <span class="fas fa-check d-none"></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="btn btn_tool str_button">--}}
    {{--                        <div class="str_btn_head">--}}
    {{--                            Doer--}}
    {{--                        </div>--}}
    {{--                        <div class="str_btn_body">--}}
    {{--                            You do whatever it takes to get the job done.--}}
    {{--                        </div>--}}
    {{--                        <span class="fas fa-check d-none"></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="btn btn_tool str_button">--}}
    {{--                        <div class="str_btn_head">--}}
    {{--                            Guardian--}}
    {{--                        </div>--}}
    {{--                        <div class="str_btn_body">--}}
    {{--                            You like stability, order, and rigor.--}}
    {{--                        </div>--}}
    {{--                        <span class="fas fa-check d-none"></span>--}}
    {{--                    </div>--}}
    {{--                    <div class="btn btn_tool str_button">--}}
    {{--                        <div class="str_btn_head">--}}
    {{--                            Pioneer--}}
    {{--                        </div>--}}
    {{--                        <div class="str_btn_body">--}}
    {{--                            You value possibilities, take risks, and spark energy and imagination to your team.--}}
    {{--                        </div>--}}
    {{--                        <span class="fas fa-check d-none"></span>--}}
    {{--                    </div>--}}

                        @foreach($workingStyles as $key => $workingStyle)
                            <label class="btn btn_tool str_button select_item {{ in_array($key, $pickedStyles) ? 'active' : ''  }}">
                                <div class="str_btn_head">
                                    <input type="checkbox" name="styles[]" value="{{ $key }}"
                                            {{ in_array($key, $pickedStyles) ? 'checked' : ''  }}>
                                    {{ $key }}
                                </div>
                                <div class="str_btn_body">
                                    {{ $workingStyle }}
                                </div>
                                <span class="fas fa-check d-none"></span>
                            </label>
                        @endforeach
                        @error('styles')
                            <strong><span class="text-danger header-error"> {{ $message }} </span></strong>
                        @enderror

                    </div>
                </div>
                <div class="back_continue experience_page">
                    @if(auth()->user()->coverLetter->complete)
                        <a href="{{ route('cover-letter.review') }}" class="back_left">
                            <p>Cancel</p>
                        </a>
                    @else
                        <a href="{{ route('cover-letter.experience') }}" class="back_left">
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
