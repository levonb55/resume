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
    let url = 'https://api-embeddedbuilder.resume-now.com/api/v1/content/texttunercontent?user_uid=4cec606d-0c56-4f9d-8b90-b1fcf6d99726&sectionTypeCD=ACCM&productCD=RSM&Jobtitle='+selectedProf+'&searchItemType=jobTitle&documentID=cd41df88-04df-4b8d-86ba-d7184cb77ab8&cultureCD=en-US';

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