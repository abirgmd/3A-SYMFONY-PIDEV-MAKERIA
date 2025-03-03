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
        '/api/search-users' => [[['_route' => 'app_user_search', '_controller' => 'App\\Controller\\ApiUserController::searchUsers'], null, ['GET' => 0], null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/categorie/stats' => [[['_route' => 'app_categorie_stats', '_controller' => 'App\\Controller\\CategorieController::stats'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commentaire' => [[['_route' => 'app_commentaire_index', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evaluation' => [[['_route' => 'app_evaluation_index', '_controller' => 'App\\Controller\\EvaluationController::index'], null, ['GET' => 0], null, false, false, null]],
        '/evaluation/new' => [[['_route' => 'app_evaluation_new', '_controller' => 'App\\Controller\\EvaluationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evaluation/stats' => [[['_route' => 'app_evaluation_stats', '_controller' => 'App\\Controller\\EvaluationController::stats'], null, ['GET' => 0], null, false, false, null]],
        '/event' => [[['_route' => 'app_event_index', '_controller' => 'App\\Controller\\EventController::index'], null, ['GET' => 0], null, true, false, null]],
        '/event/new' => [[['_route' => 'app_event_new', '_controller' => 'App\\Controller\\EventController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/exception' => [[['_route' => 'app_exception', '_controller' => 'App\\Controller\\ExceptionController::showError'], null, null, null, false, false, null]],
        '/facture' => [[['_route' => 'app_facture_index', '_controller' => 'App\\Controller\\FactureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/facture/new' => [[['_route' => 'app_facture_new', '_controller' => 'App\\Controller\\FactureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/message' => [[['_route' => 'app_message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, false, false, null]],
        '/message/new' => [[['_route' => 'app_message_new', '_controller' => 'App\\Controller\\MessageController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\PageController::index'], null, null, null, false, false, null]],
        '/about.html' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\PageController::aboutus'], null, null, null, false, false, null]],
        '/photography.html' => [[['_route' => 'app_produits', '_controller' => 'App\\Controller\\PageController::product'], null, null, null, false, false, null]],
        '/blog.html' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\PageController::blog'], null, null, null, false, false, null]],
        '/search-events' => [[['_route' => 'search_events', '_controller' => 'App\\Controller\\PageController::searchEvents'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\PageController::contact'], null, null, null, false, false, null]],
        '/forum' => [[['_route' => 'app_forum', '_controller' => 'App\\Controller\\PageController::forum'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\PageController::dashboard'], null, null, null, false, false, null]],
        '/payer' => [[['_route' => 'payer_page', '_controller' => 'App\\Controller\\PageController::payer'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier_page', '_controller' => 'App\\Controller\\PageController::panier'], null, null, null, false, false, null]],
        '/produits/rechercher' => [[['_route' => 'produits_rechercher', '_controller' => 'App\\Controller\\PageController::rechercherProduits'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/pdf' => [[['_route' => 'app_produit_pdf', '_controller' => 'App\\Controller\\ProduitController::generatePdf'], null, ['GET' => 0], null, false, false, null]],
        '/produit/notifications' => [[['_route' => 'app_notifications', '_controller' => 'App\\Controller\\ProduitController::notifications'], null, ['GET' => 0], null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produit/apply-promotion' => [[['_route' => 'app_produit_apply_promotion', '_controller' => 'App\\Controller\\ProduitController::applyPromotion'], null, ['POST' => 0], null, false, false, null]],
        '/produit/promotions' => [[['_route' => 'app_produit_promotions', '_controller' => 'App\\Controller\\ProduitController::getPromotions'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/send-test-email' => [[['_route' => 'app_reclamation_sendtestemail', '_controller' => 'App\\Controller\\ReclamationController::sendTestEmail'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/pdf' => [[['_route' => 'app_reclamation_pdf', '_controller' => 'App\\Controller\\ReclamationController::generatePdf'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/my' => [[['_route' => 'app_reclamation_my', '_controller' => 'App\\Controller\\ReclamationController::myReclamations'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation/stats' => [[['_route' => 'app_reclamation_stats', '_controller' => 'App\\Controller\\ReclamationController::statsView'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reply' => [[['_route' => 'app_reply_index', '_controller' => 'App\\Controller\\ReplyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reponses' => [[['_route' => 'app_reponses_index', '_controller' => 'App\\Controller\\ReponsesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reponses/new' => [[['_route' => 'app_reponses_new', '_controller' => 'App\\Controller\\ReponsesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/stats' => [[['_route' => 'app_user_stats', '_controller' => 'App\\Controller\\UserController::stats'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|pi/toggle\\-user/([^/]++)(*:231)'
                    .'|dd\\-to\\-favorites/([^/]++)(*:265)'
                .')'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:299)'
                        .'|/edit(*:312)'
                        .'|(*:320)'
                    .')'
                    .'|omm(?'
                        .'|ande/([^/]++)(?'
                            .'|(*:351)'
                            .'|/edit(*:364)'
                            .'|(*:372)'
                        .')'
                        .'|entaire/(?'
                            .'|([^/]++)(*:400)'
                            .'|new(*:411)'
                            .'|edit/([^/]++)(*:432)'
                            .'|delete/([^/]++)(*:455)'
                            .'|([^/]++)/([^/]++)(*:480)'
                        .')'
                    .')'
                .')'
                .'|/ev(?'
                    .'|aluation/(?'
                        .'|([^/]++)/details(*:525)'
                        .'|edit/([^/]++)(*:546)'
                        .'|([^/]++)/(?'
                            .'|delete(*:572)'
                            .'|([^/]++)(*:588)'
                        .')'
                    .')'
                    .'|ent/(?'
                        .'|event/([^/]++)(*:619)'
                        .'|([^/]++)(?'
                            .'|/edit(*:643)'
                            .'|(*:651)'
                        .')'
                        .'|participate/([^/]++)(*:680)'
                        .'|unparticipate/([^/]++)(*:710)'
                        .'|get\\-events(*:729)'
                        .'|stats(*:742)'
                    .')'
                .')'
                .'|/facture/([^/]++)(?'
                    .'|(*:772)'
                    .'|/edit(*:785)'
                    .'|(*:793)'
                .')'
                .'|/message/(?'
                    .'|([^/]++)(?'
                        .'|(*:825)'
                        .'|/edit(*:838)'
                    .')'
                    .'|message/([^/]++)(?'
                        .'|/(?'
                            .'|delete(?'
                                .'|(*:879)'
                                .'|2(*:888)'
                            .')'
                            .'|reply(*:902)'
                        .')'
                        .'|(*:911)'
                    .')'
                .')'
                .'|/detail/([^/]++)(*:937)'
                .'|/bdetail/([^/]++)(*:962)'
                .'|/re(?'
                    .'|move\\-from\\-favorites/([^/]++)(*:1006)'
                    .'|clamation/(?'
                        .'|show/([^/]++)(*:1041)'
                        .'|edit/([^/]++)(*:1063)'
                        .'|delete/([^/]++)(*:1087)'
                        .'|update\\-status/([^/]++)(*:1119)'
                    .')'
                    .'|p(?'
                        .'|ly/(?'
                            .'|new/([^/]++)(*:1151)'
                            .'|([^/]++)(?'
                                .'|(*:1171)'
                                .'|/(?'
                                    .'|edit(*:1188)'
                                    .'|delete(*:1203)'
                                .')'
                            .')'
                            .'|reply/([^/]++)/delete2(*:1236)'
                        .')'
                        .'|onses/([^/]++)(?'
                            .'|(*:1263)'
                            .'|/edit(*:1277)'
                            .'|(*:1286)'
                        .')'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:1330)'
                .')'
                .'|/produit/(?'
                    .'|(\\d+)(*:1357)'
                    .'|(\\d+)/edit(*:1376)'
                    .'|(\\d+)(*:1390)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1417)'
                    .'|/edit(*:1431)'
                    .'|(*:1440)'
                .')'
                .'|/(.+)(*:1455)'
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
        231 => [[['_route' => 'app_toggle_user', '_controller' => 'App\\Controller\\ApiUserController::toggleUser'], ['id'], ['POST' => 0], null, false, true, null]],
        265 => [[['_route' => 'add_to_favorites', '_controller' => 'App\\Controller\\PageController::addToFavorites'], ['id'], null, null, false, true, null]],
        299 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        312 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        320 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        351 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        364 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        372 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        400 => [[['_route' => 'app_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        411 => [[['_route' => 'app_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], [], ['POST' => 0], null, false, false, null]],
        432 => [[['_route' => 'app_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        455 => [[['_route' => 'app_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        480 => [[['_route' => 'app_commentaire_reaction', '_controller' => 'App\\Controller\\CommentaireController::react'], ['id', 'action'], ['POST' => 0], null, false, true, null]],
        525 => [[['_route' => 'app_evaluation_show', '_controller' => 'App\\Controller\\EvaluationController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        546 => [[['_route' => 'app_evaluation_edit', '_controller' => 'App\\Controller\\EvaluationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        572 => [[['_route' => 'app_evaluation_delete', '_controller' => 'App\\Controller\\EvaluationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        588 => [[['_route' => 'app_commentaire_like_dislike', '_controller' => 'App\\Controller\\EvaluationController::likeDislike'], ['id', 'action'], ['POST' => 0], null, false, true, null]],
        619 => [[['_route' => 'app_event_show', '_controller' => 'App\\Controller\\EventController::show'], ['id'], null, null, false, true, null]],
        643 => [[['_route' => 'app_event_edit', '_controller' => 'App\\Controller\\EventController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        651 => [[['_route' => 'app_event_delete', '_controller' => 'App\\Controller\\EventController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        680 => [[['_route' => 'app_event_participate', '_controller' => 'App\\Controller\\EventController::participate'], ['id'], ['POST' => 0], null, false, true, null]],
        710 => [[['_route' => 'app_event_unparticipate', '_controller' => 'App\\Controller\\EventController::unparticipate'], ['id'], ['POST' => 0], null, false, true, null]],
        729 => [[['_route' => 'app_event_get_events', '_controller' => 'App\\Controller\\EventController::getEvents'], [], ['GET' => 0], null, false, false, null]],
        742 => [[['_route' => 'app_event_stats', '_controller' => 'App\\Controller\\EventController::stats'], [], ['GET' => 0], null, false, false, null]],
        772 => [[['_route' => 'app_facture_show', '_controller' => 'App\\Controller\\FactureController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        785 => [[['_route' => 'app_facture_edit', '_controller' => 'App\\Controller\\FactureController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        793 => [[['_route' => 'app_facture_delete', '_controller' => 'App\\Controller\\FactureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        825 => [[['_route' => 'app_message_show', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        838 => [[['_route' => 'app_message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        879 => [[['_route' => 'app_message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        888 => [[['_route' => 'app_message_delete2', '_controller' => 'App\\Controller\\MessageController::delete2'], ['id'], ['POST' => 0], null, false, false, null]],
        902 => [[['_route' => 'app_message_reply', '_controller' => 'App\\Controller\\MessageController::reply'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        911 => [[['_route' => 'app_message_show2', '_controller' => 'App\\Controller\\MessageController::showMessageAndReply'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        937 => [[['_route' => 'app_detail', '_controller' => 'App\\Controller\\PageController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        962 => [[['_route' => 'app_bdetail', '_controller' => 'App\\Controller\\PageController::bdetail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1006 => [[['_route' => 'remove_from_favorites', '_controller' => 'App\\Controller\\PageController::removeFromFavorites'], ['id'], null, null, false, true, null]],
        1041 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1063 => [[['_route' => 'app_reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1087 => [[['_route' => 'app_reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1119 => [[['_route' => 'app_reclamation_update_status', '_controller' => 'App\\Controller\\ReclamationController::updateStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        1151 => [[['_route' => 'app_reply_new', '_controller' => 'App\\Controller\\ReplyController::new'], ['messageId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1171 => [[['_route' => 'app_reply_show', '_controller' => 'App\\Controller\\ReplyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1188 => [[['_route' => 'app_reply_edit', '_controller' => 'App\\Controller\\ReplyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1203 => [[['_route' => 'app_reply_delete', '_controller' => 'App\\Controller\\ReplyController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1236 => [[['_route' => 'app_reply_delete2', '_controller' => 'App\\Controller\\ReplyController::delete2'], ['id'], ['POST' => 0], null, false, false, null]],
        1263 => [[['_route' => 'app_reponses_show', '_controller' => 'App\\Controller\\ReponsesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1277 => [[['_route' => 'app_reponses_edit', '_controller' => 'App\\Controller\\ReponsesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1286 => [[['_route' => 'app_reponses_delete', '_controller' => 'App\\Controller\\ReponsesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1330 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1357 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1376 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1390 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1417 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1431 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1440 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1455 => [
            [['_route' => 'fallback_404', '_controller' => 'App\\Controller\\ExceptionController::showError'], ['url'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
