<?php

namespace ContainerPHGuKuQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_0XGYcLEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.0XGYcLE' shared service.
     *
     * @return \App\Controller\ReferentielRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\ReferentielController::listReferentiels()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Controller\\ReferentielRepository". Did you forget to add a use statement?');
    }
}
