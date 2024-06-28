<?php
session_start();
include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $educationId = mysqli_real_escape_string($con, $_POST['educationId']);
    $schoolName = mysqli_real_escape_string($con, $_POST['schoolName']);
    $schoolStartYear = mysqli_real_escape_string($con, $_POST['schoolStartYear']);
    $schoolEndYear = mysqli_real_escape_string($con, $_POST['schoolEndYear']);
    $others = mysqli_real_escape_string($con, $_POST['others']);

    if (empty($schoolName) || empty($schoolStartYear) || empty($schoolEndYear) || empty($others)) {
        $data['status'] = 'error';
        $data['message'] = 'All fields are required.';
    } else {
        $update_query = "UPDATE education SET 
                        school_name = '$schoolName',
                        school_start_year = '$schoolStartYear',
                        school_end_year = '$schoolEndYear',
                        others = '$others'
                        WHERE id = $educationId";

        if (mysqli_query($con, $update_query)) {
            $data['status'] = 'success';
            $data['message'] = 'Education record updated successfully';
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Error updating education record: ' . mysqli_error($con);
        }
    }

} else {
    $data['status'] = 'error';
    $data['message'] = 'Invalid request method';
}

echo json_encode($data);
?>