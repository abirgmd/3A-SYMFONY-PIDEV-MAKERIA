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

/* page/produit.html.twig */
class __TwigTemplate_816e2f6be58deeb60a6503af89b89563 extends Template
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

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/produit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/produit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/produit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
  /* Style global de la page */
  body {
    background-color: #fff; /* Fond blanc */
    color: #333; /* Texte en gris foncé pour la lisibilité */
  }

  /* Card de produits */
  .product-card {
    background-color: #fff; /* Fond blanc pour chaque carte */
    border: 1px solid #b11d85; /* Bordure rose #b11d85 */
    border-radius: 0px; /* Coins carrés */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    text-align: center;
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
  }

  .product-image {
    width: 100%;
    height: 200px; /* Ajuste la taille de l'image */
    object-fit: cover;
    margin-bottom: 15px;
    border-radius: 8px;
  }

  .product-name {
    font-size: 18px;
    color: #b11d85; /* Texte en couleur rose */
    font-weight: bold;
    margin: 10px 0;
  }

  .product-price {
    font-size: 16px;
    color: #b11d85; /* Prix en rose */
    margin: 10px 0;
  }

  .product-actions a {
    background-color: #b11d85; /* Fond rose pour les boutons */
    color: white;
    border: 1px solid #b11d85; /* Bordure rose */
    border-radius: 0px; /* Coins carrés */
    padding: 10px 20px;
    text-decoration: none;
    font-size: 14px;
    margin: 5px;
    display: inline-block;
    text-align: center;
  }

  .product-actions a:hover {
    background-color: #a10a6a; /* Légère variation lors du survol */
    border-color: #b11d85; /* Bordure rose même lors du survol */
  }

  /* Sidebar - Alignement et structure */
.sidebar-content {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd; /* Bordure claire */
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre subtile */
    margin-bottom: 30px;
}

/* Search Box */
.sidebar .search-box input,
.search-box input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #b11d85;
    margin-bottom: 15px;
}

.sidebar .search-box button,
.search-box button {
    padding: 12px;
    background-color: #b11d85;
    color: white;
    border: 1px solid #b11d85;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.sidebar .search-box button:hover,
.search-box button:hover {
    background-color: #a10a6a; /* Change couleur de survol */
}

/* Categories, Tags, Archives - Style commun */
.sidebar h3 {
    font-size: 1.2rem;
    color: #b11d85; /* Couleur rose pour les titres */
    margin-bottom: 10px;
}

.sidebar ul {
    list-style-type: none;
    padding-left: 0;
}

.sidebar li {
    padding: 8px;
    background-color: #fff;
    border-radius: 5px;
    margin-bottom: 8px;
    border: 1px solid #b11d85;
    transition: background-color 0.3s ease;
}

.sidebar li:hover {
    background-color: #f5f5f5; /* Change fond au survol */
}

.sidebar a {
    color: #b11d85;
    text-decoration: none;
}

.sidebar a:hover {
    color: #a10a6a; /* Change couleur des liens au survol */
}

/* Gallery */
.sidebar .gallery-list {
    padding: 15px;
    background-color: #fff;
    border: 1px solid #b11d85;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.sidebar .carousel-inner img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

/* Layout de la page */
.main-content {
    display: flex;
    justify-content: space-between;
}

.sidebar-content {
    flex: 0 0 25%; /* Sidebar à gauche */
}

.product-list {
    flex: 0 0 70%; /* Liste des produits à droite */
}

.category-list, .tags-list, .gallery-list {
    margin-bottom: 20px;
}

/* Categories et Tags */
.category-list ul,
.tags-list ul {
    list-style-type: none;
    padding-left: 0;
}

.category-list li,
.tags-list li {
    padding: 8px;
    background: #fff;
    border-radius: 5px;
    margin-bottom: 8px;
    border: 1px solid #b11d85;
    transition: background-color 0.3s ease;
}

.category-list li:hover,
.tags-list li:hover {
    background-color: #f5f5f5;
}

.category-list a,
.tags-list a {
    color: #b11d85;
    text-decoration: none;
}

.category-list a:hover,
.tags-list a:hover {
    color: #a10a6a;
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 212
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 213
        yield "<section id=\"photograph\" class=\"clearfix\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"photograph clearfix\">
        <p><a href=\"#\">Home</a> > <span class=\"photo_tab\">Product</span></p>
      </div>
    </div>
  </div>
</section>

<section id=\"blog_pg\">
  <div class=\"container\">
    <div class=\"main-content\">
      <!-- Sidebar (Categories, Tags, Gallery) -->
      <div class=\"sidebar-content\">
        <div class=\"sidebar\">
          <!-- Search Box -->
          <h3>Search</h3>
          <div class=\"search-box\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search Here...\">
            <button class=\"btn btn-primary\" type=\"button\">
              <i class=\"fa fa-search\"></i> Search
            </button>
          </div>

          <!-- Categories -->
<div class=\"blog_1l2 clearfix\">
    <h3 class=\"mgt\">Categories</h3>
    <hr class=\"line\">
    ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 242, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 243
            yield "        <h6>
            <a href=\"blog_detail.html\">
                <i class=\"fa fa-chevron-right col_pink\"></i>
                ";
            // line 246
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nomcat", [], "any", false, false, false, 246), "html", null, true);
            yield "
                <span class=\"pull-right\">(";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "produits", [], "any", false, false, false, 247)), "html", null, true);
            yield ")</span>
            </a>
        </h6>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        yield "</div>
