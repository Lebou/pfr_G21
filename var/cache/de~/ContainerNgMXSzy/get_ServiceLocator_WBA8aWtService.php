<?php

namespace ContainerNgMXSzy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WBA8aWtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wBA8aWt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wBA8aWt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'object' => ['privates', '.errored..service_locator.wBA8aWt.App\\Entity\\GroupCompetence', NULL, 'Cannot autowire service ".service_locator.wBA8aWt": it references class "App\\Entity\\GroupCompetence" but no such service exists.'],
        ], [
            'object' => 'App\\Entity\\GroupCompetence',
        ]);
    }
}
