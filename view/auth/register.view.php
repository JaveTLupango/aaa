<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Register &mdash; Ken's</title>            
    <?php include 'include/generalcss.php'; ?> 
<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="<?php echo $url ?>/assets/image/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="" class="needs-validation" >
                            <div class="form-group">
                                    <label for="email">First Name</label>
                                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your username
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Last Name</label>
                                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your username
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Middle Name</label>
                                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your username
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your username
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Username</label>
                                    <input id="username" type="username" class="form-control" name="username" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your username
                                    </div>
                                </div>
                                <div class="form-group">         
                                    <label for="email">Password</label>                          
                                    <input id="password" type="password" class="form-control" name="passwordval" tabindex="2" required>
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                    Register
                                    </button>
                                </div>
                                <?php
                                    if (isset($_POST['username']) && isset($_POST['passwordval']))
                                    {

                                        include './controller/authController.php';
                                        $username = $_POST['username'];
                                        $password =  $_POST['passwordval'];                                        
                                        $authCon = new AuthController;
                                        $lr = $authCon->loginProcess($username,$password);
                                        if ($lr == "success")
                                        {
                                            echo '<div class="form-group"><button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">'. $lr .'</button></div>';
                                            header("refresh:3; url=../home/profile");
                                        }
                                        else
                                        {
                                             echo '<div class="form-group"><button type="submit" class="btn btn-danger btn-lg btn-block" tabindex="4">Please try again. '.$lr.'</button></div>';
                                        }
                                    }
                                ?>
                            </form>                          
                            <div class="mt-5 text-muted text-center">
                                Don't have an account? <a href="register">Create One</a>
                            </div>
                        </div>
                    </div>                  
                    <?php include 'include/copyright.php'; ?>
                </div>
            </div>
        </div>
    </section>
</div>
    <?php include 'include/generalcss.php'; ?> 
</body>
</html>