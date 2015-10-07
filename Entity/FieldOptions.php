<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/7/15
 * Time: 9:46 AM
 */

namespace Ticket\Entity;


use Ticket\Interfaces\Model\iFieldOptions;

class FieldOptions implements iFieldOptions
{

    protected $id;
    protected $key;
    protected $value;
    protected $fieldId;



    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setKey($key)
    {
        $this->key = $key;
    }

    function getKey()
    {
        return $this->key;
    }

    function setValue($value)
    {
        $this->value = $value;
    }

    function getValue()
    {
        return $this->value;
    }

    function setFieldId($id)
    {
        $this->fieldId = $id;
    }

    function getFieldId()
    {
        return $this->fieldId;
    }
}