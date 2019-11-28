@extends('layouts.main')

@section('title', 'Cover Letter - Review')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cover-templates.css') }}">
@endsection

@section('content')
    <main>
        <section class="redaktor_section">
            <div class="row red_row">
                <form action="{{ route('cover-letter.review-update') }}" method="POST" class="d-inline-flex">
                    @csrf
                    @method('PUT')

                    <div class="col-lg-9 col-xl-9 red_left_side">
                        @if(session()->has('payment-success'))
                            <div class="alert alert-success">
                                {{ session()->get('payment-success') }}
                            </div>
                        @endif

                        @includeIf('components.cover-letters.template' . auth()->user()->coverLetter->template_id)
                    </div>

                    <div class="col-lg-3 col-xl-3 red_right_side">
                        <div style="width: 230px">
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
                                                        src="{{ asset('assets/images/cover-templates/' . $template->image) }}"
                                                        alt="Cover Letter"
                                                        class="imgClickHandle {{ $coverLetter->template_id === $template->id ? 'active-template' : null }}"
                                                    >
                                                    <input type="radio" class="d-none" name="template_id" value="{{ $template->id }}" {{ $coverLetter->template_id == $template->id ? 'checked' : '' }}>
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
                                            Font style
                                            <select class="browser-default custom-select" id="font_famly" name="font_family">
                                                @foreach($fonts as $key => $font)
                                                    <option value="{{ $key }}" {{ $font === $coverLetter->font_family ? 'selected' : '' }}>{{ $font }}</option>
                                                @endforeach
                                            </select>
                                        </li>
                                        <li>
                                            <div class="range-slider">
                                                <label for="input-range">Font size։ <span class="range-value" id="range-value"></span></label>
                                                <input class="input-range" id="input-range" type="range" name="font_size" value="{{  $coverLetter->font_size }}" min="8" max="20">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="range-slider">
                                                <label for="input-range1">Heading size։ <span class="range-value" id="range-value1"></span></label>
                                                <input class="input-range" id="input-range1" type="range" name="heading_size" value="{{ $coverLetter->heading_size }}" min="8" max="30">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="range-slider">
                                                <label for="input-range2">Section spacing: <span class="range-value" id="range-value2"></span></label>
                                                <input class="input-range" id="input-range2" type="range" name="section_spacing" value="{{ $coverLetter->section_spacing }}" min="8" max="70">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="range-slider">
                                                <label for="input-range3">Paragraph spacing։ <span class="range-value" id="range-value3"></span></label>
                                                <input class="input-range" id="input-range3" type="range" name="par_spacing" value="{{ $coverLetter->par_spacing }}" min="1" max="40">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="range-slider">
                                                <label for="input-range4">Line spacing։ <span class="range-value" id="range-value4"></span></label>
                                                <input class="input-range" id="input-range4" type="range" name="line_spacing" value="{{ $coverLetter->line_spacing }}" min="10" max="50">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="range-slider">
                                                <label for="input-range5">Top & Bottom margin։ <span class="range-value" id="range-value5"></span></label>
                                                <input class="input-range" id="input-range5" type="range" name="tb_margin" value="{{ $coverLetter->tb_margin }}" min="20" max="130">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="range-slider">
                                                <label for="input-range6">Side margin։ <span class="range-value" id="range-value6"></span></label>
                                                <input class="input-range" id="input-range6" type="range" name="side_margin" value="{{ $coverLetter->side_margin }}" min="1" max="100">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="range-slider">
                                                <label for="input-range7">Paragraph indent։ <span class="range-value" id="range-value7"></span></label>
                                                <input class="input-range" id="input-range7" type="range" name="par_indent" value="{{ $coverLetter->par_indent }}" min="1" max="70">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="range-slider">
                                                <label for="input-range7">Font weight։ <span class="range-value" id="range-value8"></span></label>
                                                <input class="input-range" id="input-range8" type="range" name="font_weight" value="{{ $coverLetter->font_weight }}" min="100" max="900">
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
                                            <input type="radio" id="a1" name="a" value='download-cover-pdf' class="download-format" checked>
                                            <label for="a1">PDF</label><span class="badge badge-secondary" title="Maximum permitted downloads">{{ $coverLetter->pdf }}</span>
                                        </li>
                                        <li>
                                            <input type="radio" id="a2" name="a" value='download-cover-word' class="download-format">
                                            <label for="a2">Word</label><span class="badge badge-secondary" title="Maximum permitted downloads">{{ $coverLetter->word }}</span>
                                        </li>
                                        <li>
                                            <input type="radio" id="a3" name="a" value='download-cover-txt' class="download-format">
                                            <label for="a3">ASCII</label><span class="badge badge-secondary" title="Maximum permitted downloads">{{ $coverLetter->txt }}</span>
                                        </li>
                                    </ul>
                                    <button class="btn btn_tool">
                                        <a href="{{ route('download-cover-pdf') }}" class="download-btn" target="_blank">
                                            <i class="fas fa-download"></i>Download
                                        </a>
                                    </button>
                                </div>
                                <div class="red_tools2_tool">
                                    <h5>Cover Letter Sections</h5>
                                    <ul class="credentials-list">
                                        <li>
                                            <a href="{{ route('cover-letter.job') }}">Job Title</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('cover-letter.employer') }}">Employer</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('cover-letter.strengths') }}">Strengths</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('cover-letter.experience') }}">Experience</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('cover-letter.style') }}">Working Style</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('cover-letter.name') }}">Name</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </section>

    </main>
@endsection
