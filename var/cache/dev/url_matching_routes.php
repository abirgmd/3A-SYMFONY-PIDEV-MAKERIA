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
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commentaire/new' => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evaluation' => [[['_route' => 'app_evaluation_index', '_controller' => 'App\\Controller\\EvaluationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evaluation/new' => [[['_route' => 'app_evaluation_new', '_controller' => 'App\\Controller\\EvaluationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, false, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/message' => [[['_route' => 'app_message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/message/new' => [[['_route' => 'app_message_new', '_controller' => 'App\\Controller\\MessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/about.html' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\PageController::aboutus'], null, null, null, false, false, null]],
        '/photography.html' => [[['_route' => 'app_produits', '_controller' => 'App\\Controller\\PageController::product'], null, null, null, false, false, null]],
        '/blog.html' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\PageController::blog'], null, null, null, false, false, null]],
        '/contact.html' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PageController::contact'], null, null, null, false, false, null]],
        '/forum' => [[['_route' => 'app_forum', '_controller' => 'App\\Controller\\PageController::forum'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\PageController::dashboard'], null, null, null, false, false, null]],
        '/produit/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reply' => [[['_route' => 'app_reply_index', '_controller' => 'App\\Controller\\ReplyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reply/new' => [[['_route' => 'app_reply_new', '_controller' => 'App\\Controller\\ReplyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reponses' => [[['_route' => 'app_reponses_index', '_controller' => 'App\\Controller\\ReponsesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reponses/new' => [[['_route' => 'app_reponses_new', '_controller' => 'App\\Controller\\ReponsesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user/new/artist' => [[['_route' => 'app_artist_add', '_controller' => 'App\\Controller\\UserController::artist'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:227)'
                        .'|/edit(*:240)'
                        .'|(*:248)'
                    .')'
                    .'|ommentaire/([^/]++)(?'
                        .'|(*:279)'
                        .'|/edit(*:292)'
                        .'|(*:300)'
                    .')'
                .')'
                .'|/ev(?'
                    .'|aluation/([^/]++)(?'
                        .'|(*:336)'
                        .'|/edit(*:349)'
                        .'|(*:357)'
                    .')'
                    .'|ent/([^/]++)(?'
                        .'|(*:381)'
                        .'|/edit(*:394)'
                        .'|(*:402)'
                    .')'
                .')'
                .'|/message/(?'
                    .'|([^/]++)(?'
                        .'|(*:435)'
                        .'|/edit(*:448)'
                    .')'
                    .'|message/([^/]++)/delete(?'
                        .'|(*:483)'
                        .'|2(*:492)'
                    .')'
                .')'
                .'|/detail(?:/([^/]++))?(*:523)'
                .'|/bdetail/([^/]++)(*:548)'
                .'|/produit/([^/]++)(?'
                    .'|(*:576)'
                    .'|/edit(*:589)'
                    .'|(*:597)'
                .')'
                .'|/re(?'
                    .'|clamation/([^/]++)(?'
                        .'|(*:633)'
                        .'|/edit(*:646)'
                        .'|(*:654)'
                    .')'
                    .'|p(?'
                        .'|ly/(?'
                            .'|([^/]++)(?'
                                .'|(*:684)'
                                .'|/edit(*:697)'
                            .')'
                            .'|reply/([^/]++)/delete(?'
                                .'|(*:730)'
                                .'|2(*:739)'
                            .')'
                        .')'
                        .'|onses/([^/]++)(?'
                            .'|(*:766)'
                            .'|/edit(*:779)'
                            .'|(*:787)'
                        .')'
                    .')'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:815)'
                    .'|/edit(*:828)'
                    .'|(*:836)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        227 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        248 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        279 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        292 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        300 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        336 => [[['_route' => 'app_evaluation_show', '_controller' => 'App\\Controller\\EvaluationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        349 => [[['_route' => 'app_evaluation_edit', '_controller' => 'App\\Controller\\EvaluationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'app_evaluation_delete', '_controller' => 'App\\Controller\\EvaluationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        381 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        402 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        435 => [[['_route' => 'app_message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        448 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        483 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        492 => [[['_route' => 'app_message_delete2', '_controller' => 'App\\Controller\\MessageController::delete2'], ['id'], ['POST' => 0], null, false, false, null]],
        523 => [[['_route' => 'app_detail', 'id' => '1', '_controller' => 'App\\Controller\\PageController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        548 => [[['_route' => 'app_bdetail', '_controller' => 'App\\Controller\\PageController::bdetail'], ['id'], null, null, false, true, null]],
        576 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        589 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        597 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        633 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        646 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        654 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        684 => [[['_route' => 'app_reply_show', '_controller' => 'App\\Controller\\ReplyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        697 => [[['_route' => 'app_reply_edit', '_controller' => 'App\\Controller\\ReplyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        730 => [[['_route' => 'app_reply_delete', '_controller' => 'App\\Controller\\ReplyController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        739 => [[['_route' => 'app_reply_delete2', '_controller' => 'App\\Controller\\ReplyController::delete2'], ['id'], ['POST' => 0], null, false, false, null]],
        766 => [[['_route' => 'app_reponses_show', '_controller' => 'App\\Controller\\ReponsesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        779 => [[['_route' => 'app_reponses_edit', '_controller' => 'App\\Controller\\ReponsesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        787 => [[['_route' => 'app_reponses_delete', '_controller' => 'App\\Controller\\ReponsesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        815 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        828 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        836 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
