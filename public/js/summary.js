$(document).on("click", ".text_button button", function () {
    var add = $(this).siblings("p").html();
    var editorId = $(this).parents('.box1').siblings('.box2').find('textarea').attr('id');
    CKEDITOR.instances[editorId].insertText(add);
});