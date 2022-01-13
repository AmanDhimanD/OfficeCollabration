<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMP LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color:rgba(192,192,192,0.3);">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Employee Panel</a>
            <form class="d-flex">
                <button class="btn btn-light" style="margin: 2px;"><a href="../index.php" style="text-decoration: none;">HOME</a></button>
            </form>
            <button type="button" class="btn btn-light"><a href="../login/login.php" style="margin: 40px; text-decoration: none;"> Go to Admin Panel</a></button>

        </div>
    </nav>
    <div style="margin-left: 120px;padding-top:100px">
        <h1>EMP Login</h1>
        <form name="f1" action="eauth.php" onsubmit="return validation()" method="POST">
            <p>
                <label for="exampleInputEmail1" class="form-label"> UserName: </label>
                <input type="text" id="user" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </p>
            <p>
                <label> Password: </label>
                <input type="password" id="pass" name="pass" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </p>
              
            <p>
                <input type="submit" id="btn" value="Login" type="button" class="btn btn-success" />
            </p>
        </form>
    </div>
</body>

</html>