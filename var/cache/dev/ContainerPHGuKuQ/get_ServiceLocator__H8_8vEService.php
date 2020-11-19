<?php

namespace ContainerPHGuKuQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__H8_8vEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..h8.8vE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..h8.8vE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', '.errored.W_Vk.7Q', NULL, 'Cannot determine controller argument for "App\\Controller\\TagController::index()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Repository\\GroupeTagRepository".'],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'em' => '?',
            'repo' => '?',
            'serializer' => '?',
        ]);
    }
}
