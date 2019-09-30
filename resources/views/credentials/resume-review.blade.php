@extends('layouts.main')

@section('title', 'Review Resume')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templates.css') }}">
@endsection

@section('content')
    <main>
        <section class=" redaktor_section">
            <div class="row red_row">
                <div class="col-sm-12 col-lg-9 red_left_side">

                    @includeIf('components.resumes.template' . auth()->user()->credential->template_id)

                    {{--                    <div class="red_red">--}}
{{--                        <a href="#"><p>Resume name:<span> Resume 8</span></p><img src="{{ asset('assets/images/pencil-edit-button.png') }}" alt="Pencil"></a>--}}
{{--                    </div>--}}
{{--                    <div class="red_head">--}}
{{--                        <h2>Heading</h2>--}}
{{--                    </div>--}}
{{--                    <ul id="sortable">--}}


{{--                        <li class="red_item ui-state-default">--}}

{{--                            <h5>Additional Information</h5>--}}
{{--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
{{--                            <div class="red_tools ">--}}
{{--                                <div class="tool1">--}}
{{--                                    <img src="{{ asset('assets/images/pencil-edit-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool2">--}}
{{--                                    <img src="{{ asset('assets/images/move-option.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool3">--}}
{{--                                    <img src="{{ asset('assets/images/rubbish-bin-delete-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr>--}}

{{--                        </li>--}}
{{--                        <li class="red_item ui-state-default">--}}

{{--                            <h5>Skils</h5>--}}
{{--                            <div class="card-body card_li">--}}
{{--                                <ul>--}}
{{--                                    <li><p>Skill 1</p></li>--}}
{{--                                    <li><p>Skill 2</p></li>--}}
{{--                                    <li><p>Skill 3</p></li>--}}
{{--                                    <li><p>Skill 4</p></li>--}}
{{--                                    <li><p>Skill 5</p></li>--}}
{{--                                    <li><p>Skill 6</p></li>--}}
{{--                                    <li><p>Skill 7</p></li>--}}
{{--                                    <li><p>Skill 8</p></li>--}}
{{--                                </ul>--}}

{{--                            </div>--}}
{{--                            <div class="red_tools">--}}
{{--                                <div class="tool1">--}}
{{--                                    <img src="{{ asset('assets/images/pencil-edit-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool2">--}}
{{--                                    <img src="{{ asset('assets/images/move-option.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool3">--}}
{{--                                    <img src="{{ asset('assets/images/rubbish-bin-delete-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr>--}}
{{--                        </li>--}}
{{--                        <li class="red_item ui-state-default">--}}
{{--                            <h5>Experience</h5>--}}
{{--                            <div class="exp_group">--}}
{{--                                <span>UI/UX design</span>--}}
{{--                                <span>Web projects</span>--}}
{{--                                <span>2019 - Current</span>--}}
{{--                            </div>--}}
{{--                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>--}}
{{--                            <div class="red_tools">--}}
{{--                                <div class="tool1">--}}
{{--                                    <img src="{{ asset('assets/images/pencil-edit-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool2">--}}
{{--                                    <img src="{{ asset('assets/images/move-option.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool3">--}}
{{--                                    <img src="{{ asset('assets/images/rubbish-bin-delete-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr>--}}
{{--                        </li>--}}
{{--                        <li class="red_item  ui-state-default">--}}
{{--                            <h5>Education and Training</h5>--}}
{{--                            <div class="exp_group">--}}
{{--                                <span>High School Diploma</span>--}}
{{--                                <span>2008</span>--}}
{{--                            </div>--}}
{{--                            <p>N 80 School / New York</p>--}}
{{--                            <div class="red_tools">--}}
{{--                                <div class="tool1">--}}
{{--                                    <img src="{{ asset('assets/images/pencil-edit-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool2">--}}
{{--                                    <img src="{{ asset('assets/images/move-option.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool3">--}}
{{--                                    <img src="{{ asset('assets/images/rubbish-bin-delete-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <hr>--}}
{{--                        </li>--}}
{{--                        <li class="red_item  ui-state-default" >--}}

{{--                            <h5>Websites, Portfolios, Profiles</h5>--}}
{{--                            <div class="card-body card_li">--}}
{{--                                <ul>--}}
{{--                                    <li><p>link 1</p></li>--}}
{{--                                    <li><p>link 2</p></li>--}}
{{--                                    <li><p>link 3</p></li>--}}
{{--                                    <li><p>link 4</p></li>--}}

{{--                                </ul>--}}

{{--                            </div>--}}
{{--                            <div class="red_tools">--}}
{{--                                <div class="tool1">--}}
{{--                                    <img src="{{ asset('assets/images/pencil-edit-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool2">--}}
{{--                                    <img src="{{ asset('assets/images/move-option.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="tool3">--}}
{{--                                    <img src="{{ asset('assets/images/rubbish-bin-delete-button.png') }}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}




                </div>
                <div class="col-sm-12 col-lg-2 red_right_side">
                    <div class="red_save"> <a href="#"><button class="btn ">Save & Continue</button></a></div>
                    <ul id="accordion" class="accordion">

                        <li>
                            <div class="link">
                                <div class="red_red">
                                    <div><p>Templates:<span> {{ $templates->count() }}</span></p></div>
                                    <div class="img"><i class="fas fa-chevron-down"></i></div>
                                </div>
                            </div>
                            <ul class="submenu">
                                @foreach($templates as $template)
                                    <li>
                                        <img src="{{ asset('assets/images/templates/template-' . $template->id . '.png') }}" alt="Resume">
                                    </li>
                                @endforeach
{{--                                <li>--}}
{{--                                    <img src="{{ asset('assets/images/small_02.jpg') }}" alt="">--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="{{ asset('assets/images/small_03.jpg') }}" alt="">--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="{{ asset('assets/images/small_6.jpg') }}" alt="">--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <img src="{{ asset('assets/images/small_02.jpg') }}" alt="">--}}
{{--                                </li>--}}

                            </ul>
                        </li>
                        <li>
                            <div class="link">
                                <div class="red_red">
                                    <div><p>Formatting</p></div>
                                    <div class="img"><i class="fas fa-chevron-down"></i></div>

                                </div>
                            </div>
                            <ul class="submenu submenu2">
                                <li>
                                    <select class="browser-default custom-select" id="font_famly">
                                        <option selected>Font style։ Arial</option>
                                        <option value="Arial">Arial</option>
                                        <option value="Roboto-Regular">Roboto-Regular</option>
                                        <option value="Segoe UI Symbol">Segoe UI Symbol</option>
                                        <option value="BlinkMacSystemFont">BlinkMacSystemFont</option>
                                    </select>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun">Font size։ <span class="range-value" id="range-value"></span></label>
                                        <input class="input-range" id="input-range" id="amoun" type="range" value="10pt" min="8" max="14">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun1">Heading size։ <span class="range-value" id="range-value1"></span></label>
                                        <input class="input-range" id="input-range1" id="amoun1" type="range" value="10pt" min="8" max="24">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun2">Section spacing: <span class="range-value" id="range-value2"></span></label>
                                        <input class="input-range" id="input-range2" id="amoun2" type="range" value="10px" min="8" max="70">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun3">Paragraph spacing։ <span class="range-value" id="range-value3"></span></label>
                                        <input class="input-range" id="input-range3" id="amoun3" type="range" value="10px" min="1" max="40">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun4">Line spacing։ <span class="range-value" id="range-value4"></span></label>
                                        <input class="input-range" id="input-range4" id="amoun4" type="range" value="10px" min="10" max="50">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun5">Top & Bottom margin։ <span class="range-value" id="range-value5"></span></label>
                                        <input class="input-range" id="input-range5" id="amoun5" type="range" value="10px" min="20" max="130">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun6">Side margin։ <span class="range-value" id="range-value6"></span></label>
                                        <input class="input-range" id="input-range6" id="amoun6" type="range" value="10px" min="1" max="100">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun7">Paragraph indent։ <span class="range-value" id="range-value7"></span></label>
                                        <input class="input-range" id="input-range7" id="amoun7" type="range" value="10px" min="1" max="70">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun8">Font weight։ <span class="range-value" id="range-value8"></span></label>
                                        <input class="input-range" id="input-range8" id="amoun8" type="range" value="200" min="200" max="900">
                                    </div>
                                </li>


                            </ul>

                        </li>
                    </ul>
                    <div class="red_tools2">
                        <div class="red_tools2_tool">
                            <h5>Download formats</h5>

                            <ul>
                                <li>
                                    <input type="radio" id="a1" name="a">
                                    <label for="a1">PDF</label>
                                </li>
                                <li>
                                    <input type="radio" id="a2" name="a">
                                    <label for="a2">Word</label>
                                </li>
                                <li>
                                    <input type="radio" id="a3" name="a">
                                    <label for="a3">ASCII</label>
                                </li>
                            </ul>
                            <button class="btn btn_tool"><a href="download.html"><i class="fas fa-download"></i>Download</a></button>
                        </div>
                        <div class="red_tools2_tool">
                            <h5>Resume Sections</h5>

                            <ul class="credentials-list">
                                <li>
                                    <a href="{{ route('header') }}">Header</a>
                                </li>
                                <li>
                                    <a href="{{ route('experience.index') }}">Experience</a>
                                </li>
                                <li>
                                    <a href="{{ route('education.index') }}">Education</a>
                                </li>
                                <li>
                                    <a href="{{ route('skills') }}">Skills</a>
                                </li>
                                <li>
                                    <a href="{{ route('summary') }}">Summary</a>
                                </li>
                                <li>
                                    <a href="{{ route('accomplishments') }}">Accomplishments</a>
                                </li>
                                <li>
                                    <a href="{{ route('profiles') }}">Websites, portfolios, profiles</a>
                                </li>
                                <li>
                                    <a href="{{ route('additional-information') }}">Additional Information</a>
                                </li>
                                <li>
                                    <a href="{{ route('certifications') }}">Certifications</a>
                                </li>

                                @foreach($extraCredentials as $credential)
                                    <li>
                                        <a href="{{ route('custom-section.show', $credential->slug) }}">{{ $credential->title }}</a>
                                        <span class="resume-review-section-remove" data-section="{{ $credential->id }}"><i class="fas fa-times" title="Remove"></i></span>
                                    </li>
                                @endforeach

                            </ul>
                            <button class="btn btn_tool" id="add_sec"><i class="fas fa-plus"></i>Add a section</button>
                            <div class="das_inp d-none">
                                <form>
                                    <input type="text" placeholder="Add a Custom section">
                                    <button class="btn btn-blue resume-review-section">Add</button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </section>

    </main>
@endsection

@section('extra-scripts')
    <script src="{{asset('js/add-section.js')}}"></script>
@endsection