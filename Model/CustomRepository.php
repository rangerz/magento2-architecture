<?php
/**
 * Certification comments
 * 
 * 1. In Magento 2 Models subdirectory stores anything that is related to the data structure to 
 *    loading that data.
 * 2. This repository class should be the implemantation of a Service Interface and its methods
 * 
 */
namespace Barranco\MagentoArchitecture\Model;

use Magento\Framework\Api\SearchCriteriaInterface;
use Barranco\MagentoArchitecture\Api\CustomRepositoryInterface;
use Barranco\MagentoArchitecture\Api\Data\CustomInterface;

class CustomRepository implements CustomRepositoryInterface
{

    /**
     * Certification comments
     * 
     * 1. This method allows you to save or update data for an entity
     * 2. You should create an implementation of a Resource Model to store the data
     * 
     * @param   \Barranco\MagentoArchitecture\Api\Data\CustomInterface $custom
     * @return  \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     * @throws  \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(CustomInterface $custom)
    {
        // TODO: Add logic here to save or edit an entity
        return $custom;
    }

    /**
     * Certification comments
     * 
     * 1. This method allows you to get a row of an entity
     * 2. You should create an implementation of a Resource Model to get the data
     * 
     * @param   int $customId
     * @return  \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     * @throws  \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get(int $customId)
    {
        // TODO: Add logic to implement a solution to load data
        return CustomInterface::class;
    }

    /**
     * Certification comments
     * 
     * 1. This method allows you to get data according to a search criteria
     * 2. You should create an implementation of \Magento\Framework\Api\SearchResultInterface to 
     *    get items data.
     * 
     * @param  \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomSearchResultInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement logic to get items an return search results
        return CustomSearchResultInterface::class;
    }

    /**
     * Certification comments
     * 
     * 1. This method allows you to delete an entity row from database
     * 2. To delet the row you need to create an implementation of a Resource Model
     * 
     * @param  \Barranco\MagentoArchitecture\Api\Data\CustomInterface $custom
     * @return bool
     */
    public function delete(CustomInterface $custom)
    {
        // TODO: Add implementation of logic to delete a record from database
        return true;
    }

    /**
     * Certification comments
     * 
     * 1. This method allows you to delete an entity row from database for a specific id
     * 2. To delete row by id you need to implement a Resource Model
     */
    public function deleteById(int $customId)
    {
        // TODO: Add logic to delete the row from database
        return true;
    }
}