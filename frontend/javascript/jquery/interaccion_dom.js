$(document).ready(function() {
    $("aside").find("li").eq(5).on("click", function() {
        $("section").children("p").css({ color: "red" });
    });

    $("body").find("p").on("click", function() {
        $(this).css({ color: "blue" });
    });

    $("section").on("click", "li", function(evento) {
        evento.preventDefault();
        console.log("Click");
    });

    $("aside").find("li").filter(":even").css({ color: "red" });
});
