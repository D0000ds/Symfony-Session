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
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/programme/new' => [[['_route' => 'new_programme', '_controller' => 'App\\Controller\\ProgrammeController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/session/new' => [[['_route' => 'new_session', '_controller' => 'App\\Controller\\SessionController::new'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'app_session', '_controller' => 'App\\Controller\\SessionController::index'], null, null, null, false, false, null]],
        '/stagiaire' => [[['_route' => 'app_stagiaire', '_controller' => 'App\\Controller\\StagiaireController::index'], null, null, null, false, false, null]],
        '/stagiaire/new' => [[['_route' => 'new_stagiaire', '_controller' => 'App\\Controller\\StagiaireController::new'], null, null, null, false, false, null]],
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
                .'|/s(?'
                    .'|ession/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:200)'
                            .'|(*:208)'
                        .')'
                        .'|del/([^/]++)(?'
                            .'|/([^/]++)(*:241)'
                            .'|(*:249)'
                        .')'
                        .'|add/([^/]++)/([^/]++)(*:279)'
                    .')'
                    .'|tagiaire/(?'
                        .'|([^/]++)(?'
                            .'|/edit(*:316)'
                            .'|(*:324)'
                        .')'
                        .'|del/([^/]++)(*:345)'
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
        200 => [[['_route' => 'edit_session', '_controller' => 'App\\Controller\\SessionController::edit'], ['id'], null, null, false, false, null]],
        208 => [[['_route' => 'detail_session', '_controller' => 'App\\Controller\\SessionController::detail'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'delete_stagiaire_session', '_controller' => 'App\\Controller\\SessionController::deleteStagiaire'], ['id', 'idSta'], null, null, false, true, null]],
        249 => [[['_route' => 'del_session', '_controller' => 'App\\Controller\\SessionController::Delete'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'add_stagiaire_session', '_controller' => 'App\\Controller\\SessionController::addStagiaire'], ['id', 'idSta'], null, null, false, true, null]],
        316 => [[['_route' => 'edit_stagiaire', '_controller' => 'App\\Controller\\StagiaireController::edit'], ['id'], null, null, false, false, null]],
        324 => [[['_route' => 'detail_stagiaire', '_controller' => 'App\\Controller\\StagiaireController::Detail'], ['id'], null, null, false, true, null]],
        345 => [
            [['_route' => 'del_stagiaire', '_controller' => 'App\\Controller\\StagiaireController::Delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
