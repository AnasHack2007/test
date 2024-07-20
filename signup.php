<!DOCTYPE html>
<?php
if(isset($_POST["signup"])){


$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$gender=$_POST["gender"];



require 'connect.php';

//select  where field name=email

$select="select * from users where  email='$email'";
$query=  mysqli_query($con, $select);


if(mysqli_num_rows($query)>0){
    
    echo '<script>alert("البريد الإلكتروني موجود بالفعل، الرجاء تسجيل الدخول");window.location.assign("signin.php");</script>';
    
    
}
else{
    //email does not exists
    
    $insert="insert into users( `email`, `username`, `password`,  `gender` ) "
            . "values('$email','$username','$password','$gender')";
    
    $query2=  mysqli_query($con, $insert);
    
    
    if($query2){
           
        echo '<script>alert("تم التسجيل بنجاح");window.location.assign("signin.php");</script>';

}
       

    }


    
}



?>
<!DOCTYPE html>
<html>
 <head>
    <title>login</title>
     <meta charset="UTF-8">
      <link rel="stylesheet" href="./sign.css">
      <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>
 <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
   <div class="head">
      <div class="hh">
        <h1>Sign Up</h1>
         <p>If your dont alraady an account Register</p><p>You can<a href="https://anashack2007.github.io/-bm/log.html">Login here!</a></p>
</div>

          <div class="input">
            <div class="in-1">
               <p>Email Address</p>
                <input type="email" name="email" placeholder="Enter Your Email Address" required>
                 </div>
              <div class="in-3">
               <p>Username</p>

                <input type="text" name="username" placeholder="Enter Your Username" minlength="4"  required>
                 </div>
                 <div class="in-2">
                  <p>Password</p>
                   <input type="password"  name="password" placeholder="Enter Your password" minlength="6" maxlength="12" required>
                    </div>  
                   <div class="ra">
                    <input type="radio" name="gender" value="Develpoer">Develpoer
                   <div class="ll"><input type="radio" name="gender" value="Customer" >Customer</div> 
                  </div>
                   <div class="oo"><input type="submit" name="signup" value="Register"></div>
             </div>
             
     </div>
   </from>
     
 </body>
</html>
