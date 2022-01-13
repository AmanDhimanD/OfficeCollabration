<?php include "read.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Admin || Dashboard</title>
</head>

<body style="background-color:rgba(192,192,192,0.3);">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Admin Panel</a>
            <form class="d-flex">
                <button class="btn btn-light" style="margin: 2px;"><a href="../admin.php" style="text-decoration: none;">HOME</a></button>
            </form>
            <button type="button" class="btn btn-light"><a href="../emp-dashboard/emp.php" style="margin: 40px; text-decoration: none;"> Go to Employee Panel</a></button>

        </div>
    </nav> <br>
    <div>
        <a href="../index.php" class="btn btn-primary" style="margin:0px 0px 50px 1450px ">Log Out</a></button>
    </div><br> <br>
    <div class="container">
        <div class="box">
            <?php if (mysqli_num_rows($result)) {
            ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Band</th>
                            <th scope="col">Reporting</th>
                            <th scope="col">Allocted Project</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        while ($rows = mysqli_fetch_assoc($result)) {
                            $i++;
                        ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td><?php echo $rows['name']; ?></td>
                                <td><?= $rows['email']; ?></td>
                                <td><?php echo $rows['pass']; ?></td>
                                <td><?php echo $rows['designation']; ?></td>
                                <td><?php echo $rows['band']; ?></td>
                                <td><?php echo $rows['reporting']; ?></td>
                                <td><?php echo $rows['project']; ?></td>
                                <td><a href="../update.php?sno=<?= $rows['Sno'] ?>" class=" btn btn-success">Update</a><a href="../delete.php?sno=<?= $rows['Sno'] ?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } ?>
            <div class="link-right">
                <a href="../admin.php" class="btn btn-outline-warning">Add</a>
            </div>
        </div>
    </div>
</body>

</html>

</html>