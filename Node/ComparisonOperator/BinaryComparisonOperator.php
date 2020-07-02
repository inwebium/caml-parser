<?php
namespace Inwebium\Caml\Node\ComparisonOperator;

abstract class BinaryComparisonOperator extends AbstractComparisonOperator
{
    protected $operator;
    
    protected function getStringRepresentation()
    {
        $result = '';
        
        $result = 
            $this->branches['FieldRef'] . 
            '[' . $this->operator . ']=' . 
            $this->branches['Value']
        ;
        
        return $result;
    }

}
