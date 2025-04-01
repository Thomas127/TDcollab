<?php
/**
 * PHP version 8.0
 * Je suis un commentaire
 * 
 * @category Content
 * @package  Content
 * @author   Display Name <Thomas@example.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     Insset.fr
 */
namespace UPJV;

/**
 * Class Date
 * 
 * @category Content
 * @package  Content
 * @author   Display Name <Thomas@example.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     Insset.fr
 */
class Date
{
    /**
     * Demain
     *
     * @return string
     */
    public function demain()
    {
        $demain = date("d-m-Y", strtotime("+1 day"));
        return json_encode(["demain" => $demain]);
    }
}
