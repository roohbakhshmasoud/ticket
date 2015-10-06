<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/4/15
 * Time: 2:18 PM
 */

namespace Ticket\Enums;


class ePriority extends \SplEnum
{
    const Low =0;
    const Normal = 1;
    const High = 2;
    const Urgent = 3;
}