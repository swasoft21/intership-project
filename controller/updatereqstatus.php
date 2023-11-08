<?php 
define('DIR','');
include '../config.php';
$admin=new Admin();
$id=$_GET['id'];
$status=$_GET['c_status'];


$stmt=$admin->cud("UPDATE `request` set `status`='$status' WHERE request.req_id='$id'","updated");

if(isset($_SESSION['admin_id'])){
echo "<script>alert('updated successfully');window.location='../admin/viewreq.php'</script>";

} else if(isset($_SESSION['emp_id'])){
    echo "<script>alert('updated successfully');window.location='../admin/viewrequest.php'</script>";

} else if(isset($_SESSION['m_id'])){
    echo "<script>alert('updated successfully');window.location='../admin/viewreq.php'</script>";

}
?>