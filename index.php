<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

require('vendor/autoload.php');

$generalDistrictRequirements = new \Ticket\Enums\eRequirements(\Ticket\Enums\eRequirements::Details);
var_dump($generalDistrictRequirements);die;

$priority = new \Ticket\Enums\ePriority(\Ticket\Enums\ePriority::Urgent);
$status = new \Ticket\Enums\eStatus(\Ticket\Enums\eStatus::Open);


$generalDistrict = new Ticket\Districts\General();
$generalDistrict->setTitle('General Department');

$generalDistrict->setRequirements($generalDistrictRequirements);
$ticket = new \Ticket\Ticket("John Smith");

$ticket->setDistrict($generalDistrict);
var_dump('Districts : '.$ticket->getDistrict());

$ticket->setDate();
var_dump('Date : '.$ticket->getDate());

$ticket->setPriority($priority);
var_dump('Priority : '.$ticket->getPriority());

$ticket->setStatus($status);
var_dump('Status : '.$ticket->getStatus());

$ticket->setMessage("This is a first ticket by john smith");
var_dump('Message : '.$ticket->getMessage());

$ticketManager = new \Ticket\TicketManager($ticket);
$ticketManager->createTicket();








