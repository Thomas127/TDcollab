<?php

require_once __DIR__ . '/../src/MesDates.php';

use PHPUnit\Framework\Attributes\Test;
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

