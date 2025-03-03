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

/* produit/index.html.twig */
class __TwigTemplate_b4d7ed15060a95fb8b7f2d3f32871553 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "produit/index.html.twig", 1);
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

        yield "Produit Index";
        
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
    /* Styling for search, sort, and buttons alignment */
    #search-input, #sort-select {
        width: 45%; /* Increased width for better alignment */
    }
    .btn-outline-secondary, .btn-outline-primary {
        width: 100%;
    }
    .card {
        margin-bottom: 20px;
    }
    .table img {
        max-width: 100px;
        height: auto;
    }
    .list-group-item-success {
        background-color: #d4edda;
        color: #155724;
    }
    .list-group-item-warning {
        background-color: #fff3cd;
        color: #856404;
    }
    .list-group-item-danger {
        background-color: #f8d7da;
        color: #721c24;
    }
    /* Align search and sort in the same line */
    .search-sort-container {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 20px;
    }
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
</style>

<!-- Notifications et Formulaire Promotion côte à côte -->
<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"card\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title\">Historique des Actions</h4>
            </div>
            <div class=\"card-body\">
                <div id=\"historique-container\" class=\"text-muted\">
                    Chargement de l’historique...
                </div>
                <button id=\"voir-plus-btn\" class=\"btn btn-outline-primary mt-3\">Voir plus</button>
                <button id=\"voir-moins-btn\" class=\"btn btn-outline-secondary mt-3\" style=\"display: none;\">Voir moins</button>
            </div>
        </div>
    </div>

