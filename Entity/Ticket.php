<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/7/15
 * Time: 9:56 AM
 */

namespace Ticket\Entity;


use Ticket\Enums\ePriority;
use Ticket\Enums\eStatus;
use Ticket\Interfaces\Model\iTicket;

class Ticket implements iTicket
{
    protected $id;
    protected $user;
    protected $title;
    protected $message;
    protected $priority;
    protected $status;
    protected $date;
    protected $departmentId;

    function settId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }

    function __construct($user)
    {
        $this->setUser($user);
    }

    function setUser($user)
    {
        $this->user = $user;
    }

    function getUser()
    {
        return $this->user;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }

    function getTitle()
    {
        return $this->title;
    }

    function setMessage($message)
    {
        $this->message = $message;
    }

    function getMessage()
    {
        return $this->message;
    }

    function setPriority(ePriority $priority)
    {
        $this->priority = $priority;
    }

    function getPriority()
    {
        return $this->priority;
    }

    function setStatus(eStatus $status)
    {
        $this->status = $status;
    }

    function getStatus()
    {
        return $this->status;
    }

    function setDate()
    {
        $this->date = date('Y-m-d H:i:s');
    }

    function getDate()
    {
        return $this->date;
    }

    function setDepartmentId($id)
    {
        $this->departmentId = $id;
    }

    function getDepartmentId()
    {
        return $this->departmentId;
    }
}