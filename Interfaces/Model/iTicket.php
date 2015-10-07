<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/4/15
 * Time: 2:13 PM
 */

namespace Ticket\Interfaces\Model;


use Ticket\Enums\ePriority;
use Ticket\Enums\eStatus;

interface iTicket
{
    function settId($id);
    function getId();


    function __construct($user);
    function setUser($user);
    function getUser();

    function setTitle($title);
    function getTitle();

    function setMessage($message);
    function getMessage();

    function setPriority(ePriority $priority);
    function getPriority();

    function setStatus(eStatus $status);
    function getStatus();

    function setDate();
    function getDate();

    function setDepartmentId($id);
    function getDepartmentId();
}