<!-- Promotion Form Section -->
<div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-header bg-primary text-white\">
            <h4 class=\"card-title\">Appliquer une Promotion</h4>
        </div>
        <div class=\"card-body\">
            <form action=\"";
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_apply_promotion");
        yield "\" method=\"post\" class=\"mt-4\" novalidate>
                <div class=\"form-group\">
                    <label for=\"dateReduction\">Date de Réduction :</label>
                    <input type=\"date\" id=\"dateReduction\" name=\"dateReduction\" class=\"form-control\" required>
                </div>

                <div class=\"form-group mt-3\">
                    <label for=\"dReduction\">Pourcentage de Réduction :</label>
                    <input type=\"number\" id=\"dReduction\" name=\"dReduction\" class=\"form-control\" placeholder=\"Exemple : 20 pour 20%\" min=\"1\" max=\"100\" required>
                </div>

                <div class=\"form-group mt-3\">
                    <label for=\"produitSelect\">Sélectionnez un ou plusieurs Produits :</label>
                    <select id=\"produitSelect\" name=\"produits[]\" class=\"form-control\" multiple required>
                        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 85, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 86
            yield "                            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 86), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixprod", [], "any", false, false, false, 86), "html", null, true);
            yield "</option>
                        ";
            $context['_iterated'] = true;
        }
        // line 87
        if (!$context['_iterated']) {
            // line 88
            yield "                            <option disabled>Aucun produit disponible</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                    </select>
                    <small class=\"form-text text-muted\">
                        Maintenez <strong>Ctrl</strong> (ou <strong>Cmd</strong> sur Mac) pour sélectionner plusieurs produits.
                    </small>
                </div>

                <button type=\"submit\" class=\"btn btn-outline-primary mt-3\">Appliquer la Promotion</button>
            </form>
        </div>
    </div>
</div>

</div>

<!-- Products Table -->
<div class=\"card mt-3\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Liste des Produits</h4>
    </div>
    <div class=\"card-body\">
        <!-- Recherche et Tri sur la même ligne -->
        <div class=\"search-sort-container\">
            <input
                type=\"text\"
                id=\"search-input\"
                class=\"form-control\"
                placeholder=\"Recherchez par nom ou description du produit...\"
            />
            <select id=\"sort-select\" class=\"form-control\">
                <option value=\"?sortBy=nomprod&sortOrder=asc\" ";
        // line 119
        if ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 119, $this->source); })()) == "nomprod") && ((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 119, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Nom &uarr;</option>
                <option value=\"?sortBy=nomprod&sortOrder=desc\" ";
        // line 120
        if ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 120, $this->source); })()) == "nomprod") && ((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 120, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">Nom &darr;</option>
                <option value=\"?sortBy=sizeprod&sortOrder=asc\" ";
        // line 121
        if ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 121, $this->source); })()) == "sizeprod") && ((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 121, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Taille &uarr;</option>
                <option value=\"?sortBy=sizeprod&sortOrder=desc\" ";
        // line 122
        if ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 122, $this->source); })()) == "sizeprod") && ((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 122, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">Taille &darr;</option>
                <option value=\"?sortBy=prixprod&sortOrder=asc\" ";
        // line 123
        if ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 123, $this->source); })()) == "prixprod") && ((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 123, $this->source); })()) == "asc"))) {
            yield "selected";
        }
        yield ">Prix &uarr;</option>
                <option value=\"?sortBy=prixprod&sortOrder=desc\" ";
        // line 124
        if ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 124, $this->source); })()) == "prixprod") && ((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 124, $this->source); })()) == "desc"))) {
            yield "selected";
        }
        yield ">Prix &darr;</option>
            </select>
        </div>

        <!-- Boutons \"Nouveau Produit\" et \"Télécharger PDF\" -->
        <div class=\"d-flex justify-content-start mb-3\">
            <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\" class=\"btn btn-primary mr-2\">Créer un Nouveau Produit</a>
            <a href=\"";
        // line 131
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_pdf");
        yield "\" class=\"btn btn-danger\">Télécharger PDF</a>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table\" id=\"produit-table\">
                <thead class=\"text-primary\">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix Original</th>
                        <th>Prix Promotionnel</th>
                        <th>Stock</th>
                        <th>Taille</th>
                        <th>Avantages</th>
                        <th>Image Large</th>
                        <th>Image Small 1</th>
                        <th>Image Small 2</th>
                        <th>Image Small 3</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 154, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 155
            yield "                        <tr>
                            <td>";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 156), "html", null, true);
            yield "</td>
                            <td>";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 157), "html", null, true);
            yield "</td>
                            <td>";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "descriptionprod", [], "any", false, false, false, 158), "html", null, true);
            yield "</td>
                            <td>";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixprod", [], "any", false, false, false, 159), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 161
            if ( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixPromo", [], "any", false, false, false, 161))) {
                // line 162
                yield "                                    <span style=\"color: orange;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixPromo", [], "any", false, false, false, 162), "html", null, true);
                yield "</span>
                                ";
            } else {
                // line 164
                yield "                                    -
                                ";
            }
            // line 166
            yield "                            </td>
                            <td>";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nombreProduitsEnStock", [], "any", false, false, false, 167), "html", null, true);
            yield "</td>
                            <td>";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "sizeprod", [], "any", false, false, false, 168), "html", null, true);
            yield "</td>
                            <td>";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "avantages", [], "any", false, false, false, 169), "html", null, true);
            yield "</td>
                            <td><img src=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageLarge", [], "any", false, false, false, 170), "html", null, true);
            yield "\" alt=\"Image Large\"></td>
                            <td><img src=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall1", [], "any", false, false, false, 171), "html", null, true);
            yield "\" alt=\"Image Small 1\"></td>
                            <td><img src=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall2", [], "any", false, false, false, 172), "html", null, true);
            yield "\" alt=\"Image Small 2\"></td>
                            <td><img src=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall3", [], "any", false, false, false, 173), "html", null, true);
            yield "\" alt=\"Image Small 3\"></td>
                            <td class=\"actions\">
                                <a href=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 175)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Voir</a>
                                <a href=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 176)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 179
        if (!$context['_iterated']) {
            // line 180
            yield "                        <tr>
                            <td colspan=\"13\" class=\"text-center\">Aucun produit trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        yield "                </tbody>
            </table>
        </div>

        <!-- Pagination en bas -->
        <div class=\"pagination-container\">
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    ";
        // line 192
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 192, $this->source); })()) > 1)) {
            // line 193
            yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 194, $this->source); })()) - 1)]), "html", null, true);
            yield "\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                    ";
        }
        // line 199
        yield "
                    ";
        // line 200
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 200, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 201
            yield "                        <li class=\"page-item ";
            if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 201, $this->source); })()))) {
                yield "active";
            }
            yield "\">
                            <a class=\"page-link\" href=\"";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["page" => $context["page"]]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
            yield "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "
                    ";
        // line 206
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 206, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 206, $this->source); })()))) {
            // line 207
            yield "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 208, $this->source); })()) + 1)]), "html", null, true);
            yield "\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    ";
        }
        // line 213
        yield "                </ul>
            </nav>
        </div>
    </div>
