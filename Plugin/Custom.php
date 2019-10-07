<?php
/**
 * Certification comments:
 * 
 * 1. A plugin, or interceptor, is a class that modifies the behavior of public class functions 
 *    by intercepting a function call and running code before, after, or around that function 
 *    call.
 * 2. Your Plugin class implementation changes the behavior of a class function, but it does not 
 *    change the class itself.
 * 3. Magento puts them in the Plugin module subdirectory which makes them easy to find.
 * 4. It is a Magento best practice to capitalize the first letter of the class method name for
 *    which you want to create a plugin before adding before, around or after prefixes to it.
 * 
 */
namespace Barranco\MagentoArchitecture\Plugin;

class Custom
{

    /**
     * Certification comments:
     * 
     * 1. Magento runs all before methods ahead of the call to an observed method.
     * 2. You can use before methods to change the arguments of an observed method by returning 
     *    a modified argument.
     * 3. If there is more than one argument, the method should return an array of those 
     *    arguments.
     * 4. If the method does not change the argument for the observed method, it should return a 
     *    null value.
     * 
     * @param   \Barranco\MagentoArchitecture\Controller\Index\Index $subject
     * @param   string $msg
     * @return  array
     */
    public function beforeSetMessage(
        \Barranco\MagentoArchitecture\Controller\Index\Index $subject,
        $msg
    )
    {
        $msg = $msg . ' for ';
        echo __METHOD__ . '<br/>';

        return [$msg];
    }

    /**
     * Certification comments:
     * 
     * 1. Magento runs all after methods following the completion of the observed method.
     * 2. Magento REQUIRES these methods have a return value.
     * 3. You can use these methods to change the result of an observed method by modifying the 
     *    original result and returning it at the end of the method.
     * 4. The after methods have access to all the arguments of their observed methods. 
     * 5. If the observed method does not return a result then it passes a null value to the 
     *    next after method.
     * 6. After methods do not need to declare all the arguments of their observed methods 
     *    except those that the method uses and any arguments from the observed method that come 
     *    before those used arguments.
     * 
     * @param   \Barranco\MagentoArchitecture\Controller\Index\Index $subject
     * @param   string $msg
     * @return  string
     */
    public function afterGetMessage(
        \Barranco\MagentoArchitecture\Controller\Index\Index $subject,
        $msg
    )
    {
        echo __METHOD__ . '<br/>';

        return '<strong>' . $msg . ' comming </strong>';
    }

    /**
     * Certification comments:
     * 
     * 1. Magento runs the code in around methods before and after their observed methods.
     * 2. Before the list of the original method’s arguments, around methods receive a callable 
     *    that will allow a call to the next method in the chain. 
     * 3. If the around method does not call the callable, it will prevent the execution of all 
     *    the plugins next in the chain and the original method call.
     * 4. Avoid using around method plugins when they are not required because they increase 
     *    stack traces and affect performance.
     * 
     * @param   \Barranco\MagentoArchitecture\Controller\Index\Index $subject
     * @param   callable $proceed
     * @return  callable()
     */
    public function aroundGetMessage(
        \Barranco\MagentoArchitecture\Controller\Index\Index $subject,
        callable $proceed
    )
    {
        echo __METHOD__ . '<br/>';

        $result = $proceed();

        echo __METHOD__ . '<br/>';

        return $result;
    }
}