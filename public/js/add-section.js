$('#add-section').on('click', function () {
    let sections = [];
    $.each($("input[name='section']:checked"), function(){
        sections.push($(this).val());
    });

    sessionStorage.setItem("add-sections", sections);
    window.location.href = appUrl + '/' + sessionStorage.getItem("add-sections").split(',')[0];
});