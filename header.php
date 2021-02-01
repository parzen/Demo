<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/style.css">
    <title>KEPAU Generatoren</title>

    <?php
    if (isset($_SESSION['productId'])) {
        echo '<script type="text/javascript" charset="UTF-8"
                src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
              <script type="text/javascript" charset="UTF-8"
                src="chartjs-plugin-annotation-0.5.7/chartjs-plugin-annotation.js"></script>';
    }
    ?>
</head>

<body>
    <div class="content">
        <!-- Header -->
        <div class="header">
            <div class="container flex py-2">
                <a href="index.php"><img src="images/Logo.png" alt=""></a>
                <?php
                if (isset($_SESSION['productId'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit" class="btn btn-secondary">Logout</button>
                     </form>';
                }
                ?>
            </div>
        </div>