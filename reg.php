<?php
if ($_POST['passwordSU'] == $_POST['confPassword']) {
} else {
    echo "<script>alert('Пароли не совпадают')</script>";
}
