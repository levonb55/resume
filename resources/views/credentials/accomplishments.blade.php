@extends('layouts.main')

@section('title', 'Accomplishments')

@section('extra-styles')
    <link rel="stylesheet" href="css/Lcss.css">
    <link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('content')
    <main>
        <section class="dashboard_content">
            <form action="{{ route('accomplishments') }}" method="POST">
                @csrf
                <div>
                    <div class="the_company websites">
                        <div class="second_block">
                            <h2>Accomplishments</h2>
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
                                        <p>Completed all company insurance renewals including property, Workers' Compensation, general liability, cargo, aviation and K & R documents.</p>
                                        <button>Add</button>
                                    </div>
                                    <div class="text_button">
                                        <p>Led [type] team in delivery of [type] project requiring close cooperation among members to share information and develop solutions to meet broad array of deliverables.</p>
                                        <button>Add</button>
                                    </div>
                                    <div class="text_button">
                                        <p>Prepared departmental contracts for attorney approval.</p>
                                        <button>Add</button>
                                    </div>
                                    <div class="text_button">
                                        <p>Installed, tested and serviced alarm systems, ensuring that they functioned correctly.</p>
                                        <button>Add</button>
                                    </div>
                                    <div class="text_button">
                                        <p>Completed all company insurance renewals including property, Workers' Compensation, general liability, cargo, aviation and K & R documents.</p>
                                        <button>Add</button>
                                    </div>

                                </div>


                            </div>
                            <div class="box2">
                                <div id="editor-container">
                                    <textarea cols="80" rows="100" id="textarea-1"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="back_continue experience_page">
                    <a href="{{ route('add-section') }}" class="back_left">
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