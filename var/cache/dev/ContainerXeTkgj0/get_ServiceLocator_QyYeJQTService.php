<?php

namespace ContainerXeTkgj0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QyYeJQTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QyYeJQT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QyYeJQT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'formateur' => ['privates', '.errored..service_locator.QyYeJQT.App\\Entity\\Formateur', NULL, 'Cannot autowire service ".service_locator.QyYeJQT": it references class "App\\Entity\\Formateur" but no such service exists.'],
            'formateurRepo' => ['privates', 'App\\Repository\\FormateurRepository', 'getFormateurRepositoryService', true],
            'repo' => ['privates', 'App\\Repository\\BriefRepository', 'getBriefRepositoryService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'formateur' => 'App\\Entity\\Formateur',
            'formateurRepo' => 'App\\Repository\\FormateurRepository',
            'repo' => 'App\\Repository\\BriefRepository',
            'serializer' => '?',
        ]);
    }
}
