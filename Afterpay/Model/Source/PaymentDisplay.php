<?php
/**
 * Magento 2 extensions for Afterpay Payment
 *
 * @author Afterpay
 * @copyright 2016-2019 Afterpay https://www.afterpay.com
 */
namespace Bdcrops\Afterpay\Model\Source;

class PaymentDisplay implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Option to set redirect or lightbox
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => 'redirect',
                'label' => 'Redirect',
            ],
            [
                'value' => 'lightbox',
                'label' => 'Lightbox',
            ]

        ];
    }
}