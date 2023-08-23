<?php declare(strict_types=1);

namespace Robots;

require_once __DIR__ . '/vendor/autoload.php';

use Generic\AbstractModule;
use Laminas\View\Renderer\PhpRenderer;

class Module extends AbstractModule
{
    const NAMESPACE = __NAMESPACE__;
    
    /**
     * Get this module's configuration array.
     *
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}

?>