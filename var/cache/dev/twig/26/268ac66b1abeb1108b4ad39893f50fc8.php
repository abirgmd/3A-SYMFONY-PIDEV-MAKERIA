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

/* reply/edit.html.twig */
class __TwigTemplate_ac95f73aab549bd35cbc4a5b98312a78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reply/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reply/edit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "reply/edit.html.twig", 1);
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

        yield "Modifier un commentaire - Makeria";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
        <link href=\"https://fonts.googleapis.com/css?family=Joti+One&display=swap\" rel=\"stylesheet\">

    <style>
        body {
            background-color: #f3f4f6;
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

        h1 {
            text-align: center;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-weight: bold;
        }

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
            border-color: #b11d85;
            background-color: #ffffff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 14px 20px;
            background-color: #b11d85;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #8e1668;
        }

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

        .actions {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .actions a {
            padding: 12px 20px;
            background-color: #5d2d53;
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
            background-color: #4a2345;
        }

        .actions .delete-btn {
            background-color: #e74c3c;
        }

        .actions .delete-btn:hover {
            background-color: #c0392b;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 126
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

        // line 127
        yield "    <section id=\"content\" class=\"clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"form-container\">
                        <h1>Modifier un commentaire</h1>

                        ";
        // line 134
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "vars", [], "any", false, false, false, 134), "errors", [], "any", false, false, false, 134)) > 0)) {
            // line 135
            yield "                            <div class=\"alert\">
                                <ul>
                                    ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "errors", [], "any", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 138
                yield "                                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 138), "html", null, true);
                yield "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            yield "                                </ul>
                            </div>
                        ";
        }
        // line 143
        yield "
                        ";
        // line 144
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reply/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "

                        <div class=\"actions\">
                            <a href=\"";
        // line 147
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\" class=\"back-btn\">Retourner</a>
                            ";
        // line 148
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reply/_delete_form.html.twig");
        yield "
                        </div>
                    </div>
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
        return "reply/edit.html.twig";
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
        return array (  291 => 148,  287 => 147,  281 => 144,  278 => 143,  273 => 140,  264 => 138,  260 => 137,  256 => 135,  254 => 134,  245 => 127,  232 => 126,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Modifier un commentaire - Makeria{% endblock %}

{% block stylesheets %}
    {{ parent() }}
        <link href=\"https://fonts.googleapis.com/css?family=Joti+One&display=swap\" rel=\"stylesheet\">

    <style>
        body {
            background-color: #f3f4f6;
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

        h1 {
            text-align: center;
            font-size: 32px;
            color: #2c3e50;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-weight: bold;
        }

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
            border-color: #b11d85;
            background-color: #ffffff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 14px 20px;
            background-color: #b11d85;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #8e1668;
        }

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

        .actions {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .actions a {
            padding: 12px 20px;
            background-color: #5d2d53;
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
            background-color: #4a2345;
        }

        .actions .delete-btn {
            background-color: #e74c3c;
        }

        .actions .delete-btn:hover {
            background-color: #c0392b;
        }
    </style>
{% endblock %}

{% block body %}
    <section id=\"content\" class=\"clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"form-container\">
                        <h1>Modifier un commentaire</h1>

                        {% if form.vars.errors|length > 0 %}
                            <div class=\"alert\">
                                <ul>
                                    {% for error in form.errors %}
                                        <li>{{ error.message }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}

                        {{ include('reply/_form.html.twig', {'button_label': 'Mettre à jour'}) }}

                        <div class=\"actions\">
                            <a href=\"{{ path('app_forum') }}\" class=\"back-btn\">Retourner</a>
                            {{ include('reply/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "reply/edit.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\reply\\edit.html.twig");
    }
}
