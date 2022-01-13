<?php

    if(isset($_GET['Sno'])){
        include "connection.php";
    function valid($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

        $sno = valid($_GET['Sno']);

        // $sql = "update INTO `admin` where sno = '$sno' (`name`,`email`, `pass`,`designation`,`band`,`reporting`,`project`) VALUES ('$name','$email', '$password','$designation','$band','$reporting', '$project')";

        $sql = "UPDATE `admin` SET `name`='[$name]',`email`='[$email]',`pass`='[$password]',`designation`='[$designation]',`band`='[$band]',`reporting`='[$reporting]',`project`='[$project]' WHERE Sno= $Sno";

        $result = mysqli_query($conn,$sql);
        if($result){
            header("Location: ./update.php");
            echo "Succesfull !";
        }
        else{
            header("./index.html");
            echo "NO NO NO";
        }
    }
    else{
        header("Location: ./update.php");
    }

?>