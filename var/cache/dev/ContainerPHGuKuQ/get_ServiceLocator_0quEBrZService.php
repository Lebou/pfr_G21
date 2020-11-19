<?php

namespace ContainerPHGuKuQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0quEBrZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0quEBrZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0quEBrZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', 'App\\Repository\\CompetenceRepository', 'getCompetenceRepositoryService', true],
            'serialiser' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'manager' => '?',
            'repo' => 'App\\Repository\\CompetenceRepository',
            'serialiser' => '?',
        ]);
    }
}
