<?php
/**
 * Created by PhpStorm.
 * User: doanhcn2
 * Date: 20/03/2019
 * Time: 16:06
 */

namespace Bdcrops\Feedback\Model\ResourceModel\Feedback;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    /**
     *  Initialize resource collection
     *
     *  @return void
     */
    public function _construct()
    {
        $this->_init(\Bdcrops\Feedback\Model\Feedback::class, \Bdcrops\Feedback\Model\ResourceModel\Feedback::class);
    }
}