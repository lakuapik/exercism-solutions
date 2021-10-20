<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/bob/BobTest.php

namespace Tests;

use App\Bob;

test('StatingSomething', function () {
    expect(new Bob())->respondTo('Tom-ay-to, tom-aaaah-to.')->toBe('Whatever.');
})->skip();

test('Shouting', function () {
    expect(new Bob())->respondTo('WATCH OUT!')->toBe('Whoa, chill out!');
})->skip();

test('ShoutingGibberish', function () {
    expect(new Bob())->respondTo('FCECDFCAAB')->toBe('Whoa, chill out!');
})->skip();

test('AskingAQuestion', function () {
    expect(new Bob())
        ->respondTo('Does this cryogenic chamber make me look fat?')
        ->toBe('Sure.');
})->skip();

test('AskingANumericQuestion', function () {
    expect(new Bob())->respondTo('You are, what, like 15?')->toBe('Sure.');
})->skip();

test('AskingGibberish', function () {
    expect(new Bob())->respondTo('fffbbcbeab?')->toBe('Sure.');
})->skip();

test('TalkingForcefully', function () {
    expect(new Bob())->respondTo('Let\'s go make out behind the gym!')
        ->toBe('Whatever.');
})->skip();

test('UsingAcronymsInRegularSpeech', function () {
    expect(new Bob())
        ->respondTo('It\'s OK if you don\'t want to go to the DMV.')
        ->toBe('Whatever.');
})->skip();

test('ForcefulQuestion', function () {
    expect(new Bob())->respondTo('WHAT THE HELL WERE YOU THINKING?')
        ->toBe('Calm down, I know what I\'m doing!');
})->skip();

test('ShoutingNumbers', function () {
    expect(new Bob())->respondTo('1, 2, 3 GO!')->toBe('Whoa, chill out!');
})->skip();

test('OnlyNumbers', function () {
    expect(new Bob())->respondTo('1, 2, 3')->toBe('Whatever.');
})->skip();

test('QuestionWithOnlyNumbers', function () {
    expect(new Bob())->respondTo('4?')->toBe('Sure.');
})->skip();

test('ShoutingWithSpecialCharacters', function () {
    expect(new Bob())
        ->respondTo('ZOMG THE %^*@#$(*^ ZOMBIES ARE COMING!!11!!1!')
        ->toBe('Whoa, chill out!');
})->skip();

test('ShoutingWithNoExclamationMark', function () {
    expect(new Bob())->respondTo('I HATE YOU')
        ->toBe('Whoa, chill out!');
})->skip();

test('StatementContainingQuestionMark', function () {
    expect(new Bob())->respondTo('Ending with ? means a question.')
        ->toBe('Whatever.');
})->skip();

test('NonLettersWithQuestion', function () {
    expect(new Bob())->respondTo(':) ?')->toBe('Sure.');
})->skip();

test('PrattlingOn', function () {
    expect(new Bob())
        ->respondTo('Wait! Hang on. Are you going to be OK?')->toBe('Sure.');
})->skip();

test('Silence', function () {
    expect(new Bob())->respondTo('')->toBe('Fine. Be that way!');
})->skip();

test('ProlongedSilence', function () {
    expect(new Bob())->respondTo('         ')->toBe('Fine. Be that way!');
})->skip();

test('AlternateSilence', function () {
    expect(new Bob())->respondTo('\t\t\t\t\t\t\t\t\t\t')
        ->toBe('Fine. Be that way!');
})->skip();

test('MultipleLineQuestion', function () {
    expect(new Bob())
        ->respondTo('\nDoes this cryogenic chamber make me look fat?\nno')
        ->toBe('Whatever.');
})->skip();

test('StartingWithWhitespace', function () {
    expect(new Bob())->respondTo('        hmmmmmmm...')->toBe('Whatever.');
})->skip();

test('EndingWithWhitespace', function () {
    expect(new Bob())
        ->respondTo('Okay if like my  spacebar  quite a bit?   ')
        ->toBe('Sure.');
})->skip();

test('NonQuestionEndingWithWhitespace', function () {
    expect(new Bob())
        ->respondTo('This is a statement ending with whitespace      ')
        ->toBe('Whatever.');
})->skip();

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
