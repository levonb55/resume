<div class="example example2">
    <div class="">
        <div class="left_head">
            <div class="head">
                <h1><span id="first_text2">{{ $credential->first_name ?? 'First Name' }} </span> <span id="last_name2">{{ $credential->last_name ?? 'Last Name' }}</span></h1>
            </div>
            <div class="info">
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
                        <li id="phone_phone">{{ $credential->phone ? $credential->phone : '+123456789' }}</li>
                    @endif

                    <li id="email_email">{{ $credential->email ?? 'name@example.com' }}</li>
                </ul>
            </div>

        </div>
        <div class="resum">
            <ul id="sortable" class="ui-sortable left">

                @if($credential->summary || $showDefault)
                    <li class="summary red_item ui-state-default ui-sortable-handle">
                        <h5>SUMMARY</h5>
                        <hr>
                        @if($credential->summary)
                            <p>{!! $credential->summary !!}</p>
                        @else
                            <p>Experienced Project Manager with vast IT experience. Skills include computer networking, analytical
                                thinking and creative problem solving</p>
                        @endif
                    </li>
                @endif

                @if($experiences->count() || $showDefault)
                    <li class="experience red_item ui-state-default ui-sortable-handle">
                        <h5>WORK EXPERIENCE</h5>
                        <hr>
                        @if($experiences->count())
                            @foreach($experiences as $experience)
                                <div class="experience_example">
                                    <div class="exp_left">
                                        <p>{{ $experience->startDate() . ' - ' . $experience->endDate()}}</p>
                                    </div>
                                    <div class="exp_right">
                                        <h6>{{ $experience->title . ', ' . $experience->employer }}</h6>
                                        {!! $experience->description !!}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="experience_example">
                                <div class="exp_left">
                                    <p>Oct 2015-present</p>
                                </div>
                                <div class="exp_right">
                                    <h6>SENIOR DESIGNER</h6>
                                    <p>Creative </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam dolores ducimus ea ipsa
                                        ipsum molestiae nam placeat quaerat quisquam sit.</p>
                                </div>
                            </div>
                            <div class="experience_example">
                                <div class="exp_left">
                                    <p>Nov 2013-Oct 2015</p>
                                </div>
                                <div class="exp_right">
                                    <h6>It Technician, International Mobilities</h6>
                                    <p>Operate and maintain information systems</p>
                                    <p>Facilitiang system utilization</p>
                                </div>
                            </div>
                        @endif
                    </li>
                @endif

                @if($education->count() || $showDefault)
                    <li class="education red_item ui-state-default ui-sortable-handle">
                        <h5>EDUCATION</h5>
                        <hr>
                        @if($education->count())
                            @foreach($education as $educationItem)
                                <div class="experience_example">
                                    <div class="exp_left">
                                        <p>{{ $educationItem->startDate() . ' - ' . $educationItem->endDate()}}</p>
                                    </div>
                                    <div class="exp_right">
                                        <h6>{{ $educationItem->school . ', ' . $educationItem->study . ', ' . $educationItem->degree }}</h6>
                                        {!! $educationItem->description !!}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="experience_example">
                                <div class="exp_left">
                                    <p>Oct 2015 - Nov 2017</p>
                                </div>
                                <div class="exp_right">
                                    <h6>MIT, COMPUTER SCIENCE</h6>
                                    <p>Topics include how computers work, simple algorithms and their efficiency, networking,
                                        databases, artificial intelligence, graphics, simulation and modeling</p>
                                </div>
                            </div>
                        @endif
                    </li>
                @endif
            </ul>

            <div class="right">

                @if($credential->skills || $showDefault)
                    <div class="skills">
                        <h5>SKILLS</h5>
                        <hr>
                        @if($credential->skills)
                            {!! $credential->skills !!}
                        @else
                            <p>GAAP principles expertise</p>
                            <p>Sales and marketing</p>
                        @endif
                    </div>
                @endif

                @if($extraCredentials->count() || $showDefault)
                    @if($extraCredentials->count())
                        @foreach($extraCredentials as $extra)
                            @if($extra->content)
                                <div>
                                    <h5>{{ strtoupper($extra->title) }}</h5>
                                    <hr>
                                    <p>{!! $extra->content !!}</p>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="awards">
                            <h5>ACCOMPLISHMENTS</h5>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at eaque eligendi, iste laboriosam
                                minima minus neque placeat repellendus tenetur, vel velit voluptas? Dolor, eaque harum incidunt nulla
                                quia rem sed sint unde vitae?</p>
                        </div>
                        <div class="awards">
                            <h5>ADDITIONAL INFORMATION</h5>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi at eaque eligendi, iste laboriosam
                                minima minus neque placeat repellendus tenetur, vel velit voluptas? Dolor, eaque harum incidunt nulla
                                quia rem sed sint unde vitae?</p>
                        </div>
                    @endif
                @endif

            </div>

        </div>

    </div>
</div>
