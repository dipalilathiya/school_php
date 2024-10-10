<?php
include ("config.php");
if (isset($_POST["submit"])) {
    $search = $_POST["search"];

    $query = "select * from register1 where name like  '%$search%'";
    $result = mysqli_query($connection, $query);
} else if (isset($_GET["no"])) {
    $page_no = $_GET['no'];
    $limit = 2;
    $offset = ($page_no - 1) * $limit;
    $query = "select* from register1 limit $offset,$limit";
    $result = mysqli_query($connection, $query);

} else {
    $query = "select * from register1 ";
    $result = mysqli_query($connection, $query);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/teacher1.css">


    <!--  -->
    <link rel="stylesheet" href="css/all.min.css">
</head>

<body>
    <?php include ("sidebar.php") ?>

    <div class="box2">

        <input type="text" name="search">
        <input type="submit" name="submit">

        <div class="tabal">
            <table class="tabal1">
                <tr>
                    <th class="id">Id</th>
                    <th class="name">Name</th>
                    <th class="email">Email</th>
                    <th class="password">Password</th>
                    <th class="gender">Gender</th>
                    <th class="sub">Subject</th>
                    <th></th>

                </tr>
          
            <?php
            while ($row = mysqli_fetch_array($result)) {

                $id = $row['Id'];
                $name = $row['Name'];
                $email = $row['Email'];
                $password = $row['Password'];
                $gender = $row['Gender'];
                $subject = $row['Subject'];

                if (mysqli_num_rows($result) > 0) {

                    ?>
                    <table border="0" class="tabal2">

                        <td class="id"><?php echo $id ?></td>

                        <td><?php echo $name ?></td>

                        <td><?php echo $email ?></td>

                        <td><?php echo $password ?></td>

                        <td><?php echo $gender ?></td>

                        <td><?php echo $subject ?></td>
                          
                    </table>

                    <?php
                }
            }
            ?>



        </div>
    </div>

  </table>
    <!-- --------------------------------------------------------- -->
    </div>
    </div>

</body>

</html>
<?php
$select = "select * from register1 ";
$result = mysqli_query($connection, $select);
if (mysqli_num_rows($result) > 0) {
    $total_records = mysqli_num_rows($result);
    $limit = 2;
    $total_page = ceil($total_records / $limit);
    for ($i = 1; $i <= $total_page; $i++) {
        echo '<li><a href="teacher.php?no=' . $i . '">' . $i . '</a></li>';


    }
}

?>