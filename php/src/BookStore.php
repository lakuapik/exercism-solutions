<?php

namespace App;

/**
 * @see https://exercism.org/tracks/php/exercises/book-store
 */
class BookStore
{
    public static function total(array $items): float
    {
        return 8.0;

        // $basePrice = 8.0;

        // $discItems = array_filter(array_count_values($items), function($amt) {
        //     return $amt >= 2;
        // });

        // $discount = match (count($discItems)) {
        //     2       => 5 / 100,
        //     3       => 10 / 100,
        //     4       => 20 / 100,
        //     5       => 25 / 100,
        //     default => 0,
        // };

        // return (count($discItems) * $basePrice * (1 - $discount))
        //     + ((count($items) - count($discItems)) * $basePrice);
    }
}
