<?php


define('DIR','../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();


 

  
  $b=$_POST['email'];
  $d=$_POST['pass'];
  $c=$_POST['cpass'];

  


   $stmtc=$admin->ret("SELECT * FROM `employee`  WHERE `emp_email`='$b' ");
   $rowc = $stmtc->fetch(PDO::FETCH_ASSOC);
   $numc = $stmtc->rowCount();
   if($numc>0){
        if($c!=$d){
        
            echo"<script>
            alert('Password not match');
            window.location.href='../setpassword.php';
          </script>";
    }else{
        $stmt=$admin->cud("UPDATE `employee` SET `password`='$d'  WHERE employee.emp_email='$b'","updated");
        echo"<script>
            alert('Password reset seccussfully');
            window.location.href='../login.php';
          </script>";

    }}else{
        echo"<script>
            alert('Enter registered email! if any query contact Admin');
            window.location.href='../setpassword.php';
          </script>";
    }


     




?>

















<!-- 


if(isset($_POST['login']))
{

  
  $b=$_POST['a'];
  $d=$_POST['b'];
   

   $stmt=$admin->ret("SELECT * from `owner` WHERE `oname`='$b' AND `password`='$d'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['o_id'];
            $_SESSION['o_id']=$id;
             $admin->redirect('../user/index');
      }else if{


       $stmt=$admin->ret("SELECT * from `emission` WHERE `euname`='$b' AND `password`='$d'");
       $row = $stmt->fetch(PDO::FETCH_ASSOC);
       $num = $stmt->rowCount();
        if($num>0){
            $id=$row['e_id'];
            $_SESSION['e_id']=$id;
             $admin->redirect('../user/emission');
          
        }else if{




   $stmt=$admin->ret("SELECT * from `insurance` WHERE `iuname`='$b' AND `password`='$d'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['i_id'];
            $_SESSION['i_id']=$id;
             $admin->redirect('../user/insurance');
        }else if{


   $stmt=$admin->ret("SELECT * from `traficpolice` WHERE `puname`='$b' AND `password`='$d'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0){
            $id=$row['t_id'];
            $_SESSION['t_id']=$id;
             $admin->redirect('../user/police');
        }else{
            echo"<script>
            alert('you have entered wrong username or password');
            window.location.href='../user/logreg.php';
          </script>";
        }







   

  } -->