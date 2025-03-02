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
class __TwigTemplate_ce0202fefbba31b1d13561caab9e28de extends Template
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
.favorite-btn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 20px;
    color: #b11d85;
    transition: color 0.3s ease;
  }

  .favorite-btn.favorited {
    color: #ff0000;
  }
  /* Global Styles */
  body {
    background-color: #f9f9f9;
    color: #333;
  }

  /* Main Layout */
  .container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
  }

  .sidebar-content {
    background-color: #fff;
    flex: 1;
    max-width: 300px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .product-list {
    flex: 3;
  }

  /* Sidebar Components */
  .sidebar-content h3 {
    color: #b11d85;
    margin-bottom: 20px;
    font-size: 18px;
  }

  .dropdown {
    margin-bottom: 10px;
  }

  .dropdown-toggle {
    background-color: #b11d85;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px;
    width: 100%;
    text-align: left;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .dropdown-toggle:hover {
    background-color: #a10a6a;
  }

  .dropdown-menu {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    list-style: none;
    padding: 10px;
    margin-top: 5px;
    display: none;
    position: relative;
  }

  .dropdown-menu li {
    padding: 5px 0;
  }

  .dropdown-menu li a {
    text-decoration: none;
    color: #333;
  }

  .dropdown-menu li a:hover {
    color: #b11d85;
  }

  .dropdown.open .dropdown-menu {
    display: block;
  }

  /* Product Cards */
  .product-card {
    background-color: #fff;
    border: 1px solid #b11d85;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
  }

  .product-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
  }

  .product-name {
    font-size: 18px;
    color: #b11d85;
    font-weight: bold;
    margin: 10px 0;
  }

  .product-price {
    color: #b11d85;
    font-size: 16px;
    margin: 5px 0 15px;
  }

  .product-actions a {
    display: inline-block;
    background-color: #b11d85;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 60px;
    text-decoration: none;
    margin: 5px;
  }

  .product-actions a:hover {
    background-color: #a10a6a;
  }
.pagination-container {
    display: flex;
    justify-content: center; /* Centre horizontalement */
    align-items: center; /* Aligne verticalement (facultatif) */
    margin-top: 20px; /* Ajoute un espace au-dessus */
}

.pagination-container .btn {
    margin: 0 5px; /* Ajoute un espace entre les boutons */
}

.pagination {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 10px;
}
.row.g-4 {
    gap: 8px; /* Espace entre les lignes et colonnes */
}

.pagination li {
    display: inline-block;
}

.pagination li a,
.pagination li span {
    display: block;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    text-decoration: none;
    color: #b11d85;
    transition: background-color 0.3s ease;
}

.pagination li a:hover {
    background-color: #b11d85;
    color: white;
}

.pagination li.active span {
    background-color: #b11d85;
    color: white;
    border-color: #b11d85;
}
.favorite-btn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 20px;
    color: #b11d85;
    transition: color 0.3s ease;
}
.delete-favorite-btn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 18px;
    color: #b11d85;
    transition: color 0.3s ease;
    padding: 5px;
    border-radius: 50%; /* Rounded button */
}
.badge.bg-warning.text-dark {
    background-color: orange;
    color: white;
    font-weight: bold;
    padding: 5px;
    border-radius: 5px;
}


.delete-favorite-btn:hover {
    color: #ff0000; /* Red color on hover */
    background-color: rgba(255, 0, 0, 0.1); /* Slight background color for hover effect */
}

.delete-favorite-btn i {
    font-size: 20px;
}


