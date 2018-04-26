<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Daily UI - Day 1 Sign In</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/animate.css">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
<div class="container">
    <div class="top">
        <h1 id="title" class="hidden"><span id="logo">Game <span>guide</span></span></h1>
    </div>
    <div  class="login-box animated fadeInUp" >
        <form method="post" action="login.php">
            <div class="box-header">

                <h2>Log In </h2>

            </div>
            <label for="Email">Email</label>
            <br/>

            <input type="email" id="Email" name ="email" pattern=".{6,}" placeholder="@Hotmail.com">
            <br/>
            <label for="password">Password</label>
            <br/>
            <input type="password" id="password" name="pass" pattern=".{6,}">
            <br/>
            <button type="submit" name ="submit">Sign In</button>
            <br/>

            <a href="Forgot%20Password.html"><p class="small">Forgot your password?</p></a>
            <br/>
            <a href="Register.html"><p class="small">Register now.</p></a>
            <p></p>
        </form>
    </div>
</div>



</body>

<script>
    /*$(document).ready(function () {
        $('#logo').addClass('animated fadeInDown');
        $("input:text:visible:first").focus();
    });
    $('#username').focus(function() {
        $('label[for="username"]').addClass('selected');
    });
    $('#username').blur(function() {
        $('label[for="username"]').removeClass('selected');
    });
    $('#password').focus(function() {
        $('label[for="password"]').addClass('selected');
    });
    $('#password').blur(function() {
        $('label[for="password"]').removeClass('selected');
    });*/
</script>

</html>
