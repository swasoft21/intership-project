<?php
include '../config.php';
$admin= new Admin();

$id=$_GET['id'];

$stmt = $admin->cud("DELETE FROM `employee` WHERE `emp_id`='$id'","deleted");

echo" <script>alert('Deleted Successfully');window.location='../admin/manageemp.php'</script>";

?>