<?php

namespace App\Game;

interface RunnerInterface
{
    public function loadGame(): Game;

    public function playLetter(string $letter): Game;

    public function playWord(string $word): Game;

    public function resetGame(): void;

    public function resetGameOnSuccess(): void;

    public function resetGameOnFailure(): void;
}
