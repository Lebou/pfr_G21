<?php

namespace ContainerS87Iql3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F4UXasService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f4U_xas' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f4U_xas'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', '.errored.0XGYcLE', NULL, 'Cannot determine controller argument for "App\\Controller\\ReferentielController::listReferentiels()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Controller\\ReferentielRepository". Did you forget to add a use statement?'],
        ], [
            'repo' => '?',
        ]);
    }
}
