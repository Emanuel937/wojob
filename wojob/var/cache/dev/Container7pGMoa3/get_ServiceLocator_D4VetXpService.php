<?php

namespace Container7pGMoa3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D4VetXpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D4VetXp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D4VetXp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'connectionScript' => ['privates', 'App\\Script\\ConnectionScript', 'getConnectionScriptService', true],
        ], [
            'connectionScript' => 'App\\Script\\ConnectionScript',
        ]);
    }
}
