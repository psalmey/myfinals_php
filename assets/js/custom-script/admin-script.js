$(document).ready(function () {
    displayPersonalInformation();
    updatePersonalInformation();

    displayEducation();
    updateEductaion();
    addEductaion();
    deleteEducation();

    displaySkills();
    updateSkills();
    addSkill();
    deleteSkills();

    displayAchiv();
    updateAchiv();
    addAchiv();
    deleteAchiv();

    $("#modalEdit").on("hidden.bs.modal", function () {
        $(this).find("input, textarea").val("");
    });
});

function displayPersonalInformation() {
    $.ajax({
        method: "GET",
        url: "phpscripts/display-personal-information.php",
        dataType: "json",
        success: function (response) {
            if (response.status === "success") {
                var data = response.data_info;
                if (data.length > 0) {
                    var userData = data[0];
                    $("#floatingName").val(userData.name);
                    $("#floatingCourse").val(userData.course);
                    $("#floatingEmail").val(userData.email);
                    $("#floatingNumber").val(userData.mobile_number);
                    $("#floatingAddress").val(userData.address);
                    $("#floatingBirthdate").val(userData.birthdate);
                    $("#floatingAge").val(userData.age);
                    $("#floatingAbout").val(userData.about);
                    $("#floatingObjective").val(userData.objective);
                }
            }
        },
        error: function (xhr, status, error) {
            console.log("Error: " + error);
        },
    });
}

function updatePersonalInformation() {
    $(document).on("click", ".update-pi", function () {
        var name = $("#floatingName").val();
        var course = $("#floatingCourse").val();
        var email = $("#floatingEmail").val();
        var mobile_number = $("#floatingNumber").val();
        var address = $("#floatingAddress").val();
        var birthdate = $("#floatingBirthdate").val();
        var age = $("#floatingAge").val();
        var about = $("#floatingAbout").val();
        var objective = $("#floatingObjective").val();

        $.ajax({
            method: "POST",
            url: "phpscripts/update-personal-information.php",
            data: {
                name: name,
                course: course,
                email: email,
                mobile_number: mobile_number,
                address: address,
                birthdate: birthdate,
                age: age,
                about: about,
                objective: objective,
            },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("button, input").prop("disabled", true);
                    $("a")
                        .addClass("disabled")
                        .on("click", function (e) {
                            e.preventDefault();
                        });

                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-success")
                        .removeClass("text-danger");
                    $("#liveToast").toast("show");

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-danger");
                    $("#liveToast").toast("show");
                }
            },
            error: function (xhr, status, error) {
                console.log("Error: " + error);
            },
        });
    });
}

function displayEducation() {
    $.ajax({
        method: "GET",
        url: "phpscripts/display-education.php",
        dataType: "json",
        success: function (response) {
            if (response.status === "success") {
                var educationTableBody = $("#educationTable tbody");
                educationTableBody.empty();

                response.data_info.forEach(function (info) {
                    var row = `<tr>
                        <td>${info.id}</td>
                        <td><p style="margin: 0; text-wrap: nowrap;">${info.others}</p></td>
                        <td>${info.school_name}</td>
                        <td><p class="mb-0 text-start">${info.school_start_year}</p></td>
                        <td><p class="mb-0 text-start">${info.school_end_year}</p></td>
                        <td>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-warning edit-btn" data-sn="${info.school_name}" data-ys="${info.school_start_year}" data-yf="${info.school_end_year}" data-ot="${info.others}" data-id="${info.id}">Edit</button>
                                <button class="btn btn-sm btn-danger delete-btn" data-id="${info.id}">Delete</button>
                            </div>
                        </td>
                    </tr>`;
                    educationTableBody.append(row);
                });

                $(".edit-btn").on("click", function () {
                    var schoolName = $(this).data("sn");
                    var schoolStartYear = $(this).data("ys");
                    var schoolEndYear = $(this).data("yf");
                    var others = $(this).data("ot");
                    var id = $(this).data("id");

                    $("#modalEdit").find("#schoolID").val(id);
                    $("#modalEdit").find("#schoolName").val(schoolName);
                    $("#modalEdit")
                        .find("#schoolStartYear")
                        .val(schoolStartYear);
                    $("#modalEdit").find("#schoolEndYear").val(schoolEndYear);
                    $("#modalEdit").find("#others").val(others);

                    $("#modalEdit").modal("show");
                });
            }
        },
        error: function (xhr, status, error) {
            console.log(error);
        },
    });
}

