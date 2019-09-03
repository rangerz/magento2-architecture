<?php
/**
 * Certification comments
 * 
 * 1. This is a Service Interface: one of the types for Service Contracts design pattern
 * 2. You must define the service interfaces for a service contract in the Api subdirectory 
 * 3. Service interfaces include management and repository interfaces
 * 4. Management interfaces provide management functions that are not related to repositories
 */
namespace Barranco\MagentoArchitecture\Api;

interface CustomManagementInterface
{

    /**
     * Certification comments
     * 
     * 1. Example of funtion that this kind of class must implement
     * 2. Management functions means functions not related to the CRUD of a entity
     * 
     * @param  \Barranco\MagentoArchitecture\Api\Data\CustomInterface $custom
     * @return \Barranco\MagentoArchitecture\Api\Data\ValidationResultInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function validate(\Barranco\MagentoArchitecture\Api\Data\CustomInterface $custom);   
}