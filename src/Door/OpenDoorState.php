<?php

namespace App\Door;

/**
 * Description of DoorState
 *
 * @author laptop
 */
class OpenDoorState extends AbstractDoorState{
    
    
    public function close() {
    
        return new ClosedDoorState();
    } 

}

