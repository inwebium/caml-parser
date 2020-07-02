<?php
namespace Inwebium\Caml\Node\ComparisonOperator;

class NotIncludesNode extends AbstractComparisonOperator
{
    protected $operator = 'ne';
    
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