</div>
<script>
    // Fonctionnalité de Promotion Dynamique avec AJAX
    document.addEventListener('DOMContentLoaded', () => {
        const produitTable = document.getElementById('produit-table');

        // Charger et afficher les promotions dynamiques
        function appliquerPromotions() {
            fetch('";
        // line 225
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_promotions");
        yield "')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const rows = produitTable.querySelectorAll('tbody tr');

                        rows.forEach(row => {
                            const id = row.querySelector('td:first-child').textContent;
                            const prixCell = row.querySelector('td:nth-child(4)');
                            const originalPrix = prixCell.getAttribute('data-original-prix');

                            const promo = data.promotions.find(p => p.id === parseInt(id));

                            if (promo) {
                                prixCell.textContent = `\${promo.nouveauPrix.toFixed(2)} DT`;
                                prixCell.classList.add('text-success', 'font-weight-bold');
                            } else if (originalPrix) {
                                prixCell.textContent = `\${originalPrix} DT`;
                                prixCell.classList.remove('text-success', 'font-weight-bold');
                            }
                        });
                    } else {
                        console.error('Erreur lors de la récupération des promotions:', data.error);
                    }
                })
                .catch(error => {
                    console.error('Erreur de chargement des promotions:', error);
                });
        }

        // Ajouter l'attribut `data-original-prix` au chargement initial
        const prixCells = produitTable.querySelectorAll('td:nth-child(4)');
        prixCells.forEach(cell => {
            cell.setAttribute('data-original-prix', cell.textContent.trim());
        });

        // Charger les promotions dès le chargement de la page
        appliquerPromotions();

        // Recharger les promotions toutes les 10 secondes
        setInterval(appliquerPromotions, 10000);
    });
</script>


<script>

    // Recherche dynamique
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#produit-table tbody tr');

        rows.forEach(row => {
            const productName = row.children[1].textContent.toLowerCase();
            const productDescription = row.children[2].textContent.toLowerCase();
            row.style.display = (productName.includes(filter) || productDescription.includes(filter)) ? '' : 'none';
        });
    });
