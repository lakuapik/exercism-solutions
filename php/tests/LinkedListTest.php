<?php

// https://github.com/exercism/php/blob/7483b522370e88962fd2605f1f6bd7a0f927b17c/exercises/practice/linked-list/LinkedListTest.php

namespace Tests;

use App\LinkedList;

test('PushAndPopAreFirstInLastOut', function () {
    $list = new LinkedList();
    $list->push(10);
    $list->push(20);
    $list->push(15);

    $this->assertEquals(15, $list->pop());
    $this->assertEquals(20, $list->pop());
    $this->assertEquals(10, $list->pop());
})->skip();

test('PushAndShiftAreFirstInFirstOut', function () {
    $list = new LinkedList();
    $list->push(10);
    $list->push(20);
    $list->push(15);

    $this->assertEquals(10, $list->shift());
    $this->assertEquals(20, $list->shift());
    $this->assertEquals(15, $list->shift());
})->skip();

test('UnshiftAndShiftAreLastInFirstOut', function () {
    $list = new LinkedList();
    $list->unshift(10);
    $list->unshift(20);
    $list->unshift(15);

    $this->assertEquals(15, $list->shift());
    $this->assertEquals(20, $list->shift());
    $this->assertEquals(10, $list->shift());
})->skip();

test('UnshiftAndPopAreLastInLastOut', function () {
    $list = new LinkedList();
    $list->unshift(10);
    $list->unshift(20);
    $list->unshift(15);

    $this->assertEquals(10, $list->pop());
    $this->assertEquals(20, $list->pop());
    $this->assertEquals(15, $list->pop());
})->skip();

test('AllMethodsCanBeUsedTogether', function () {
    $list = new LinkedList();
    $list->push(10);
    $list->push(20);
    $this->assertEquals(20, $list->pop());
    $list->push(15);
    $this->assertEquals(10, $list->shift());
    $list->unshift(40);
    $list->push(50);
    $this->assertEquals(40, $list->shift());
    $this->assertEquals(50, $list->pop());
    $this->assertEquals(15, $list->shift());
})->skip();
