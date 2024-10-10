 <?php
include ("config.php");
if (isset($_GET['no'])){
    $page_no = $_GET['no'];
    $limit = 3;
    // echo $page_no;
    $offset = ($page_no - 1) * $limit;
    $query = "select * from register limit $offset, $limit ";
    $result = mysqli_query($connection, $query);
} 
elseif(isset($_POST['submit'])) {

    $search = $_POST['search'];
    $query = "select * from register where f_name like '%$search%' ";
    $result = mysqli_query($connection, $query);
}
else {

    $query = "select * from register ";
    $result = mysqli_query($connection, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/selected.css">
    <link rel="stylesheet" href="css/sidebar1.css">


    <!--  -->
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>

 
<div class="container">
        <div class="box">
                <img src="img/SCHOOL1.png" alt="" width="150px" height="80PX" background-color="white">
                <i class="fa-solid fa-bars"></i>
               
            <div class="i1">
               <input type="search" placeholder="Search now">
              
            </div>
        </div>
        <div class="box1">
            <div class="bo1">
                <ul class="menu">       
                    <li><a href="dashbouerd.php"><i class="fa-solid fa-shield-halved"></i> Dashbourd</a></li>
                    <li><a href="index.php"><i class="fa-solid fa-grip-lines"></i>Add student</a></li>
                    <li><a href="add_teacher.php"><i class="fa-solid fa-bars"></i>Add teachers</a></li>
                    <li><a href="selected.php"><i class="fa-regular fa-star"></i>Student</a></li>
                    <li><a href="teacher.php"><i class="fa-regular fa-user"></i>Teachers</a></li>
                    <li><a href="admin.php"><i class="fa-solid fa-list"></i>Admin</a></li>
                </ul>
            </div>
    <form method="post">
        <div class="box2"> 
              <div class="serch">
                 <div class="s1"><input type="search" placeholder="Search now" name="search"></div>
                 <div class="s2"><input type="submit" name="submit"></div>
               </div>    
            <div class="tabal">
                <table class="tabal1" border="1px">
                    <tr>
                        <th>
                            <h3>ID</h3>
                        </th>
                        <th>
                            <h3>First Name</h3>
                        </th>
                        <th>
                            <h3>Last Name</h3>
                        </th>
                        <th>
                            <h3>contact</h3>
                        </th>
                        <th>
                            <h3>Gender</h3>
                        </th>
                        <th>
                            <h3>Date of Birth</h3>
                        </th>
                        <th>
                            <h3>Email</h3>
                        </th>
                        <th>
                            <h3>STD</h3>
                        </th>
                        <th>
                            <h3>password</h3>
                        </th>
                        <th>
                            <h3>adress</h3>
                        </th>
                        <th>
                            <h3>city</h3>
                        </th>    
                        <th>
                            <h3>update</h3>
                        </th>
                        <th>
                            <h3>delete</h3>
                        </th>
                    </tr>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['Id'];
                        $f_name = $row['F_Name'];
                        $l_name = $row['L_Name'];
                        $contact = $row['Contact'];
                        $gender = $row['Gender'];
                        $birth = $row['Birth'];
                        $email = $row['Email'];
                        $std = $row['Std'];
                        $password = $row['Password'];
                        $adress = $row['Adress'];     
                        $city = $row['City'];
                       
                        if (mysqli_num_rows($result) > 0) { ?>
                            <tr>
                                <td>
                                    <?php echo $id ?>
                                </td>
                                <td>
                                    <?php echo $f_name ?>
                                </td>
                                <td>
                                    <?php echo $l_name ?>
                                </td>
                                <td>
                                    <?php echo $contact ?>
                                </td>
                                <td>
                                    <?php echo $gender ?>
                                </td>
                                <td>
                                    <?php echo $birth ?>
                                </td>
                                <td>
                                    <?php echo $email ?>
                                </td>
                                <td>
                                    <?php echo $std ?>
                                </td>
                                <td>
                                    <?php echo $password ?>
                                </td>
                                <td>
                                    <?php echo $adress ?>
                                </td>
                             
                                <td>
                                    <?php echo $city ?>
                                </td> 
                                   <td class="update"><a href="update.php?updateid=<?php echo $id ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                    <td class="delete"><a href="delete.php?deleteid=<?php echo $id; ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>

                            </tr>

                        <?php } else {

                            echo " wrong";
                        } ?>

                    <?php } ?>
                </table>
                <table>
                    <tr class="num">
                      
                        <?php
                        $select = "select * from register";
                        $query = mysqli_query($connection, $select);

                        if (mysqli_num_rows($query) > 0) {
                            $total_records = mysqli_num_rows($query);
                            $limit = 3;
                            $total_page = ceil($total_records / $limit);
                            for ($i = 1; $i<=$total_page; $i++) {
                                echo '<li><a href="selected.php?no=' . $i . '">' . $i . '</a></li>';
                            }
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
        <!-- --------------------------------------------------------- -->
        </div>
        </div>
    </form>
</body>
</html>