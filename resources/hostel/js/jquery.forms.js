jQuery(document).ready(function() {
    // Reservation Form
    var reservationform = $('#reservationform');
    var reservationMessages = $('#message');
    $(reservationform).submit(function(e) {
        $(reservationMessages).slideUp(750);
        $(reservationMessages).hide();
        e.preventDefault();
        var formData = $(reservationform).serialize();
        var action = $(this).attr('action');
        $.post(action, $(reservationform).serialize(),
            function(data) {
                if (data.match('success') != null) $('#reservationform .form-group, #reservationform .btn').slideUp('slow');
                if (data.match('success') != null) $('#email').val('');
            }
        ).done(function(response) {
            $(reservationMessages).html(response).slideDown(400);
        })
    });
    // Contact Form
    var contactform = $('#contactform');
    var contactMessages = $('#message');
    $(contactform).submit(function(e) {
        $(contactMessages).slideUp(750);
        $(contactMessages).hide();
        e.preventDefault();
        var formData = $(contactform).serialize();
        var action = $(this).attr('action');
        $.post(action, $(contactform).serialize(),
            function(data) {
                if (data.match('success') != null) $('#contactform .form-group, #contactform .btn').slideUp('slow');
                if (data.match('success') != null) $('#email').val('');
            }
        ).done(function(response) {
            $(contactMessages).html(response).slideDown(400);
        })
    });
});