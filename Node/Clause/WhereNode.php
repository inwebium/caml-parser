<?php
namespace Inwebium\Caml\Node\Clause;

class WhereNode extends \Inwebium\Caml\Node\AbstractNode
{
    protected function getStringRepresentation()
    {
        $result = '';
        
        foreach ($this->branches as $key => $value) {
            $result = $value->getStringRepresentation();
        }
        
        return $result;
    }

}
