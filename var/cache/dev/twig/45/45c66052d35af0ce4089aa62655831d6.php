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

/* reponses/show.html.twig */
class __TwigTemplate_e273a8d51d533f75688c4342ead16661 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponses/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponses/show.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "reponses/show.html.twig", 1);
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

        yield "Reponse";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Reponse Details</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>Date Rep</th>
                            <td>";
        // line 20
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 20, $this->source); })()), "DateRep", [], "any", false, false, false, 20)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 20, $this->source); })()), "DateRep", [], "any", false, false, false, 20), "Y-m-d H:i:s"), "html", null, true)) : (""));
        yield "</td>
                        </tr>
                        <tr>
                            <th>Contenu Rep</th>
                            <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 24, $this->source); })()), "ContenuRep", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th>ID Admin</th>
                            <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 28, $this->source); })()), "IDAdmin", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"actions mt-3\">
                <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponses_index");
        yield "\" class=\"btn btn-secondary\">Back to List</a>
                <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponses_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Edit</a>
                ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reponses/_delete_form.html.twig");
        yield "
            </div>
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
        return "reponses/show.html.twig";
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
        return array (  150 => 36,  146 => 35,  142 => 34,  133 => 28,  126 => 24,  119 => 20,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Reponse{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Reponse Details</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ reponse.id }}</td>
                        </tr>
                        <tr>
                            <th>Date Rep</th>
                            <td>{{ reponse.DateRep ? reponse.DateRep|date('Y-m-d H:i:s') : '' }}</td>
                        </tr>
                        <tr>
                            <th>Contenu Rep</th>
                            <td>{{ reponse.ContenuRep }}</td>
                        </tr>
                        <tr>
                            <th>ID Admin</th>
                            <td>{{ reponse.IDAdmin }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"actions mt-3\">
                <a href=\"{{ path('app_reponses_index') }}\" class=\"btn btn-secondary\">Back to List</a>
                <a href=\"{{ path('app_reponses_edit', {'id': reponse.id}) }}\" class=\"btn btn-warning\">Edit</a>
                {{ include('reponses/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}
", "reponses/show.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\reponses\\show.html.twig");
    }
}
