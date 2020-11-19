<?php

namespace ContainerRZUwtbS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ULYp6GSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uLYp6GS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uLYp6GS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'referentiel' => ['privates', '.errored..service_locator.uLYp6GS.App\\Entity\\Referentiel', NULL, 'Cannot autowire service ".service_locator.uLYp6GS": it references class "App\\Entity\\Referentiel" but no such service exists.'],
            'repo' => ['privates', 'App\\Repository\\CompetenceRepository', 'getCompetenceRepositoryService', true],
        ], [
            'em' => '?',
            'referentiel' => 'App\\Entity\\Referentiel',
            'repo' => 'App\\Repository\\CompetenceRepository',
        ]);
    }
}
