<?php


define('DIR','../');
require_once DIR . 'config.php';
$control = new Controller();
$admin = new Admin();



  
  $b=$_POST['email'];
  $d=$_POST['password'];
   



   $stmt=$admin->ret("SELECT * from `admin` WHERE `admin_email`='$b' AND `admin_password`='$d'");
   $row = $stmt->fetch(PDO::FETCH_ASSOC);
   $num = $stmt->rowCount();
        if($num>0 ){
            $id=$row['admin_id'];
            $_SESSION['admin_id']=$id;
            echo "<script>window.location='../admin/index.php'</script>";
      }else{


   $stmtc=$admin->ret("SELECT * FROM `employee`  WHERE `emp_email`='$b' AND `password`='$d'");
   $rowc = $stmtc->fetch(PDO::FETCH_ASSOC);
   $numc = $stmtc->rowCount();
   echo $numc;
        if($numc>0){
            $idd=$rowc['emp_id'];
            $role=$rowc['emp_role'];
            $_SESSION['emp_id']=$idd;
            $_SESSION['emp_role']=$role;
            
            echo "<script>window.location='../admin/index.php'</script>";

      }else{


   $stmtce=$admin->ret("SELECT * from `manager` WHERE `m_email`='$b' AND `m_password`='$d'");
   $rowce = $stmtce->fetch(PDO::FETCH_ASSOC);
   $numce = $stmtce->rowCount();
        if($numce>0){
            $iddd=$rowce['m_id'];
            $_SESSION['m_id']=$iddd;
            echo "<script>window.location='../admin/index.php'</script>";
      }else{

       echo"<script>
            alert('you have entered wrong username or password');
            window.location.href='../login.php';
          </script>";
    }
}
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