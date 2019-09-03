<?php
/**
 * Certification comments
 * 
 * 1. When you pass search criteria to a getList() call, a search results interface is 
 *    returned with the search results.
 * 2. You must define one interface for each data entity
 * 3. This must be the interface for custom search result
 */
namespace Barranco\MagentoArchitecture\Api\Data;

use Magento\Framework\Api\SearchResultInterface;

interface CustomSearchResultInterface extends SearchResultInterface
{
    /**
     * Get custom entity list
     * 
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomInterface[]
     */
    public function getItems();

    /**
     * Set custom entity list
     * 
     * @param  \Barranco\MagentoArchitecture\Api\Data\CustomInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}