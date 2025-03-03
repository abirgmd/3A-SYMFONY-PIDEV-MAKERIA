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
class __TwigTemplate_aa2ceb9abd4e596f7327b0421c2d386d extends Template
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
        yield "<div class=\"row\">
    <!-- Carte Recherche et Tri -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title mb-0\">Recherche et Tri</h4>
            </div>
            <div class=\"card-body\">
                <form method=\"get\">
                    <div class=\"form-group\">
                        <label for=\"search-input\">Rechercher</label>
                        <input
                            type=\"text\"
                            id=\"search-input\"
                            name=\"query\"
                            class=\"form-control\"
                            placeholder=\"Rechercher par titre ou description\"
                            value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\"
                        />
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-sm mb-3\">Rechercher</button>

                    <div class=\"form-group\">
                        <label for=\"sort-select\">Trier par</label>
                        <select id=\"sort-select\" name=\"sortBy\" class=\"form-control\">
                            <option value=\"titreevents\" ";
        // line 31
        if (((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 31, $this->source); })()) == "titreevents")) {
            yield "selected";
        }
        yield ">Titre</option>
                            <option value=\"descriptionevents\" ";
        // line 32
        if (((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 32, $this->source); })()) == "descriptionevents")) {
            yield "selected";
        }
        yield ">Description</option>
                            <option value=\"id\" ";
        // line 33
        if (((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 33, $this->source); })()) == "id")) {
            yield "selected";
        }
        yield ">ID</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label>Ordre</label>
                        <select name=\"sortOrder\" class=\"form-control\">
                            <option value=\"asc\" ";
        // line 39
        if (((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 39, $this->source); })()) == "asc")) {
            yield "selected";
        }
        yield ">Croissant</option>
                            <option value=\"desc\" ";
        // line 40
        if (((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 40, $this->source); })()) == "desc")) {
            yield "selected";
        }
        yield ">Décroissant</option>
                        </select>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Appliquer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Carte Calendrier -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title mb-0\">Calendrier</h4>
            </div>
            <div class=\"card-body\">
             <div
    id=\"calendar\"
    style=\"width: 500px; height: 500px; background-color: #ffe6f0; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\"
></div>

            </div>
        </div>
    </div>
</div>


<div class=\"card\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Liste des Events</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"events-table\">
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
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 88
            yield "                    <tr class=\"event-row\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 88), "html", null, true);
            yield "\" data-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titreevents", [], "any", false, false, false, 88)), "html", null, true);
            yield "\" data-description=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "descriptionevents", [], "any", false, false, false, 88)), "html", null, true);
            yield "\">
                        <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                        <td>";
            // line 90
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 90)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateDebut", [], "any", false, false, false, 90), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 91
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 91)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dateFin", [], "any", false, false, false, 91), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "</td>
                        <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titreevents", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                        <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "descriptionevents", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                        <td>
                            ";
            // line 95
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image1events", [], "any", false, false, false, 95)) {
                // line 96
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image1events", [], "any", false, false, false, 96)), "html", null, true);
                yield "\" alt=\"Image 1\" style=\"width: 150px; height: auto;\">
                            ";
            } else {
                // line 98
                yield "                                Pas d'image
                            ";
            }
            // line 100
            yield "                        </td>
                        <td>
                            ";
            // line 102
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image2events", [], "any", false, false, false, 102)) {
                // line 103
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image2events", [], "any", false, false, false, 103)), "html", null, true);
                yield "\" alt=\"Image 2\" style=\"width: 150px; height: auto;\">
                            ";
            } else {
                // line 105
                yield "                                Pas d'image
                            ";
            }
            // line 107
            yield "                        </td>
                        <td>
                            <a href=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Voir</a>
                            <a href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 113
        if (!$context['_iterated']) {
            // line 114
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucun événement trouvé</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "                </tbody>
            </table>

<!-- Pagination -->
        <nav id=\"pagination-nav\">
    <ul class=\"pagination\">
        ";
        // line 124
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 124, $this->source); })()) > 1)) {
            // line 125
            yield "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"?page=";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 126, $this->source); })()) - 1), "html", null, true);
            yield "&sortBy=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 126, $this->source); })()), "html", null, true);
            yield "&sortOrder=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 126, $this->source); })()), "html", null, true);
            yield "&query=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 126, $this->source); })()), "html", null, true);
            yield "\">&laquo;</a>
        </li>
        ";
        }
        // line 129
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 129, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 130
            yield "        <li class=\"page-item ";
            if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 130, $this->source); })()))) {
                yield "active";
            }
            yield "\">
            <a class=\"page-link\" href=\"?page=";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "&sortBy=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 131, $this->source); })()), "html", null, true);
            yield "&sortOrder=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 131, $this->source); })()), "html", null, true);
            yield "&query=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 131, $this->source); })()), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "        ";
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 134, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 134, $this->source); })()))) {
            // line 135
            yield "        <li class=\"page-item\">
            <a class=\"page-link\" href=\"?page=";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 136, $this->source); })()) + 1), "html", null, true);
            yield "&sortBy=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 136, $this->source); })()), "html", null, true);
            yield "&sortOrder=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 136, $this->source); })()), "html", null, true);
            yield "&query=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchQuery"]) || array_key_exists("searchQuery", $context) ? $context["searchQuery"] : (function () { throw new RuntimeError('Variable "searchQuery" does not exist.', 136, $this->source); })()), "html", null, true);
            yield "\">&raquo;</a>
        </li>
        ";
        }
        // line 139
        yield "    </ul>
