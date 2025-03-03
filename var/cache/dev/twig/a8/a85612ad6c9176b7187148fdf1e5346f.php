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

/* order_informations/new.html.twig */
class __TwigTemplate_3fdd773ba5c77575c9818d12ef1b7374 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order_informations/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order_informations/new.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "order_informations/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<style>
    /* Style global de la page */
    body {
        background-color: #f3f4f6;
        font-family: 'Arial', sans-serif;
    }

    .form-container {
        max-width: 700px;
        margin: 30px auto;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    /* Style du titre */
    h1 {
        text-align: center;
        font-size: 32px;
        color: #b11d85;
        margin-bottom: 30px;
        text-transform: uppercase;
        font-weight: bold;
    }

    /* Formulaire */
    .form-container input, 
    .form-container select, 
    .form-container textarea {
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        box-sizing: border-box;
        background-color: #f9f9f9;
        transition: all 0.3s ease;
    }

    .form-container input:focus, 
    .form-container select:focus, 
    .form-container textarea:focus {
        border-color: #b11d85; /* Couleur principale */
        background-color: #ffffff;
        outline: none;
    }

    /* Boutons */
    .btn {
        width: 100%;
        padding: 14px 20px;
        background-color: #b11d85; /* Couleur principale */
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #b11d85; /* Couleur complémentaire au survol */
    }

    /* Style des messages d'alerte */
    .alert {
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 16px;
        border: 1px solid #f5c6cb;
        color: #721c24;
        background-color: #f8d7da;
    }

    .alert ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .alert li {
        margin: 5px 0;
    }

    /* Conteneur pour les actions (retour) */
    .actions {
        margin-top: 30px;
        display: flex;
        justify-content: center;
    }

    .actions a {
        padding: 12px 20px;
        background-color: #5d2d53; /* Couleur principale pour le bouton retour */
        color: white;
        border-radius: 8px;
        text-decoration: none;
        text-align: center;
        font-size: 16px;
        width: 45%;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .actions a:hover {
        background-color: #5d2d53; /* Couleur complémentaire au survol */
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 119
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

        // line 120
        yield "<div class=\"form-container\">
    <h1>Nouvelles Informations de Commande</h1>

    ";
        // line 123
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "vars", [], "any", false, false, false, 123), "errors", [], "any", false, false, false, 123)) > 0)) {
            // line 124
            yield "        <div class=\"alert\">
            <ul>
                ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "errors", [], "any", false, false, false, 126));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 127
                yield "                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 127), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "            </ul>
        </div>
    ";
        }
        // line 132
        yield "
    ";
        // line 133
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
        ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), 'widget');
        yield "
        <button class=\"btn\">";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 135, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
    ";
        // line 136
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), 'form_end');
        yield "

    <div class=\"actions\">
        <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_informations_index");
        yield "\">Retour au panier</a>
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
        return "order_informations/new.html.twig";
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
        return array (  264 => 139,  258 => 136,  254 => 135,  250 => 134,  246 => 133,  243 => 132,  238 => 129,  229 => 127,  225 => 126,  221 => 124,  219 => 123,  214 => 120,  201 => 119,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block stylesheets %}
<style>
    /* Style global de la page */
    body {
        background-color: #f3f4f6;
        font-family: 'Arial', sans-serif;
    }

    .form-container {
        max-width: 700px;
        margin: 30px auto;
        padding: 40px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    /* Style du titre */
    h1 {
        text-align: center;
        font-size: 32px;
        color: #b11d85;
        margin-bottom: 30px;
        text-transform: uppercase;
        font-weight: bold;
    }

    /* Formulaire */
    .form-container input, 
    .form-container select, 
    .form-container textarea {
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        box-sizing: border-box;
        background-color: #f9f9f9;
        transition: all 0.3s ease;
    }

    .form-container input:focus, 
    .form-container select:focus, 
    .form-container textarea:focus {
        border-color: #b11d85; /* Couleur principale */
        background-color: #ffffff;
        outline: none;
    }

    /* Boutons */
    .btn {
        width: 100%;
        padding: 14px 20px;
        background-color: #b11d85; /* Couleur principale */
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #b11d85; /* Couleur complémentaire au survol */
    }

    /* Style des messages d'alerte */
    .alert {
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 16px;
        border: 1px solid #f5c6cb;
        color: #721c24;
        background-color: #f8d7da;
    }

    .alert ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .alert li {
        margin: 5px 0;
    }

    /* Conteneur pour les actions (retour) */
    .actions {
        margin-top: 30px;
        display: flex;
        justify-content: center;
    }

    .actions a {
        padding: 12px 20px;
        background-color: #5d2d53; /* Couleur principale pour le bouton retour */
        color: white;
        border-radius: 8px;
        text-decoration: none;
        text-align: center;
        font-size: 16px;
        width: 45%;
        text-transform: uppercase;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .actions a:hover {
        background-color: #5d2d53; /* Couleur complémentaire au survol */
    }
</style>
{% endblock %}

{% block body %}
<div class=\"form-container\">
    <h1>Nouvelles Informations de Commande</h1>

    {% if form.vars.errors|length > 0 %}
        <div class=\"alert\">
            <ul>
                {% for error in form.errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
        {{ form_widget(form) }}
        <button class=\"btn\">{{ button_label|default('Enregistrer') }}</button>
    {{ form_end(form) }}

    <div class=\"actions\">
        <a href=\"{{ path('app_order_informations_index') }}\">Retour au panier</a>
    </div>
</div>
{% endblock %}
", "order_informations/new.html.twig", "C:\\Users\\hp\\Downloads\\wetransfer_esprit-zip_2025-03-03_1218\\esprit\\esprit\\templates\\order_informations\\new.html.twig");
    }
}
