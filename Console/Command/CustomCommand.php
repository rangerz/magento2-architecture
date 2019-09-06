<?php
/**
 * Certification comments
 * 
 * 1. Magento has one command-line interface that performs both installation and configuration tasks
 * 2. When runing bin/magento on the command line, a list of available commands to run is output
 * 3. Code for commands should reside in the Console subdirectory of a module. Recommended location is
 *    <your component root dir>/Console/Command subdirectory.
 */

namespace Barranco\MagentoArchitecture\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CustomCommand extends Command
{

    /**
     * Certification comments
     * 
     * 1. This method is used to configures the current command
     */
    protected function configure()
    {
        $this->setName('barranco:custom:command');
        $this->setDescription('Custom command example');

        parent::configure();
    }

    /**
     * Certification comments
     * 
     * 1. This method is used to executes current command
     * 
     * @param  Symfony\Component\Console\Input\InputInterface $input
     * @param  Symfony\Component\Console\Outpur\OutputInterface $output
     * @return null|int null or 0 if everything went fine, or an error code 
     * @throws Symfony\Component\Console\Exception\LogicException
     */
    protected function execute(
        InputInterface $input,
        OutputInterface $output
    )
    {
        $output->writln('<info>Success Message</info>');
        $output->writln('<error>Error Message</error>');
    }
}