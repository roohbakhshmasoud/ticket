<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/7/15
 * Time: 9:37 AM
 */

namespace Ticket\Entity;


use Ticket\Interfaces\Model\iDepartment;

class Department implements iDepartment
{

    protected $id;
    protected $title;


    function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }

    function getTitle()
    {
        return $this->title;
    }
}