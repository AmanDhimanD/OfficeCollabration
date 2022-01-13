<?php

    if(isset($_GET['sno'])){
        include "connection.php";
        function valid($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $sno = valid($_GET['sno']);

        $sql = "DELETE FROM `admin` WHERE sno= $sno";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo ("Succesfull !!");
            header("Location: admin-dashboard/dashboard.php");
        }
        else{
            header("Location: admin-dashboard/dashboard.php");
            
        }
    }
    else{
        header("Location: admin-dashboard/dashboard.php");
    }
