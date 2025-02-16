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

/* security/login.html.twig */
class __TwigTemplate_460e56bfea0e816cda903784489ba742 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "security/login.html.twig", 1);
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

        yield "Log in!";
        
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
        <h1 class=\"forum-title\">Please sign in</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche -->
                <div class=\"image-section\">
                    <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/11.jpg"), "html", null, true);
        yield "\" alt=\"Login Image\" class=\"contact-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    <form method=\"post\">
                        ";
        // line 19
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 19, $this->source); })())) {
            // line 20
            yield "                            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageKey", [], "any", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageData", [], "any", false, false, false, 20), "security"), "html", null, true);
            yield "</div>
                        ";
        }
        // line 22
        yield "
                        ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            yield "                            <div class=\"mb-3\">
                                You are logged in as ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "userIdentifier", [], "any", false, false, false, 25), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                            </div>
                        ";
        }
        // line 28
        yield "
                        <div class=\"forum-messages\">
                            <div class=\"forum-message\">
                                <div class=\"message-content\">
                                    <div class=\"form-row\">
                                        <!-- Card Email -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                <label for=\"inputEmail\">Email</label>
                                                <input type=\"email\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                            </div>
                                        </div>

                                        <!-- Card Password -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                <label for=\"inputPassword\">Password</label>
                                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                            </div>
                                        </div>
                                    </div>

                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                                </div>
                            </div>
                        </div>

                        <div class=\"form-submit\">
                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        // line 68
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
        return "security/login.html.twig";
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
        return array (  210 => 68,  197 => 67,  170 => 50,  154 => 37,  143 => 28,  135 => 25,  132 => 24,  130 => 23,  127 => 22,  121 => 20,  119 => 19,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
    <div class=\"forum-container\">
        <h1 class=\"forum-title\">Please sign in</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche -->
                <div class=\"image-section\">
                    <img src=\"{{ asset('img/11.jpg') }}\" alt=\"Login Image\" class=\"contact-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    <form method=\"post\">
                        {% if error %}
                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                        {% endif %}

                        {% if app.user %}
                            <div class=\"mb-3\">
                                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
                            </div>
                        {% endif %}

                        <div class=\"forum-messages\">
                            <div class=\"forum-message\">
                                <div class=\"message-content\">
                                    <div class=\"form-row\">
                                        <!-- Card Email -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                <label for=\"inputEmail\">Email</label>
                                                <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
                                            </div>
                                        </div>

                                        <!-- Card Password -->
                                        <div class=\"form-group card\">
                                            <div class=\"card-body\">
                                                <label for=\"inputPassword\">Password</label>
                                                <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>
                                            </div>
                                        </div>
                                    </div>

                                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                </div>
                            </div>
                        </div>

                        <div class=\"form-submit\">
                            <button class=\"btn btn-lg btn-primary\" type=\"submit\">
                                Sign in
                            </button>
                        </div>
                    </form>
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
", "security/login.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\security\\login.html.twig");
    }
}
