// var editor_config = {
//     toolbar: [
//         {name: 'basicstyles', items: ['Bold','Italic','Underline','Strike','-','RemoveFormat']},
//         {name: 'format', items: ['Format']},
//         {name: 'paragraph', items: ['Indent','Outdent','-','BulletedList','NumberedList']},
//         {name: 'link', items: ['Link','Unlink']},
//         {name: 'undo', items: ['Undo','Redo']}
//     ],
//
// };
// function cl1(index) {
//     return "<div class=\"clon\">\n" +
//         "        <div class=\"start_header\">\n" +
//         "            <div class=\"header_inputs\">\n" +
//         "                <h2>let's work on your experience</h2>\n" +
//         "                <p>Start with your most recent job first. You can also add volunteer work, internships, or extracurricular\n" +
//         "                    activities.</p>\n" +
//         "\n" +
//         "                <div class=\"job_area\">\n" +
//         "                    <form class=\"form_header\">\n" +
//         "                        <div class=\"name\">\n" +
//         "                            <div class=\"first_name\">\n" +
//         "                                <label>Job Title</label>\n" +
//         "                                <input type=\"text\" placeholder=\"UI/UX design\">\n" +
//         "                            </div>\n" +
//         "                            <div class=\"first_name\">\n" +
//         "                                <label>Employer</label>\n" +
//         "                                <input type=\"text\" placeholder=\"Web Projects\">\n" +
//         "                            </div>\n" +
//         "                        </div>\n" +
//         "                        <div class=\"name\">\n" +
//         "                            <div class=\"first_name\">\n" +
//         "                                <label>City</label>\n" +
//         "                                <input type=\"text\" placeholder=\"Yerevan\">\n" +
//         "                            </div>\n" +
//         "                            <div class=\"first_name\">\n" +
//         "                                <label>State</label>\n" +
//         "                                <input type=\"text\" placeholder=\"AR\">\n" +
//         "                            </div>\n" +
//         "                        </div>\n" +
//         "                        <div class=\"time_input\">\n" +
//         "                            <div class=\"data_input\">\n" +
//         "                                <label>Start Date</label>\n" +
//         "                                <input type=\"text\" placeholder=\"\">\n" +
//         "                            </div>\n" +
//         "                            <div class=\"data_input\">\n" +
//         "                                <label>End Date</label>\n" +
//         "                                <input type=\"text\" placeholder=\"\">\n" +
//         "                            </div>\n" +
//         "                        </div>\n" +
//         "                    </form>\n" +
//         "                    <label class=\"containera\" for=\"ch\""+index+">I currently work here\n" +
//         "                        <input type=\"checkbox\" id=\"ch\""+index+">\n" +
//         "                        <span class=\"checkmark\"></span>\n" +
//         "                    </label>\n" +
//         "\n" +
//         "\n" +
//         "\n" +
//         "                </div>\n" +
//         "\n" +
//         "\n" +
//         "            </div>\n" +
//         "            <div class=\"tips\">\n" +
//         "\n" +
//         "                <div class=\"dropdown show\">\n" +
//         "                    <div class=\"customer btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"true\">\n" +
//         "                        <img src=\"assets/images/customer-service.png\">\n" +
//         "                    </div>\n" +
//         "                    <div class=\"dropdown-menu dropdown-menu-right show\">\n" +
//         "                        <h4>TIPS</h4>\n" +
//         "                        <ul>\n" +
//         "                            <li>\n" +
//         "                                <p>Include up to 10 years of recent work experience,\n" +
//         "                                    beginning with your current or most recent employer.</p>\n" +
//         "                            </li>\n" +
//         "                            <li>\n" +
//         "                                <p>Use bullets to list your major accomplishments and experience\n" +
//         "                                    so employers can easily scan your resume.</p>\n" +
//         "                            </li>\n" +
//         "                            <li>\n" +
//         "                                <p>If you have relevant work experience from more than 10 years ago,\n" +
//         "                                    we recommend adding a separate section called Previous Work Experience.</p>\n" +
//         "                            </li>\n" +
//         "                        </ul>\n" +
//         "                    </div>\n" +
//         "\n" +
//         "\n" +
//         "\n" +
//         "                </div>\n" +
//         "            </div>\n" +
//         "        </div>\n" +
//         "        <div class=\"preview\">\n" +
//         "            <p>\n" +
//         "                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\">\n" +
//         "                    <defs><style>.a{fill:#18358a;}</style></defs><g transform=\"translate(10.554 9.374)\">\n" +
//         "                    <path class=\"a\" d=\"M278.4,247.557a3.532,3.532,0,0,0-.376-4.549,3.641,3.641,0,0,0-5.009,0,3.536,3.536,0,0,0,4.549,5.384l3.024,2.953.835-.835Z\" transform=\"translate(-271.979 -242.01)\"/>\n" +
//         "                </g><g transform=\"translate(10.603 0.346)\"><path class=\"a\" d=\"M272,8.789v4.416h4.377Z\" transform=\"translate(-272 -8.789)\"/>\n" +
//         "                </g><path class=\"a\" d=\"M14.108,17.618A4.637,4.637,0,0,1,10.8,16.243a4.649,4.649,0,0,1,4.476-7.8V5.9H9.431V0H0V20H15.277V17.452A4.661,4.661,0,0,1,14.108,17.618ZM2.338,7.07H10.6V8.242H2.338Zm5.924,8.2H2.338V14.1H8.262Zm0-2.344H2.338V11.758H8.262Zm0-2.344H2.338V9.414H8.262Z\"/></svg>Preview Resume</p>\n" +
//         "        </div>\n" +
//         "\n" +
//         "        <div class=\"the_company\">\n" +
//         "            <h3>Tell us what you did and how you helped the company</h3>\n" +
//         "            <div class=\"search_job\">\n" +
//         "                <div class=\"box1\">\n" +
//         "                    <form class=\"job\">\n" +
//         "                        <input type=\"search\" placeholder=\"Search by job title, industry or kayword\">\n" +
//         "                        <span class=\"fas fa-search\"></span>\n" +
//         "                    </form>\n" +
//         "                    <div class=\"add_text\">\n" +
//         "                        <div class=\"text_button\">\n" +
//         "                            <p>Completed all company insurance renewals including property, Workers' Compensation, general liability, cargo, aviation and K & R documents.</p>\n" +
//         "                            <button>Add</button>\n" +
//         "                        </div>\n" +
//         "                        <div class=\"text_button\">\n" +
//         "                            <p>Led [type] team in delivery of [type] project requiring close cooperation among members to share information and develop solutions to meet broad array of deliverables.</p>\n" +
//         "                            <button>Add</button>\n" +
//         "                        </div>\n" +
//         "                        <div class=\"text_button\">\n" +
//         "                            <p>Prepared departmental contracts for attorney approval.</p>\n" +
//         "                            <button>Add</button>\n" +
//         "                        </div>\n" +
//         "                        <div class=\"text_button\">\n" +
//         "                            <p>Installed, tested and serviced alarm systems, ensuring that they functioned correctly.</p>\n" +
//         "                            <button>Add</button>\n" +
//         "                        </div>\n" +
//         "\n" +
//         "                    </div>\n" +
//         "\n" +
//         "\n" +
//         "                </div>\n" +
//         "                <div class=\"box2\">\n" +
//         "                    <div id=\"editor-container\">\n" +
//         "                  <textarea cols=\"80\" rows=\"100\" id=\"textarea"+index+"\">\n" +
//         "                 Type in your responsibilities, achievements and job details. Need help? Use the pre-written examples by clicking the Add button on the left side.\n" +
//         "                </textarea>\n" +
//         "\n" +
//         "                    </div>\n" +
//         "                </div>\n" +
//         "            </div>\n" +
//         "\n" +
//         "        </div>\n" +
//         "    </div>";
//
// }


