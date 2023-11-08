<?php
include '../config.php';
$admin= new Admin();

$id=$_GET['id'];

$stmt = $admin->cud("DELETE FROM `request` WHERE `req_id`='$id'","deleted");

echo" <script>alert('Deleted Successfully');window.location='../admin/myrequest.php'</script>";

?>