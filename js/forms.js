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
