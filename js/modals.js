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
            document.getElementById("reg-form").reset();
            $("#modalFormReg").modal("hide");
            window.reload();
        }
    });
}

function login() {
    $(".input").removeClass("is-invalid");
    $(".help-block").remove();
    var formData = {
        name: $("#usernameLogin").val(),
        password: $("#passwordLogin").val(),
    };
    $.ajax({
        type: "POST",
        url: "Controller/Login.php",
        data: formData
    }).done(function (data) {
        data = JSON.parse(data);
        if (!data.success) {
            if (data.errors.name) {
                $("#usernameLogin").addClass("is-invalid");
                $("#login-name-input").append(
                    '<div class="help-block text-danger">' + data.errors.name + "</div>"
                );
            }

            if(data.errors.password) {
                $("#passwordLogin").addClass("is-invalid");
                $("#login-pass-input").append(
                    '<div class="help-block text-danger">' + data.errors.password + "</div>"
                );
            }

        } else {
            document.getElementById("log-form").reset();
            $("#modalFormLogin").modal("hide");
            location.reload();
        }
    });
}

function unsubscribe() {
    $("#unsub-mail").removeClass("is-invalid");
    $(".help-block").remove();
    var formData = {
        mail: $("#unsub-mail").val(),
    };
    $.ajax({
        type: "POST",
        url: "Controller/Unsubscribe.php",
        data: formData
    }).done(function (data) {
        data = JSON.parse(data);
        if (!data.success) {
            if (data.errors.mail) {
                $("#unsub-mail").addClass("is-invalid");
                $("#input-mail").append(
                    '<div class="help-block text-danger">' + data.errors.mail + "</div>"
                );
            }

        } else {
            document.getElementById("unsub-form").reset();
            $("#unsub").modal("hide");
            $.toast({
                text: "You have unsubscribed from newsletter.", // Text that is to be shown in the toast
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

function deleteUser() {
    $(".input").removeClass("is-invalid");
    $(".help-block").remove();
    var formData = {
        password: $("#del-pass").val(),
        id: $("#id").val()
    };
    $.ajax({
        type: "POST",
        url: "Controller/DeleteProfile.php",
        data: formData
    }).done(function (data) {
        data = JSON.parse(data);
        if (!data.success) {
            if (data.errors.password) {
                $("#del-pass").addClass("is-invalid");
                $("#del-pass-input").append(
                    '<div class="help-block text-danger">' + data.errors.password + "</div>"
                );
            }
        } else {
            window.location = "index.php";

        }
    });
}