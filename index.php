<?php
require "header.php";
?>

        <!-- Showcase -->
        <section class="showcase">
            <div class="container grid">
                <div class="showcase-text">
                    <h1>Mit der richtigen Energie
                        durch den Tag</h1>
                    <p>Kepau überzeugt mit Zuverlässigkeit und Qualität.<br>
                        Entscheiden Sie sich noch heute für ausfallsichere Versorgungslösungen.</p>
                </div>

                <div class="showcase-form card">
                    <form action="includes/try-serialnumber.inc.php" name="try-serialnumber" id="try-serienummer" method="post">
                        <h2>Neues Produkt?</h2>
                        <p>Bitte geben Sie hier Ihre Seriennummer ein.</p>
                        <div class="form-control">
                            <input type="text" name="try-serialnumber" placeholder="Seriennummer" maxlength="20" required>
                        </div>
                        <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == 'serialNotFound') {
                                    echo '<p class="alert-error"><i class="fas fa-exclamation-triangle"></i> Die eingegebene Seriennummer ist ungültig!</p>';
                                } else if ($_GET['error'] == 'try-emptyfields') {
                                    echo '<p class="alert-error"><i class="fas fa-exclamation-triangle"></i> Bitte füllen Sie die Felder aus!</p>';
                                }
                            }
                            if (isset($_GET['success'])) {
                                if ($_GET['success'] == 'serialFound') {
                                    echo '<p class="alert-success">Die eingegebene Seriennummer wurde gefunden!</p>';
                                }
                            }
                        ?>
                        <input type="submit" name="try-serialnr-submit" value="Seriennummer prüfen" class="btn btn-secondary">
                    </form>
                    <form action="includes/login.inc.php" name="login" id="login" method="post">
                        <h2>Produkt bereits registriert?</h2>
                        <p>Nutzen Sie als Login-Daten die Seriennummer Ihres Gerätes und das Passwort aus der
                            Registrierungs-SMS / dem Registrierungs-Anruf.</p>
                        <div class="form-control">
                            <input type="text" name="serialnumber" placeholder="Seriennummer" maxlength="20" required>
                        </div>
                        <div class="form-control">
                            <input type="text" name="pwd" placeholder="SMS/Anruf-Passwort" maxlength="4" required>
                        </div>
                        <?php
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == 'wrongUserOrPwd') {
                                    echo '<p class="alert-error"><i class="fas fa-exclamation-triangle"></i> Falsche Seriennummer oder Passwort!</p>';
                                } else if ($_GET['error'] == 'emptyfields') {
                                    echo '<p class="alert-error"><i class="fas fa-exclamation-triangle"></i> Bitte füllen Sie die Felder aus!</p>';
                                }
                            }
                        ?>
                        <input type="submit" name="login-submit" value="Einloggen" class="btn btn-secondary">
                    </form>
                </div>
            </div>
        </section>

        <!-- Stats -->
        <section class="stats">
            <div class="container">
                <h3 class="stats-heading text-center my-1">
                    Willkommen bei den größten Anbieter aus Wildeshausen!
                </h3>

                <div class="grid grid-3 text-center my-4">
                    <div>
                        <i class="fas fa-users fa-3x"></i>
                        <h3>349.405</h3>
                        <p class="text-secondary">Kunden</p>
                    </div>
                    <div>
                        <i class="fas fa-bolt fa-3x"></i>
                        <h3>15.900 Watt</h3>
                        <p class="text-secondary">Maximale Leistung</p>
                    </div>
                    <div>
                        <i class="fas fa-cogs fa-3x"></i>
                        <h3 id="daysGone">1.304</h3>
                        <p class="text-secondary">Tage ohne Ausfälle</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features -->
        <section class="features bg-primary my-2 py-2">
            <div class="container grid grid-3">
                <div class="feature m-1 p-1">
                    <img src="images/Leistung.jpg" alt="">
                    <h2>Leistung</h2>
                    <p>Unsere Produkte liefern die passende Leistung für Ihre Anwendung.</p>
                    <a href="#">> Weitere Details</a>
                </div>
                <div class="feature m-1 p-1">
                    <img src="images/Ausdauer.jpg" alt="">
                    <h2>Ausdauer</h2>
                    <p>Auch in anspruchsvollen Situationen voll bei der Sache.</p>
                    <a href="#">> Weitere Details</a>
                </div>
                <div class="feature m-1 p-1">
                    <img src="images/Stock.png" alt="">
                    <h2>Zuverlässigkeit</h2>
                    <p>Vertrauen ist unser Qualitätsanspruch.</p>
                    <a href="#">> Weitere Details</a>
                </div>
            </div>
        </section>

        <!-- Bestseller -->
        <section class="bestseller">
            <div class="container">
                <h4 class="md my-2">
                    <img src="images/LogoSmall.png" alt=""> Bestseller
                </h4>
                <div class="text-center">
                    <h1>T-800 H</h1>
                    <h2>DER MOBILE STROMGENERATOR</h2>
                    <hr>
                </div>
                <div class="generator grid grid-3">
                    <img src="images/Generator.png" alt="" class="px-1">
                    <div class="data1 px-1">
                        <div class="text-secondary">
                            Technische Daten
                        </div>
                        Generator: Synchron<br>
                        Schutzart: IP23M<br>
                        Maximalleistung: 10.000 W / 230 V<br>
                        Nennspannung: 230 V<br>
                        Nennstrom: 43,5 A<br>
                        Frequenz: 50 Hz
                    </div>
                    <div class="data2 px-1">
                        Bauart: 4 Takt luftgekühlt<br>
                        Kraftstoff: Diesel<br>
                        Tankinhalt (Volumen): 15 Liter<br>
                        Leistungsfaktor: 1<br>
                        Leistungsklasse: G1
                    </div>
                </div>
            </div>
            <div class="container flex">
                <div class="card bg-none">
                    <img src="images/247.png" alt="">
                    <h4>24h Support</h4>
                </div>
                <div class="card bg-none">
                    <img src="images/SmartHome.png" alt="">
                    <h4>Smart Monitoring</h4>
                </div>
                <div class="card bg-none">
                    <img src="images/Technik.png" alt="">
                    <h4>Zuverlässige Technik</h4>
                </div>
                <div class="card bg-none">
                    <img src="images/Garantie.png" alt="">
                    <h4>Zufriedenheitsarantie</h4>
                </div>
            </div>
        </section>
    </div>

    <section class="rating bg-light py-2">
        <div class="container">
            <h3>Das sagen unsere Kunden.</h3>
            <img src="images/SterneBewertung.png" alt="">
            <p>Kundenerfahrung vom 01.02.2020<br>
                "Sehr modern und solide Verarbeitung. Gerne wieder." 5/5</p>
            <a href="#">> 534 weitere Kundenbewertungen</a>
        </div>
    </section>

    <!-- Footer -->
    <?php
    require "footer.php"
    ?>

    <script>
        function toggleLogin() {
            document.getElementById("serienummer").classList.toggle("show");
            document.getElementById("login").classList.toggle("show");
            document.getElementById("serienummer").classList.toggle("hidden");
            document.getElementById("login").classList.toggle("hidden");
        }

        daysGone();
        function daysGone() {
            var one = new Date(2020, 00, 24);
            var two = new Date();

            var millisecondsPerDay = 1000 * 60 * 60 * 24;
            var millisBetween = two.getTime() - one.getTime();
            var days = millisBetween / millisecondsPerDay;

            document.getElementById("daysGone").innerHTML = Math.floor(days);
        }
    </script>

</body>
</html>