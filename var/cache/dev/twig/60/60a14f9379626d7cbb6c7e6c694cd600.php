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

/* reclamation/stats.html.twig */
class __TwigTemplate_d8a2cbbfd45ab6c458f01966892a4db2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/stats.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "reclamation/stats.html.twig", 1);
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

        yield "Statistiques des Réclamations et Réponses";
        
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
        <h4 class=\"card-title\">Statistiques des Réclamations et Réponses</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <div class=\"form-group\">
                    <label for=\"chartTypeSelect\">Type de graphique :</label>
                    <select id=\"chartTypeSelect\" class=\"form-control\" style=\"background-color: #1a1a40; color: white;\">
                        <option value=\"pie\">Graphique Circulaire (Pie)</option>
                        <option value=\"bar\">Graphique à Barres (Bar)</option>
                        <option value=\"doughnut\">Graphique en Donut (Doughnut)</option>
                        <option value=\"area\">Graphique en Aire (Area)</option>
                    </select>
                </div>
                <div style=\"width: 300px; height: 300px; margin: 0 auto; position: relative;\">
                    <canvas id=\"statChart\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%;\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"d-flex justify-content-end mt-3\">
    <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        yield "\" class=\"btn btn-secondary\">
        <i class=\"tim-icons icon-minimal-left\"></i> Retour à la liste
    </a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 36
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

        // line 37
        yield "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const statData = ";
        // line 40
        yield json_encode((isset($context["statData"]) || array_key_exists("statData", $context) ? $context["statData"] : (function () { throw new RuntimeError('Variable "statData" does not exist.', 40, $this->source); })()));
        yield ";

    const labels = statData.map(item => item.type);
    const reclamationCounts = statData.map(item => item.reclamationCount);
    const responseCounts = statData.map(item => item.responseCount);

    const colors = ['#FF66B2', '#D16BFF', '#FFB3E6', '#8A2BE2', '#FF8C00', '#FF4B5C', '#B5E7A0'];

    let chartInstance = null;
    const ctx = document.getElementById('statChart').getContext('2d');

    function createChart(chartType) {
        if (chartInstance) {
            chartInstance.destroy();
        }

        let data;

        if (chartType === 'pie' || chartType === 'doughnut') {
            data = {
                labels: labels,
                datasets: [{
                    label: 'Nombre de Réclamations',
                    data: reclamationCounts,
                    backgroundColor: colors,
                    borderWidth: 1
                }]
            };
        } else if (chartType === 'area') {
            data = {
                labels: labels,
                datasets: [{
                    label: 'Nombre de Réclamations',
                    data: reclamationCounts,
                    borderColor: '#FF66B2',
                    backgroundColor: 'rgba(255, 102, 178, 0.4)',
                    fill: true,
                    tension: 0.4, // Pour un effet lissé
                }, {
                    label: 'Nombre de Réponses',
                    data: responseCounts,
                    borderColor: '#D16BFF',
                    backgroundColor: 'rgba(209, 107, 255, 0.4)',
                    fill: true,
                    tension: 0.4, // Pour un effet lissé
                }]
            };
        } else {
            data = {
                labels: labels,
                datasets: [{
                    label: 'Nombre de Réclamations',
                    data: reclamationCounts,
                    backgroundColor: colors,
                    borderWidth: 1
                }, {
                    label: 'Nombre de Réponses',
                    data: responseCounts,
                    backgroundColor: colors.map(c => shadeColor(c, -0.2)),
                    borderWidth: 1
                }]
            };
        }

        chartInstance = new Chart(ctx, {
            type: chartType === 'area' ? 'line' : chartType, // Utilisation de \"line\" pour area
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'top' },
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                },
                scales: (chartType === 'bar' || chartType === 'line' || chartType === 'area') ? {
                    x: { grid: { color: 'rgba(200,200,200,0.2)' } },
                    y: { beginAtZero: true, grid: { color: 'rgba(200,200,200,0.2)' } }
                } : {}
            }
        });
    }

    function shadeColor(color, percent) {
        let f = parseInt(color.slice(1),16), t = percent < 0 ? 0 : 255, p = percent < 0 ? percent * -1 : percent;
        let R = f >> 16, G = f >> 8 & 0x00FF, B = f & 0x0000FF;
        return \"#\" + (0x1000000 + (Math.round((t - R) * p) + R) * 0x10000 + (Math.round((t - G) * p) + G) * 0x100 + (Math.round((t - B) * p) + B)).toString(16).slice(1);
    }

    createChart('pie');

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
        return "reclamation/stats.html.twig";
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
        return array (  161 => 40,  156 => 37,  143 => 36,  127 => 30,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Statistiques des Réclamations et Réponses{% endblock %}

{% block content %}
<div class=\"card\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Statistiques des Réclamations et Réponses</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-8 mx-auto\">
                <div class=\"form-group\">
                    <label for=\"chartTypeSelect\">Type de graphique :</label>
                    <select id=\"chartTypeSelect\" class=\"form-control\" style=\"background-color: #1a1a40; color: white;\">
                        <option value=\"pie\">Graphique Circulaire (Pie)</option>
                        <option value=\"bar\">Graphique à Barres (Bar)</option>
                        <option value=\"doughnut\">Graphique en Donut (Doughnut)</option>
                        <option value=\"area\">Graphique en Aire (Area)</option>
                    </select>
                </div>
                <div style=\"width: 300px; height: 300px; margin: 0 auto; position: relative;\">
                    <canvas id=\"statChart\" style=\"position: absolute; top: 0; left: 0; width: 100%; height: 100%;\"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"d-flex justify-content-end mt-3\">
    <a href=\"{{ path('app_reclamation_index') }}\" class=\"btn btn-secondary\">
        <i class=\"tim-icons icon-minimal-left\"></i> Retour à la liste
    </a>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const statData = {{ statData|json_encode|raw }};

    const labels = statData.map(item => item.type);
    const reclamationCounts = statData.map(item => item.reclamationCount);
    const responseCounts = statData.map(item => item.responseCount);

    const colors = ['#FF66B2', '#D16BFF', '#FFB3E6', '#8A2BE2', '#FF8C00', '#FF4B5C', '#B5E7A0'];

    let chartInstance = null;
    const ctx = document.getElementById('statChart').getContext('2d');

    function createChart(chartType) {
        if (chartInstance) {
            chartInstance.destroy();
        }

        let data;

        if (chartType === 'pie' || chartType === 'doughnut') {
            data = {
                labels: labels,
                datasets: [{
                    label: 'Nombre de Réclamations',
                    data: reclamationCounts,
                    backgroundColor: colors,
                    borderWidth: 1
                }]
            };
        } else if (chartType === 'area') {
            data = {
                labels: labels,
                datasets: [{
                    label: 'Nombre de Réclamations',
                    data: reclamationCounts,
                    borderColor: '#FF66B2',
                    backgroundColor: 'rgba(255, 102, 178, 0.4)',
                    fill: true,
                    tension: 0.4, // Pour un effet lissé
                }, {
                    label: 'Nombre de Réponses',
                    data: responseCounts,
                    borderColor: '#D16BFF',
                    backgroundColor: 'rgba(209, 107, 255, 0.4)',
                    fill: true,
                    tension: 0.4, // Pour un effet lissé
                }]
            };
        } else {
            data = {
                labels: labels,
                datasets: [{
                    label: 'Nombre de Réclamations',
                    data: reclamationCounts,
                    backgroundColor: colors,
                    borderWidth: 1
                }, {
                    label: 'Nombre de Réponses',
                    data: responseCounts,
                    backgroundColor: colors.map(c => shadeColor(c, -0.2)),
                    borderWidth: 1
                }]
            };
        }

        chartInstance = new Chart(ctx, {
            type: chartType === 'area' ? 'line' : chartType, // Utilisation de \"line\" pour area
            data: data,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { position: 'top' },
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                },
                scales: (chartType === 'bar' || chartType === 'line' || chartType === 'area') ? {
                    x: { grid: { color: 'rgba(200,200,200,0.2)' } },
                    y: { beginAtZero: true, grid: { color: 'rgba(200,200,200,0.2)' } }
                } : {}
            }
        });
    }

    function shadeColor(color, percent) {
        let f = parseInt(color.slice(1),16), t = percent < 0 ? 0 : 255, p = percent < 0 ? percent * -1 : percent;
        let R = f >> 16, G = f >> 8 & 0x00FF, B = f & 0x0000FF;
        return \"#\" + (0x1000000 + (Math.round((t - R) * p) + R) * 0x10000 + (Math.round((t - G) * p) + G) * 0x100 + (Math.round((t - B) * p) + B)).toString(16).slice(1);
    }

    createChart('pie');

    document.getElementById('chartTypeSelect').addEventListener('change', function (event) {
        const selectedType = event.target.value;
        createChart(selectedType);
    });
});

</script>
{% endblock %}
", "reclamation/stats.html.twig", "C:\\xampp\\htdocs\\RAHMA\\fianle\\versionf\\esprit\\esprit\\templates\\reclamation\\stats.html.twig");
    }
}