</script>
<script>
    document.getElementById('sort-select').addEventListener('change', function () {
        window.location.href = this.value;
    });
    </script>
    <script>
 document.addEventListener('DOMContentLoaded', () => {
        const historiqueContainer = document.getElementById('historique-container');
        const voirPlusBtn = document.getElementById('voir-plus-btn');
        const voirMoinsBtn = document.getElementById('voir-moins-btn');

        let maxVisibleItems = 5; // Nombre d'éléments visibles par défaut
        let allItems = [];

        // Charger les données
        fetch('/produit/notifications')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    if (data.data.length > 0) {
                        allItems = data.data.map(item => `<p>\${item}</p>`);
                        updateHistorique();
                    } else {
                        historiqueContainer.innerHTML = 'Aucun historique trouvé.';
                    }
                } else {
                    historiqueContainer.textContent = 'Erreur de chargement.';
                }
            })
            .catch(() => {
                historiqueContainer.textContent = 'Erreur de chargement.';
            });

        // Mettre à jour l'affichage de l'historique
        function updateHistorique() {
            historiqueContainer.innerHTML = allItems.slice(0, maxVisibleItems).join('');
            voirPlusBtn.style.display = maxVisibleItems < allItems.length ? 'block' : 'none';
            voirMoinsBtn.style.display = maxVisibleItems > 5 ? 'block' : 'none';
        }

        // Gestion des boutons
        voirPlusBtn.addEventListener('click', () => {
            maxVisibleItems += 5; // Augmente le nombre visible de 5
            updateHistorique();
        });

        voirMoinsBtn.addEventListener('click', () => {
            maxVisibleItems = 5; // Réinitialise au nombre par défaut
            updateHistorique();
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
        return "produit/index.html.twig";
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
        return array (  481 => 225,  467 => 213,  459 => 208,  456 => 207,  454 => 206,  451 => 205,  440 => 202,  433 => 201,  429 => 200,  426 => 199,  418 => 194,  415 => 193,  413 => 192,  403 => 184,  394 => 180,  392 => 179,  384 => 176,  380 => 175,  375 => 173,  371 => 172,  367 => 171,  363 => 170,  359 => 169,  355 => 168,  351 => 167,  348 => 166,  344 => 164,  338 => 162,  336 => 161,  331 => 159,  327 => 158,  323 => 157,  319 => 156,  316 => 155,  311 => 154,  285 => 131,  281 => 130,  270 => 124,  264 => 123,  258 => 122,  252 => 121,  246 => 120,  240 => 119,  209 => 90,  202 => 88,  200 => 87,  189 => 86,  184 => 85,  167 => 71,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Produit Index{% endblock %}

{% block content %}
<style>
    /* Styling for search, sort, and buttons alignment */
    #search-input, #sort-select {
        width: 45%; /* Increased width for better alignment */
    }
    .btn-outline-secondary, .btn-outline-primary {
        width: 100%;
    }
    .card {
        margin-bottom: 20px;
    }
    .table img {
        max-width: 100px;
        height: auto;
    }
    .list-group-item-success {
        background-color: #d4edda;
        color: #155724;
    }
    .list-group-item-warning {
        background-color: #fff3cd;
        color: #856404;
    }
    .list-group-item-danger {
        background-color: #f8d7da;
        color: #721c24;
    }
    /* Align search and sort in the same line */
    .search-sort-container {
        display: flex;
        justify-content: space-between;
        gap: 15px;
        margin-bottom: 20px;
    }
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
</style>

<!-- Notifications et Formulaire Promotion côte à côte -->
<div class=\"row\">
    <div class=\"col-md-6\">
        <div class=\"card\">
            <div class=\"card-header bg-primary text-white\">
                <h4 class=\"card-title\">Historique des Actions</h4>
            </div>
            <div class=\"card-body\">
                <div id=\"historique-container\" class=\"text-muted\">
                    Chargement de l’historique...
                </div>
                <button id=\"voir-plus-btn\" class=\"btn btn-outline-primary mt-3\">Voir plus</button>
                <button id=\"voir-moins-btn\" class=\"btn btn-outline-secondary mt-3\" style=\"display: none;\">Voir moins</button>
            </div>
        </div>
    </div>

<!-- Promotion Form Section -->
<div class=\"col-md-6\">
    <div class=\"card\">
        <div class=\"card-header bg-primary text-white\">
            <h4 class=\"card-title\">Appliquer une Promotion</h4>
        </div>
        <div class=\"card-body\">
            <form action=\"{{ path('app_produit_apply_promotion') }}\" method=\"post\" class=\"mt-4\" novalidate>
                <div class=\"form-group\">
                    <label for=\"dateReduction\">Date de Réduction :</label>
                    <input type=\"date\" id=\"dateReduction\" name=\"dateReduction\" class=\"form-control\" required>
                </div>

                <div class=\"form-group mt-3\">
                    <label for=\"dReduction\">Pourcentage de Réduction :</label>
                    <input type=\"number\" id=\"dReduction\" name=\"dReduction\" class=\"form-control\" placeholder=\"Exemple : 20 pour 20%\" min=\"1\" max=\"100\" required>
                </div>

                <div class=\"form-group mt-3\">
                    <label for=\"produitSelect\">Sélectionnez un ou plusieurs Produits :</label>
                    <select id=\"produitSelect\" name=\"produits[]\" class=\"form-control\" multiple required>
                        {% for produit in produits %}
                            <option value=\"{{ produit.id }}\">{{ produit.nomprod }} - {{ produit.prixprod }}</option>
                        {% else %}
                            <option disabled>Aucun produit disponible</option>
                        {% endfor %}
                    </select>
                    <small class=\"form-text text-muted\">
                        Maintenez <strong>Ctrl</strong> (ou <strong>Cmd</strong> sur Mac) pour sélectionner plusieurs produits.
                    </small>
                </div>

                <button type=\"submit\" class=\"btn btn-outline-primary mt-3\">Appliquer la Promotion</button>
            </form>
        </div>
    </div>
</div>

</div>

<!-- Products Table -->
<div class=\"card mt-3\">
    <div class=\"card-header\">
        <h4 class=\"card-title\">Liste des Produits</h4>
    </div>
    <div class=\"card-body\">
        <!-- Recherche et Tri sur la même ligne -->
        <div class=\"search-sort-container\">
            <input
                type=\"text\"
                id=\"search-input\"
                class=\"form-control\"
                placeholder=\"Recherchez par nom ou description du produit...\"
            />
            <select id=\"sort-select\" class=\"form-control\">
                <option value=\"?sortBy=nomprod&sortOrder=asc\" {% if sortBy == 'nomprod' and sortOrder == 'asc' %}selected{% endif %}>Nom &uarr;</option>
                <option value=\"?sortBy=nomprod&sortOrder=desc\" {% if sortBy == 'nomprod' and sortOrder == 'desc' %}selected{% endif %}>Nom &darr;</option>
                <option value=\"?sortBy=sizeprod&sortOrder=asc\" {% if sortBy == 'sizeprod' and sortOrder == 'asc' %}selected{% endif %}>Taille &uarr;</option>
                <option value=\"?sortBy=sizeprod&sortOrder=desc\" {% if sortBy == 'sizeprod' and sortOrder == 'desc' %}selected{% endif %}>Taille &darr;</option>
                <option value=\"?sortBy=prixprod&sortOrder=asc\" {% if sortBy == 'prixprod' and sortOrder == 'asc' %}selected{% endif %}>Prix &uarr;</option>
                <option value=\"?sortBy=prixprod&sortOrder=desc\" {% if sortBy == 'prixprod' and sortOrder == 'desc' %}selected{% endif %}>Prix &darr;</option>
            </select>
        </div>

        <!-- Boutons \"Nouveau Produit\" et \"Télécharger PDF\" -->
        <div class=\"d-flex justify-content-start mb-3\">
            <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-primary mr-2\">Créer un Nouveau Produit</a>
            <a href=\"{{ path('app_produit_pdf') }}\" class=\"btn btn-danger\">Télécharger PDF</a>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table\" id=\"produit-table\">
                <thead class=\"text-primary\">
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix Original</th>
                        <th>Prix Promotionnel</th>
                        <th>Stock</th>
                        <th>Taille</th>
                        <th>Avantages</th>
                        <th>Image Large</th>
                        <th>Image Small 1</th>
                        <th>Image Small 2</th>
                        <th>Image Small 3</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for produit in produits %}
                        <tr>
                            <td>{{ produit.id }}</td>
                            <td>{{ produit.nomprod }}</td>
                            <td>{{ produit.descriptionprod }}</td>
                            <td>{{ produit.prixprod }}</td>
                            <td>
                                {% if produit.prixPromo is not null %}
                                    <span style=\"color: orange;\">{{ produit.prixPromo }}</span>
                                {% else %}
                                    -
                                {% endif %}
                            </td>
                            <td>{{ produit.nombreProduitsEnStock }}</td>
                            <td>{{ produit.sizeprod }}</td>
                            <td>{{ produit.avantages }}</td>
                            <td><img src=\"{{ produit.imageLarge }}\" alt=\"Image Large\"></td>
                            <td><img src=\"{{ produit.imageSmall1 }}\" alt=\"Image Small 1\"></td>
                            <td><img src=\"{{ produit.imageSmall2 }}\" alt=\"Image Small 2\"></td>
                            <td><img src=\"{{ produit.imageSmall3 }}\" alt=\"Image Small 3\"></td>
                            <td class=\"actions\">
                                <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\" class=\"btn btn-sm btn-primary\">Voir</a>
                                <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-sm btn-warning\">Modifier</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"13\" class=\"text-center\">Aucun produit trouvé</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <!-- Pagination en bas -->
        <div class=\"pagination-container\">
            <nav aria-label=\"Page navigation\">
                <ul class=\"pagination\">
                    {% if currentPage > 1 %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_produit_index', {'page': currentPage - 1}) }}\" aria-label=\"Previous\">
                                <span aria-hidden=\"true\">&laquo;</span>
                            </a>
                        </li>
                    {% endif %}

                    {% for page in 1..totalPages %}
                        <li class=\"page-item {% if page == currentPage %}active{% endif %}\">
                            <a class=\"page-link\" href=\"{{ path('app_produit_index', {'page': page}) }}\">{{ page }}</a>
                        </li>
                    {% endfor %}

                    {% if currentPage < totalPages %}
                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"{{ path('app_produit_index', {'page': currentPage + 1}) }}\" aria-label=\"Next\">
                                <span aria-hidden=\"true\">&raquo;</span>
                            </a>
                        </li>
                    {% endif %}
                </ul>
            </nav>
        </div>
    </div>
</div>
<script>
    // Fonctionnalité de Promotion Dynamique avec AJAX
    document.addEventListener('DOMContentLoaded', () => {
        const produitTable = document.getElementById('produit-table');

        // Charger et afficher les promotions dynamiques
        function appliquerPromotions() {
            fetch('{{ path(\"app_produit_promotions\") }}')
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        const rows = produitTable.querySelectorAll('tbody tr');

                        rows.forEach(row => {
                            const id = row.querySelector('td:first-child').textContent;
                            const prixCell = row.querySelector('td:nth-child(4)');
                            const originalPrix = prixCell.getAttribute('data-original-prix');

                            const promo = data.promotions.find(p => p.id === parseInt(id));

                            if (promo) {
                                prixCell.textContent = `\${promo.nouveauPrix.toFixed(2)} DT`;
                                prixCell.classList.add('text-success', 'font-weight-bold');
                            } else if (originalPrix) {
                                prixCell.textContent = `\${originalPrix} DT`;
                                prixCell.classList.remove('text-success', 'font-weight-bold');
                            }
                        });
                    } else {
                        console.error('Erreur lors de la récupération des promotions:', data.error);
                    }
                })
                .catch(error => {
                    console.error('Erreur de chargement des promotions:', error);
                });
        }

        // Ajouter l'attribut `data-original-prix` au chargement initial
        const prixCells = produitTable.querySelectorAll('td:nth-child(4)');
        prixCells.forEach(cell => {
            cell.setAttribute('data-original-prix', cell.textContent.trim());
        });

        // Charger les promotions dès le chargement de la page
        appliquerPromotions();

        // Recharger les promotions toutes les 10 secondes
        setInterval(appliquerPromotions, 10000);
    });
