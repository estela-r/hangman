<?php

namespace App\Game\Provider;

class ArrayRandWordProvider implements RandomWordProviderInterface
{
    public function supports(string $name): bool
    {
        return 'array_rand' === $name;
    }

    public function selectWord(array $words): string
    {
        if (!$words) {
            throw new \InvalidArgumentException('Noooo!');
        }

        return $words[array_rand($words)];
    }
}