function updateEductaion() {
    $(document).on("click", ".update-education", function () {
        var educationId = $("#schoolID").val();
        var schoolName = $("#editSchoolName").val();
        var schoolStartYear = $("#editSchoolStartYear").val();
        var schoolEndYear = $("#editSchoolEndYear").val();
        var others = $("#editOthers").val();
        $.ajax({
            method: "POST",
            url: "phpscripts/update-education.php",
            data: {
                educationId: educationId,
                schoolName: schoolName,
                schoolStartYear: schoolStartYear,
                schoolEndYear: schoolEndYear,
                others: others,
            },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("button, input").prop("disabled", true);
                    $("a")
                        .addClass("disabled")
                        .on("click", function (e) {
                            e.preventDefault();
                        });

                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-success")
                        .removeClass("text-danger");
                    $("#liveToast").toast("show");

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-danger");
                    $("#liveToast").toast("show");
                }
            },
            error: function (xhr, status, error) {
                console.log("Error: " + error);
            },
        });
    });
}

function addEductaion() {
    $(document).on("click", ".add-education", function () {
        var addSchoolName = $("#addSchoolName").val();
        var addSchoolStartYear = $("#addSchoolStartYear").val();
        var addSchoolEndYear = $("#addSchoolEndYear").val();
        var addOthers = $("#addOthers").val();
        $.ajax({
            method: "POST",
            url: "phpscripts/add-education.php",
            data: {
                addSchoolName: addSchoolName,
                addSchoolStartYear: addSchoolStartYear,
                addSchoolEndYear: addSchoolEndYear,
                addOthers: addOthers,
            },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("button, input").prop("disabled", true);
                    $("a")
                        .addClass("disabled")
                        .on("click", function (e) {
                            e.preventDefault();
                        });

                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-success")
                        .removeClass("text-danger");
                    $("#liveToast").toast("show");

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-danger");
                    $("#liveToast").toast("show");
                }
            },
            error: function (xhr, status, error) {
                console.log("Error: " + error);
            },
        });
    });
}

function deleteEducation() {
    $(document).on("click", ".delete-btn", function () {
        var educationId = $(this).data("id");
        if (confirm("Are you sure you want to delete this record?")) {
            $.ajax({
                method: "POST",
                url: "phpscripts/delete-education.php",
                data: { educationId: educationId },
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        $("button, input").prop("disabled", true);
                        $("a")
                            .addClass("disabled")
                            .on("click", function (e) {
                                e.preventDefault();
                            });

                        $("#liveToast .toast-body p")
                            .text(response.message)
                            .addClass("text-success")
                            .removeClass("text-danger");
                        $("#liveToast").toast("show");

                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else {
                        $("#liveToast .toast-body p")
                            .text(response.message)
                            .addClass("text-danger");
                        $("#liveToast").toast("show");
                    }
                },
                error: function (xhr, status, error) {
                    console.log("Error: " + error);
                },
            });
        }
    });
}

