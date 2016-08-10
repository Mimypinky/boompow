$(document).ready(function () {
    $("#small").click(function (event) {
        event.preventDefault();
        $("h1").animate({"font-size": "24pt"});
        $("h2").animate({"font-size": "22pt"});
        $("h3").animate({"font-size": "20pt"});
        $("h4").animate({"font-size": "18pt"});
        $("h5").animate({"font-size": "16pt"});
        $("p").animate({"font-size": "12pt"});
    });

    $("#medium").click(function (event) {
        event.preventDefault();
        $("h1").animate({"font-size": "26pt"});
        $("h2").animate({"font-size": "24pt"});
        $("h3").animate({"font-size": "22pt"});
        $("h4").animate({"font-size": "20pt"});
        $("h5").animate({"font-size": "18pt"});
        $("p").animate({"font-size": "14pt"});
    });

    $("#large").click(function (event) {
        event.preventDefault();
        $("h1").animate({"font-size": "28pt"});
        $("h2").animate({"font-size": "26pt"});
        $("h3").animate({"font-size": "24pt"});
        $("h4").animate({"font-size": "22pt"});
        $("h5").animate({"font-size": "20pt"});
        $("p").animate({"font-size": "16pt"});
    });

    $("a").click(function () {
        $("a").removeClass("selected");
        $(this).addClass("selected");
    });
});
            
        