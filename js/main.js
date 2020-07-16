// ===== Scroll to Top ====
$('<a id="return-to-top" href="javascript:"><span class="glyphicon glyphicon-chevron-up"></span></a>').appendTo('body');
$(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});

$('#copy').click(function() {
    var element = $('#citationOutput');
    var temp = $("<input>");
    $("body").append(temp);
    var str = temp.val($.trim($(element).text())).select();
    document.execCommand("copy");
    temp.remove();
});