function displaySkills() {
    $.ajax({
        method: "GET",
        url: "phpscripts/display-skills.php",
        dataType: "json",
        success: function (response) {
            if (response.status === "success") {
                let tableBody = $("#skillsTable tbody");
                tableBody.empty();

                response.data_info.forEach(function (info) {
                    let row = `
                        <tr>
                            <td>${info.skill_id}</td>
                            <td>${info.skill_title}</td>
                            <td><p class="mb-0 text-start">${info.skill_percentage}%</p></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-warning edit-skill" data-id="${info.skill_id}" data-st="${info.skill_title}" data-sp="${info.skill_percentage}" data-stp="${info.skill_type}" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                                    <button class="btn btn-sm btn-danger delete-record" data-id="${info.skill_id}">Delete</button>
                                </div>
                            </td>
                        </tr>`;
                    tableBody.append(row);
                });

                $(".edit-skill").on("click", function () {
                    var id = $(this).data("id");
                    var skillTitle = $(this).data("st");
                    var skillPercentage = $(this).data("sp");
                    var skillType = $(this).data("stp");

                    $("#modalEdit").find("#editSkillID").val(id);
                    $("#modalEdit").find("#editSkillTitle").val(skillTitle);
                    $("#modalEdit")
                        .find("#editSkillPercentage")
                        .val(skillPercentage);
                    $("#modalEdit").find("#editSkillType").val(skillType);

                    $("#modalEdit").modal("show");
                });
            }
        },
        error: function (xhr, status, error) {
            console.log(error);
        },
    });
}

function updateSkills() {
    $(document).on("click", ".update-skill", function () {
        var editSkillID = $("#editSkillID").val();
        var editSkillTitle = $("#editSkillTitle").val();
        var editSkillPercentage = $("#editSkillPercentage").val();
        $.ajax({
            method: "POST",
            url: "phpscripts/update-skill.php",
            data: {
                editSkillID: editSkillID,
                editSkillTitle: editSkillTitle,
                editSkillPercentage: editSkillPercentage,
            },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("button, input").prop("disabled", true);
                    $("a")
                        .addClass("disabled")
                        .on("click", function (e) {
                            e.preventDefault();
                        });

                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-success")
                        .removeClass("text-danger");
                    $("#liveToast").toast("show");

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-danger");
                    $("#liveToast").toast("show");
                }
            },
            error: function (xhr, status, error) {
                console.log("Error: " + error);
            },
        });
    });
}

function addSkill() {
    $(document).on("click", ".add-skill", function () {
        var addSkillID = $("#addSkillID").val();
        var addSkillTitle = $("#addSkillTitle").val();
        var addSkillPercentage = $("#addSkillPercentage").val();
        $.ajax({
            method: "POST",
            url: "phpscripts/add-skill.php",
            data: {
                addSkillID: addSkillID,
                addSkillTitle: addSkillTitle,
                addSkillPercentage: addSkillPercentage,
            },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("button, input").prop("disabled", true);
                    $("a")
                        .addClass("disabled")
                        .on("click", function (e) {
                            e.preventDefault();
                        });

                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-success")
                        .removeClass("text-danger");
                    $("#liveToast").toast("show");

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-danger");
                    $("#liveToast").toast("show");
                }
            },
            error: function (xhr, status, error) {
                console.log("Error: " + error);
            },
        });
    });
}

function deleteSkills() {
    $(document).on("click", ".delete-record", function () {
        var skillId = $(this).data("id");
        if (confirm("Are you sure you want to delete this record?")) {
            $.ajax({
                method: "POST",
                url: "phpscripts/delete-skills.php",
                data: { skillId: skillId },
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        $("button, input").prop("disabled", true);
                        $("a")
                            .addClass("disabled")
                            .on("click", function (e) {
                                e.preventDefault();
                            });

                        $("#liveToast .toast-body p")
                            .text(response.message)
                            .addClass("text-success")
                            .removeClass("text-danger");
                        $("#liveToast").toast("show");

                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else {
                        $("#liveToast .toast-body p")
                            .text(response.message)
                            .addClass("text-danger");
                        $("#liveToast").toast("show");
                    }
                },
                error: function (xhr, status, error) {
                    console.log("Error: " + error);
                },
            });
        }
    });
}

