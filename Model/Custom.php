<?php
/**
 * Certification comments
 *
 * 1. In Magento 2 Models subdirectory stores anything that is related to the data structure to 
 *    loading that data.
 * 2. This repository class should be the implemantation of a Data Interface and its methods
 * 
 */
namespace Barranco\MagentoArchitecture\Model;

use Magento\Framework\Model\AbstractModel;
use Barranco\MagentoArchitecture\Api\Data\CustomInterface;

class Custom extends AbstractModel implements CustomInterface
{
    /**
     * Models logic initialization
     * 
     * Certification comments
     * 
     * 1. init method loads Resource Model for this class to connect with database
     */
    protected function _construct()
    {
        $this->_init(\Barranco\MagentoArchitecture\Model\ResourceModel\Custom::class);
    }

    /**
     * Get custom_id
     * 
     * @return int | null
     */
    public function getId()
    {
        // TODO: Add method to return database table column for id
        return true;
    }

    /**
     * Get title
     * 
     * @return string | null
     */
    public function getTitle()
    {
        // TODO: Add method to return database table column for title
        return true;
    }

    /**
     * Get date
     * 
     * @return string | null
     */
    public function getDate()
    {
        // TODO: Add method to return database table column for date
        return true;
    }

    /**
     * Set custom_id
     * 
     * @param  int $id
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     */
    public function setId(int $id)
    {
        // TODO: Add method to set id value in database table column
        return true;
    }

    /**
     * Set title
     * 
     * @param  string $title
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     */
    public function setTitle(string $title)
    {
        // TODO: Add method to set title value in database table column
        return true;
    }

    /**
     * Set date
     * 
     * @param  string $date
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     */
    public function setDate(string $date)
    {
        // TODO: Add method to set date value in database table column
        return true;
    }
}