//Brings up professions
$('.job-search').on('keyup', function () {
    let inputVal = $(this).val();
    if(!inputVal) {return;}

    if(item = sessionStorage.getItem('job-' + inputVal)) {
        $(this).autocomplete({
            source: outputHintedJobs(JSON.parse(item)),
            select: function (event, ui) {
                getSkills(ui.item.value);
            }
        });
    } else {
        let url = 'https://api-embeddedbuilder.resume-now.com/api/v1/content/jobtitleorindustry?jobTitle=' + inputVal + '&cultureCd=en-US';

        $.get(url)
            .then(jobList => {
                $(this).autocomplete({
                    source: outputHintedJobs(jobList),
                    select: function (event, ui) {
                        getSkills(ui.item.value);
                    }
                });

                sessionStorage.setItem('job-' + inputVal, JSON.stringify(jobList));
            })
            .catch(() => {
                console.log('An error happened!');
            });
    }
});

function outputHintedJobs(jobList) {
    let result = jobList.map(job => {
        return job['title'];
    });

    return result;
}

//Suggests skills based on the selected job
function getSkills(selectedProf) {
    let url = 'https://api-embeddedbuilder.resume-now.com/api/v1/content/texttunercontent?user_uid=632545cb-54e6-458c-9828-6269f9e9cc87&sectionTypeCD=SUMM&productCD=RSM&Jobtitle='+selectedProf+'&searchItemType=jobTitle&documentID=85cdacae-8b73-45db-9782-44657fcf7146&cultureCD=en-US';

    $.get(url)
        .then(response => {
            let result = response.result.map(data => {
                return `
                    <div class="text_button">
                        <p>${data.text.replace(/(<([^>]+)>)/ig,"")}</p>
                        <button>Add</button>
                    </div>
                `;
            });

            $('.add_text').html(result);
        });
}