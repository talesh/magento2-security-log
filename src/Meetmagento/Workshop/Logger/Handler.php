<?php
namespace Meetmagento\Workshop\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    protected $fileName = '/var/log/security.log';
    protected $loggerType = Logger::ERROR;
}
