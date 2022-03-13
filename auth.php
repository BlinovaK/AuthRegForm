<?php
$sql = "SELECT login,password FROM users";
$result = mysqli_query($link, $sql);
$password = md5($_POST['passwordSI']);
if ($_POST['loginSI'] != "") {
    while ($row = mysqli_fetch_array($result)) {
        if ($row['login'] == $_POST['loginSI'] && $row['password'] == $password) {
            $signIn = true;
            break;
        }
    }
    if ($signIn) {
        echo "<script>alert('Вход выполнен успешно!')</script>";
    } else {
        echo "<script>alert('Проверьте логин и пароль!')</script>";
    }
}
