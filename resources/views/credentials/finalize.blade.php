@extends('layouts.main')

@section('title', 'Finalize')

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
                            <label for="ch1" class="containera">Accomplishments
                                <input type="checkbox" id="ch1">
                                <span class="checkmark"></span>
                            </label>

                        </div>
                        <div class="check">
                            <label for="ch2" class="containera">Websites, portfolios, profiles
                                <input type="checkbox" id="ch2">
                                <span class="checkmark"></span>

                            </label>

                        </div>
                        <div class="check">
                            <label for="ch3" class="containera">Additional Information
                                <input type="checkbox" id="ch3">
                                <span class="checkmark"></span>

                            </label>

                        </div>
                        <div class="check">
                            <label for="ch4" class="containera">Certifications
                                <input type="checkbox" id="ch4">
                                <span class="checkmark"></span>

                            </label>

                        </div>
                    </div>
                    <div class="back_continue experience_page">
                        <a href="{{ route('summary') }}" class="back_left">
                            <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                        </a>
                        <a href="{{ route('finalize') }}" class="continue_right">
                            <p> Continue <span class="fas fa-long-arrow-alt-right"></span></p>
                        </a>
                    </div>

                </div>
                <div class=" cv_template example1">
                    <div class="cv-scroll">
                        <div class="head1">
                            <div class="name_res">
                                <h2 id="first_text2">James </h2>
                                <h2 id="last_name2">Miller</h2>
                            </div>

                            <p>
                                <span class="address" id="address_person">44 Shirley Ave,</span>
                                <span id="sity_sity">New York</span>
                                <span id="state">Arizona</span>
                                <span class="mail_zip" id="zip_zip">0465/55,</span>
                                <span class="telephone" id="phone_phone"> +465555555668,</span>
                                <span class="mail"  id="email_email">jamask@mail.ru</span>
                            </p>

                        </div>
                        <div class="resum">
                            <div class="sec_resum">
                                <h4>Professional Summary</h4>
                                <hr>


                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eum, facere, fugiat in maxime mollitia odio perferendis possimus provident quisquam reprehenderit sit. Et in laudantium magni odit suscipit totam vitae?</p>

                            </div>
                            <div class="sec_resum">
                                <h4>Employment history</h4>
                                <hr>

                                <div class="resum_main">
                                    <div class="left_resum  ">
                                        <p class="font-weight-bold">It Technician</p>
                                        <span>Oct 2015-apr 2016</span>
                                        <p>Operate and maintain information systems</p>
                                        <p>Facilitiang system utilization</p>
                                    </div>
                                    <div class="right_resum">
                                        <p>bingham</p>
                                    </div>
                                </div>


                            </div>
                            <div class="sec_resum">
                                <h4>Education</h4>
                                <hr>

                                <div class="resum_main">
                                    <div class="left_resum  ">
                                        <p class="font-weight-bold">It Technician</p>
                                        <span>Oct 2015-apr 2016</span>
                                        <p>Operate and maintain information systems</p>
                                        <p>Facilitiang system utilization</p>
                                    </div>
                                    <div class="right_resum">
                                        <p>bingham</p>
                                    </div>
                                </div>

                            </div>
                            <div class="sec_resum">
                                <h4>Honors</h4>
                                <hr>
                                <div class="resum_main">
                                    <div class="left_resum  ">
                                        <p class="font-weight-bold">It Technician</p>
                                        <span>Oct 2015-apr 2016</span>
                                        <p>Operate and maintain information systems</p>
                                        <p>Facilitiang system utilization</p>
                                    </div>
                                    <div class="right_resum">
                                        <p>bingham</p>

                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>

            </div>
            </div>

        </section>
    </main>
@endsection