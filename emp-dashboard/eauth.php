<?php
include('connection.php');
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select *from `admin` where name = '$username' and pass = '$password' ";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count == 1) {
  // echo "<h1> Login successful $username</h1>";  
  echo "<body style='background-image: url('1.jpg');'><h1><center><p style='background-color:blue; color:white;text-align: center;border: 2px solid blue;'>Employee Pannel <a style='border:1.3px solid white; margin-left:800px;text-decoration:none;font-size:25px; color:white;' href='../index.php'>Home</a> <a  style='border:1.3px solid white;text-decoration:none;font-size:25px; color:white;' href='./emp.php'>Log Out</a></p></center>
            <center style='font-size:100px'>Welcome, <b style='color:red;'>$username</b></center>
                <div style='padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;'>
    </div>
    <dl style='display: flex;
  background-color: green;
  flex-direction: column;
  width: 100%;
  max-width: 700px;
  position: relative;
  padding: 20px;
  margin-left:420px;'>
  <dt style='align-self: flex-start;
  width: 100%;
  font-weight: 700;
  display: block;
  text-align: center;
  font-size: 1.2em;
  font-weight: 700;
  margin-bottom: 20px;
  margin-left: 10px;'>Status</dt>
  <dd >
    <span>
      Front-End: 88%
    </span>
  </dd>
  <dd>
    <span>
      Back-end : 45%
    </span>
  </dd>
  <dd >
    <span>
      Android Version : 4.4.1 2% 
    </span>
  </dd>
</dl>
<div>
    <center>   
    Employee Name: $username <br>
    Password : $password <br>
        Salary : Update Soon <br>
        DOB : 01/01/1999<br>
        Next Promotion : (in next project)<br>
        <br>
        <button><a herf='./feed.html'>Feedback For Updataion</a></button>
    </center>
</div>
</body>";
  // header("location:../emp-dashboard/innerPageLogin.php");
} else {
  echo "<h1> Login failed. Invalid username or password.</h1>";
}
