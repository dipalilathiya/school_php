<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">

   
    <!--  -->
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <?php 
       include ("sidebar.php");
     ?>
  
       
          <!--  -->
          <div class="box3">
           
            <div class="b13"> 
                <div class="b1"><label for="">Name:-</label></div>
                <div class="b2"><input type="text" ></div>     
            </div>
            <div class="b13"> 
                <div class="b1"><label for="">email:-</label></div>
                <div class="b2"><input type="email" ></div>     
            </div>
            <div class="b13"> 
                <div class="b1"><label for="">Password:-</label></div>
                <div class="b2"><input type="password" ></div>     
            </div>
            <div class="b13">   
                <div class="b1"><label for="">Gender:-</label></div>
                <div class="b2"><input type="text" ></div>     
            </div>
            <div class="b13"> 
                <div class="b1"><label for="">Designation:-</label></div>
                <div class="b2"><input type="text" ></div>     
            </div><div class="b13"> 
                <div class="b1"><label for="">Time:-</label></div>
                <div class="b2"><input type="text" ></div>     
            </div>
            <div class="sub">
                <input type="submit" value="Submit">        
        </div>     
          </div>
          <!--  -->
            <div class="box2">
                <div class="tabal">
                    <table class="tabal1">
                        <tr>
                            <th class="id">Id</th>
                            <th class="name" >Name</th>
                            <th  class="email">Email</th>
                            <th class="gender">Gender</th>
                            <th class="sub">Design.</th>
                            <th class="des" >Time</th>
                            <th class="blank"></th>
                            <!-- <th></th> -->
                        </tr>
                    </table>
                <table  border="0" class="tabal2">     
                    <tr>
                        <td class="id">14</td>
                        <td class="name">ayush</td>
                        <td class="email">viratkohli@gmail.com</td>
                        <td class="gender">Male</td> 
                        <td class="sub">A</td>
                        <td class="des">2012</td>
                        <td class="delete"><button>Delete</button></td>
                    </tr>
                    <tr>
                        <td class="id">17</td>
                        <td class="name">dharmik</td>
                        <td class="email">dharmiknadoda@gmail.com</td>
                        <td class="gender">Male</td>
                        <td class="sub">C</td>
                        <td class="des">6 to 8</td>
                        <td class="delete"><button>Delete</button></td>
                    </tr>
                </table>
                
            </div>
            <!-- --------------------------------------------------------- -->
        </div>
    </div>
</body>
</html>
