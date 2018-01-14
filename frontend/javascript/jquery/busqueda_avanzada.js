$(document).ready(function() {
    $("section").find("p").first().css({ color: "red" });
    $("section").find("p").eq(1).css({ color: "blue" });
    $("section").find("li").last().css({ color: "red" });
    $("section").find("li").last().prev().fadeOut();
});
