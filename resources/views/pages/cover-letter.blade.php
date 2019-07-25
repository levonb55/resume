@extends('layouts/main')

@section('title', 'Cover Letter')

@section('content')
    <main>
        <section class="Resume_section3">
            <div class="container">
                <div class="row mb-5 space-between">

                    <div class="col-sm-6">
                        <div>
                            <h3>Create your best cover letter in a few minutes</h3>
                            <hr>
                            <h6 class="mb-4">Use our professional cover letter templates to create a message that wows employers!</h6>
                            <div class="list_p">
                                <i class="fas fa-circle"></i>
                                <p>Choose a one-click design template</p>
                            </div>
                            <div class="list_p">
                                <i class="fas fa-circle"></i>
                                <p>Easily customize your cover letter</p>
                            </div>
                            <div class="list_p">
                                <i class="fas fa-circle"></i>
                                <p>Land the interview and get hired faster!</p>
                            </div>
                            <a href="Cover_steps/step_one.html"><button class="btn btn-blue">Start Now</button></a>


                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="sectionimg">
                            <img src="{{ asset('assets/images/resume2.png') }}">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="start_section">
            <div class="container">
                <div class="head_section">
                    <h3>Create your best cover letter in few minutes</h3>
                    <hr>
                    <h6>4 steps to create professional cover letter</h6>
                </div>
                <div class="row start_res">
                    <div class="col-md-5 col-sm-12 start_res_left">
                        <img src="{{asset('assets/images/aaaaaaaa.png')}}" alt="">
                        <a href="Cover_steps/step_one.html"><button class="btn btn-blue">Start Now</button></a>
                    </div>
                    <div class="col-md-6 col-sm-12 start_res_right" >
                        <div class="list_p">
                            <i class="fas fa-circle"></i>

                            <div class="list_p_child">

                                <h4>Step 1</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                        </div>
                        <div class="list_p">
                            <i class="fas fa-circle"></i>

                            <div class="list_p_child">

                                <h4>Step 1</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                        </div>
                        <div class="list_p">
                            <i class="fas fa-circle"></i>

                            <div class="list_p_child">

                                <h4>Step 1</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                        </div>
                        <div class="list_p">
                            <i class="fas fa-circle"></i>

                            <div class="list_p_child">

                                <h4>Step 1</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="cover_sec_2">
            <div class="container">

                <div class="head_section">
                    <h3>HOW IT WORKS</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer auctor et diam sit amet pretium. Sed blandit elementum massa, quis pretium risus suscipit quis. Aenean eget tortor gravida mauris lacinia euismod id accumsan enim.</p>
                </div>

                <div class="row mb-5">
                    <div class="col-sm-4 text">
                        <img src="{{asset('assets/images/review_resume.png')}}">
                        <h6>CHOOSE TEMPLATE</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fac</p>
                    </div>
                    <div class="col-sm-4 text">
                        <img src="{{ asset('assets/images/resume-checklist.png') }}">
                        <h6>MAKE IT FASTER</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fac</p>
                    </div>
                    <div class="col-sm-4 text">
                        <img src="{{asset('assets/images/download.png')}}">
                        <h6>DOWNLOAD</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fac</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection