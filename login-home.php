<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container" id="main">
        <div class="sign-up">
            <form method="post" action="register.php">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <p>Or Use Your Email For Register</p>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="pswd" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="sign-in">
            <form method="post">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fa-brands fa-linkedin"></i></a>
                </div>
                <p>Or Use Your Account</p>  
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="pswd" placeholder="Password">
                <a href="#">Forgot Your password?</a>
                <button name="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To Get Connected with Us Please login with your personal info</p>
                    <button id="signIn">Sign In</button>
                </div>
                <div class="overlay-right">
                    <h1>Hii There!</h1>
                    <p>Enter your Personal Details and Start Journey with us </p>
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>