@extends('layouts.main')

@section('title', 'Websites, portfolios, profiles')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <main>
        <section class="dashboard_content">
            <form action="{{ route('profiles') }}" method="POST">
                @csrf
                <div class="clon">
                    <div class="the_company websites">
                        <div class="second_block">
                            <h2>Websites, Portfolios, Profiles</h2>
                            <h6>List links to your website, portfolio, blog, LinkedIn, Skype & more.</h6>
                        </div>
                        <div class="url">
                            <div class="url_top">
                                <input type="text" placeholder="Personal link">
                                <input type="text" placeholder="Personal link">
                            </div>
                            <div class="url_bottom">
                                <input type="text" placeholder="Personal link">
                                <input type="text" placeholder="Personal link">
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
                    </button
                </div>
            </form>
        </section>

    </main>
@endsection