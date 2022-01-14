function register() {
    $(".input").removeClass("is-invalid");
    $(".help-block").remove();
    var formData = {
        name: $("#username").val(),
        password: $("#password").val(),
        passwordConfirm:$("#passwordConfirm").val(),
        mail: $("#email").val(),
    };
    $.ajax({
        type: "POST",
        url: "Controller/Register.php",
        data: formData
    }).done(function (data) {
        data = JSON.parse(data);
        if (!data.success) {
            if (data.errors.name) {
                $("#username").addClass("is-invalid");
                $("#name-input").append(
                    '<div class="help-block text-danger">' + data.errors.name + "</div>"
                );
            }

            if (data.errors.mail) {
                $("#email").addClass("is-invalid");
                $("#mail-input").append(
                    '<div class="help-block text-danger">' + data.errors.mail + "</div>"
                );
            }

            if(data.errors.password) {
                $(".password").addClass("is-invalid");
                $("#pass-check-input").append(
                    '<div class="help-block text-danger">' + data.errors.password + "</div>"
                );
            }

        } else {
            alert("You have successfully registered");
            document.getElementById("reg-form").reset();
            $("#modalFormReg").modal("hide");

        }
    });
}