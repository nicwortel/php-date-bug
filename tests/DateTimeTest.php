<?php

namespace Nic\PhpDateBug\Tests;

use DateTime;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class DateTimeTest extends TestCase
{
    /**
     * @param string $dateString A date in YYYY-MM-DD format
     *
     * @dataProvider dataProvider
     */
    public function testShouldCreateCorrectDateTimeObject($dateString)
    {
        $dateTime = new DateTime($dateString);

        $this->assertSame($dateString, $dateTime->format('Y-m-d'));
    }

    /**
     * @param string $dateString A date in YYYY-MM-DD format
     *
     * @dataProvider dataProvider
     */
    public function testShouldCreateCorrectDateTimeImmutableObject($dateString)
    {
        if (!class_exists('DateTimeImmutable')) {
            $this->markTestSkipped('Class DateTimeImmutable does not exist');
        }

        $dateTime = new DateTimeImmutable($dateString);

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