.favorite-btn.favorited {
    color: #ff0000;
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 244
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

        // line 245
        yield "
       
<div class=\"container\">

  <!-- Sidebar -->
  <div class=\"sidebar-content\">
    <!-- Search Box -->
    <h3>Recherche</h3>
<div class=\"search-box\">
    <input type=\"text\" id=\"search-input\" class=\"form-control\" 
           placeholder=\"Rechercher un produit...\" oninput=\"performSearch(this.value)\">
</div>

<div id=\"search-results\" class=\"search-results\"></div>

    <!-- Categories -->
    <h3>Categories</h3>
    <div class=\"blog_1l2\">
      ";
        // line 263
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 263, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 264
            yield "        <div class=\"dropdown\">
          <button class=\"dropdown-toggle\" onclick=\"toggleDropdown(this)\">
            ";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nomcat", [], "any", false, false, false, 266), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "produits", [], "any", false, false, false, 266)), "html", null, true);
            yield ")
            <span>&#x25BC;</span>
          </button>
          <ul class=\"dropdown-menu\">
            ";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "produits", [], "any", false, false, false, 270));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 271
                yield "              <li><a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 271)]), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 271), "html", null, true);
                yield "</a></li>
            ";
                $context['_iterated'] = true;
            }
            // line 272
            if (!$context['_iterated']) {
                // line 273
                yield "              <li>Aucun produit dans cette catégorie.</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 275
            yield "          </ul>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        yield "    </div>

 <h3>Produits favoris</h3>
    <div class=\"favorites-list\" id=\"favorites-list\">
      ";
        // line 282
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 282, $this->source); })())) > 0)) {
            // line 283
            yield "        <ul>
          ";
            // line 284
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 284, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["favori"]) {
                // line 285
                yield "            <li id=\"favori-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favori"], "id", [], "any", false, false, false, 285), "html", null, true);
                yield "\" style=\"display: flex; align-items: center;\">
              <button class=\"delete-favorite-btn\" data-id=\"";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favori"], "id", [], "any", false, false, false, 286), "html", null, true);
                yield "\" onclick=\"deleteFavorite(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favori"], "id", [], "any", false, false, false, 286), "html", null, true);
                yield ")\" \">
                <i class=\"fa fa-trash\"></i>
              </button>
              ";
                // line 289
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favori"], "nomprod", [], "any", false, false, false, 289), "html", null, true);
                yield " - DT";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favori"], "prixprod", [], "any", false, false, false, 289), "html", null, true);
                yield "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['favori'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            yield "        </ul>
      ";
        } else {
            // line 294
            yield "        <p>Aucun produit dans vos favoris.</p>
      ";
        }
        // line 296
        yield "    </div>
  </div>
  <!--<div class=\"product_1r clearfix\">
          <div class=\"center_product_1r2 clearfix\">
            <div class=\"col-sm-6\">
              <div class=\"center_product_1r2l clearfix\">
                <p class=\"mgt\">
                  ";
        // line 303
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 303, $this->source); })())) == 1)) {
            // line 304
            yield "                    There is 1 produit available.
                  ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 305
(isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 305, $this->source); })())) > 1)) {
            // line 306
            yield "                    There are ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 306, $this->source); })())), "html", null, true);
            yield " produits available.
                  ";
        } else {
            // line 308
            yield "                    No produits available.
                  ";
        }
        // line 310
        yield "                </p>
              </div>
            </div>
          </div>
        </div>-->
  <!-- Product List -->
  <div class=\"product-list\">
    <div class=\"row g-4\">
      ";
        // line 318
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 318, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 319
            yield "        <div class=\"col-md-4 mb-4\">
          <div class=\"product-card\">
             <button 
              class=\"favorite-btn ";
            // line 322
            if (CoreExtension::inFilter($context["produit"], (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 322, $this->source); })()))) {
                yield "favorited";
            }
            yield "\"
              data-id=\"";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 323), "html", null, true);
            yield "\"
              data-url=\"";
            // line 324
            yield ((CoreExtension::inFilter($context["produit"], (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 324, $this->source); })()))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_from_favorites", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 324)]), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_favorites", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 324)]), "html", null, true)));
            yield "\"
            >
              <i class=\"fa ";
            // line 326
            if (CoreExtension::inFilter($context["produit"], (isset($context["favorites"]) || array_key_exists("favorites", $context) ? $context["favorites"] : (function () { throw new RuntimeError('Variable "favorites" does not exist.', 326, $this->source); })()))) {
                yield "fa-heart";
            } else {
                yield "fa-heart-o";
            }
            yield "\"></i>
            </button>
            <img src=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageLarge", [], "any", false, false, false, 328), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 328), "html", null, true);
            yield "\" class=\"product-image\">
            <h5 class=\"product-name\">";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 329), "html", null, true);
            yield "</h5>
            <p class=\"product-price\">";
            // line 330
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixprod", [], "any", false, false, false, 330), "html", null, true);
            yield " DT</p>
            <td>
    ";
            // line 332
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixPromo", [], "any", false, false, false, 332)) {
                // line 333
                yield "        <span class=\"text-success font-weight-bold\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixPromo", [], "any", false, false, false, 333), "html", null, true);
                yield " DT</span>
        <span class=\"badge bg-warning text-dark\">-";
                // line 334
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "getReductionPercentage", [], "method", false, false, false, 334), "html", null, true);
                yield "%</span>
    ";
            } else {
                // line 336
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixprod", [], "any", false, false, false, 336), "html", null, true);
                yield " €
    ";
            }
            // line 338
            yield "</td>

            <div class=\"product-actions\">
              <a href=\"";
            // line 341
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 341)]), "html", null, true);
            yield "\">View</a>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        // line 345
        if (!$context['_iterated']) {
            // line 346
            yield "        <p class=\"text-center\">No products found.</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 348
        yield "    </div>
  </div>
</div>

<div class=\"pagination-container\">
    ";
        // line 353
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 353, $this->source); })()) > 1)) {
            // line 354
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 354, $this->source); })()) - 1)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Précédent</a>
    ";
        }
        // line 356
        yield "
    ";
        // line 357
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 357, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 358
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits", ["page" => $context["i"]]), "html", null, true);
            yield "\" 
           class=\"btn ";
            // line 359
            if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 359, $this->source); })()))) {
                yield "btn-secondary";
            } else {
                yield "btn-light";
            }
            yield "\">
            ";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        yield "
    ";
        // line 364
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 364, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 364, $this->source); })()))) {
            // line 365
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 365, $this->source); })()) + 1)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Suivant</a>
    ";
        }
        // line 367
        yield "</div>
