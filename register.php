<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="pageTitle">Register</title>
    <link rel="shortcut icon" href="images/SbitLogo.jpg" type="images/x-icon">  
    <link href="./CssFiles/bootstrap.css" rel="stylesheet">
    <link href="./CssFiles/styles.css" rel="stylesheet">
    <style>
        ::placeholder{
            color: black !important;
            font-weight: bold !important;
        }
    </style>
</head>
<body>
<div class="container">
</div>
    <div class="row">
        <img class="logo" src = "images/logo.jpg" style="border-radius:50px;margin-left: auto; margin-right: auto; width: 50%; display: block; margin-top: 20px; margin-bottom: 50px;">
        <div id="formContainer" class="" style="float: none;margin: 0 auto;">
        <form id="login" name="login" title="login form" role="form" method="post" action="database/registration.php">
                <br>
                <br>
                <h2 style="text-align: center;margin-top: 10px; color: #000376;" class="form-signin-heading">Register</h2>
                <div style="margin-left: 20px;margin-right: 20px;">
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Hall Ticket No" name="htno" id="email" required="" value="" aria-label="HtNo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Name" name="name" id="htno" required="" value="" aria-label="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control medium-text-field" placeholder="Email" name="email" id="htno" required="" value="" aria-label="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Branch" name="branch" id="htno" required="" value="" aria-label="Branch">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control medium-text-field" placeholder="Phone" name="phno" id="htno" required="" value="" aria-label="Phone Number">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control medium-text-field" placeholder="Percentage" name="percentage" id="htno" required="" value="" aria-label="Percentage">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control medium-text-field" placeholder="Password" name="password" id="htno" required="" value="" aria-label="Password">
                    </div>
                        <div class="pull-right">
                            <button type="submit" name="register" value="register" class="btn btn-primary" id="loginBtn" aria-label="Login">Submit</button>&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>