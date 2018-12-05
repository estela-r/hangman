<?php

namespace App\Game;

use Psr\Log\LoggerInterface;

class LoggedRunner implements RunnerInterface
{
    private $originalRunner;
    private $logger;

    public function __construct(RunnerInterface $originalRunner, LoggerInterface $logger)
    {
        $this->originalRunner = $originalRunner;
        $this->logger = $logger;
    }

    public function loadGame(): Game
    {
        return $this->originalRunner->loadGame();
    }

    public function playLetter(string $letter): Game
    {
        $this->logger->debug('Playing letter '.$letter);

        return $this->originalRunner->playLetter($letter);
    }

    public function playWord(string $word): Game
    {
        return $this->originalRunner->playWord($word);
    }

    public function resetGame(): void
    {
        $this->originalRunner->resetGame();
    }

    public function resetGameOnSuccess(): void
    {
        $this->originalRunner->resetGameOnSuccess();
    }

    public function resetGameOnFailure(): void
    {
        $this->originalRunner->resetGameOnFailure();
    }
}
