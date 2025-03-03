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

/* reclamation/pdf.html.twig */
class __TwigTemplate_87e93896df89583458fc786a4c6d512a extends Template
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

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "    <div style=\"font-family:'Joti One', cursive; padding: 20px; background-color: #f4f4f9; border-radius: 8px;\">
        <h2 style=\"text-align: center; color: #2c3e50; font-size: 36px; margin-bottom: 20px;\">Liste des Réclamations</h2>
        <table style=\"width: 100%; border-collapse: collapse; margin-top: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\">
            <thead style=\"background-color:rgb(179, 34, 140); color: white;\">
                <tr>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Id</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Description</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Statut</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Utilisateur</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Date</th>
                </tr>
            </thead>
            <tbody style=\"background-color: #ecf0f1;\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 16
            yield "                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "descriptionRec", [], "any", false, false, false, 18), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statRec", [], "any", false, false, false, 19), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 20), "email", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 21), "d-m-Y H:i"), "html", null, true);
            yield "</td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 23
        if (!$context['_iterated']) {
            // line 24
            yield "                    <tr>
                        <td colspan=\"5\" style=\"padding: 12px; text-align: center; font-size: 14px; color: #e74c3c;\">Aucune réclamation trouvée</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            </tbody>
        </table>
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
        return "reclamation/pdf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  129 => 28,  120 => 24,  118 => 23,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  95 => 17,  92 => 16,  87 => 15,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <div style=\"font-family:'Joti One', cursive; padding: 20px; background-color: #f4f4f9; border-radius: 8px;\">
        <h2 style=\"text-align: center; color: #2c3e50; font-size: 36px; margin-bottom: 20px;\">Liste des Réclamations</h2>
        <table style=\"width: 100%; border-collapse: collapse; margin-top: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\">
            <thead style=\"background-color:rgb(179, 34, 140); color: white;\">
                <tr>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Id</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Description</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Statut</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Utilisateur</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Date</th>
                </tr>
            </thead>
            <tbody style=\"background-color: #ecf0f1;\">
                {% for reclamation in reclamations %}
                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ reclamation.id }}</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ reclamation.descriptionRec }}</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ reclamation.statRec }}</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ reclamation.user.email }}</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ reclamation.dateRec|date('d-m-Y H:i') }}</td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"5\" style=\"padding: 12px; text-align: center; font-size: 14px; color: #e74c3c;\">Aucune réclamation trouvée</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "reclamation/pdf.html.twig", "C:\\xampp\\htdocs\\RAHMA\\fianle\\versionf\\esprit\\esprit\\templates\\reclamation\\pdf.html.twig");
    }
}
