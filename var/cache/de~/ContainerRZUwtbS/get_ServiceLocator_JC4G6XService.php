<?php

namespace ContainerRZUwtbS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JC4G6XService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.J_C4G6X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.J_C4G6X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repoPDS' => ['privates', 'App\\Repository\\ProfilSortieRepository', 'getProfilSortieRepositoryService', true],
            'serialize' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'repoPDS' => 'App\\Repository\\ProfilSortieRepository',
            'serialize' => '?',
        ]);
    }
}
