<?php

namespace ContainerS87Iql3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_4cfV7Q4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.4cfV7Q4' shared service.
     *
     * @return \App\Repository\TagRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\GroupeTagController::index()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Repository\\TagRepository".');
    }
}
