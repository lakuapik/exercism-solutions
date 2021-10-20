<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/bob/BobTest.php

namespace Tests;

use App\Bob;

test('StatingSomething', function () {
    expect(new Bob())->respondTo('Tom-ay-to, tom-aaaah-to.')->toBe('Whatever.');
});

test('Shouting', function () {
    expect(new Bob())->respondTo('WATCH OUT!')->toBe('Whoa, chill out!');
});

test('ShoutingGibberish', function () {
    expect(new Bob())->respondTo('FCECDFCAAB')->toBe('Whoa, chill out!');
});

test('AskingAQuestion', function () {
    expect(new Bob())
        ->respondTo('Does this cryogenic chamber make me look fat?')
        ->toBe('Sure.');
});

test('AskingANumericQuestion', function () {
    expect(new Bob())->respondTo('You are, what, like 15?')->toBe('Sure.');
});

test('AskingGibberish', function () {
    expect(new Bob())->respondTo('fffbbcbeab?')->toBe('Sure.');
});

test('TalkingForcefully', function () {
    expect(new Bob())->respondTo('Let\'s go make out behind the gym!')
        ->toBe('Whatever.');
});

test('UsingAcronymsInRegularSpeech', function () {
    expect(new Bob())
        ->respondTo('It\'s OK if you don\'t want to go to the DMV.')
        ->toBe('Whatever.');
});

test('ForcefulQuestion', function () {
    expect(new Bob())->respondTo('WHAT THE HELL WERE YOU THINKING?')
        ->toBe('Calm down, I know what I\'m doing!');
});

test('ShoutingNumbers', function () {
    expect(new Bob())->respondTo('1, 2, 3 GO!')->toBe('Whoa, chill out!');
});

test('OnlyNumbers', function () {
    expect(new Bob())->respondTo('1, 2, 3')->toBe('Whatever.');
});

test('QuestionWithOnlyNumbers', function () {
    expect(new Bob())->respondTo('4?')->toBe('Sure.');
});

test('ShoutingWithSpecialCharacters', function () {
    expect(new Bob())
        ->respondTo('ZOMG THE %^*@#$(*^ ZOMBIES ARE COMING!!11!!1!')
        ->toBe('Whoa, chill out!');
});

test('ShoutingWithNoExclamationMark', function () {
    expect(new Bob())->respondTo('I HATE YOU')
        ->toBe('Whoa, chill out!');
});

test('StatementContainingQuestionMark', function () {
    expect(new Bob())->respondTo('Ending with ? means a question.')
        ->toBe('Whatever.');
});

test('NonLettersWithQuestion', function () {
    expect(new Bob())->respondTo(':) ?')->toBe('Sure.');
});

test('PrattlingOn', function () {
    expect(new Bob())
        ->respondTo('Wait! Hang on. Are you going to be OK?')->toBe('Sure.');
});

test('Silence', function () {
    expect(new Bob())->respondTo('')->toBe('Fine. Be that way!');
});

test('ProlongedSilence', function () {
    expect(new Bob())->respondTo('         ')->toBe('Fine. Be that way!');
});

test('AlternateSilence', function () {
    expect(new Bob())->respondTo("\t\t\t\t\t\t\t\t\t\t")
        ->toBe('Fine. Be that way!');
});

test('MultipleLineQuestion', function () {
    expect(new Bob())
        ->respondTo('\nDoes this cryogenic chamber make me look fat?\nno')
        ->toBe('Whatever.');
});

test('StartingWithWhitespace', function () {
    expect(new Bob())->respondTo('        hmmmmmmm...')->toBe('Whatever.');
});

test('EndingWithWhitespace', function () {
    expect(new Bob())
        ->respondTo('Okay if like my  spacebar  quite a bit?   ')
        ->toBe('Sure.');
});

test('NonQuestionEndingWithWhitespace', function () {
    expect(new Bob())
        ->respondTo('This is a statement ending with whitespace      ')
        ->toBe('Whatever.');
});

// public function testOtherWhitespace()
// {
//     $this->assertEquals("Fine. Be that way!", $this->bob->respondTo("\n\r \t\u{000b}\u{00a0}\u{2002}"));
// }

// public function testShoutingWithUmlauts()
// {
//     $this->assertEquals("Whoa, chill out!", $this->bob->respondTo("ÜMLÄÜTS!"));
// }

// public function testCalmlySpeakingWithUmlauts()
// {
//     $this->assertEquals("Whatever.", $this->bob->respondTo("ÜMLäÜTS!"));
// }
