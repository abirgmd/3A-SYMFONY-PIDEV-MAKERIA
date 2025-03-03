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
class __TwigTemplate_5e75ac66527fe9e47a67093eb5d8e94f extends Template
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
        yield "<div class=\"row\">
    <!-- Carte Recherche Evaluations -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title mb-0\">Recherche Evaluations</h4>
            </div>
            <div class=\"card-body\">
                <form>
                    <div class=\"form-group\">
                        <label for=\"search-input\">Rechercher</label>
                        <input
                            type=\"text\"
                            id=\"search-input\"
                            class=\"form-control\"
                            placeholder=\"Rechercher par n'importe quel champ...\"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class=\"card mt-3\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Evaluation Index</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"evaluation-table\">
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 51, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 52
            yield "                        <tr>
                            <td>";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "</td>
                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "userName", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                            <td>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "userMail", [], "any", false, false, false, 55), "html", null, true);
            yield "</td>
                            <td>";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "reviewText", [], "any", false, false, false, 56), "html", null, true);
            yield "</td>
                            <td>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "note", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                            <td>";
            // line 58
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "datePublication", [], "any", false, false, false, 58)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "datePublication", [], "any", false, false, false, 58), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                            <td>
                                <a href=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 63
        if (!$context['_iterated']) {
            // line 64
            yield "                        <tr>
                            <td colspan=\"7\" class=\"text-center\">No records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['evaluation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class=\"mt-3\">
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    ";
        // line 76
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 76, $this->source); })()) > 1)) {
            // line 77
            yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 78, $this->source); })()) - 1)]), "html", null, true);
            yield "\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                    ";
        }
        // line 83
        yield "
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 84, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 85
            yield "                        <li class=\"page-item ";
            if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 85, $this->source); })()))) {
                yield "active";
            }
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_index", ["page" => $context["page"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "
                    ";
        // line 90
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 90, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 90, $this->source); })()))) {
            // line 91
            yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 92, $this->source); })()) + 1)]), "html", null, true);
            yield "\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    ";
        }
        // line 97
        yield "                </ul>
            </nav>
        </div>
          <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_stats");
        yield "\" class=\"btn btn-success\">
                Voir stats Categorie
            </a>
        </div>
    </div>
</div>


<script>
    // Dynamic search functionality across all fields
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#evaluation-table tbody tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            let match = false;

            // Check each cell in the row
            cells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(filter)) {
                    match = true;
                }
            });

            // Show or hide the row based on the match
            row.style.display = match ? '' : 'none';
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
        return array (  269 => 101,  263 => 97,  255 => 92,  252 => 91,  250 => 90,  247 => 89,  236 => 86,  229 => 85,  225 => 84,  222 => 83,  214 => 78,  211 => 77,  209 => 76,  199 => 68,  190 => 64,  188 => 63,  180 => 60,  175 => 58,  171 => 57,  167 => 56,  163 => 55,  159 => 54,  155 => 53,  152 => 52,  147 => 51,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Evaluation Index{% endblock %}

{% block content %}
<div class=\"row\">
    <!-- Carte Recherche Evaluations -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title mb-0\">Recherche Evaluations</h4>
            </div>
            <div class=\"card-body\">
                <form>
                    <div class=\"form-group\">
                        <label for=\"search-input\">Rechercher</label>
                        <input
                            type=\"text\"
                            id=\"search-input\"
                            class=\"form-control\"
                            placeholder=\"Rechercher par n'importe quel champ...\"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<div class=\"card mt-3\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Evaluation Index</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"evaluation-table\">
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

        <!-- Pagination -->
        <div class=\"mt-3\">
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    {% if currentPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_evaluation_index', {'page': currentPage - 1}) }}\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                    {% endif %}

                    {% for page in 1..totalPages %}
                        <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('app_evaluation_index', {'page': page}) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}

                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_evaluation_index', {'page': currentPage + 1}) }}\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </div>
          <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"{{ path('app_evaluation_stats') }}\" class=\"btn btn-success\">
                Voir stats Categorie
            </a>
        </div>
    </div>
</div>


<script>
    // Dynamic search functionality across all fields
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#evaluation-table tbody tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            let match = false;

            // Check each cell in the row
            cells.forEach(cell => {
                if (cell.textContent.toLowerCase().includes(filter)) {
                    match = true;
                }
            });

            // Show or hide the row based on the match
            row.style.display = match ? '' : 'none';
        });
    });
</script>
{% endblock %}
", "evaluation/index.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\evaluation\\index.html.twig");
    }
}
