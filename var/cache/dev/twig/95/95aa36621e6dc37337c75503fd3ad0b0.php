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

/* event/stats.html.twig */
class __TwigTemplate_4db59b411b0b64c6841a0e05dc691268 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/stats.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "event/stats.html.twig", 1);
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

        yield "Statistiques des commentaires par Événement";
        
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
        yield "<div class=\"card\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Statistiques des commentaires par Événement</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <!-- Sélecteur de type de graphique -->
                <div class=\"form-group\">
                    <label for=\"chartTypeSelect\">Type de graphique :</label>
                    <select id=\"chartTypeSelect\" class=\"form-control\" style=\"background-color: #1a1a40; color: white;\">
                        <option value=\"pie\">Graphique Circulaire (Pie)</option>
                        <option value=\"bar\">Graphique à Barres (Bar)</option>
                        <option value=\"line\">Graphique Linéaire (Line)</option>
                        <option value=\"area\">Graphique en Aire (Area)</option>
                        <option value=\"doughnut\">Graphique en Donut (Doughnut)</option>
                    </select>
                </div>

                <!-- Conteneur pour le canvas -->
                <div style=\"width: 300px; height: 300px; margin: 0 auto; position: relative;\">
                    <canvas id=\"eventPieChart\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%;\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"d-flex justify-content-end mt-3\">
    <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-secondary\">
        <i class=\"tim-icons icon-minimal-left\"></i> Retour à la liste
    </a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        yield "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const categoryData = ";
        // line 45
        yield json_encode((isset($context["categoryData"]) || array_key_exists("categoryData", $context) ? $context["categoryData"] : (function () { throw new RuntimeError('Variable "categoryData" does not exist.', 45, $this->source); })()));
        yield ";
            const labels = categoryData.map(data => data.eventTitle);
            const counts = categoryData.map(data => data.commentCount);  // Utilisez `commentCount` ou `participantCount` en fonction de ce que vous avez compté
            const colors = ['#FF66B2', '#D16BFF', '#FFB3E6', '#8A2BE2', '#FF8C00', '#FF4B5C', '#B5E7A0'];

            let chartInstance = null;

            const ctx = document.getElementById('eventPieChart').getContext('2d');

            function createChart(type) {
                if (chartInstance) {
                    chartInstance.destroy(); // Supprimer l'ancien graphique
                }

                const datasets = [{
                    label: 'Nombre de commentaires',
                    data: counts,
                    backgroundColor: type === 'area' ? colors.map(color => color + '88') : colors, // Transparence pour Area
                    borderColor: colors,
                    borderWidth: 1,
                    fill: type === 'area' // Remplissage activé uniquement pour Area
                }];

                chartInstance = new Chart(ctx, {
                    type: type === 'area' ? 'line' : type, // \"Area\" utilise un graphique de type \"line\"
                    data: {
                        labels: labels,
                        datasets: datasets
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (tooltipItem) {
                                        return tooltipItem.raw + ' commentaires';
                                    }
                                }
                            }
                        },
                        scales: (type === 'bar' || type === 'line' || type === 'area') ? {
                            x: { grid: { color: 'rgba(200, 200, 200, 0.2)' } },
                            y: { beginAtZero: true, grid: { color: 'rgba(200, 200, 200, 0.2)' } }
                        } : {}
                    }
                });
            }

            // Créer le graphique initial avec le type \"pie\"
            createChart('pie');

            // Ajout d'un écouteur d'événement sur le changement du type de graphique
            document.getElementById('chartTypeSelect').addEventListener('change', function (event) {
                const selectedType = event.target.value;
                createChart(selectedType);
            });
        });
    </script>
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
        return "event/stats.html.twig";
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
        return array (  166 => 45,  161 => 42,  148 => 41,  132 => 35,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Statistiques des commentaires par Événement{% endblock %}

{% block content %}
<div class=\"card\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Statistiques des commentaires par Événement</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <!-- Sélecteur de type de graphique -->
                <div class=\"form-group\">
                    <label for=\"chartTypeSelect\">Type de graphique :</label>
                    <select id=\"chartTypeSelect\" class=\"form-control\" style=\"background-color: #1a1a40; color: white;\">
                        <option value=\"pie\">Graphique Circulaire (Pie)</option>
                        <option value=\"bar\">Graphique à Barres (Bar)</option>
                        <option value=\"line\">Graphique Linéaire (Line)</option>
                        <option value=\"area\">Graphique en Aire (Area)</option>
                        <option value=\"doughnut\">Graphique en Donut (Doughnut)</option>
                    </select>
                </div>

                <!-- Conteneur pour le canvas -->
                <div style=\"width: 300px; height: 300px; margin: 0 auto; position: relative;\">
                    <canvas id=\"eventPieChart\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%;\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class=\"d-flex justify-content-end mt-3\">
    <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-secondary\">
        <i class=\"tim-icons icon-minimal-left\"></i> Retour à la liste
    </a>
</div>
{% endblock %}

{% block javascripts %}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const categoryData = {{ categoryData|json_encode()|raw }};
            const labels = categoryData.map(data => data.eventTitle);
            const counts = categoryData.map(data => data.commentCount);  // Utilisez `commentCount` ou `participantCount` en fonction de ce que vous avez compté
            const colors = ['#FF66B2', '#D16BFF', '#FFB3E6', '#8A2BE2', '#FF8C00', '#FF4B5C', '#B5E7A0'];

            let chartInstance = null;

            const ctx = document.getElementById('eventPieChart').getContext('2d');

            function createChart(type) {
                if (chartInstance) {
                    chartInstance.destroy(); // Supprimer l'ancien graphique
                }

                const datasets = [{
                    label: 'Nombre de commentaires',
                    data: counts,
                    backgroundColor: type === 'area' ? colors.map(color => color + '88') : colors, // Transparence pour Area
                    borderColor: colors,
                    borderWidth: 1,
                    fill: type === 'area' // Remplissage activé uniquement pour Area
                }];

                chartInstance = new Chart(ctx, {
                    type: type === 'area' ? 'line' : type, // \"Area\" utilise un graphique de type \"line\"
                    data: {
                        labels: labels,
                        datasets: datasets
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function (tooltipItem) {
                                        return tooltipItem.raw + ' commentaires';
                                    }
                                }
                            }
                        },
                        scales: (type === 'bar' || type === 'line' || type === 'area') ? {
                            x: { grid: { color: 'rgba(200, 200, 200, 0.2)' } },
                            y: { beginAtZero: true, grid: { color: 'rgba(200, 200, 200, 0.2)' } }
                        } : {}
                    }
                });
            }

            // Créer le graphique initial avec le type \"pie\"
            createChart('pie');

            // Ajout d'un écouteur d'événement sur le changement du type de graphique
            document.getElementById('chartTypeSelect').addEventListener('change', function (event) {
                const selectedType = event.target.value;
                createChart(selectedType);
            });
        });
    </script>
{% endblock %}
", "event/stats.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\event\\stats.html.twig");
    }
}