// $("#clone_aparat").on("click",function () {
//     console.log(window);
//     window.globalIndex++;
//     const index = window.globalIndex;
//     $('.clon_here').append(cl1(index));
//     CKEDITOR.replace('textarea'+index, editor_config );
// })


// function cl2(){
//     return "<div class=\"start_header\">\n" +
//         "                <div class=\"header_inputs\">\n" +
//         "                    <h2>Tell us about your education</h2>\n" +
//         "                    <p>Tell us about any colleges, vocational programs, or training courses you took. Even if you didn’t finish, it’s important to list them.</p>\n" +
//         "\n" +
//         "                    <div class=\"job_area\">\n" +
//         "                        <form class=\"form_header\">\n" +
//         "                            <div class=\"name\">\n" +
//         "                                <div class=\"first_name\">\n" +
//         "                                    <label>School Name</label>\n" +
//         "                                    <input type=\"text\" placeholder=\"N 80 school\">\n" +
//         "                                </div>\n" +
//         "                                <div class=\"first_name\">\n" +
//         "                                    <label>School Location</label>\n" +
//         "                                    <input type=\"text\" placeholder=\"New York\">\n" +
//         "                                </div>\n" +
//         "                            </div>\n" +
//         "\n" +
//         "                            <div class=\"address_input\">\n" +
//         "                                <label>Degree</label>\n" +
//         "                                <select>\n" +
//         "                                    <option value=\"\">Select</option>\n" +
//         "                                    <option value=\"\">...</option>\n" +
//         "                                    <option value=\"\">.....</option>\n" +
//         "                                    <option value=\"\">......</option>\n" +
//         "                                </select>\n" +
//         "                            </div>\n" +
//         "                            <div class=\"graduation\">\n" +
//         "                                <div class=\"study\">\n" +
//         "                                    <label>Field Of Study</label>\n" +
//         "                                    <input type=\"text\" placeholder=\"\">\n" +
//         "                                </div>\n" +
//         "                                <div class=\"graduation_year\">\n" +
//         "                                    <label>Graduation Year</label>\n" +
//         "                                    <select>\n" +
//         "                                        <option value=\"\">1970</option>\n" +
//         "                                        <option value=\"\">1971</option>\n" +
//         "                                        <option value=\"\">1972</option>\n" +
//         "                                        <option value=\"\">1973</option>\n" +
//         "                                        <option value=\"\">1974</option>\n" +
//
//         "                                    </select>\n" +
//         "                                </div>\n" +
//         "                            </div>\n" +
//         "                        </form>\n" +
//         "                        <div class=\"add_description\">\n" +
//         "                            <p>\n" +
//         "                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 16 16\">\n" +
//         "                                    <defs><style>.a{fill:#18358a;}</style>\n" +
//         "                                    </defs><path class=\"a\" d=\"M16,7.619H8.381V0H7.619V7.619H0v.762H7.619V16h.762V8.381H16Z\"/></svg>\n" +
//         "                                Add a description</p>\n" +
//         "                        </div>\n" +
//         "                    </div>\n" +
//         "                </div>\n" +
//         "               \n" +
//         "            </div>\n" +
//         "            <div class=\"preview\" >\n" +
//         "                <p>\n" +
//         "                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\">\n" +
//         "                        <defs><style>.a{fill:#18358a;}</style></defs><g transform=\"translate(10.554 9.374)\">\n" +
//         "                        <path class=\"a\" d=\"M278.4,247.557a3.532,3.532,0,0,0-.376-4.549,3.641,3.641,0,0,0-5.009,0,3.536,3.536,0,0,0,4.549,5.384l3.024,2.953.835-.835Z\" transform=\"translate(-271.979 -242.01)\"/>\n" +
//         "                    </g><g transform=\"translate(10.603 0.346)\"><path class=\"a\" d=\"M272,8.789v4.416h4.377Z\" transform=\"translate(-272 -8.789)\"/>\n" +
//         "                    </g><path class=\"a\" d=\"M14.108,17.618A4.637,4.637,0,0,1,10.8,16.243a4.649,4.649,0,0,1,4.476-7.8V5.9H9.431V0H0V20H15.277V17.452A4.661,4.661,0,0,1,14.108,17.618ZM2.338,7.07H10.6V8.242H2.338Zm5.924,8.2H2.338V14.1H8.262Zm0-2.344H2.338V11.758H8.262Zm0-2.344H2.338V9.414H8.262Z\"/></svg>Preview Resume</p>\n" +
//         "            </div>";
// }
// $("#clone_aparat2").on("click",function () {
//     $('.clon_here').append(cl2());
// })



