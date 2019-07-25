var editor_config = {
    toolbar: [
        {name: 'basicstyles', items: ['Bold','Italic','Underline','Strike','-','RemoveFormat']},
        {name: 'format', items: ['Format']},
        {name: 'paragraph', items: ['Indent','Outdent','-','BulletedList','NumberedList']},
        {name: 'link', items: ['Link','Unlink']},
        {name: 'undo', items: ['Undo','Redo']}
    ],

};

$("#clone_aparat").on("click", function () {
    window.globalIndex++;
    const index = window.globalIndex;
    $('.clon_here').append(cl1(index));
    CKEDITOR.replace('textarea' + index, editor_config);
});

$("#add_desc").on("click", function () {
    $("#add_textarea").toggleClass("hidden");
});
CKEDITOR.replace('textarea1', editor_config);

$(document).on("click", ".text_button button", function () {
    var add = $(this).siblings("p").html();
    CKEDITOR.instances['textarea1'].insertText(add);
});