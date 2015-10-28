<?php

namespace Nic\PhpDateBug\Tests;

use DateTime;
use PHPUnit_Framework_TestCase;

class DateTimeTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param string $dateString A date in YYYY-MM-DD format
     *
     * @test
     *
     * @dataProvider dataProvider
     */
    public function shouldCreateCorrectDate($dateString)
    {
        $dateTime = new DateTime($dateString);

        $this->assertSame($dateString, $dateTime->format('Y-m-d'));
    }

    /**
     * @return string[][]
     */
    public function dataProvider()
    {
        $dates = array(
            '1569-12-31',
            '1969-12-31',
            '1970-01-01',
            '2369-12-30',
            '2369-12-31',
            '2769-12-30',
            '2769-12-31',
            '3169-12-31',
            '3569-12-31',
        );

        return array_map(
            function ($date) {
                return array($date);
            },
            $dates
        );
    }
}
