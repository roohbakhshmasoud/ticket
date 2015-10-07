<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/7/15
 * Time: 9:54 AM
 */

namespace Ticket\Entity;


use Ticket\Interfaces\Model\iFields;

class Fields implements iFields
{
    protected $id ;
    protected $type ;
    protected $name ;


    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setType($type)
    {
        $this->type = $type;
    }

    function getType()
    {
        return $this->type;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }
}