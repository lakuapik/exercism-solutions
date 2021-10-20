<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/transpose/TransposeTest.php

namespace Tests;

test('EmptyString', function () {
    expect(Transpose::handle(['']))->toBe(['']);
})->skip();

test('TwoCharactersInARow', function () {
    expect(Transpose::handle(['A1']))->toBe(['A', '1']);
})->skip();

test('TwoCharactersInAColumn', function () {
    expect(Transpose::handle(['A', '1']))->toBe(['A1']);
})->skip();

test('Simple', function () {
    expect(Transpose::handle([
        'ABC',
        '123',
    ]))->toBe([
        'A1',
        'B2',
        'C3',
    ]);
})->skip();

test('SingleLine', function () {
    expect(Transpose::handle(['Single line.']))->toBe([
        'S',
        'i',
        'n',
        'g',
        'l',
        'e',
        ' ',
        'l',
        'i',
        'n',
        'e',
        '.',
    ]);
})->skip();

test('FirstLineLongerThanSecondLine', function () {
    expect(Transpose::handle([
        'The fourth line.',
        'The fifth line.',
    ]))->toBe([
        'TT',
        'hh',
        'ee',
        '  ',
        'ff',
        'oi',
        'uf',
        'rt',
        'th',
        'h ',
        ' l',
        'li',
        'in',
        'ne',
        'e.',
        '.',
    ]);
})->skip();

test('SecondLineLongerThanFirstLine', function () {
    expect(Transpose::handle([
        'The first line.',
        'The second line.',
    ]))->toBe([
        'TT',
        'hh',
        'ee',
        '  ',
        'fs',
        'ie',
        'rc',
        'so',
        'tn',
        ' d',
        'l ',
        'il',
        'ni',
        'en',
        '.e',
        ' .',
    ]);
})->skip();

test('Square', function () {
    expect(Transpose::handle([
        'HEART',
        'EMBER',
        'ABUSE',
        'RESIN',
        'TREND',
    ]))->toBe([
        'HEART',
        'EMBER',
        'ABUSE',
        'RESIN',
        'TREND',
    ]);
})->skip();

test('Rectangle', function () {
    expect(Transpose::handle([
        'FRACTURE',
        'OUTLINED',
        'BLOOMING',
        'SEPTETTE',
    ]))->Be([
        'FOBS',
        'RULE',
        'ATOP',
        'CLOT',
        'TIME',
        'UNIT',
        'RENT',
        'EDGE',
    ]);
})->skip();

test('Triangle', function () {
    expect(Transpose::handle([
        'T',
        'EE',
        'AAA',
        'SSSS',
        'EEEEE',
        'RRRRRR',
    ]))->toBe([
        'TEASER',
        ' EASER',
        '  ASER',
        '   SER',
        '    ER',
        '     R',
    ]);
})->skip();

test('ManyLines', function () {
    expect(Transpose::handle([
        'Chor. Two households, both alike in dignity,',
        'In fair Verona, where we lay our scene,',
        'From ancient grudge break to new mutiny,',
        'Where civil blood makes civil hands unclean.',
        'From forth the fatal loins of these two foes',
        "A pair of star-cross'd lovers take their life;",
        "Whose misadventur'd piteous overthrows",
        "Doth with their death bury their parents' strife.",
        "The fearful passage of their death-mark'd love,",
        "And the continuance of their parents' rage,",
        "Which, but their children's end, naught could remove,",
        "Is now the two hours' traffic of our stage;",
        'The which if you with patient ears attend,',
        'What here shall miss, our toil shall strive to mend.',
    ]))->toBe([
        'CIFWFAWDTAWITW',
        'hnrhr hohnhshh',
        'o oeopotedi ea',
        'rfmrmash  cn t',
        '.a e ie fthow ',
        ' ia fr weh,whh',
        'Trnco miae  ie',
        'w ciroitr btcr',
        'oVivtfshfcuhhe',
        ' eeih a uote  ',
        'hrnl sdtln  is',
        'oot ttvh tttfh',
        'un bhaeepihw a',
        'saglernianeoyl',
        'e,ro -trsui ol',
        'h uofcu sarhu ',
        'owddarrdan o m',
        "lhg to'egccuwi",
        'deemasdaeehris',
        'sr als t  ists',
        ",ebk 'phool'h,",
        '  reldi ffd   ',
        'bweso tb  rtpo',
        'oea ileutterau',
        't kcnoorhhnatr',
        "hl isvuyee'fi ",
        ' atv es iisfet',
        'ayoior trr ino',
        'l  lfsoh  ecti',
        'ion   vedpn  l',
        'kuehtteieadoe ',
        'erwaharrar,fas',
        '   nekt te  rh',
        'ismdsehphnnosa',
        'ncuse ra-tau l',
        ' et  tormsural',
        "dniuthwea'g t ",
        'iennwesnr hsts',
        'g,ycoi tkrttet',
        "n ,l r s'a anr",
        "i  ef  'dgcgdi",
        't  aol   eoe,v',
        'y  nei sl,u; e',
        ',  .sf to l   ',
        '     e rv d  t',
        '     ; ie    o',
        '       f, r   ',
        '       e  e  m',
        '       .  m  e',
        '          o  n',
        '          v  d',
        '          e  .',
        '          ,',
    ]);
})->skip();
