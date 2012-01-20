<?php

namespace WSL\PostBundle\Model;

/**
* @author Aanchal
*
*/

class PostQuality
{
    protected $reputationStatement;
    
    function __construct($reputationStatement)
    {
        $this->reputationStatement = $reputationStatement;
    }
    
    public function getReputationStatement()
    {
        return $this->reputationStatement;
    }

        abstract public function calculateRank();
}