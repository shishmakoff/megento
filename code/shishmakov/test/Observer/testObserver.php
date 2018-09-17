<?php

namespace Shishmakov\Test\Observer;

use Magento\Framework\Event\ObserverInterface;

class TestObserver implements ObserverInterface
{
    public function __construct()
    {
        //Observer initialization code...
        //You can use dependency injection to get any class this observer may need.
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {


        $a = $request->getPathInfo();
    }
}