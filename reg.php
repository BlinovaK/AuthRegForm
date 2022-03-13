<?php
if ($_POST['passwordSU'] == $_POST['confPassword']) {
    if ($_POST['loginSU'] != "") {
        $sql = "SELECT login, email FROM users";
        $result = mysqli_query($link, $sql);
        while ($row = mysqli_fetch_array($result)) {
            if ($row['login'] == $_POST['loginSU']) {
                $login = true;
                break;
            }
            if ($row['email'] == $_POST['email']) {
                $email = true;
                break;
            }
        }
        if ($login) {
            echo "<script>alert('Такой логин уже зарегистрирован!')</script>";
        } else if ($email) {
            echo "<script>alert('Такой email уже зарегистрирован!')</script>";
        } else {
            $password = md5($_POST['passwordSU']);
            $sql = "INSERT INTO users (login, password, email) VALUES ('" . $_POST['loginSU'] . "','" . $password . "','" . $_POST['email'] . "')";
            mysqli_query($link, $sql);
            echo "<script>alert('Регистрация прошла успешно!')</script>";
        }
    }
} else {
    echo "<script>alert('Пароли не совпадают!')</script>";
}
