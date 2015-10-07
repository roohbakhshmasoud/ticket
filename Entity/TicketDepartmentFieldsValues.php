<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/7/15
 * Time: 10:03 AM
 */

namespace Ticket\Entity;


use Ticket\Interfaces\Model\iTicketDepartmentFieldsValues;

class TicketDepartmentFieldsValues implements iTicketDepartmentFieldsValues
{
    protected $id;
    protected $ticketId;
    protected $fieldId;
    protected $value;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setTicketId($id)
    {
        $this->ticketId = $id;
    }

    function getTicketId()
    {
        return $this->ticketId;
    }

    function setFieldId($id)
    {
        $this->fieldId = $id;
    }

    function getFieldId()
    {
        return $this->fieldId;
    }

    function setValue($value)
    {
        $this->value = $value;
    }

    function getValue()
    {
        return $this->value;
    }
}