<br>
</br>
<script>
rows.forEach(row => {
    const id = row.querySelector('td:first-child').textContent;
    const prixCell = row.querySelector('td:nth-child(4)');
    const promoBadge = row.querySelector('.badge');

    const promo = data.promotions.find(p => p.id === parseInt(id));

    if (promo) {
        prixCell.innerHTML = `<span class=\"text-success font-weight-bold\">\${promo.nouveauPrix.toFixed(2)} €</span>`;
        promoBadge.textContent = `-\${promo.pourcentage}%`;
    } else {
        prixCell.innerHTML = prixCell.getAttribute('data-original-prix');
        promoBadge.textContent = '';
    }
});
</script>
<script>

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.favorite-btn').forEach(button => {
      button.addEventListener('click', async (event) => {
        event.preventDefault();
        const url = button.getAttribute('data-url');
        const productId = button.getAttribute('data-id');

        const response = await fetch(url, { method: 'POST' });
        if (response.ok) {
          button.classList.toggle('favorited');
          const icon = button.querySelector('i');
          icon.classList.toggle('fa-heart');
          icon.classList.toggle('fa-heart-o');

          const favoritesList = document.getElementById('favorites-list');
          if (button.classList.contains('favorited')) {
            // Add to favorites list
            const newListItem = document.createElement('li');
            newListItem.id = `favori-\${productId}`;
            newListItem.textContent = button.closest('.product-card').querySelector('h5').textContent + 
              ' - ' + button.closest('.product-card').querySelector('p').textContent;
            const deleteBtn = document.createElement('button');
            deleteBtn.classList.add('delete-favorite-btn');
            deleteBtn.innerHTML = '<i class=\"fa fa-trash\"></i>';
            deleteBtn.setAttribute('onclick', `deleteFavorite(\${productId})`);
            newListItem.prepend(deleteBtn);  // Add delete button before product name
            favoritesList.querySelector('ul').appendChild(newListItem);
          } else {
            // Remove from favorites list
            const listItem = document.getElementById(`favori-\${productId}`);
            listItem?.remove();
          }
        }
      });
    });
  });

  function toggleDropdown(button) {
    button.parentElement.classList.toggle('open');
  }

  function deleteFavorite(id) {
    const listItem = document.getElementById(`favori-\${id}`);
    listItem.remove();
    // You may also want to send a request to the server to remove the favorite from the database
    fetch(`/remove-favorite/\${id}`, { method: 'DELETE' });
  }

</script>
<script>

