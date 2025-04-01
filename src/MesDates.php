<?php

/**
 * PHP version 8.0
 * Je suis un commentaire
 * 
 * @category Content
 * @package  Content
 * @author   Display Name <Thomas@example.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://insset.fr
 */

namespace UPJV;

/**
 * Class Date
 * 
 * Cette classe fournit des méthodes pour manipuler les dates.
 * 
 * @category Content
 * @package  Content
 * @author   Display
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://insset.fr
 */
class Date
{
    /**
     * Retourne la date de demain au format "d-m-Y".
     *
     * @return string JSON contenant la date de demain.
     */
    public function demain()
    {
        $demain = date("d-m-Y", strtotime("+1 day"));
        return json_encode(["demain" => $demain]);
    }
}
