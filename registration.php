<?php 

/**
 * Certification comments:
 * 
 * 1. registration.php is one of the three require files to bootstrap a module
 * 2. This files adds the module to the static list of components after that go locate the etc/module file
 * 3. This files needs to implement the register method from the 
 *    \Magento\Framework\Component\ComponentRegistrar class
 * 4. The register method needs 3 parameters: type, componentName and path
 * 5. In this case we are bootstraping a MODULE component (other values could be THEME or PACKAGE)
 * 6. The name of the component requires to parts - Vendor + _ + Module
 * 7. path = __DIR__ means current script directory
 */

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Barranco_MagentoArchitecture',
    __DIR__
);