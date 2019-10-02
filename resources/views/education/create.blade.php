@extends('layouts.main')

@section('title', 'Add Education')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/jquery-ui.min.css') }}">
@endsection

@section('content')
<main>
    <section class="dashboard_content">
        <form id="education-form">
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
                        <div class="step-separator" data-step="3"></div>
                        <div class="steps_number active2">EDUCATION</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step" data-step="4">
                            4
                        </div>
                        <div class="step-separator" data-step="4"></div>
                        <div class="steps_number">SKILLS</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step" data-step="5">
                            5
                        </div>
                        <div class="step-separator" data-step="5"></div>
                        <div class="steps_number">SUMMARY</div>
                    </div>

                    <div class="d-inline-block">
                        <div class="step" data-step="6">
                            6
                        </div>

                        <div class="steps_number">FINALIZE</div>
                    </div>


                    <div class="next-step"></div>
                </div>
            </div>

            @if($educationCount <= 0)
                <h4 class="">
                    <a href="{{ route('education.index') }}">I Don't Have Formal Education</a>
                </h4>
            @endif

            <div class="clon">
                <div class="start_header">
                    <div class="header_inputs">
                        <h2>Tell us about your education</h2>
                        <p>Tell us about any colleges, vocational programs, or training courses you took. Even if you
                            didn’t finish, it’s important to list them.</p>

                        <div class="experience_area education_area">
                            <div class="form_header">
                                <div class="name">
                                    <div class="first_name">
                                        <label>School Name</label>
                                        <input type="text" name="education1[school]">
                                        <span class="text-danger mb-2 error" id="education1_school"></span>
                                    </div>
                                    <div class="first_name">
                                        <label>School Location</label>
                                        <input type="text" name="education1[location]">
                                        <span class="text-danger mb-2 error" id="education1_location"></span>
                                    </div>
                                </div>

                                <div class="address_input">
                                    <label>Degree</label>
                                    <input type="text" name="education1[degree]">
                                    <span class="text-danger mb-2 error" id="education1_degree"></span>
                                </div>
                                <div class="graduation graduationFlex">
                                    <div class="study studyWidth">
                                        <label>Field Of Study</label>
                                        <input type="text" name="education1[study]">
                                        <span class="text-danger mb-2 error" id="education1_study"></span>
                                    </div>
{{--                                    <div class="graduation_year">--}}
{{--                                        <label>Start</label>--}}
{{--                                        <input type="date" name="education1[start_date]">--}}
{{--                                        <span class="text-danger mb-2 error" id="education1_start_date"></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="graduation_year">--}}
{{--                                        <label>Graduation Year</label>--}}
{{--                                        <input type="date" name="education1[end_date]">--}}
{{--                                        <span class="text-danger mb-2 error" id="education1_end_date"></span>--}}
{{--                                    </div>--}}
                                    <div class="time_input">
                                        <div class="data_input">
                                            <label>Start Date</label>
                                            <input type="date" name="education1[start_date]">
                                            <span class="text-danger mb-2 error" id="education1_start_date"></span>
                                        </div>
                                        <div class="data_input">
                                            <label>End Date</label>
                                            <input type="date"  name="education1[end_date]" class="edu-end-date">
                                            <span class="text-danger mb-2 error" id="education1_end_date"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <label  for="present-1" class="containera Work_here">I currently study here
                                <input type="checkbox" class="edu-check" id="present-1">
                                <span class="checkmark"></span>
                            </label>

                            <div class="add_description add_desc">
                                <p>
                                    <span id="plus">+</span>
                                    Add a description</p>
                            </div>
                            <div class="textarea_desc hidden">
                                <textarea name="education1[description]" id="textarea-1" cols="30" rows="10"></textarea>
                                <span class="text-danger mb-2 error" id="education1_description"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tips">

                        <div class="dropdown show">
                            <div class="customer btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <img src="{{ asset('assets/images/customer-service.png') }}">
                            </div>
                            <div class="dropdown-menu dropdown-menu-right show">
                                <h4>TIPS</h4>
                                <ul>
                                    <li>
                                        <p>Include up to 10 years of recent work experience,
                                            beginning with your current or most recent employer.</p>
                                    </li>
                                    <li>
                                        <p>Use bullets to list your major accomplishments and experience
                                            so employers can easily scan your resume.</p>
                                    </li>
                                    <li>
                                        <p>If you have relevant work experience from more than 10 years ago,
                                            we recommend adding a separate section called Previous Work Experience.</p>
                                    </li>
                                </ul>
                            </div>



                        </div>
                    </div>
                </div>

                <div class="preview-wrapper">
                    @include('partials._resume-modal')
                </div>
            </div>
            <div class="clon_here"></div>


            <div class="more_experience" id="clone_aparat2">
                <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <defs><style>.a{fill:#18358a;}</style>
                        </defs><path class="a" d="M16,7.619H8.381V0H7.619V7.619H0v.762H7.619V16h.762V8.381H16Z"/></svg>Add more education</p>
            </div>
            <div class="back_continue experience_page">

                @if($educationCount <= 0)
                    <a href="{{ route('experience.index') }}" class="back_left">
                        <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                    </a>
                @else
                    <a href="{{ route('education.index') }}" class="back_left">
                        <p>Cancel</p>
                    </a>
                @endif

                <button type="submit" value="Continue" class="continue_right">
                    Continue<span class="fas fa-long-arrow-alt-right"></span>
                </button>
            </div>
        </form>
    </section>
</main>
@endsection

@section('extra-scripts')
    <script src="{{ asset('assets/libs/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="{{asset('js/editor-config.js')}}"></script>
    <script src="{{asset('js/education.js')}}"></script>
@endsection