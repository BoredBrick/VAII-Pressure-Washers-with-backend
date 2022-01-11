function newsletterSignUp() {
    $(".name-input").removeClass("has-error");
    $(".email-input").removeClass("has-error");
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
                $(".name-input").addClass("has-error");
                $(".name-input").append(
                    '<div class="help-block">' + data.errors.name + "</div>"
                );
            }

            if (data.errors.mail) {
                $(".email-input").addClass("has-error");
                $(".email-input").append(
                    '<div class="help-block">' + data.errors.mail + "</div>"
                );
            }

        } else {
            $("form").html(
                '<div class="alert alert-success">' + data.message + "</div>"
            );
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
                $(".name-input").addClass("has-error");
                $(".name-input").append(
                    '<div class="help-block">' + data.errors.name + "</div>"
                );
            }

            if (data.errors.subject) {
                $(".subject-input").addClass("has-error");
                $(".subject-input").append(
                    '<div class="help-block">' + data.errors.subject + "</div>"
                );
            }

            if (data.errors.mail) {
                $(".mail-input").addClass("has-error");
                $(".mail-input").append(
                    '<div class="help-block">' + data.errors.mail + "</div>"
                );
            }

            if (data.errors.message) {
                $(".message-input").addClass("has-error");
                $(".message-input").append(
                    '<div class="help-block">' + data.errors.message + "</div>"
                );
            }

        } else {
            $("form").html(
                '<div class="alert alert-success">' + data.message + "</div>"
            );
        }
    });
}