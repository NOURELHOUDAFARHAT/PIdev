<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_activite_index' => [[], ['_controller' => 'App\\Controller\\ActiviteController::index'], [], [['text', '/activite/']], [], [], []],
    'app_activite_new' => [[], ['_controller' => 'App\\Controller\\ActiviteController::new'], [], [['text', '/activite/new']], [], [], []],
    'app_activite_show' => [['id'], ['_controller' => 'App\\Controller\\ActiviteController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite']], [], [], []],
    'app_activite_edit' => [['id'], ['_controller' => 'App\\Controller\\ActiviteController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/activite']], [], [], []],
    'app_activite_delete' => [['id'], ['_controller' => 'App\\Controller\\ActiviteController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/activite']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_staff_index' => [[], ['_controller' => 'App\\Controller\\StaffController::index'], [], [['text', '/staff/']], [], [], []],
    'app_staff_new' => [[], ['_controller' => 'App\\Controller\\StaffController::new'], [], [['text', '/staff/new']], [], [], []],
    'app_staff_show' => [['id'], ['_controller' => 'App\\Controller\\StaffController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/staff']], [], [], []],
    'app_staff_edit' => [['id'], ['_controller' => 'App\\Controller\\StaffController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/staff']], [], [], []],
    'app_staff_delete' => [['id'], ['_controller' => 'App\\Controller\\StaffController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/staff']], [], [], []],
    'app_tempback' => [[], ['_controller' => 'App\\Controller\\TempController::back'], [], [['text', '/back']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
