<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/6/15
 * Time: 4:20 PM
 */

namespace Ticket\Interfaces\Model;


interface iDepartmentFields
{
    function setId($id);
    function getId();

    function setDepartmentId($id);
    function getDepartmentId();

    function setFieldId($id);
    function getFieldId();

}