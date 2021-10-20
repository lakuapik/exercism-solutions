<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/rail-fence-cipher/RailFenceCipherTest.php

namespace Tests;

use App\RailFenceCipher;

test('EncodeWithTwoRails', function () {
    expect(RailFenceCipher::encode('XOXOXOXOXOXOXOXOXO', 2))
        ->toBe('XXXXXXXXXOOOOOOOOO');
})->skip();

test('EncodeWithThreeRails', function () {
    expect(RailFenceCipher::encode('WEAREDISCOVEREDFLEEATONCE', 3))
        ->toBe('WECRLTEERDSOEEFEAOCAIVDEN');
})->skip();

test('EncodeWithEndingInTheMiddle', function () {
    expect(RailFenceCipher::encode('EXERCISES', 4))->toBe('ESXIEECSR');
})->skip();

test('DecodeWithThreeRails', function () {
    expect(RailFenceCipher::decode('TEITELHDVLSNHDTISEIIEA', 3))
        ->toBe('THEDEVILISINTHEDETAILS');
})->skip();

test('DecodeWithFiveRails', function () {
    expect(RailFenceCipher::decode('EIEXMSMESAORIWSCE', 5))
        ->toBe('EXERCISMISAWESOME');
})->skip();

test('DecodeWithSixRails', function () {
    expect(RailFenceCipher::decode(
        '133714114238148966225439541018335470986172518171757571896261', 6
    ))->toBe('112358132134558914423337761098715972584418167651094617711286');
})->skip();
