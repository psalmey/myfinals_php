<?php
session_start();

include ("database-connection.php");
include ("check-login.php");
$user_data = check_login($con);

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $user_data['user_id'];
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $course = mysqli_real_escape_string($con, $_POST['course']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile_number = mysqli_real_escape_string($con, $_POST['mobile_number']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $birthdate = $_POST['birthdate'];
    $age = (int) $_POST['age'];
    $about = mysqli_real_escape_string($con, $_POST['about']);
    $objective = mysqli_real_escape_string($con, $_POST['objective']);

    $update_query = "UPDATE personal_information SET 
                    name = '$name',
                    course = '$course',
                    email = '$email',
                    mobile_number = '$mobile_number',
                    address = '$address',
                    birthdate = '$birthdate',
                    age = $age,
                    about = '$about',
                    objective = '$objective'
                    WHERE personal_id = $user_id";

    if (mysqli_query($con, $update_query)) {
        $data['status'] = 'success';
        $data['message'] = 'Personal information updated successfully';
    } else {
        $data['status'] = 'error';
        $data['message'] = 'Error updating personal information: ' . mysqli_error($con);
    }
}

echo json_encode($data);
?>