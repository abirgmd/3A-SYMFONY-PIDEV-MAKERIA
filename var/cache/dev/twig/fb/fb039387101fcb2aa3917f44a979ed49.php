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

/* login/register.html.twig */
class __TwigTemplate_cc59c1343a41b61e81dd38f0b3c096b6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/register.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "login/register.html.twig", 1);
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

        yield "Register - ";
        
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
        yield "    <style>
        body {
            background-color: white;
        }

        .card {
            background-color: #f3fbe2;
        }

        /* Couleur de texte dans le titre */
        .card-header h3 {
            color: #788954;
        }

        /* Bouton d'inscription */
        .btn-primary {
            background-color: #788954;
            border-color: #788954;
        }

        .btn-primary:hover {
            background-color: #6f7f46;
            border-color: #6f7f46;
        }

        /* Texte dans les champs d'entrée */
        .form-control {
            border-color: #788954;
        }

        /* Texte du lien */
        a {
            color: #788954;
        }

        a:hover {
            color: #6f7f46;
        }
    </style>

    <div id=\"layoutAuthentication\">
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card-header\">
                                    <h3 class=\"text-center font-weight-light my-4\">Register</h3>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 58
        yield "                                    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "login/form2.html.twig", ["form" => (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })())]);
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<br>
</br>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        yield "\"></script>
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
        return "login/register.html.twig";
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
        return array (  169 => 70,  153 => 58,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Register - {% endblock %}

{% block body %}
    <style>
        body {
            background-color: white;
        }

        .card {
            background-color: #f3fbe2;
        }

        /* Couleur de texte dans le titre */
        .card-header h3 {
            color: #788954;
        }

        /* Bouton d'inscription */
        .btn-primary {
            background-color: #788954;
            border-color: #788954;
        }

        .btn-primary:hover {
            background-color: #6f7f46;
            border-color: #6f7f46;
        }

        /* Texte dans les champs d'entrée */
        .form-control {
            border-color: #788954;
        }

        /* Texte du lien */
        a {
            color: #788954;
        }

        a:hover {
            color: #6f7f46;
        }
    </style>

    <div id=\"layoutAuthentication\">
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card-header\">
                                    <h3 class=\"text-center font-weight-light my-4\">Register</h3>
                                </div>
                                <div class=\"card-body\">
                                    {# Ici, on utilise la variable \"registrationForm\" passée depuis le contrôleur #}
                                    {{ include('login/form2.html.twig', { 'form': registrationForm }) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
<br>
</br>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset('js/scripts.js') }}\"></script>
{% endblock %}
", "login/register.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\login\\register.html.twig");
    }
}
