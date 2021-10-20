<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/diamond/DiamondTest.php

namespace Tests;

use App\Diamond;

test('DegenerateCaseWithASingleARow', function () {
    expect(Diamond::handle('A'))->toBe(['A']);
})->skip();

test('DegenerateCaseWithNoRowContaining3DistinctGroupsOfSpaces', function () {
    expect(Diamond::handle('B'))->toBe([
        ' A ',
        'B B',
        ' A ',
    ]);
})->skip();

test('SmallestNonDegenerateCaseWithOddDiamondSideLength', function () {
    expect(Diamond::handle('C'))->toBe([
        '  A  ',
        ' B B ',
        'C   C',
        ' B B ',
        '  A  ',
    ]);
})->skip();

test('SmallestNonDegenerateCaseWithEvenDiamondSideLength', function () {
    expect(Diamond::handle('D'))->toBe([
        '   A   ',
        '  B B  ',
        ' C   C ',
        'D     D',
        ' C   C ',
        '  B B  ',
        '   A   ',
    ]);
})->skip();

test('LargestPossibleDiamond', function () {
    expect(Diamond::handle('Z'))->toBe([
        '                         A                         ',
        '                        B B                        ',
        '                       C   C                       ',
        '                      D     D                      ',
        '                     E       E                     ',
        '                    F         F                    ',
        '                   G           G                   ',
        '                  H             H                  ',
        '                 I               I                 ',
        '                J                 J                ',
        '               K                   K               ',
        '              L                     L              ',
        '             M                       M             ',
        '            N                         N            ',
        '           O                           O           ',
        '          P                             P          ',
        '         Q                               Q         ',
        '        R                                 R        ',
        '       S                                   S       ',
        '      T                                     T      ',
        '     U                                       U     ',
        '    V                                         V    ',
        '   W                                           W   ',
        '  X                                             X  ',
        ' Y                                               Y ',
        'Z                                                 Z',
        ' Y                                               Y ',
        '  X                                             X  ',
        '   W                                           W   ',
        '    V                                         V    ',
        '     U                                       U     ',
        '      T                                     T      ',
        '       S                                   S       ',
        '        R                                 R        ',
        '         Q                               Q         ',
        '          P                             P          ',
        '           O                           O           ',
        '            N                         N            ',
        '             M                       M             ',
        '              L                     L              ',
        '               K                   K               ',
        '                J                 J                ',
        '                 I               I                 ',
        '                  H             H                  ',
        '                   G           G                   ',
        '                    F         F                    ',
        '                     E       E                     ',
        '                      D     D                      ',
        '                       C   C                       ',
        '                        B B                        ',
        '                         A                         ',
    ]);
})->skip();
