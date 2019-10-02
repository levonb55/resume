var counter = 1;

//Adds Experience
$("#clone_aparat2").on("click",function () {
    var index = ++counter;
    $('.clon_here').append(addEducation(index));
    CKEDITOR.replace('textarea-' + index, editor_config);
});

//Deletes education
$(document).on('click', '.delete-education', function () {
    $(this).parents('.clon').hide('slow', function() { $(this).remove()});
});

//Toggles description
$(document).on("click", ".add_desc", function () {
    $(this).parents('.experience_area').find('.textarea_desc').toggle();
});

function addEducation(index) {
    return `
        <div class="clon">
            <div class="start_header">
                <div class="header_inputs">
                    <h2>Tell us about your education <span class="delete-education hand" title="Remove Experience"><i class="fas fa-times"></span></i></h2>
                    <p>Tell us about any colleges, vocational programs, or training courses you took. Even if you didn’t
                     finish, it’s important to list them.</p>

                    <div class="experience_area education_area">
                        <div class="form_header">
                            <div class="name">
                                <div class="first_name">
                                    <label>School Name</label>
                                    <input type="text" name="education${index}[school]">
                                    <span class="text-danger mb-2 error" id="education${index}_school"></span>
                                </div>
                                <div class="first_name">
                                    <label>School Location</label>
                                    <input type="text" name="education${index}[location]">
                                    <span class="text-danger mb-2 error" id="education${index}_location"></span>
                                </div>
                            </div>

                            <div class="address_input">
                                <label>Degree</label>
                                <input type="text" name="education${index}[degree]">
                                <span class="text-danger mb-2 error" id="education${index}_degree"></span>
                            </div>
                            <div class="graduation">
                                <div class="study">
                                    <label>Field Of Study</label>
                                    <input type="text" name="education${index}[study]">
                                    <span class="text-danger mb-2 error" id="education${index}_study"></span>
                                </div>                                
                                <div class="time_input">
                                    <div class="data_input">
                                        <label>Start Date</label>
                                        <input type="date" name="education${index}[start_date]">
                                        <span class="text-danger mb-2 error" id="education${index}_start_date"></span>
                                    </div>
                                    <div class="data_input">
                                        <label>End Date</label>
                                        <input type="date"  name="education${index}[end_date]" class="edu-end-date">
                                        <span class="text-danger mb-2 error" id="education${index}_end_date"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <label  for="present-${index}" class="containera Work_here">I currently study here
                            <input type="checkbox" class="edu-check" id="present-${index}">
                            <span class="checkmark"></span>
                        </label>
                                
                        <div class="add_description add_desc">
                            <p>
                                <span id="plus">+</span>
                                Add a description</p>
                        </div>
                        <div class="textarea_desc hidden" id="add_textarea">
                            <textarea id="textarea-${index}" cols="30" rows="10" name="education${index}[description]"></textarea>
                            <span class="text-danger mb-2 error" id="education${index}_description"></span>
                        </div>
                    </div>
                </div>
                <div class="tips">

                    <div class="dropdown show">
                        <div class="customer btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <img src="/assets/images/customer-service.png">
                        </div>
                        <div class="dropdown-menu dropdown-menu-right show">
                            <h4>TIPS</h4>
                            <ul>
                                <li>
                                    <p>Include up to 10 years of recent work experience,
                                        beginning with your current or most recent employer.</p>
                                </li>
                                <li>
                                    <p>Use bullets to list your major accomplishments and experience
                                        so employers can easily scan your resume.</p>
                                </li>
                                <li>
                                    <p>If you have relevant work experience from more than 10 years ago,
                                        we recommend adding a separate section called Previous Work Experience.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="preview-wrapper">                
                <div class="preview">
                    <p data-toggle="modal" data-target="#resume-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <defs><style>.a{fill:#18358a;}</style></defs><g transform="translate(10.554 9.374)">
                                <path class="a" d="M278.4,247.557a3.532,3.532,0,0,0-.376-4.549,3.641,3.641,0,0,0-5.009,0,3.536,3.536,0,0,0,4.549,5.384l3.024,2.953.835-.835Z" transform="translate(-271.979 -242.01)"/>
                            </g><g transform="translate(10.603 0.346)"><path class="a" d="M272,8.789v4.416h4.377Z" transform="translate(-272 -8.789)"/>
                            </g><path class="a" d="M14.108,17.618A4.637,4.637,0,0,1,10.8,16.243a4.649,4.649,0,0,1,4.476-7.8V5.9H9.431V0H0V20H15.277V17.452A4.661,4.661,0,0,1,14.108,17.618ZM2.338,7.07H10.6V8.242H2.338Zm5.924,8.2H2.338V14.1H8.262Zm0-2.344H2.338V11.758H8.262Zm0-2.344H2.338V9.414H8.262Z"/></svg>Preview Resume</p>
                </div>
            </div>         
        </div>
    `;
}

$('#education-form').on('submit', function (e) {
    e.preventDefault();

    //Updates ckeditors' content
    for ( instance in CKEDITOR.instances ) {
        CKEDITOR.instances[instance].updateElement();
    }

    let data = $(this).serialize();
    $(this).find(':submit').attr('disabled', true).addClass('disabled');

    $.ajax({
        method: 'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: appUrl + '/education',
        data: data
    })
    .then(() => {
        window.location.href = appUrl + '/education';
    })
    .catch(error => {
        $('.error').empty();
        let allErr = error.responseJSON.errors;

        for(data in allErr) {
            $.each(allErr[data], function(key,value) {
                $('#' + data + '_' + key).html(value);
            });
        }

        //Scrolls to the first error
        let firstError = allErr[Object.keys(allErr)[0]];
        $('#' + Object.getOwnPropertyNames(allErr)[0] + '_' + Object.getOwnPropertyNames(firstError)[0])[0]
            .scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
        $(this).find(':submit').attr('disabled', false).removeClass('disabled');
    });

});

//Reorders education
$(".reorder-education").on("mousedown",function () {
    $("#sortable").sortable({
        update: function () {
            let sortableItems = $('.ui-sortable-handle');
            let order = {};
            for(let i = 0; i < sortableItems.length; i++) {
                let sort = sortableItems.eq(i);
                order[i] = {
                    'order':i+1,
                    'id':sort.data("id")
                }
            }

            $.ajax({
                method: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: appUrl + 'education/reorder',
                data: {order}
            })
            .catch(() => {
                console.log('An error happened!');
            });
        }
    });
    $("#sortable").disableSelection();
});

//Disables education end date
$(document).on('click', '.edu-check', function () {
    $(this).parents('.education_area').find('.edu-end-date').attr('disabled', function(_, attr){ return !attr});
});