<?php
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/MesDates.php';
use UPJV\Date;

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

