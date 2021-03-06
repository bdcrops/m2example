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

/*global define*/
define(
    [
        'jquery',
        'ko'
    ],
    function ($, ko) {
        "use strict";

        return {
            activeTemplate: ko.observableArray(),
            activeImage: ko.observable(),
            activeAmount: ko.observable(),
            from: ko.observable(),
            to: ko.observable(),
            message: ko.observable()
        };
    }
);

