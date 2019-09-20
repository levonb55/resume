@extends('layouts.main')

@section('title', 'Certification')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <main>
        <section class="dashboard_content">
            <form action="{{ route('certifications') }}" method="POST">
                @csrf
                <div>
                    <div class="the_company websites">
                        <div class="second_block">
                            <h2>Certifications</h2>
                            <h6>Search recommended phrases by job title, industry, or keyword</h6>
                        </div>
                        <div class="search_job">
                            <div class="box1">
                                <div class="job">
                                    <input type="search" placeholder="Search by job title, industry or kayword">
                                    <span class="fas fa-search"></span>
                                </div>
                                <div class="add_text">
                                    <div class="text_button">
                                        <p> Certified Business Intelligence Professional (CBIP)</p>
                                        <button>Add</button>
                                    </div>
                                    <div class="text_button">
                                        <p>Government Finance Officers Association Certificate</p>
                                        <button>Add</button>
                                    </div>
                                    <div class="text_button">
                                        <p> Chartered Financial Analyst (CFA)</p>
                                        <button>Add</button>
                                    </div>
                                    <div class="text_button">
                                        <p>Association for Project Management (APM)</p>
                                        <button>Add</button>
                                    </div>
                                    <div class="text_button">
                                        <p>Chartered Wealth Manager (CWM), certified by the American Academy of Financial Management (AAFM)</p>
                                        <button>Add</button>
                                    </div>
                                </div>


                            </div>
                            <div class="box2">
                                <div id="editor-container">
                                    <textarea cols="80" rows="100" id="textarea-1" name="certifications">{{ $certifications->content ?? '' }}</textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="back_continue experience_page">
                    <a href="{{ route($previousSection) }}" class="back_left">
                        <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                    </a>
                    <button type="submit" class="btn continue_right text-white">
                        Continue <span class="fas fa-long-arrow-alt-right"></span>
                    </button>
                </div>
            </form>
        </section>

    </main>
@endsection

@section('extra-scripts')
    <script src="{{ asset('assets/libs/ckeditor/ckeditor.js') }}"></script>
    <script src="{{asset('js/editor-config.js')}}"></script>
@endsection