<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/6/15
 * Time: 4:23 PM
 */

namespace Ticket\Model;


interface iFieldOptions
{
    function setId($id);
    function getId();

    function setKey($key);
    function getKey();

    function setValue($value);
    function getValue();

    function setFieldId($id);
    function getFieldId();

}