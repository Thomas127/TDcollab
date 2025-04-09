<?php

namespace test;

require_once __DIR__ . '/../src/MesDates.php';

use PHPUnit\Framework\TestCase;
use UPJV\Date;

/**
 * PHP version 8.0
 * Je suis un commentaire
 * @category Content
 * @package  Content
 * @author   Display Name <Thomas@example.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://insset.fr
 */

/**
  * Class Date
  * Cette classe fournit des méthodes pour manipuler les dates.
  * @category Content
  * @package  Content
  * @author   Display
  * @license  https://opensource.org/licenses/MIT MIT License
  * @link     https://insset.fr
  */

final class MesDatesTest extends TestCase
{
    /**
     * Teste la méthode demain() pour vérifier qu'elle retourne la date de demain
     * au format JSON.
     *
     * @return void
     */
    public function testDateFormat()
    {
        $date = new Date();
        $result = $date->demain();
        self::assertJsonStringEqualsJsonString(
            json_encode(["demain" => date("d-m-Y", strtotime("+1 day"))]),
            $result
        );
    }
}
