@extends('layouts.main')

@section('title', 'Create Header')

@section('extra-styles')
        <link rel="stylesheet" href="css/Lcss.css">
    <link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('content')
    <section class="dashboard_content">
        <div class="check">
            <div class="step-container">

                <div class="d-inline-block">
                    <div class="step active1" data-step="1">
                        <span class="fas fa-check"></span>
                    </div>
                    <div class="step-separator" data-step="1"></div>
                    <div class="steps_number active2">HEADER</div>
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
        <div class="start_header">
            <div class="header_inputs">
                <h2>Let’s start with your header</h2>
                <p>Include your full name and at least one way for employers to reach you.</p>
                <form class="form_header">
                    <div class="name">
                        <div class="first_name">
                            <label>First name</label>
                            <input type="text" id="first_inp" placeholder="Dorothy">
                        </div>
                        <div class="first_name">
                            <label>Last name</label>
                            <input type="text" id="last_input" placeholder="Hloomberg">
                        </div>
                    </div>
                    <div class="address_input">
                        <label>Street Address</label>
                        <input type="text" id="street_address" placeholder="21756 Osten str., h. 50">
                    </div>
                    <div class="address_sity">
                        <div class="sity_input">
                            <label>City</label>
                            <input type="text" id="city_address" placeholder="Yerevan">
                        </div>
                        <div class="state_zip">
                            <div class="zip">
                                <label>State</label>
                                <input type="number" id="state_address" placeholder="ER">
                            </div>
                            <div class="zip">
                                <label>Zip Code</label>
                                <input type="email" id="zip_code" placeholder="0082">
                            </div>
                        </div>
                    </div>
                    <div class="name">
                        <div class="first_name">
                            <label>Email </label>
                            <input type="email" id="email_address" placeholder="DorothyHloomberg@gmail.com">
                        </div>
                        <div class="first_name">
                            <label>Phone </label>
                            <input type="number" id="phone" placeholder="+374 44 44 44 44">
                        </div>
                    </div>
                    <div class="back_continue back_continue1">
                        <a href="{{ route('create-resume') }}" class="back_left">
                            <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                        </a>
                        <a href="experience.html" class="continue_right">
                            <p> Continue <span class="fas fa-long-arrow-alt-right"></span></p>
                        </a>
                    </div>

                </form>
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

            <!--       <div class="heade_template">-->
            <!--           <div class="cv_template">-->
            <!--               <div class="name_box">-->
            <!--               <h2 id="first_text2"></h2>-->
            <!--               <h3 id="last_name2"></h3>-->
            <!--               </div>-->
            <!--               <div class="address_box">-->
            <!--                   <p id="address_person"></p>-->
            <!--                   <p id="sity_sity"></p>-->
            <!--                   <p id="state"></p>-->
            <!--                   <p id="zip_zip"></p>-->
            <!--                   <p id="email_email"></p>-->
            <!--                   <p id="phone_phone"></p>-->
            <!--               </div>-->
            <!--           </div>-->
            <!--       </div>-->
        </div>
    </section>
@endsection