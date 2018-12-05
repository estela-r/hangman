<?php

namespace App\Game\Provider;

interface RandomWordProviderInterface
{
    public function supports(string $name): bool;

    public function selectWord(array $words): string;
}
