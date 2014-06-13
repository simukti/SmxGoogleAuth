<?php
/**
 * AuthFactory
 * 
 * @author  Sarjono Mukti Aji <me@simukti.net>
 */
namespace SmxGoogleAuth\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Authentication\AuthenticationService;
use SmxGoogleAuth\Authentication\Adapter\GoogleAuth as GoogleAuthAdapter;

class AuthFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator) 
    {
        $moduleConfigs  = $serviceLocator->get('Config');
        $authenticationOptions = $moduleConfigs['auth']['google_auth'];
        
        $callbackUrl = $serviceLocator->get('Router')
                                      ->assemble(
                                            array(), 
                                            array(
                                                'name' => $authenticationOptions['callback_route'],
                                                'force_canonical' => true
                                            ));
        
        $authenticationOptions['callbackUrl'] = $callbackUrl;
        
        /* @var $sessionManager \Zend\Session\SessionManager */
        $sessionManager = $serviceLocator->get('smx.googleauth.service.session')
                                         ->getSessionManager();
        $authenticationStorage = $sessionManager->getSaveHandler();
        
        $authenticationAdapter = new GoogleAuthAdapter();
        $authenticationAdapter->setAuthenticationOptions($authenticationOptions);
        
        $authenticationService = new AuthenticationService(
                                        $authenticationStorage, 
                                        $authenticationAdapter
                                     );
        
        $authService = new Auth();
        $authService->setOptions($authenticationOptions)
                    ->setAuthenticationService($authenticationService);
        
        return $authService;
    }
}
