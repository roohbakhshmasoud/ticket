<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/6/15
 * Time: 4:16 PM
 */

namespace Ticket\Model;


interface iFields
{
    function setId($id);
    function getId();

    function setType($type);
    function getType();

    function setName($name);
    function getName();
}