<?php
require_once ('header.php');
require_once ('../src/userFunctions.php');

$newUser = null;
if(isset($_POST['register']))
{
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newUser = registerUser($firstname, $lastname, $email, $password);
}

?>

    <div class="page registreren">
        <div class="container">
            <h1>Registreren</h1>
            <?php if($newUser === 1) { ?>
                <p>Nieuwe gebruiker succesvol toegevoegd!</p>
            <?php } else { ?>
            <form action="#" method="post">
                <div class="inputRow">
                    <label for="firstName">Voornaam</label>
                    <input type="text" name="firstName">
                </div>
                <div class="inputRow">
                    <label for="lastName">Achternaam</label>
                    <input type="text" name="lastName">
                </div>
                <div class="inputRow">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="inputRow">
                    <label for="password">Wachtwoord</label>
                    <input type="password" name="password">
                </div>
                <div class="inputRow">
                    <label for="register">Registreer</label>
                    <input type="submit" value="Registreer" name="register">
                </div>
            </form>
            <?php } ?>
        </div>
    </div>


<?php
require_once ('footer.php');