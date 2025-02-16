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

/* reclamation/index.html.twig */
class __TwigTemplate_b77cff5732b9d5bdd8350706160f8c54 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "reclamation/index.html.twig", 1);
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

        yield "Reclamation Index";
        
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
            <h4 class=\"card-title\">Reclamation Index</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>ID</th>
                            <th>Date Rec</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Article ID</th>
                            <th>User ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 28
            yield "                            <tr>
                                <td>";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "</td>
                                <td>";
            // line 30
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "DateRec", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "DateRec", [], "any", false, false, false, 30), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                                <td>
                                    ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "ImagesReclamation1", [], "any", false, false, false, 32)) {
                // line 33
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "ImagesReclamation1", [], "any", false, false, false, 33), "html", null, true);
                yield "\" alt=\"Image 1\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                    ";
            } else {
                // line 35
                yield "                                        No image
                                    ";
            }
            // line 37
            yield "                                </td>
                                <td>
                                    ";
            // line 39
            if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "ImagesReclamation2", [], "any", false, false, false, 39)) {
                // line 40
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "ImagesReclamation2", [], "any", false, false, false, 40), "html", null, true);
                yield "\" alt=\"Image 2\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                    ";
            } else {
                // line 42
                yield "                                        No image
                                    ";
            }
            // line 44
            yield "                                </td>
                                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "DescriptionRec", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "StatRec", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "IDArticle", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                                <td>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "IDUtilisateur", [], "any", false, false, false, 48), "html", null, true);
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Edit</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 54
        if (!$context['_iterated']) {
            // line 55
            yield "                            <tr>
                                <td colspan=\"9\" class=\"text-center\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-end mt-3\">
                <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-success\">
                    <i class=\"tim-icons icon-simple-add\"></i> Create New Reclamation
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
        return "reclamation/index.html.twig";
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
        return array (  217 => 63,  211 => 59,  202 => 55,  200 => 54,  192 => 51,  188 => 50,  183 => 48,  179 => 47,  175 => 46,  171 => 45,  168 => 44,  164 => 42,  158 => 40,  156 => 39,  152 => 37,  148 => 35,  142 => 33,  140 => 32,  135 => 30,  131 => 29,  128 => 28,  123 => 27,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Reclamation Index{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Reclamation Index</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>ID</th>
                            <th>Date Rec</th>
                            <th>Image 1</th>
                            <th>Image 2</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Article ID</th>
                            <th>User ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for reclamation in reclamations %}
                            <tr>
                                <td>{{ reclamation.id }}</td>
                                <td>{{ reclamation.DateRec ? reclamation.DateRec|date('Y-m-d H:i:s') : '' }}</td>
                                <td>
                                    {% if reclamation.ImagesReclamation1 %}
                                        <img src=\"{{ reclamation.ImagesReclamation1 }}\" alt=\"Image 1\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                    {% else %}
                                        No image
                                    {% endif %}
                                </td>
                                <td>
                                    {% if reclamation.ImagesReclamation2 %}
                                        <img src=\"{{ reclamation.ImagesReclamation2 }}\" alt=\"Image 2\" class=\"img-thumbnail\" style=\"max-width: 100px;\">
                                    {% else %}
                                        No image
                                    {% endif %}
                                </td>
                                <td>{{ reclamation.DescriptionRec }}</td>
                                <td>{{ reclamation.StatRec }}</td>
                                <td>{{ reclamation.IDArticle }}</td>
                                <td>{{ reclamation.IDUtilisateur }}</td>
                                <td>
                                    <a href=\"{{ path('app_reclamation_show', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-warning\">Edit</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\" class=\"text-center\">No records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"d-flex justify-content-end mt-3\">
                <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-success\">
                    <i class=\"tim-icons icon-simple-add\"></i> Create New Reclamation
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "reclamation/index.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\reclamation\\index.html.twig");
    }
}
