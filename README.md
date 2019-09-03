# Magento Architecture 

This is a module which cover the topics from the Unit 1 for the certification exam. You can found comments in each file created to the module purpose and some other related info here at the README file. 

### composer.json

1. The composer.json file is one of the three required files to bootstrap a module.

## Questions (from [M2 Certification Study Guides](https://github.com/df2k2/m2cert))

### What are the significant steps to add a new module?

Demonstrated at the module, files needed to bootstrap a Magento 2 module are: `registration.php`, `composer.json` and `etc/module.xml`

### What are the different Composer package types? 

At line 7 of the composer.json file you can find a `type` field that you need to add when you are packing a component. The magento 2 composer package types could be:

- magento2-module
- magento2-theme
- magento2-language

### When would you place a module in the app/code folder versus another location?

While I am developing this module lives into the app/code folder because it solves an specific requiremnt. If I package and publish it then the module will live at the vendor folder as any other third-party module installed using composer.

### What are the naming conventions, and how are namespaces established?



### How can you identify the files responsible for some functionality?