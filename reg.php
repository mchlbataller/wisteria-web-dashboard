<?php
if(!empty($_POST["register-user"])) {
    require_once "assets/conn.php";
    /* Form Required Field Validation */

    foreach($_POST as $key=>$value) {
        if(empty($_POST[$key])) {
            $error_message = "All Fields are required";
            break;
        }
    }
    /* Email Validation */
    if(!isset($error_message)) {
        if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid Email Address";
        }
    }
    if(!isset($error_message)) {
        $db_handle = new mysqli($host, $user, $pw, $db);
        $username = $_POST['userName'];
        $password = $_POST['password'];
        $firstname = $_POST["firstName"];
        $lastname = $_POST["lastName"];
        $middleName = $_POST["middleName"];
        $email = $_POST["userEmail"];
        $query = "INSERT INTO users (user_name, first_name, last_name, middle_name, password, email) VALUES('$username', '$firstname', '$lastname', '$middleName', '$password', '$email')";
        $result = $db_handle->query($query);
        if(!empty($result)) {
            $error_message = "";
            $success_message = "You have registered successfully!";
            unset($_POST);
        } else {
            $error_message = "Problem in registration. Try Again!";
        }
    }
}
?>
