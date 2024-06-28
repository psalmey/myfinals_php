<?php
session_start();
include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $skillId = mysqli_real_escape_string($con, $_POST['skillId']);

    if (!empty($skillId)) {
        $delete_query = "DELETE FROM skills_set WHERE skill_id = $skillId";

        if (mysqli_query($con, $delete_query)) {
            $data['status'] = 'success';
            $data['message'] = 'Skill record deleted successfully.';
        } else {
            $data['status'] = 'error';
            $data['message'] = 'Error deleting skill record: ' . mysqli_error($con);
        }
    } else {
        $data['status'] = 'error';
        $data['message'] = 'Invalid skill ID.';
    }
} else {
    $data['status'] = 'error';
    $data['message'] = 'Invalid request method.';
}

echo json_encode($data);
?>