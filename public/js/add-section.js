//Adds custom section on add-section page
$('.add-custom-section').on('click', function (e) {
    e.preventDefault();
    let data = $(this).siblings('input');

    let customSectionComponent = (customSection) => {
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
    };

    addCustomSection(data.val(), customSectionComponent);
});

//Adds custom section on resume review page
$('.resume-review-section').on('click', function (e) {
    e.preventDefault();
    let data = $(this).siblings('input');

    let customSectionComponent = (customSection) => {
        let section = `
            <li>
                <a href="${appUrl}/custom-section/${slugify(customSection.title)}">${customSection.title}</a>
                <span class="resume-review-section-remove" data-section="${customSection.id}"><i class="fas fa-times" title="Remove"></i></span>            
            </li>
        `;

        $('.credentials-list').append(section);
        data.val('');
    };

    addCustomSection(data.val(), customSectionComponent);
});


//Removes custom section on add-section page
$(document).on('click', '.remove-section', function () {
    let self = $(this);
    removeCustomSection($(this).data('section'), function () {
        self.parents('.check').remove();
    });
});

//Removes custom section on add-section page
$(document).on('click', '.resume-review-section-remove', function () {
    let self = $(this);
    removeCustomSection($(this).data('section'), function () {
        self.parents('li').remove();
    });
});

function addCustomSection(val, component) {
    if(!val) {return;}

    $.ajax({
        method: 'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: appUrl + '/custom-section/add',
        data: {'section': val}
    })
    .then(customSection => {
        component(customSection);
    })
    .catch(() => {
        console.log('An error happened!');
    });
}

function removeCustomSection(sectionId, section) {
    $.ajax({
        method: 'DELETE',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: appUrl + '/custom-section/' + sectionId
    })
    .then(() => {
        section();
    })
    .catch(() => {
        console.log('An error happened!');
    });
}

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