<?php
namespace Inwebium\Caml\Node\LogicalJoin;

class OrNode extends AbstractLogicalJoin
{
    protected function getStringRepresentation()
    {
        $result = '(';
        
        foreach ($this->branches as $key => $value) {
            $result .= $value->getStringRepresentation() . ',';
        }
        
        $result = substr($result, 0, -1) . ')';
        
        return $result;
    }
}