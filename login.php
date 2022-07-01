<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        ::placeholder{
            color: black !important;
            font-weight: bold !important;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="pageTitle">Login</title>
    <link rel="shortcut icon" href="images/SbitLogo.jpg" type="images/x-icon">  
    <link href="./CssFiles/bootstrap.css" rel="stylesheet">
    <link href="./CssFiles/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
</div>
    <div class="row">
        <a href="index.php"><img class="logo" src = "images/logo.jpg" style="border-radius:50px;margin-left: auto; margin-right: auto; display: block; margin-top: 20px; margin-bottom: 50px;"></a>
        <div id="formContainer" class="" style="float: none;margin: 0 auto;">
        <form id="login" name="login" title="login form" role="form" method="post" action="database/login.php">
                <br>
                <br>
                <h2 style="text-align: center;margin-top: 10px; color: #000376;" class="form-signin-heading">SIGN IN</h2>
                <div style="margin-left: 20px;margin-right: 20px;">
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Hall Ticket No" name="htno" id="htno" required="" value="" aria-label="Htno">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control medium-text-field" placeholder="Password" name="password" id="password" required="" value="" aria-label="HallTicket Number">
                     </div>
                        <div class="pull-right">
                            <button type="submit" name="login" value="login" class="btn btn-primary" id="loginBtn" aria-label="Login">Submit</button>&nbsp;&nbsp;
                        </div>
                        <div class="pull-left">
                        <div style="text-align:center;margin-top: 8px;font-size: medium;">
                        <a class="Signup" href="register.php" style="color:navy;">New User Register?</a>
    </div>
    </div>
                    </div>

                    
                </div>
                
            </form>
        </div>
    </div>
</div>
</body>
</html>