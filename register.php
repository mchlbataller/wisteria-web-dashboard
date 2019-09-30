<?php
require_once "assets/conn.php";
$i=0;
if(!empty($_POST["register-user"])) {
    /* Form Required Field Validation */
    if(!preg_match("/^[A-Za-z ]*$/",$_POST["firstName"]) || !preg_match("/^[A-Za-z ]*$/",$_POST["middleName"]) || !preg_match("/^[A-Za-z ]*$/",$_POST["lastName"]) )
					{
						$error_message[$i]="Only Letters and White Spaces are Allowed";
            $i++;
					}
      /* Email Validation */
    if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
          $error_message[$i]= "Invalid Email Address";
          $i++;
        }
    else {
      $email = $_POST["userEmail"];
    }

/*    foreach($_POST as $key=>$value) {
        if(empty($_POST[$key])) {
            $error_message = "All Fields are required";
            break;
        }
    }
    if(!isset($error_message)) {
        if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid Email Address";
        }
    }
*/
    if(!isset($error_message)) {
        $stmt = $conn->prepare("INSERT INTO users (user_name, first_name, last_name, middle_name, password, email) VALUES(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $username, $firstname, $lastname, $middlename, $password, $email);
        $username = $_POST['userName'];
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $middlename = $_POST["middleName"];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
        $email = $_POST["userEmail"];
        $stmt->execute();

        $success_message = "You have registered successfully!";
        echo $success_message;

    }
    else {
      foreach ($error_message as $key => $value) {
        echo $value."! <br>";
      }
      $username = $_POST['userName'];
      if(preg_match("/^[A-Za-z ]*$/",$_POST["firstName"]))
        {
          $firstname = $_POST["firstName"];
        }

      if(preg_match("/^[A-Za-z ]*$/",$_POST["lastName"]))
        {
          $lastname = $_POST["lastName"];
        }

      if(preg_match("/^[A-Za-z ]*$/",$_POST["middleName"]))
        {
          $middlename = $_POST["middleName"];
        }
    }
}
?>