function cl3(){
    return "<div class=\"the_company websites\">\n" +
        "                <div class=\"url\">\n" +
        "                    <div class=\"url_top\">\n" +
        "                        <input type=\"text\" placeholder=\"Personal link\">\n" +
        "                        <input type=\"text\" placeholder=\"Personal link\">\n" +
        "                    </div>\n" +
        "                    <div class=\"url_bottom\">\n" +
        "                        <input type=\"text\" placeholder=\"Personal link\">\n" +
        "                        <input type=\"text\" placeholder=\"Personal link\">\n" +
        "                    </div>\n" +
        "                </div>\n" +
        "            </div>";
}
$("#clone_aparat3").on("click",function () {
    $('.clon_here').append(cl3());
})

$("#add_desc").on("click",function () {
    $("#add_textarea").toggleClass("hidden");
})
// CKEDITOR.replace('textarea1', editor_config );

$(document).on("click", ".text_button button", function () {
    var add = $(this).siblings("p").html();
    var editorId = $(this).parents('.box1').siblings('.box2').find('textarea').attr('id');
    CKEDITOR.instances[editorId].insertText(add);
});

$(document).ready(function () {
    // $(".text_button button").on("click",function () {
    //     var add = $(this).siblings("p").html();
    //     CKEDITOR.instances['textarea1'].insertText(add);
    // })



    $(".red_item").hover(
        function() {
        // console.log("s")
        $(this).addClass("red_active");
        $(this).children(".red_tools").addClass("red_tools_active");
    },function() {
            $(this).removeClass("red_active");
            $(this).children(".red_tools").removeClass("red_tools_active");
    })




    $(".tool2").on("mousedown",function () {
        $(this).parents("#sortable").sortable();
        $(this).parents("#sortable").disableSelection();
    })
    $(".tool3").on("click",function () {
        $(this).parents(".red_item").remove();
    })


    //select accordeon
    $(function() {
        var Accordion = function(el, multiple) {
            this.el = el || {};
            this.multiple = multiple || false;

            // Variables privadas
            var links = this.el.find('.link');
            // Evento
            links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
        }

        Accordion.prototype.dropdown = function(e) {
            var $el = e.data.el;
            $this = $(this),
                $next = $this.next();

            $next.slideToggle();
            $this.parent().toggleClass('open');

            if (!e.data.multiple) {
                $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
            };
        }

        var accordion = new Accordion($('#accordion'), false);
    });


//    range fonts
    $('#range-value').html($('#input-range').attr('value'));
    $('#input-range').on('input', function(){
        $('#range-value').html(this.value + "px");
    });
//
    $('#range-value2').html($('#input-range2').attr('value'));
    $('#input-range2').on('input', function(){
        $('#range-value2').html(this.value + "px");
    });
//
    $('#range-value3').html($('#input-range3').attr('value'));
    $('#input-range3').on('input', function(){
        $('#range-value3').html(this.value + "px");
    });
//
    $('#range-value4').html($('#input-range4').attr('value'));
    $('#input-range4').on('input', function(){
        $('#range-value4').html(this.value + "px");
    });
//
    $('#range-value5').html($('#input-range5').attr('value'));
    $('#input-range5').on('input', function(){
        $('#range-value5').html(this.value + "px");
    });
//
    $('#range-value6').html($('#input-range6').attr('value'));
    $('#input-range6').on('input', function(){
        $('#range-value6').html(this.value + "px");
    });
//
    $('#range-value7').html($('#input-range7').attr('value'));
    $('#input-range7').on('input', function(){
        $('#range-value7').html(this.value + "px");
    });
//
    $('#range-value8').html($('#input-range8').attr('value'));
    $('#input-range8').on('input', function(){
        $('#range-value8').html(this.value + "px");
    });
//
    $('#range-value1').html($('#input-range1').attr('value'));
    $('#input-range1').on('input', function(){
        $('#range-value1').html(this.value + "px");
    });

//    prewiew

    // $(document).on("click", ".preview-resume", function () {
    //     var mod = "<!-- Modal -->\n" +
    //         "<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">\n" +
    //         "  <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n" +
    //         "    <div class=\"modal-content\">\n" +
    //         "      <div class=\"modal-body\">\n" +
    //         "        <div class=\" cv_template example1\">\n" +
    //         "           <div>\n" +
    //         "                <div class=\"head1\">\n" +
    //         "                    <div class=\"name_res\">\n" +
    //         "                        <h2 id=\"first_text2\">James </h2>\n" +
    //         "                        <h2 id=\"last_name2\">Miller</h2>\n" +
    //         "                    </div>\n" +
    //         "\n" +
    //         "                   <p>\n" +
    //         "                       <span class=\"address\" id=\"address_person\">44 Shirley Ave,</span>\n" +
    //         "                       <span id=\"sity_sity\">New York</span>\n" +
    //         "                       <span id=\"state\">Arizona</span>\n" +
    //         "                       <span class=\"mail_zip\" id=\"zip_zip\">0465/55,</span>\n" +
    //         "                       <span class=\"telephone\" id=\"phone_phone\"> +465555555668,</span>\n" +
    //         "                       <span class=\"mail\" id=\"email_email\">jamask@mail.ru</span>\n" +
    //         "                   </p>\n" +
    //         "\n" +
    //         "                </div>\n" +
    //         "                <div class=\"resum\">\n" +
    //         "                   <div class=\"sec_resum\">\n" +
    //         "                       <h4>Professional Summary</h4>\n" +
    //         "                       <hr>\n" +
    //         "\n" +
    //         "\n" +
    //         "                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eum, facere, fugiat in maxime mollitia odio perferendis possimus provident quisquam reprehenderit sit. Et in laudantium magni odit suscipit totam vitae?</p>\n" +
    //         "\n" +
    //         "                   </div>\n" +
    //         "                   <div class=\"sec_resum\">\n" +
    //         "                       <h4>Employment history</h4>\n" +
    //         "                       <hr>\n" +
    //         "\n" +
    //         "                       <div class=\"resum_main\">\n" +
    //         "                           <div class=\"left_resum  \">\n" +
    //         "                               <p class=\"font-weight-bold\">It Technician</p>\n" +
    //         "                               <span>Oct 2015-apr 2016</span>\n" +
    //         "                               <p>Operate and maintain information systems</p>\n" +
    //         "                               <p>Facilitiang system utilization</p>\n" +
    //         "                           </div>\n" +
    //         "                           <div class=\"right_resum\">\n" +
    //         "                               <p>bingham</p>\n" +
    //         "                           </div>\n" +
    //         "                       </div>\n" +
    //         "\n" +
    //         "\n" +
    //         "                   </div>\n" +
    //         "                   <div class=\"sec_resum\">\n" +
    //         "                       <h4>Education</h4>\n" +
    //         "                       <hr>\n" +
    //         "\n" +
    //         "                       <div class=\"resum_main\">\n" +
    //         "                           <div class=\"left_resum  \">\n" +
    //         "                               <p class=\"font-weight-bold\">It Technician</p>\n" +
    //         "                               <span>Oct 2015-apr 2016</span>\n" +
    //         "                               <p>Operate and maintain information systems</p>\n" +
    //         "                               <p>Facilitiang system utilization</p>\n" +
    //         "                           </div>\n" +
    //         "                           <div class=\"right_resum\">\n" +
    //         "                               <p>bingham</p>\n" +
    //         "                           </div>\n" +
    //         "                       </div>\n" +
    //         "\n" +
    //         "                   </div>\n" +
    //         "                   <div class=\"sec_resum\">\n" +
    //         "                       <h4>Honors</h4>\n" +
    //         "                       <hr>\n" +
    //         "                       <div class=\"resum_main\">\n" +
    //         "                           <div class=\"left_resum  \">\n" +
    //         "                               <p class=\"font-weight-bold\">It Technician</p>\n" +
    //         "                               <span>Oct 2015-apr 2016</span>\n" +
    //         "                               <p>Operate and maintain information systems</p>\n" +
    //         "                               <p>Facilitiang system utilization</p>\n" +
    //         "                           </div>\n" +
    //         "                           <div class=\"right_resum\">\n" +
    //         "                               <p>bingham</p>\n" +
    //         "\n" +
    //         "                           </div>\n" +
    //         "                       </div>\n" +
    //         "\n" +
    //         "\n" +
    //         "                   </div>\n" +
    //         "\n" +
    //         "                </div>\n" +
    //         "\n" +
    //         "                </div>\n" +
    //         "           </div>" +
    //         "      </div>\n" +
    //         "    </div>\n" +
    //         "  </div>\n" +
    //         "</div>";
    //     $(this).parents(".preview").append(mod);
    //
    //
    //
    //
    // })
})
$(".str_button").on("click",function () {
    $(this).children(".fa-check").toggleClass("d-none");
    $(this).toggleClass("btn_tool_active")
})


// $( "#slider" ).slider({
//     value: 4,
//     min: 0,
//     max: 9,
//     step: 1
// })
//     .each(function() {
//
//         //
//         // Add labels to slider whose values
//         // are specified by min, max and whose
//         // step is set to 1
//         //
//
//         // Get the options for this slider
//         var opt = $(this).data().uiSlider.options;
//
//         // Get the number of possible values
//         var vals = opt.max - opt.min;
//
//         // Space out values
//         for (var i = 0; i <= vals; i++) {
//
//             var el = $('<label>'+(i+1)+'</label>').css('left',(i/vals*100)+'%');
//
//             $( "#slider" ).append(el);
//
//         }
//
//     });



