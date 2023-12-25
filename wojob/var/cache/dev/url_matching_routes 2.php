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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_app_number', '_controller' => 'App\\Controller\\AppController::number'], null, null, null, false, false, null]],
        '/chat' => [[['_route' => 'chat', '_controller' => 'App\\Controller\\ChatController::SendMsg'], null, null, null, false, false, null]],
        '/chat/text' => [[['_route' => 'texts', '_controller' => 'App\\Controller\\ChatText::findText'], null, ['POST' => 0], null, false, false, null]],
        '/annonce/make' => [[['_route' => 'makeannone', '_controller' => 'App\\Controller\\MakeAnnonce::userMakeAnnonce'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PageController::home'], null, null, null, false, false, null]],
        '/make_video_studio' => [[['_route' => 'm_v_s', '_controller' => 'App\\Controller\\PageController::studio_make_video'], null, null, null, false, false, null]],
        '/studio_video' => [[['_route' => 'studioVideo', '_controller' => 'App\\Controller\\PageController::studio_annonce'], null, null, null, false, false, null]],
        '/video' => [[['_route' => 'video', '_controller' => 'App\\Controller\\PageController::video'], null, null, null, false, false, null]],
        '/annonce' => [[['_route' => 'recruter', '_controller' => 'App\\Controller\\PageController::listJob'], null, null, null, false, false, null]],
        '/infojob' => [[['_route' => 'infojob', '_controller' => 'App\\Controller\\PageController::infojob'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session', '_controller' => 'App\\Controller\\PageController::killSession'], null, null, null, false, false, null]],
        '/upload' => [[['_route' => 'upload', '_controller' => 'App\\Controller\\PageController::uploadVideo'], null, ['POST' => 0], null, false, false, null]],
        '/find/recruter/candidat' => [[['_route' => 'tchat', '_controller' => 'App\\Controller\\PageController::tchat'], null, null, null, false, false, null]],
        '/candidat/find' => [[['_route' => 'searchcandidat', '_controller' => 'App\\Controller\\ResultController::resultOfCandidat'], null, ['POST' => 0], null, false, false, null]],
        '/search/annonce' => [[['_route' => 'searchAnnonce', '_controller' => 'App\\Controller\\ResultController::searchAnnonce'], null, ['POST' => 0], null, false, false, null]],
        '/signin' => [[['_route' => 'signin', '_controller' => 'App\\Controller\\SingController::sinIn'], null, null, null, false, false, null]],
        '/signup' => [[['_route' => 'signup', '_controller' => 'App\\Controller\\SingController::sinUp'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::user'], null, null, null, false, false, null]],
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
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
