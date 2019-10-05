<?php
if(!empty($_POST["register-user"])) {
    require_once "assets/conn.php";
    session_start();
    /* Form Required Field Validation */
    foreach($_POST as $key=>$value) {
        if(empty($_POST[$key])) {
            die("All fields are required.");
            break;
        }
    }

    /* Email Validation */
    if(!isset($error_message)) {
        if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
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
        $query = "INSERT INTO users (username, first_name, last_name, middle_name, password, email) VALUES('$username', '$firstname', '$lastname', '$middleName', '$password', '$email')";
        $result = $db_handle->query($query);
        if(!empty($result)) {
            $error_message = "";
            $success_message = "You have registered successfully!";    
            unset($_POST);
            echo <<<END
                <script>
                    window.location.replace("index.php?reg=success");
                </script>
            END;
        } else {
            $error_message = "Problem in registration. Try Again!";
            echo <<<END
                <script>
                    window.location.replace("index.php?reg=error");
                </script>
            END;

        }
    }
}
?>