function displayAchiv() {
    $.ajax({
        method: "GET",
        url: "phpscripts/display-achievements.php",
        dataType: "json",
        success: function (response) {
            if (response.status === "success") {
                let tableBody = $("#achievementsTable tbody");
                tableBody.empty();

                response.data_info.forEach(function (info) {
                    let row = `
                        <tr>
                            <td>${info.id}</td>
                            <td>${info.title}</td>
                            <td><p class="mb-0 text-start">${info.start_year}</p></td>
                            <td><p class="mb-0 text-start">${info.end_year}</p></td>
                            <td>
                                <div class="btn-group">
                                    <button class="btn btn-sm btn-warning edit-achiv" data-id="${info.id}" data-at="${info.title}" data-sy="${info.start_year}" data-se="${info.end_year}" data-bs-toggle="modal" data-bs-target="#modalEdit">Edit</button>
                                    <button class="btn btn-sm btn-danger delete-achiv" data-id="${info.id}">Delete</button>
                                </div>
                            </td>
                        </tr>`;
                    tableBody.append(row);
                });

                $(".edit-achiv").on("click", function () {
                    var id = $(this).data("id");
                    var title = $(this).data("at");
                    var startYear = $(this).data("sy");
                    var endYear = $(this).data("se");

                    $("#modalEdit").find("#editAchivID").val(id);
                    $("#modalEdit").find("#editAchivTitle").val(title);
                    $("#modalEdit").find("#editSY").val(startYear);
                    $("#modalEdit").find("#editEY").val(endYear);

                    $("#modalEdit").modal("show");
                });
            }
        },
        error: function (xhr, status, error) {
            console.log(error);
        },
    });
}

function updateAchiv() {
    $(document).on("click", ".update-achiv", function () {
        var editAchivID = $("#editAchivID").val();
        var editAchivTitle = $("#editAchivTitle").val();
        var editSY = $("#editSY").val();
        var editEY = $("#editEY").val();
        $.ajax({
            method: "POST",
            url: "phpscripts/update-achiv.php",
            data: {
                editAchivID: editAchivID,
                editAchivTitle: editAchivTitle,
                editSY: editSY,
                editEY: editEY,
            },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("button, input").prop("disabled", true);
                    $("a")
                        .addClass("disabled")
                        .on("click", function (e) {
                            e.preventDefault();
                        });

                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-success")
                        .removeClass("text-danger");
                    $("#liveToast").toast("show");

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-danger");
                    $("#liveToast").toast("show");
                }
            },
            error: function (xhr, status, error) {
                console.log("Error: " + error);
            },
        });
    });
}

function addAchiv() {
    $(document).on("click", ".add-achiv", function () {
        var addAchivID = $("#addAchivID").val();
        var addAchivTitle = $("#addAchivTitle").val();
        var addSY = $("#addSY").val();
        var addEY = $("#addEY").val();
        $.ajax({
            method: "POST",
            url: "phpscripts/add-achiv.php",
            data: {
                addAchivID: addAchivID,
                addAchivTitle: addAchivTitle,
                addSY: addSY,
                addEY: addEY,
            },
            dataType: "json",
            success: function (response) {
                if (response.status === "success") {
                    $("button, input").prop("disabled", true);
                    $("a")
                        .addClass("disabled")
                        .on("click", function (e) {
                            e.preventDefault();
                        });

                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-success")
                        .removeClass("text-danger");
                    $("#liveToast").toast("show");

                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    $("#liveToast .toast-body p")
                        .text(response.message)
                        .addClass("text-danger");
                    $("#liveToast").toast("show");
                }
            },
            error: function (xhr, status, error) {
                console.log("Error: " + error);
            },
        });
    });
}

function deleteAchiv() {
    $(document).on("click", ".delete-achiv", function () {
        var achivID = $(this).data("id");
        if (confirm("Are you sure you want to delete this record?")) {
            $.ajax({
                method: "POST",
                url: "phpscripts/delete-achiv.php",
                data: { achivID: achivID },
                dataType: "json",
                success: function (response) {
                    if (response.status === "success") {
                        $("button, input").prop("disabled", true);
                        $("a")
                            .addClass("disabled")
                            .on("click", function (e) {
                                e.preventDefault();
                            });

                        $("#liveToast .toast-body p")
                            .text(response.message)
                            .addClass("text-success")
                            .removeClass("text-danger");
                        $("#liveToast").toast("show");

                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else {
                        $("#liveToast .toast-body p")
                            .text(response.message)
                            .addClass("text-danger");
                        $("#liveToast").toast("show");
                    }
                },
                error: function (xhr, status, error) {
                    console.log("Error: " + error);
                },
            });
        }
    });
}
