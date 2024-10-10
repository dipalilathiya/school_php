<?php 
    include("config.php");
     if(isset($_POST["submit"]))
     {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $gender=$_POST['gender'];
        $subject=$_POST['subject'];

        $query="insert into register1 (Name ,Email ,Password ,Gender,Subject)value('$name','$email','$password','$gender','$subject') ";
        $result=mysqli_query($connection,$query);
        
        if($result)
        {
             header("Location:teacher.php");
        }
        else{
            echo "not  submit";

        }
     }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/add_teacher.css">

     
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
<?php include("sidebar.php") ?>
<!-- ---------------------------------------------------------- -->
<form method="post">
          <div class="box2">

            <div class="box11">.

                <div class="b11">
                    <div class="b1"><label for="">Name</label></div>
                    <div class="b2"><input type="text" placeholder="Name" name="name"></div>
                </div>
                
          </div>
          <div class="box11">
            <div class="b11">
                <div class="b1"><label for=""> Email address</label></div>
                <div class="b2"><input type="text" placeholder="Email" name="email"></div>
            </div>   
         </div>
         <div class="box11">
            <div class="b11">
                <div class="b1"><label for=""> Password</label></div>
                <div class="b2"><input type="text"  placeholder="Password" name="password"></div>
            </div>   
         </div>
         <div class="box11">
            <div class="b13">
                <div class="b1"><label for=""> Gender</label></div>
                <div class="b2"><input type="text"  placeholder="Male" name="gender"></div>
            </div>   
         </div>
         <div class="box11">
            <div class="b11">
                <div class="b1"><label for=""> Subject</label></div>
                <div class="b2"><input type="text"  placeholder="Subject" name="subject"></div>
            </div>   
         </div>
         <div class="sub">
            <input type="submit"   name="submit">        
     </div>     
        </div>
    </div>
    </form>
</body>
</html>