</nav>

            <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_new");
        yield "\" class=\"btn btn-primary mr-2\">Créer un Nouveau Produit</a>
<a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_stats");
        yield "\" class=\"btn btn-primary\">Afficher les statistiques</a>

        </div>
    </div>
</div>

<script>
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('.event-row');

        rows.forEach(row => {
            const title = row.getAttribute('data-title');
            const description = row.getAttribute('data-description');

            row.style.display = title.includes(filter) || description.includes(filter) ? '' : 'none';
        });
    });

    document.getElementById('sort-select').addEventListener('change', function () {
        window.location.href = this.value;
    });
    // Pagination Ajax
document.querySelectorAll('.page-link').forEach(function (link) {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const page = this.getAttribute('data-page');
        const url = new URL(window.location.href);
        url.searchParams.set('page', page); // Add the page number to the URL

        fetch(url)  // Send the request with the updated page parameter
            .then(response => response.json())
            .then(data => {
                // Update event table
                document.querySelector('#events-table tbody').innerHTML = data.events;

                // Update the pagination
                document.getElementById('pagination-nav').innerHTML = data.pagination;
            })
            .catch(err => {
                console.error('Error during fetch:', err);
            });
    });
});
";
        // line 187
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 249
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 187
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

        // line 188
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <!-- Include FullCalendar CSS and JS -->
    <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css\" rel=\"stylesheet\" />
    <script src=\"https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialisation du calendrier FullCalendar
            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
               events: function(start, end, timezone, callback) {
    fetch('";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_get_events");
        yield "')  // URL de l'API pour charger les événements via AJAX
        .then(response => response.json())
        .then(data => {
            console.log(data); // Vérifie les données reçues

            // Si la réponse est vide ou invalide
            if (!data || data.length === 0) {
                console.error('Aucun événement trouvé');
                return;
            }

            // Transformation des données pour FullCalendar
            const events = data.map(event => ({
                title: event.title,  // Le titre de l'événement
                start: event.start,   // Date de début
                end: event.end,       // Date de fin
                description: event.description,  // Description de l'événement
                color: 'orange'  // Définir la couleur orange
            }));
            callback(events);
        })
        .catch(err => {
            console.error('Erreur lors de la récupération des événements:', err);
        });
}
,
                editable: true,
                droppable: true, // Permet de glisser-déposer des événements (optionnel)
                eventClick: function(event) {
                    // Gestion du clic sur un événement
                    alert('Titre: ' + event.title + '\\nDescription: ' + event.description);
                },
                eventDrop: function(event, delta) {
                    // Traiter les événements déplacés
                    console.log('Événement déplacé');
                },
                eventResize: function(event) {
                    // Traiter la redimension du calendrier
                    console.log('Événement redimensionné');
                }
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
        return array (  478 => 204,  458 => 188,  445 => 187,  432 => 249,  430 => 187,  383 => 143,  379 => 142,  374 => 139,  362 => 136,  359 => 135,  356 => 134,  339 => 131,  332 => 130,  327 => 129,  315 => 126,  312 => 125,  310 => 124,  302 => 118,  293 => 114,  291 => 113,  283 => 110,  279 => 109,  275 => 107,  271 => 105,  265 => 103,  263 => 102,  259 => 100,  255 => 98,  249 => 96,  247 => 95,  242 => 93,  238 => 92,  234 => 91,  230 => 90,  226 => 89,  217 => 88,  212 => 87,  160 => 40,  154 => 39,  143 => 33,  137 => 32,  131 => 31,  120 => 23,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Event Index{% endblock %}

{% block content %}
<div class=\"row\">
    <!-- Carte Recherche et Tri -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title mb-0\">Recherche et Tri</h4>
            </div>
            <div class=\"card-body\">
                <form method=\"get\">
                    <div class=\"form-group\">
                        <label for=\"search-input\">Rechercher</label>
                        <input
                            type=\"text\"
                            id=\"search-input\"
                            name=\"query\"
                            class=\"form-control\"
                            placeholder=\"Rechercher par titre ou description\"
                            value=\"{{ searchQuery }}\"
                        />
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-sm mb-3\">Rechercher</button>

                    <div class=\"form-group\">
                        <label for=\"sort-select\">Trier par</label>
                        <select id=\"sort-select\" name=\"sortBy\" class=\"form-control\">
                            <option value=\"titreevents\" {% if sortBy == 'titreevents' %}selected{% endif %}>Titre</option>
                            <option value=\"descriptionevents\" {% if sortBy == 'descriptionevents' %}selected{% endif %}>Description</option>
                            <option value=\"id\" {% if sortBy == 'id' %}selected{% endif %}>ID</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <label>Ordre</label>
                        <select name=\"sortOrder\" class=\"form-control\">
                            <option value=\"asc\" {% if sortOrder == 'asc' %}selected{% endif %}>Croissant</option>
                            <option value=\"desc\" {% if sortOrder == 'desc' %}selected{% endif %}>Décroissant</option>
                        </select>
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary btn-sm\">Appliquer</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Carte Calendrier -->
    <div class=\"col-md-6 mb-4\">
        <div class=\"card shadow-sm\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title mb-0\">Calendrier</h4>
            </div>
            <div class=\"card-body\">
             <div
    id=\"calendar\"
    style=\"width: 500px; height: 500px; background-color: #ffe6f0; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\"
></div>

            </div>
        </div>
    </div>
</div>


<div class=\"card\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Liste des Events</h4>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table\" id=\"events-table\">
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
                    <tr class=\"event-row\" data-id=\"{{ event.id }}\" data-title=\"{{ event.titreevents|lower }}\" data-description=\"{{ event.descriptionevents|lower }}\">
                        <td>{{ event.id }}</td>
                        <td>{{ event.dateDebut ? event.dateDebut|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ event.dateFin ? event.dateFin|date('Y-m-d H:i:s') : '' }}</td>
                        <td>{{ event.titreevents }}</td>
                        <td>{{ event.descriptionevents }}</td>
                        <td>
                            {% if event.image1events %}
                                <img src=\"{{ asset(event.image1events) }}\" alt=\"Image 1\" style=\"width: 150px; height: auto;\">
                            {% else %}
                                Pas d'image
                            {% endif %}
                        </td>
                        <td>
                            {% if event.image2events %}
                                <img src=\"{{ asset(event.image2events) }}\" alt=\"Image 2\" style=\"width: 150px; height: auto;\">
                            {% else %}
                                Pas d'image
                            {% endif %}
                        </td>
                        <td>
                            <a href=\"{{ path('app_event_show', {'id': event.id}) }}\" class=\"btn btn-primary\">Voir</a>
                            <a href=\"{{ path('app_event_edit', {'id': event.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                        </td>
                    </tr>
                    {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucun événement trouvé</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>

<!-- Pagination -->
        <nav id=\"pagination-nav\">
    <ul class=\"pagination\">
        {% if currentPage > 1 %}
        <li class=\"page-item\">
            <a class=\"page-link\" href=\"?page={{ currentPage - 1 }}&sortBy={{ sortBy }}&sortOrder={{ sortOrder }}&query={{ searchQuery }}\">&laquo;</a>
        </li>
        {% endif %}
        {% for i in 1..totalPages %}
        <li class=\"page-item {% if i == currentPage %}active{% endif %}\">
            <a class=\"page-link\" href=\"?page={{ i }}&sortBy={{ sortBy }}&sortOrder={{ sortOrder }}&query={{ searchQuery }}\">{{ i }}</a>
        </li>
        {% endfor %}
        {% if currentPage < totalPages %}
        <li class=\"page-item\">
            <a class=\"page-link\" href=\"?page={{ currentPage + 1 }}&sortBy={{ sortBy }}&sortOrder={{ sortOrder }}&query={{ searchQuery }}\">&raquo;</a>
        </li>
        {% endif %}
    </ul>
</nav>

            <a href=\"{{ path('app_event_new') }}\" class=\"btn btn-primary mr-2\">Créer un Nouveau Produit</a>
<a href=\"{{ path('app_event_stats') }}\" class=\"btn btn-primary\">Afficher les statistiques</a>

        </div>
    </div>
</div>

<script>
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('.event-row');

        rows.forEach(row => {
            const title = row.getAttribute('data-title');
            const description = row.getAttribute('data-description');

            row.style.display = title.includes(filter) || description.includes(filter) ? '' : 'none';
        });
    });

    document.getElementById('sort-select').addEventListener('change', function () {
        window.location.href = this.value;
    });
    // Pagination Ajax
document.querySelectorAll('.page-link').forEach(function (link) {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const page = this.getAttribute('data-page');
        const url = new URL(window.location.href);
        url.searchParams.set('page', page); // Add the page number to the URL

        fetch(url)  // Send the request with the updated page parameter
            .then(response => response.json())
            .then(data => {
                // Update event table
                document.querySelector('#events-table tbody').innerHTML = data.events;

                // Update the pagination
                document.getElementById('pagination-nav').innerHTML = data.pagination;
            })
            .catch(err => {
                console.error('Error during fetch:', err);
            });
    });
});
{% block javascripts %}
    {{ parent() }}
    <!-- Include FullCalendar CSS and JS -->
    <link href=\"https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css\" rel=\"stylesheet\" />
    <script src=\"https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js\"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialisation du calendrier FullCalendar
            \$('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
               events: function(start, end, timezone, callback) {
    fetch('{{ path('app_event_get_events') }}')  // URL de l'API pour charger les événements via AJAX
        .then(response => response.json())
        .then(data => {
            console.log(data); // Vérifie les données reçues

            // Si la réponse est vide ou invalide
            if (!data || data.length === 0) {
                console.error('Aucun événement trouvé');
                return;
            }

            // Transformation des données pour FullCalendar
            const events = data.map(event => ({
                title: event.title,  // Le titre de l'événement
                start: event.start,   // Date de début
                end: event.end,       // Date de fin
                description: event.description,  // Description de l'événement
                color: 'orange'  // Définir la couleur orange
            }));
            callback(events);
        })
        .catch(err => {
            console.error('Erreur lors de la récupération des événements:', err);
        });
}
,
                editable: true,
                droppable: true, // Permet de glisser-déposer des événements (optionnel)
                eventClick: function(event) {
                    // Gestion du clic sur un événement
                    alert('Titre: ' + event.title + '\\nDescription: ' + event.description);
                },
                eventDrop: function(event, delta) {
                    // Traiter les événements déplacés
                    console.log('Événement déplacé');
                },
                eventResize: function(event) {
                    // Traiter la redimension du calendrier
                    console.log('Événement redimensionné');
                }
            });
        });
    </script>
    
{% endblock %}


{% endblock %}
", "event/index.html.twig", "C:\\xampp\\htdocs\\RAHMA\\fianle\\versionf\\esprit\\esprit\\templates\\event\\index.html.twig");
    }
}
