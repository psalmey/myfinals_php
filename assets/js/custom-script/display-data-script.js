$(document).ready(function () {
    displayPersonalInformation();
    displaySkills();
    displayEducation();
    displayAchievements();
});

function displayPersonalInformation() {
    $.ajax({
        method: "GET",
        url: "phpscripts/display-personal-information.php",
        dataType: "json",
        success: function (response) {
            if (response.status === "success") {
                // Display personal information
                var data = response.data_info[0];
                $(".data-username").text(data.name);
                $("#course").text(data.course);
                $(".emailData").text(data.email);
                $(".phoneNumberData").text(data.mobile_number);
                $(".addressData").text(data.address);
                $("#birthdate").text(formatDate(data.birthdate));
                $("#age").text(data.age);
                $("#objective").text(data.objective);
                $("#objectiveDesc").text(data.about);
            }
        },
        error: function (xhr, status, error) {
            console.log(error);
        },
    });
}

function displaySkills() {
    $.ajax({
        method: "GET",
        url: "phpscripts/display-skills.php",
        dataType: "json",
        success: function (response) {
            if (response.status === "success") {
                response.data_info.forEach(function (info) {
                    // Display skills
                    if (info.skill_title && info.skill_percentage) {
                        var skillHtml = `
                            <div class="progress w-25 m-2">
                                <span class="skill"><span>${info.skill_title}</span> <i class="val">${info.skill_percentage}%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="${info.skill_percentage}" aria-valuemin="0" aria-valuemax="100" style="width: ${info.skill_percentage}%;"></div>
                                </div>
                            </div>
                        `;
                        $("#skills-container").append(skillHtml);
                    }
                });
            }
        },
        error: function (xhr, status, error) {
            console.log(error);
        },
    });
}

function displayEducation() {
    $.ajax({
        method: "GET",
        url: "phpscripts/display-education.php",
        dataType: "json",
        success: function (response) {
            if (response.status === "success") {
                var educationContainer = $("#education-container");
                educationContainer.empty();
                response.data_info.forEach(function (education) {
                    var educationHtml = `
                        <div class="resume-item">
                            <h4>${education.school_name}</h4>
                            <h5 class="p-0">${education.school_start_year} - ${education.school_end_year}</h5>
                            <p><em>${education.others}</em></p>
                        </div>
                    `;
                    educationContainer.append(educationHtml);
                });
            } else {
                var educationContainer = $("#education-container");
                educationContainer.html("<p>No education records found</p>");
            }
        },
        error: function (xhr, status, error) {
            console.log(error);
        },
    });
}

function displayAchievements() {
    $.ajax({
        method: "GET",
        url: "phpscripts/display-achievements.php",
        dataType: "json",
        success: function (response) {
            if (response.status === "success") {
                var achievementsContainer = $("#achievements-container");
                achievementsContainer.empty();

                // Group achievements by start and end year
                var groupedAchievements = {};
                response.data_info.forEach(function (achievement) {
                    var key =
                        achievement.start_year + "-" + achievement.end_year;
                    if (!groupedAchievements[key]) {
                        groupedAchievements[key] = [];
                    }
                    groupedAchievements[key].push(achievement);
                });

                // Display grouped achievements using ul li
                Object.keys(groupedAchievements).forEach(function (key) {
                    var groupHtml = `
                        <div class="resume-item">
                            <h4>${key}</h4>
                            <ul>`;
                    groupedAchievements[key].forEach(function (achievement) {
                        groupHtml += `
                            <li>${achievement.title}</li>
                        `;
                    });
                    groupHtml += `</ul></div>`;
                    achievementsContainer.append(groupHtml);
                });
            } else {
                var achievementsContainer = $("#achievements-container");
                achievementsContainer.html("<p>No achievements found</p>");
            }
        },
        error: function (xhr, status, error) {
            console.log(error);
        },
    });
}

function formatDate(dateStr) {
    const date = new Date(dateStr);
    const options = { year: "numeric", month: "long", day: "numeric" };
    return date.toLocaleDateString("en-US", options);
}
