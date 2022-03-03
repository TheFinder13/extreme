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
        '/categorie' => [[['_route' => 'app_categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/ajout_categorie' => [[['_route' => 'ajout_categorie', '_controller' => 'App\\Controller\\CategorieController::ajoutboutique'], null, null, null, false, false, null]],
        '/listeCategory' => [[['_route' => 'listeCategory', '_controller' => 'App\\Controller\\CategorieController::liste_category'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'app_menu', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/deleteall' => [[['_route' => 'delete_all', '_controller' => 'App\\Controller\\PanierController::Deleteall'], null, null, null, false, false, null]],
        '/livraison' => [[['_route' => 'commande', '_controller' => 'App\\Controller\\PanierController::commande'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/ajout_produit' => [[['_route' => 'ajout_produit', '_controller' => 'App\\Controller\\ProduitController::ajoutproduit'], null, null, null, false, false, null]],
        '/listeProduit' => [[['_route' => 'listeProduit', '_controller' => 'App\\Controller\\ProduitController::liste_category'], null, null, null, false, false, null]],
        '/sous/cteg' => [[['_route' => 'app_sous_cteg', '_controller' => 'App\\Controller\\SousCtegController::index'], null, null, null, false, false, null]],
        '/ajout_scategorie' => [[['_route' => 'ajout_scategorie', '_controller' => 'App\\Controller\\SousCtegController::ajoutboutique'], null, null, null, false, false, null]],
        '/listesCategory' => [[['_route' => 'listesCategory', '_controller' => 'App\\Controller\\SousCtegController::liste_category'], null, null, null, false, false, null]],
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
                .'|/category/Update([^/]++)(*:193)'
                .'|/supp(?'
                    .'|categori/([^/]++)(*:226)'
                    .'|Produit/([^/]++)(*:250)'
                    .'|scategori/([^/]++)(*:276)'
                .')'
                .'|/p(?'
                    .'|rodu(?'
                        .'|ct/([^/]++)(*:308)'
                        .'|it/Update([^/]++)(*:333)'
                    .')'
                    .'|anier/(?'
                        .'|add/([^/]++)(*:363)'
                        .'|remove/([^/]++)(*:386)'
                    .')'
                .')'
                .'|/moin/add/([^/]++)(*:414)'
                .'|/Scategory/Update([^/]++)(*:447)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        193 => [[['_route' => 'category', '_controller' => 'App\\Controller\\CategorieController::Update_Boutique'], ['id'], null, null, false, true, null]],
        226 => [[['_route' => 'suppcategori', '_controller' => 'App\\Controller\\CategorieController::suppcategori'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'suppProduit', '_controller' => 'App\\Controller\\ProduitController::suppcategori'], ['id'], null, null, false, true, null]],
        276 => [[['_route' => 'suppscategori', '_controller' => 'App\\Controller\\SousCtegController::suppcategori'], ['id'], null, null, false, true, null]],
        308 => [[['_route' => 'product', '_controller' => 'App\\Controller\\MenuController::produit'], ['id'], null, null, false, true, null]],
        333 => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::Update_Boutique'], ['id'], null, null, false, true, null]],
        363 => [[['_route' => 'card_add', '_controller' => 'App\\Controller\\PanierController::addPanier'], ['id'], null, null, false, true, null]],
        386 => [[['_route' => 'card_remove', '_controller' => 'App\\Controller\\PanierController::remove'], ['id'], null, null, false, true, null]],
        414 => [[['_route' => 'card_moin', '_controller' => 'App\\Controller\\PanierController::MoinPanier'], ['id'], null, null, false, true, null]],
        447 => [
            [['_route' => 'Scategory', '_controller' => 'App\\Controller\\SousCtegController::Update_Boutique'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
