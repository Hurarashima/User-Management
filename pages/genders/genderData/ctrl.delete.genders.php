<?php 
require '../../../includes/conn.php';

$gender_id = $_GET ['gender_id'];

$delete_genders = mysqli_query($conn, "DELETE FROM tbl_genders WHERE gender_id = '$gender_id'");

//header("location '../list.users.php");



?>