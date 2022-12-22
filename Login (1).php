<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <header>
        <title>Log In Page</title>
        <style>
            body{
                background-image: url('background.webp');
                background-repeat: no-repeat;
                background-size: 120%;
            }
        </style>
        <link rel="stylesheet" href="LoginCss2.css">
    </header>

    <body class="scroll">
    <form method="post" action="Login (1).php">
    <?php include('errors.php'); ?>
        <div class="header">
            <div class="left-header">
                <div>
                    <img class="logo" src="icons.png" alt="Kopi Taim">
                </div>
            </div>
            <div class="middle-header">
                <b class="brand-name" >Kopi Taim</b>
            </div>
            <div class="right-header">
                <button class="signup-button" onclick="document.location='SIGNUPCONFIRM.html'">
                    Sign Up
                </button>
                <button class="help-button" onclick="document.location='help.html'">
                    Help
                </button>
            </div>    
        </div>

        <div class="second-body">
            <div class="left-body">

            </div>
            <div class="middle-body">
                <div class="form-background" style="background-color: rgb(219, 163, 59);">     
                    <div class="login-name">
                        <h1>Log In</h1>
                    </div> 
                    <div class="username">
                        <label>Username :</label>
                        <div class="input text">
                            <input name="username"
                            class="form-control"
                            id="usernameInput"
                            placeholder=" Username"
                            required="required"
                            maxlength="20"
                            type="text">
                            <br>
                        </div>
                    </div>
                    <div class="password">
                        <div class="input password">
                            <div class="password-text">
                                <label>Password :</label>
                            </div>
                            <input name="password"
                            class="form-control"
                            id="passwordinput"
                            placeholder=" Password"
                            required="required"
                            maxlength="20"
                            type="password">
                        </div>
                    </div>
                    <div class="password-button">
                        <button class="password-submit" type="submit" name="login_user">Log In</button>
                    </div>
                </div>       
            </div>
            <div class="right-body">

            </div>
        </div>
        </div>
        <div id="display" class="clock" onload="showTime()">
        </div>
    </form>
    </body>
</html>