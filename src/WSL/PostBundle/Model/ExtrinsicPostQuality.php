<?php

namespace WSL\PostBundle\Model;

/**
* @author Aanchal
*
*/

abstract class ExtrinsicPostQuality extends PostQuality
{
    function __construct($reputationStatement)
    {
        super::__construct($reputationStatement);
    }

     public function updateRank()
     {
         //Take weighted avg for all extrinsic parameters
     }
}