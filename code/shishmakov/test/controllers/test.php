<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12.09.2018
 * Time: 14:33
 */

namespace shishmakov\test\controllers;


class testController
{

    private $eventManager;

    public function __construct(\Magento\Framework\Event\Manager $eventManager)
    {
        $this->eventManager = $eventManager;
    }

    public function Index()
    {
        $eventData = null;
        $this->eventManager->dispatch('contoller_action_predispatch');

    }
}