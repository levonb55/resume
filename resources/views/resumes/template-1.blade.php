<div class="example example1">
    <div>

        <div class="head1">
            <div class="name_res">
                <h2 id="first_text2">{{ $credential->first_name }} </h2>
                <h2 id="last_name2">{{ $credential->last_name }}</h2>
            </div>
            <p>
                <span class="comma">{{ $credential->address }}</span>
                <span class="comma">{{ $credential->city . ' ' . $credential->state . ' ' . $credential->zip }}</span>
                <span class="comma">{{ $credential->phone }}</span>
                <span>{{ $credential->email }}</span>
            </p>
        </div>

        <ul id="sortable" class="ui-sortable resum">

            @if($credential->summary)
                <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                    <h5>Professional Summary</h5>
                    <hr>
                    {!! $credential->summary !!}
                </li>
            @endif

            @if($experiences->count())
                <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                    <h5>Employment history</h5>
                    <hr>
                    @foreach($experiences as $experience)
                        <div class="resum_main">
                            <div class="left_resum  ">
                                <p class="font-weight-bold">{{ $experience->title }}</p>
                                <span>{{ $experience->startDate() . ' - ' . $experience->endDate()}}</span>
                                {!! $experience->description !!}
                            </div>
                            <div class="right_resum">
                                <p>{{ $experience->city . ', ' . $experience->state  }}</p>
                            </div>
                        </div>
                    @endforeach
                </li>
            @endif

            @if($education->count())
                <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                    <h5>Education</h5>
                    <hr>
                    @foreach($education as $educationItem)
                        <div class="resum_main">
                            <div class="left_resum">
                                <p class="font-weight-bold">
                                    {{ $educationItem->school . ', ' . $educationItem->study . ', ' . $educationItem->degree}}
                                </p>
                                <span>{{ $educationItem->startDate() . ' - ' . $educationItem->endDate()}}</span>
                                {!! $educationItem->description !!}
                            </div>
                            <div class="right_resum">
                                <p>{{ $educationItem->location }}</p>
                            </div>
                        </div>
                    @endforeach
                </li>
            @endif

            @if($credential->skills)
                <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                    <h5>Skills</h5>
                    <hr>
                    <div class="resum_main">
                        <div class="left_resum">
                            {!! $credential->skills !!}
                        </div>
                    </div>
                </li>
            @endif

            @foreach($extraCredentials as $extra)
                @if($extra->content)
                    <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                        <h5>{{ $extra->title }}</h5>
                        <hr>
                        <div class="resum_main">
                            <div class="left_resum">
                                {!! $extra->content !!}
                            </div>
                        </div>
                    </li>
                @endif
            @endforeach

        </ul>
    </div>

</div>
