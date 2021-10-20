<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/markdown/MarkdownTest.php

namespace Tests;

use App\Markdown;

test('ParsingParagraph', function () {
    $this->assertEquals('<p>This will be a paragraph</p>', Markdown::parse('This will be a paragraph'));
})->skip();

test('ParsingItalics', function () {
    $this->assertEquals('<p><i>This will be italic</i></p>', Markdown::parse('_This will be italic_'));
})->skip();

test('ParsingBoldText', function () {
    $this->assertEquals('<p><em>This will be bold</em></p>', Markdown::parse('__This will be bold__'));
})->skip();

test('MixedNormalItalicsAndBoldText', function () {
    $this->assertEquals('<p>This will <i>be</i> <em>mixed</em></p>', Markdown::parse('This will _be_ __mixed__'));
})->skip();

test('WithH1Headerlevel', function () {
    $this->assertEquals('<h1>This will be an h1</h1>', Markdown::parse('# This will be an h1'));
})->skip();

test('WithH2Headerlevel', function () {
    $this->assertEquals('<h2>This will be an h2</h2>', Markdown::parse('## This will be an h2'));
})->skip();

test('WithH6Headerlevel', function () {
    $this->assertEquals('<h6>This will be an h6</h6>', Markdown::parse('###### This will be an h6'));
})->skip();

test('UnorderedLists', function () {
    $this->assertEquals(
        '<ul><li><p>Item 1</p></li><li><p>Item 2</p></li></ul>',
        Markdown::parse("* Item 1\n* Item 2")
    );
})->skip();

test('WithALittleBitOfEverything', function () {
    $this->assertEquals(
        '<h1>Header!</h1><ul><li><em>Bold Item</em></li><li><i>Italic Item</i></li></ul>',
        Markdown::parse("# Header!\n* __Bold Item__\n* _Italic Item_")
    );
})->skip();
