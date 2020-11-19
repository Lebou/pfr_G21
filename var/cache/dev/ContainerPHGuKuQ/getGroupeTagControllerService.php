<?php

namespace ContainerPHGuKuQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupeTagControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GroupeTagController' shared autowired service.
     *
     * @return \App\Controller\GroupeTagController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\GroupeTagController.php';

        $container->services['App\\Controller\\GroupeTagController'] = $instance = new \App\Controller\GroupeTagController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\GroupeTagController', $container));

        return $instance;
    }
}
