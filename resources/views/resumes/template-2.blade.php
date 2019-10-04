<div class="example example2">
    <div class="">
        <div class="left_head">
            <div class="head">
                <h1><span>{{ $credential->first_name }}</span> <span>{{ $credential->last_name }}</span></h1>
            </div>
            <div class="info">
                <ul>
                    <li>
                        <span>
                            {{ $credential->address ? $credential->address . ', ' : '' }}
                        </span>
                        <span>{{ $credential->city . ' ' . $credential->state . ' ' . $credential->zip }}</span>
                    </li>
                    <li>{{ $credential->phone }}</li>
                    <li>{{ $credential->email }}</li>
                </ul>
            </div>

        </div>
        <div class="resum">
            <ul id="sortable" class="ui-sortable left">
                @if($credential->summary)
                    <li class="summary red_item ui-state-default ui-sortable-handle">
                        <h5>SUMMARY</h5>
                        <hr>
                        <p>{!! $credential->summary !!}</p>
                    </li>
                @endif

                @if($experiences->count())
                    <li class="experience red_item ui-state-default ui-sortable-handle">
                        <h5>WORK EXPERIENCE</h5>
                        <hr>
                        @foreach($experiences as $experience)
                            <div class="experience_example">
                                <div class="exp_left">
                                    <p>{{ $experience->startDate() . ' - ' . $experience->endDate()}}</p>
                                </div>
                                <div class="exp_right">
                                    <h6>{{ $experience->title }}</h6>
                                    <p>{!! $experience->description !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </li>
                @endif

                @if($education->count())
                    <li class="education red_item ui-state-default ui-sortable-handle">
                        <h5>EDUCATION</h5>
                        <hr>
                        @foreach($education as $educationItem)
                            <div class="experience_example">
                                <div class="exp_left">
                                    <p>{{ $educationItem->startDate() . ' - ' . $educationItem->endDate()}}</p>
                                </div>
                                <div class="exp_right">
                                    <h6>{{ $educationItem->school . ', ' . $educationItem->study . ', ' . $educationItem->degree}}</h6>
                                    <p>{!! $educationItem->description !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </li>
                @endif
            </ul>
            <div class="right">
                @if($credential->skills)
                    <div class="skills">
                        <h5>SKILLS</h5>
                        <hr>
                        <p>{!! $credential->skills !!}</p>
                    </div>
                @endif

                @foreach($extraCredentials as $extra)
                    @if($extra->content)
                        <div>
                            <h5>{{ strtoupper($extra->title) }}</h5>
                            <hr>
                            <p>{!! $extra->content !!}</p>
                        </div>
                    @endif
                @endforeach

{{--                <div class="awards">--}}
{{--                    <h5>AWARDS</h5>--}}
{{--                    <hr>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at eaque eligendi, iste laboriosam minima minus neque placeat repellendus tenetur, vel velit voluptas? Dolor, eaque harum incidunt nulla quia rem sed sint unde vitae?</p>--}}
{{--                </div>--}}
{{--                <div class="skills">--}}
{{--                    <h5>SKILLS</h5>--}}
{{--                    <hr>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at eaque eligendi, iste laboriosam minima minus neque placeat repellendus tenetur, vel velit voluptas? Dolor, eaque harum incidunt nulla quia rem sed sint unde vitae?</p>--}}
{{--                </div>--}}
{{--                <div class="interests">--}}
{{--                    <h5>INTERESTS</h5>--}}
{{--                    <hr>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at eaque eligendi, iste laboriosam minima minus neque placeat repellendus tenetur, vel velit voluptas? Dolor, eaque harum incidunt nulla quia rem sed sint unde vitae?</p>--}}
{{--                </div>--}}
            </div>
        </div>



    </div>
</div>
