<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>PROJECT </title>
</head>

<body style="background-color:rgba(192,192,192,0.3);">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Admin Panel</a>
            <form class="d-flex">
                <button class="btn btn-light" style="margin: 2px;"><a href=" index.php" style="text-decoration: none;">HOME</a></button>
            </form>

            <button type="button" class="btn btn-light"><a href="emp.php" style="margin: 40px; text-decoration: none;"> Go to Employee Panel</a></button>

        </div>
    </nav>
    <div class="container">

        <header>
            <form action="php/create-admin.php" method="POST">
                <h4 class="display-4 text-center">Update the data</h4>
                <div class="form-group">
                    <label for="exname">Name</label>
                    <input name="name" type="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputDes">Designation</label>
                    <input name="designation" type="designation" class="form-control" id="exampleInputDesignation" placeholder="Designation" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputBand">Band</label>
                    <input name="band" type="band" class="form-control" id="exampleInputBand" placeholder="Band" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputReporting">Reporting</label>
                    <input name="reporting" type="Reporting" class="form-control" id="exampleInputReporting" placeholder="Reporting" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputProject">Project</label>
                    <input name="project" type="project" class="form-control" id="exampleInputProject" placeholder="Project" required>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" id="call">Update</button>
            </form>
            </form>
        </header>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>