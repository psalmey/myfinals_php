<?php
session_start();
include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $addAchivTitle = mysqli_real_escape_string($con, $_POST['addAchivTitle']);
    $addSY = mysqli_real_escape_string($con, $_POST['addSY']);
    $addEY = mysqli_real_escape_string($con, $_POST['addEY']);

    if (empty($addAchivTitle) || empty($addSY) || empty($addEY)) {
        $data['status'] = 'error';
        $data['message'] = 'All fields are required.';
    } else {
        $insert_query = "INSERT INTO achievements (title, start_year, end_year) 
                        VALUES ('$addAchivTitle', '$addSY', '$addEY')";

        if (mysqli_query($con, $insert_query)) {
            $data['status'] = 'success';
            $data['message'] = 'Achievement record inserted successfully';
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Error inserting achievement record: ' . mysqli_error($con);
        }
    }

} else {
    $data['status'] = 'error';
    $data['message'] = 'Invalid request method';
}

echo json_encode($data);
?>