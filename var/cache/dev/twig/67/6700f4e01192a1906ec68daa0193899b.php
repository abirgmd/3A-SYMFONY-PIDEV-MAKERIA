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

/* reclamation/my.html.twig */
class __TwigTemplate_1263ae74ff7f1634f3d085df5f5f65bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/my.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/my.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "reclamation/my.html.twig", 1);
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

        yield "Mes Réclamations";
        
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
        <h1 class=\"forum-title\">Mes Réclamations</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead class=\"bg-dark text-uppercase\">
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Réponses</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 26
            yield "                                <tr>
                                    <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 29
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 29)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 29), "Y-m-d H:i:s"), "html", null, true)) : ("-"));
            yield "
                                    </td>
                                    <td class=\"text-truncate\" style=\"max-width: 200px;\">
                                        ";
            // line 32
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "descriptionRec", [], "any", false, false, false, 32)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "descriptionRec", [], "any", false, false, false, 32), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "descriptionRec", [], "any", false, false, false, 32), "html", null, true)));
            yield "
                                    </td>
                                    <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 36
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 36)) > 0)) {
                // line 37
                yield "                                            <ul class=\"list-unstyled\">
                                                ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 39
                    yield "                                                    <li>✅ ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenuRep", [], "any", false, false, false, 39), "html", null, true);
                    yield "</li>
                                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "                                            </ul>
                                        ";
            } else {
                // line 43
                yield "                                            <em class=\"text-muted\">Aucune réponse</em>
                                        ";
            }
            // line 45
            yield "                                    </td>
                                    <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statRec", [], "any", false, false, false, 46)), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 48
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statRec", [], "any", false, false, false, 48) == "en attente")) {
                // line 49
                yield "                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-warning\">Edit</a>
                                            <form action=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                yield "\" method=\"post\" style=\"display:inline-block;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 51))), "html", null, true);
                yield "\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette réclamation ?');\">Delete</button>
                                            </form>
                                        ";
            } else {
                // line 55
                yield "                                            <span>-</span>
                                        ";
            }
            // line 57
            yield "                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        // line 59
        if (!$context['_iterated']) {
            // line 60
            yield "                                <tr>
                                    <td colspan=\"7\" class=\"text-center\">🚫 Aucune réclamation trouvée</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 72
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

        // line 73
        yield "    <link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
    <style>
    body {
        font-family: 'Joti One', Arial, sans-serif;
        background-color: #f3f4f6; /* Fond clair et subtil */
    }
    .forum-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff; /* Fond blanc pour un look propre */
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Ombre douce pour l'effet */
    }
    .forum-title {
        font-size: 2.5em;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 600;
        text-transform: uppercase;
        color: #2c3e50; /* Gris foncé pour un contraste élégant */
    }
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .content-wrapper {
        width: 100%;
    }
    .table-responsive {
        width: 100%;
    }
    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: #f9f9f9; /* Fond très clair pour la table */
        border-radius: 8px;
        overflow: hidden;
    }
    .table thead {
        background-color: #b11d85; /* Rose fuchsia pour l'en-tête */
        color: white;
        text-transform: uppercase;
    }
    .table tbody tr {
        background-color: #e7e9ea; /* Rose clair pour les lignes du tableau */
        border-bottom: 1px solid #f1a6bb; /* Bordure douce et harmonieuse */
    }
    .table tbody tr:hover {
        background-color: #f1a6bb; /* Survol avec une nuance plus foncée de rose */
    }
    .table td, .table th {
        color: bleu;
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
        return "reclamation/my.html.twig";
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
        return array (  254 => 73,  241 => 72,  224 => 64,  215 => 60,  213 => 59,  207 => 57,  203 => 55,  196 => 51,  192 => 50,  187 => 49,  185 => 48,  180 => 46,  177 => 45,  173 => 43,  169 => 41,  160 => 39,  156 => 38,  153 => 37,  151 => 36,  146 => 34,  141 => 32,  135 => 29,  130 => 27,  127 => 26,  122 => 25,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Mes Réclamations{% endblock %}

{% block body %}
    <div class=\"forum-container\">
        <h1 class=\"forum-title\">Mes Réclamations</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <div class=\"table-responsive\">
                    <table class=\"table\">
                        <thead class=\"bg-dark text-uppercase\">
                            <tr>
                                <th>ID</th>
                                <th>Date</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Réponses</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for reclamation in reclamations %}
                                <tr>
                                    <td>{{ reclamation.id }}</td>
                                    <td>
                                        {{ reclamation.dateRec ? reclamation.dateRec|date('Y-m-d H:i:s') : '-' }}
                                    </td>
                                    <td class=\"text-truncate\" style=\"max-width: 200px;\">
                                        {{ reclamation.descriptionRec|length > 50 ? reclamation.descriptionRec|slice(0, 50) ~ '...' : reclamation.descriptionRec }}
                                    </td>
                                    <td>{{ reclamation.type }}</td>
                                    <td>
                                        {% if reclamation.reponses|length > 0 %}
                                            <ul class=\"list-unstyled\">
                                                {% for reponse in reclamation.reponses %}
                                                    <li>✅ {{ reponse.contenuRep }}</li>
                                                {% endfor %}
                                            </ul>
                                        {% else %}
                                            <em class=\"text-muted\">Aucune réponse</em>
                                        {% endif %}
                                    </td>
                                    <td>{{ reclamation.statRec|capitalize }}</td>
                                    <td>
                                        {% if reclamation.statRec == 'en attente' %}
                                            <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-warning\">Edit</a>
                                            <form action=\"{{ path('app_reclamation_delete', {'id': reclamation.id}) }}\" method=\"post\" style=\"display:inline-block;\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reclamation.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" onclick=\"return confirm('Voulez-vous vraiment supprimer cette réclamation ?');\">Delete</button>
                                            </form>
                                        {% else %}
                                            <span>-</span>
                                        {% endif %}
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"7\" class=\"text-center\">🚫 Aucune réclamation trouvée</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
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
        background-color: #f3f4f6; /* Fond clair et subtil */
    }
    .forum-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #ffffff; /* Fond blanc pour un look propre */
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); /* Ombre douce pour l'effet */
    }
    .forum-title {
        font-size: 2.5em;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 600;
        text-transform: uppercase;
        color: #2c3e50; /* Gris foncé pour un contraste élégant */
    }
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .content-wrapper {
        width: 100%;
    }
    .table-responsive {
        width: 100%;
    }
    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: #f9f9f9; /* Fond très clair pour la table */
        border-radius: 8px;
        overflow: hidden;
    }
    .table thead {
        background-color: #b11d85; /* Rose fuchsia pour l'en-tête */
        color: white;
        text-transform: uppercase;
    }
    .table tbody tr {
        background-color: #e7e9ea; /* Rose clair pour les lignes du tableau */
        border-bottom: 1px solid #f1a6bb; /* Bordure douce et harmonieuse */
    }
    .table tbody tr:hover {
        background-color: #f1a6bb; /* Survol avec une nuance plus foncée de rose */
    }
    .table td, .table th {
        color: bleu;
    }
</style>

{% endblock %}

", "reclamation/my.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\reclamation\\my.html.twig");
    }
}
