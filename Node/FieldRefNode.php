<?php
namespace Inwebium\Caml\Node;

class FieldRefNode extends AbstractNode
{
    public function __construct(\SimpleXMLIterator &$itself = null)
    {
        parent::__construct($itself);
        
        $this->branches = $this->getStringRepresentation();
    }
    
    protected function getStringRepresentation()
    {
        $result = '';
        
        foreach ($this->itself->attributes() as $attributeName => $attributeValue) {
            switch ($attributeName) {
                case 'Name':
                    $result .= $attributeValue;
                    break;
                default:
                    break;
            }
        }
        
        return $result;
    }
}
