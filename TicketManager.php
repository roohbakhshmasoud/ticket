<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/5/15
 * Time: 10:20 AM
 */

namespace Ticket;


use Ticket\Enum\ePriority;
use Ticket\Enum\eStatus;
use Ticket\Interfaces\iDistrict;
use Ticket\Interfaces\iTicket;
use Ticket\Interfaces\iTicketDispatching;
use Ticket\Interfaces\iTicketManager;

class TicketManager implements iTicketManager
{

    private $ticket;
    function __construct(iTicket $ticket)
    {
        $this->ticket = $ticket;
    }

    function createTicket()
    {
        var_dump('Ticket was created and should be saved in to database .....');
        //this method should be save ticket in to database
    }

    function updateTicket()
    {
        //this method should update ticket
    }

    function replyTicket()
    {
        // TODO: Implement replyTicket() method.
    }

    function sendReply(iTicketDispatching $dispatching)
    {
        // TODO: Implement sendReply() method.
    }
}