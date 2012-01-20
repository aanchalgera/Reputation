<?php

namespace WSL\PostBundle\Model;

/**
* @author Aanchal
*
*/

class UserVotes extends ExtrinsicPostQuality
{

    public function calculateRank()
     {
        //update total likes for target Id
        $this->updateRank();
     }
     
}