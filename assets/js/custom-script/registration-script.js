var modal = $("#modalRegistration");

$(document).ready(function () {
    createAccount();
    userLogin();
});

function createAccount() {
    $(document).on("submit", "#signupAccount", function (event) {
        event.preventDefault();
        var form = $(this);

        var email = form.find("#email").val();
        var password = form.find("#password").val();
        var confirmPassword = form.find("#confirmPassword").val();
        var errorMessage = "";

        form.find(".success-message, .error-message").remove();

        $.ajax({
            method: "POST",
            url: "phpscripts/user-signup.php",
            data: { email, password, confirmPassword },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    var successMessage = $(
                        "<div class='alert alert-success p-2 text-center m-0 mt-4 success-message'>Account created successfully</div>"
                    );
                    form.append(successMessage);
                    $("button, input").prop("disabled", true);
                    $("a")
                        .addClass("disabled")
                        .on("click", function (e) {
                            e.preventDefault();
                        });

                    successMessage.fadeOut(3000, function () {
                        location.reload();
                    });
                } else {
                    form.append(
                        "<div class='alert alert-danger p-2 text-center m-0 mt-4 error-message'>" +
                            response.message +
                            "</div>"
                    );
                    $(errorMessage).fadeOut(4000);
                }
            },
            error: function (xhr, status, error) {
                var errorMessage = $(
                    "<div class='alert alert-danger p-2 text-center m-0 mt-4 error-message'>An error occurred. Please try again later.</div>"
                );
                form.append(errorMessage);
                $(errorMessage).fadeOut(4000);
                console.log("AJAX Error:", error);
            },
        });
    });
}

function userLogin() {
    $(document).on("submit", "#loginAccount", function (event) {
        event.preventDefault();
        var form = $(this);
        var userEmail = form.find("#userEmail").val();
        var userPassword = form.find("#userPassword").val();
        form.find(".success-message, .error-message").remove();

        $.ajax({
            method: "POST",
            url: "phpscripts/user-login.php",
            data: { userEmail, userPassword },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    var successMessage = $(
                        "<div class='alert alert-success p-2 text-center m-0 mt-4 success-message'>Login Successfully!</div>"
                    );

                    form.append(successMessage);
                    $("button, input").prop("disabled", true);
                    $("a")
                        .addClass("disabled")
                        .on("click", function (e) {
                            e.preventDefault();
                        });

                    if (response.user_type === "user") {
                        successMessage.fadeOut(3000, function () {
                            window.location.href = "homepage.php";
                        });
                    } else if (response.user_type === "admin") {
                        successMessage.fadeOut(3000, function () {
                            window.location.href = "admin.php";
                        });
                    } else {
                        var errorMessage = $(
                            "<div class='alert alert-danger p-2 text-center m-0 mt-4 error-message'>Account not found</div>"
                        );
                        form.append(errorMessage);
                        errorMessage.fadeOut(3500);
                    }
                } else {
                    var errorMessage = $(
                        "<div class='alert alert-danger p-2 text-center m-0 mt-4 error-message'>" +
                            response.message +
                            "</div>"
                    );

                    form.append(errorMessage);
                    $(errorMessage).fadeOut(4000);
                }
            },
            error: function (xhr, status, error) {
                var errorMessage = $(
                    "<div class='alert alert-danger p-2 text-center m-0 mt-4 error-message'>An error occurred. Please try again later.</div>"
                );
                form.append(errorMessage);
                $(errorMessage).fadeOut(4000);
                console.log("AJAX Error:", error);
            },
        });
    });
}
