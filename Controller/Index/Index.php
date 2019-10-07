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
 * 5. In order to work with events in this class you are adding the Event ManagerInterface using 
 *    DI. That allows you to dispatch your custom(s) event(s). Events:
 * 
 *    a) Are dispatched by modules when certain actions are triggered.
 *    b) Can cbe reated by you and dispatched in your code.
 *    c) Is dispatched using the dispatch method of the event manager class providing it with 
 *       the name of the event you want to dispatch: $this->eventManager->dispatch('event_name');
 */

namespace Barranco\MagentoArchitecture\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Barranco\MagentoArchitecture\Helper\Data;

class Index extends Action
{

    /**
     * @var \Barranco\MagentoArchitecture\Helper\Data
     */
    private $helper;

    /**
     * @var \Magento\Framework\Event\ManagerInterface
     */
    private $eventManager;

    /**
     * @var string
     */
    protected $msg;

    /**
     * Class constructor
     * 
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Barranco\MagentoArchitecture\Helper\Data $helper
     * @param \Magento\Framework\Event\ManagerInterface $eventManager
     * @return $this
     */
    public function __construct(
        Context $context,
        Data $helper,
        EventManager $eventManager
    )
    {
        $this->helper       = $helper;
        $this->eventManager = $eventManager;
        parent::__construct($context);
    }

    /**
     * Default execution method
     */
    public function execute()
    {
        $this->eventManager->dispatch('custom_module_event_before');
        $this->setMessage('Thanks');
        
        echo $this->helper->toUpperCase(__('Welcome to Custom Fronten Controller'));
        echo '<br/>';
        echo $this->helper->toLowerCase(__('This is a welcome message'));
        echo '<br/>';
        echo $this->getMessage();
        
        $this->eventManager->dispatch('custom_module_event_after');
    }

    /**
     * @param  string $msg
     * @return $this
     */
    public function setMessage($msg)
    {
        $this->msg = $msg;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->msg;
    }

}