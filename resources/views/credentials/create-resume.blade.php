@extends('layouts.main')

@section('title', 'Create Resume')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <main>
        <section class="dashboard_content">
            <div class="check">
                <div class="step-container">

                    <div class="d-inline-block">
                        <div class="step" data-step="1">
                            1
                        </div>
                        <div class="step-separator" data-step="1"></div>
                        <div class="steps_number">HEADER</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step" data-step="2">
                            2
                        </div>
                        <div class="step-separator" data-step="2"></div>
                        <div class="steps_number">EXPERIENCE</div>
                    </div>
                    <div class="d-inline-block">
                        <div class="step" data-step="3">
                            3
                        </div>
                        <div class="step-separator" data-step="3"></div>
                        <div class="steps_number">EDUCATION</div>
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
            <div class="resume_build">
                <h2>How do you want to build your resume?</h2>
                <div class="boxes">
                    <div class="new_resume active">
                        <a href="{{ route('header') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="80" viewBox="0 0 68 80">
                                <defs>
                                    <style>.b {
                                            fill: #18358a;

                                        }</style>
                                </defs>
                                <g transform="translate(-14.492)">
                                    <g transform="translate(14.492)">
                                        <path class="b"
                                              d="M74.4,0H22.589a8.057,8.057,0,0,0-8.1,8V72a8.056,8.056,0,0,0,8.1,8H74.4a8.056,8.056,0,0,0,8.1-8V8A8.055,8.055,0,0,0,74.4,0Zm4.859,72A4.835,4.835,0,0,1,74.4,76.8H22.589A4.834,4.834,0,0,1,17.732,72V8a4.834,4.834,0,0,1,4.857-4.8H74.4A4.833,4.833,0,0,1,79.252,8V72h0Z"
                                              transform="translate(-14.492)"/>
                                        <path class="b"
                                              d="M84.778,79.212H50.549a1.483,1.483,0,1,0,0,2.967H84.778a1.483,1.483,0,1,0,0-2.967Z"
                                              transform="translate(-33.661 -44.245)"/>
                                        <path class="b"
                                              d="M84.778,94.386H50.549a1.483,1.483,0,1,0,0,2.966H84.778a1.483,1.483,0,1,0,0-2.966Z"
                                              transform="translate(-33.661 -52.721)"/>
                                        <path class="b"
                                              d="M84.778,109.555H50.549a1.483,1.483,0,1,0,0,2.966H84.778a1.483,1.483,0,1,0,0-2.966Z"
                                              transform="translate(-33.661 -61.193)"/>
                                        <path class="b"
                                              d="M105.759,124.728H88.739a1.483,1.483,0,0,0,0,2.967h17.019a1.483,1.483,0,0,0,0-2.967Z"
                                              transform="translate(-54.701 -69.669)"/>
                                        <path class="b"
                                              d="M112.115,154.693H100.2a1.482,1.482,0,0,0,0,2.964h11.915a1.482,1.482,0,0,0,0-2.964Z"
                                              transform="translate(-61.051 -86.486)"/>
                                        <path class="b"
                                              d="M69.206,40.825c0-2.806-3.23-6.59-7.59-7.7a7.418,7.418,0,0,0,3.077-5.823,5.564,5.564,0,1,0-11.128,0,7.432,7.432,0,0,0,3.073,5.823c-4.354,1.105-7.586,4.892-7.586,7.7C49.056,44.14,69.206,44.14,69.206,40.825ZM58.681,34.744h-.025l-.921-1.058a3.935,3.935,0,0,0,2.792,0L59.6,34.744H59.58l2.377,5.744L59.13,43.309,56.3,40.488Z"
                                              transform="translate(-33.589 -12.056)"/>
                                    </g>
                                </g>
                            </svg>
                            <div class="text_resume">
                                <h3>Create a new resume</h3>
                                <p>We’ll go through each section together</p>
                            </div>
                        </a>
                    </div>
                    <div class="new_resume">
                        <svg xmlns="http://www.w3.org/2000/svg" width="68" height="64" viewBox="0 0 68 64">
                            <defs>
                                <style>.a {
                                        fill: #ececec;
                                    }</style>
                            </defs>
                            <g transform="translate(0 -17.25)">
                                <g transform="translate(0 17.25)">
                                    <path class="a"
                                          d="M66.052,228.44A1.944,1.944,0,0,0,64.1,230.4v17.8a8.762,8.762,0,0,1-8.731,8.77H12.627A8.762,8.762,0,0,1,3.9,248.2v-18.09a1.948,1.948,0,1,0-3.9,0V248.2a12.669,12.669,0,0,0,12.627,12.684H55.373A12.669,12.669,0,0,0,68,248.2V230.4A1.954,1.954,0,0,0,66.052,228.44Z"
                                          transform="translate(0 -196.881)"/>
                                    <path class="a"
                                          d="M139.655,33.036l9.1-9.1v39.7a1.957,1.957,0,0,0,3.914,0v-39.7l9.1,9.1a1.97,1.97,0,0,0,1.377.58,1.886,1.886,0,0,0,1.377-.58,1.951,1.951,0,0,0,0-2.769L152.092,17.83a1.98,1.98,0,0,0-1.377-.58,1.9,1.9,0,0,0-1.377.58L136.9,30.267a1.953,1.953,0,0,0,2.754,2.769Z"
                                          transform="translate(-116.715 -17.25)"/>
                                </g>
                            </g>
                        </svg>
                        <div class="text_resume">
                            <h3>I already have a resume</h3>
                            <p>We’ll transfer everything to your new template</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="back_continue">
                <a href="{{ route('choose-template') }}" class="back_left">
                    <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                </a>
                <a href="{{ route('header') }}" class="continue_right">
                    <p> Continue <span class="fas fa-long-arrow-alt-right"></span></p>
                </a>

            </div>
        </section>
    </main>
@endsection