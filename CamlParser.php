<?php
namespace Inwebium\Caml;

use Inwebium\Caml\Node\Clause\WhereNode;

class CamlParser
{
    private $xmlString;
    private $xml;
    
    public function __construct($xmlString)
    {
        $this->xmlString = $xmlString;
        $this->xml = new \SimpleXMLIterator($this->xmlString);
        $this->xml->rewind();
    }

    public function getFilter()
    {
        if (isset($this->xml->Query->Where)) {
            $where = new WhereNode($this->xml->Query->Where);
            $where->setContent($this->xml->Query->Where->children());
            $where->refine();
            return substr(strval($where), 1, -1);
        } else {
            return false;
        }
    }
    
    // TODO
    public function getOrder()
    {
        if (isset($this->xmlIterator->OrderBy)) {
            return true;
        } else {
            return false;
        }
    }
    
    // TODO
    public function getGroup()
    {
        if (isset($this->xmlIterator->GroupBy)) {
            return true;
        } else {
            return false;
        }
    }
}