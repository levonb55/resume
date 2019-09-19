//Adds custom section
$('.add-custom-section').on('click', function (e) {
    e.preventDefault();
    let data = $(this).siblings('input');
    $.ajax({
        method: 'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: appUrl + '/custom-section',
        data: {'section': data.val()}
    })
    .then(customSection => {
        let section = `
            <div class="check">
                <label for="${customSection.title}" class="containera">${customSection.title}
                    <input type="checkbox" id="${customSection.title}" value="${customSection.title}" name="sections[]">
                    <span class="checkmark"></span>
                </label>
                <span class="remove-section" data-section="${customSection.id}"><i class="fas fa-times"></i></span>
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