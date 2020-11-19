<?php

namespace ContainerPHGuKuQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GYl0EzxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gYl0Ezx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gYl0Ezx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\ApprenantLivrablePartielRepository', 'getApprenantLivrablePartielRepositoryService', true],
            'repoApprenant' => ['privates', 'App\\Repository\\ApprenantRepository', 'getApprenantRepositoryService', true],
            'repoLivrablePartiel' => ['privates', 'App\\Repository\\LivrablePartielRepository', 'getLivrablePartielRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\ApprenantLivrablePartielRepository',
            'repoApprenant' => 'App\\Repository\\ApprenantRepository',
            'repoLivrablePartiel' => 'App\\Repository\\LivrablePartielRepository',
        ]);
    }
}
