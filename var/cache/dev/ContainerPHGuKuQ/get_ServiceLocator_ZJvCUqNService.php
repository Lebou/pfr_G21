<?php

namespace ContainerPHGuKuQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZJvCUqNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zJvCUqN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zJvCUqN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'briefrepo' => ['privates', 'App\\Repository\\BriefRepository', 'getBriefRepositoryService', true],
            'promoRepo' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'briefrepo' => 'App\\Repository\\BriefRepository',
            'promoRepo' => 'App\\Repository\\PromoRepository',
        ]);
    }
}
