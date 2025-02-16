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

/* evaluation/index.html.twig */
class __TwigTemplate_a643abc34ea114c419077d42807ff7a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "evaluation/index.html.twig", 1);
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

        yield "Evaluation Index";
        
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
            <h4 class=\"card-title\">Evaluation Index</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>Id</th>
                            <th>UserName</th>
                            <th>UserMail</th>
                            <th>ReviewText</th>
                            <th>Note</th>
                            <th>DatePublication</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 26
            yield "                            <tr>
                                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "userName", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "userMail", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                                <td>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "reviewText", [], "any", false, false, false, 30), "html", null, true);
            yield "</td>
                                <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "note", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                                <td>";
            // line 32
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "datePublication", [], "any", false, false, false, 32)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "datePublication", [], "any", false, false, false, 32), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 38
        if (!$context['_iterated']) {
            // line 39
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-end mt-3\">
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_new");
        yield "\" class=\"btn btn-success\">
                    <i class=\"tim-icons icon-simple-add\"></i> Create New
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
        return "evaluation/index.html.twig";
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
        return array (  183 => 47,  177 => 43,  168 => 39,  166 => 38,  158 => 35,  154 => 34,  149 => 32,  145 => 31,  141 => 30,  137 => 29,  133 => 28,  129 => 27,  126 => 26,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Evaluation Index{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Evaluation Index</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>Id</th>
                            <th>UserName</th>
                            <th>UserMail</th>
                            <th>ReviewText</th>
                            <th>Note</th>
                            <th>DatePublication</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for evaluation in evaluations %}
                            <tr>
                                <td>{{ evaluation.id }}</td>
                                <td>{{ evaluation.userName }}</td>
                                <td>{{ evaluation.userMail }}</td>
                                <td>{{ evaluation.reviewText }}</td>
                                <td>{{ evaluation.note }}</td>
                                <td>{{ evaluation.datePublication ? evaluation.datePublication|date('Y-m-d H:i:s') : '' }}</td>
                                <td>
                                    <a href=\"{{ path('app_evaluation_show', {'id': evaluation.id}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"{{ path('app_evaluation_edit', {'id': evaluation.id}) }}\" class=\"btn btn-sm btn-warning\">Edit</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"7\" class=\"text-center\">No records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-end mt-3\">
                <a href=\"{{ path('app_evaluation_new') }}\" class=\"btn btn-success\">
                    <i class=\"tim-icons icon-simple-add\"></i> Create New
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "evaluation/index.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\evaluation\\index.html.twig");
    }
}
