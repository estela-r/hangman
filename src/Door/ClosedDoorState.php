<?php

namespace App\Door;

/**
 * Description of DoorState
 *
 * @author laptop
 */
class ClosedDoorState extends AbstractDoorState {
    
    public function open() {
      
        return new OpenDoorState();
    }
  
    public function lock() {

        return new LockedDoorState();   
    }
}
