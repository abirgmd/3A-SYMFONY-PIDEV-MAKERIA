<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* dashboard.html.twig */
class __TwigTemplate_d5f3680f7bd3f5474c9f9289dc8b8fcb extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard.html.twig"));

        // line 1
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ARTIST"))) {
            // line 2
            yield "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-icon.png"), "html", null, true);
            yield "\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
            yield "\">
\t\t<title>
\t\t\t";
            // line 11
            yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
            // line 13
            yield "\t\t</title>
\t\t<!-- Fonts and icons -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800\" rel=\"stylesheet\"/>
\t\t<link
\t\thref=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">
\t\t<!-- Nucleo Icons -->
\t\t<link
\t\thref=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/nucleo-icons.css"), "html", null, true);
            yield "\" rel=\"stylesheet\"/>
\t\t<!-- CSS Files -->
\t\t<link
\t\thref=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/black-dashboard.css?v=1.0.0"), "html", null, true);
            yield "\" rel=\"stylesheet\"/>
\t\t<!-- CSS Just for demo purpose, don't include it in your project -->
\t\t<link href=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/demo.css"), "html", null, true);
            yield "\" rel=\"stylesheet\"/> ";
            yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
            // line 26
            yield "\t\t<style>
\t\t\t/* Styles pour les sous-boutons */
\t\t\t.sub-menu {
\t\t\t\tdisplay: none; /* Masquer les sous-boutons par défaut */
\t\t\t\tlist-style: none;
\t\t\t\tpadding-left: 20px; /* Indentation pour les sous-boutons */
\t\t\t\tmargin-top: 10px;
\t\t\t}
.dropdown-menu {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.btn-danger {
    background-color: red;  /* Rouge */
    color: white;  /* Blanc */
}

\t\t\t.sub-menu li {
\t\t\t\tmargin: 5px 0;
\t\t\t}

\t\t\t.sub-menu a {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tcolor: #fff;
\t\t\t\ttext-decoration: none;
\t\t\t\tpadding: 5px 10px;
\t\t\t\tborder-radius: 4px;
\t\t\t\ttransition: background-color 0.3s ease;
\t\t\t}

\t\t\t.sub-menu a:hover {
\t\t\t\tbackground-color: rgba(255, 255, 255, 0.1); /* Effet de survol */
\t\t\t}

\t\t\t.sub-menu .tim-icons {
\t\t\t\tmargin-right: 10px; /* Espacement entre l'icône et le texte */
\t\t\t}

\t\t\t/* Afficher les sous-boutons lorsque la classe \"active\" est appliquée */
\t\t\t.sub-menu.active {
\t\t\t\tdisplay: block;
\t\t\t}
\t\t</style>
\t</head>

\t<body class=\"\">
\t\t<div
\t\t\tclass=\"wrapper\">
\t\t\t<!-- Sidebar -->
\t\t\t<div class=\"sidebar\">
\t\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"simple-text logo-normal\">
\t\t\t\t\t\t\tMakeria
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
";
            // line 85
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 86
                yield "                        <ul
\t\t\t\t\t\tclass=\"nav\">
\t\t\t\t\t\t<!-- Bouton 1 : Utilisateurs -->
\t\t\t\t\t

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"user-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-single-02\"></i>
\t\t\t\t\t\t\t\t<p>User</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Utilisateurs -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"user-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 99
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-lock-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Admin</p>
\t\t\t\t\t\t\t\t\t</a>
                                    \t<a href=\"";
                // line 103
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_artist_add");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-lock-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Artist</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 107
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_stats");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-lock-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<p>statistiques</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Bouton 2 : Forum -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"forum-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-chat-33\"></i>
\t\t\t\t\t\t\t\t<p>Forum</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Forum -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"forum-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 124
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-email-85\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Message</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 130
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reply_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-send\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Reply</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Bouton 3 : Produits -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"users-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-bag-16\"></i>
\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Produits -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"users-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 147
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-box-2\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 153
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-star\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Évaluation</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 159
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-components\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Catégorie</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"settings-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-cart\"></i>
\t\t\t\t\t\t\t\t<p>Commandes</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Commande -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"settings-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 175
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-box-2\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Commande</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 181
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_facture_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-star\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Facture</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<!-- Bouton 5 : Events -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"reports-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-calendar-60\"></i>
\t\t\t\t\t\t\t\t<p>Events</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Events -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"reports-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 199
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-calendar-60\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Events</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 205
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-chat-33\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Commentaires</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Bouton 6 : Réclamations -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"new-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-alert-circle-exc\"></i>
\t\t\t\t\t\t\t\t<p>Réclamation</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Réclamations -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"new-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 222
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Réclamation</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 228
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponses_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-check-2\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Réponses</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
                    ";
            } else {
                // line 238
                yield " <ul
\t\t\t\t\t\tclass=\"nav\">
\t\t\t\t\t\t<!-- Bouton 1 : Utilisateurs -->
\t\t\t\t<!-- Bouton 3 : Produits -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"Produits-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-bag-16\"></i>
\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Produits -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"Produits-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 250
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-box-2\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 256
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-star\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Évaluation</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 262
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
                yield "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-components\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Catégorie</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t</ul>

                    ";
            }
            // line 273
            yield "  
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Main Panel -->
\t\t\t<div
\t\t\t\tclass=\"main-panel\">
\t\t\t\t<!-- Navbar -->
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-absolute navbar-transparent\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t\t\t<div class=\"navbar-toggle d-inline\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggler\">
\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar bar1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar bar2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar bar3\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"javascript:void(0)\">Makeria</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar navbar-kebab\"></span>
\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar navbar-kebab\"></span>
\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar navbar-kebab\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navigation\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right dropdown-navbar\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-item dropdown-item\">Mike John responded to your email</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">You have 5 more tasks</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Your friend Michael is in town</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Another notification</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Another one</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
            // line 320
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "user", [], "any", false, false, false, 320)) {
                // line 321
                yield "<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("user/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 321, $this->source); })()), "user", [], "any", false, false, false, 321), "image", [], "any", false, false, false, 321))), "html", null, true);
                yield "\"  width=\"50px\" height=\"50px\" style=\"margin-top: 10px;border-radius: 50px;\" alt=\"Profile Photo\">
