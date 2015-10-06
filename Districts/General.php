<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/4/15
 * Time: 2:57 PM
 */

namespace Ticket\Districts;


use Ticket\Enums\eRequirements;
use Ticket\Interfaces\iDistrict;

class General implements iDistrict
{
    private $title;
    private $requirements ;
    private $fields;

    function setTitle($title)
    {
        $this->title = $title;
    }

    function getTitle()
    {
        return $this->title;
    }

    function getRequirements()
    {
        return $this ->requirements;
    }

    function setRequirements($requirements)
    {
        if(is_array($requirements))
            foreach($requirements as $requirement)
                $this->requirements [] = $requirement;
        else
            $this->requirements = $requirements;
    }
    
}