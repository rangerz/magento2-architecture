<?php
/**
 * Certifications comments
 * 
 * 1. Resource Models ara Models for Database Interactions
 * 2. Resource Models represents how you get or save data into the database
 * 3. Any DIRECT database interaction should happen in these kind of classes 
 */
namespace Barranco\MagentoArchitecture\Model\ResourceModel\Custom;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Models logic initialization
     * 
     * Certifications comments:
     * 
     * 1. init method to load Model and ResourceModel classes
     */
    protected function _construct()
    {
        $this->_init(
            \Barranco\MagentoArchitecture\Model\Custom::class,
            \Barranco\MagentoArchitecture\Model\ResourceModel\Custom::class
        );
    }
}