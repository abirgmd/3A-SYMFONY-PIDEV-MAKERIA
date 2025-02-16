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

/* page/blog.html.twig */
class __TwigTemplate_27a4741b9c713e1d02f7493ccdfec14e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/blog.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/blog.html.twig", 1);
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

        yield "Blog";
        
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

  /* Card de blog */
  .blog_h_1i {
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

  .blog_h_1i:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
  }

  .blog_h_1i img {
    width: 100%;
    height: 200px; /* Taille d'image fixe */
    object-fit: cover;
    margin-bottom: 15px;
    border-radius: 8px;
  }

  .blog_h_1i h4 {
    font-size: 18px;
    color: #b11d85; /* Titre en couleur rose */
    font-weight: bold;
    margin-bottom: 15px;
  }

  .blog_h_1i p {
    font-size: 14px;
    color: #333; /* Texte en gris foncé */
    flex-grow: 1; /* Pour occuper l'espace disponible */
  }

  .blog_h_1i .button_link {
    background-color: #b11d85;
    color: white;
    border: none;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 0px; /* Coins carrés */
    text-align: center;
    transition: background-color 0.3s ease;
  }

  .blog_h_1i .button_link:hover {
    background-color: #a10a6a; /* Couleur plus foncée au survol */
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

  /* Categories */
  .blog_1l2 h3 {
    font-size: 1.2rem;
    color: #b11d85;
    margin-bottom: 10px;
  }

  .blog_1l2 h6 {
    font-size: 14px;
  }

  .blog_1l2 a {
    color: #b11d85;
    text-decoration: none;
  }

  .blog_1l2 a:hover {
    color: #a10a6a; /* Change couleur des liens au survol */
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
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 142
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

        // line 143
        yield "<section id=\"photograph\" class=\"clearfix\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"photograph clearfix\">
        <p><a href=\"#\">Home</a> > <span class=\"photo_tab\">Blog</span></p>
      </div>
    </div>
  </div>
</section>

<section id=\"blog_pg\">
  <div class=\"container\">
    <div class=\"main-content\">
      <!-- Sidebar (Search Box, Categories) -->
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
              <h6>
                <a href=\"blog_detail.html\">
                  <i class=\"fa fa-chevron-right col_pink\"></i>
                </a>
              </h6>
          </div>
        </div>
      </div>

      <!-- Blog Posts -->
      <div class=\"product-list\">
        <div class=\"product_1r clearfix\">
          <div class=\"center_product_1r2 clearfix\">
            <div class=\"col-sm-6\">
              <div class=\"center_product_1r2l clearfix\">
                <p class=\"mgt\">
                  ";
        // line 188
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 188, $this->source); })())) == 1)) {
            // line 189
            yield "                    There is 1 event available.
                  ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 190
(isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 190, $this->source); })())) > 1)) {
            // line 191
            yield "                    There are ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 191, $this->source); })())), "html", null, true);
            yield " events available.
                  ";
        } else {
            // line 193
            yield "                    No events available.
                  ";
        }
        // line 195
        yield "                </p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"list_pg_1r1 clearfix\">
          ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 202, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 203
            yield "            <div class=\"col-md-4 mb-4\">
              <div class=\"blog_h_1i\">
                <a href=\"";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bdetail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 205)]), "html", null, true);
            yield "\">
                  <img src=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image1events", [], "any", false, false, false, 206), "html", null, true);
            yield "\" class=\"iw\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titreevents", [], "any", false, false, false, 206), "html", null, true);
            yield "\">
                </a>
                <h4>
                  <a href=\"";
            // line 209
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bdetail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 209)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titreevents", [], "any", false, false, false, 209), "html", null, true);
            yield "</a>
                </h4>
                <h5 class=\"mgt\">
                  <a class=\"button_link\" href=\"";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bdetail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 212)]), "html", null, true);
            yield "\">View</a>
                </h5>
              </div>
            </div>
          ";
            $context['_iterated'] = true;
        }
        // line 216
        if (!$context['_iterated']) {
            // line 217
            yield "            <p class=\"text-center\">No events found.</p>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
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
        return "page/blog.html.twig";
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
        return array (  379 => 219,  372 => 217,  370 => 216,  361 => 212,  353 => 209,  345 => 206,  341 => 205,  337 => 203,  332 => 202,  323 => 195,  319 => 193,  313 => 191,  311 => 190,  308 => 189,  306 => 188,  259 => 143,  246 => 142,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Blog{% endblock %}

{% block stylesheets %}
<style>
  /* Style global de la page */
  body {
    background-color: #fff; /* Fond blanc */
    color: #333; /* Texte en gris foncé pour la lisibilité */
  }

  /* Card de blog */
  .blog_h_1i {
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

  .blog_h_1i:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
  }

  .blog_h_1i img {
    width: 100%;
    height: 200px; /* Taille d'image fixe */
    object-fit: cover;
    margin-bottom: 15px;
    border-radius: 8px;
  }

  .blog_h_1i h4 {
    font-size: 18px;
    color: #b11d85; /* Titre en couleur rose */
    font-weight: bold;
    margin-bottom: 15px;
  }

  .blog_h_1i p {
    font-size: 14px;
    color: #333; /* Texte en gris foncé */
    flex-grow: 1; /* Pour occuper l'espace disponible */
  }

  .blog_h_1i .button_link {
    background-color: #b11d85;
    color: white;
    border: none;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 0px; /* Coins carrés */
    text-align: center;
    transition: background-color 0.3s ease;
  }

  .blog_h_1i .button_link:hover {
    background-color: #a10a6a; /* Couleur plus foncée au survol */
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

  /* Categories */
  .blog_1l2 h3 {
    font-size: 1.2rem;
    color: #b11d85;
    margin-bottom: 10px;
  }

  .blog_1l2 h6 {
    font-size: 14px;
  }

  .blog_1l2 a {
    color: #b11d85;
    text-decoration: none;
  }

  .blog_1l2 a:hover {
    color: #a10a6a; /* Change couleur des liens au survol */
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
</style>
{% endblock %}

{% block body %}
<section id=\"photograph\" class=\"clearfix\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"photograph clearfix\">
        <p><a href=\"#\">Home</a> > <span class=\"photo_tab\">Blog</span></p>
      </div>
    </div>
  </div>
</section>

<section id=\"blog_pg\">
  <div class=\"container\">
    <div class=\"main-content\">
      <!-- Sidebar (Search Box, Categories) -->
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
              <h6>
                <a href=\"blog_detail.html\">
                  <i class=\"fa fa-chevron-right col_pink\"></i>
                </a>
              </h6>
          </div>
        </div>
      </div>

      <!-- Blog Posts -->
      <div class=\"product-list\">
        <div class=\"product_1r clearfix\">
          <div class=\"center_product_1r2 clearfix\">
            <div class=\"col-sm-6\">
              <div class=\"center_product_1r2l clearfix\">
                <p class=\"mgt\">
                  {% if events|length == 1 %}
                    There is 1 event available.
                  {% elseif events|length > 1 %}
                    There are {{ events|length }} events available.
                  {% else %}
                    No events available.
                  {% endif %}
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"list_pg_1r1 clearfix\">
          {% for event in events %}
            <div class=\"col-md-4 mb-4\">
              <div class=\"blog_h_1i\">
                <a href=\"{{ path('app_bdetail', {'id': event.id}) }}\">
                  <img src=\"{{ event.image1events }}\" class=\"iw\" alt=\"{{ event.titreevents }}\">
                </a>
                <h4>
                  <a href=\"{{ path('app_bdetail', {'id': event.id}) }}\">{{ event.titreevents }}</a>
                </h4>
                <h5 class=\"mgt\">
                  <a class=\"button_link\" href=\"{{ path('app_bdetail', {'id': event.id}) }}\">View</a>
                </h5>
              </div>
            </div>
          {% else %}
            <p class=\"text-center\">No events found.</p>
          {% endfor %}
        </div>
      </div>
    </div>
  </div>
</section>
{% endblock %}
", "page/blog.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\page\\blog.html.twig");
    }
}
