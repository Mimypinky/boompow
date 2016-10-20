$(document).ready(function () {
    $("#normal").click(function (event) {
        event.preventDefault();
        $("h1").animate({"font-size": "26pt"});
        $("h2").animate({"font-size": "24pt"});
        $("h3").animate({"font-size": "22pt"});
        $("h4").animate({"font-size": "20pt"});
        $("h5").animate({"font-size": "18pt"});
        $("thead").animate({"font-size": "16pt"});
        $("p").animate({"font-size": "15pt"});
        $("a").animate({"font-size": "15pt"});
        $("td").animate({"font-size": "15pt"});
    });

    $("#medium").click(function (event) {
        event.preventDefault();
        $("h1").animate({"font-size": "28pt"});
        $("h2").animate({"font-size": "26pt"});
        $("h3").animate({"font-size": "24pt"});
        $("h4").animate({"font-size": "22pt"});
        $("h5").animate({"font-size": "20pt"});
        $("p").animate({"font-size": "18pt","line-height": "30"});
        $("thead").animate({"font-size": "19pt"});
        $("a").animate({"font-size": "18pt"});
        $("td").animate({"font-size": "18pt"});
    });

    $("#large").click(function (event) {
        event.preventDefault();
        $("h1").animate({"font-size": "30pt"});
        $("h2").animate({"font-size": "28pt"});
        $("h3").animate({"font-size": "26pt"});
        $("h4").animate({"font-size": "24pt"});
        $("h5").animate({"font-size": "22pt"});
        $("p").animate({"font-size": "20pt","line-height": "35"});
        $("thead").animate({"font-size": "21pt"});
        $("a").animate({"font-size": "20pt"});
        $("td").animate({"font-size": "20pt"});
    });

    $("a").click(function () {
        $("a").removeClass("selected");
        $(this).addClass("selected");
    });
});
