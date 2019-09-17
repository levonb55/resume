@extends('layouts.main')

@section('title', 'Add Section')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <main>
        <section class="dashboard_content">
            <div class="check">
                <div class="step-container">

                    <div class="d-inline-block">
                        <div class="step active1" data-step="1">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator active1" data-step="1"></div>
                        <div class="steps_number active2">HEADER</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step active1" data-step="2">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator active1" data-step="2"></div>
                        <div class="steps_number active2">EXPERIENCE</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step active1" data-step="3">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator active1" data-step="3"></div>
                        <div class="steps_number active2">EDUCATION</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step active1" data-step="4">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator active1" data-step="4"></div>
                        <div class="steps_number active2">SKILLS</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step active1" data-step="5">
                            <span class="fas fa-check"></span>
                        </div>
                        <div class="step-separator active1" data-step="5"></div>
                        <div class="steps_number active2">SUMMARY</div>
                    </div>

                    <div class="d-inline-block">
                        <div class="step active1" data-step="6">
                            <span class="fas fa-check"></span>
                        </div>

                        <div class="steps_number active2">FINALIZE</div>
                    </div>


                    <div class="next-step"></div>
                </div>
            </div>
            <div class="the_company flex">
                <form action="{{ route('add-section.post') }}" method="POST">
                    @csrf
                    <div class="header_inputs jstfy">
                    <div>
                        <h2>Need to add any more sections?</h2>
                        <h3>These are optional.</h3>
                    </div>

                    <div class="das_inp">
                        <input type="text" placeholder="Add a Custom section">
                        <button class="btn btn-blue">Add</button>
                    </div>
                    <div class="das_check">

                        <div class="check">
                            <label for="accomplishments" class="containera">Accomplishments
                                <input type="checkbox" id="accomplishments" value="accomplishments" name="sections[]">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="check">
                            <label for="profiles" class="containera">Websites, portfolios, profiles
                                <input type="checkbox" id="profiles" value="profiles" name="sections[]">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="check">
                            <label for="additional-info" class="containera">Additional Information
                                <input type="checkbox" id="additional-info" value="additional-info" name="sections[]">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                        <div class="check">
                            <label for="certifications" class="containera">Certifications
                                <input type="checkbox" id="certifications" value="certifications" name="sections[]">
                                <span class="checkmark"></span>
                            </label>
                        </div>

                    </div>
                    <div class="back_continue experience_page">
                        <a href="{{ route('summary') }}" class="back_left">
                            <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                        </a>
{{--                        <a href="{{ route('add-section') }}" class="continue_right">--}}
{{--                            <p> Continue <span class="fas fa-long-arrow-alt-right"></span></p>--}}
{{--                        </a>--}}
                        <button type="submit" class="btn continue_right text-white">
                            Continue <span class="fas fa-long-arrow-alt-right"></span>
                        </button>
                    </div>

                </div>
                </form>
                <div class="cv_template example1">

                    @includeIf('components.resumes.template' . auth()->user()->credential->template_id)

                </div>

            </div>
            </div>

        </section>
    </main>
@endsection