<?php

namespace WSL\PostBundle\Model;

/**
* @author Aanchal
*
*/

class ReputationStatement
{
    private $sourceName;
    private $targetName;
    private $actionName;
    private $sourceId;
    private $targetId;
    private $actionCount;

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getTarget()
    {
        return $this->target;
    }

    public function setTarget($target)
    {
        $this->target = $target;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function setAction($action)
    {
        $this->action = $action;
    }
}
?>
