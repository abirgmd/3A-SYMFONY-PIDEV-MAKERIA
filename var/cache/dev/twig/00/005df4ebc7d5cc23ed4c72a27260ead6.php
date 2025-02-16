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
class __TwigTemplate_d64e63156bee7310224cad4c71278655 extends Template
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
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  }

  .product-description {
    font-weight: normal;
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: #333;
    line-height: 1.6;
  }

  .advantages-list {
    list-style-type: disc;
    padding-left: 20px;
    margin-bottom: 20px;
    color: #444;
  }

  .advantages-list li {
    font-size: 1.1rem;
    margin-bottom: 8px;
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
    background-color: #f9f9f9;
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
}

  .evaluation-form .form-group {
    margin-bottom: 15px;
  }

  .btn-primary {
    background-color: #962071;
    color: white;
    padding: 12px 20px;
    border-radius: 5px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #962071;
  }

  .button-container {
    text-align: center;
    margin-top: 20px;
  }

.evaluation-form h3 {
        color: #b11d85;

    margin-bottom: 20px;
    color: #333;
}

.evaluation-form label {
    font-weight: bold;
    color: #333;
    margin-bottom: 8px;
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
    transition: background-color 0.3s ease;
}

/* Display Evaluation Section */
.evaluation-card {
    background-color: #f8f9fa;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.evaluation-card h5 {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 10px;
}

.evaluation-card p {
    font-size: 1rem;
    margin-bottom: 10px;
    color: #555;
}

.evaluation-card small {
    font-size: 0.875rem;
    color: #6c757d;
}
  /* Review Cards */
  .review-card {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
  }

  .review-card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .review-card h5 {
    font-size: 1.6rem;
    color: #962071;
    margin-bottom: 15px;
  }

  .review-card p {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.6;
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

  /* Mobile responsiveness */
  @media (max-width: 768px) {
    .card-horizontal {
      flex-direction: column;
    }

    .image-gallery {
      flex: 0 0 100%;
      margin-bottom: 20px;
    }

    .card-body-horizontal {
      width: 100%;
    }
  }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 276
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

        // line 277
        yield "<div class=\"container\">
  <div class=\"card-horizontal\">
    <!-- Product Display Section -->
    <div class=\"image-gallery\">
      <img src=\"";
        // line 281
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 281, $this->source); })()), "imageLarge", [], "any", false, false, false, 281), "html", null, true);
        yield "\" class=\"main-image\" alt=\"Large Product\">
      <div class=\"thumbnail-container\">
        <img src=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 283, $this->source); })()), "imageLarge", [], "any", false, false, false, 283), "html", null, true);
        yield "\" class=\"thumbnail\" alt=\"Thumbnail 1\" onclick=\"changeImage(0)\">
        <img src=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 284, $this->source); })()), "imageSmall1", [], "any", false, false, false, 284), "html", null, true);
        yield "\" class=\"thumbnail\" alt=\"Thumbnail 2\" onclick=\"changeImage(1)\">
        <img src=\"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 285, $this->source); })()), "imageSmall2", [], "any", false, false, false, 285), "html", null, true);
        yield "\" class=\"thumbnail\" alt=\"Thumbnail 3\" onclick=\"changeImage(2)\">
        <img src=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 286, $this->source); })()), "imageSmall3", [], "any", false, false, false, 286), "html", null, true);
        yield "\" class=\"thumbnail\" alt=\"Thumbnail 4\" onclick=\"changeImage(3)\">
      </div>
    </div>

    <div class=\"card-body-horizontal\">
      <h2 class=\"product-name\">";
        // line 291
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 291, $this->source); })()), "nomprod", [], "any", false, false, false, 291), "html", null, true);
        yield "</h2>
      <p class=\"product-description\">";
        // line 292
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 292, $this->source); })()), "descriptionprod", [], "any", false, false, false, 292), "html", null, true);
        yield "</p>
      <ul class=\"advantages-list\">
        ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 294, $this->source); })()), "avantages", [], "any", false, false, false, 294), "
