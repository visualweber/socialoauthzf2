<?php
namespace SocialOAuth\Client;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class GoogleFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $me = new \SocialOAuth\Client\Google;
        $cf = $serviceLocator->get('Config');
        $me->setOptions(new \SocialOAuth\ClientOptions($cf['socialoauth']['google']));
        return $me;
    }
}