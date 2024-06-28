<?php
session_start();
include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $achivID = mysqli_real_escape_string($con, $_POST['achivID']);

    if (!empty($achivID)) {
        $delete_query = "DELETE FROM achievements WHERE id = $achivID";

        if (mysqli_query($con, $delete_query)) {
            $data['status'] = 'success';
            $data['message'] = 'Record deleted successfully.';
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Error deleting record: ' . mysqli_error($con);
        }
    } else {
        $data['status'] = 'error';
        $data['message'] = 'Invalid ID.';
    }
} else {
    $data['status'] = 'error';
    $data['message'] = 'Invalid request method.';
}

echo json_encode($data);
?>