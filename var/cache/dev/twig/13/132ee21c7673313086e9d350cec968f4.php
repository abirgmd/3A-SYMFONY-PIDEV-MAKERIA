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

/* commentaire/index.html.twig */
class __TwigTemplate_624729bc61b026f81c92ac29b11434f2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "commentaire/index.html.twig", 1);
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

        yield "Commentaires Index";
        
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
        yield "<style>
    #search-input {
        width: 100%;
    }
    .table img {
        max-width: 100px;
        height: auto;
    }
</style>

<div class=\"row\">
    <!-- Barre de recherche -->
    <div class=\"col-md-6\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h4 class=\"card-title\">Rechercher des Commentaires</h4>
            </div>
            <div class=\"card-body\">
                <input
                    type=\"text\"
                    id=\"search-input\"
                    class=\"form-control\"
                    placeholder=\"Recherchez par nom ou texte du commentaire...\"
                />
            </div>
        </div>
    </div>
</div>

<!-- Tableau des commentaires -->
<div class=\"card mt-3\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Liste des Commentaires</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"commentaire-table\">
                <thead class=\"text-primary\">
                    <tr>
                        <th>ID</th>
                        <th>Nom Commentaire</th>
                        <th>Texte Commentaire</th>
                        <th>Date Commentaire</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 54
            yield "                        <tr>
                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "nomcomment", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                            <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "textCommentaire", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                            <td>";
            // line 58
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "timecomment", [], "any", false, false, false, 58)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "timecomment", [], "any", false, false, false, 58), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                            <td>
                                <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Afficher</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucun commentaire trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label=\"Page navigation\" class=\"mt-3\">
            <ul class=\"pagination\">
                ";
        // line 75
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 75, $this->source); })()) > 1)) {
            // line 76
            yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 77, $this->source); })()) - 1)]), "html", null, true);
            yield "\">&laquo;</a>
                    </li>
                ";
        }
        // line 80
        yield "
                ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 81, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 82
            yield "                    <li class=\"page-item ";
            if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 82, $this->source); })()))) {
                yield "active";
            }
            yield "\">
                        <a class=\"page-link\" href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index", ["page" => $context["page"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "
                ";
        // line 87
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 87, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 87, $this->source); })()))) {
            // line 88
            yield "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 89, $this->source); })()) + 1)]), "html", null, true);
            yield "\">&raquo;</a>
                    </li>
                ";
        }
        // line 92
        yield "            </ul>
        </nav>
    </div>
</div>

<script>
    // Recherche dynamique
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#commentaire-table tbody tr');

        rows.forEach(row => {
            const name = row.children[1].textContent.toLowerCase();
            const text = row.children[2].textContent.toLowerCase();
            row.style.display = (name.includes(filter) || text.includes(filter)) ? '' : 'none';
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
        return "commentaire/index.html.twig";
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
        return array (  252 => 92,  246 => 89,  243 => 88,  241 => 87,  238 => 86,  227 => 83,  220 => 82,  216 => 81,  213 => 80,  207 => 77,  204 => 76,  202 => 75,  193 => 68,  184 => 64,  182 => 63,  174 => 60,  169 => 58,  165 => 57,  161 => 56,  157 => 55,  154 => 54,  149 => 53,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Commentaires Index{% endblock %}

{% block content %}
<style>
    #search-input {
        width: 100%;
    }
    .table img {
        max-width: 100px;
        height: auto;
    }
</style>

<div class=\"row\">
    <!-- Barre de recherche -->
    <div class=\"col-md-6\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h4 class=\"card-title\">Rechercher des Commentaires</h4>
            </div>
            <div class=\"card-body\">
                <input
                    type=\"text\"
                    id=\"search-input\"
                    class=\"form-control\"
                    placeholder=\"Recherchez par nom ou texte du commentaire...\"
                />
            </div>
        </div>
    </div>
</div>

<!-- Tableau des commentaires -->
<div class=\"card mt-3\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Liste des Commentaires</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"commentaire-table\">
                <thead class=\"text-primary\">
                    <tr>
                        <th>ID</th>
                        <th>Nom Commentaire</th>
                        <th>Texte Commentaire</th>
                        <th>Date Commentaire</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for commentaire in commentaires %}
                        <tr>
                            <td>{{ commentaire.id }}</td>
                            <td>{{ commentaire.nomcomment }}</td>
                            <td>{{ commentaire.textCommentaire }}</td>
                            <td>{{ commentaire.timecomment ? commentaire.timecomment|date('Y-m-d H:i:s') : '' }}</td>
                            <td>
                                <a href=\"{{ path('app_commentaire_show', {'id': commentaire.id}) }}\" class=\"btn btn-sm btn-primary\">Afficher</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"5\" class=\"text-center\">Aucun commentaire trouvé</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <nav aria-label=\"Page navigation\" class=\"mt-3\">
            <ul class=\"pagination\">
                {% if currentPage > 1 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_commentaire_index', {'page': currentPage - 1}) }}\">&laquo;</a>
                    </li>
                {% endif %}

                {% for page in 1..totalPages %}
                    <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                        <a class=\"page-link\" href=\"{{ path('app_commentaire_index', {'page': page}) }}\">{{ page }}</a>
                    </li>
                {% endfor %}

                {% if currentPage < totalPages %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('app_commentaire_index', {'page': currentPage + 1}) }}\">&raquo;</a>
                    </li>
                {% endif %}
            </ul>
        </nav>
    </div>
</div>

<script>
    // Recherche dynamique
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#commentaire-table tbody tr');

        rows.forEach(row => {
            const name = row.children[1].textContent.toLowerCase();
            const text = row.children[2].textContent.toLowerCase();
            row.style.display = (name.includes(filter) || text.includes(filter)) ? '' : 'none';
        });
    });
</script>
{% endblock %}
", "commentaire/index.html.twig", "C:\\xampp\\htdocs\\RAHMA\\fianle\\versionf\\esprit\\esprit\\templates\\commentaire\\index.html.twig");
    }
}
