<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Started;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;
use Started\Controller\UserController;

return [
    'router' => [
        'routes' => [
            'started' => [
                'type'    => Literal::class,
                'options' => [
                    'route'    => '/started',
                    'defaults' => [
                        'controller' => Controller\IndexController::class,
                        'action'     => 'index',
                    ],
                    // 'constraints' => [
                    //   'action' => '[a-zA-Z0-9]*',
                    //   'id' => '[0-9]*',
                    // ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                  'sub_route' => [
                    'type' => Segment::class,
                    'options' => [
                      'route' => '[/:action][/:id]',
                      'defaults' => [
                        'controller' => Controller\UserController::class,
                        'action' => 'login',
                      ],
                      'constraints' => [
                        'action' => '[a-zA-Z0-9]*',
                        'id' => '[0-9]*',
                      ],
                    ],
                  ]
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
            Controller\UserController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
