@extends('layouts.main')

@section('title', 'Summary')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/jquery-ui.min.css') }}">
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
                        <div class="step-separator" data-step="5"></div>
                        <div class="steps_number active2">SUMMARY</div>
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

            <div class="the_company">
                <div class="second_block">
                    <div>
                        <h2>Let’s finish with a strong summary</h2>
                        <h3>Search recommended skills by job title, industry, or keyword</h3>
                    </div>
                    <div class="tips_box">
                        
                        <div class="preview-wrapper">
                            @include('partials._resume-modal')
                        </div>

                        <div class="tips tips_content">

                            <div class="dropdown">
                                <div class="customer btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('assets/images/customer-service.png') }}">
                                </div>
                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(460px, 40px, 0px);">
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
                </div>
                <form action="{{ route('summary.store') }}" method="POST">
                    @csrf
                    <div class="search_job">
                        <div class="box1">
                            <div class="job">
                                <div class="dropdown">
                                    <input type="search" class="job-search">
                                    <span class="fas fa-search"></span>
                                </div>
                            </div>
                            <div class="add_text">
                                <div class="text_button">
                                    <p>[Job title] with background as [Job title 1] and [Job title 2] looking to join a growing entrepreneurial organization as part of the Executive team.</p>
                                    <button>Add</button>
                                </div>
                                <div class="text_button">
                                    <p>[Job title] with background as [Job title 1] and [Job title 2] looking to join a growing entrepreneurial organization as part of the Executive team.</p>
                                    <button>Add</button>
                                </div>
                                <div class="text_button">
                                    <p>[Job title] with background as [Job title 1] and [Job title 2] looking to join a growing entrepreneurial organization as part of the Executive team.</p>
                                    <button>Add</button>
                                </div>
                                <div class="text_button">
                                    <p>[Job title] with background as [Job title 1] and [Job title 2] looking to join a growing entrepreneurial organization as part of the Executive team.</p>
                                    <button>Add</button>
                                </div>
                                <div class="text_button">
                                    <p>[Job title] with background as [Job title 1] and [Job title 2] looking to join a growing entrepreneurial organization as part of the Executive team.</p>
                                    <button>Add</button>
                                </div>
                            </div>
                        </div>

                        <div class="box2">
                            <div id="editor-container">
                                <textarea cols="100" rows="" id="textarea-1" name="summary">
                                    @if($summary)
                                        {!! $summary !!}
                                    @else
                                        Type in your responsibilities, achievements and job details. Need help? Use the pre-written
                                        examples by clicking the Add button on the left side.
                                    @endif
                                </textarea>

                                @error('summary')
                                    <span class="text-danger mb-2"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="back_continue experience_page">
                        <a href="{{ route('skills') }}" class="back_left">
                            <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                        </a>
                        <button type="submit" class="continue_right">
                            Continue <span class="fas fa-long-arrow-alt-right"></span>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection

@section('extra-scripts')
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/editor-config.js') }}"></script>
    <script src="{{ asset('assets/libs/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/summary.js') }}"></script>
@endsection