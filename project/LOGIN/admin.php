<?php
    require('../connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
</head>
<body>
    <div class="top"><p>Waste Food Management & Donation</p></div>
    <h2>WELCOME ADMIN,</h2>
    <h3>Donors List</h3>
    <div>
        <table class = "blueTable">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Category</th>
                    <th>Address</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select * from food";
                    $res = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($res)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $mobile= $row['mobile'];
                        $category=$row['category'];
                        $address=$row['address'];
                        $message=$row['message'];
                        echo"
                        <tr>
                            <td>$id</td>
                            <td>$name</td>
                            <td>$mobile</td>
                            <td>$category</td>
                            <td>$address</td>
                            <td>$message</td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>