<?php declare(strict_types=1);

namespace Robots;

return [
    'controllers' => [
        'factories' => [
            'Robots\Controller\Robots' => Service\Controller\RobotsControllerFactory::class
        ],
    ],
    'router' => [
        'routes' => [
            'robots' => [
                'type' => \Laminas\Router\Http\Literal::class,
                'options' => [
                    'route' => '/robots.txt',
                    'defaults' => [
                        '__NAMESPACE__' => 'Robots\Controller',
                        'controller' => 'Robots',
                        'action' => 'robots',
                    ],
                ],
            ],
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'Robots\Form\ConfigForm' => Form\ConfigForm::class
        ],
    ],
    'robots' => [
        'config' => [
            'robots_content' => '',
        ],
    ],
];

?>