<?php
session_start();

include ("database-connection.php");

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $get_data_info_query = " SELECT * FROM achievements";
    $get_data_info_result = mysqli_query($con, $get_data_info_query);

    if ($get_data_info_result && mysqli_num_rows($get_data_info_result) > 0) {
        $data['data_info'] = [];
        while ($row = mysqli_fetch_assoc($get_data_info_result)) {
            $data['data_info'][] = $row;
        }
        $data['status'] = 'success';
    } else {
        $data['status'] = "error";
        $data['message'] = "No forum posts found";
    }
}

echo json_encode($data);
?>