<?php

namespace E4W\ZfcUser\RedirectUrl\Factory\Controller;

use E4W\ZfcUser\RedirectUrl\Controller\RedirectCallback;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class RedirectCallableFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return RedirectCallback
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /* @var \Zend\Router\RouteInterface $router */
        $router = $container->get('Router');

        /* @var \Zend\Mvc\Application $application */
        $application = $container->get('Application');

        /* @var \ZfcUser\Options\ModuleOptions $zfcUserOtions */
        $zfcUserOtions = $container->get('zfcuser_module_options');

        /* @var \E4W\ZfcUser\RedirectUrl\Options\ModuleOptions $options */
        $options = $container->get('E4W\ZfcUser\RedirectUrl\ModuleOptions');

        return new RedirectCallback($application, $router, $zfcUserOtions, $options);
    }
}
