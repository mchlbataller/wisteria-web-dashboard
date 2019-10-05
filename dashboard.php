<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
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
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Sign Out</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2 class="font-weight-light"> Hello Admin <?php
            session_start();
            echo $_SESSION["username"] . "!";
            ?>
        </h2>
        <h1 class="heartbeat text-center font-weight-bolder text-danger">
            We only have 2 days left!
        </h1>
        <p class="text-center">Submission of final game is on October 9, 2019 (Wednesday)</p>
    </div>


</body>
</html>