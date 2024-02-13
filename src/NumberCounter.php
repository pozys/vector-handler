<?php

declare(strict_types=1);

namespace Pozys\VectorHandler;

/**
 * @param Integer[] $numbers
 * @return Integer
 */
class NumberCounter
{
    public function countWithEvenDigitNumber(array $numbers): int
    {
        $count = 0;
        foreach ($numbers as $number) {
            if (strlen((string) $number) % 2 === 0) {
                $count++;
            }
        }

        return $count;
    }
}
