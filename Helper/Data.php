<?php
/**
 * Certification comments
 * 
 * 1. Helper or utility classes are classes filled with static methods that do not quite fit 
 *    anywhere else.
 * 2. Even when Magento core still utilizes this folder for storing actions Magento recommends to 
 *    avoid creating helper classes as they are considered as anti-pattern of object-oriented 
 *    programming.
 * 3. As Magento lets us to use it, then here are some data about it:
 * 
 *        a) Custom helpers should extends \Magento\Framework\App\Helper\AbstractHelper class
 *        b) You don't need to define anything in xml files to use Helper classes
 */
namespace Barranco\MagentoArchitecture\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    /**
     * Function that recieves a string and returns it as upper case
     * 
     * @param string $text
     * @return string
     */
    public function toUpperCase($text)
    {
        return strtoupper($text);
    }

    /**
     * Function that recieves a string and returns it as lower case
     * 
     * @param string $text
     * @return string 
     */
    public function toLowerCase($text)
    {
        return strtolower($text);
    }
}