<?php
require_once ('../config/config.php');
require_once('../config/database.php')
?>

    <!--  Start footer -->
    <footer>
        <div class="container">
            <div class="column column1">
                <h3>Contact</h3>
                <p>Adres: Graafschap College</p>
                <p>Telefoon: 06-12345678</p>
                <p>Email: john@doe.nl</p>
            </div>
            <div class="column column2">
                <h3>Links</h3>
                <ul class="footerMenu">
                    <li><a href="<?php echo PUBLIC_PATH;?>/">Home</a></li>
                    <li><a href="<?php echo PUBLIC_PATH;?>/tickets.php">Tickets</a></li>
                    <li><a href="<?php echo PUBLIC_PATH;?>/lineup.php">Lineup</a></li>
                    <li><a href="<?php echo PUBLIC_PATH;?>/registreren.php">Registreren</a></li>
                </ul>
            </div>
        </div>

    </footer>
    <!--  End footer -->
    </body>
</html>