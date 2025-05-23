<?php

namespace ContainerWJBtpbO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GHRBFTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G_hRBFT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G_hRBFT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'produitRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
            'snappy' => ['services', 'knp_snappy.pdf', 'getKnpSnappy_PdfService', true],
            'twig' => ['privates', 'twig', 'getTwigService', false],
        ], [
            'produitRepository' => 'App\\Repository\\ProduitRepository',
            'snappy' => '?',
            'twig' => '?',
        ]);
    }
}
