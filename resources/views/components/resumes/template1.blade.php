<div class="example example1">
    <div>
        <div class="head1">
            <div class="name_res">
                <h2 id="first_text2">{{ $credential->first_name ?? 'First Name' }} </h2>
                <h2 id="last_name2">{{ $credential->last_name ?? 'Last Name' }}</h2>
            </div>

            <p>
                <span class="address" id="address_person">{{ $credential->address ?? 'Street Address' }},</span>
                <span id="sity_sity">{{ $credential->city ?? 'City' }}</span>
                <span id="state">{{ $credential->state ?? 'State' }}</span>
                <span class="mail_zip" id="zip_zip">{{ $credential->zip ?? 'Zip Code' }},</span>
                <span class="telephone" id="phone_phone">{{ $credential->phone ?? '+123456789' }},</span>
                <span class="mail" id="email_email">{{ $credential->email ?? 'jack@example.com' }}</span>
            </p>

        </div>
        <ul id="sortable" class="ui-sortable resum">
            <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                <h5>Professional Summary</h5>
                <hr>
                @if($credential->summary)
                    {!! $credential->summary !!}
                @else
                    <p>Experienced Project Manager with vast IT experience. Skills include computer networking, analytical
                    thinking and creative problem solving</p>
                @endif
            </li>
            <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                <h5>Employment history</h5>
                <hr>

                @if($experiences->count())
                    @foreach($experiences as $experience)
                        <div class="resum_main">
                            <div class="left_resum">
                                <p class="font-weight-bold">{{ $experience->title }}</p>
                                <span>{{ $experience->startDate() . ' - ' . $experience->endDate()}}</span>
                                {!! $experience->description !!}
                            </div>
                            <div class="right_resum">
                                <p>{{ $experience->city . ', '  . $experience->state }}</p>
                            </div>
                        </div>
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
                            <p>Birmingham</p>
                        </div>
                    </div>
                @endif

            </li>


            <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                <h5>Education</h5>
                <hr>

                @if($education->count())
                    @foreach($education as $educationItem)
                        <div class="resum_main">
                            <div class="left_resum">
                                <p class="font-weight-bold">
                                    {{ $educationItem->school ??  'Bournville School Secondary School' }},
                                    {{ $educationItem->study ?? 'Computer Science' }},
                                    {{ $educationItem->degree ?? 'Master Degree' }}
                                </p>
                                <span>{{ $educationItem->startDate() . ' - ' . $educationItem->endDate()}}</span>
                                {!! $educationItem->description !!}
                            </div>
                            <div class="right_resum">
                                <p>{{ $educationItem->location ?? 'London, UK' }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="resum_main">
                        <div class="left_resum">
                            <p class="font-weight-bold">Bournville School Secondary School</p>
                            <span>Oct 2015-apr 2016</span>
                            <p>Business Studies(B), ICT(C)</p>
                        </div>
                        <div class="right_resum">
                            <p>Bournville</p>
                        </div>
                    </div>
                @endif

            </li>

            <li class="sec_resum red_item ui-state-default ui-sortable-handle">
                <h5>Skills</h5>
                <hr>
                <div class="resum_main">
                    <div class="left_resum">
                        @if($credential->skills)
                            {!! $credential->skills !!}
                        @else
                            <p>GAAP principles expertise</p>
                            <p>Sales and marketing</p>
                        @endif
                    </div>
                </div>
            </li>


        </ul>
    </div>

</div>
