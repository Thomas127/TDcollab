<?php
/** 
 * Je suis un commentaire 
 * 
 * PHP version 8.0
 * 
 * @category Content
 * @package  Content
 * @author   Display Name <Thomas@example.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     Insset.fr
 */

require_once "src/MesDates.php";

// Affiche la version de PHP
echo 'Version de PHP : ' . phpversion() . "\n";

$objDate = new Date();
echo $objDate->demain();
