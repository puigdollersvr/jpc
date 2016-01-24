/**
 * Created by ricard on 7/1/16.
 */
$(window).load(function () {

    //On click yes
    $("#yes").click(function () {
        //Make Answer Visible
        $("#answer").addClass("visible");
        //Hide yes button
        $("#yes").css("visibility","hidden");
        //Change circle-cross to circle-next and it's id.
        $("#no").attr("id","next");
        $("#no-icon").removeClass("circle-cross icon-cancel-1");
        $("#no-icon").addClass("circle-next icon-angle-right-1 desactivated-button");

        //After 500ms load answer and reanswer
        setTimeout(function () {
            $("#reanswer").addClass("visible");
            setTimeout(function () {
                setTimeout(function () {
                    $("#reanswer").text(" . ");
                    setTimeout(function () {
                        $("#reanswer").text(" .. ");
                        setTimeout(function () {
                            $("#reanswer").text(" ... ");
                                setTimeout(function () {
                                    $("#reanswer").text("Gracias Marc, hasta otra.");
                                    $("#no-icon").removeClass("desactivated-button");
                            }, 250);
                        }, 250);
                    }, 250);
                }, 250);
            }, 250);
        }, 500);
    });

    $("#no").click(function () {
        //No action
    });
});
