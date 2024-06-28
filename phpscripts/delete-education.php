<?php
session_start();
include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $educationId = mysqli_real_escape_string($con, $_POST['educationId']);

    if (!empty($educationId)) {
        $delete_query = "DELETE FROM education WHERE id = $educationId";

        if (mysqli_query($con, $delete_query)) {
            $data['status'] = 'success';
            $data['message'] = 'Education record deleted successfully.';
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Error deleting education record: ' . mysqli_error($con);
        }
    } else {
        $data['status'] = 'error';
        $data['message'] = 'Invalid education ID.';
    }
} else {
    $data['status'] = 'error';
    $data['message'] = 'Invalid request method.';
}

echo json_encode($data);
?>