//Adds custom section
$('.add-custom-section').on('click', function (e) {
    e.preventDefault();
    let data = $(this).siblings('input');
    $.ajax({
        method: 'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: appUrl + '/custom-section/add',
        data: {'section': data.val()}
    })
    .then(customSection => {
        let section = `
            <div class="check">
                <label for="${customSection.title}" class="containera">${customSection.title}
                    <input type="checkbox" id="${customSection.title}" value="custom-section/${slugify(customSection.title)}" name="sections[]">
                    <span class="checkmark"></span>
                </label>
                <span class="remove-section" data-section="${customSection.id}"><i class="fas fa-times" title="Remove"></i></span>
            </div>
        `;

        $('.das_check').append(section);
        data.val('');
    })
    .catch(() => {
        console.log('An error happened!');
    });
});

//Removes custom section
$(document).on('click', '.remove-section', function () {
    $.ajax({
        method: 'DELETE',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: appUrl + '/custom-section/' + $(this).data('section')
    })
    .then(() => {
        $(this).parents('.check').remove();
    })
    .catch(() => {
        console.log('An error happened!');
    });
});


function slugify(string) {
    const a = 'àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìłḿñńǹňôöòóœøōõṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;'
    const b = 'aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnooooooooprrsssssttuuuuuuuuuwxyyzzz------'
    const p = new RegExp(a.split('').join('|'), 'g')

    return string.toString().toLowerCase()
        .replace(/\s+/g, '-') // Replace spaces with -
        .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
        .replace(/&/g, '-and-') // Replace & with 'and'
        .replace(/[^\w\-]+/g, '') // Remove all non-word characters
        .replace(/\-\-+/g, '-') // Replace multiple - with single -
        .replace(/^-+/, '') // Trim - from start of text
        .replace(/-+$/, '') // Trim - from end of text
}