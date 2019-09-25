<?php
/**
 * Certification comments:
 * 
 * 1. Resource Models ara Models for Database Interactions
 * 2. Resource Models represents how you get or save data into the database
 * 3. Any DIRECT database interaction should happen in these kind of classes 
 */
namespace Barranco\MagentoArchitecture\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Custom extends AbstractDb
{
    /**
     * Models logic initialization
     * 
     * Certification comments:
     * 
     * 1. init method sets which table use to connect with database
     * 2. For testing purpose you have a `custom_table` table with a `custom_id` field as primary 
     *    key
     */
    protected function _construct()
    {
        $this->_init('custom_table', 'custom_id');
    }
}