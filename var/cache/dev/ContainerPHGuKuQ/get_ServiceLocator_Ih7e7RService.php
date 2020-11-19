<?php

namespace ContainerPHGuKuQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ih7e7RService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ih7e7_R' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ih7e7_R'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repoApplivrablePartiel' => ['privates', 'App\\Repository\\ApprenantLivrablePartielRepository', 'getApprenantLivrablePartielRepositoryService', true],
            'repoApprenant' => ['privates', 'App\\Repository\\ApprenantRepository', 'getApprenantRepositoryService', true],
            'repoCompetence' => ['privates', 'App\\Repository\\CompetenceRepository', 'getCompetenceRepositoryService', true],
            'repoComptVal' => ['privates', 'App\\Repository\\CompetencesValidesRepository', 'getCompetencesValidesRepositoryService', true],
            'repoNiveaux' => ['privates', 'App\\Repository\\NiveauRepository', 'getNiveauRepositoryService', true],
        ], [
            'repoApplivrablePartiel' => 'App\\Repository\\ApprenantLivrablePartielRepository',
            'repoApprenant' => 'App\\Repository\\ApprenantRepository',
            'repoCompetence' => 'App\\Repository\\CompetenceRepository',
            'repoComptVal' => 'App\\Repository\\CompetencesValidesRepository',
            'repoNiveaux' => 'App\\Repository\\NiveauRepository',
        ]);
    }
}
