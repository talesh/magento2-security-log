<?php
namespace Meetmagento\Workshop\Observer;

use Psr\Log\LoggerInterface;
use Magento\Framework\Event\ObserverInterface;
use \Magento\Framework\Event\Observer;

class Adminfail implements ObserverInterface
{

    protected $_logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->_logger = $logger;

        //Observer initialization code...
        //You can use dependency injection to get any class this observer may need.
    }

    public function execute(Observer $observer)
    {
        $username = $observer->getData('user_name');
        $eventtimestamp = date('l jS \of F Y h:i:s A');
        $this->_logger->error('Admin Auth failed at '. $eventtimestamp .' for user '.$username);
    }
}

