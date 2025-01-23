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
    <script>
        var check = function() {
            if (
                document.getElementById("password").value ==
                document.getElementById("cpassword").value
            ) {
                document.getElementById("message").style.color = "#5dd05d";
                document.getElementById("message").innerHTML = "Matched";
            } else {
                document.getElementById("message").style.color = "#f55252";
                document.getElementById("message").innerHTML = "Not Matching";
            }
        };

        function alphaOnly(event) {
            var key = event.keyCode;
            return (key >= 65 && key <= 90) || key == 8 || key == 32;
        }

        function checklen() {
            var pass1 = document.getElementById("password");
            if (pass1.value.length < 6) {
                alert("Password must be at least 6 characters long. Try again!");
                return false;
            }
        }
    </script>
</head>

<body>
    <main class="card-container slideUp-animation">
        <div class="image-container">
            <a href="home.php">
                <h1 class="company" style="color:white">MEDIFLOW</h1>
            </a>

            <img src="./st/images/signUp.svg" class="illustration" alt="" />
            <p class="quote">Sign up today</p>
            <a href="#btm" class="mobile-btm-nav">
                <img src="./st/images/dbl-arrow.png" alt="" />
            </a>
        </div>
        <form action="func2.php" method="post">
            <div class="form-container slideRight-animation">
                <h1 class="form-header">Get started</h1>

                <div class="input-container">
                    <label for="f-name"></label>
                    <input type="text" name="fname" id="fname" onkeydown="return alphaOnly(event);" required />
                    <span> First name </span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="l-name"></label>
                    <input type="text" name="lname" id="lname" name="lname" onkeydown="return alphaOnly(event);" required />
                    <span> Last name </span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="mail"> </label>
                    <input type="email" id="mail" name="email" required />
                    <span> E-mail </span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="phone"> </label>
                    <input type="tel" id="phone" minlength="10" maxlength="10" name="contact" required />
                    <span>Phone</span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="user-password"></label>
                    <input type="password" class="user-password" id="password" name="password" onkeyup="check();" required />
                    <span>Password</span>
                    <div class="error"></div>
                </div>

                <div class="input-container">
                    <label for="user-password-confirm"></label>
                    <input type="password" class="password-confirmation" id="cpassword" name="cpassword" onkeyup="check();" required />
                    <span> Confirm Password </span>
                    <div class="error"></div>
                </div>
                <div class="input-container">
                    <input type="radio" name="gender" value="Male" checked />
                    <span>Male</span>
                    <div class="error"></div>
                </div>
                <div class="input-container">
                    <input type="radio" name="gender" value="Female" />
                    <span>Female</span>
                    <div class="error"></div>
                </div>

                <div id="btm">
                    <button type="submit" class="btnRegister" name="patsub1" onclick="return checklen();">
                        Create Account
                    </button>
                    <p class="btm-text">
                        Already have an account..?
                        <a href="index1.php"><span class="btm-text-highlighted"> Log in</span></a>
                    </p>
                </div>
            </div>
        </form>
    </main>
</body>

</html>