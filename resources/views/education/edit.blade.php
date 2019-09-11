@extends('layouts.main')

@section('title', 'Edit Education')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/jquery-ui.min.css') }}">
@endsection

@section('content')
    <main>
        <section class="dashboard_content">
            <form action="{{ route('education.update', $education->id) }}" method="POST">
                @csrf
                @method('PUT')
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

                <div class="clon">
                    <div class="start_header">
                        <div class="header_inputs">
                            <h2>Tell us about your education</h2>
                            <p>Tell us about any colleges, vocational programs, or training courses you took. Even if you
                                didn’t finish, it’s important to list them.</p>

                            <div class="experience_area">
                                <div class="form_header">
                                    <div class="name">
                                        <div class="first_name">
                                            <label>School Name</label>
                                            <input type="text" name="school" value="{{ $education->school }}">
                                            @error('school')
                                                <span class="text-danger mb-2"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="first_name">
                                            <label>School Location</label>
                                            <input type="text" name="location" value="{{ $education->location }}">
                                            @error('location')
                                                <span class="text-danger mb-2"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="address_input">
                                        <label>Degree</label>
                                        <input type="text" name="degree" value="{{ $education->degree }}">
                                        @error('degree')
                                            <span class="text-danger mb-2"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="graduation">
                                        <div class="study">
                                            <label>Field Of Study</label>
                                            <input type="text" name="study" value="{{ $education->study }}">
                                            @error('study')
                                                <span class="text-danger mb-2"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="graduation_year mt-4">
                                            <label>Graduation Year</label>
                                            <input type="text" name="graduation_year" value="{{ $education->graduation_year }}">
                                            @error('graduation_year')
                                                <span class="text-danger mb-2"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="add_description add_desc">
                                    <p>
                                        <span id="plus">+</span>
                                        Add a description</p>
                                </div>
                                <div class="textarea_desc">
                                    <textarea name="description" id="textarea-1" cols="30" rows="10">{!! $education->description !!}</textarea>
                                    @error('description')
                                        <span class="text-danger mb-2"> {{ $message }} </span>
                                    @enderror
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

                <div class="back_continue experience_page">
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