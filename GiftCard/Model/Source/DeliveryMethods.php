<?php
/**
 * Bdcrops
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Bdcrops.com license that is
 * available through the world-wide-web at this URL:
 * https://www.bdcrops.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Bdcrops
 * @package     Bdcrops_GiftCard
 * @copyright   Copyright (c) Bdcrops (https://www.bdcrops.com/)
 * @license     https://www.bdcrops.com/LICENSE.txt
 */

namespace Bdcrops\GiftCard\Model\Source;

use Bdcrops\GiftCard\Model\Product\DeliveryMethods as SourceDeliveryMethod;

/**
 * Class DeliveryMethods
 * @package Bdcrops\GiftCard\Model\Source
 */
class DeliveryMethods extends SourceDeliveryMethod
{
    /**
     * @return array
     */
    public static function getOptionArray()
    {
        return self::getMethodOptionArray();
    }
}