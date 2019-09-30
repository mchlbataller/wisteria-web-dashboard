<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>GAME LOBBY</h1>
    <?= "You now have access to the game, ". $_SESSION['user']. "!";?>
    <br>
    <form action="game-lobby.php" method="post">
      <button type="submit" name="logout" value="logout" >Logout</button>
    </form>
  </body>
</html>

<?php
if(isset($_POST["logout"]))
  {
    header("location: log-in-form.php");
    exit();
  }

 ?>
