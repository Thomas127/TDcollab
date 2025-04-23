<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $name = strtoupper($name);
    echo "<a id='verif'>BONJOUR $name</a>";
} else {
    echo "Erreur : le formulaire n'a pas été soumis.";
}