<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/4/15
 * Time: 2:31 PM
 */

namespace Ticket\Interfaces;


use Ticket\Enums\eRequirements;

interface iDistrict
{
    function setTitle($title);
    function getTitle();

    function getRequirements();
    function setRequirements($requirements);

}