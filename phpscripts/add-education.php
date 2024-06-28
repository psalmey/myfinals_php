<?php
session_start();
include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $schoolName = mysqli_real_escape_string($con, $_POST['addSchoolName']);
    $schoolStartYear = mysqli_real_escape_string($con, $_POST['addSchoolStartYear']);
    $schoolEndYear = mysqli_real_escape_string($con, $_POST['addSchoolEndYear']);
    $others = mysqli_real_escape_string($con, $_POST['addOthers']);

    if (empty($schoolName) || empty($schoolStartYear) || empty($schoolEndYear) || empty($others)) {
        $data['status'] = 'error';
        $data['message'] = 'All fields are required.';
    } else {
        $insert_query = "INSERT INTO education (school_name, school_start_year, school_end_year, others) 
                        VALUES ('$schoolName', '$schoolStartYear', '$schoolEndYear', '$others')";

        if (mysqli_query($con, $insert_query)) {
            $data['status'] = 'success';
            $data['message'] = 'Education record inserted successfully';
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Error inserting education record: ' . mysqli_error($con);
        }
    }

} else {
    $data['status'] = 'error';
    $data['message'] = 'Invalid request method';
}

echo json_encode($data);
?>