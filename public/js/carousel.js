window.globalIndex = 2;
$('#owl1').owlCarousel({
    items: 3,
    loop: true,
    margin: 10,
    dots: true,
    center: true,
    nav: false,
    mouseDrag: false,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        }
    }
});
// $('#owl6').owlCarousel({
//     items: 3,
//     loop: true,
//     margin: 10,
//     dots: false,
//     center: true,
//     nav: true,
//     navText: [
//         '<img src="../assets/images/left-arrow.png">',
//         '<img src="../assets/images/right-arrow.png">'
//
//     ],
//     navContainer: '.main-content .custom-nav',
//     mouseDrag: false,
//     responsiveClass: true,
//     responsive: {
//         0: {
//             items: 1,
//         },
//         600: {
//             items: 2,
//         },
//         1000: {
//             items: 3,
//         }
//     }
// });
$('#owl2').owlCarousel({
    startPosition: 0,
    margin: 20,
    items: 1,
    loop: true,
    autoplay: false,
    pagination: true,
    dots: false,
    nav: true,
    responsiveClass: true,
    mouseDrag: false,

});
$('#owl3').owlCarousel({
    startPosition: 0,
    margin: 20,
    items: 1,
    loop: true,
    autoplay: false,
    pagination: true,
    dots: false,
    nav: true,
    responsiveClass: true,
    mouseDrag: false,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        }
    }

});

function img() {
    var test1 = $("#testi1");
    var test2 = $("#testi2");
    var test3 = $("#testi3");

    var array = [test1, test2, test3];

    $(".owl-next").on("click", function () {
        // console.log(array);
        var last = array.pop();
        array.unshift(last);
        $(".testi_img").remove();
        $(".testi_div").append(array);


    });
    $(".owl-prev").on("click", function () {
        var first = array.shift();
        array.push(first);
        $(".testi_img").remove();
        $(".testi_div").append(array);


    })
}

img();
