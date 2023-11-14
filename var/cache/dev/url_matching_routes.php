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
        '/back/gestion-des-avis' => [[['_route' => 'app_avis', '_controller' => 'App\\Controller\\AvisController::index'], null, null, null, false, false, null]],
        '/back/gestion-des-avis/nouveau' => [[['_route' => 'app_avis_new', '_controller' => 'App\\Controller\\AvisController::new'], null, null, null, false, false, null]],
        '/back/gestion-des-messages' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact_new', '_controller' => 'App\\Controller\\ContactController::add'], null, null, null, false, false, null]],
        '/back/gestion-des-employes' => [[['_route' => 'app_employee', '_controller' => 'App\\Controller\\EmployeeController::index'], null, null, null, false, false, null]],
        '/back/gestion-des-employes/nouveau' => [[['_route' => 'app_registration', '_controller' => 'App\\Controller\\EmployeeController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/gestion-des-horaires' => [[['_route' => 'app_horaires', '_controller' => 'App\\Controller\\HorairesController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_security', '_controller' => 'App\\Controller\\SecurityController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/back/gestion-des-services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\ServicesController::index'], null, null, null, false, false, null]],
        '/back/gestion-des-ventes' => [[['_route' => 'app_vente_vehicule', '_controller' => 'App\\Controller\\VenteVehiculeController::index'], null, null, null, false, false, null]],
        '/back/gestion-des-ventes/nouveau' => [[['_route' => 'app_vente_vehicule_new', '_controller' => 'App\\Controller\\VenteVehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/back/gestion\\-des\\-(?'
                    .'|avis/(?'
                        .'|approuver/([^/]++)(*:218)'
                        .'|desapprouver/([^/]++)(*:247)'
                        .'|supprimer/([^/]++)(*:273)'
                    .')'
                    .'|messages/supprimer/([^/]++)(*:309)'
                    .'|employes/(?'
                        .'|edition/([^/]++)(*:345)'
                        .'|suppression/([^/]++)(*:373)'
                    .')'
                    .'|horaires/edition/([^/]++)(*:407)'
                    .'|services/edition/([^/]++)(*:440)'
                    .'|ventes/(?'
                        .'|edition/([^/]++)(*:474)'
                        .'|suppression/([^/]++)(*:502)'
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
        218 => [[['_route' => 'app_avis_approve', '_controller' => 'App\\Controller\\AvisController::approve'], ['id'], null, null, false, true, null]],
        247 => [[['_route' => 'app_avis_desapprove', '_controller' => 'App\\Controller\\AvisController::desapprove'], ['id'], null, null, false, true, null]],
        273 => [[['_route' => 'app_avis_delete', '_controller' => 'App\\Controller\\AvisController::delete'], ['id'], null, null, false, true, null]],
        309 => [[['_route' => 'app_contact_delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], null, null, false, true, null]],
        345 => [[['_route' => 'app_gestion_employee_edit', '_controller' => 'App\\Controller\\EmployeeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        373 => [[['_route' => 'app_gestion_employee_delete', '_controller' => 'App\\Controller\\EmployeeController::delete'], ['id'], ['GET' => 0], null, false, true, null]],
        407 => [[['_route' => 'app_gestion_horaires_edit', '_controller' => 'App\\Controller\\HorairesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        440 => [[['_route' => 'app_services_edit', '_controller' => 'App\\Controller\\ServicesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        474 => [[['_route' => 'app_vente_vehicule_edit', '_controller' => 'App\\Controller\\VenteVehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        502 => [
            [['_route' => 'app_vente_vehicule_delete', '_controller' => 'App\\Controller\\VenteVehiculeController::delete'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
