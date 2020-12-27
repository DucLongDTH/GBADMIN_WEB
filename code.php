<?php
include('security.php');
if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email']; 
    $password_login = md5($_POST['password']); 
    $query = "SELECT * FROM account WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);
   if(mysqli_num_rows($query_run) == 1) {
          $row = mysqli_fetch_row($query_run);
               if($row[2] != 3){
                    $_SESSION['username'] = $email_login;
                    $_SESSION['id_quyen'] = $row[2];
                    header('Location: index.php');
               }else{
                    $_SESSION['status'] = "Không có quyền truy cập";
                    header('Location: login.php');
               }
   } 
   else
   {
        $_SESSION['status'] = "Email / Password Sai";
        header('Location: login.php');
   }  
}
?>