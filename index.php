<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <form class="form signUp" method="POST">
        <div class="container">
            <h1>Sign up</h1>
            <label>Login</label>
            <input placeholder="Enter login" type="text" name="loginSU" required />
            <label>Email</label>
            <input placeholder="Enter email" type="text" name="email" required />
            <label>Password</label>
            <input placeholder="Enter password" type="password" name="passwordSU" required />
            <label>Confirm password</label>
            <input placeholder="Confirm password" type="password" name="confPassword" required />
            <div class="container-mini">
                <p class="consent">Consent to the processing of personal data</p>
                <input class="checkbox" type="checkbox" onchange="checkData()" />
            </div>
            <button class="btn" type="submit" disabled>Sign up</button>
            <div class="link-block">
                <p class="link">I already have an account.</p>
                <a onclick="signIn()">Sign In</a>
            </div>
        </div>
    </form>
    <form class="form signIn" style="display: none;" method="POST">
        <div class="container">
            <h1>Sign in</h1>
            <label>Login</label>
            <input type="text" placeholder="Enter login" name="loginSI" required />
            <label>Password</label>
            <input type="password" placeholder="Enter password" name="passwordSI" required />
            <button type="submit">Sign in</button>
            <div class="link-block">
                <p class="link">You don't have an account?</p>
                <a onclick="signUp()">Sign Up</a>
            </div>
        </div>
    </form>
    <script>
        function signUp() {
            document.querySelector(".signIn").style = "display: none;"
            document.querySelector(".signUp").style = ""
        }

        function signIn() {
            document.querySelector(".signUp").style = "display: none;"
            document.querySelector(".signIn").style = ""
        }

        function checkData() {
            let checkbox = document.querySelector(".checkbox")
            if (checkbox.checked) {
                document.querySelector(".btn").disabled = false;
            } else {
                document.querySelector(".btn").disabled = true;
            }
        }
    </script>
</body>

</html>

<?php
include("db.php");
include("reg.php");
include("auth.php");
?>