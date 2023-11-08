<?php 
include '../config.php';
$admin=new Admin();

// $eid=$_SESSION['eid'];

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];
$join=$_POST['join'];
$stmt1=$admin->ret("SELECT * FROM `employee` WHERE `emp_email`='$email'");
$row=$stmt1->fetch(PDO::FETCH_ASSOC);
$num=$stmt1->rowCount();

if($num>0){
    echo "<script>alert('Account is already exist');window.location='../admin/addemployee.php'</script>";

}else{

$stmt=$admin->cud("INSERT INTO `employee`( `emp_name`, `emp_email`, `emp_role`, `emp_joindate`,  `password`) VALUES ('$name','$email','$role','$join','$password')","ins");
echo "<script>alert('Account added successfully');window.location='../admin/addemployee.php'</script>";
}
?>