function performSearch(query) {
    const productList = document.querySelector('.product-list .row.g-4');

    if (query.trim() === \"\") {
        // Restaurer tous les produits si la barre de recherche est vide
        window.location.reload(); // Recharger la page pour afficher tous les produits
        return;
    }

    fetch(`/produits/rechercher?query=\${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            productList.innerHTML = \"\"; // Vider la liste actuelle des produits

            if (data.length === 0) {
                productList.innerHTML = \"<p class='text-center'>Aucun produit trouvé.</p>\";
                return;
            }

            data.forEach(product => {
                const card = `
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"product-card\">
                            <img src=\"\${product.imageLarge}\" alt=\"\${product.nomprod}\" class=\"product-image\">
                            <h5 class=\"product-name\">\${product.nomprod}</h5>
                            <p class=\"product-price\">£\${product.prixprod}</p>
                            <div class=\"product-actions\">
                                <a href=\"/produits/\${product.id}\" class=\"btn btn-primary\">Voir</a>
                            </div>
                        </div>
                    </div>
                `;
                productList.innerHTML += card; // Ajouter chaque produit dans la liste
            });
        })
        .catch(error => console.error(\"Erreur lors de la recherche :\", error));
}

</script>

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
        return array (  657 => 367,  651 => 365,  649 => 364,  646 => 363,  637 => 360,  629 => 359,  624 => 358,  620 => 357,  617 => 356,  611 => 354,  609 => 353,  602 => 348,  595 => 346,  593 => 345,  584 => 341,  579 => 338,  573 => 336,  568 => 334,  563 => 333,  561 => 332,  556 => 330,  552 => 329,  546 => 328,  537 => 326,  532 => 324,  528 => 323,  522 => 322,  517 => 319,  512 => 318,  502 => 310,  498 => 308,  492 => 306,  490 => 305,  487 => 304,  485 => 303,  476 => 296,  472 => 294,  468 => 292,  457 => 289,  449 => 286,  444 => 285,  440 => 284,  437 => 283,  435 => 282,  429 => 278,  421 => 275,  414 => 273,  412 => 272,  403 => 271,  398 => 270,  389 => 266,  385 => 264,  381 => 263,  361 => 245,  348 => 244,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Produits{% endblock %}

{% block stylesheets %}
<style>
.favorite-btn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 20px;
    color: #b11d85;
    transition: color 0.3s ease;
  }

  .favorite-btn.favorited {
    color: #ff0000;
  }
  /* Global Styles */
  body {
    background-color: #f9f9f9;
    color: #333;
  }

  /* Main Layout */
  .container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;
  }

  .sidebar-content {
    background-color: #fff;
    flex: 1;
    max-width: 300px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .product-list {
    flex: 3;
  }

  /* Sidebar Components */
  .sidebar-content h3 {
    color: #b11d85;
    margin-bottom: 20px;
    font-size: 18px;
  }

  .dropdown {
    margin-bottom: 10px;
  }

  .dropdown-toggle {
    background-color: #b11d85;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px;
    width: 100%;
    text-align: left;
    font-size: 16px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .dropdown-toggle:hover {
    background-color: #a10a6a;
  }

  .dropdown-menu {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    list-style: none;
    padding: 10px;
    margin-top: 5px;
    display: none;
    position: relative;
  }

  .dropdown-menu li {
    padding: 5px 0;
  }

  .dropdown-menu li a {
    text-decoration: none;
    color: #333;
  }

  .dropdown-menu li a:hover {
    color: #b11d85;
  }

  .dropdown.open .dropdown-menu {
    display: block;
  }

  /* Product Cards */
  .product-card {
    background-color: #fff;
    border: 1px solid #b11d85;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.1);
  }

  .product-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
  }

  .product-name {
    font-size: 18px;
    color: #b11d85;
    font-weight: bold;
    margin: 10px 0;
  }

  .product-price {
    color: #b11d85;
    font-size: 16px;
    margin: 5px 0 15px;
  }

  .product-actions a {
    display: inline-block;
    background-color: #b11d85;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px 60px;
    text-decoration: none;
    margin: 5px;
  }

  .product-actions a:hover {
    background-color: #a10a6a;
  }
.pagination-container {
    display: flex;
    justify-content: center; /* Centre horizontalement */
    align-items: center; /* Aligne verticalement (facultatif) */
    margin-top: 20px; /* Ajoute un espace au-dessus */
}

.pagination-container .btn {
    margin: 0 5px; /* Ajoute un espace entre les boutons */
}

.pagination {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 10px;
}
.row.g-4 {
    gap: 8px; /* Espace entre les lignes et colonnes */
}

.pagination li {
    display: inline-block;
}

.pagination li a,
.pagination li span {
    display: block;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    text-decoration: none;
    color: #b11d85;
    transition: background-color 0.3s ease;
}

.pagination li a:hover {
    background-color: #b11d85;
    color: white;
}

.pagination li.active span {
    background-color: #b11d85;
    color: white;
    border-color: #b11d85;
}
.favorite-btn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 20px;
    color: #b11d85;
    transition: color 0.3s ease;
}
.delete-favorite-btn {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 18px;
    color: #b11d85;
    transition: color 0.3s ease;
    padding: 5px;
    border-radius: 50%; /* Rounded button */
}
.badge.bg-warning.text-dark {
    background-color: orange;
    color: white;
    font-weight: bold;
    padding: 5px;
    border-radius: 5px;
}


.delete-favorite-btn:hover {
    color: #ff0000; /* Red color on hover */
    background-color: rgba(255, 0, 0, 0.1); /* Slight background color for hover effect */
}

.delete-favorite-btn i {
    font-size: 20px;
}


.favorite-btn.favorited {
    color: #ff0000;
}

</style>
{% endblock %}

{% block body %}

       
<div class=\"container\">

  <!-- Sidebar -->
  <div class=\"sidebar-content\">
    <!-- Search Box -->
    <h3>Recherche</h3>
<div class=\"search-box\">
    <input type=\"text\" id=\"search-input\" class=\"form-control\" 
           placeholder=\"Rechercher un produit...\" oninput=\"performSearch(this.value)\">
</div>

<div id=\"search-results\" class=\"search-results\"></div>

    <!-- Categories -->
    <h3>Categories</h3>
    <div class=\"blog_1l2\">
      {% for categorie in categories %}
        <div class=\"dropdown\">
          <button class=\"dropdown-toggle\" onclick=\"toggleDropdown(this)\">
            {{ categorie.nomcat }} ({{ categorie.produits|length }})
            <span>&#x25BC;</span>
          </button>
          <ul class=\"dropdown-menu\">
            {% for produit in categorie.produits %}
              <li><a href=\"{{ path('app_detail', {'id': produit.id}) }}\">{{ produit.nomprod }}</a></li>
            {% else %}
              <li>Aucun produit dans cette catégorie.</li>
            {% endfor %}
          </ul>
        </div>
      {% endfor %}
    </div>

 <h3>Produits favoris</h3>
    <div class=\"favorites-list\" id=\"favorites-list\">
      {% if favorites|length > 0 %}
        <ul>
          {% for favori in favorites %}
            <li id=\"favori-{{ favori.id }}\" style=\"display: flex; align-items: center;\">
              <button class=\"delete-favorite-btn\" data-id=\"{{ favori.id }}\" onclick=\"deleteFavorite({{ favori.id }})\" \">
                <i class=\"fa fa-trash\"></i>
              </button>
              {{ favori.nomprod }} - DT{{ favori.prixprod }}
            </li>
          {% endfor %}
        </ul>
      {% else %}
        <p>Aucun produit dans vos favoris.</p>
      {% endif %}
    </div>
  </div>
  <!--<div class=\"product_1r clearfix\">
          <div class=\"center_product_1r2 clearfix\">
            <div class=\"col-sm-6\">
              <div class=\"center_product_1r2l clearfix\">
                <p class=\"mgt\">
                  {% if produits|length == 1 %}
                    There is 1 produit available.
                  {% elseif produits|length > 1 %}
                    There are {{ produits|length }} produits available.
                  {% else %}
                    No produits available.
                  {% endif %}
                </p>
              </div>
            </div>
          </div>
        </div>-->
  <!-- Product List -->
  <div class=\"product-list\">
    <div class=\"row g-4\">
      {% for produit in produits %}
        <div class=\"col-md-4 mb-4\">
          <div class=\"product-card\">
             <button 
              class=\"favorite-btn {% if produit in favorites %}favorited{% endif %}\"
              data-id=\"{{ produit.id }}\"
              data-url=\"{{ produit in favorites ? path('remove_from_favorites', {'id': produit.id}) : path('add_to_favorites', {'id': produit.id}) }}\"
            >
              <i class=\"fa {% if produit in favorites %}fa-heart{% else %}fa-heart-o{% endif %}\"></i>
            </button>
            <img src=\"{{ produit.imageLarge }}\" alt=\"{{ produit.nomprod }}\" class=\"product-image\">
            <h5 class=\"product-name\">{{ produit.nomprod }}</h5>
            <p class=\"product-price\">{{ produit.prixprod }} DT</p>
            <td>
    {% if produit.prixPromo %}
        <span class=\"text-success font-weight-bold\">{{ produit.prixPromo }} DT</span>
        <span class=\"badge bg-warning text-dark\">-{{ produit.getReductionPercentage() }}%</span>
    {% else %}
        {{ produit.prixprod }} €
    {% endif %}
</td>

            <div class=\"product-actions\">
              <a href=\"{{ path('app_detail', {'id': produit.id}) }}\">View</a>
            </div>
          </div>
        </div>
      {% else %}
        <p class=\"text-center\">No products found.</p>
      {% endfor %}
    </div>
  </div>
</div>

<div class=\"pagination-container\">
    {% if currentPage > 1 %}
        <a href=\"{{ path('app_produits', {'page': currentPage - 1}) }}\" class=\"btn btn-primary\">Précédent</a>
    {% endif %}

    {% for i in 1..totalPages %}
        <a href=\"{{ path('app_produits', {'page': i}) }}\" 
           class=\"btn {% if i == currentPage %}btn-secondary{% else %}btn-light{% endif %}\">
            {{ i }}
        </a>
    {% endfor %}

    {% if currentPage < totalPages %}
        <a href=\"{{ path('app_produits', {'page': currentPage + 1}) }}\" class=\"btn btn-primary\">Suivant</a>
    {% endif %}
</div>
<br>
</br>
<script>
rows.forEach(row => {
    const id = row.querySelector('td:first-child').textContent;
    const prixCell = row.querySelector('td:nth-child(4)');
    const promoBadge = row.querySelector('.badge');

    const promo = data.promotions.find(p => p.id === parseInt(id));

    if (promo) {
        prixCell.innerHTML = `<span class=\"text-success font-weight-bold\">\${promo.nouveauPrix.toFixed(2)} €</span>`;
        promoBadge.textContent = `-\${promo.pourcentage}%`;
    } else {
        prixCell.innerHTML = prixCell.getAttribute('data-original-prix');
        promoBadge.textContent = '';
    }
});
</script>
<script>

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.favorite-btn').forEach(button => {
      button.addEventListener('click', async (event) => {
        event.preventDefault();
        const url = button.getAttribute('data-url');
        const productId = button.getAttribute('data-id');

        const response = await fetch(url, { method: 'POST' });
        if (response.ok) {
          button.classList.toggle('favorited');
          const icon = button.querySelector('i');
          icon.classList.toggle('fa-heart');
          icon.classList.toggle('fa-heart-o');

          const favoritesList = document.getElementById('favorites-list');
          if (button.classList.contains('favorited')) {
            // Add to favorites list
            const newListItem = document.createElement('li');
            newListItem.id = `favori-\${productId}`;
            newListItem.textContent = button.closest('.product-card').querySelector('h5').textContent + 
              ' - ' + button.closest('.product-card').querySelector('p').textContent;
            const deleteBtn = document.createElement('button');
            deleteBtn.classList.add('delete-favorite-btn');
            deleteBtn.innerHTML = '<i class=\"fa fa-trash\"></i>';
            deleteBtn.setAttribute('onclick', `deleteFavorite(\${productId})`);
            newListItem.prepend(deleteBtn);  // Add delete button before product name
            favoritesList.querySelector('ul').appendChild(newListItem);
          } else {
            // Remove from favorites list
            const listItem = document.getElementById(`favori-\${productId}`);
            listItem?.remove();
          }
        }
      });
    });
  });

  function toggleDropdown(button) {
    button.parentElement.classList.toggle('open');
  }

  function deleteFavorite(id) {
    const listItem = document.getElementById(`favori-\${id}`);
    listItem.remove();
    // You may also want to send a request to the server to remove the favorite from the database
    fetch(`/remove-favorite/\${id}`, { method: 'DELETE' });
  }

