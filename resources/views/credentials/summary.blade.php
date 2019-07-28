@extends('layouts.main')

@section('title', 'Summary')

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
                            @include('partials._preview-resume')
                        </div>
{{--                        <div class="preview preview_skills">--}}
{{--                            <p data-toggle="modal" data-target="#exampleModalCenter">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">--}}
{{--                                    <defs><style>.a{fill:#18358a;}</style></defs><g transform="translate(10.554 9.374)">--}}
{{--                                        <path class="a" d="M278.4,247.557a3.532,3.532,0,0,0-.376-4.549,3.641,3.641,0,0,0-5.009,0,3.536,3.536,0,0,0,4.549,5.384l3.024,2.953.835-.835Z" transform="translate(-271.979 -242.01)"></path>--}}
{{--                                    </g><g transform="translate(10.603 0.346)"><path class="a" d="M272,8.789v4.416h4.377Z" transform="translate(-272 -8.789)"></path>--}}
{{--                                    </g><path class="a" d="M14.108,17.618A4.637,4.637,0,0,1,10.8,16.243a4.649,4.649,0,0,1,4.476-7.8V5.9H9.431V0H0V20H15.277V17.452A4.661,4.661,0,0,1,14.108,17.618ZM2.338,7.07H10.6V8.242H2.338Zm5.924,8.2H2.338V14.1H8.262Zm0-2.344H2.338V11.758H8.262Zm0-2.344H2.338V9.414H8.262Z"></path></svg>Preview Resume</p>--}}
{{--                        </div>--}}
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
                <div class="search_job">
                    <div class="box1">
                        <form class="job">
                            <input type="search" placeholder="">
                            <span class="fas fa-search"></span>
                        </form>
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
                        <textarea cols="100" rows="" id="textarea-1">
                            Type in your responsibilities, achievements and job details. Need help? Use the pre-written
                            examples by clicking the Add button on the left side.
                        </textarea>

                        </div>
                    </div>
                </div>
                <div class="back_continue experience_page">
                    <a href="{{ route('skills') }}" class="back_left">
                        <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                    </a>
                    <a href="{{ route('finalize') }}" class="continue_right">
                        <p> Continue <span class="fas fa-long-arrow-alt-right"></span></p>
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('extra-scripts')
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <script src="{{ asset('js/editor-config.js') }}"></script>
@endsection