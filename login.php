<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>WWD, Inc.</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a href="index.html" class="navbar-brand font-weight-light">WWD Inc.</a>

        <!-- Toggler/collapsible Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav font-weight-bold">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">About Us</a>
                </li>
                <li class="nav-item bg-primary">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container main">
        <div class="login padded">
            <h4 class="text-center">Log In</h4><hr>
            <div class="text-center">
                <p class="text-white bg-danger">
                <?php
                if(isset($_GET['login']))
                    if($_GET['login'] == "error")
                        echo "Wrong username/password!";
                    else echo "Registration error. Please contact your system administrator.";
                ?>
                </p>
                <form method="post" action="login-process.php">
                    <div class="form-group">
                        Username:<br>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        Password:<br>
                        <input type="password" name="pw" placeholder="Password">
                    </div>
                    <input type="submit" class="btn btn-outline-primary submit">
                </form>

            </div>
        </div>
    </div>

</body>
</html>