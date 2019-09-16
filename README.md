# Magento Architecture 

This is a module which cover the topics from the Unit 1 for the certification exam. You can found comments in each file created to the module purpose and some other related info here at the README file. 

### composer.json

1. The composer.json file is one of the three required files to bootstrap a module.

## Questions (from [M2 Certification Study Guides](https://github.com/df2k2/m2cert))

### What are the significant steps to add a new module?

Demonstrated at the module, files needed to bootstrap a Magento 2 module are: `registration.php`, `composer.json` and `etc/module.xml`

### i18n subdirectory

1. The Magento application enables you to localize your store for multiple regions and markets.
2. A transalation dictionary is a comma-separated value (csv) file with at least two columns: the original phrase in the en_US locale and a transalation of that phrase in an another locale.
3. Your custom module could has its own i18n subdirectory to add some phrases you or people using your module could translate.
4. Besides to create your `i18n` subdirectory you should use the `__()` method in prhases you want to translate. 

### What are the different Composer package types? 

At line 7 of the composer.json file you can find a `type` field that you need to add when you are packing a component. The magento 2 composer package types could be:

- magento2-module
- magento2-theme
- magento2-language

### When would you place a module in the app/code folder versus another location?

While I am developing this module lives into the app/code folder because it solves an specific requiremnt. If I package and publish it then the module will live at the vendor folder as any other third-party module installed using composer.

### What are the naming conventions, and how are namespaces established?



### How can you identify the files responsible for some functionality?