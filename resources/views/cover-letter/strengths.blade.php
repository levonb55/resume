@extends('layouts.main')

@section('title', 'Cover Letter - Strengths')

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
                            <div class="step_seperator_child" style="background: #18358A;width: 70%;    height: 100%;" ></div>
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
            <div class="clon">
                <div class="start_header">
                    <div class="header_inputs">
                        <h2>Select your top strengths</h2>
                        <p>Showing how you’re unique helps you stand out from the competition. Choose 3 strengths!</p>
                    </div>

                </div>
                <div class="start_body">
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                    <button class="btn btn_tool str_button">Strengths 1 <span class="fas fa-check d-none"></span></button>
                </div>
            </div>
            <div class="back_continue experience_page">
                <a href="{{ route('cover-letter.employer') }}" class="back_left">
                    <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                </a>
                <a href="step_four.html" class="continue_right">
                    <p> Continue <span class="fas fa-long-arrow-alt-right"></span></p>
                </a>
            </div>
        </section>
    </main>
@endsection