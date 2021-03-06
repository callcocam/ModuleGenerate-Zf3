<?php

namespace Codegenerator;

use Zend\ModuleManager\ModuleManager;

class Module
{
	public function init(ModuleManager $moduleManager)
    {
		// Set custom layout
		$sharedEvents = $moduleManager->getEventManager()->getSharedManager();
        $sharedEvents->attach(__NAMESPACE__, 'dispatch', function($e) {
            // This event will only be fired when an ActionController under the MyModule namespace is dispatched.
            $controller = $e->getTarget();
            $controller->layout('layout/codegenerator');
        }, 100);
    }
	

    
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
