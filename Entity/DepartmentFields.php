<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/7/15
 * Time: 9:43 AM
 */

namespace Ticket\Entity;


use Ticket\Interfaces\Model\iDepartmentFields;

class DepartmentFields implements iDepartmentFields
{

    protected $id;
    protected $departmentId;
    protected $fieldId;

    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setDepartmentId($id)
    {
        $this->departmentId = $id;
    }

    function getDepartmentId()
    {
        return $this->departmentId;
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