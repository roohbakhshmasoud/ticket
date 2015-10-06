<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/4/15
 * Time: 4:31 PM
 */

namespace Ticket\Interfaces;


interface iTicketManager
{

    function __construct(iTicket $ticket);

    function createTicket();

    function updateTicket();

    function replyTicket();

    function sendReply(iTicketDispatching $dispatching);
}