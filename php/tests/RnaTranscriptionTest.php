<?php

// https://github.com/exercism/php/blob/7e2a5b39e73f62c1c6fa08d04b46ce7c705eaa34/exercises/practice/rna-transcription/RnaTranscriptionTest.php

namespace Tests;

use App\RnaTranscription;

test('TranscribesGuanineToCytosine', function () {
    expect(RnaTranscription::handle('C'))->toBe('G');
});

test('TranscribesCytosineToGuanine', function () {
    expect(RnaTranscription::handle('G'))->toBe('C');
});

test('TranscribesThymineToAdenine', function () {
    expect(RnaTranscription::handle('T'))->toBe('A');
});

test('TranscribesAdenineToUracil', function () {
    expect(RnaTranscription::handle('A'))->toBe('U');
});

test('TranscribesAllOccurrencesOne', function () {
    expect(RnaTranscription::handle('ACGTGGTCTTAA'))->toBe('UGCACCAGAAUU');
});
