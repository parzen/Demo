<?php

if (isset($_POST['login-submit'])) {
    $seriennummer = $_POST['serialnumber'];
    $password = $_POST['pwd'];

    $seriennummerDB = "HI329187HM";
    $passwordDB = "7983";

    if (empty($seriennummer) || empty($password)) {
        header("Location: ../index.php?error=emptyfields");
        exit();
    } else {
        if ($password == $passwordDB && $seriennummer == $seriennummerDB) {
            session_start();
            $_SESSION['productId'] = "HI329187HM";

            header("Location: ../analyse.php");
            exit();
        } else {
            header("Location: ../index.php?error=wrongUserOrPwd");
            exit();
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
