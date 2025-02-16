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

/* event/index.html.twig */
class __TwigTemplate_24a6dfaacb0a498dd377419355bd6c12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "event/index.html.twig", 1);
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

        yield "Event Index";
        
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
            <h4 class=\"card-title\">Event Index</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>ID</th>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 27
            yield "                            <tr>
                                <td>";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "</td>
                                <td>";
            // line 29
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 29), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                                <td>";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                                <td>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titreevents", [], "any", false, false, false, 31), "html", null, true);
            yield "</td>
                                <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "descriptionevents", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image1events", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image2events", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Edit</a>
                                    <a href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 40
        if (!$context['_iterated']) {
            // line 41
            yield "                            <tr>
                                <td colspan=\"8\" class=\"text-center\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-end mt-3\">
                <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        yield "\" class=\"btn btn-success\">
                    <i class=\"tim-icons icon-simple-add\"></i> Create New Event
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
        return "event/index.html.twig";
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
        return array (  188 => 49,  182 => 45,  173 => 41,  171 => 40,  163 => 37,  159 => 36,  154 => 34,  150 => 33,  146 => 32,  142 => 31,  138 => 30,  134 => 29,  130 => 28,  127 => 27,  122 => 26,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Event Index{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Event Index</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>ID</th>
                            <th>Date Début</th>
                            <th>Date Fin</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for event in events %}
                            <tr>
                                <td>{{ event.id }}</td>
                                <td>{{ event.dateDebut ? event.dateDebut|date('Y-m-d H:i:s') : '' }}</td>
                                <td>{{ event.dateFin ? event.dateFin|date('Y-m-d H:i:s') : '' }}</td>
                                <td>{{ event.titreevents }}</td>
                                <td>{{ event.descriptionevents }}</td>
                                <td>{{ event.image1events }}</td>
                                <td>{{ event.image2events }}</td>
                                <td>
                                    <a href=\"{{ path('app_event_edit', {'id': event.id}) }}\" class=\"btn btn-sm btn-warning\">Edit</a>
                                    <a href=\"{{ path('app_event_show', {'id': event.id}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"8\" class=\"text-center\">No records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-end mt-3\">
                <a href=\"{{ path('app_event_new') }}\" class=\"btn btn-success\">
                    <i class=\"tim-icons icon-simple-add\"></i> Create New Event
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "event/index.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\event\\index.html.twig");
    }
}
