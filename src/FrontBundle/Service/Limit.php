<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FrontBundle\Service;

class Limit
{
    /**
     * Min value for the number generation should be externalized database or configuration file
     */
    const MIN_VALUE = 0;
    /**
     * Max value for the number generation should be externalized database or configuration file
     */
    const MAX_VALUE = 100;

    public function getMinValue() 
    { 
        return self::MIN_VALUE; 
    } 

    public function getMaxValue() 
    { 
        return self::MAX_VALUE; 
    } 
}