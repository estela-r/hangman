<?php

namespace App\Game\Provider;

class MtRandWordProvider implements RandomWordProviderInterface
{
    public function supports(string $name): bool
    {
        return 'mt_rand' === $name;
    }

    public function selectWord(array $words): string
    {
        if (!$words) {
            throw new \InvalidArgumentException('Noooo!');
        }

        $words = array_values($words);

        return $words[mt_rand(0, count($words) - 1)];
    }
}
