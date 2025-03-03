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

/* page/detail.html.twig */
class __TwigTemplate_23e7c8a5250345c9af4f26e17e35a4be extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/detail.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/detail.html.twig", 1);
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

        yield "Product Details - ";
        
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
        yield "<link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css\" rel=\"stylesheet\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js\"></script>
<script>AOS.init();</script>

<style>
.container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Joti One', cursive;
  }

  .card-horizontal {
    display: flex;
    flex-wrap: nowrap;
    background: #f4f4f4;
    border: 1px solid #962071;
    border-radius: 8px;
    padding: 20px;
    gap: 30px;
    justify-content: space-between;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .card-horizontal:hover {
    transform: scale(1.02);
  }

  .image-gallery {
    flex: 0 0 35%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .image-gallery img {
    border: 1px solid #962071;
    cursor: pointer;
    transition: transform 0.2s ease;
  }

  .image-gallery .main-image {
    width: 100%;
    height: 350px;
    object-fit: cover;
    margin-bottom: 15px;
    border-radius: 8px;
  }

  .image-gallery .thumbnail {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
  }

  .thumbnail-container {
    display: flex;
    gap: 10px;
  }

  .card-body-horizontal {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .product-name {
    font-weight: bold;
    font-size: 2.5rem;
    color: #962071;
    margin-bottom: 15px;
  }

  .product-description {
    font-weight: normal;
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: #333;
  }

  .price {
    font-size: 1.6rem;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .form-group label {
    font-weight: bold;
  }

  .form-group select,
  .form-group input {
    font-size: 1rem;
    padding: 10px;
    border-radius: 5px;
    transition: border-color 0.3s ease;
  }

  .quantity-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .evaluation-form {
    background-color: #f8f9fa;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
    display: none; /* Initially hidden */
  }

  .btn-primary {
    background: linear-gradient(90deg, #b11d85, #962071);
    color: #fff;
    border: none;
    transition: transform 0.2s, background-color 0.3s ease-in-out;
  }

  .btn-primary:hover {
    background-color: #962071;
  }

  .evaluation-form h3 {
    color: #b11d85;
    margin-bottom: 20px;
  }

  .evaluation-form label {
    font-weight: bold;
    color: #333;
  }

  .evaluation-form input, .evaluation-form textarea, .evaluation-form select {
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ddd;
    padding: 10px;
    width: 100%;
    background-color: #fff;
  }

  .evaluation-form button {
    background-color: #b11d85;
    color: white;
    border-radius: 5px;
    padding: 12px;
    font-size: 16px;
    width: 100%;
  }

  .review-card {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .review-card h5 {
    font-size: 1.6rem;
    color: #962071;
    margin-bottom: 15px;
  }

  .review-card p {
    font-size: 1.1rem;
    color: #555;
  }

  .review-card .rating {
    font-size: 1.2rem;
    color: #ffd700;
  }

  .review-card .review-date {
    font-size: 1rem;
    color: #aaa;
    margin-top: 10px;
  }

  .button-container {
    text-align: center;
    margin-top: 20px;
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 201
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

        // line 202
        yield "<section id=\"photograph\" class=\"clearfix\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"photograph clearfix\">
        <p>
          <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits");
        yield "\">Produits</a> > 
          <span class=\"photo_tab\">";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 208, $this->source); })()), "nomprod", [], "any", false, false, false, 208), "html", null, true);
        yield "</span>
        </p>
      </div>
    </div>
  </div>
</section>

<div class=\"container\">
  <div class=\"card-horizontal\">
    <!-- Product Display Section -->
    <div class=\"image-gallery\">
      <img src=\"";
        // line 219
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 219, $this->source); })()), "imageLarge", [], "any", false, false, false, 219), "html", null, true);
        yield "\" class=\"main-image\" alt=\"Large Product\">
      <div class=\"thumbnail-container\">
        <img src=\"";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 221, $this->source); })()), "imageLarge", [], "any", false, false, false, 221), "html", null, true);
        yield "\" class=\"thumbnail\" alt=\"Thumbnail 1\" onclick=\"changeImage(0)\">
        <img src=\"";
        // line 222
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 222, $this->source); })()), "imageSmall1", [], "any", false, false, false, 222), "html", null, true);
        yield "\" class=\"thumbnail\" alt=\"Thumbnail 2\" onclick=\"changeImage(1)\">
        <img src=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 223, $this->source); })()), "imageSmall2", [], "any", false, false, false, 223), "html", null, true);
        yield "\" class=\"thumbnail\" alt=\"Thumbnail 3\" onclick=\"changeImage(2)\">
        <img src=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 224, $this->source); })()), "imageSmall3", [], "any", false, false, false, 224), "html", null, true);
        yield "\" class=\"thumbnail\" alt=\"Thumbnail 4\" onclick=\"changeImage(3)\">
      </div>
    </div>

    <div class=\"card-body-horizontal\">
      <h2 class=\"product-name\">";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 229, $this->source); })()), "nomprod", [], "any", false, false, false, 229), "html", null, true);
        yield "</h2>
      <p class=\"product-description\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 230, $this->source); })()), "descriptionprod", [], "any", false, false, false, 230), "html", null, true);
        yield "</p>
      <ul class=\"advantages-list\">
        ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 232, $this->source); })()), "avantages", [], "any", false, false, false, 232), "
