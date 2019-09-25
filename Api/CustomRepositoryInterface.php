<?php
/**
 * Certification comments
 * 
 * 1. This is a Service Interface: one of the types for Service Contracts design pattern
 * 2. You must define the service interfaces for a service contract in the Api subdirectory 
 * 3. Service interfaces include management and repository interfaces
 * 4. Repository interfaces provide access to persistent data entities. 
 */

namespace Barranco\MagentoArchitecture\Api;

interface CustomRepositoryInterface
{
    /**
     * Certification comments
     * 
     * 1. Repository interface must provide this method
     * 2. In the implementation of this interface if an ID is not specified, creates a record
     * 3. In the implementation of this interface if an ID is specified, updates the record for 
     *    the specific ID
     * 4. Method param must be an implementation of a Data Interface
     * 
     * @param   \Barranco\MagentoArchitecture\Api\Data\CustomInterface $custom
     * @return  \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     * @throws  \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Barranco\MagentoArchitecture\Api\Data\CustomInterface $custom);

    /**
     * Certification comments
     * 
     * 1. Repository interface must provide this method
     * 2. Performs a database lookup by ID
     * 3. Returns a Data Interface
     * 
     * @param  int $customId
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get(int $customId);

    /**
     * Certification comments
     * 
     * 1. Repositroy interface must provide this method
     * 2. Performs a search for all data entities that match specified search criteria
     * 3. Returns search results interface
     * 
     * @param  \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomSearchResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Certification comments
     * 
     * 1. Repository interface must provide this method
     * 2. Delete specified entity. 
     * 3. Entity contains ID
     * 
     * @param  \Barranco\MagentoArchitecture\Api\Data\CustomInterface $custom
     * @return bool 
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Barranco\MagentoArchitecture\Api\Data\CustomInterface $custom);

    /**
     * Certification comments
     * 
     * 1. Repository interface must provide this method
     * 2. Delete specified entity by ID
     * 
     * @param  int $customId
     * @return bool
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(int $customId)

}