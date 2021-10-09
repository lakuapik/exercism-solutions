<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/resistor-color/ResistorColorTest.php

namespace Tests;

use App\ResistorColor;

test('black color')->expect(ResistorColor::handle('black'))->toBe(0);

test('orange color')->expect(ResistorColor::handle('orange'))->toBe(3);

test('white color')->expect(ResistorColor::handle('white'))->toBe(9);

test('colors')->expect(ResistorColor::COLORS)->toBe([
    'black', 'brown', 'red', 'orange', 'yellow',
    'green', 'blue', 'violet', 'grey', 'white',
]);
