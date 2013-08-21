<?php

return array(
     'navigation' => array(
         'default' => array(
             array(
                 'label' => 'Home',
                 'route' => 'home',
            ),
			array(
                 'label' => 'Login',
                 'route' => 'zfcuser', 
				 'controller' => 'User',
				 'action'     => 'login',
				 'resource'	  => 'ZfcUser\Controller\User',
				 'privilege'  => 'login',
             ),
			 array(
                 'label' => 'Logout',
                 'route' => 'zfcuser/logout', 
				 'controller' => 'User',
				 'action'     => 'logout',
				 'resource'	  => 'ZfcUser\Controller\User',
				 'privilege'  => 'logout',
             ),
			 array(
                 'label' => 'User',
                 'route' => 'zfcuser/authenticate', 
				 'controller' => 'User',
				 'action'     => 'logout',
				 'resource'	  => 'ZfcUser\Controller\User',
				 'privilege'  => 'logout',
             ),
		),
		
	),
     'service_manager' => array(
         'factories' => array(
             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
         ),
     ),
);