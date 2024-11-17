<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jokiin.Aja | Login-Register</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="css/app.css">

  </head>
  <body>

    <div class="login-box">
        <div class="lb-header">
            <a href="#" class="active" id="login-box-link">Login</a>
            <a href="/register" id="signup-box-link">Sign Up</a>
        </div>
        <form method="POST" action="/login" class="email-login">
            @csrf
            <div class="u-form-group">
                <input type="email" name="email" placeholder="Email" required/>
            </div>
            <div class="u-form-group">
                <input type="password" name="password" placeholder="Password" required/>
            </div>
            <div class="u-form-group">
                <button type="submit">Log in</button>
            </div>
            <div class="u-form-group">
                <a href="#" class="forgot-password">Forgot password?</a>
            </div>
        </form>
    </div>

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>

    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>

    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>

    <!-- Main Script -->
    <!-- <script src="js/main.js"></script> -->
    <script src="js/app.js"></script>
  </body>
</html>
