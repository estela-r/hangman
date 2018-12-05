<?php

namespace App\Game\Provider;

interface RandomWordProviderInterface
{
    public function getName(): string;

    public function selectWord(array $words): string;
}
