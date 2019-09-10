<?php
/**
 * Certification comments
 * 
 * 1. When a page is requested from a Magento website, the path is parsed out and matched to parameters 
 *    found in routes.xml and files found in the Controller subdirectory of a moudle.
 * 2. Action classes are extensions of the \Magento\Framework\App\Action\Action class
 * 3. Admin controllers ares extensions of the \Magento\Backend\App\Action class that extends 
 *    \Magento\Backend\App\AbstractAction class and finally this extends the 
 *    \Magento\Framework\App\Action\Action class
 */

namespace Barranco\MagentoArchitecture\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;

class Index extends Action
{

    public function execute()
    {
       echo 'Welcome to Custom Admin Controller';
    }
}