</script>


<script>

    // Recherche dynamique
    document.getElementById('search-input').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const rows = document.querySelectorAll('#produit-table tbody tr');

        rows.forEach(row => {
            const productName = row.children[1].textContent.toLowerCase();
            const productDescription = row.children[2].textContent.toLowerCase();
            row.style.display = (productName.includes(filter) || productDescription.includes(filter)) ? '' : 'none';
        });
    });
</script>
<script>
    document.getElementById('sort-select').addEventListener('change', function () {
        window.location.href = this.value;
    });
    </script>
    <script>
 document.addEventListener('DOMContentLoaded', () => {
        const historiqueContainer = document.getElementById('historique-container');
        const voirPlusBtn = document.getElementById('voir-plus-btn');
        const voirMoinsBtn = document.getElementById('voir-moins-btn');

        let maxVisibleItems = 5; // Nombre d'éléments visibles par défaut
        let allItems = [];

        // Charger les données
        fetch('/produit/notifications')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    if (data.data.length > 0) {
                        allItems = data.data.map(item => `<p>\${item}</p>`);
                        updateHistorique();
                    } else {
                        historiqueContainer.innerHTML = 'Aucun historique trouvé.';
                    }
                } else {
                    historiqueContainer.textContent = 'Erreur de chargement.';
                }
            })
            .catch(() => {
                historiqueContainer.textContent = 'Erreur de chargement.';
            });

        // Mettre à jour l'affichage de l'historique
        function updateHistorique() {
            historiqueContainer.innerHTML = allItems.slice(0, maxVisibleItems).join('');
            voirPlusBtn.style.display = maxVisibleItems < allItems.length ? 'block' : 'none';
            voirMoinsBtn.style.display = maxVisibleItems > 5 ? 'block' : 'none';
        }

        // Gestion des boutons
        voirPlusBtn.addEventListener('click', () => {
            maxVisibleItems += 5; // Augmente le nombre visible de 5
            updateHistorique();
        });

        voirMoinsBtn.addEventListener('click', () => {
            maxVisibleItems = 5; // Réinitialise au nombre par défaut
            updateHistorique();
        });
    });
    
</script>


{% endblock %}
", "produit/index.html.twig", "C:\\xampp\\htdocs\\RAHMA\\fianle\\versionf\\esprit\\esprit\\templates\\produit\\index.html.twig");
    }
}
