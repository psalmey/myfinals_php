<?php
session_start();
include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $editSkillID = mysqli_real_escape_string($con, $_POST['editSkillID']);
    $editSkillTitle = mysqli_real_escape_string($con, $_POST['editSkillTitle']);
    $editSkillPercentage = mysqli_real_escape_string($con, $_POST['editSkillPercentage']);

    if (empty($editSkillID) || empty($editSkillTitle) || empty($editSkillPercentage)) {
        $data['status'] = 'error';
        $data['message'] = 'All fields are required.';
    } else {
        $update_query = "UPDATE skills_set SET 
                        skill_title = '$editSkillTitle',
                        skill_percentage = '$editSkillPercentage'
                        WHERE skill_id = '$editSkillID'";

        if (mysqli_query($con, $update_query)) {
            $data['status'] = 'success';
            $data['message'] = 'Skilll record updated successfully';
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Error updating skill record: ' . mysqli_error($con);
        }
    }

} else {
    $data['status'] = 'error';
    $data['message'] = 'Invalid request method';
}

echo json_encode($data);
?>