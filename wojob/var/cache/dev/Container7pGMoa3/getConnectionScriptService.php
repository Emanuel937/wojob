<?php

namespace Container7pGMoa3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConnectionScriptService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Script\ConnectionScript' shared autowired service.
     *
     * @return \App\Script\ConnectionScript
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Script/ConnectionScript.php';

        return $container->privates['App\\Script\\ConnectionScript'] = new \App\Script\ConnectionScript();
    }
}