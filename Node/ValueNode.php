<?php
namespace Inwebium\Caml\Node;

class ValueNode extends AbstractNode
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
                case 'Type':
                    $result .= $this->getValueWithType(
                        $attributeValue, 
                        strval($this->itself)
                    );
                    break;
                default:
                    break;
            }
        }
        
        return $result;
    }
    
    private function getValueWithType($type, $value)
    {
        switch ($type) {
            case 'Integer':
                return intval($value);
            case 'DateTime':
                return 'datetime \'' . $value . '\'';
            default:
                break;
        }
    }
}
