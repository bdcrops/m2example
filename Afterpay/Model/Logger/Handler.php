<?php
/**
 * Magento 2 extensions for Afterpay Payment
 *
 * @author Afterpay
 * @copyright 2016-2019 Afterpay https://www.afterpay.com
 */
namespace Bdcrops\Afterpay\Model\Logger;

use Monolog\Logger as MonoLogger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    protected $loggerType = MonoLogger::DEBUG;

    protected $fileName = '/var/log/afterpay.log';
}
