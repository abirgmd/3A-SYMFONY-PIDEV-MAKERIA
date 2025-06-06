<?php

namespace ContainerRxzOhNr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SJArFDdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SJArFDd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SJArFDd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'message' => ['privates', '.errored..service_locator.SJArFDd.App\\Entity\\Message', NULL, 'Cannot autowire service ".service_locator.SJArFDd": it needs an instance of "App\\Entity\\Message" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'message' => 'App\\Entity\\Message',
        ]);
    }
}
