<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/gigasecond/GigasecondTest.php

use App\GigaSecond;

test('return type')->expect(GigaSecond::handle(new DateTimeImmutable()))
    ->toBeInstanceOf(DateTimeImmutable::class);

test('from', function ($input, $expected) {
    $utc = new DateTimeZone('UTC');
    $from = new DateTimeImmutable($input, $utc);
    $result = GigaSecond::handle($from)->format('Y-m-d H:i:s');
    expect($result)->toBe($expected);
})->with([
    ['2011-04-25', '2043-01-01 01:46:40'],
    ['1977-06-13', '2009-02-19 01:46:40'],
    ['1959-07-19', '1991-03-27 01:46:40'],
    ['2015-01-24 22:00:00', '2046-10-02 23:46:40'],
    ['2015-01-24 23:59:59', '2046-10-03 01:46:39'],
]);
