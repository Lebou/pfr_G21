<?php

namespace ContainerZGPxu85;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ReoWKSPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ReoWKSP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ReoWKSP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'groupeTag' => ['privates', '.errored..service_locator.ReoWKSP.App\\Entity\\GroupeTag', NULL, 'Cannot autowire service ".service_locator.ReoWKSP": it references class "App\\Entity\\GroupeTag" but no such service exists.'],
            'repo' => ['privates', '.errored.Onrsqj2', NULL, 'Cannot determine controller argument for "App\\Controller\\GroupeTagController::removeTag()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Repository\\TagRepository".'],
        ], [
            'em' => '?',
            'groupeTag' => 'App\\Entity\\GroupeTag',
            'repo' => '?',
        ]);
    }
}
