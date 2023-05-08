<?php
include('include/connection.php');
$alert="";
$error_message="";

 if (isset($_POST['sign_up'])){   
    $sign_up=$_POST['sign_up'];
   $username=  $_POST['username'];
   $email=  $_POST['email'];
   $country=  $_POST['country'];
   $birthday=  $_POST['birthday'];
   $phone=  $_POST['phone'];
   $password=$_POST['password'];
   $avatar=$_POST['file'];
     if (empty($username)&&empty($password)&&empty($avatar)&&empty($email)) {
        $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
       الرجاء ملئ الحقول المطلوبة</div>";
   }elseif (strlen($username)>50 && strlen($email)>50 && strlen($country)>50&& strlen($phone)>9) {
       $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
       يجب أن لا يكون العنوان أكبر من 50 حرف</div>";
   }elseif (strlen($password)<=8) {
    $error_message= "<div class=\"alert alert-warning\" role=\"alert\">
    يجب أن لا تقل كلمة المرور عن 8 أحرف</div>";
   }else{
     $newpassword =strrev($password); 
          
        $query ="INSERT INTO users (username, email, country, phone,birthday,user_password,avatar)
        VALUES ('$username','$email','$country','$phone','$birthday','$newpassword','$avatar')";
        mysqli_query($conn,$query);

        $alert= "<div class=\"alert alert-primary\" role=\"alert\">
        تم انشاء حسابك 
      </div>";
      header("Location:http://localhost/projects/tadween/login.php");
    }
 }
?>