<?php
include "./cone.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $qurey = "DELETE FROM crud_data WHERE id ='$id'";
    $result = mysqli_query($conn, $qurey);
    if ($result) {
        header("location: read.php");
        # code...
    }
}
