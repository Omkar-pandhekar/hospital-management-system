<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#06aa5e" />
    <meta name="msapplication-navbutton-color" content="#06aa5e" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <title>Sign up | Basket ™</title>
    <link rel="shortcut icon" href="./st/images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="./st/css/styles.css" />
    <script src="./st/js/script.js" defer></script>
</head>

<body>
    <main class="card-container slideUp-animation">
        <div class="image-container">
            <a href="home.php">
                <h1 class="company" style="color:white">MEDIFLOW</h1>
            </a>

            <img src=" ./st/images/signUp.svg" class="illustration" alt="" />
            <p class="quote">Sign up today</p>
            <a href="#btm" class="mobile-btm-nav">
                <img src="./stuff/images/dbl-arrow.png" alt="" />
            </a>
        </div>
        <form method="POST" action="func.php">
            <div class="form-container slideRight-animation">
                <h1 class="form-header">Welcome Back !</h1>

                <div class="input-container">
                    <label for="f-name"></label>
                    <input type="text" name="email" required />
                    <span> Email ID</span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="l-name"></label>
                    <input type="text" name="password2" required />
                    <span> Password</span>
                    <div class="error"></div>
                </div>
                <div id="btm">
                    <button type="submit" class="submit-btn" id="inputbtn" name="patsub">
                        Login
                    </button>
                </div>
            </div>
        </form>
    </main>
</body>

</html>