<div class="preview">
    <p data-toggle="modal" data-target="#resume-modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
            <defs><style>.a{fill:#18358a;}</style></defs><g transform="translate(10.554 9.374)">
                <path class="a" d="M278.4,247.557a3.532,3.532,0,0,0-.376-4.549,3.641,3.641,0,0,0-5.009,0,3.536,3.536,0,0,0,4.549,5.384l3.024,2.953.835-.835Z" transform="translate(-271.979 -242.01)"/>
            </g><g transform="translate(10.603 0.346)"><path class="a" d="M272,8.789v4.416h4.377Z" transform="translate(-272 -8.789)"/>
            </g><path class="a" d="M14.108,17.618A4.637,4.637,0,0,1,10.8,16.243a4.649,4.649,0,0,1,4.476-7.8V5.9H9.431V0H0V20H15.277V17.452A4.661,4.661,0,0,1,14.108,17.618ZM2.338,7.07H10.6V8.242H2.338Zm5.924,8.2H2.338V14.1H8.262Zm0-2.344H2.338V11.758H8.262Zm0-2.344H2.338V9.414H8.262Z"/></svg>Preview Resume</p>
</div>

<!-- The Modal -->
<div class="modal fade" id="resume-modal" tabindex="-1" role="dialog" aria-labelledby="resume-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <!-- Modal body -->
            <div class="modal-body">
                @includeIf('components.resumes.template' . auth()->user()->credential->template_id)

                {{--                <div class="cv_template example1">--}}
{{--                    <div>--}}
{{--                        <div class="head1">--}}
{{--                            <div class="name_res">--}}
{{--                                <h2 id="first_text2">James </h2>--}}
{{--                                <h2 id="last_name2">Miller</h2>--}}
{{--                            </div>--}}

{{--                            <p>--}}
{{--                                <span class="address" id="address_person">44 Shirley Ave,</span>--}}
{{--                                <span id="sity_sity">New York</span>--}}
{{--                                <span id="state">Arizona</span>--}}
{{--                                <span class="mail_zip" id="zip_zip">0465/55,</span>--}}
{{--                                <span class="telephone" id="phone_phone"> +465555555668,</span>--}}
{{--                                <span class="mail" id="email_email">jamask@mail.ru</span>--}}
{{--                            </p>--}}

{{--                        </div>--}}
{{--                        <div class="resum">--}}
{{--                            <div class="sec_resum">--}}
{{--                                <h4>Professional Summary</h4>--}}
{{--                                <hr>--}}


{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eum, facere, fugiat in maxime mollitia odio perferendis possimus provident quisquam reprehenderit sit. Et in laudantium magni odit suscipit totam vitae?</p>--}}

{{--                            </div>--}}
{{--                            <div class="sec_resum">--}}
{{--                                <h4>Employment history</h4>--}}
{{--                                <hr>--}}

{{--                                <div class="resum_main">--}}
{{--                                    <div class="left_resum  ">--}}
{{--                                        <p class="font-weight-bold">It Technician</p>--}}
{{--                                        <span>Oct 2015-apr 2016</span>--}}
{{--                                        <p>Operate and maintain information systems</p>--}}
{{--                                        <p>Facilitiang system utilization</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="right_resum">--}}
{{--                                        <p>bingham</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>--}}
{{--                            <div class="sec_resum">--}}
{{--                                <h4>Education</h4>--}}
{{--                                <hr>--}}

{{--                                <div class="resum_main">--}}
{{--                                    <div class="left_resum  ">--}}
{{--                                        <p class="font-weight-bold">It Technician</p>--}}
{{--                                        <span>Oct 2015-apr 2016</span>--}}
{{--                                        <p>Operate and maintain information systems</p>--}}
{{--                                        <p>Facilitiang system utilization</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="right_resum">--}}
{{--                                        <p>bingham</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="sec_resum">--}}
{{--                                <h4>Honors</h4>--}}
{{--                                <hr>--}}
{{--                                <div class="resum_main">--}}
{{--                                    <div class="left_resum  ">--}}
{{--                                        <p class="font-weight-bold">It Technician</p>--}}
{{--                                        <span>Oct 2015-apr 2016</span>--}}
{{--                                        <p>Operate and maintain information systems</p>--}}
{{--                                        <p>Facilitiang system utilization</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="right_resum">--}}
{{--                                        <p>bingham</p>--}}

{{--                                    </div>--}}
{{--                                </div>--}}


{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>      </div>--}}
            </div>

        </div>
    </div>
</div>