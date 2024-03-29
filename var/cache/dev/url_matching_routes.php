<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/first' => [[['_route' => 'app_first', '_controller' => 'App\\Controller\\FirstController::index'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session', '_controller' => 'App\\Controller\\SessionController::index'], null, null, null, false, false, null]],
        '/todo' => [[['_route' => 'todo', '_controller' => 'App\\Controller\\TodoController::index'], null, null, null, true, false, null]],
        '/todo/reset' => [[['_route' => 'todo.reset', '_controller' => 'App\\Controller\\TodoController::resetTodo'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/sayHello/([^/]++)/([^/]++)(*:196)'
                .'|/multi/(\\d+)/(\\d+)(*:222)'
                .'|/t(?'
                    .'|ab(?:/(\\d+))?(*:248)'
                    .'|odo/(?'
                        .'|add(?:/([^/]++)(?:/([^/]++))?)?(*:294)'
                        .'|update/([^/]++)/([^/]++)(*:326)'
                        .'|delete/([^/]++)(*:349)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'say.hello', '_controller' => 'App\\Controller\\FirstController::sayHello'], ['name', 'firstname'], null, null, false, true, null]],
        222 => [[['_route' => 'multiplication', '_controller' => 'App\\Controller\\FirstController::multiplication'], ['entier1', 'entier2'], null, null, false, true, null]],
        248 => [[['_route' => 'tab', 'nb' => '5', '_controller' => 'App\\Controller\\TabController::index'], ['nb'], null, null, false, true, null]],
        294 => [[['_route' => 'todo.add', 'content' => 'sf6', 'name' => 'samedi', '_controller' => 'App\\Controller\\TodoController::addTodo'], ['name', 'content'], null, null, false, true, null]],
        326 => [[['_route' => 'todo.update', '_controller' => 'App\\Controller\\TodoController::updateTodo'], ['name', 'content'], null, null, false, true, null]],
        349 => [
            [['_route' => 'todo.delete', '_controller' => 'App\\Controller\\TodoController::deleteTodo'], ['name'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