"));
        foreach ($context['_seq'] as $context["_key"] => $context["avantage"]) {
            // line 233
            yield "          <li>✓ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["avantage"], "html", null, true);
            yield "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avantage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "      </ul>
      <div class=\"price\">";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 236, $this->source); })()), "prixprod", [], "any", false, false, false, 236), 2, ".", ","), "html", null, true);
        yield "DT</div>

      <div class=\"form-group\">
        <label for=\"size\">Select Size:</label>
            <h3 class=\"product-size\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 240, $this->source); })()), "sizeprod", [], "any", false, false, false, 240), "html", null, true);
        yield "</h3>
      </div>

      <div class=\"quantity-container\">
        <div>
          <label for=\"quantity\">Quantity:</label>
          <div class=\"input-group\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">-</button>
            <input type=\"text\" class=\"form-control text-center\" value=\"1\" style=\"max-width: 60px;\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">+</button>
          </div>
        </div>
        <a href=\"";
        // line 252
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 252, $this->source); })()), "id", [], "any", false, false, false, 252)]), "html", null, true);
        yield "\">Add to Cart</a>
      </div>
       <div class=\"button-container\">
    <button id=\"addReviewBtn\" class=\"btn btn-primary\">Add Review</button>
  </div>
    </div>
  </div>

<!-- Formulaire d'évaluation qui sera affiché au clic -->
  <div id=\"reviewForm\" class=\"evaluation-form\">
    <h3>ADD A REVIEW</h3>
    ";
        // line 263
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), 'form_start', ["attr" => ["class" => "form-styled", "novalidate" => "novalidate"]]);
        yield "

    ";
        // line 265
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 265, $this->source); })()), "session", [], "any", false, false, false, 265), "flashbag", [], "any", false, false, false, 265), "has", ["success"], "method", false, false, false, 265)) {
            // line 266
            yield "        <div class=\"alert alert-success\">
            ";
            // line 267
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "session", [], "any", false, false, false, 267), "flashbag", [], "any", false, false, false, 267), "get", ["success"], "method", false, false, false, 267), 0, [], "array", false, false, false, 267), "html", null, true);
            yield "
        </div>
    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 269
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "session", [], "any", false, false, false, 269), "flashbag", [], "any", false, false, false, 269), "has", ["error"], "method", false, false, false, 269)) {
            // line 270
            yield "        <div class=\"alert alert-danger\">
            ";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "session", [], "any", false, false, false, 271), "flashbag", [], "any", false, false, false, 271), "get", ["error"], "method", false, false, false, 271), 0, [], "array", false, false, false, 271), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 274
        yield "
    <div class=\"form-group\">
        ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "userName", [], "any", false, false, false, 276), 'row', ["attr" => ["class" => "form-control", "readonly" => "readonly", "novalidate" => "novalidate"]]);
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 279
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "userMail", [], "any", false, false, false, 279), 'row', ["attr" => ["class" => "form-control", "readonly" => "readonly", "novalidate" => "novalidate"]]);
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 282
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "reviewText", [], "any", false, false, false, 282), 'row', ["attr" => ["class" => "form-control", "novalidate" => "novalidate"]]);
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 285
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), "note", [], "any", false, false, false, 285), 'row', ["attr" => ["class" => "form-control", "novalidate" => "novalidate"]]);
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 288
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "datePublication", [], "any", false, false, false, 288), 'row', ["attr" => ["class" => "form-control", "readonly" => "readonly", "novalidate" => "novalidate"]]);
        yield "
    </div>

    <div class=\"button-container\">
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <br></br>
    </div>

    ";
        // line 296
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), 'form_end');
        yield "
  </div>
