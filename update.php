<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php 
   include("config.php");
   if(isset($_POST['update']))
   {
    $id = $_GET['updateid'];
    echo $id; 
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $email = $_POST['email'];
    $std = $_POST['std'];
    $password = $_POST['password'];
    $adress = $_POST['adress'];
    
    $city = $_POST['city'];
   

   $query="update  register set F_Name='$f_name',L_Name='$l_name',Contact='$contact',Gender='$gender',Birth='$birth',Email='$email',Std='$std',Password='$password',Adress='$adress',City='$city' where Id='$id'";
   $result=mysqli_query($connection,$query);

   if($result)
   {
       header("Location:selected.php");
   }
   else{
    echo "Not updated";
   }
   }
?>
<table border="1">

<div class="box2">
     <form method="post">
                <div class="box11">
                    <div class="b11">
                        <div class="b1"><label for=""> First Name</label></div>
                        <div class="b2"><input type="text" name="f_name"></div>
                    </div>
                    <div class="b12">
                        <div class="b1"><label for="">Last Name</label></div>
                        <div class="b2"><input type="text" name="l_name"></div>  
                    </div>
                </div>
                <!-- ------ -->
                <div class="box11">
                    <div class="b13">
                        <div class="b1"><label for="">Male</label<label for="">female  </label></div>
                          <div class="b2"><input type="radio" name="gender" value="male"><input type="radio" name="gender" value="female"></div>
                        <!-- <div class="b1"></div>
                          <div class="b2"></div> -->
                    </div>
                    <div class="b14"> 
                         <div class="b1"><label for=""> Date of Birth</label></div>
                        <div class="b2"><input type="date" name="birth"></div>
                    </div>
                </div>
                <!-- ------ -->
                <div class="box11">
                    <div class="b14"> 
                        <div class="b1"><label for="">Email</label></div>
                        <div class="b2"><input type="text" name="email"></div>
                    </div>
                    <div class="b13">
                            <div class="b1"><label for="">STD</label></div>
                            <div class="b2"><input type="text" name="std"></div>
                          
                    </div>
                </div>
                <!-- ------ -->
                <div class="box11">
                    <div class="b11">
                        <div class="b1"><label for=""> Password</label></div>
                        <div class="b2"><input type="password" name="password"></div> 
                    </div>
                    <div class="b11">
                        <div class="b1"><label for=""> contact</label></div>
                        <div class="b2"><input type="number" name="contact"></div> 
                    </div>
                </div>
                <!-- ------ -->
                <div class="box11">
                    <div class="b11">
                        <div class="b1"><label for=""> Address</label></div>
                        <div class="b2"><input type="text" name="adress"></div>
                    </div>
                    <div class="b11">
                       <div class="b1"><label for=""> City</label></div>
                        <div class="b2"><input type="text" name="city"></div>      
                    </div>
                 
                  
                </div>

                <div class="sub">
                        <input type="submit" value="Add student" name="update">        
                </div>
                </form>
            </div>
        </div>
    </div>
    </table>