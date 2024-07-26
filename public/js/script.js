document.addEventListener("DOMContentLoaded", function () {
    new Splide(".caraousel-products", {
        type: "loop",
        perPage: 3,
        focus: "center",
        breakpoints: {
            768: {
                perPage: 1,
                focus: "left",
            },
        },
    }).mount();

    new Splide(".caraousel-review", {
        type: "loop",
        perPage: 3,
        focus: "left",
        breakpoints: {
            768: {
                perPage: 1,
                focus: "left",
            },
        },
    }).mount();
});

window.addEventListener("DOMContentLoaded", function () {
    var today = new Date().toISOString().split("T")[0];
    document.getElementById("date_book").setAttribute("min", today);
});

$(document).ready(function() {
    $("input[type='radio']").change(function() {
        let selectedValue = $(this).val();
        const reviewId = $(this).attr('name').split('_')[1];

        $(`input[type='radio'][name='rate_${reviewId}']`).each(function() {
            const starIcon = $(this).next("label").find("i.fa-solid");
            starIcon.removeClass("active");
        });

        $(`input[type='radio'][name='rate_${reviewId}']`).each(function() {
            const starValue = $(this).val();
            const starIcon = $(this).next("label").find("i.fa-solid");

            if (starValue <= selectedValue) {
                starIcon.addClass("active");
            }
        });
    });

    $("input[type='radio']:checked").each(function() {
        let selectedValue = $(this).val();
        const reviewId = $(this).attr('name').split('_')[1];

        $(`input[type='radio'][name='rate_${reviewId}']`).each(function() {
            const starValue = $(this).val();
            const starIcon = $(this).next("label").find("i.fa-solid");

            if (starValue <= selectedValue) {
                starIcon.addClass("active");
            } else {
                starIcon.removeClass("active");
            }
        });
    });
});
