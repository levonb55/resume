<div class="example example1">
    <div>
        <div class="head1">
            <div class="name_res">
                <h2 id="first_text2">{{ $credential->first_name ?? 'First Name' }} </h2>
                <h2 id="last_name2">{{ $credential->last_name ?? 'Last Name' }}</h2>
            </div>

            <p>
                @if($credential->address || $showDefault)
                    <span class="address" id="address_person">{{ $credential->address ? $credential->address : 'Street Address' }},</span>
                @endif

                @if($credential->city || $showDefault)
                    <span id="sity_sity">{{ $credential->city ? $credential->city : 'City' }}</span>
                @endif

                @if($credential->state || $showDefault)
                    <span id="state">{{ $credential->state ? $credential->state : 'State' }}</span>
                @endif

                @if($credential->zip || $showDefault)
                    <span class="mail_zip" id="zip_zip">{{ $credential->zip ? $credential->zip : 'Zip Code' }},</span>
                @endif

                @if($credential->phone || $showDefault)
                    <span class="telephone" id="phone_phone">{{ $credential->phone ? $credential->phone : '+123456789' }},</span>
                @endif

                <span class="mail" id="email_email">{{ $credential->email ?? 'name@example.com' }}</span>
            </p>

        </div>
        <ul id="sortable" class="ui-sortable resum">

            @if($credential->summary || $showDefault)
                <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                    <h5>Professional Summary</h5>
                    <hr />
                    @if($credential->summary)
                        {!! $credential->summary !!}
                    @else
                        <p>Experienced Project Manager with vast IT experience. Skills include computer networking, analytical
                        thinking and creative problem solving</p>
                    @endif
                </li>
            @endif

            @if($experiences->count() || $showDefault)
                <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                    <h5>Employment history</h5>
                    <hr />

                    @if($experiences->count())
                        @foreach($experiences as $experience)
                            <ul class="resum_main">
                                <li class="left_resum">
                                    <p class="font-weight-bold">{{ $experience->title . ', ' . $experience->employer }}</p>
                                    <span>{{ $experience->startDate() . ' - ' . $experience->endDate()}}</span>
                                    {!! $experience->description !!}
                                </li>
                                <li class="right_resum">
                                    <p>{{ $experience->city . ', '  . $experience->state }}</p>
                                </li>
                            </ul>
                        @endforeach
                    @else
                        <div class="resum_main">
                            <div class="left_resum  ">
                                <p class="font-weight-bold">It Technician, International Mobilities</p>
                                <span>Oct 2015-apr 2016</span>
                                <p>Operate and maintain information systems</p>
                                <p>Facilitiang system utilization</p>
                            </div>
                            <div class="right_resum">
                                <p>Birmingham, UK</p>
                            </div>
                        </div>
                    @endif

                </li>
            @endif

            @if($education->count() || $showDefault)
                <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                    <h5>Education</h5>
                    <hr />

                    @if($education->count())
                        @foreach($education as $educationItem)
                            <ul class="resum_main">
                                <li class="left_resum">
                                    <p class="font-weight-bold">
                                        {{ $educationItem->school . ', ' . $educationItem->study . ', ' . $educationItem->degree}}
                                    </p>
                                    <span>{{ $educationItem->startDate() . ' - ' . $educationItem->endDate()}}</span>
                                    {!! $educationItem->description !!}
                                </li>
                                <li class="right_resum">
                                    <p>{{ $educationItem->location }}</p>
                                </li>
                            </ul>
                        @endforeach
                    @else
                        <div class="resum_main">
                            <div class="left_resum">
                                <p class="font-weight-bold">Bournville School Secondary School</p>
                                <span>Oct 2015-apr 2016</span>
                                <p>Business Studies(B), ICT(C)</p>
                            </div>
                            <div class="right_resum">
                                <p>London, UK</p>
                            </div>
                        </div>
                    @endif
                </li>
            @endif

            @if($credential->skills || $showDefault)
                <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                    <h5>Skills</h5>
                    <hr />
                    <ul class="resum_main">
                        <li class="left_resum">
                            @if($credential->skills)
                                {!! $credential->skills !!}
                            @else
                                <p>GAAP principles expertise</p>
                                <p>Sales and marketing</p>
                            @endif
                        </li>
                    </ul>
                </li>
            @endif

            @foreach($extraCredentials as $extra)
                @if($extra->content)
                    <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                        <h5>{{ $extra->title }}</h5>
                        <hr />
                        <ul class="resum_main">
                            <li class="left_resum">
                                {!! $extra->content !!}
                            </li>
                        </ul>
                    </li>
                @endif
            @endforeach

        </ul>
    </div>

</div>