</script>
<script>

function performSearch(query) {
    const productList = document.querySelector('.product-list .row.g-4');

    if (query.trim() === \"\") {
        // Restaurer tous les produits si la barre de recherche est vide
        window.location.reload(); // Recharger la page pour afficher tous les produits
        return;
    }

    fetch(`/produits/rechercher?query=\${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            productList.innerHTML = \"\"; // Vider la liste actuelle des produits

            if (data.length === 0) {
                productList.innerHTML = \"<p class='text-center'>Aucun produit trouvé.</p>\";
                return;
            }

            data.forEach(product => {
                const card = `
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"product-card\">
                            <img src=\"\${product.imageLarge}\" alt=\"\${product.nomprod}\" class=\"product-image\">
                            <h5 class=\"product-name\">\${product.nomprod}</h5>
                            <p class=\"product-price\">£\${product.prixprod}</p>
                            <div class=\"product-actions\">
                                <a href=\"/produits/\${product.id}\" class=\"btn btn-primary\">Voir</a>
                            </div>
                        </div>
                    </div>
                `;
                productList.innerHTML += card; // Ajouter chaque produit dans la liste
            });
        })
        .catch(error => console.error(\"Erreur lors de la recherche :\", error));
}

</script>

{% endblock %}
", "page/produit.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\page\\produit.html.twig");
    }
}
