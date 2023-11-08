<?php 
include '../config.php';
$admin=new Admin();

// $eid=$_SESSION['eid'];

$role=$_POST['role'];
$req=$_POST['req'];

$empid=$_SESSION['emp_id'];






$stmt=$admin->cud("INSERT INTO `request`( `emp_id`, `department`, `reason`) VALUES ('$empid','$role','$req')","ins");
echo "<script>alert('Request submitted  successfully');window.location='../admin/myrequest.php'</script>";

?>