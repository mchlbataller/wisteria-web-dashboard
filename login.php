<?php
    require_once "assets/conn.php";
    session_start();
    if(isset($_POST["submit"]))
    {
      $user = $_POST["username"];
      $pw = $_POST["pw"];

      $query = $conn->query("select * from users where user_name='$user'");
      if(($query->num_rows) > 0)
      {
          $row = $query->fetch_assoc();


        if((password_verify($pw, $row['password'])) == true)
          {
            $_SESSION['wrong'] = false;
            $_SESSION['id'] = $row['id'];
            $_SESSION['first'] = $row['first_name'];
            $_SESSION['middle'] = $row['middle_name'];
            $_SESSION['last'] = $row['last_name'];
            $_SESSION['user'] = $row['user_name'];
            $_SESSION['email'] = $row['email'];
            header("location: game-lobby.php?login=success");
            exit();
          }
        else
        {
          $_SESSION['wrong'] = true;
          header("location: log-in-form.php?Wrong Password!");
          exit();
        }
      }
      else
      {
          $_SESSION['wrong'] = true;
          header("location: log-in-form.php?Please Try Again!");
          exit();

      }
    }
