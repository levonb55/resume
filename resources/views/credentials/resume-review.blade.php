@extends('layouts.main')

@section('title', 'Review Resume')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templates.css') }}">
    <style>
        
    </style>
@endsection

@section('content')
{{--    @php--}}
{{--        $selectedTemplate = auth()->user()->credential->template_id;--}}
{{--    @endphp--}}
    <main>
        <section class="redaktor_section">
            <div class="row red_row">
                <form action="{{ route('resume-review.update', $credential->template_id) }}" method="POST" class="d-inline-flex">
                    @csrf
                    @method('PUT')

                    <div class="col-sm-12 col-lg-9 red_left_side">
                        @if(session()->has('payment-success'))
                            <div class="alert alert-success">
                                {{ session()->get('payment-success') }}
                            </div>
                        @endif

{{--                        @includeIf('resumes.template-' . $selectedTemplate)--}}
                        @includeIf('components.resumes.template' . $credential->template_id)
                    </div>

                    <div class="col-sm-12 col-lg-2 red_right_side">
                    <div class="red_save">
                        <button type="submit" class="btn">Save</button>
                    </div>
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
                                        <label>
                                            <img
                                                src="{{ asset('assets/images/templates/template-' . $template->id . '.png') }}"
                                                alt="Resume"
                                                class="imgClickHandle {{ $credential->template_id === $template->id ? 'active-template' : null }}"
                                            >
                                            <input type="radio" class="d-none" name="template" value="{{ $template->id }}" {{ $credential->template_id == $template->id ? 'checked' : '' }}>
                                        </label>
                                    </li>
                                @endforeach
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
                                    <input type="radio" id="a1" name="a" value='download-resume-pdf' class="resume-format" checked>
                                    <label for="a1">PDF</label><span class="badge badge-secondary" title="Maximum permitted downloads">{{ $credential->pdf }}</span>
                                </li>
                                <li>
                                    <input type="radio" id="a2" name="a" value='download-resume-word' class="resume-format">
                                    <label for="a2">Word</label><span class="badge badge-secondary" title="Maximum permitted downloads">{{ $credential->word }}</span>
                                </li>
{{--                                <li>--}}
{{--                                    <input type="radio" id="a3" name="a">--}}
{{--                                    <label for="a3">ASCII</label>--}}
{{--                                </li>--}}
                            </ul>
                            <button class="btn btn_tool">
                                <a href="{{ route('download-resume-pdf') }}" class="resume-download-btn" target="_blank">
                                    <i class="fas fa-download"></i>Download
                                </a>
                            </button>
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

                                @foreach($extraCredentials as $extra)
                                    <li>
                                        <a href="{{ route('custom-section.show', $extra->slug) }}">{{ $extra->title }}</a>
                                        <span class="resume-review-section-remove" data-section="{{ $extra->id }}"><i class="fas fa-times" title="Remove"></i></span>
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
                </form>
            </div>

        </section>

    </main>
@endsection

@section('extra-scripts')
    <script src="{{asset('js/add-section.js')}}"></script>
@endsection