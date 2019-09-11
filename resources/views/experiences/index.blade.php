@extends('layouts.main')

@section('title', 'Review Experience')

@section('extra-styles')
    <link rel="stylesheet" href="{{ asset('css/Lcss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/jquery-ui.min.css') }}">
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

                <div class="preview-wrapper">
                    @include('partials._resume-modal')
                </div>
            </div>

            @if($experiences->count() >= 1)
                <ul id="sortable">
                    @foreach($experiences as $experience)
                        <li class="red_item rev_red_item ui-state-default"
                            data-id="{{ $experience->id }}"
                            data-order="{{ $experience->order }}"
                        >

                        <div class="rew_sort_li_1">
                            <div class="rew_sort_num">
                                {{ $loop->iteration }}
                            </div>
                        </div>
                        <div class="rew_sort_li_2">
                            <div class="rew_position">
                                <h5>{{ $experience->title }}</h5>
                                <h5>{{ $experience->employer }}</h5>
                            </div>

                            <p>{!! $experience->description !!}</p>

                        </div>
                        <div class="rew_sort_li_3">
                            <div class="rew_position">
                                <h5>{{ $experience->city }}</h5>
                                <h5>{{ $experience->state }}</h5>
                                <h5>{{ $experience->end_date ?  date('Y', strtotime($experience->end_date)) : 'Present'}}</h5>
                            </div>
                        </div>
                        <div class="rew_sort_li_4">
                            <div class="red_tools ">
                                <div class="tool1" title="Edit">
                                    <a href="{{ route('experience.edit', $experience->id) }}">
                                        <img src="{{ asset('assets/images/pencil-edit-button.png') }}" alt="Pen">
                                    </a>
                                </div>
                                <div class="reorder-experience" title="Move">
                                    <img src="{{ asset('assets/images/move-option.png') }}" alt="Move">
                                </div>
                                <form action="{{ route('experience.destroy', $experience->id) }}" method="POST" title="Remove">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <img src="{{ asset('assets/images/rubbish-bin-delete-button.png') }}" alt="Trash">
                                    </button>
                                </form>
                            </div>
                        </div>

                    </li>
                    @endforeach
                </ul>
            @else
                <h5 class="mt-4 text-center">No experience provided.</h5>
            @endif

            <div class="back_continue experience_page">
                @if($experiences->count() >= 1)
                    <a href="{{ route('header') }}" class="back_left">
                        <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                    </a>
                @else
                    <a href="{{ route('experience.create') }}" class="back_left">
                        <p><span class="fas fa-long-arrow-alt-left"></span> Back</p>
                    </a>
                @endif
                <a href="{{ route('experience.create') }}" class="continue_right">
                    <p><span class="fas fa-plus"> Add Experience </p>
                </a>
                <a href="{{ route('education.create') }}" class="continue_right">
                    <p> Continue <span class="fas fa-long-arrow-alt-right"></span></p>
                </a>
            </div>
        </section>
    </main>
@endsection

@section('extra-scripts')
    <script src="{{ asset('assets/libs/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/experience.js') }}"></script>
@endsection