$(function () {
    'use strict';

    $(document).on('click', '.password-indicator', function () {
        var PASSWORD_FIELD = $(this).closest('.password-wrapper').find('input');
        $(this).toggleClass('fa-eye-slash');
        var attrType = PASSWORD_FIELD.attr('type');
        if(attrType == 'password') {
            PASSWORD_FIELD.attr('type', 'text');
        } else {
            PASSWORD_FIELD.attr('type', 'password');
        }
    })

    $('.login-popover').popover({
        trigger: 'hover',
        container: 'body'
    })

    $("#commonForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
            },
            password: {
                required: true,
            }
        },
        messages: {
            name: {
                required: "Please enter your name",
                minlength: "Your name must consist of at least 2 characters"
            },
            email: {
                required: "Please enter your email address",
            },
            password: {
                required: "Please enter your password",
            }
        }
    });
})
