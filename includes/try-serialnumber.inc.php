<?php

if (isset($_POST['try-serialnr-submit'])) {
    $seriennummer = $_POST['try-serialnumber'];

    $seriennummerDB = "HI329187HM";

    if (empty($seriennummer)) {
        header("Location: ../index.php?error=try-emptyfields");
        exit();
    } else {
        if ($seriennummer == $seriennummerDB) {
            header("Location: ../index.php?success=serialFound");
            exit();
        } else {
            header("Location: ../index.php?error=serialNotFound");
            exit();
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}
