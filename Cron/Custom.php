<?php
/**
 * Certification comments
 * 
 * 1. Cron subdirectory of a module is the standard place for storing actions that are executed
 *    on a schedule.
 * 2. Several Magento features require at least one cron job, which schedules activities to occur
 *    in the future.
 * 3. Running the cron job results in a row being added to the cron_schedule table with the name 
 *    of the cron job.
 * 4. To create custom Cron job besides to create a class to run cron you need to define it in a 
 *    crontab.xml file inside of the etc subdirectory of your module.
 */

namespace Barranco\MagentoArchitecture\Cron;

use Psr\Log\LoggerInterface;

class Custom 
{

    protected $logger;

    public function __construct(
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }

    public function execute()
    {
        $this->logger->info('Custom cron works');
    }
}