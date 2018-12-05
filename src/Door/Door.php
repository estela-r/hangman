<?php

//namespace App\Door;

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
        if (!\in_array($state, ['open', 'closed', 'locked'])) {
            throw new \InvalidArgumentException();
        }

        $this->state = $state;
    }

    public function open()
    {
        if ($this->state !== 'closed') {
            throw new \LogicException();
        }

        $this->state = new App\Entity\OpenDoorState();
    }
    
        public function close()
    {
        $this->state = $this->state->close(); //closes or throws exception
    }

    public function lock()
    {
       $this->state = $this->state->lock();
    }



    public function unlock()
    {
        if ($this->state !== 'locked') {
            throw new \LogicException();
        }

        $this->state = 'closed';
    }
}
