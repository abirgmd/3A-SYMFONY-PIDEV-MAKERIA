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

/* categorie/index.html.twig */
class __TwigTemplate_b9c09d652820dde8376470abf7777e0f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "categorie/index.html.twig", 1);
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

        yield "Categorie Management";
        
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
    <!-- Carte Recherche Catégories -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title mb-0\">Recherche Catégories</h4>
            </div>
            <div class=\"card-body\">
                <form>
                    <div class=\"form-group\">
                        <label for=\"search-input\">Rechercher</label>
                        <input
                            type=\"text\"
                            id=\"search-input\"
                            class=\"form-control\"
                            placeholder=\"Rechercher par nom ou description de la catégorie...\"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class=\"card mt-3\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Categorie Management</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"categorie-table\">
                <thead class=\"text-primary\">
                    <tr>
                        <th>Id</th>
                        <th>Nomcat</th>
                        <th>Descriptioncat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 48
            yield "                        <tr>
                            <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                            <td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "nomcat", [], "any", false, false, false, 50), "html", null, true);
            yield "</td>
                            <td>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "descriptioncat", [], "any", false, false, false, 51), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                <a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Edit</a>
                           

                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 59
        if (!$context['_iterated']) {
            // line 60
            yield "                        <tr>
                            <td colspan=\"4\" class=\"text-center\">No records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['categorie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class=\"mt-3\">
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    ";
        // line 72
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 72, $this->source); })()) > 1)) {
            // line 73
            yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 74, $this->source); })()) - 1)]), "html", null, true);
            yield "\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                    ";
        }
        // line 79
        yield "
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 80, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 81
            yield "                        <li class=\"page-item ";
            if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 81, $this->source); })()))) {
                yield "active";
            }
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index", ["page" => $context["page"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "
                    ";
        // line 86
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 86, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 86, $this->source); })()))) {
            // line 87
            yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 88, $this->source); })()) + 1)]), "html", null, true);
            yield "\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    ";
        }
        // line 93
        yield "                </ul>
            </nav>
        </div>

        <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
        yield "\" class=\"btn btn-success\">
                <i class=\"tim-icons icon-simple-add\"></i> Create New Categorie
            </a>
            <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_stats");
        yield "\" class=\"btn btn-success\">
                Voir stats Categorie
            </a>
        </div>
    </div>
</div>

<script>
    // Dynamic search functionality
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#categorie-table tbody tr');

        rows.forEach(row => {
            const categoryName = row.children[1].textContent.toLowerCase();
            const categoryDescription = row.children[2].textContent.toLowerCase();
            row.style.display = (categoryName.includes(filter) || categoryDescription.includes(filter)) ? '' : 'none';
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
        return "categorie/index.html.twig";
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
        return array (  266 => 101,  260 => 98,  253 => 93,  245 => 88,  242 => 87,  240 => 86,  237 => 85,  226 => 82,  219 => 81,  215 => 80,  212 => 79,  204 => 74,  201 => 73,  199 => 72,  189 => 64,  180 => 60,  178 => 59,  168 => 54,  164 => 53,  159 => 51,  155 => 50,  151 => 49,  148 => 48,  143 => 47,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Categorie Management{% endblock %}

{% block content %}
<div class=\"row\">
    <!-- Carte Recherche Catégories -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title mb-0\">Recherche Catégories</h4>
            </div>
            <div class=\"card-body\">
                <form>
                    <div class=\"form-group\">
                        <label for=\"search-input\">Rechercher</label>
                        <input
                            type=\"text\"
                            id=\"search-input\"
                            class=\"form-control\"
                            placeholder=\"Rechercher par nom ou description de la catégorie...\"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class=\"card mt-3\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Categorie Management</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"categorie-table\">
                <thead class=\"text-primary\">
                    <tr>
                        <th>Id</th>
                        <th>Nomcat</th>
                        <th>Descriptioncat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for categorie in categories %}
                        <tr>
                            <td>{{ categorie.id }}</td>
                            <td>{{ categorie.nomcat }}</td>
                            <td>{{ categorie.descriptioncat }}</td>
                            <td>
                                <a href=\"{{ path('app_categorie_show', {'id': categorie.id}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                <a href=\"{{ path('app_categorie_edit', {'id': categorie.id}) }}\" class=\"btn btn-sm btn-warning\">Edit</a>
                           

                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"4\" class=\"text-center\">No records found</td>
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
                            <a class=\"page-link\" href=\"{{ path('app_categorie_index', {'page': currentPage - 1}) }}\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                    {% endif %}

                    {% for page in 1..totalPages %}
                        <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('app_categorie_index', {'page': page}) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}

                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_categorie_index', {'page': currentPage + 1}) }}\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </div>

        <div class=\"d-flex justify-content-end mt-3\">
            <a href=\"{{ path('app_categorie_new') }}\" class=\"btn btn-success\">
                <i class=\"tim-icons icon-simple-add\"></i> Create New Categorie
            </a>
            <a href=\"{{ path('app_categorie_stats') }}\" class=\"btn btn-success\">
                Voir stats Categorie
            </a>
        </div>
    </div>
</div>

<script>
    // Dynamic search functionality
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#categorie-table tbody tr');

        rows.forEach(row => {
            const categoryName = row.children[1].textContent.toLowerCase();
            const categoryDescription = row.children[2].textContent.toLowerCase();
            row.style.display = (categoryName.includes(filter) || categoryDescription.includes(filter)) ? '' : 'none';
        });
    });
</script>
{% endblock %}", "categorie/index.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\categorie\\index.html.twig");
    }
}
