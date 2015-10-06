<?php
/**
 * Created by PhpStorm.
 * User: masoud
 * Date: 10/6/15
 * Time: 4:45 PM
 */

namespace Ticket\Interfaces;


interface iDataManager
{
    function persist($entity);
    function remove($entity);
    function findAll($entity);
    function find($entity,$id);
}