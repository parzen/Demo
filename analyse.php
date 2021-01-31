<?php
require "header.php";
?>

<?php
    if (!isset($_SESSION['productId'])) {
        header("Location: index.php");
        exit();
    }
?>

        <!-- Main -->
        <section class="main py-4">
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
                                <li class="bg-primary">
                                    <img src="images/Button4.png"><a href="analyse.php">Analyse</a>
                                </li>
                                <li>
                                    <img src="images/Button5.png"><a href="#">Alarme</a>
                                </li>
                            </div>
                        </ul>
                    </nav>
                </div>
                <div class="main-content">
                    <div class="heading bg-primary">
                        Produkt HI329187HM
                    </div>
                    <div class="last">
                        <div class="chart-container">
                            <div class="text-center my-1">
                                <h4>Kumulierter Lastgang am Ausgang des Generators</h4>
                            </div>
                            <canvas id="chart-generator"></canvas>
                        </div>
                        <div class="leistungswerte">
                            <div class="text-center my-1">
                                <h5>Folgende Verbraucher wurden bisher vom Generator erkannt</h5>
                            </div>
                            <div class="container flex">
                                <div class="card">
                                    <h4>💡 Licht 1</h4>
                                    <p>2.000 Watt</p>
                                </div>
                                <div class="card">
                                    <h4>💡 Licht 2</h4>
                                    <p>3.000 Watt</p>
                                </div>
                                <div class="card">
                                    <h4>💡 Licht 3</h4>
                                    <p>5.000 Watt</p>
                                </div>
                                <div class="card">
                                    <h4>💡 Licht 4</h4>
                                    <p>5.000 Watt</p>
                                </div>
                                <div class="card">
                                    <h4>💡 Licht 5</h4>
                                    <p>7.500 Watt</p>
                                </div>
                                <div class="card">
                                    <h4>💡 Licht 6</h4>
                                    <p>3.500 Watt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tank">
                        <div class="chart-container">
                            <div class="text-center my-1">
                                <h4>Tankinhalt des Generators</h4>
                            </div>
                            <canvas id="chart-tank"></canvas>
                        </div>
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
    <script src="chart-generator.js"></script>
    <script src="chart-tank.js"></script>
    <script>
        function toggleMenu() {
            document.getElementById("dropdown-menu").classList.toggle("show");
        }
    </script>

</body>
</html>