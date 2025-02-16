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

/* registration/register.html.twig */
class __TwigTemplate_56fe35ec3b8346b73a15457d9b82354d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "registration/register.html.twig", 1);
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

        yield "Register";
        
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
        <h1 class=\"forum-title\">Create an Account</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche -->
                <div class=\"image-section\">
                    <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/11.jpg"), "html", null, true);
        yield "\" alt=\"Register Image\" class=\"contact-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), 'form_start');
        yield "
                        ";
        // line 19
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'errors')) {
            // line 20
            yield "                            <div class=\"alert alert-danger\">
                                ";
            // line 21
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), 'errors');
            yield "
                            </div>
                        ";
        }
        // line 24
        yield "
                        <div class=\"forum-messages\">
                            <div class=\"forum-message\">
                                <div class=\"message-content\">
                                    <div class=\"form-row\">
                                        <!-- Card Name -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "name", [], "any", false, false, false, 32), 'label');
        yield "
                                                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                            </div>
                                        </div>

                                        <!-- Card Last Name -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "lastname", [], "any", false, false, false, 40), 'label');
        yield "
                                                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "lastname", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-row\">
                                        <!-- Card Email -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'label');
        yield "
                                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                            </div>
                                        </div>

                                        <!-- Card Password -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "plainPassword", [], "any", false, false, false, 58), 'label');
        yield "
                                                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "plainPassword", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "autocomplete" => "new-password"]]);
        yield "
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-row\">
                                        <!-- Card Image (optional) -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "image", [], "any", false, false, false, 68), 'label');
        yield "
                                                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "image", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card Agree Terms -->
                                    <div class=\"form-group card\">
                                        <div class=\"card-body\">
                                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "agreeTerms", [], "any", false, false, false, 77), 'label');
        yield "
                                            ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "agreeTerms", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-check-input"]]);
        yield "
                                        </div>
                                    </div>

                                    <div class=\"form-submit\">
                                        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), 'form_end');
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

    // line 98
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

        // line 99
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

        .message-content .form-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-group {
            flex: 1;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 6px;
            background: rgb(243, 243, 243);
            color: #333;
        }

        .form-group input:focus {
            outline: none;
            background: rgb(232, 232, 232);
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 15px;
        }

        .btn-primary {
            background-color: #9c1575;
            color: #fff;
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #7e0f63;
        }

        .form-submit {
            text-align: center;
            margin-top: 20px;
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
        return "registration/register.html.twig";
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
        return array (  268 => 99,  255 => 98,  238 => 91,  222 => 78,  218 => 77,  207 => 69,  203 => 68,  191 => 59,  187 => 58,  177 => 51,  173 => 50,  161 => 41,  157 => 40,  147 => 33,  143 => 32,  133 => 24,  127 => 21,  124 => 20,  122 => 19,  118 => 18,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    <div class=\"forum-container\">
        <h1 class=\"forum-title\">Create an Account</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche -->
                <div class=\"image-section\">
                    <img src=\"{{ asset('img/11.jpg') }}\" alt=\"Register Image\" class=\"contact-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    {{ form_start(registrationForm) }}
                        {% if form_errors(registrationForm) %}
                            <div class=\"alert alert-danger\">
                                {{ form_errors(registrationForm) }}
                            </div>
                        {% endif %}

                        <div class=\"forum-messages\">
                            <div class=\"forum-message\">
                                <div class=\"message-content\">
                                    <div class=\"form-row\">
                                        <!-- Card Name -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                {{ form_label(registrationForm.name) }}
                                                {{ form_widget(registrationForm.name, { 'attr': {'class': 'form-control'} }) }}
                                            </div>
                                        </div>

                                        <!-- Card Last Name -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                {{ form_label(registrationForm.lastname) }}
                                                {{ form_widget(registrationForm.lastname, { 'attr': {'class': 'form-control'} }) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-row\">
                                        <!-- Card Email -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                {{ form_label(registrationForm.email) }}
                                                {{ form_widget(registrationForm.email, { 'attr': {'class': 'form-control'} }) }}
                                            </div>
                                        </div>

                                        <!-- Card Password -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                {{ form_label(registrationForm.plainPassword) }}
                                                {{ form_widget(registrationForm.plainPassword, { 'attr': {'class': 'form-control', 'autocomplete': 'new-password'} }) }}
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"form-row\">
                                        <!-- Card Image (optional) -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                {{ form_label(registrationForm.image) }}
                                                {{ form_widget(registrationForm.image, { 'attr': {'class': 'form-control'} }) }}
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Card Agree Terms -->
                                    <div class=\"form-group card\">
                                        <div class=\"card-body\">
                                            {{ form_label(registrationForm.agreeTerms) }}
                                            {{ form_widget(registrationForm.agreeTerms, { 'attr': {'class': 'form-check-input'} }) }}
                                        </div>
                                    </div>

                                    <div class=\"form-submit\">
                                        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    {{ form_end(registrationForm) }}
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

        .message-content .form-row {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .form-group {
            flex: 1;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 6px;
            background: rgb(243, 243, 243);
            color: #333;
        }

        .form-group input:focus {
            outline: none;
            background: rgb(232, 232, 232);
        }

        .card {
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 15px;
        }

        .btn-primary {
            background-color: #9c1575;
            color: #fff;
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #7e0f63;
        }

        .form-submit {
            text-align: center;
            margin-top: 20px;
        }
    </style>
{% endblock %}
", "registration/register.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\registration\\register.html.twig");
    }
}
