<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/dnd-character/DndCharacterTest.php

namespace Tests;

use App\DndCharacter;

expect()->extend('toBeInRange', function ($start, $end) {
    $this->assertThat(
        $this->value,
        $this->logicalAnd(
            $this->greaterThanOrEqual($start),
            $this->lessThanOrEqual($end)
        ),
        "The given value {$this->value} is not between {$start} and {$end}."
    );
});

test('AbilityModifierFor3IsNegative4', function () {
    expect(DndCharacter::modifier(3))->toBe(-4);
})->skip();

test('AbilityModifierFor4IsNegative3', function () {
    expect(DndCharacter::modifier(4))->toBe(-3);
})->skip();

test('AbilityModifierFor5IsNegative3', function () {
    expect(DndCharacter::modifier(5))->toBe(-3);
})->skip();

test('AbilityModifierFor6IsNegative2', function () {
    expect(DndCharacter::modifier(6))->toBe(-2);
})->skip();

test('AbilityModifierFor7IsNegative2', function () {
    expect(DndCharacter::modifier(7))->toBe(-2);
})->skip();

test('AbilityModifierFor8IsNegative1', function () {
    expect(DndCharacter::modifier(8))->toBe(-1);
})->skip();

test('AbilityModifierFor9IsNegative1', function () {
    expect(DndCharacter::modifier(9))->toBe(-1);
})->skip();

test('AbilityModifierFor10Is0', function () {
    expect(DndCharacter::modifier(10))->toBe(0);
})->skip();

test('AbilityModifierFor11Is0', function () {
    expect(DndCharacter::modifier(11))->toBe(0);
})->skip();

test('AbilityModifierFor12Is1', function () {
    expect(DndCharacter::modifier(12))->toBe(1);
})->skip();

test('AbilityModifierFor13Is1', function () {
    expect(DndCharacter::modifier(13))->toBe(1);
})->skip();

test('AbilityModifierFor14Is2', function () {
    expect(DndCharacter::modifier(14))->toBe(2);
})->skip();

test('AbilityModifierFor15Is2', function () {
    expect(DndCharacter::modifier(15))->toBe(2);
})->skip();

test('AbilityModifierFor16Is3', function () {
    expect(DndCharacter::modifier(16))->toBe(3);
})->skip();

test('AbilityModifierFor17Is3', function () {
    expect(DndCharacter::modifier(17))->toBe(3);
})->skip();

test('AbilityModifierFor18is4', function () {
    expect(DndCharacter::modifier(18))->toBe(4);
})->skip();

test('RandomAbilityIsInRange', function () {
    for ($i = 0; $i < 10; $i++) {
        $ability = DndCharacter::ability();
        expect($ability)->tobeInRange(3, 18);
    }
})->skip();

test('RandomCharacterIsValid', function () {
    for ($i = 0; $i < 10; $i++) {
        $character = DndCharacter::generate();
        expect($character)
            ->strength->toBeInRange(3, 18)
            ->dexterity->toBeInRange(3, 18)
            ->constitution->toBeInRange(3, 18)
            ->intelligence->toBeInRange(3, 18)
            ->wisdom->toBeInRange(3, 18)
            ->charisma->toBeInRange(3, 18);

        expect(10 + DndCharacter::modifier($character->constitution))
            ->toBe($character->hitpoints);
    }
})->skip();

test('EachAbilityIsCalculatedOnce', function () {
    for ($i = 0; $i < 10; $i++) {
        $character = DndCharacter::generate();
        expect($character)
            ->strength->toBe($character->strength)
            ->dexterity->toBe($character->dexterity)
            ->constitution->toBe($character->constitution)
            ->intelligence->toBe($character->intelligence)
            ->wisdom->toBe($character->wisdom)
            ->charisma->toBe($character->charisma);
    }
})->skip();
