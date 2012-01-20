<?php

namespace WSL\PostBundle\Model;

/**
* @author Aanchal
*
*/

class IntrinsicPostQuality extends PostQuality
{
    function __construct($reputationStatement)
    {
        super::__construct($reputationStatement);
    }

     public function calculateRank()
     {
         $f1 = $this->getPostLengthQuality();
         $f2 = $this->getPostImageQuality();
         
         $this->updateRank($f1,$f2,$f3);
     }
}