"));
        foreach ($context['_seq'] as $context["_key"] => $context["avantage"]) {
            // line 295
            yield "          <li>✓ ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["avantage"], "html", null, true);
            yield "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['avantage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        yield "      </ul>
      <div class=\"price\">\$";
        // line 298
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 298, $this->source); })()), "prixprod", [], "any", false, false, false, 298), 2, ".", ","), "html", null, true);
        yield "</div>

      <div class=\"form-group\">
        <label for=\"size\">Select Size:</label>
        <select id=\"size\" class=\"form-control\">
          <option>";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 303, $this->source); })()), "sizeprod", [], "any", false, false, false, 303), "html", null, true);
        yield "</option>
        </select>
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
        <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
      </div>
    </div>
  </div>

  <div class=\"evaluation-form\">
    <h3>ADD A REVIEW</h3>
    ";
        // line 323
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), 'form_start');
        yield "

    ";
        // line 325
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "session", [], "any", false, false, false, 325), "flashbag", [], "any", false, false, false, 325), "has", ["success"], "method", false, false, false, 325)) {
            // line 326
            yield "    <div class=\"alert alert-success\">
      ";
            // line 327
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 327, $this->source); })()), "session", [], "any", false, false, false, 327), "flashbag", [], "any", false, false, false, 327), "get", ["success"], "method", false, false, false, 327), 0, [], "array", false, false, false, 327), "html", null, true);
            yield "
    </div>
    ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 329
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 329, $this->source); })()), "session", [], "any", false, false, false, 329), "flashbag", [], "any", false, false, false, 329), "has", ["error"], "method", false, false, false, 329)) {
            // line 330
            yield "    <div class=\"alert alert-danger\">
      ";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "session", [], "any", false, false, false, 331), "flashbag", [], "any", false, false, false, 331), "get", ["error"], "method", false, false, false, 331), 0, [], "array", false, false, false, 331), "html", null, true);
            yield "
    </div>
    ";
        }
        // line 334
        yield "
    <div class=\"form-group\">
      ";
        // line 336
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 336, $this->source); })()), "userName", [], "any", false, false, false, 336), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>
    <div class=\"form-group\">
      ";
        // line 339
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "userMail", [], "any", false, false, false, 339), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>
    <div class=\"form-group\">
      ";
        // line 342
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), "reviewText", [], "any", false, false, false, 342), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>
    <div class=\"form-group\">
      ";
        // line 345
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 345, $this->source); })()), "note", [], "any", false, false, false, 345), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>
    <div class=\"form-group\">
      ";
        // line 348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "datePublication", [], "any", false, false, false, 348), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
    </div>
    <div class=\"button-container\">
      <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      <br>      </br>
    </div>
    ";
        // line 354
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 354, $this->source); })()), 'form_end');
        yield "
  </div>

  <!-- Display Reviews -->
  <section class=\"container mt-5\">
    <h3>Product Reviews</h3>
    ";
        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 360, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 361
            yield "    <div class=\"review-card\">
      <h5>";
            // line 362
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "userName", [], "any", false, false, false, 362), "html", null, true);
            yield "</h5>
      <p>";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "reviewText", [], "any", false, false, false, 363), "html", null, true);
            yield "</p>
      <div class=\"rating\">
        ";
            // line 365
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "note", [], "any", false, false, false, 365)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 366
                yield "          ★
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            yield "      </div>
      <small>Posted on ";
            // line 369
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "datePublication", [], "any", false, false, false, 369), "F d, Y"), "html", null, true);
            yield "</small>
    </div>
    ";
            $context['_iterated'] = true;
        }
        // line 371
        if (!$context['_iterated']) {
            // line 372
            yield "    <p>No reviews yet. Be the first to review!</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 374
        yield "  </section>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 378
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

        // line 379
        yield "<script>
  let images = [
    '";
        // line 381
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 381, $this->source); })()), "imageLarge", [], "any", false, false, false, 381), "html", null, true);
        yield "',
    '";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 382, $this->source); })()), "imageSmall1", [], "any", false, false, false, 382), "html", null, true);
        yield "',
    '";
        // line 383
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 383, $this->source); })()), "imageSmall2", [], "any", false, false, false, 383), "html", null, true);
        yield "',
    '";
        // line 384
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 384, $this->source); })()), "imageSmall3", [], "any", false, false, false, 384), "html", null, true);
        yield "'
  ];
  let currentIndex = 0;

  function changeImage(index) {
    currentIndex = index;
    document.querySelector('.main-image').src = images[currentIndex];
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
        return array (  643 => 384,  639 => 383,  635 => 382,  631 => 381,  627 => 379,  614 => 378,  601 => 374,  594 => 372,  592 => 371,  585 => 369,  582 => 368,  575 => 366,  571 => 365,  566 => 363,  562 => 362,  559 => 361,  554 => 360,  545 => 354,  536 => 348,  530 => 345,  524 => 342,  518 => 339,  512 => 336,  508 => 334,  502 => 331,  499 => 330,  497 => 329,  492 => 327,  489 => 326,  487 => 325,  482 => 323,  459 => 303,  451 => 298,  448 => 297,  439 => 295,  434 => 294,  429 => 292,  425 => 291,  417 => 286,  413 => 285,  409 => 284,  405 => 283,  400 => 281,  394 => 277,  381 => 276,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Product Details - {% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">

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
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
  }

  .product-description {
    font-weight: normal;
    font-size: 1.2rem;
    margin-bottom: 15px;
    color: #333;
    line-height: 1.6;
  }

  .advantages-list {
    list-style-type: disc;
    padding-left: 20px;
    margin-bottom: 20px;
    color: #444;
  }

  .advantages-list li {
    font-size: 1.1rem;
    margin-bottom: 8px;
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
    background-color: #f9f9f9;
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
}

  .evaluation-form .form-group {
    margin-bottom: 15px;
  }

  .btn-primary {
    background-color: #962071;
    color: white;
    padding: 12px 20px;
    border-radius: 5px;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: background-color 0.3s ease;
  }

  .btn-primary:hover {
    background-color: #962071;
  }

  .button-container {
    text-align: center;
    margin-top: 20px;
  }

.evaluation-form h3 {
        color: #b11d85;

    margin-bottom: 20px;
    color: #333;
}

.evaluation-form label {
    font-weight: bold;
    color: #333;
    margin-bottom: 8px;
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
    transition: background-color 0.3s ease;
}

/* Display Evaluation Section */
.evaluation-card {
    background-color: #f8f9fa;
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.evaluation-card h5 {
    font-size: 1.2rem;
    color: #333;
    margin-bottom: 10px;
}

.evaluation-card p {
    font-size: 1rem;
    margin-bottom: 10px;
    color: #555;
}

.evaluation-card small {
    font-size: 0.875rem;
    color: #6c757d;
}
  /* Review Cards */
  .review-card {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
  }

  .review-card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .review-card h5 {
    font-size: 1.6rem;
    color: #962071;
    margin-bottom: 15px;
  }

  .review-card p {
    font-size: 1.1rem;
    color: #555;
    line-height: 1.6;
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

  /* Mobile responsiveness */
  @media (max-width: 768px) {
    .card-horizontal {
      flex-direction: column;
    }

    .image-gallery {
      flex: 0 0 100%;
      margin-bottom: 20px;
    }

    .card-body-horizontal {
      width: 100%;
    }
  }
</style>
{% endblock %}

{% block body %}
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
      <div class=\"price\">\${{ produit.prixprod|number_format(2, '.', ',') }}</div>

      <div class=\"form-group\">
        <label for=\"size\">Select Size:</label>
        <select id=\"size\" class=\"form-control\">
          <option>{{ produit.sizeprod }}</option>
        </select>
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
        <a href=\"#\" class=\"btn btn-primary\">Add to Cart</a>
      </div>
    </div>
  </div>

  <div class=\"evaluation-form\">
    <h3>ADD A REVIEW</h3>
    {{ form_start(form) }}

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
      {{ form_row(form.userName, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.userMail, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.reviewText, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.note, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"form-group\">
      {{ form_row(form.datePublication, {'attr': {'class': 'form-control'}}) }}
    </div>
    <div class=\"button-container\">
      <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
      <br>      </br>
    </div>
    {{ form_end(form) }}
  </div>

  <!-- Display Reviews -->
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
    </div>
    {% else %}
    <p>No reviews yet. Be the first to review!</p>
    {% endfor %}
  </section>
</div>
{% endblock %}

{% block javascripts %}
<script>
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
{% endblock %}
", "page/detail.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\page\\detail.html.twig");
    }
}
