@extends('layouts.main')

@section('title', 'Review Experience')

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
                        <div class="step-separator" data-step="2"></div>
                        <div class="steps_number active2">EXPERIENCE</div>
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

            <div class="experience_box">
                <div class="your_experience">
                    <h2>Review your experience</h2>
                </div>

                @include('partials._preview-resume')
{{--                <div class="preview preview_skills">--}}
{{--                    <p data-toggle="modal" data-target="#exampleModalCenter">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">--}}
{{--                            <defs><style>.a{fill:#18358a;}</style></defs><g transform="translate(10.554 9.374)">--}}
{{--                                <path class="a" d="M278.4,247.557a3.532,3.532,0,0,0-.376-4.549,3.641,3.641,0,0,0-5.009,0,3.536,3.536,0,0,0,4.549,5.384l3.024,2.953.835-.835Z" transform="translate(-271.979 -242.01)"></path>--}}
{{--                            </g><g transform="translate(10.603 0.346)"><path class="a" d="M272,8.789v4.416h4.377Z" transform="translate(-272 -8.789)"></path>--}}
{{--                            </g><path class="a" d="M14.108,17.618A4.637,4.637,0,0,1,10.8,16.243a4.649,4.649,0,0,1,4.476-7.8V5.9H9.431V0H0V20H15.277V17.452A4.661,4.661,0,0,1,14.108,17.618ZM2.338,7.07H10.6V8.242H2.338Zm5.924,8.2H2.338V14.1H8.262Zm0-2.344H2.338V11.758H8.262Zm0-2.344H2.338V9.414H8.262Z"></path></svg>Preview Resume</p>--}}
{{--                </div>--}}

            </div>
            <ul id="sortable">


                <li class="red_item rev_red_item ui-state-default">

                    <div class="rew_sort_li_1">
                        <div class="rew_sort_num">
                            1
                        </div>
                    </div>
                    <div class="rew_sort_li_2">
                        <div class="rew_position">
                            <h5>Web Desgin</h5>
                            <h5>Web Projects</h5>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae blanditiis cumque debitis deserunt dolore doloremque ducimus eaque eos ex expedita facere, nam natus neque omnis quis quo tenetur voluptatibus!</p>

                    </div>
                    <div class="rew_sort_li_3">
                        <div class="rew_position">
                            <h5>Yerevan</h5>
                            <h5>RA</h5>
                            <h5>2019</h5>
                        </div>
                    </div>
                    <div class="rew_sort_li_4">
                        <div class="red_tools ">
                            <div class="tool1">
                                <img src="{{ asset('assets/images/pencil-edit-button.png') }}" alt="">
                            </div>
                            <div class="tool2">
                                <img src="{{ asset('assets/images/move-option.png') }}" alt="">
                            </div>
                            <div class="tool3">
                                <img src="{{ asset('assets/images/rubbish-bin-delete-button.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </li>
                <li class="red_item rev_red_item ui-state-default">

                    <div class="rew_sort_li_1">
                        <div class="rew_sort_num">
                            2
                        </div>
                    </div>
                    <div class="rew_sort_li_2">
                        <div class="rew_position">
                            <h5>Front-end</h5>
                            <h5>Web Projects</h5>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias beatae blanditiis cumque debitis deserunt dolore doloremque ducimus eaque eos ex expedita facere, nam natus neque omnis quis quo tenetur voluptatibus!</p>

                    </div>
                    <div class="rew_sort_li_3">
                        <div class="rew_position">
                            <h5>Yerevan</h5>
                            <h5>RA</h5>
                            <h5>2019</h5>
                        </div>
                    </div>
                    <div class="rew_sort_li_4">
                        <div class="red_tools ">
                            <div class="tool1">
                                <img src="{{ asset('assets/images/pencil-edit-button.png') }}" alt="">
                            </div>
                            <div class="tool2">
                                <img src="{{ asset('assets/images/move-option.png') }}" alt="">
                            </div>
                            <div class="tool3">
                                <img src="{{ asset('assets/images/rubbish-bin-delete-button.png') }}" alt="">
                            </div>
                        </div>
                    </div>

                </li>

            </ul>
            <div class="back_continue experience_page">
                <a href="{{ route('experience') }}" class="back_left">
                    <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                </a>
                <a href="education.html" class="continue_right">
                    <p> Continue <span class="fas fa-long-arrow-alt-right"></span></p>
                </a>
            </div>
        </section>
    </main>
@endsection
