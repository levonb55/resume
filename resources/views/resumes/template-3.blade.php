<div class="example  example3">
    <div class="head">
        <div class="logo">
            <div>
                {{ $credential->getInitials() }}
            </div>
        </div>
        <div class="name_info">
            <h1>{{ $credential->full_name }}</h1>
            <div>
                <ul>
                    @if(strlen($credential->getLocation()) > 2)
                        <li>
                            {{ rtrim($credential->getLocation(), ', ') }}
                        </li>
                    @endif
                    @if($credential->phone)
                        <li>{{ $credential->phone }}</li>
                    @endif
                    <li>{{ $credential->email }}</li>
                </ul>
            </div>
        </div>
    </div>

    <ul id="sortable" class="body ui-sortable resum">

            @if($credential->summary)
                <li class="red_item ui-state-default ui-sortable-handle">
                    <h5>SUMMARY</h5>
                    <hr>
                    {!! $credential->summary !!}
                </li>
            @endif

            @if($experiences->count())
                <li class="red_item ui-state-default ui-sortable-handle">
                    <h5>PROFESSIONAL EXPERIENCE</h5>
                    <hr>
                    @foreach($experiences as $experience)
                        <p>{{ $experience->title }}</p>
                        <p>{{ $experience->startDate() . ' - ' . $experience->endDate() . ' ' . $experience->title}}</p>
                        <p>{!! $experience->description !!}</p>
                    @endforeach
                </li>
            @endif

            @if($education->count())
                <li class="red_item ui-state-default ui-sortable-handle">
                    <h5>EDUCATION</h5>
                    <hr>
                    @foreach($education as $educationItem)
                        <h6>{{ $educationItem->school . ', ' . $educationItem->study . ', ' . $educationItem->degree }}</h6>
                        <p>{{ $educationItem->startDate() . ' - ' . $educationItem->endDate() }}</p>
                        <p>{!! $educationItem->description !!}</p>
                    @endforeach
                </li>
            @endif

            @if($credential->skills)
                <li class="red_item ui-state-default ui-sortable-handle">
                    <h5>SKILLS</h5>
                    <hr>
                    {!! $credential->skills !!}
                </li>
            @endif

            @foreach($extraCredentials as $extra)
                @if($extra->content)
                    <li class="red_item ui-state-default ui-sortable-handle">
                        <h5>{{ strtoupper($extra->title) }}</h5>
                        <hr>
                        {!! $extra->content !!}
                    </LI>
                @endif
            @endforeach

        </ul>
</div>