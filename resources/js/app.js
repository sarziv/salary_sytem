require('./bootstrap');

$(document).ready(function () {
    //flash message
    $(".flash-message").show().delay(5000).fadeOut();

    $('button').click(function() {
        this.form.submit();
        $(this).prop('disabled',true);
    });
    $('#submitbutton').click( function () {
        $('.loading').show();
    })

});