<!-- Tags -->
<!--
         
          <div class=\"tags-list\">
            <h3>Tags</h3>
            <ul>
              <li><a href=\"blog_detail.html\">Lorem</a></li>
              <li><a href=\"blog_detail.html\">Semper</a></li>
              <li><a href=\"blog_detail.html\">Porta</a></li>
              <li><a href=\"blog_detail.html\">Eget</a></li>
              <li><a href=\"blog_detail.html\">Nulla</a></li>
              <li><a href=\"blog_detail.html\">Ipsum</a></li>
              <li><a href=\"blog_detail.html\">Quis</a></li>
              <li><a href=\"blog_detail.html\">Dolor</a></li>
              <li><a href=\"blog_detail.html\">Amet</a></li>
            </ul>
          </div>
          -->


         
            <h3></h3>
           
        </div>
      </div>

      <!-- Product List -->
      <div class=\"product-list\">
        <div class=\"product_1r clearfix\">
          <div class=\"center_product_1r2 clearfix\">
            <div class=\"col-sm-6\">
              <div class=\"center_product_1r2l clearfix\">
                <p class=\"mgt\">
                  ";
        // line 285
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 285, $this->source); })())) == 1)) {
            // line 286
            yield "                    There is 1 product available.
                  ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 287
(isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 287, $this->source); })())) > 1)) {
            // line 288
            yield "                    There are ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 288, $this->source); })())), "html", null, true);
            yield " products available.
                  ";
        } else {
            // line 290
            yield "                    No products available.
                  ";
        }
        // line 292
        yield "                </p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"list_pg_1r1 clearfix\">
          ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 299, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 300
            yield "            <div class=\"col-md-4 mb-4\">
              <div class=\"product-card\">
                <img src=\"";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageLarge", [], "any", false, false, false, 302), "html", null, true);
            yield "\" alt=\"Product Image\" class=\"product-image\">
                <h5 class=\"product-name\">";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 303), "html", null, true);
            yield "</h5>
                <p class=\"product-price\">£";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixprod", [], "any", false, false, false, 304), "html", null, true);
            yield "</p>
                <div class=\"product-actions\">
                  <a href=\"";
            // line 306
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 306)]), "html", null, true);
            yield "\">View</a>
                  <a href=\"";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 307)]), "html", null, true);
            yield "\">Add to Cart</a>
                </div>
              </div>
            </div>
          ";
            $context['_iterated'] = true;
        }
        // line 311
        if (!$context['_iterated']) {
            // line 312
            yield "            <p class=\"text-center\">No products found.</p>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        yield "        </div>
      </div>
    </div>
  </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/produit.html.twig";
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
        return array (  489 => 314,  482 => 312,  480 => 311,  471 => 307,  467 => 306,  462 => 304,  458 => 303,  454 => 302,  450 => 300,  445 => 299,  436 => 292,  432 => 290,  426 => 288,  424 => 287,  421 => 286,  419 => 285,  383 => 251,  373 => 247,  369 => 246,  364 => 243,  360 => 242,  329 => 213,  316 => 212,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Produits{% endblock %}

{% block stylesheets %}
<style>
  /* Style global de la page */
  body {
    background-color: #fff; /* Fond blanc */
    color: #333; /* Texte en gris foncé pour la lisibilité */
  }

  /* Card de produits */
  .product-card {
    background-color: #fff; /* Fond blanc pour chaque carte */
    border: 1px solid #b11d85; /* Bordure rose #b11d85 */
    border-radius: 0px; /* Coins carrés */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
    text-align: center;
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
  }

  .product-image {
    width: 100%;
    height: 200px; /* Ajuste la taille de l'image */
    object-fit: cover;
    margin-bottom: 15px;
    border-radius: 8px;
  }

  .product-name {
    font-size: 18px;
    color: #b11d85; /* Texte en couleur rose */
    font-weight: bold;
    margin: 10px 0;
  }

  .product-price {
    font-size: 16px;
    color: #b11d85; /* Prix en rose */
    margin: 10px 0;
  }

  .product-actions a {
    background-color: #b11d85; /* Fond rose pour les boutons */
    color: white;
    border: 1px solid #b11d85; /* Bordure rose */
    border-radius: 0px; /* Coins carrés */
    padding: 10px 20px;
    text-decoration: none;
    font-size: 14px;
    margin: 5px;
    display: inline-block;
    text-align: center;
  }

  .product-actions a:hover {
    background-color: #a10a6a; /* Légère variation lors du survol */
    border-color: #b11d85; /* Bordure rose même lors du survol */
  }

  /* Sidebar - Alignement et structure */
.sidebar-content {
    background-color: #fff;
    padding: 20px;
    border: 1px solid #ddd; /* Bordure claire */
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Ombre subtile */
    margin-bottom: 30px;
}

/* Search Box */
.sidebar .search-box input,
.search-box input {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #b11d85;
    margin-bottom: 15px;
}

.sidebar .search-box button,
.search-box button {
    padding: 12px;
    background-color: #b11d85;
    color: white;
    border: 1px solid #b11d85;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

.sidebar .search-box button:hover,
.search-box button:hover {
    background-color: #a10a6a; /* Change couleur de survol */
}

/* Categories, Tags, Archives - Style commun */
.sidebar h3 {
    font-size: 1.2rem;
    color: #b11d85; /* Couleur rose pour les titres */
    margin-bottom: 10px;
}

.sidebar ul {
    list-style-type: none;
    padding-left: 0;
}

.sidebar li {
    padding: 8px;
    background-color: #fff;
    border-radius: 5px;
    margin-bottom: 8px;
    border: 1px solid #b11d85;
    transition: background-color 0.3s ease;
}

.sidebar li:hover {
    background-color: #f5f5f5; /* Change fond au survol */
}

.sidebar a {
    color: #b11d85;
    text-decoration: none;
}

.sidebar a:hover {
    color: #a10a6a; /* Change couleur des liens au survol */
}

/* Gallery */
.sidebar .gallery-list {
    padding: 15px;
    background-color: #fff;
    border: 1px solid #b11d85;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.sidebar .carousel-inner img {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

/* Layout de la page */
.main-content {
    display: flex;
    justify-content: space-between;
}

.sidebar-content {
    flex: 0 0 25%; /* Sidebar à gauche */
}

.product-list {
    flex: 0 0 70%; /* Liste des produits à droite */
}

.category-list, .tags-list, .gallery-list {
    margin-bottom: 20px;
}

/* Categories et Tags */
.category-list ul,
.tags-list ul {
    list-style-type: none;
    padding-left: 0;
}

.category-list li,
.tags-list li {
    padding: 8px;
    background: #fff;
    border-radius: 5px;
    margin-bottom: 8px;
    border: 1px solid #b11d85;
    transition: background-color 0.3s ease;
}

.category-list li:hover,
.tags-list li:hover {
    background-color: #f5f5f5;
}

.category-list a,
.tags-list a {
    color: #b11d85;
    text-decoration: none;
}

.category-list a:hover,
.tags-list a:hover {
    color: #a10a6a;
}

</style>
{% endblock %}

{% block body %}
<section id=\"photograph\" class=\"clearfix\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"photograph clearfix\">
        <p><a href=\"#\">Home</a> > <span class=\"photo_tab\">Product</span></p>
      </div>
    </div>
  </div>
</section>

<section id=\"blog_pg\">
  <div class=\"container\">
    <div class=\"main-content\">
      <!-- Sidebar (Categories, Tags, Gallery) -->
      <div class=\"sidebar-content\">
        <div class=\"sidebar\">
          <!-- Search Box -->
          <h3>Search</h3>
          <div class=\"search-box\">
            <input type=\"text\" class=\"form-control\" placeholder=\"Search Here...\">
            <button class=\"btn btn-primary\" type=\"button\">
              <i class=\"fa fa-search\"></i> Search
            </button>
          </div>

          <!-- Categories -->
<div class=\"blog_1l2 clearfix\">
    <h3 class=\"mgt\">Categories</h3>
    <hr class=\"line\">
    {% for categorie in categories %}
        <h6>
            <a href=\"blog_detail.html\">
                <i class=\"fa fa-chevron-right col_pink\"></i>
                {{ categorie.nomcat }}
                <span class=\"pull-right\">({{ categorie.produits|length }})</span>
            </a>
        </h6>
    {% endfor %}
</div>
<!-- Tags -->
<!--
         
          <div class=\"tags-list\">
            <h3>Tags</h3>
            <ul>
              <li><a href=\"blog_detail.html\">Lorem</a></li>
              <li><a href=\"blog_detail.html\">Semper</a></li>
              <li><a href=\"blog_detail.html\">Porta</a></li>
              <li><a href=\"blog_detail.html\">Eget</a></li>
              <li><a href=\"blog_detail.html\">Nulla</a></li>
              <li><a href=\"blog_detail.html\">Ipsum</a></li>
              <li><a href=\"blog_detail.html\">Quis</a></li>
              <li><a href=\"blog_detail.html\">Dolor</a></li>
              <li><a href=\"blog_detail.html\">Amet</a></li>
            </ul>
          </div>
          -->


         
            <h3></h3>
           
        </div>
      </div>

      <!-- Product List -->
      <div class=\"product-list\">
        <div class=\"product_1r clearfix\">
          <div class=\"center_product_1r2 clearfix\">
            <div class=\"col-sm-6\">
              <div class=\"center_product_1r2l clearfix\">
                <p class=\"mgt\">
                  {% if produits|length == 1 %}
                    There is 1 product available.
                  {% elseif produits|length > 1 %}
                    There are {{ produits|length }} products available.
                  {% else %}
                    No products available.
                  {% endif %}
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"list_pg_1r1 clearfix\">
          {% for produit in produits %}
            <div class=\"col-md-4 mb-4\">
              <div class=\"product-card\">
                <img src=\"{{ produit.imageLarge }}\" alt=\"Product Image\" class=\"product-image\">
                <h5 class=\"product-name\">{{ produit.nomprod }}</h5>
                <p class=\"product-price\">£{{ produit.prixprod }}</p>
                <div class=\"product-actions\">
                  <a href=\"{{ path('app_detail', {'id': produit.id}) }}\">View</a>
                  <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\">Add to Cart</a>
                </div>
              </div>
            </div>
          {% else %}
            <p class=\"text-center\">No products found.</p>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>

{% endblock %}", "page/produit.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\page\\produit.html.twig");
    }
}
