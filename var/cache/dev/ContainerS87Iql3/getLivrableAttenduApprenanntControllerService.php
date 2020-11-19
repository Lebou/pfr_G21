<?php

namespace ContainerS87Iql3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLivrableAttenduApprenanntControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LivrableAttenduApprenanntController' shared autowired service.
     *
     * @return \App\Controller\LivrableAttenduApprenanntController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\LivrableAttenduApprenanntController.php';

        $container->services['App\\Controller\\LivrableAttenduApprenanntController'] = $instance = new \App\Controller\LivrableAttenduApprenanntController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['App\\Repository\\ApprenantRepository'] ?? $container->load('getApprenantRepositoryService')), ($container->privates['App\\Repository\\LivrableAttenduRepository'] ?? $container->load('getLivrableAttenduRepositoryService')), ($container->privates['App\\Repository\\GroupPromoRepository'] ?? $container->load('getGroupPromoRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\LivrableAttenduApprenanntController', $container));

        return $instance;
    }
}
