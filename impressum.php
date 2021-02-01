<?php
require "header.php";
?>

        <!-- Main -->
        <section class="main py-4">
        <?php
            if (isset($_SESSION['productId'])) {
                echo'
                <div class="container grid">
                    <div class="navbar">
                        <nav>
                            <ul>
                                <li id="menu" onclick="toggleMenu()">
                                    <img src="images/Button1.png"><a href="#">Menü</a>
                                </li>
                                <div id="dropdown-menu" class="dropdown-content">
                                    <li>
                                        <img src="images/Button2.png"><a href="#">Home</a>
                                    </li>
                                    <li>
                                        <img src="images/Button3.png"><a href="#">Verbindung</a>
                                    </li>
                                    <li>
                                        <img src="images/Button4.png"><a href="analyse.php">Analyse</a>
                                    </li>
                                    <li>
                                        <img src="images/Button5.png"><a href="#">Alarme</a>
                                    </li>
                                </div>
                            </ul>
                        </nav>
                    </div>
                    ';
            } else {
                echo '<div class="container grid no-navbar">';
            }
            ?>
                <div class="main-content">
                    <div class="heading bg-primary">
                        Impressum
                    </div>
                    <div class="text-center my-1">
                        <h4 class="my-2">Angaben gem. § 5 TMG</h4>
                        <h4>Kontakt:</h4>
                        <p>Hidden Industries GmbH<br>
                            Sophienstraße 40<br>
                            38118 Braunschweig<br>
                            Vertreten durch die Geschäftsführer Rieke Muuß, Felix Muuß, Fridolin Muuß, Stephan
                            Diekmann,<br>
                            Hauke Loges, Ricardo Brodale und Daniel Unger<br>
                            Amtsgericht Braunschweig HRB 206864</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <?php
    require "footer.php"
    ?>
    
    <!-- Scripts -->
    <script>
        function toggleMenu() {
            document.getElementById("dropdown-menu").classList.toggle("show");
        }
    </script>
</body>

</html>