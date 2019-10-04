<div class="example  example3">
    <div>
        <div class="head">
            <div class="logo">
                <div>
                    @if($credential->first_name)
                        {{ $credential->getInitials() }}
                    @else
                        FL
                    @endif
                </div>
            </div>
            <div class="name_info">
                <h1>
                    <span id="first_text2">{{ $credential->first_name ?? 'First Name' }} </span>
                    <span id="last_name2">{{ $credential->last_name ?? 'Last Name' }}</span>
                </h1>
                <div>
                    <ul>
                        <li>
                            <span id="address_person">{{ $credential->address ?? 'Street Address' }},</span>
                            <span id="sity_sity">{{ $credential->city ?? 'City' }}</span>
                            <span id="state">{{ $credential->state ?? 'State' }}</span>
                            <span id="zip_zip">{{ $credential->zip ?? 'Zip Code' }}</span>
                        </li>
                        <li id="phone_phone">{{ $credential->phone ?? '+123456789' }}</li>
                        <li id="email_email">{{ $credential->email ?? 'name@example.com' }}</li>
                    </ul>
                </div>

            </div>
        </div>
        <ul id="sortable" class="body ui-sortable resum">

            <li class="red_item ui-state-default ui-sortable-handle">
                <h5>SUMMARY</h5>
                <hr>
                @if($credential->summary)
                    {!! $credential->summary !!}
                @else
                    <ul>
                        <li>Accomplished Financial Planning and Analysis Manager offering a comprehensive background identifying cost savings opportunitiesand facilitating organizational optimization through data analysis. </li>
                        <li>Accomplished Financial Planning and Analysis Manager offering a comprehensive background identifying cost savings opportunitiesand facilitating organizational optimization through data analysis. </li>
                        <li>Continually evaluate, improve and streamline complex processesto drive revenue growth and profitability, while facilitating improved strategic decision-making.</li>
                        <li>Continually evaluate, improve and streamline complex processesto drive revenue growth and profitability, while facilitating improved strategic decision-making.</li>
                    </ul>
                @endif
            </li>

            <li class="red_item ui-state-default ui-sortable-handle">
                <h5>PROFESSIONAL EXPERIENCE</h5>
                <hr>
                @if($experiences->count())
                    @foreach($experiences as $experience)
                        <p>{{ $experience->startDate() . ' - ' . $experience->endDate() . ' ' . $experience->title}}</p>
                        <p>{!! $experience->description !!}</p>
                    @endforeach
                @else
                    <ul>
                        <li>Accomplished Financial Planning and Analysis Manager offering a comprehensive background identifying cost savings opportunitiesand facilitating organizational optimization through data analysis. </li>
                        <li>Accomplished Financial Planning and Analysis Manager offering a comprehensive background identifying cost savings opportunitiesand facilitating organizational optimization through data analysis. </li>
                        <li>Continually evaluate, improve and streamline complex processesto drive revenue growth and profitability, while facilitating improved strategic decision-making.</li>
                        <li>Continually evaluate, improve and streamline complex processesto drive revenue growth and profitability, while facilitating improved strategic decision-making.</li>
                    </ul>
                @endif
            </li>

            <li class="red_item ui-state-default ui-sortable-handle">
                <h5>EDUCATION</h5>
                <hr>
                @if($education->count())
                    @foreach($education as $educationItem)
                        <h6>{{ $educationItem->school . ', ' . $educationItem->study . ', ' . $educationItem->degree }}</h6>
                        <p>{{ $educationItem->startDate() . ' - ' . $educationItem->endDate() . ' ' . $educationItem->title}}</p>
                        <p>{!! $educationItem->description !!}</p>
                    @endforeach
                @else
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis incidunt magnam omnis quia ratione. Consequatur facere necessitatibus nihil pariatur praesentium.</p>
                @endif
            </li>

            <li class="red_item ui-state-default ui-sortable-handle">
                <h5>SKILLS</h5>
                <hr>
                @if($credential->skills)
                    {!! $credential->skills !!}
                @else
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis incidunt magnam omnis quia ratione. Consequatur facere necessitatibus nihil pariatur praesentium.</p>
                @endif
            </li>

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
</div>