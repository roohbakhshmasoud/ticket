<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/6/15
 * Time: 4:35 PM
 */

namespace Ticket\Interfaces\Model;


interface iTicketDepartmentFieldsValues
{
    function setId($id);
    function getId();

    function setTicketId($id);
    function getTicketId();

    function setFieldId($id);
    function getFieldId();

    function setValue($value);
    function getValue();

}