var editor_config = {
    toolbar: [
        {name: 'basicstyles', items: ['Bold','Italic','Underline','Strike','-','RemoveFormat']},
        {name: 'format', items: ['Format']},
        {name: 'paragraph', items: ['Indent','Outdent','-','BulletedList','NumberedList']},
        {name: 'link', items: ['Link','Unlink']},
        {name: 'undo', items: ['Undo','Redo']}
    ],

};

$("#add_desc").on("click", function () {
    $("#add_textarea").toggleClass("hidden");
});
CKEDITOR.replace('textarea-1', editor_config);

$(document).on("click", ".text_button button", function () {
    var add = $(this).siblings("p").html();
    var editorId = $(this).parents('.box1').siblings('.box2').find('textarea').attr('id');
    // CKEDITOR.instances['textarea-1'].insertText(add);
    CKEDITOR.instances[editorId].insertText(add);
});

var counter = 2;
$("#clone_aparat").on("click", function () {
    var index = counter++;
    $('.clon_here').append(addExperience(index));
    CKEDITOR.replace('textarea-' + index, editor_config);
});

function addExperience(index) {
    return `
    <div class="clon">
        <div class="start_header">
            <div class="header_inputs">
                <h2>Let's work on your experience</h2>
                <p>Start with your most recent job first. You can also add volunteer work, internships, or extracurricular
                    activities.</p>
    
                <div class="job_area">
                    <form class="form_header">
                        <div class="name">
                            <div class="first_name">
                                <label>Job Title</label>
                                <input type="text" placeholder="UI/UX design">
                            </div>
                            <div class="first_name">
                                <label>Employer</label>
                                <input type="text" placeholder="Web Projects">
                            </div>
                        </div>
                        <div class="name">
                            <div class="first_name">
                                <label>City</label>
                                <input type="text" placeholder="Yerevan">
                            </div>
                            <div class="first_name">
                                <label>State</label>
                                <input type="text" placeholder="AR">
                            </div>
                        </div>
                        <div class="time_input">
                            <div class="data_input">
                                <label>Start Date</label>
                                <input type="text" placeholder="">
                            </div>
                            <div class="data_input">
                                <label>End Date</label>
                                <input type="text" placeholder="">
                            </div>
                        </div>
                    </form>
    
                    <label for="ch1" class="containera">I currently work here
                        <input type="checkbox" id="ch1">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
    
            <div class="tips">
                <div class="dropdown show">
                    <div class="customer btn dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <img src="assets/images/customer-service.png">
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
                <p class="preview-resume" data-toggle="modal" data-target="#exampleModalCenter">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <defs><style>.a{fill:#18358a;}</style></defs><g transform="translate(10.554 9.374)">
                            <path class="a" d="M278.4,247.557a3.532,3.532,0,0,0-.376-4.549,3.641,3.641,0,0,0-5.009,0,3.536,3.536,0,0,0,4.549,5.384l3.024,2.953.835-.835Z" transform="translate(-271.979 -242.01)"/>
                        </g><g transform="translate(10.603 0.346)"><path class="a" d="M272,8.789v4.416h4.377Z" transform="translate(-272 -8.789)"/>
                        </g><path class="a" d="M14.108,17.618A4.637,4.637,0,0,1,10.8,16.243a4.649,4.649,0,0,1,4.476-7.8V5.9H9.431V0H0V20H15.277V17.452A4.661,4.661,0,0,1,14.108,17.618ZM2.338,7.07H10.6V8.242H2.338Zm5.924,8.2H2.338V14.1H8.262Zm0-2.344H2.338V11.758H8.262Zm0-2.344H2.338V9.414H8.262Z"/></svg>Preview Resume</p>
            </div>
        </div>
    
        <div class="the_company">
            <h3>Tell us what you did and how you helped the company</h3>
            <div class="search_job">
                <div class="box1">
                    <form class="job">
                        <input type="search" placeholder="Search by job title, industry or kayword">
                        <span class="fas fa-search"></span>
                    </form>
                    <div class="add_text">
                        <div class="text_button">
                            <p>Completed all company insurance renewals including property, Workers' Compensation, general liability, cargo, aviation and K & R documents.</p>
                            <button>Add</button>
                        </div>
                        <div class="text_button">
                            <p>Led [type] team in delivery of [type] project requiring close cooperation among members to share information and develop solutions to meet broad array of deliverables.</p>
                            <button>Add</button>
                        </div>
                        <div class="text_button">
                            <p>Prepared departmental contracts for attorney approval.</p>
                            <button>Add</button>
                        </div>
                        <div class="text_button">
                            <p>Installed, tested and serviced alarm systems, ensuring that they functioned correctly.</p>
                            <button>Add</button>
                        </div>
                        <div class="text_button">
                            <p>Completed all company insurance renewals including property, Workers' Compensation, general liability, cargo, aviation and K & R documents.</p>
                            <button>Add</button>
                        </div>
                    </div>
                </div>
                <div class="box2">
                    <div id="editor-container">
                        <textarea cols="80" rows="100" id="textarea-${index}">text</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    `;
}
