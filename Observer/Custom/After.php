<?php
/**
 * Certification comments
 * 
 * 1. Observers are certaing type of Magento class than can influence general behavior, 
 *    performance or change business logic.
 * 2. Observers are executed whenever the event they are configured to watch is dispatched by the 
 *    event manager.
 * 3. Your Observer class must place in your Observer module subdirectory.
 * 4. Your class should implement Magento\Framework\Event\ObserverInterface and define its 
 *    execute function.
 */
namespace Barranco\MagentoArchitecture\Observer\Custom;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
use Psr\Log\LoggerInterface;

class After implements ObserverInterface
{

    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * @param \Psr\Log\LoggerInterface
     */
    public function __construct(
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    /**
     * @return $this
     */
    public function execute(
        Observer $observer
    )
    {
        $this->logger->info('Event name: ' . $observer->getEvent()->getName());
    }
}