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

/* reclamation/edit.html.twig */
class __TwigTemplate_fceccc85d96af8d416019bc11053d994 extends Template
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
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/edit.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "reclamation/edit.html.twig", 1);
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

        yield "Nouvelle Réclamation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"forum-container\">
        <h1 class=\"forum-title\">Créer une réclamation</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche (optionnel) -->
                <div class=\"image-section\">
                    <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/11.jpg"), "html", null, true);
        yield "\" alt=\"Image réclamation\" class=\"contact-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-form", "novalidate" => "novalidate"]]);
        yield "

                    <div class=\"forum-messages\">
                        <div class=\"forum-message\">
                            <div class=\"message-content\">
                                <div class=\"form-group\">
                                    ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "type", [], "any", false, false, false, 24), 'row');
        yield "
                                </div>
                                <div class=\"form-group\">
                                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "descriptionRec", [], "any", false, false, false, 27), 'row');
        yield "
                                </div>
                            </div>
                        </div>
                    </div>

                    ";
        // line 33
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'errors')) {
            // line 34
            yield "                        <div class=\"form-errors\">
                            <ul>
                                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'errors'));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 37
                yield "                                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                yield "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            yield "                            </ul>
                        </div>
                    ";
        }
        // line 42
        yield "
                    <div class=\"form-submit\">
                        <button type=\"submit\" class=\"btn btn-primary\" onclick=\"return confirm('Voulez-vous vraiment envoyer cette réclamation ?');\">Envoyer</button>
                    </div>

                    ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
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

        // line 55
        yield "    <link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
    <style>
        body {
            font-family: 'Joti One', Arial, sans-serif;
        }
        .forum-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f3f4f6;
        }
        .forum-title {
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .image-section {
            flex: 1;
            max-width: 50%;
        }
        .contact-image {
            width: 100%;
            border-radius: 8px;
        }
        .form-section {
            flex: 1;
            max-width: 50%;
        }
        .forum-messages {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .forum-message {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .forum-message:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        .form-group {
            width: 100%;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
            color: #333;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 6px;
            background: #f3f3f3;
            color: #333;
        }
        .btn-primary {
            background-color: #9c1575;
            color: #fff;
            padding: 20px 50px;
            font-size: 20px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            width: 100%;
            max-width: 600px;
        }
        .btn-primary:hover {
            background-color: #7e0f63;
        }
        .form-submit {
            text-align: center;
            margin-top: 20px;
        }
        .form-errors {
            color: red;
            margin-top: 10px;
        }
        .form-errors ul {
            list-style: none;
            padding: 0;
        }
        .form-errors li {
            margin-bottom: 5px;
        }
    </style>
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
        return "reclamation/edit.html.twig";
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
        return array (  203 => 55,  190 => 54,  173 => 47,  166 => 42,  161 => 39,  152 => 37,  148 => 36,  144 => 34,  142 => 33,  133 => 27,  127 => 24,  118 => 18,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Nouvelle Réclamation{% endblock %}

{% block body %}
    <div class=\"forum-container\">
        <h1 class=\"forum-title\">Créer une réclamation</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche (optionnel) -->
                <div class=\"image-section\">
                    <img src=\"{{ asset('img/11.jpg') }}\" alt=\"Image réclamation\" class=\"contact-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    {{ form_start(form, {'attr': {'class': 'contact-form', 'novalidate': 'novalidate'}}) }}

                    <div class=\"forum-messages\">
                        <div class=\"forum-message\">
                            <div class=\"message-content\">
                                <div class=\"form-group\">
                                    {{ form_row(form.type) }}
                                </div>
                                <div class=\"form-group\">
                                    {{ form_row(form.descriptionRec) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    {% if form_errors(form) %}
                        <div class=\"form-errors\">
                            <ul>
                                {% for error in form_errors(form) %}
                                    <li>{{ error }}</li>
                                {% endfor %}
                            </ul>
                        </div>
                    {% endif %}

                    <div class=\"form-submit\">
                        <button type=\"submit\" class=\"btn btn-primary\" onclick=\"return confirm('Voulez-vous vraiment envoyer cette réclamation ?');\">Envoyer</button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
    <style>
        body {
            font-family: 'Joti One', Arial, sans-serif;
        }
        .forum-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f3f4f6;
        }
        .forum-title {
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
            text-transform: uppercase;
        }
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .image-section {
            flex: 1;
            max-width: 50%;
        }
        .contact-image {
            width: 100%;
            border-radius: 8px;
        }
        .form-section {
            flex: 1;
            max-width: 50%;
        }
        .forum-messages {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .forum-message {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .forum-message:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }
        .form-group {
            width: 100%;
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
            color: #333;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 6px;
            background: #f3f3f3;
            color: #333;
        }
        .btn-primary {
            background-color: #9c1575;
            color: #fff;
            padding: 20px 50px;
            font-size: 20px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            width: 100%;
            max-width: 600px;
        }
        .btn-primary:hover {
            background-color: #7e0f63;
        }
        .form-submit {
            text-align: center;
            margin-top: 20px;
        }
        .form-errors {
            color: red;
            margin-top: 10px;
        }
        .form-errors ul {
            list-style: none;
            padding: 0;
        }
        .form-errors li {
            margin-bottom: 5px;
        }
    </style>
{% endblock %}
", "reclamation/edit.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\reclamation\\edit.html.twig");
    }
}
