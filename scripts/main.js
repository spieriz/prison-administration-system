$(function() {
    $(".table_container").niceScroll({
        cursorcolor:	"rgba(25, 44, 69, 0.5)",
        cursorwidth:	"4px",
        cursorborder: 	"1px solid rgba(0, 0, 0, 0.5)",
        cursorborderradius: "4px"
    });
});


function showPopup(success){
    if (success === true) {
        $('#message_inner > span').text('Dodano pracownika');
        $('#message_inner').attr('style', 'background: linear-gradient(45deg, rgba(16, 69, 30, 0.5), rgba(108, 192, 64, 0.5))');
    } else {
        $('#message_inner > span').text('Błędne dane pracownika');
        $('#message_inner').attr('style', 'background: linear-gradient(45deg, rgba(69, 2, 13, 0.5), rgba(192, 91, 77, 0.5))');
    }

    $("#message_box").animate({
        opacity: '1',
    });
    setTimeout(function () {
        $("#message_box").animate({
            opacity: '0',
        });
    }, 2000);
}