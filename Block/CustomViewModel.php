<?php
/**
 * Certification comments
 * 
 * 1. Magento Blocks perform or provide business logic for the templates
 * 2. In the MVVM methodology Blocks are "View Models"
 * 3. View Models allows developers to offload features and business logic from block classes into
 *    separate classes that are easier to maintain, test, and reuse.
 * 4. Each View Model must implement \Magento\Framework\View\Element\Block\ArgumentInterface
 * 5. Use this approach anytime you need to inject functionality into template files and your code does
 *    not need to be backwards compatible with Magento 2.1.x
 * 6. You need declare your Blocks (View Models) in layout XML like this:
 * 
 *    <referenceContainer name="content">
 *      <block name="custom-block" template="Barranco_MagentoArchitecture::custom.phtml">
 *        <arguments>
 *          <argument name="view_model"
 *                    xsi:type="object">Barranco\MagentoArchitecture\Block\CustomViewmodel</argument>
 *        </arguments>
 *      </block>
 *    </referenceContainer>
 * 
 * 7. Since Magento 2.2.1 you don't need to specify class argument on the block node.
 * 8. Once you declare yout View Model in layout you can use is in the template like this:
 * 
 *    <?php $viewModel = $block->getData('view_model'); ?>
 *    <?php echo $viewModel->getCustomViewModelExample(); ?>
 * 
 */

namespace Barranco\MagentoArchitecture\Block;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class CustomViewModel implements ArgumentInterface
{

    /**
     * Certification comments
     * 
     * 1. Custom example method to ilustrate 
     * 
     * @return string
     */
    public function getCustomViewModelExample()
    {
        return 'Hi from the View Model';
    }
}