<?php
require_once "./register.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REGISTER</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

        <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">REGISTER NOW!</button>

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">


                    <div class="container-fluid">

                        <div class="row">

                                <div class="col-md-6" style="background-color:  #C48CD6;">
                                    <div class="container-fluid">
                                            <H4>Wisteria Web Development Inc</H4>
                                                <div class="container">
                                                    <h3 id="newText">FOR NEW</h3>
                                                    <h4 id="begText">BEGINNINGS</h4>

                                                    <p id="honor">HONOR</p>
                                                    <p id="patience">PATIENCE</p>
                                                    <p id="exp">EXPLORATION</p>
                                                </div>
                                    </div>
                                </div>


                                <div class="col-md-6" style="background-color: white;">
                                        <header>GET STARTED</header>
                                    <form name="frmRegistration" method="post" action="register-form.php">
                                      <div class="form-group">

                                        <div class="success-message">
                                          <?php// if(!empty($success_message)) { if(isset($success_message)) echo $success_message; }?>
                                        </div>

                                        <div class="error-message">
                                          <?php//if(!empty($error_message)) { if(isset($error_message)) echo $error_message; } ?>
                                        </div>

                                            <div class=col>

                                                <div class="row">
                                                    <input type="text" class="form-control" name="firstName" placeholder="First Name" value="<?php if(isset($firstname)) echo $firstname; ?>">
                                                </div>

                                                <div class="row">
                                                    <input type="text" class="form-control" name="middleName" placeholder="Middle Name" value="<?php if(isset($middlename)) echo $middlename; ?>">

                                                </div>

                                                <div class="row">
                                                    <input type="text" class="form-control" name="lastName" placeholder="Last Name" value="<?php if(isset($lastname)) echo $lastname; ?>">
                                                </div>

                                                <div class="row">
                                                    <input type="text" class="form-control" name="userName" placeholder="Nickname" value="<?php if(isset($username)) echo $username; ?>">
                                                </div>

                                                <div class="row">
                                                    <input type="email" class="form-control" name="userEmail" placeholder="Email Address" value="<?php if(isset($email)) echo $email; ?>">
                                                </div>

                                                <div class="row">
                                                        <input type="password" class="form-control"name="password" placeholder="Password">
                                                </div>

                                                <div class="row">
                                                        <input type="submit" name="register-user" value="SUBMIT" class="btn btn-primary" id = "btn" value="SUBMIT">
                                                </div>

                                            </div>

                                </div>
                              </form>








                            </div>

                         </div>


                        </div>

            </div>
          </div>
        </div>




</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
