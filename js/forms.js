
function newsletterSignUp() {
    $(".name-input").removeClass("is-invalid");
    $(".email-input").removeClass("is-invalid");
    $(".help-block").remove();
    var formData = {
        name: $("#name").val(),
        mail: $("#mail").val(),
    };
    $.ajax({
        type: "POST",
        url: "Controller/Newsletter.php",
        data: formData
    }).done(function (data) {
        data = JSON.parse(data);
        if (!data.success) {
            if (data.errors.name) {
                $("#name").addClass("is-invalid");
                $("#name-input").append(
                    '<div class="help-block text-danger">' + data.errors.name + "</div>"
                );
            }

            if (data.errors.mail) {
                $("#mail").addClass("is-invalid");
                $("#email-input").append(
                    '<div class="help-block text-danger">' + data.errors.mail + "</div>"
                );
            }

        } else {
            document.getElementById("news-form").reset();
            $.toast({
                text: "You have subscribed to our newsletter.", // Text that is to be shown in the toast
                heading: 'Success', // Optional heading to be shown on the toast
                icon: 'success', // Type of toast icon
                showHideTransition: 'fade', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: 4000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
                textAlign: 'left',  // Text alignment i.e. left, right or center
                loader: true,  // Whether to show loader or not. True by default
                loaderBg: '#9EC600',  // Background color of the toast loader

            });

        }
    });
}


function sendEmail() {
    $(".name-input").removeClass("has-error");
    $("#subject").removeClass("has-error");
    $("#mail").removeClass("has-error");
    $("#message").removeClass("has-error");
    $(".help-block").remove();

    var formData = {
        name: $("#name").val(),
        subject: $("#subject").val(),
        mail: $("#mail").val(),
        message: $("#message").val(),
    };
    $.ajax({
        type: "POST",
        url: "Controller/ContactForm.php",
        data: formData
    }).done(function (data) {
        data = JSON.parse(data);
        if (!data.success) {
            if (data.errors.name) {
                $("#name").addClass("is-invalid");
                $(".name-input").append(
                    '<div class="help-block">' + data.errors.name + "</div>"
                );
            }

            if (data.errors.subject) {
                $("#subject").addClass("is-invalid");
                $(".subject-input").append(
                    '<div class="help-block">' + data.errors.subject + "</div>"
                );
            }

            if (data.errors.mail) {
                $("#mail").addClass("is-invalid");
                $("#mail-input").append(
                    '<div class="help-block">' + data.errors.mail + "</div>"
                );
            }

            if (data.errors.message) {
                $("#message").addClass("is-invalid");
                $("#message-input").append(
                    '<div class="help-block">' + data.errors.message + "</div>"
                );
            }

        } else {
            document.getElementById("form-cont").reset();
            $.toast({
                text: "Your email has been sent.", // Text that is to be shown in the toast
                heading: 'Success', // Optional heading to be shown on the toast
                icon: 'success', // Type of toast icon
                showHideTransition: 'fade', // fade, slide or plain
                allowToastClose: true, // Boolean value true or false
                hideAfter: 4000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
                stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
                position: 'bottom-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
                textAlign: 'left',  // Text alignment i.e. left, right or center
                loader: false,  // Whether to show loader or not. True by default
            });
        }
    });
}

function editUser() {
    $(".input").removeClass("is-invalid");
    $(".help-block").remove();
    var formData = {
        name: $("#input-name").val(),
        mail: $("#input-mail").val(),
        password: $("#input-pass").val(),
        passwordConfirm: $("#input-pass-check").val(),
        id: $("#id").val()
    };
    $.ajax({
        type: "POST",
        url: "Controller/UpdateProfile.php",
        data: formData
    }).done(function (data) {
        data = JSON.parse(data);
        if (!data.success) {
            if (data.errors.name) {
                $("#input-name").addClass("is-invalid");
                $(".name-div").append(
                    '<div class="help-block text-danger">' + data.errors.name + "</div>"
                );
            }

            if (data.errors.mail) {
                $("#input-mail").addClass("is-invalid");
                $(".mail-div").append(
                    '<div class="help-block text-danger">' + data.errors.mail + "</div>"
                );
            }

            if (data.errors.password) {
                $("#input-pass").addClass("is-invalid");
                $("#input-pass-check").addClass("is-invalid");
                $(".pass-div").append(
                    '<div class="help-block text-danger">' + data.errors.password + "</div>"
                );
            }

        } else {
            location.reload();
        }
    });

}