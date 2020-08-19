<?php

namespace Container7Vzo9BF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V029P5NService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.V029P5N' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.V029P5N'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', '.errored.4cfV7Q4', NULL, 'Cannot determine controller argument for "App\\Controller\\GroupeTagController::index()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Repository\\TagRepository".'],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'em' => '?',
            'repo' => '?',
            'serializer' => '?',
        ]);
    }
}
