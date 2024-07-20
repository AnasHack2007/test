<!DOCTYPE html>
<?php


if(isset($_POST["signin"])){
    
    $password=$_POST["password"];
$email=$_POST["email"];


 require 'connect.php';
 
 //where conition and condition
$select="select * from users where  email='$email' ";
$query=  mysqli_query($con, $select);


//$x=mail($to, $subject, $message);
 if(mysqli_num_rows($query)>0){   
    
    $row=  mysqli_fetch_array($query);
     
   if($row["password"]==$password) {
echo '<script>alert("Welcom");window.location.assign("home.php");</script>';
  
   } 
   else{
 echo '<script>alert("كلمه السر غير صحيحه");</script>';

   }
    
 }
 else{
     
         echo '<script>alert("البريد الإلكتروني غير موجود الرجاء التسجيل");window.location.assign("signup.php");</script>';

     
     
 }
    
    
    
}

?>


<!DOCTYPE html>
<html>
 <head>
    <title>login</title>
     <meta charset="UTF-8">
      <link rel="stylesheet" href="./log.css">
      <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>
 <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post" >
    <div class="head">
   <div class="hh">
    <h1>Sign in</h1>
    <p>If you dont anccount register</p><p>You can<a href="https://anashack2007.github.io/xdf/sign.html">Register here!</a></p>
   </div>
   
          <div class="input">
            <div class="in-1">
             <p>Email Address</p>   
              <input type="email" name="email" placeholder="Enter Your Email Address" required>
               </div>
               <div class="in-2">
                <p>Password</p>
                 <input type="password" name="password" placeholder="Enter Your password" required>               
                 
                  </div>
                  <div class="ra">
                    <div class="in"><input type="checkbox"  > Rememebr
                    </div>
               <div class="oo"><input type="submit" name="signin" value="Log in">
               
            </div>
           
     </div>
     </div>
    
    </from>
 </body>
</html>