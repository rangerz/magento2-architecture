<?php 

/**
 * Certification comments:
 * 
 * 1. registration.php is one of the three require files to bootstrap a module
 */

\Magento\Framework\Component\ComponentRegistrar::register(
	\Magento\Framework\Component\ComponentRegistrar::MODULE,
	'Barranco_MagentoArchitecture',
	__DIR__
);