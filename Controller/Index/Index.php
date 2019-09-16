<?php
/**
 * Certification comments
 * 
 * 1. When a page is requested from a Magento website, the path is parsed out and matched to 
 *    parameters found in routes.xml and files found in the Controller subdirectory of a moudle.
 * 2. Action classes are extensions of the \Magento\Framework\App\Action\Action class
 * 3. At this point still missing to talk about Dependicy Injection (DI) but you need to use it 
 *    to illustrate how to use a Helper class method wherever you want. Here are the steps:
 * 
 *        a) Add Helper class as a Dependicy in your constructor method
 *        b) Assign that dependecy to a local variable
 *        c) Through this variable access to helper class methods and use those whatever you need
 * 
 * 4. In order to exemplify the use of i18n in Magento add your testing phrases into the __() 
 *    method, like this: __("Text to translate")  
 */

namespace Barranco\MagentoArchitecture\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Barranco\MagentoArchitecture\Helper\Data;

class Index extends Action
{

    /**
     * @var \Barranco\MagentoArchitecture\Helper\Data
     */
    private $helper;

    /**
     * Class constructor
     * 
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Barranco\MagentoArchitecture\Helper\Data $helper
     * @return $this
     */
    public function __construct(
        Context $context,
        Data $helper
    )
    {
        $this->helper = $helper;
        parent::__construct($context);
    }

    /**
     * Default execution method
     */
    public function execute()
    {
        echo $this->helper->toUpperCase(__('Welcome to Custom Fronten Controller'));
        echo '<br/>';
        echo $this->helper->toLowerCase(__('This is a welcome message'));
    }
}