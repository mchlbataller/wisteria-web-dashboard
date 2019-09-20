<?php 
    require_once "assets/conn.php";
    session_start();
    $sql = new mysqli($host, $user, $pw, $db);

    // check the sql database if there are errors
    if($sql->connect_error)
        die("Access Error: " . $sql->connect_error);

    $user = $_POST["username"];
    $pw = $_POST["pw"];

    $query = $sql->query("select * from users where username='$user' and password='$pw'");
    
    if($query->num_rows > 0)
    {
        echo "You now have access to the game.";
    }
    else
    {
        $_SESSION['wrong'] = true;
        echo <<<END
            <script>
                window.location.replace("/");
            </script>
        END;
    }