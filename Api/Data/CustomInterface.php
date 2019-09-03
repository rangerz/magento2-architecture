<?php
/**
 * Certification comments
 * 
 * 1. This is a Data Interface: one of the types for Service Contracts design pattern
 * 2. Define data interfaces in the Api/Data subdirectory for a module
 * 3. Data interfaces define functions that return information about data entities
 * 4. As example let's use a custom entity with 3 columns: custom_id, title, date
 * 5. For that custom entity you must define a get and set method for each column
 */

namespace Barranco\MagentoArchitecture\Api\Data;

interface CustomInterface
{
    /**
     * Get custom_id
     * 
     * @return int | null
     */
    public function getId();

    /**
     * Get title
     * 
     * @return string | null
     */
    public function getTitle();

    /**
     * Get date
     * 
     * @return string | null
     */
    public function getDate();

    /**
     * Set custom_id
     * 
     * @param  int $id
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     */
    public function setId($id);

    /**
     * Set title
     * 
     * @param  string $title
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     */
    public function setTitle($title);

    /**
     * Set date
     * 
     * @param  string $date
     * @return \Barranco\MagentoArchitecture\Api\Data\CustomInterface
     */
    public function setDate($date);
}