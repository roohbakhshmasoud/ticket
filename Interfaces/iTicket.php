<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/4/15
 * Time: 2:13 PM
 */

namespace Ticket\Interfaces;


use Ticket\Enums\ePriority;
use Ticket\Enums\eStatus;

interface iTicket
{
    function __construct($user);

    function setUser($user);
    function getUser();

    function setDistrict(iDistrict $district);
    function getDistrict();

    function setPriority(ePriority $priority);
    function getPriority();

    function setMessage($message);
    function getMessage();

    function setStatus(eStatus $status);
    function getStatus();

    function setDate();
    function getDate();

    function setReply($answer);
    function getReply();

}