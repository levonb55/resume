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
                            @if($credential->address || $showDefault)
                                <span id="address_person">{{ $credential->address ? $credential->address : 'Street Address' }},</span>
                            @endif

                            @if($credential->city || $showDefault)
                                <span id="sity_sity">{{ $credential->city ? $credential->city : 'City' }}</span>
                            @endif

                            @if($credential->state || $showDefault)
                                <span id="state">{{ $credential->state ? $credential->state : 'State' }}</span>
                            @endif

                            @if($credential->zip || $showDefault)
                                <span id="zip_zip">{{ $credential->zip ? $credential->zip : 'Zip Code' }}</span>
                            @endif
                        </li>

                        @if($credential->phone || $showDefault)
                            <li id="phone_phone">{{ $credential->phone ?? '+123456789' }}</li>
                        @endif

                        <li id="email_email">{{ $credential->email ?? 'name@example.com' }}</li>
                    </ul>
                </div>

            </div>
        </div>

        <ul id="sortable" class="body ui-sortable resum">

            @if($credential->summary || $showDefault)
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
            @endif

            @if($experiences->count() || $showDefault)
                <li class="red_item ui-state-default ui-sortable-handle">
                    <h5>PROFESSIONAL EXPERIENCE</h5>
                    <hr>
                    @if($experiences->count())
                        @foreach($experiences as $experience)
                            <h6>{{ $experience->title }}</h6>
                            <p>{{ $experience->startDate() . ' - ' . $experience->endDate() . ' ' . $experience->title}}</p>
                            <p>{!! $experience->description !!}</p>
                        @endforeach
                    @else
                        <h6>SENIOR DESIGNER</h6>
                        <p>Nov 2013 - Oct 2015</p>
                        <ul>
                            <li>Accomplished Financial Planning and Analysis Manager offering a comprehensive background identifying cost savings opportunitiesand facilitating organizational optimization through data analysis. </li>
                            <li>Accomplished Financial Planning and Analysis Manager offering a comprehensive background identifying cost savings opportunitiesand facilitating organizational optimization through data analysis. </li>
                            <li>Continually evaluate, improve and streamline complex processesto drive revenue growth and profitability, while facilitating improved strategic decision-making.</li>
                            <li>Continually evaluate, improve and streamline complex processesto drive revenue growth and profitability, while facilitating improved strategic decision-making.</li>
                        </ul>
                    @endif
                </li>
            @endif

            @if($education->count() || $showDefault)
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
                        <h6>MIT, COMPUTER SCIENCE</h6>
                        <p>Oct 2015 - Nov 2017</p>
                        <p>Topics include how computers work, simple algorithms and their efficiency, networking,
                            databases, artificial intelligence, graphics, simulation and modeling</p>
                    @endif
                </li>
            @endif

            @if($credential->skills || $showDefault)
                <li class="red_item ui-state-default ui-sortable-handle">
                    <h5>SKILLS</h5>
                    <hr>
                    @if($credential->skills)
                        {!! $credential->skills !!}
                    @else
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis incidunt magnam omnis quia ratione. Consequatur facere necessitatibus nihil pariatur praesentium.</p>
                    @endif
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
</div>