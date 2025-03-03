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

/* commentaire/edit.html.twig */
class __TwigTemplate_be4dcc37e1d2720c6002fc04569d7707 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/edit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "commentaire/edit.html.twig", 1);
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

        yield "Modifier le Commentaire";
        
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
        yield "    <style>
        /* Conteneur principal */
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Titre */
        h2 {
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Style de la carte */
        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Boutons */
        .btn-primary {
            background-color: #842029;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #842029;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Formulaire */
        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .alert-card {
            background-color: #f8d7da;
            color: #842029;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 87
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

        // line 88
        yield "<div class=\"container mt-5\">
    <h2>Modifier le Commentaire</h2>

    <div class=\"card\">
        ";
        // line 92
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

        ";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "session", [], "any", false, false, false, 94), "flashbag", [], "any", false, false, false, 94), "has", ["success"], "method", false, false, false, 94)) {
            // line 95
            yield "            <div class=\"alert-card\">
                ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "session", [], "any", false, false, false, 96), "flashbag", [], "any", false, false, false, 96), "get", ["success"], "method", false, false, false, 96), 0, [], "array", false, false, false, 96), "html", null, true);
            yield "
            </div>
        ";
        } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 98
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "session", [], "any", false, false, false, 98), "flashbag", [], "any", false, false, false, 98), "has", ["error"], "method", false, false, false, 98)) {
            // line 99
            yield "            <div class=\"alert-card\">
                ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "session", [], "any", false, false, false, 100), "flashbag", [], "any", false, false, false, 100), "get", ["error"], "method", false, false, false, 100), 0, [], "array", false, false, false, 100), "html", null, true);
            yield "
            </div>
        ";
        }
        // line 103
        yield "
        <div class=\"form-group\">
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "nomcomment", [], "any", false, false, false, 105), 'label', ["label" => "Nom du Commentaire"]);
        yield "
            ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "nomcomment", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly"]]);
        yield "
            ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "nomcomment", [], "any", false, false, false, 107), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "timecomment", [], "any", false, false, false, 111), 'label', ["label" => "Date de Publication"]);
        yield "
            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "timecomment", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly"]]);
        yield "
            ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "timecomment", [], "any", false, false, false, 113), 'errors');
        yield "
        </div>

        <div class=\"form-group\">
            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "text_commentaire", [], "any", false, false, false, 117), 'label', ["label" => "Commentaire"]);
        yield "
            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "text_commentaire", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "text_commentaire", [], "any", false, false, false, 119), 'errors');
        yield "
        </div>

        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save\"></i> Enregistrer
            </button>
            <a href=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bdetail", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaire"]) || array_key_exists("commentaire", $context) ? $context["commentaire"] : (function () { throw new RuntimeError('Variable "commentaire" does not exist.', 126, $this->source); })()), "event", [], "any", false, false, false, 126), "id", [], "any", false, false, false, 126)]), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                <i class=\"fas fa-times\"></i> Annuler
            </a>
        </div>

        ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_end');
        yield "
    </div>
</div>
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
        return "commentaire/edit.html.twig";
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
        return array (  296 => 131,  288 => 126,  278 => 119,  274 => 118,  270 => 117,  263 => 113,  259 => 112,  255 => 111,  248 => 107,  244 => 106,  240 => 105,  236 => 103,  230 => 100,  227 => 99,  225 => 98,  220 => 96,  217 => 95,  215 => 94,  210 => 92,  204 => 88,  191 => 87,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Modifier le Commentaire{% endblock %}

{% block stylesheets %}
    <style>
        /* Conteneur principal */
        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        /* Titre */
        h2 {
            font-size: 2em;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Style de la carte */
        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Boutons */
        .btn-primary {
            background-color: #842029;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #842029;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        /* Formulaire */
        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .alert-card {
            background-color: #f8d7da;
            color: #842029;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container mt-5\">
    <h2>Modifier le Commentaire</h2>

    <div class=\"card\">
        {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

        {% if app.session.flashbag.has('success') %}
            <div class=\"alert-card\">
                {{ app.session.flashbag.get('success')[0] }}
            </div>
        {% elseif app.session.flashbag.has('error') %}
            <div class=\"alert-card\">
                {{ app.session.flashbag.get('error')[0] }}
            </div>
        {% endif %}

        <div class=\"form-group\">
            {{ form_label(form.nomcomment, 'Nom du Commentaire') }}
            {{ form_widget(form.nomcomment, {'attr': {'class': 'form-control', 'readonly': 'readonly'}}) }}
            {{ form_errors(form.nomcomment) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.timecomment, 'Date de Publication') }}
            {{ form_widget(form.timecomment, {'attr': {'class': 'form-control', 'readonly': 'readonly'}}) }}
            {{ form_errors(form.timecomment) }}
        </div>

        <div class=\"form-group\">
            {{ form_label(form.text_commentaire, 'Commentaire') }}
            {{ form_widget(form.text_commentaire, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.text_commentaire) }}
        </div>

        <div class=\"text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save\"></i> Enregistrer
            </button>
            <a href=\"{{ path('app_bdetail', {'id': commentaire.event.id}) }}\" class=\"btn btn-secondary\">
                <i class=\"fas fa-times\"></i> Annuler
            </a>
        </div>

        {{ form_end(form) }}
    </div>
</div>
{% endblock %}
", "commentaire/edit.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\commentaire\\edit.html.twig");
    }
}
