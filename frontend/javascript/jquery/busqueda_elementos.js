$(document).ready(function() {
    console.log("Listo");

    $("section > p").fadeOut(1000);

    $("aside > ul > li:first").css("color", "red");

    $("aside > ul > li").slideToggle();

    $("section > ul > li:last").css({
        color: "blue",
        border: "1px solid red"
    });
});