<section class=\"container mt-5\">
  <h3>Product Reviews</h3>
  ";
        // line 300
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 300, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 301
            yield "  <div class=\"review-card\">
    <h5>";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "userName", [], "any", false, false, false, 302), "html", null, true);
            yield "</h5>
    <p>";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "reviewText", [], "any", false, false, false, 303), "html", null, true);
            yield "</p>
    <div class=\"rating\">
      ";
            // line 305
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "note", [], "any", false, false, false, 305)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 306
                yield "        ★
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            yield "    </div>
    <small>Posted on ";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "datePublication", [], "any", false, false, false, 309), "F d, Y"), "html", null, true);
            yield "</small>

    <!-- Boutons Modifier/Supprimer visibles uniquement si l'utilisateur est connecté et est l'auteur -->
    ";
            // line 312
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 312, $this->source); })()), "user", [], "any", false, false, false, 312) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 312, $this->source); })()), "user", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "user", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312)))) {
                // line 313
                yield "    <div class=\"button-container\">
      <a href=\"";
                // line 314
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 314)]), "html", null, true);
                yield "\" class=\"btn btn-warning\">
        <i class=\"fas fa-edit\"></i> Modifier
      </a>
      <form method=\"post\" action=\"";
                // line 317
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 317)]), "html", null, true);
                yield "\" style=\"display:inline-block;\">
        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 318
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 318))), "html", null, true);
                yield "\">
        <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette évaluation ?');\">
          <i class=\"fas fa-trash\"></i> Supprimer
        </button>
      </form>
    </div>
    ";
            }
            // line 325
            yield "<h4>Reacts : </h4>
    <!-- Boutons Like/Dislike -->
    <div class=\"like-dislike mt-2\">
      <button class=\"like-btn btn btn-outline-success\" data-id=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 328), "html", null, true);
            yield "\" data-action=\"like\">
        💖 ";
            // line 329
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "likes", [], "any", false, false, false, 329), "html", null, true);
            yield "
      </button>
      <button class=\"dislike-btn btn btn-outline-danger\" data-id=\"";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 331), "html", null, true);
            yield "\" data-action=\"dislike\">
        💔 ";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "dislikes", [], "any", false, false, false, 332), "html", null, true);
            yield "
      </button>
    </div>
  </div>
  ";
            $context['_iterated'] = true;
        }
        // line 336
        if (!$context['_iterated']) {
            // line 337
            yield "    <p>No reviews yet. Be the first to review!</p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        yield "</section>



</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 346
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

        // line 347
        yield "<script>
      document.querySelectorAll('.like-btn, .dislike-btn').forEach(button => {
            button.addEventListener('click', function () {
                const evaluationId = this.dataset.id; // Récupère l'ID de l'évaluation
                const action = this.dataset.action; // \"like\" ou \"dislike\"

                // Effectue une requête AJAX vers l'endpoint pour les évaluations
                fetch(`/evaluation/\${evaluationId}/\${action}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json', // Format JSON
                        'X-Requested-With': 'XMLHttpRequest' // Identifie une requête AJAX
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Une erreur est survenue lors de la requête.');
                    }
                    return response.json(); // Transforme la réponse en JSON
                })
                .then(data => {
                    if (data.success) {
                        // Met à jour les compteurs de \"likes\" et \"dislikes\" pour l'évaluation
                        const likeBtn = document.querySelector(`.like-btn[data-id=\"\${evaluationId}\"]`);
                        const dislikeBtn = document.querySelector(`.dislike-btn[data-id=\"\${evaluationId}\"]`);

                        likeBtn.textContent = `💖 \${data.likes}`;
                        dislikeBtn.textContent = `💔 \${data.dislikes}`;
                    } else {
                        // Affiche une alerte en cas d'erreur côté serveur
                        alert('Erreur : ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la requête :', error);
                    alert('Une erreur inattendue s’est produite. Veuillez réessayer.');
                });
            });
        });
document.getElementById(\"addReviewBtn\").addEventListener(\"click\", function() {
    var reviewForm = document.getElementById(\"reviewForm\");
    reviewForm.style.display = reviewForm.style.display === \"none\" ? \"block\" : \"none\";
  });

  let images = [
    '";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 392, $this->source); })()), "imageLarge", [], "any", false, false, false, 392), "html", null, true);
        yield "',
    '";
        // line 393
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 393, $this->source); })()), "imageSmall1", [], "any", false, false, false, 393), "html", null, true);
        yield "',
    '";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 394, $this->source); })()), "imageSmall2", [], "any", false, false, false, 394), "html", null, true);
        yield "',
    '";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 395, $this->source); })()), "imageSmall3", [], "any", false, false, false, 395), "html", null, true);
        yield "'
  ];
  let currentIndex = 0;

  function changeImage(index) {
    currentIndex = index;
    document.querySelector('.main-image').src = images[currentIndex];
  }
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const evaluationId = this.dataset.id;
            const csrfToken = this.dataset.token;

            if (!confirm('Are you sure you want to delete this evaluation?')) {
                return;
            }

            fetch(`/evaluation/\${evaluationId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': csrfToken
                },
                body: JSON.stringify({ _token: csrfToken })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: \${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    alert('Evaluation deleted successfully!');
                    location.reload(); // Recharge la page pour refléter les changements
                } else if (data.error) {
                    alert(`Error: \${data.error}`);
                }
            })
            .catch(error => {
                console.error('Error during deletion:', error);
                alert('An unexpected error occurred. Please try again.');
            });
        });
    });
});

</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
      button.addEventListener('click', function () {
        const evaluationId = this.dataset.id;
        const csrfToken = this.dataset.token;

        if (confirm('Are you sure you want to delete this item?')) {
          fetch(`/evaluation/delete/\${evaluationId}`, {
            method: 'POST',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ _token: csrfToken })
          })
          .then(response => {
            if (response.ok) {
              // Supprimer l'élément du DOM
              this.closest('.review-card').remove();
              alert('Review deleted successfully.');
            } else {
              return response.json().then(data => {
                throw new Error(data.error || 'Something went wrong.');
              });
            }
          })
          .catch(error => alert(error.message));
        }
      });
    });
  });
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
        return "page/detail.html.twig";
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
        return array (  689 => 395,  685 => 394,  681 => 393,  677 => 392,  630 => 347,  617 => 346,  601 => 339,  594 => 337,  592 => 336,  583 => 332,  579 => 331,  574 => 329,  570 => 328,  565 => 325,  555 => 318,  551 => 317,  545 => 314,  542 => 313,  540 => 312,  534 => 309,  531 => 308,  524 => 306,  520 => 305,  515 => 303,  511 => 302,  508 => 301,  503 => 300,  496 => 296,  485 => 288,  479 => 285,  473 => 282,  467 => 279,  461 => 276,  457 => 274,  451 => 271,  448 => 270,  446 => 269,  441 => 267,  438 => 266,  436 => 265,  431 => 263,  417 => 252,  402 => 240,  395 => 236,  392 => 235,  383 => 233,  378 => 232,  373 => 230,  369 => 229,  361 => 224,  357 => 223,  353 => 222,  349 => 221,  344 => 219,  330 => 208,  326 => 207,  319 => 202,  306 => 201,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Product Details - {% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" rel=\"stylesheet\">
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css\" rel=\"stylesheet\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js\"></script>
<script>AOS.init();</script>

<style>
.container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 20px;
    font-family: 'Joti One', cursive;
  }

  .card-horizontal {
    display: flex;
    flex-wrap: nowrap;
    background: #f4f4f4;
    border: 1px solid #962071;
    border-radius: 8px;
    padding: 20px;
    gap: 30px;
    justify-content: space-between;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }

  .card-horizontal:hover {
    transform: scale(1.02);
  }

  .image-gallery {
    flex: 0 0 35%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .image-gallery img {
    border: 1px solid #962071;
    cursor: pointer;
    transition: transform 0.2s ease;
  }

  .image-gallery .main-image {
    width: 100%;
    height: 350px;
    object-fit: cover;
    margin-bottom: 15px;
    border-radius: 8px;
  }

  .image-gallery .thumbnail {
    width: 100px;
    height: 100px;
    object-fit: cover;
    border-radius: 8px;
  }

  .thumbnail-container {
    display: flex;
    gap: 10px;
  }

  .card-body-horizontal {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .product-name {
    font-weight: bold;
    font-size: 2.5rem;
    color: #962071;
    margin-bottom: 15px;
  }

  .product-description {
    font-weight: normal;
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: #333;
  }

  .price {
    font-size: 1.6rem;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .form-group label {
    font-weight: bold;
  }

  .form-group select,
  .form-group input {
    font-size: 1rem;
    padding: 10px;
    border-radius: 5px;
    transition: border-color 0.3s ease;
  }

  .quantity-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .evaluation-form {
    background-color: #f8f9fa;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-top: 40px;
    display: none; /* Initially hidden */
  }

  .btn-primary {
    background: linear-gradient(90deg, #b11d85, #962071);
    color: #fff;
    border: none;
    transition: transform 0.2s, background-color 0.3s ease-in-out;
  }

  .btn-primary:hover {
    background-color: #962071;
  }

  .evaluation-form h3 {
    color: #b11d85;
    margin-bottom: 20px;
  }

  .evaluation-form label {
    font-weight: bold;
    color: #333;
  }

  .evaluation-form input, .evaluation-form textarea, .evaluation-form select {
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ddd;
    padding: 10px;
    width: 100%;
    background-color: #fff;
  }

  .evaluation-form button {
    background-color: #b11d85;
    color: white;
    border-radius: 5px;
    padding: 12px;
    font-size: 16px;
    width: 100%;
  }

  .review-card {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .review-card h5 {
    font-size: 1.6rem;
    color: #962071;
    margin-bottom: 15px;
  }

  .review-card p {
    font-size: 1.1rem;
    color: #555;
  }

  .review-card .rating {
    font-size: 1.2rem;
    color: #ffd700;
  }

  .review-card .review-date {
    font-size: 1rem;
    color: #aaa;
    margin-top: 10px;
  }

  .button-container {
    text-align: center;
    margin-top: 20px;
  }
</style>
{% endblock %}

{% block body %}
<section id=\"photograph\" class=\"clearfix\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"photograph clearfix\">
        <p>
          <a href=\"{{ path('app_produits') }}\">Produits</a> > 
          <span class=\"photo_tab\">{{ produit.nomprod }}</span>
        </p>
      </div>
    </div>
  </div>
</section>

<div class=\"container\">
  <div class=\"card-horizontal\">
    <!-- Product Display Section -->
    <div class=\"image-gallery\">
      <img src=\"{{ produit.imageLarge }}\" class=\"main-image\" alt=\"Large Product\">
      <div class=\"thumbnail-container\">
        <img src=\"{{ produit.imageLarge }}\" class=\"thumbnail\" alt=\"Thumbnail 1\" onclick=\"changeImage(0)\">
        <img src=\"{{ produit.imageSmall1 }}\" class=\"thumbnail\" alt=\"Thumbnail 2\" onclick=\"changeImage(1)\">
        <img src=\"{{ produit.imageSmall2 }}\" class=\"thumbnail\" alt=\"Thumbnail 3\" onclick=\"changeImage(2)\">
        <img src=\"{{ produit.imageSmall3 }}\" class=\"thumbnail\" alt=\"Thumbnail 4\" onclick=\"changeImage(3)\">
      </div>
    </div>

    <div class=\"card-body-horizontal\">
      <h2 class=\"product-name\">{{ produit.nomprod }}</h2>
      <p class=\"product-description\">{{ produit.descriptionprod }}</p>
      <ul class=\"advantages-list\">
        {% for avantage in produit.avantages|split('\\n') %}
          <li>✓ {{ avantage }}</li>
        {% endfor %}
      </ul>
      <div class=\"price\">{{ produit.prixprod|number_format(2, '.', ',') }}DT</div>

      <div class=\"form-group\">
        <label for=\"size\">Select Size:</label>
            <h3 class=\"product-size\">{{ produit.sizeprod }}</h3>
      </div>

      <div class=\"quantity-container\">
        <div>
          <label for=\"quantity\">Quantity:</label>
          <div class=\"input-group\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">-</button>
            <input type=\"text\" class=\"form-control text-center\" value=\"1\" style=\"max-width: 60px;\">
            <button class=\"btn btn-outline-secondary\" type=\"button\">+</button>
          </div>
        </div>
        <a href=\"{{ path('cart_add', {'id': produit.id}) }}\">Add to Cart</a>
      </div>
       <div class=\"button-container\">
    <button id=\"addReviewBtn\" class=\"btn btn-primary\">Add Review</button>
  </div>
    </div>
  </div>

<!-- Formulaire d'évaluation qui sera affiché au clic -->
  <div id=\"reviewForm\" class=\"evaluation-form\">
    <h3>ADD A REVIEW</h3>
    {{ form_start(form, {'attr': {'class': 'form-styled', 'novalidate': 'novalidate'}}) }}

    {% if app.session.flashbag.has('success') %}
        <div class=\"alert alert-success\">
            {{ app.session.flashbag.get('success')[0] }}
        </div>
    {% elseif app.session.flashbag.has('error') %}
        <div class=\"alert alert-danger\">
            {{ app.session.flashbag.get('error')[0] }}
        </div>
    {% endif %}

    <div class=\"form-group\">
        {{ form_row(form.userName, {'attr': {'class': 'form-control', 'readonly': 'readonly', 'novalidate': 'novalidate'}}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(form.userMail, {'attr': {'class': 'form-control', 'readonly': 'readonly', 'novalidate': 'novalidate'}}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(form.reviewText, {'attr': {'class': 'form-control', 'novalidate': 'novalidate'}}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(form.note, {'attr': {'class': 'form-control', 'novalidate': 'novalidate'}}) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(form.datePublication, {'attr': {'class': 'form-control', 'readonly': 'readonly', 'novalidate': 'novalidate'}}) }}
    </div>

    <div class=\"button-container\">
        <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
        <br></br>
    </div>

    {{ form_end(form) }}
  </div>
<section class=\"container mt-5\">
  <h3>Product Reviews</h3>
  {% for evaluation in evaluations %}
  <div class=\"review-card\">
    <h5>{{ evaluation.userName }}</h5>
    <p>{{ evaluation.reviewText }}</p>
    <div class=\"rating\">
      {% for i in 1..evaluation.note %}
        ★
      {% endfor %}
    </div>
    <small>Posted on {{ evaluation.datePublication|date('F d, Y') }}</small>

    <!-- Boutons Modifier/Supprimer visibles uniquement si l'utilisateur est connecté et est l'auteur -->
    {% if app.user and app.user.id == evaluation.user.id %}
    <div class=\"button-container\">
      <a href=\"{{ path('app_evaluation_edit', {'id': evaluation.id}) }}\" class=\"btn btn-warning\">
        <i class=\"fas fa-edit\"></i> Modifier
      </a>
      <form method=\"post\" action=\"{{ path('app_evaluation_delete', { id: evaluation.id }) }}\" style=\"display:inline-block;\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ evaluation.id) }}\">
        <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette évaluation ?');\">
          <i class=\"fas fa-trash\"></i> Supprimer
        </button>
      </form>
    </div>
    {% endif %}
<h4>Reacts : </h4>
    <!-- Boutons Like/Dislike -->
    <div class=\"like-dislike mt-2\">
      <button class=\"like-btn btn btn-outline-success\" data-id=\"{{ evaluation.id }}\" data-action=\"like\">
        💖 {{ evaluation.likes }}
      </button>
      <button class=\"dislike-btn btn btn-outline-danger\" data-id=\"{{ evaluation.id }}\" data-action=\"dislike\">
        💔 {{ evaluation.dislikes }}
      </button>
    </div>
  </div>
  {% else %}
    <p>No reviews yet. Be the first to review!</p>
  {% endfor %}
</section>



</div>
{% endblock %}

{% block javascripts %}
<script>
      document.querySelectorAll('.like-btn, .dislike-btn').forEach(button => {
            button.addEventListener('click', function () {
                const evaluationId = this.dataset.id; // Récupère l'ID de l'évaluation
                const action = this.dataset.action; // \"like\" ou \"dislike\"

                // Effectue une requête AJAX vers l'endpoint pour les évaluations
                fetch(`/evaluation/\${evaluationId}/\${action}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json', // Format JSON
                        'X-Requested-With': 'XMLHttpRequest' // Identifie une requête AJAX
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Une erreur est survenue lors de la requête.');
                    }
                    return response.json(); // Transforme la réponse en JSON
                })
                .then(data => {
                    if (data.success) {
                        // Met à jour les compteurs de \"likes\" et \"dislikes\" pour l'évaluation
                        const likeBtn = document.querySelector(`.like-btn[data-id=\"\${evaluationId}\"]`);
                        const dislikeBtn = document.querySelector(`.dislike-btn[data-id=\"\${evaluationId}\"]`);

                        likeBtn.textContent = `💖 \${data.likes}`;
                        dislikeBtn.textContent = `💔 \${data.dislikes}`;
                    } else {
                        // Affiche une alerte en cas d'erreur côté serveur
                        alert('Erreur : ' + data.message);
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la requête :', error);
                    alert('Une erreur inattendue s’est produite. Veuillez réessayer.');
                });
            });
        });
