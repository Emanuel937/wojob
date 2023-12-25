<?php

namespace Container7pGMoa3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CFHKh3QService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CFHKh3Q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CFHKh3Q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'makeAnnonce' => ['privates', 'App\\Script\\MakeAnnonceScript', 'getMakeAnnonceScriptService', true],
        ], [
            'makeAnnonce' => 'App\\Script\\MakeAnnonceScript',
        ]);
    }
}
