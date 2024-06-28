<?php
session_start();
include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $editAchivID = mysqli_real_escape_string($con, $_POST['editAchivID']);
    $editAchivTitle = mysqli_real_escape_string($con, $_POST['editAchivTitle']);
    $editSY = mysqli_real_escape_string($con, $_POST['editSY']);
    $editEY = mysqli_real_escape_string($con, $_POST['editEY']);

    if (empty($editAchivID) || empty($editAchivTitle) || empty($editSY) || empty($editEY)) {
        $data['status'] = 'error';
        $data['message'] = 'All fields are required.';
    } else {
        $update_query = "UPDATE achievements SET 
                        start_year = '$editSY',
                        end_year = '$editEY',
                        title = '$editAchivTitle'
                        WHERE id = $editAchivID";

        if (mysqli_query($con, $update_query)) {
            $data['status'] = 'success';
            $data['message'] = 'Record updated successfully';
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Error updating record: ' . mysqli_error($con);
        }
    }

} else {
    $data['status'] = 'error';
    $data['message'] = 'Invalid request method';
}

echo json_encode($data);
?>