<?php

namespace E4W\ZfcUser\RedirectUrl\Factory\Options;

use E4W\ZfcUser\RedirectUrl\Options\ModuleOptions;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return ModuleOptions
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('Config');

        $service = new ModuleOptions($config['e4wzfcuserredirecturl']);
        return $service;
    }
}