document.getElementById(\"addReviewBtn\").addEventListener(\"click\", function() {
    var reviewForm = document.getElementById(\"reviewForm\");
    reviewForm.style.display = reviewForm.style.display === \"none\" ? \"block\" : \"none\";
  });

  let images = [
    '{{ produit.imageLarge }}',
    '{{ produit.imageSmall1 }}',
    '{{ produit.imageSmall2 }}',
    '{{ produit.imageSmall3 }}'
  ];
  let currentIndex = 0;

  function changeImage(index) {
    currentIndex = index;
    document.querySelector('.main-image').src = images[currentIndex];
  }
</script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function () {
            const evaluationId = this.dataset.id;
            const csrfToken = this.dataset.token;

            if (!confirm('Are you sure you want to delete this evaluation?')) {
                return;
            }

            fetch(`/evaluation/\${evaluationId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': csrfToken
                },
                body: JSON.stringify({ _token: csrfToken })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: \${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    alert('Evaluation deleted successfully!');
                    location.reload(); // Recharge la page pour refléter les changements
                } else if (data.error) {
                    alert(`Error: \${data.error}`);
                }
            })
            .catch(error => {
                console.error('Error during deletion:', error);
                alert('An unexpected error occurred. Please try again.');
            });
        });
    });
});

</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const deleteButtons = document.querySelectorAll('.delete-btn');

    deleteButtons.forEach(button => {
      button.addEventListener('click', function () {
        const evaluationId = this.dataset.id;
        const csrfToken = this.dataset.token;

        if (confirm('Are you sure you want to delete this item?')) {
          fetch(`/evaluation/delete/\${evaluationId}`, {
            method: 'POST',
            headers: {
              'X-Requested-With': 'XMLHttpRequest',
              'Content-Type': 'application/json'
            },
            body: JSON.stringify({ _token: csrfToken })
          })
          .then(response => {
            if (response.ok) {
              // Supprimer l'élément du DOM
              this.closest('.review-card').remove();
              alert('Review deleted successfully.');
            } else {
              return response.json().then(data => {
                throw new Error(data.error || 'Something went wrong.');
              });
            }
          })
          .catch(error => alert(error.message));
        }
      });
    });
  });
</script>

{% endblock %}
", "page/detail.html.twig", "C:\\xampp\\htdocs\\RAHMA\\fianle\\versionf\\esprit\\esprit\\templates\\page\\detail.html.twig");
    }
}
