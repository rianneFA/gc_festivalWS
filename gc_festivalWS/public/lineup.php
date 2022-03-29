<?php
require_once ('header.php');
require_once ('../src/databaseFunctions.php');

// Create connection
    $mysqli = db_connect();
 // Check connection
    if ($mysqli->connect_error)
    {
        die("Connection failed: " . $mysqli->connect_error);
    }
    $lineup = $mysqli->query("SELECT * FROM lineup");
?>

    <div class="page lineup">
        <div class="container">
            <h1>Line-up</h1>
            <div class="artists">
                <?php
                    foreach ($lineup as $artist)
                    {
                ?>
                <div class="artist">
                    <img src="<?php echo IMAGE_FOLDER . "/" . $artist['artistImage']; ?>" alt="">
                    <h2><?php echo $artist['artistName']; ?></h2>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>


<?php
require_once ('footer.php');


?>