<?php
session_start();
include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $addSkillTitle = mysqli_real_escape_string($con, $_POST['addSkillTitle']);
    $addSkillPercentage = mysqli_real_escape_string($con, $_POST['addSkillPercentage']);

    if (empty($addSkillTitle) || empty($addSkillPercentage)) {
        $data['status'] = 'error';
        $data['message'] = 'All fields are required.';
    } else {
        $insert_query = "INSERT INTO skills_set (skill_title, skill_percentage) 
                        VALUES ('$addSkillTitle', '$addSkillPercentage')";

        if (mysqli_query($con, $insert_query)) {
            $data['status'] = 'success';
            $data['message'] = 'Skill record inserted successfully';
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Error inserting skill record: ' . mysqli_error($con);
        }
    }

} else {
    $data['status'] = 'error';
    $data['message'] = 'Invalid request method';
}

echo json_encode($data);
?>