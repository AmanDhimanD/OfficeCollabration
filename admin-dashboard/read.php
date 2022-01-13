<?php
    include "../connection.php";

    $sql = "select * from admin order by Sno asc";
    $result = mysqli_query($conn,$sql);


?>