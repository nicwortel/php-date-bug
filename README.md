# PHP Date bug

This repository contains a small PHPUnit test case that shows a bug I found in PHP's
[`DateTime`](https://secure.php.net/manual/en/class.datetime.php) implementation.

When instantiating `DateTime` and `DateTimeImmutable` objects, this bug causes certain dates to be changed. More
specifically, this is happening for December 31st, every 400 years, starting December 31st 2369.

For more information see: https://bugs.php.net/bug.php?id=69205

Current status: [![Build Status](https://travis-ci.com/nicwortel/php-date-bug.svg?branch=master)](https://travis-ci.com/nicwortel/php-date-bug)
