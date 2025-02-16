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

/* reponses/index.html.twig */
class __TwigTemplate_52c0ddbb21dc5c2562065a13c2d52fb6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponses/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponses/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "reponses/index.html.twig", 1);
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

        yield "Reponses Index";
        
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
            <h4 class=\"card-title\">Reponses Index</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>ID</th>
                            <th>Date Rep</th>
                            <th>Contenu Rep</th>
                            <th>ID Admin</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 24
            yield "                            <tr>
                                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                                <td>";
            // line 26
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "DateRep", [], "any", false, false, false, 26)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "DateRep", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "ContenuRep", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "IDAdmin", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponses_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponses_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 34
        if (!$context['_iterated']) {
            // line 35
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        yield "                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-end mt-3\">
                <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponses_new");
        yield "\" class=\"btn btn-success\">
                    <i class=\"tim-icons icon-simple-add\"></i> Create New Response
                </a>
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
        return "reponses/index.html.twig";
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
        return array (  173 => 43,  167 => 39,  158 => 35,  156 => 34,  148 => 31,  144 => 30,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  124 => 24,  119 => 23,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Reponses Index{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Reponses Index</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>ID</th>
                            <th>Date Rep</th>
                            <th>Contenu Rep</th>
                            <th>ID Admin</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for reponse in reponses %}
                            <tr>
                                <td>{{ reponse.id }}</td>
                                <td>{{ reponse.DateRep ? reponse.DateRep|date('Y-m-d H:i:s') : '' }}</td>
                                <td>{{ reponse.ContenuRep }}</td>
                                <td>{{ reponse.IDAdmin }}</td>
                                <td>
                                    <a href=\"{{ path('app_reponses_show', {'id': reponse.id}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"{{ path('app_reponses_edit', {'id': reponse.id}) }}\" class=\"btn btn-sm btn-warning\">Edit</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center\">No records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-end mt-3\">
                <a href=\"{{ path('app_reponses_new') }}\" class=\"btn btn-success\">
                    <i class=\"tim-icons icon-simple-add\"></i> Create New Response
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "reponses/index.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\reponses\\index.html.twig");
    }
}