";
            }
            // line 323
            yield "\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"photo\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<b class=\"caret d-none d-lg-block d-xl-block\"></b>
\t\t\t\t\t\t\t\t\t\t<p class=\"d-lg-none\">
\t\t\t\t\t\t\t\t\t\t\tLog out
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
<ul class=\"dropdown-menu dropdown-navbar\" style=\"text-align: center;\">
    <li class=\"dropdown-divider\"></li>
 
\t  <li class=\"nav-link\">
        <a href=\"user/";
            // line 337
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 337, $this->source); })()), "user", [], "any", false, false, false, 337), "id", [], "any", false, false, false, 337), "html", null, true);
            yield "\" class=\"nav-item dropdown-item\" style=\"color: black; font-weight: bold;\">Profile</a>
    </li>

\t   <li class=\"nav-link\">
        <a href=\"/logout\" class=\"nav-item dropdown-item\" style=\"color: red; font-weight: bold;\">Log out</a>
    </li>
</ul>


\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"separator d-lg-none\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\"> ";
            // line 356
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 357
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Footer -->
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\tMakeria
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\tAbout Us
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\tBlog
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t\t©
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\tmade with
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-heart-2\"></i>
\t\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" target=\"_blank\">Makeria</a>
\t\t\t\t\t\t\t\tfor a better web.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Fixed Plugin -->
\t\t\t<div class=\"fixed-plugin\">
\t\t\t\t<div class=\"dropdown show-dropdown\">
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-cog fa-2x\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li class=\"header-title\">
\t\t\t\t\t\t\tSidebar Background</li>
\t\t\t\t\t\t<li class=\"adjustments-line\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
\t\t\t\t\t\t\t\t<div class=\"badge-colors text-center\">
\t\t\t\t\t\t\t\t\t<span class=\"badge filter badge-primary active\" data-color=\"primary\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"badge filter badge-info\" data-color=\"blue\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"badge filter badge-success\" data-color=\"green\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"adjustments-line text-center color-change\">
\t\t\t\t\t\t\t<span class=\"color-label\">LIGHT MODE</span>
\t\t\t\t\t\t\t<span class=\"badge light-badge mr-2\"></span>
\t\t\t\t\t\t\t<span class=\"badge dark-badge ml-2\"></span>
\t\t\t\t\t\t\t<span class=\"color-label\">DARK MODE</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Core JS Files -->
\t\t\t<script src=\"";
            // line 427
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/jquery.min.js"), "html", null, true);
            yield "\"></script>
