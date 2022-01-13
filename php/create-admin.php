<?php

if (isset($_POST['submit'])) {
    include "../connection.php";
    function valid($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = valid($_POST['name']);
    $email = valid($_POST['email']);
    $password = valid($_POST['password']);
    $designation = valid($_POST['designation']);
    $band = valid($_POST['band']);
    $reporting = valid($_POST['reporting']);
    $project = valid($_POST['project']);

    $user_data = 'name' . $name . 'email' . $email . 'password= ' . $password . 'designation=' . $designation . 'band=' . $band . 'reporting=' . $reporting . 'project=' . $project;

    $sql = "INSERT INTO `admin`(`name`,`email`, `pass`,`designation`,`band`,`reporting`,`project`) VALUES ('$name','$email', '$password','$designation','$band','$reporting', '$project')";
    $result = mysqli_query($conn, $sql);
    if (($result)) {
        header("location:../admin-dashboard/dashboard.php");
    } else {
        echo 'Please Sure';
    }
} else {
    header("location:admin.php");
}
