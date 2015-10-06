<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/4/15
 * Time: 3:38 PM
 */

namespace Ticket;




use Ticket\Enums\ePriority;
use Ticket\Enums\eStatus;
use Ticket\Interfaces\iDistrict;
use Ticket\Interfaces\iTicket;

class Ticket implements iTicket
{

    private $district;
    private $priority;
    private $message;
    private $status;
    private $date;
    private $replies;
    private $user;

    function setDistrict(iDistrict $district)
    {
        $this->district = $district->getRequirements();
    }

    function getDistrict()
    {
        return $this->district;
    }

    function setPriority(ePriority $priority)
    {
        $this->priority = $priority;
    }

    function getPriority()
    {
        return $this->priority;
    }

    function setMessage($message)
    {
        $this->message = $message;
    }

    function getMessage()
    {
        return $this->message;
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
        $this ->date = date("Y-m-d H:i:s");
    }

    function getDate()
    {
        return $this->date;
    }

    function setReply($answer)
    {
        $this->replies [] = $answer;
    }

    function getReply()
    {
        return $this->replies;
    }

    function setUser($user)
    {
        $this->user = $user;
    }

    function getUser()
    {
        return $this->user;
    }


    function __construct($user)
    {
        $this->setUser($user);
    }
}