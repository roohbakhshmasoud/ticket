<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/6/15
 * Time: 4:28 PM
 */

namespace Ticket\Model;


interface iFieldPossibleValue
{
    function setId($id);
    function getId();

    function setFieldId($id);
    function getFieldId($id);

    function setFieldValue($id);
    function getFieldValue();
}