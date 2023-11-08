<?php
define('DIR','');
require_once DIR .'../config.php';
// $control=new Controller();
$admin=new Admin();
// if(isset($_POST['id']))
// {
	$id=$_GET['id'];
	$name=$_POST['name'];
    $email=$_POST['email'];
// $password=$_POST['password'];
    $role=$_POST['role'];
    $join=$_POST['join'];

   
	$stmt=$admin->cud("UPDATE `employee` SET `emp_name`='$name',`emp_email`='$email',`emp_role`='$role',`emp_joindate`='$join'  WHERE employee.emp_id='$id'","updated");

    echo"<script>alert('table Updated');window.location='../admin/manageemp.php'</script>";


    // $image =$_FILES["image"]["name"];
    // if(file_exists($_FILES['image']['tmp_name'])){

	// $image =$_FILES["image"]["name"];
	// move_uploaded_file($_FILES['image']['tmp_name'], "../image/".$_FILES['image']['name']);
    // }else{
	// $image=$_POST['himg'];
    // }
//     $id=$_GET['id'];
//   $f_name=$_POST['f_name'];
//   $stmt=$admin->cud("UPDATE `file_categori` set `f_name`='$f_name' WHERE file_categori.id='$id'","updated");
	// echo "<script>alert('Delet successfully');window.location='display.php'</script>";
	// echo"<script>alert('table Updated');window.location='managepet.php'</script>";
// }
