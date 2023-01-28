// scroll func 

$(".nav-link").on("click", function(e) {
    e.preventDefault()

    var linkHref = $(this).attr("href");
    $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 94,
        },
        1500
    );
    return false;
})


$(".btn-play").on("click", function(e) {
    e.preventDefault()

    var linkHref = $(this).attr("href");
    $("html, body").animate({
            scrollTop: $(linkHref).offset().top - 500,
        },
        1500
    );
    return false;
})


// end scroll func 

window.onscroll = function() {
    scrollFunction()
    scrollTopIcon()
};

function scrollFunction() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
        document.getElementById("navbar").style.boxShadow = "0 .125rem .25rem rgba(0,0,0,0.08)";
    } else {
        document.getElementById("navbar").style.boxShadow = "none";
    }
}

function scrollTopIcon() {
    if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 180) {
        document.getElementById("top-icon").style.bottom = "40px";
    } else {
        document.getElementById("top-icon").style.bottom = "-40px";
    }
}