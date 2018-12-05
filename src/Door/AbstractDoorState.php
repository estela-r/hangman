<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Door;

/**
 * Description of AbstractDoorState
 *
 * @author laptop
 */
class AbstractDoorState {
    
    public function open() {
        
        throw new Exception('Invalid state');
    }
    
    public function close() {
        
        throw new Exception('Invalid state');
    }
    
    public function lock() {
        
        throw new Exception('Invalid state');
    }
}
