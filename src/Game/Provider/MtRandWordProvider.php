<?php

namespace App\Game\Provider;

class MtRandWordProvider implements RandomWordProviderInterface
{
    public function getName(): string
    {
        return 'mt_rand';
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
