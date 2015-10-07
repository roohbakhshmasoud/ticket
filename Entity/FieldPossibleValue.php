<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/7/15
 * Time: 9:50 AM
 */

namespace Ticket\Entity;


use Ticket\Interfaces\Model\iFieldPossibleValue;

class FieldPossibleValue implements iFieldPossibleValue
{
    protected $id;
    protected $fieldId;
    protected $fieldValue;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setFieldId($id)
    {
        $this->fieldId = $id;
    }

    function getFieldId()
    {
        return $this->fieldId;
    }

    function setFieldValue($id)
    {
        $this->fieldValue = $id;
    }

    function getFieldValue()
    {
        return $this->fieldValue;
    }
}