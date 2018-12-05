<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Door;

/**
 * Description of DoorStateInterface
 *
 * @author laptop
 */
class DoorStateInterface {
    
    public function open(): DoorState;
    public function close(): DoorState;
}
