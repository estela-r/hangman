<?php

$door = new Door('closed');
$door->open();
$door->close();
$door->lock();
$door->unlock();

// Should fail
$door->unlock();

class Door
{
    private $state;

    public function __construct(string $state)
    {
        if (!\in_array($state, ['open', 'closed', 'locked', 'unlocked'])) {
            throw new \InvalidArgumentException();
        }

        $this->state = $state;
    }

    public function open()
    {
        if ($this->state !== 'closed') {
            throw new \LogicException();
        }

        $this->state = 'open';
    }

    public function close()
    {
        if ($this->state !== 'open') {
            throw new \LogicException();
        }

        $this->state = 'closed';
    }

    public function lock()
    {
        if ($this->state !== 'closed') {
            throw new \LogicException();
        }

        $this->state = 'locked';
    }

    public function unlock()
    {
        if ($this->state !== 'locked') {
            throw new \LogicException();
        }

        $this->state = 'closed';
    }
}
