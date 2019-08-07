@extends('layouts.main')

@section('title', 'Add Header')

@section('extra-styles')
    <link rel="stylesheet" href="css/Lcss.css">
    <link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('content')
    <section class="dashboard_content mx-auto">
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
                <form action="{{ route('header.store') }}" method="POST" class="form_header">
                    @csrf
                    <div class="name">
                        <div class="first_name">
                            <label>First name</label>
                            <input type="text" id="first_inp" name="first_name" value="{{$credential ? $credential->first_name : ''}}" required>
                            @error('first_name')
                                <span class="text-danger header-error"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="first_name">
                            <label>Last name</label>
                            <input type="text" id="last_input" name="last_name" value="{{$credential ? $credential->last_name : ''}}" required>
                            @error('last_name')
                                <span class="text-danger header-error"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="address_input">
                        <label>Street Address</label>
                        <input type="text" id="street_address" name="address" value="{{$credential ? $credential->address : ''}}">
                        @error('address')
                            <span class="text-danger header-error"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="address_sity">
                        <div class="sity_input">
                            <label>City</label>
                            <input type="text" id="city_address" name="city" value="{{$credential ? $credential->city : ''}}">
                            @error('city')
                                <span class="text-danger header-error"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="state_zip">
                            <div class="zip">
                                <label>State</label>
                                <input type="text" id="state_address" name="state" value="{{$credential ? $credential->state : ''}}">
                                @error('state')
                                    <span class="text-danger header-error"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="zip">
                                <label>Zip Code</label>
                                <input type="text" id="zip_code" name="zip" value="{{$credential ? $credential->zip : ''}}">
                                @error('zip')
                                    <span class="text-danger header-error"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="name">
                        <div class="first_name">
                            <label>Email </label>
                            <input type="email" id="email_address" name="email" value="{{$credential ? $credential->email : ''}}" required>
                            @error('email')
                                <span class="text-danger header-error"> {{ $message }} </span>
                            @enderror
                        </div>
                        <div class="first_name">
                            <label>Phone </label>
                            <input type="text" id="phone" name="phone" value="{{$credential ? $credential->phone : ''}}">
                            @error('phone')
                                <span class="text-danger header-error"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="back_continue back_continue1">
                        <a href="{{ route('create-resume') }}" class="back_left">
                            <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                        </a>
{{--                        <a href="{{ route('experience') }}" class="continue_right">--}}
{{--                            <p> Continue <span class="fas fa-long-arrow-alt-right"></span></p>--}}
{{--                        </a>--}}
                        <button type="submit" class="btn continue_right text-white">
                            Continue <span class="fas fa-long-arrow-alt-right"></span>
                        </button>
                    </div>

                </form>
            </div>
            <div class=" cv_template example1">

                @if($credential)
{{--                    @component('components.resume-templates.template' . $credential->template_id)--}}
{{--                    @endcomponent--}}
                    @includeIf('components.resumes.template' . $credential->template_id, [
                        'first_name' => $credential->first_name,
                        'last_name' => $credential->last_name,
                        'address'   => $credential->address,
                        'city'      => $credential->city,
                        'state'     => $credential->state,
                        'zip'       => $credential->zip,
                        'email'     => $credential->email,
                        'phone'     => $credential->phone
                    ])
                @else
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
                @endif

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

@section('extra-scripts')
    <script src="{{ asset('js/header.js') }}"></script>
@endsection