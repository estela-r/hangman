<?php

namespace App\Game\Provider;

class ArrayRandWordProvider implements RandomWordProviderInterface
{
    public function getName(): string
    {
        return 'array_rand';
    }

    public function selectWord(array $words): string
    {
        if (!$words) {
            throw new \InvalidArgumentException('Noooo!');
        }

        return $words[array_rand($words)];
    }
}
