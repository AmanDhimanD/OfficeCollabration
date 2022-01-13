<?php

    if(isset($_POST['submit'])){
        include "../connection.php";
        function valid($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $email = valid($_POST['email']);
        $password = valid($_POST['password']);

        $user_data = 'email'.$email. 'password= '.$password;

        $sql ="INSERT INTO `employee`(`email`, `pass`) VALUES ('$email', '$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:../admin.php");
        }
        else{
                echo 'Please Sure';
        }

}
else{
    header("location:admin.php");
}
