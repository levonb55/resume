@extends('layouts/main')

@section('title', 'Jobs')

@section('content')
    <main>
        <section class="jobs_header">
            <div class="container">
                <div class="row">
                    <div class="col text">
                        <div class="text mb-5">
                            <h1>Show your best self with your resume</h1>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer auctor et diam sit amet pretium. Sed blandit elementum massa, quis pretium risus suscipit quis. Aenean eget tortor gravida mauris lacinia euismod id accumsan enim. Mauris nec vestibulum odio. Nulla et pulvinar ante. Curabitur fermentum pulvinar condimentum. Nullam iaculis sed nibh ac placerat. Vestibul</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form action="" class="jobs_filter">
                        <div class="col-sm-3">
                            <input type="text" id="validationCustom01" class="form-control" placeholder="Job title, Company .."  required>
                        </div>
                        <div class="col-sm-3">
                            <input type="text"  id="validationCustom02" class="form-control" placeholder="City, State ..." required >
                        </div>
                        <div class="col-sm-3">
                            <button type="submit" class="btn">Search</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>
        <section class="jobs_list">
            <div class="container text">
                <h2>Search resaults</h2>
                <hr>
                <div class="row list_row">
                    <div class="col-sm-6 shadow">
                        <div class="companys">
                            <img class="mr-3" src="{{ asset('assets/images/company.png') }}" alt="">
                            <p class="mr-3">Integer auctor et diam sit amet pretium. Sed blandit ele</p>
                            <p class="mr-2"> Posted <span>04/17/19</span></p>
                            <button type="submit" class="btn">View More</button>
                        </div>
                        <div class="companys">
                            <img class="mr-3" src="{{ asset('assets/images/company.png') }}" alt="">
                            <p class="mr-3">Integer auctor et diam sit amet pretium. Sed blandit ele</p>
                            <p class="mr-2"> Posted <span>04/17/19</span></p>
                            <button type="submit" class="btn">View More</button>
                        </div>
                        <div class="companys">
                            <img class="mr-3" src="{{ asset('assets/images/company.png') }}" alt="">
                            <p class="mr-3">Integer auctor et diam sit amet pretium. Sed blandit ele</p>
                            <p class="mr-2"> Posted <span>04/17/19</span></p>
                            <button type="submit" class="btn">View More</button>
                        </div>
                        <div class="companys">
                            <img class="mr-3" src="{{ asset('assets/images/company.png') }}" alt="">
                            <p class="mr-3">Integer auctor et diam sit amet pretium. Sed blandit ele</p>
                            <p class="mr-2"> Posted <span>04/17/19</span></p>
                            <button type="submit" class="btn">View More</button>
                        </div>
                    </div>
                    <div class="col-sm-4 shadow">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Job Title
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Categorie1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Categorie1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Categorie1
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                            Date Posted
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse2" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>
                                            <input type="radio" name="radio">
                                            <label for="">Any tyme</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio">
                                            <label for="">Past 24 Hours</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio">
                                            <label for="">Past Week</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="radio">
                                            <label for="">Past Day</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button class="btn" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                            Realeted Searches
                                        </button>
                                    </h5>
                                </div>
                            </div>
                            <div id="collapse2" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Categorie1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Categorie1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Categorie1
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="row pages">

                    <div class="col-sm-8">
                        <button class="blue_button">1</button>
                        <button class="blue_button">2</button>
                        <button class="blue_button">3</button>
                        <button class="blue_button">4</button>
                        <button class="blue_button">&gt;</button>
                    </div>
                    <div class="col-sm-3"></div>

                </div>
            </div>
        </section>

    </main>
@endsection