\t\t\t<script src=\"";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/popper.min.js"), "html", null, true);
            yield "\"></script>
\t\t\t<script src=\"";
            // line 429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/core/bootstrap.min.js"), "html", null, true);
            yield "\"></script>
\t\t\t<script src=\"";
            // line 430
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/perfect-scrollbar.jquery.min.js"), "html", null, true);
            yield "\"></script>
\t\t\t<!-- Google Maps Plugin -->
\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
\t\t\t<!-- Chart JS -->
\t\t\t<script src=\"";
            // line 434
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/chartjs.min.js"), "html", null, true);
            yield "\"></script>
\t\t\t<!-- Notifications Plugin -->
\t\t\t<script src=\"";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/plugins/bootstrap-notify.js"), "html", null, true);
            yield "\"></script>
\t\t\t<script src=\"";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/black-dashboard.min.js?v=1.0.0"), "html", null, true);
            yield "\"></script>
\t\t\t<script src=\"";
            // line 438
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/demo.js"), "html", null, true);
            yield "\"></script>
\t\t\t<script>
\t\t\t\t// Gestion des sous-boutons
document.addEventListener('DOMContentLoaded', function () {
const mainLinks = document.querySelectorAll('.main-link');

mainLinks.forEach(link => {
link.addEventListener('click', function (event) {
event.preventDefault();
const target = this.getAttribute('data-target');
const submenu = document.getElementById(target);
submenu.classList.toggle('active');
});
});
});
\t\t\t</script>
\t\t\t<script>
\t\t\t\t\$(document).ready(function () {
\$().ready(function () {
\$sidebar = \$('.sidebar');
\$navbar = \$('.navbar');
\$main_panel = \$('.main-panel');

\$full_page = \$('.full-page');

\$sidebar_responsive = \$('body > .navbar-collapse');
sidebar_mini_active = true;
white_color = false;

window_width = \$(window).width();

fixed_plugin_open = \$('.sidebar .sidebar-wrapper .nav li.active a p').html();


\$('.fixed-plugin a').click(function (event) {
if (\$(this).hasClass('switch-trigger')) {
if (event.stopPropagation) {
event.stopPropagation();
} else if (window.event) {
window.event.cancelBubble = true;
}
}
});

\$('.fixed-plugin .background-color span').click(function () {
\$(this).siblings().removeClass('active');
\$(this).addClass('active');

var new_color = \$(this).data('color');

if (\$sidebar.length != 0) {
\$sidebar.attr('data', new_color);
}

if (\$main_panel.length != 0) {
\$main_panel.attr('data', new_color);
}

if (\$full_page.length != 0) {
\$full_page.attr('filter-color', new_color);
}

if (\$sidebar_responsive.length != 0) {
\$sidebar_responsive.attr('data', new_color);
}
});

\$('.switch-sidebar-mini input').on(\"switchChange.bootstrapSwitch\", function () {
var \$btn = \$(this);

if (sidebar_mini_active == true) {
\$('body').removeClass('sidebar-mini');
sidebar_mini_active = false;
blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
} else {
\$('body').addClass('sidebar-mini');
sidebar_mini_active = true;
blackDashboard.showSidebarMessage('Sidebar mini activated...');
}

// we simulate the window Resize so the charts will get updated in realtime.
var simulateWindowResize = setInterval(function () {
window.dispatchEvent(new Event('resize'));
}, 180);

// we stop the simulation of Window Resize after the animations are completed
setTimeout(function () {
clearInterval(simulateWindowResize);
}, 1000);
});

\$('.switch-change-color input').on(\"switchChange.bootstrapSwitch\", function () {
var \$btn = \$(this);

if (white_color == true) {

\$('body').addClass('change-background');
setTimeout(function () {
\$('body').removeClass('change-background');
\$('body').removeClass('white-content');
}, 900);
white_color = false;
} else {

\$('body').addClass('change-background');
setTimeout(function () {
\$('body').removeClass('change-background');
\$('body').addClass('white-content');
}, 900);

white_color = true;
}


});

\$('.light-badge').click(function () {
\$('body').addClass('white-content');
});

\$('.dark-badge').click(function () {
\$('body').removeClass('white-content');
});
});
});
\t\t\t</script>
\t\t\t<script>
\t\t\t\t\$(document).ready(function () { // Javascript method's body can be found in assets/js/demos.js
demo.initDashboardPageCharts();

});
\t\t\t</script>
\t\t\t<script src=\"https://cdn.trackjs.com/agent/v3/latest/t.js\"></script>
\t\t\t<script>
\t\t\t\twindow.TrackJS && TrackJS.install({token: \"ee6fab19c5a04ac1a32a645abde4613a\", application: \"black-dashboard-free\"});
\t\t\t</script>
\t\t\t";
            // line 574
            yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
            // line 575
            yield "\t\t</body>

\t</html>
\t";
        } else {
            // line 579
            yield from $this->loadTemplate("exception/index.html.twig", "dashboard.html.twig", 579)->unwrap()->yield($context);
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Makeria
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 356
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 574
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "dashboard.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  831 => 574,  809 => 356,  787 => 25,  763 => 11,  751 => 579,  745 => 575,  743 => 574,  604 => 438,  600 => 437,  596 => 436,  591 => 434,  584 => 430,  580 => 429,  576 => 428,  572 => 427,  500 => 357,  498 => 356,  476 => 337,  460 => 323,  454 => 321,  452 => 320,  403 => 273,  388 => 262,  379 => 256,  370 => 250,  356 => 238,  343 => 228,  334 => 222,  314 => 205,  305 => 199,  284 => 181,  275 => 175,  256 => 159,  247 => 153,  238 => 147,  218 => 130,  209 => 124,  189 => 107,  182 => 103,  175 => 99,  160 => 86,  158 => 85,  97 => 26,  93 => 25,  88 => 23,  82 => 20,  73 => 13,  71 => 11,  66 => 9,  62 => 8,  54 => 2,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if is_granted(\"ROLE_ADMIN\") or is_granted(\"ROLE_ARTIST\") %}
<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('assets/img/apple-icon.png') }}\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/img/favicon.png') }}\">
\t\t<title>
\t\t\t{% block title %}Makeria
\t\t\t{% endblock %}
\t\t</title>
\t\t<!-- Fonts and icons -->
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800\" rel=\"stylesheet\"/>
\t\t<link
\t\thref=\"https://use.fontawesome.com/releases/v5.0.6/css/all.css\" rel=\"stylesheet\">
\t\t<!-- Nucleo Icons -->
\t\t<link
\t\thref=\"{{ asset('assets/css/nucleo-icons.css') }}\" rel=\"stylesheet\"/>
\t\t<!-- CSS Files -->
\t\t<link
\t\thref=\"{{ asset('assets/css/black-dashboard.css?v=1.0.0') }}\" rel=\"stylesheet\"/>
\t\t<!-- CSS Just for demo purpose, don't include it in your project -->
\t\t<link href=\"{{ asset('assets/demo/demo.css') }}\" rel=\"stylesheet\"/> {% block stylesheets %}{% endblock %}
\t\t<style>
\t\t\t/* Styles pour les sous-boutons */
\t\t\t.sub-menu {
\t\t\t\tdisplay: none; /* Masquer les sous-boutons par défaut */
\t\t\t\tlist-style: none;
\t\t\t\tpadding-left: 20px; /* Indentation pour les sous-boutons */
\t\t\t\tmargin-top: 10px;
\t\t\t}
.dropdown-menu {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.btn-danger {
    background-color: red;  /* Rouge */
    color: white;  /* Blanc */
}

\t\t\t.sub-menu li {
\t\t\t\tmargin: 5px 0;
\t\t\t}

\t\t\t.sub-menu a {
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tcolor: #fff;
\t\t\t\ttext-decoration: none;
\t\t\t\tpadding: 5px 10px;
\t\t\t\tborder-radius: 4px;
\t\t\t\ttransition: background-color 0.3s ease;
\t\t\t}

\t\t\t.sub-menu a:hover {
\t\t\t\tbackground-color: rgba(255, 255, 255, 0.1); /* Effet de survol */
\t\t\t}

\t\t\t.sub-menu .tim-icons {
\t\t\t\tmargin-right: 10px; /* Espacement entre l'icône et le texte */
\t\t\t}

\t\t\t/* Afficher les sous-boutons lorsque la classe \"active\" est appliquée */
\t\t\t.sub-menu.active {
\t\t\t\tdisplay: block;
\t\t\t}
\t\t</style>
\t</head>

\t<body class=\"\">
\t\t<div
\t\t\tclass=\"wrapper\">
\t\t\t<!-- Sidebar -->
\t\t\t<div class=\"sidebar\">
\t\t\t\t<div class=\"sidebar-wrapper\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"simple-text logo-normal\">
\t\t\t\t\t\t\tMakeria
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
{% if is_granted('ROLE_ADMIN') %}
                        <ul
\t\t\t\t\t\tclass=\"nav\">
\t\t\t\t\t\t<!-- Bouton 1 : Utilisateurs -->
\t\t\t\t\t

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"user-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-single-02\"></i>
\t\t\t\t\t\t\t\t<p>User</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Utilisateurs -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"user-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-lock-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Admin</p>
\t\t\t\t\t\t\t\t\t</a>
                                    \t<a href=\"{{ path('app_artist_add') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-lock-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Artist</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_user_stats') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-lock-circle\"></i>
\t\t\t\t\t\t\t\t\t\t<p>statistiques</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Bouton 2 : Forum -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"forum-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-chat-33\"></i>
\t\t\t\t\t\t\t\t<p>Forum</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Forum -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"forum-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_message_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-email-85\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Message</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_reply_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-send\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Reply</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Bouton 3 : Produits -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"users-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-bag-16\"></i>
\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Produits -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"users-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_produit_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-box-2\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_evaluation_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-star\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Évaluation</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_categorie_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-components\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Catégorie</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"settings-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-cart\"></i>
\t\t\t\t\t\t\t\t<p>Commandes</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Commande -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"settings-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commande_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-box-2\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Commande</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_facture_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-star\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Facture</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>


\t\t\t\t\t\t<!-- Bouton 5 : Events -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"reports-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-calendar-60\"></i>
\t\t\t\t\t\t\t\t<p>Events</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Events -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"reports-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-calendar-60\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Events</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_commentaire_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-chat-33\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Commentaires</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Bouton 6 : Réclamations -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"new-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-alert-circle-exc\"></i>
\t\t\t\t\t\t\t\t<p>Réclamation</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Réclamations -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"new-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_reclamation_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Réclamation</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_reponses_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-check-2\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Réponses</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>
                    {% else %}
 <ul
\t\t\t\t\t\tclass=\"nav\">
\t\t\t\t\t\t<!-- Bouton 1 : Utilisateurs -->
\t\t\t\t<!-- Bouton 3 : Produits -->
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"main-link\" data-target=\"Produits-submenu\">
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-bag-16\"></i>
\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Sous-boutons pour Produits -->
\t\t\t\t\t\t\t<ul class=\"sub-menu\" id=\"Produits-submenu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_produit_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-box-2\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Produits</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_evaluation_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-star\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Évaluation</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_categorie_index') }}\">
\t\t\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-components\"></i>
\t\t\t\t\t\t\t\t\t\t<p>Catégorie</p>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>\t
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t</ul>

                    {% endif %}  
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Main Panel -->
\t\t\t<div
\t\t\t\tclass=\"main-panel\">
\t\t\t\t<!-- Navbar -->
\t\t\t\t<nav class=\"navbar navbar-expand-lg navbar-absolute navbar-transparent\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"navbar-wrapper\">
\t\t\t\t\t\t\t<div class=\"navbar-toggle d-inline\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggler\">
\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar bar1\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar bar2\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar bar3\"></span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"javascript:void(0)\">Makeria</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar navbar-kebab\"></span>
\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar navbar-kebab\"></span>
\t\t\t\t\t\t\t<span class=\"navbar-toggler-bar navbar-kebab\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navigation\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav ml-auto\">
\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right dropdown-navbar\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-item dropdown-item\">Mike John responded to your email</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">You have 5 more tasks</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Your friend Michael is in town</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Another notification</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-item dropdown-item\">Another one</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t{% if app.user %}
<img src=\"{{ asset('user/' ~ app.user.image) }}\"  width=\"50px\" height=\"50px\" style=\"margin-top: 10px;border-radius: 50px;\" alt=\"Profile Photo\">
{% endif %}
\t\t\t\t\t\t\t\t<li class=\"dropdown nav-item\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle nav-link\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"photo\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<b class=\"caret d-none d-lg-block d-xl-block\"></b>
\t\t\t\t\t\t\t\t\t\t<p class=\"d-lg-none\">
\t\t\t\t\t\t\t\t\t\t\tLog out
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</a>
<ul class=\"dropdown-menu dropdown-navbar\" style=\"text-align: center;\">
    <li class=\"dropdown-divider\"></li>
 
\t  <li class=\"nav-link\">
        <a href=\"user/{{app.user.id}}\" class=\"nav-item dropdown-item\" style=\"color: black; font-weight: bold;\">Profile</a>
    </li>

\t   <li class=\"nav-link\">
        <a href=\"/logout\" class=\"nav-item dropdown-item\" style=\"color: red; font-weight: bold;\">Log out</a>
    </li>
</ul>


\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"separator d-lg-none\"></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div class=\"content\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12\"> {% block content %}{% endblock %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Footer -->
\t\t\t\t\t<footer class=\"footer\">
\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\tMakeria
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\tAbout Us
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\tBlog
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t\t©
\t\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\tdocument.write(new Date().getFullYear())
\t\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t\t\tmade with
\t\t\t\t\t\t\t\t<i class=\"tim-icons icon-heart-2\"></i>
\t\t\t\t\t\t\t\tby
\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" target=\"_blank\">Makeria</a>
\t\t\t\t\t\t\t\tfor a better web.
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</footer>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Fixed Plugin -->
\t\t\t<div class=\"fixed-plugin\">
\t\t\t\t<div class=\"dropdown show-dropdown\">
\t\t\t\t\t<a href=\"#\" data-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"fa fa-cog fa-2x\"></i>
\t\t\t\t\t</a>
\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t<li class=\"header-title\">
\t\t\t\t\t\t\tSidebar Background</li>
\t\t\t\t\t\t<li class=\"adjustments-line\">
\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
\t\t\t\t\t\t\t\t<div class=\"badge-colors text-center\">
\t\t\t\t\t\t\t\t\t<span class=\"badge filter badge-primary active\" data-color=\"primary\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"badge filter badge-info\" data-color=\"blue\"></span>
\t\t\t\t\t\t\t\t\t<span class=\"badge filter badge-success\" data-color=\"green\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"adjustments-line text-center color-change\">
\t\t\t\t\t\t\t<span class=\"color-label\">LIGHT MODE</span>
\t\t\t\t\t\t\t<span class=\"badge light-badge mr-2\"></span>
\t\t\t\t\t\t\t<span class=\"badge dark-badge ml-2\"></span>
\t\t\t\t\t\t\t<span class=\"color-label\">DARK MODE</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- Core JS Files -->
\t\t\t<script src=\"{{ asset('assets/js/core/jquery.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/core/popper.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/core/bootstrap.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}\"></script>
\t\t\t<!-- Google Maps Plugin -->
\t\t\t<script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
\t\t\t<!-- Chart JS -->
\t\t\t<script src=\"{{ asset('assets/js/plugins/chartjs.min.js') }}\"></script>
\t\t\t<!-- Notifications Plugin -->
\t\t\t<script src=\"{{ asset('assets/js/plugins/bootstrap-notify.js') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/js/black-dashboard.min.js?v=1.0.0') }}\"></script>
\t\t\t<script src=\"{{ asset('assets/demo/demo.js') }}\"></script>
\t\t\t<script>
\t\t\t\t// Gestion des sous-boutons
document.addEventListener('DOMContentLoaded', function () {
const mainLinks = document.querySelectorAll('.main-link');

mainLinks.forEach(link => {
link.addEventListener('click', function (event) {
event.preventDefault();
const target = this.getAttribute('data-target');
const submenu = document.getElementById(target);
submenu.classList.toggle('active');
});
});
});
\t\t\t</script>
\t\t\t<script>
\t\t\t\t\$(document).ready(function () {
\$().ready(function () {
\$sidebar = \$('.sidebar');
\$navbar = \$('.navbar');
\$main_panel = \$('.main-panel');

\$full_page = \$('.full-page');

\$sidebar_responsive = \$('body > .navbar-collapse');
sidebar_mini_active = true;
white_color = false;

window_width = \$(window).width();

fixed_plugin_open = \$('.sidebar .sidebar-wrapper .nav li.active a p').html();


\$('.fixed-plugin a').click(function (event) {
if (\$(this).hasClass('switch-trigger')) {
if (event.stopPropagation) {
event.stopPropagation();
} else if (window.event) {
window.event.cancelBubble = true;
}
}
});

\$('.fixed-plugin .background-color span').click(function () {
\$(this).siblings().removeClass('active');
\$(this).addClass('active');

var new_color = \$(this).data('color');

if (\$sidebar.length != 0) {
\$sidebar.attr('data', new_color);
}

if (\$main_panel.length != 0) {
\$main_panel.attr('data', new_color);
}

if (\$full_page.length != 0) {
\$full_page.attr('filter-color', new_color);
}

if (\$sidebar_responsive.length != 0) {
\$sidebar_responsive.attr('data', new_color);
}
});

\$('.switch-sidebar-mini input').on(\"switchChange.bootstrapSwitch\", function () {
var \$btn = \$(this);

if (sidebar_mini_active == true) {
\$('body').removeClass('sidebar-mini');
sidebar_mini_active = false;
blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
} else {
\$('body').addClass('sidebar-mini');
sidebar_mini_active = true;
blackDashboard.showSidebarMessage('Sidebar mini activated...');
}

// we simulate the window Resize so the charts will get updated in realtime.
var simulateWindowResize = setInterval(function () {
window.dispatchEvent(new Event('resize'));
}, 180);

// we stop the simulation of Window Resize after the animations are completed
setTimeout(function () {
clearInterval(simulateWindowResize);
}, 1000);
});

\$('.switch-change-color input').on(\"switchChange.bootstrapSwitch\", function () {
var \$btn = \$(this);

if (white_color == true) {

\$('body').addClass('change-background');
setTimeout(function () {
\$('body').removeClass('change-background');
\$('body').removeClass('white-content');
}, 900);
white_color = false;
} else {

\$('body').addClass('change-background');
setTimeout(function () {
\$('body').removeClass('change-background');
\$('body').addClass('white-content');
}, 900);

white_color = true;
}


});

\$('.light-badge').click(function () {
\$('body').addClass('white-content');
});

\$('.dark-badge').click(function () {
\$('body').removeClass('white-content');
});
});
});
\t\t\t</script>
\t\t\t<script>
\t\t\t\t\$(document).ready(function () { // Javascript method's body can be found in assets/js/demos.js
demo.initDashboardPageCharts();

});
\t\t\t</script>
\t\t\t<script src=\"https://cdn.trackjs.com/agent/v3/latest/t.js\"></script>
\t\t\t<script>
\t\t\t\twindow.TrackJS && TrackJS.install({token: \"ee6fab19c5a04ac1a32a645abde4613a\", application: \"black-dashboard-free\"});
\t\t\t</script>
\t\t\t{% block javascripts %}{% endblock %}
\t\t</body>

\t</html>
\t{% else %}
{% include 'exception/index.html.twig' %}
{% endif %}
", "dashboard.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\dashboard.html.twig");
    }
}
