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
class __TwigTemplate_1576ea7b4816533c57ba0988bcff001a extends Template
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

        yield "Liste des Réclamations";
        
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
        yield "    <div class=\"card shadow-sm p-3\">
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <input type=\"text\" id=\"advancedSearch\" class=\"form-control\" placeholder=\"Recherche ...\">
            </div>
            <div class=\"col-md-4\">
                <select id=\"sortSelect\" class=\"form-control\">
                    <option value=\"default\">Tri par défaut</option>
                    <option value=\"id_asc\">ID Croissant</option>
                    <option value=\"id_desc\">ID Décroissant</option>
                    <option value=\"date_asc\">Date Croissante</option>
                    <option value=\"date_desc\">Date Décroissante</option>
                    <option value=\"type_asc\">Type A-Z</option>
                    <option value=\"type_desc\">Type Z-A</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <div class=\"d-flex gap-1 btn-group\">
    <button id=\"sortButton\" class=\"btn btn-xs btn-primary\">Trier</button>
    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_stats");
        yield "\" class=\"btn btn-xs btn-primary\">Stat</a>
    <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_pdf");
        yield "\" class=\"btn btn-xs btn-danger\">PDF</a>
</div>

            </div>

        </div>
        <div class=\"table-responsive mt-3\">
            <table class=\"table table-dark text-white\">
                <thead class=\"bg-dark text-uppercase\">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Réponses</th>
                        <th>Statut</th>
                        <th>User</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id=\"tableBody\">
                    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 47, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 48
            yield "                        <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 48), "html", null, true);
            yield "\" data-date=\"";
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 48)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 48), "Y-m-d H:i:s"), "html", null, true)) : (""));
            yield "\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 48), "html", null, true);
            yield "\" data-description=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "descriptionRec", [], "any", false, false, false, 48), "html", null, true);
            yield "\">
                            <td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "</td>
                            <td>";
            // line 50
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "dateRec", [], "any", false, false, false, 50), "Y-m-d H:i:s"), "html", null, true)) : ("-"));
            yield "</td>
                            <td class=\"text-truncate\" style=\"max-width: 200px;\">
                                ";
            // line 52
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "descriptionRec", [], "any", false, false, false, 52)) > 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "descriptionRec", [], "any", false, false, false, 52), 0, 50) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "descriptionRec", [], "any", false, false, false, 52), "html", null, true)));
            yield "
                            </td>
                            <td>";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "type", [], "any", false, false, false, 54), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 56
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 56)) > 0)) {
                // line 57
                yield "                                    <ul class=\"list-unstyled\">
                                        ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "reponses", [], "any", false, false, false, 58));
                foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                    // line 59
                    yield "                                            <li>✅ ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenuRep", [], "any", false, false, false, 59), "html", null, true);
                    yield "</li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                yield "                                    </ul>
                                ";
            } else {
                // line 63
                yield "                                    <em class=\"text-muted\">Aucune réponse</em>
                                ";
            }
            // line 65
            yield "                            </td>
                            <td>
                                <select class=\"form-select status-select border-0 text-center\" onchange=\"updateStatus(this, ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 67), "html", null, true);
            yield ")\">
                                    <option value=\"en attente\" ";
            // line 68
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statRec", [], "any", false, false, false, 68) == "en attente")) {
                yield "selected";
            }
            yield " class=\"status-pending\">🟡 En attente</option>
                                    <option value=\"résolu\" ";
            // line 69
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statRec", [], "any", false, false, false, 69) == "résolu")) {
                yield "selected";
            }
            yield " class=\"status-resolved\">✅ Résolu</option>
                                    <option value=\"en cours\" ";
            // line 70
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "statRec", [], "any", false, false, false, 70) == "en cours")) {
                yield "selected";
            }
            yield " class=\"status-other\">⚪ En cours</option>
                                </select>
                            </td>
                            <td>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "user", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
            yield "</td>
                            <td class=\"text-center\">
                                <a href=\"";
            // line 75
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponses_new");
            yield "?reclamationId=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\">Répondre</a>
                                <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 80
        if (!$context['_iterated']) {
            // line 81
            yield "                        <tr id=\"aucuneLigne\">
                            <td colspan=\"8\" class=\"text-center text-white\">🚫 Aucune réclamation trouvée</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                </tbody>
            </table>
        </div>
        <div id=\"pagination\" class=\"d-flex justify-content-center mt-3\"></div>
    </div>

    <style>
        /* Styles identiques */
        .card { border-radius: 10px; background-color: #212529; padding: 15px; }
        .table { border-radius: 8px; overflow: hidden; }
        .table thead { background-color: #171a1d; color: white; text-transform: uppercase; }
        .table tbody tr { background-color: #2c3034; border-bottom: 1px solid #3a3f44; }
        .table tbody tr:hover { background-color: #3d4349 !important; }
        .btn {
        border: none;
        border-radius: 6px;
        padding: 5px 10px;
        font-size: 14px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-warning {
        background-color: #ffc107;
        color: #212529;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-primary {
        background-color: #6f42c1;
        color: white;
    }

    .btn-primary:hover {
        background-color: #563d7c;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }
        .form-select { padding: 5px; border-radius: 6px; border: none; }
        .status-select { font-weight: bold; }
        .status-select option.status-pending { background-color: #ffc107; color: #212529; }
        .status-select option.status-resolved { background-color: #28a745; color: white; }
        .status-select option.status-other { background-color: #6c757d; color: white; }
    </style>

    <script>
        function updateStatus(selectElement, reclamationId) {
            let newStatus = selectElement.value;
            fetch(`/reclamation/update-status/\${reclamationId}`, {
                method: \"POST\",
                headers: { \"Content-Type\": \"application/json\" },
                body: JSON.stringify({ status: newStatus })
            }).then(response => {
                if (response.ok) {
                    alert(\"✅ Statut mis à jour !\");
                } else {
                    alert(\"❌ Erreur lors de la mise à jour !\");
                }
            }).catch(error => {
                alert(\"❌ Erreur: \" + error);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", function() {
            const searchInput = document.getElementById('advancedSearch');
            const sortSelect = document.getElementById('sortSelect');
            const sortButton = document.getElementById('sortButton');
            const tableBody = document.getElementById('tableBody');
            // Conservez toutes les lignes dans un tableau \"original\"
            const allLignes = Array.from(tableBody.getElementsByTagName('tr'));
            let filteredRows = allLignes.slice(); // Au départ, toutes les lignes sont visibles
            const paginationDiv = document.getElementById(\"pagination\");
            const rowsPerPage = 2;
            let currentPage = 1;

            // Met à jour filteredRows en fonction de la recherche
            function filtrerLignes() {
                const requete = searchInput.value.toLowerCase().trim();
                // Filtrer à partir de toutes les lignes
                filteredRows = allLignes.filter(ligne => {
                    // On ignore la ligne \"aucuneLigne\" si présente
                    if(ligne.id === 'aucuneLigne') return false;
                    const id = ligne.getAttribute('data-id');
                    const date = ligne.getAttribute('data-date');
                    const type = ligne.getAttribute('data-type') ? ligne.getAttribute('data-type').toLowerCase() : \"\";
                    const description = ligne.getAttribute('data-description') ? ligne.getAttribute('data-description').toLowerCase() : \"\";
                    return id.toString().includes(requete) || date.includes(requete) || type.includes(requete) || description.includes(requete);
                });
                // Masquer toutes les lignes
                allLignes.forEach(ligne => ligne.style.display = \"none\");
                if (filteredRows.length === 0) {
                    if (!document.getElementById('aucuneLigne')) {
                        let tr = document.createElement('tr');
                        tr.setAttribute('id', 'aucuneLigne');
                        tr.innerHTML = '<td colspan=\"8\" class=\"text-center text-white\">🚫 Aucune réclamation trouvée</td>';
                        tableBody.appendChild(tr);
                    }
                } else {
                    let msg = document.getElementById('aucuneLigne');
                    if (msg) { msg.remove(); }
                }
                currentPage = 1;
                displayPage(currentPage);
                updatePagination();
            }

            searchInput.addEventListener('keyup', filtrerLignes);

            function trierLignes() {
                // Trier filteredRows
                const critere = sortSelect.value;
                if (critere === 'id_asc') {
                    filteredRows.sort((a, b) => parseInt(a.dataset.id) - parseInt(b.dataset.id));
                } else if (critere === 'id_desc') {
                    filteredRows.sort((a, b) => parseInt(b.dataset.id) - parseInt(a.dataset.id));
                } else if (critere === 'date_asc') {
                    filteredRows.sort((a, b) => new Date(a.dataset.date) - new Date(b.dataset.date));
                } else if (critere === 'date_desc') {
                    filteredRows.sort((a, b) => new Date(b.dataset.date) - new Date(a.dataset.date));
                } else if (critere === 'type_asc') {
                    filteredRows.sort((a, b) => a.dataset.type.localeCompare(b.dataset.type));
                } else if (critere === 'type_desc') {
                    filteredRows.sort((a, b) => b.dataset.type.localeCompare(a.dataset.type));
                } else {
                    // Tri par défaut, ne rien faire
                }
                // Réorganiser le tableau en ajoutant d'abord les lignes triées
                filteredRows.forEach(ligne => tableBody.appendChild(ligne));
                currentPage = 1;
                displayPage(currentPage);
                updatePagination();
            }

            sortButton.addEventListener('click', trierLignes);

            function displayPage(page) {
                currentPage = page;
                // Masquer toutes les lignes filtrées
                filteredRows.forEach(ligne => ligne.style.display = \"none\");
                const startIndex = (page - 1) * rowsPerPage;
                const endIndex = startIndex + rowsPerPage;
                // Afficher uniquement la tranche correspondante
                filteredRows.slice(startIndex, endIndex).forEach(ligne => ligne.style.display = \"\");
            }

            function updatePagination() {
                let totalPages = Math.ceil(filteredRows.length / rowsPerPage);
                paginationDiv.innerHTML = \"\";
                for (let i = 1; i <= totalPages; i++) {
                    let btn = document.createElement(\"button\");
                    btn.textContent = i;
                    btn.className = \"btn btn-sm btn-secondary mx-1\";
                    if (i === currentPage) {
                        btn.classList.add(\"active\");
                    }
                    btn.addEventListener(\"click\", function() {
                        displayPage(i);
                        updatePagination();
                    });
                    paginationDiv.appendChild(btn);
                }
            }

            // Initialisation
            displayPage(currentPage);
            updatePagination();
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
        return array (  269 => 85,  260 => 81,  258 => 80,  249 => 76,  243 => 75,  238 => 73,  230 => 70,  224 => 69,  218 => 68,  214 => 67,  210 => 65,  206 => 63,  202 => 61,  193 => 59,  189 => 58,  186 => 57,  184 => 56,  179 => 54,  174 => 52,  169 => 50,  165 => 49,  154 => 48,  149 => 47,  125 => 26,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Liste des Réclamations{% endblock %}

{% block content %}
    <div class=\"card shadow-sm p-3\">
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <input type=\"text\" id=\"advancedSearch\" class=\"form-control\" placeholder=\"Recherche ...\">
            </div>
            <div class=\"col-md-4\">
                <select id=\"sortSelect\" class=\"form-control\">
                    <option value=\"default\">Tri par défaut</option>
                    <option value=\"id_asc\">ID Croissant</option>
                    <option value=\"id_desc\">ID Décroissant</option>
                    <option value=\"date_asc\">Date Croissante</option>
                    <option value=\"date_desc\">Date Décroissante</option>
                    <option value=\"type_asc\">Type A-Z</option>
                    <option value=\"type_desc\">Type Z-A</option>
                </select>
            </div>
            <div class=\"col-md-2\">
                <div class=\"d-flex gap-1 btn-group\">
    <button id=\"sortButton\" class=\"btn btn-xs btn-primary\">Trier</button>
    <a href=\"{{ path('app_reclamation_stats') }}\" class=\"btn btn-xs btn-primary\">Stat</a>
    <a href=\"{{ path('app_reclamation_pdf') }}\" class=\"btn btn-xs btn-danger\">PDF</a>
</div>

            </div>

        </div>
        <div class=\"table-responsive mt-3\">
            <table class=\"table table-dark text-white\">
                <thead class=\"bg-dark text-uppercase\">
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Type</th>
                        <th>Réponses</th>
                        <th>Statut</th>
                        <th>User</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id=\"tableBody\">
                    {% for reclamation in reclamations %}
                        <tr data-id=\"{{ reclamation.id }}\" data-date=\"{{ reclamation.dateRec ? reclamation.dateRec|date('Y-m-d H:i:s') : '' }}\" data-type=\"{{ reclamation.type }}\" data-description=\"{{ reclamation.descriptionRec }}\">
                            <td>{{ reclamation.id }}</td>
                            <td>{{ reclamation.dateRec ? reclamation.dateRec|date('Y-m-d H:i:s') : '-' }}</td>
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
                            <td>
                                <select class=\"form-select status-select border-0 text-center\" onchange=\"updateStatus(this, {{ reclamation.id }})\">
                                    <option value=\"en attente\" {% if reclamation.statRec == 'en attente' %}selected{% endif %} class=\"status-pending\">🟡 En attente</option>
                                    <option value=\"résolu\" {% if reclamation.statRec == 'résolu' %}selected{% endif %} class=\"status-resolved\">✅ Résolu</option>
                                    <option value=\"en cours\" {% if reclamation.statRec == 'en cours' %}selected{% endif %} class=\"status-other\">⚪ En cours</option>
                                </select>
                            </td>
                            <td>{{ reclamation.user.name }}</td>
                            <td class=\"text-center\">
                                <a href=\"{{ path('app_reponses_new') }}?reclamationId={{ reclamation.id }}\" class=\"btn btn-sm btn-success\">Répondre</a>
                                <a href=\"{{ path('app_reclamation_show', {'id': reclamation.id}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                
                            </td>
                        </tr>
                    {% else %}
                        <tr id=\"aucuneLigne\">
                            <td colspan=\"8\" class=\"text-center text-white\">🚫 Aucune réclamation trouvée</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <div id=\"pagination\" class=\"d-flex justify-content-center mt-3\"></div>
    </div>

    <style>
        /* Styles identiques */
        .card { border-radius: 10px; background-color: #212529; padding: 15px; }
        .table { border-radius: 8px; overflow: hidden; }
        .table thead { background-color: #171a1d; color: white; text-transform: uppercase; }
        .table tbody tr { background-color: #2c3034; border-bottom: 1px solid #3a3f44; }
        .table tbody tr:hover { background-color: #3d4349 !important; }
        .btn {
        border: none;
        border-radius: 6px;
        padding: 5px 10px;
        font-size: 14px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .btn-warning {
        background-color: #ffc107;
        color: #212529;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }

    .btn-primary {
        background-color: #6f42c1;
        color: white;
    }

    .btn-primary:hover {
        background-color: #563d7c;
    }

    .btn-danger {
        background-color: #dc3545;
        color: white;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }
        .form-select { padding: 5px; border-radius: 6px; border: none; }
        .status-select { font-weight: bold; }
        .status-select option.status-pending { background-color: #ffc107; color: #212529; }
        .status-select option.status-resolved { background-color: #28a745; color: white; }
        .status-select option.status-other { background-color: #6c757d; color: white; }
    </style>

    <script>
        function updateStatus(selectElement, reclamationId) {
            let newStatus = selectElement.value;
            fetch(`/reclamation/update-status/\${reclamationId}`, {
                method: \"POST\",
                headers: { \"Content-Type\": \"application/json\" },
                body: JSON.stringify({ status: newStatus })
            }).then(response => {
                if (response.ok) {
                    alert(\"✅ Statut mis à jour !\");
                } else {
                    alert(\"❌ Erreur lors de la mise à jour !\");
                }
            }).catch(error => {
                alert(\"❌ Erreur: \" + error);
            });
        }

        document.addEventListener(\"DOMContentLoaded\", function() {
            const searchInput = document.getElementById('advancedSearch');
            const sortSelect = document.getElementById('sortSelect');
            const sortButton = document.getElementById('sortButton');
            const tableBody = document.getElementById('tableBody');
            // Conservez toutes les lignes dans un tableau \"original\"
            const allLignes = Array.from(tableBody.getElementsByTagName('tr'));
            let filteredRows = allLignes.slice(); // Au départ, toutes les lignes sont visibles
            const paginationDiv = document.getElementById(\"pagination\");
            const rowsPerPage = 2;
            let currentPage = 1;

            // Met à jour filteredRows en fonction de la recherche
            function filtrerLignes() {
                const requete = searchInput.value.toLowerCase().trim();
                // Filtrer à partir de toutes les lignes
                filteredRows = allLignes.filter(ligne => {
                    // On ignore la ligne \"aucuneLigne\" si présente
                    if(ligne.id === 'aucuneLigne') return false;
                    const id = ligne.getAttribute('data-id');
                    const date = ligne.getAttribute('data-date');
                    const type = ligne.getAttribute('data-type') ? ligne.getAttribute('data-type').toLowerCase() : \"\";
                    const description = ligne.getAttribute('data-description') ? ligne.getAttribute('data-description').toLowerCase() : \"\";
                    return id.toString().includes(requete) || date.includes(requete) || type.includes(requete) || description.includes(requete);
                });
                // Masquer toutes les lignes
                allLignes.forEach(ligne => ligne.style.display = \"none\");
                if (filteredRows.length === 0) {
                    if (!document.getElementById('aucuneLigne')) {
                        let tr = document.createElement('tr');
                        tr.setAttribute('id', 'aucuneLigne');
                        tr.innerHTML = '<td colspan=\"8\" class=\"text-center text-white\">🚫 Aucune réclamation trouvée</td>';
                        tableBody.appendChild(tr);
                    }
                } else {
                    let msg = document.getElementById('aucuneLigne');
                    if (msg) { msg.remove(); }
                }
                currentPage = 1;
                displayPage(currentPage);
                updatePagination();
            }

            searchInput.addEventListener('keyup', filtrerLignes);

            function trierLignes() {
                // Trier filteredRows
                const critere = sortSelect.value;
                if (critere === 'id_asc') {
                    filteredRows.sort((a, b) => parseInt(a.dataset.id) - parseInt(b.dataset.id));
                } else if (critere === 'id_desc') {
                    filteredRows.sort((a, b) => parseInt(b.dataset.id) - parseInt(a.dataset.id));
                } else if (critere === 'date_asc') {
                    filteredRows.sort((a, b) => new Date(a.dataset.date) - new Date(b.dataset.date));
                } else if (critere === 'date_desc') {
                    filteredRows.sort((a, b) => new Date(b.dataset.date) - new Date(a.dataset.date));
                } else if (critere === 'type_asc') {
                    filteredRows.sort((a, b) => a.dataset.type.localeCompare(b.dataset.type));
                } else if (critere === 'type_desc') {
                    filteredRows.sort((a, b) => b.dataset.type.localeCompare(a.dataset.type));
                } else {
                    // Tri par défaut, ne rien faire
                }
                // Réorganiser le tableau en ajoutant d'abord les lignes triées
                filteredRows.forEach(ligne => tableBody.appendChild(ligne));
                currentPage = 1;
                displayPage(currentPage);
                updatePagination();
            }

            sortButton.addEventListener('click', trierLignes);

            function displayPage(page) {
                currentPage = page;
                // Masquer toutes les lignes filtrées
                filteredRows.forEach(ligne => ligne.style.display = \"none\");
                const startIndex = (page - 1) * rowsPerPage;
                const endIndex = startIndex + rowsPerPage;
                // Afficher uniquement la tranche correspondante
                filteredRows.slice(startIndex, endIndex).forEach(ligne => ligne.style.display = \"\");
            }

            function updatePagination() {
                let totalPages = Math.ceil(filteredRows.length / rowsPerPage);
                paginationDiv.innerHTML = \"\";
                for (let i = 1; i <= totalPages; i++) {
                    let btn = document.createElement(\"button\");
                    btn.textContent = i;
                    btn.className = \"btn btn-sm btn-secondary mx-1\";
                    if (i === currentPage) {
                        btn.classList.add(\"active\");
                    }
                    btn.addEventListener(\"click\", function() {
                        displayPage(i);
                        updatePagination();
                    });
                    paginationDiv.appendChild(btn);
                }
            }

            // Initialisation
            displayPage(currentPage);
            updatePagination();
        });
    </script>
{% endblock %}
", "reclamation/index.html.twig", "C:\\xampp\\htdocs\\RAHMA\\fianle\\versionf\\esprit\\esprit\\templates\\reclamation\\index.html.twig");
    }
}
