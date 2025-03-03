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

/* page/forum.html.twig */
class __TwigTemplate_1b7d3971011fdfb463bb2b53009b0dbd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/forum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/forum.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/forum.html.twig", 1);
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

        yield "Forum";
        
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
        yield "<div class=\"forum-container\">
    <h1 class=\"forum-title\">Forum</h1>

    <div class=\"container\">
        <div class=\"forum-actions\">
            <div class=\"actions-left\">
                <p class=\"comments-count\">There are ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 12, $this->source); })())), "html", null, true);
        yield " Comments.</p>
            </div>
            <div class=\"actions-right\">
                <h5 class=\"sort-by-title\">SORT BY</h5>
                <select class=\"form-control\" id=\"sortSelect\">
                    <option value=\"alphabet-asc\">Alphabetically, A-Z</option>
                    <option value=\"alphabet-desc\">Alphabetically, Z-A</option>
                    <option value=\"date-asc\">Date, Old To New</option>
                    <option value=\"date-desc\">Date, New To Old</option>
                </select>
            </div>
        </div>

        <!-- Barre de recherche moderne et centrée -->
        <div class=\"search-container\">
            <div class=\"search-wrapper\">
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un message...\" class=\"form-control\">
                <i class=\"fas fa-search search-icon\"></i>
            </div>
        </div>

        <div class=\"action-buttons\">
            <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_new");
        yield "\" class=\"btn btn-primary\">Ajouter un nouveau message</a>
        </div>

        <div class=\"forum-messages\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 39
            yield "                <div class=\"forum-message\" data-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["message"], "titremsg", [], "any", false, false, false, 39)), "html", null, true);
            yield "\" data-date=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "datemsg", [], "any", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true);
            yield "\">
                    <div class=\"message-header\">
                        <a href=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_show2", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            yield "\" class=\"message-title\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "titremsg", [], "any", false, false, false, 41), "html", null, true);
            yield "</a>
                        <p class=\"message-description\">";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "descriptionmsg", [], "any", false, false, false, 42), "html", null, true);
            yield "</p>
                    </div>
                    <p class=\"message-date\">Posté le ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "datemsg", [], "any", false, false, false, 44), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "        </div>

        <!-- Pagination -->
        <div class=\"pagination\">
            <button id=\"prevPage\" class=\"btn btn-secondary\">Précédent</button>
            <span id=\"pageInfo\" style=\"margin: 0 10px;\">Page 1</span>
            <button id=\"nextPage\" class=\"btn btn-secondary\">Suivant</button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const sortSelect = document.getElementById('sortSelect');
    const forumMessagesContainer = document.querySelector('.forum-messages');
    const prevPageButton = document.getElementById('prevPage');
    const nextPageButton = document.getElementById('nextPage');
    const pageInfo = document.getElementById('pageInfo');

    let allMessages = Array.from(document.querySelectorAll('.forum-message')); // Tous les messages
    let filteredMessages = [...allMessages]; // Messages filtrés (initialement tous les messages)
    let currentPage = 1;
    const messagesPerPage = 2; // Nombre de messages par page

    // Fonction pour afficher les messages de la page actuelle
    function showPage(page) {
        const startIndex = (page - 1) * messagesPerPage;
        const endIndex = startIndex + messagesPerPage;

        allMessages.forEach(message => message.style.display = 'none'); // Masquer tous les messages
        filteredMessages.slice(startIndex, endIndex).forEach(message => message.style.display = 'block'); // Afficher les messages de la page

        pageInfo.textContent = `Page \${page} sur \${Math.ceil(filteredMessages.length / messagesPerPage)}`;
    }

    // Fonction pour mettre à jour les boutons de pagination
    function updatePaginationButtons() {
        prevPageButton.disabled = currentPage === 1;
        nextPageButton.disabled = currentPage === Math.ceil(filteredMessages.length / messagesPerPage);
    }

    // Fonction pour filtrer les messages en fonction de la recherche
    function filterMessages(searchTerm) {
        filteredMessages = allMessages.filter(message => {
            const title = message.querySelector('.message-title').textContent.toLowerCase();
            const description = message.querySelector('.message-description').textContent.toLowerCase();
            return title.includes(searchTerm) || description.includes(searchTerm);
        });

        currentPage = 1; // Revenir à la première page après une recherche
        showPage(currentPage);
        updatePaginationButtons();
    }

    // Afficher la première page au chargement
    showPage(currentPage);
    updatePaginationButtons();

    // Bouton Précédent
    prevPageButton.addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
            updatePaginationButtons();
        }
    });

    // Bouton Suivant
    nextPageButton.addEventListener('click', function() {
        if (currentPage < Math.ceil(filteredMessages.length / messagesPerPage)) {
            currentPage++;
            showPage(currentPage);
            updatePaginationButtons();
        }
    });

    // Recherche dynamique
    searchInput.addEventListener('input', function() {
        const searchTerm = searchInput.value.toLowerCase();
        filterMessages(searchTerm);
    });

    // Tri dynamique
    sortSelect.addEventListener('change', function() {
        const sortBy = sortSelect.value;

        filteredMessages.sort(function(a, b) {
            const titleA = a.getAttribute('data-title');
            const titleB = b.getAttribute('data-title');
            const dateA = new Date(a.getAttribute('data-date'));
            const dateB = new Date(b.getAttribute('data-date'));

            switch (sortBy) {
                case 'alphabet-asc':
                    return titleA.localeCompare(titleB);
                case 'alphabet-desc':
                    return titleB.localeCompare(titleA);
                case 'date-asc':
                    return dateA - dateB;
                case 'date-desc':
                    return dateB - dateA;
                default:
                    return 0;
            }
        });

        currentPage = 1;
        showPage(currentPage);
        updatePaginationButtons();
    });
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 162
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

        // line 163
        yield "<link href=\"https://fonts.googleapis.com/css?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Joti+One&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
<style>
    body {
        font-family: 'Joti One', Arial, sans-serif;
        background-color: #f3f4f6;
    }

    .forum-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: rgb(247, 228, 239);
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .forum-title {
        font-size: 2.5em;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 600;
        text-transform: uppercase;
        color: #2c3e50;
    }

    .forum-actions {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .comments-count {
        font-size: 1.1em;
        color: #555;
    }

    .sort-by-title {
        font-size: 1.1em;
        margin-right: 10px;
        color: #555;
    }

    .action-buttons {
        text-align: center;
        margin-bottom: 30px;
    }

    .btn-primary {
        background-color: #b11d85;
        color: #fff;
        border: 2px solid #b11d85;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #9c1575;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
        border: 2px solid #6c757d;
        padding: 8px 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .forum-messages {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 20px;
    }

    .forum-message {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        width: 48%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .forum-message:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .message-header {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }

    .message-title {
        font-size: 2.2em;
        color: #b11d85;
        font-weight: 600;
        text-decoration: underline;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .message-title:hover {
        color: #9c1575;
    }

    .message-date {
        font-size: 0.9em;
        color: #777;
    }

    .message-description {
        font-size: 1.1em;
        color: #555;
        line-height: 1.6;
    }

    /* Style pour la barre de recherche */
    .search-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
    }

    .search-wrapper {
        position: relative;
        width: 100%;
        max-width: 500px;
    }

    #searchInput {
        width: 100%;
        padding: 12px 40px 12px 20px;
        border: 2px solid #b11d85;
        border-radius: 30px;
        font-size: 1em;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    #searchInput:focus {
        outline: none;
        border-color: #9c1575;
        box-shadow: 0 0 10px rgba(177, 29, 133, 0.5);
    }

    .search-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #b11d85;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .search-icon:hover {
        color: #9c1575;
    }

    /* Style minimal pour la pagination */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination button {
        margin: 0 5px;
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
        return "page/forum.html.twig";
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
        return array (  310 => 163,  297 => 162,  173 => 47,  164 => 44,  159 => 42,  153 => 41,  145 => 39,  141 => 38,  134 => 34,  109 => 12,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Forum{% endblock %}

{% block body %}
<div class=\"forum-container\">
    <h1 class=\"forum-title\">Forum</h1>

    <div class=\"container\">
        <div class=\"forum-actions\">
            <div class=\"actions-left\">
                <p class=\"comments-count\">There are {{ messages|length }} Comments.</p>
            </div>
            <div class=\"actions-right\">
                <h5 class=\"sort-by-title\">SORT BY</h5>
                <select class=\"form-control\" id=\"sortSelect\">
                    <option value=\"alphabet-asc\">Alphabetically, A-Z</option>
                    <option value=\"alphabet-desc\">Alphabetically, Z-A</option>
                    <option value=\"date-asc\">Date, Old To New</option>
                    <option value=\"date-desc\">Date, New To Old</option>
                </select>
            </div>
        </div>

        <!-- Barre de recherche moderne et centrée -->
        <div class=\"search-container\">
            <div class=\"search-wrapper\">
                <input type=\"text\" id=\"searchInput\" placeholder=\"Rechercher un message...\" class=\"form-control\">
                <i class=\"fas fa-search search-icon\"></i>
            </div>
        </div>

        <div class=\"action-buttons\">
            <a href=\"{{ path('app_message_new') }}\" class=\"btn btn-primary\">Ajouter un nouveau message</a>
        </div>

        <div class=\"forum-messages\">
            {% for message in messages %}
                <div class=\"forum-message\" data-title=\"{{ message.titremsg|lower }}\" data-date=\"{{ message.datemsg|date('Y-m-d H:i:s') }}\">
                    <div class=\"message-header\">
                        <a href=\"{{ path('app_message_show2', {'id': message.id}) }}\" class=\"message-title\">{{ message.titremsg }}</a>
                        <p class=\"message-description\">{{ message.descriptionmsg }}</p>
                    </div>
                    <p class=\"message-date\">Posté le {{ message.datemsg|date('d/m/Y H:i') }}</p>
                </div>
            {% endfor %}
        </div>

        <!-- Pagination -->
        <div class=\"pagination\">
            <button id=\"prevPage\" class=\"btn btn-secondary\">Précédent</button>
            <span id=\"pageInfo\" style=\"margin: 0 10px;\">Page 1</span>
            <button id=\"nextPage\" class=\"btn btn-secondary\">Suivant</button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const sortSelect = document.getElementById('sortSelect');
    const forumMessagesContainer = document.querySelector('.forum-messages');
    const prevPageButton = document.getElementById('prevPage');
    const nextPageButton = document.getElementById('nextPage');
    const pageInfo = document.getElementById('pageInfo');

    let allMessages = Array.from(document.querySelectorAll('.forum-message')); // Tous les messages
    let filteredMessages = [...allMessages]; // Messages filtrés (initialement tous les messages)
    let currentPage = 1;
    const messagesPerPage = 2; // Nombre de messages par page

    // Fonction pour afficher les messages de la page actuelle
    function showPage(page) {
        const startIndex = (page - 1) * messagesPerPage;
        const endIndex = startIndex + messagesPerPage;

        allMessages.forEach(message => message.style.display = 'none'); // Masquer tous les messages
        filteredMessages.slice(startIndex, endIndex).forEach(message => message.style.display = 'block'); // Afficher les messages de la page

        pageInfo.textContent = `Page \${page} sur \${Math.ceil(filteredMessages.length / messagesPerPage)}`;
    }

    // Fonction pour mettre à jour les boutons de pagination
    function updatePaginationButtons() {
        prevPageButton.disabled = currentPage === 1;
        nextPageButton.disabled = currentPage === Math.ceil(filteredMessages.length / messagesPerPage);
    }

    // Fonction pour filtrer les messages en fonction de la recherche
    function filterMessages(searchTerm) {
        filteredMessages = allMessages.filter(message => {
            const title = message.querySelector('.message-title').textContent.toLowerCase();
            const description = message.querySelector('.message-description').textContent.toLowerCase();
            return title.includes(searchTerm) || description.includes(searchTerm);
        });

        currentPage = 1; // Revenir à la première page après une recherche
        showPage(currentPage);
        updatePaginationButtons();
    }

    // Afficher la première page au chargement
    showPage(currentPage);
    updatePaginationButtons();

    // Bouton Précédent
    prevPageButton.addEventListener('click', function() {
        if (currentPage > 1) {
            currentPage--;
            showPage(currentPage);
            updatePaginationButtons();
        }
    });

    // Bouton Suivant
    nextPageButton.addEventListener('click', function() {
        if (currentPage < Math.ceil(filteredMessages.length / messagesPerPage)) {
            currentPage++;
            showPage(currentPage);
            updatePaginationButtons();
        }
    });

    // Recherche dynamique
    searchInput.addEventListener('input', function() {
        const searchTerm = searchInput.value.toLowerCase();
        filterMessages(searchTerm);
    });

    // Tri dynamique
    sortSelect.addEventListener('change', function() {
        const sortBy = sortSelect.value;

        filteredMessages.sort(function(a, b) {
            const titleA = a.getAttribute('data-title');
            const titleB = b.getAttribute('data-title');
            const dateA = new Date(a.getAttribute('data-date'));
            const dateB = new Date(b.getAttribute('data-date'));

            switch (sortBy) {
                case 'alphabet-asc':
                    return titleA.localeCompare(titleB);
                case 'alphabet-desc':
                    return titleB.localeCompare(titleA);
                case 'date-asc':
                    return dateA - dateB;
                case 'date-desc':
                    return dateB - dateA;
                default:
                    return 0;
            }
        });

        currentPage = 1;
        showPage(currentPage);
        updatePaginationButtons();
    });
});
</script>
{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Joti+One&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
<style>
    body {
        font-family: 'Joti One', Arial, sans-serif;
        background-color: #f3f4f6;
    }

    .forum-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: rgb(247, 228, 239);
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .forum-title {
        font-size: 2.5em;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 600;
        text-transform: uppercase;
        color: #2c3e50;
    }

    .forum-actions {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .comments-count {
        font-size: 1.1em;
        color: #555;
    }

    .sort-by-title {
        font-size: 1.1em;
        margin-right: 10px;
        color: #555;
    }

    .action-buttons {
        text-align: center;
        margin-bottom: 30px;
    }

    .btn-primary {
        background-color: #b11d85;
        color: #fff;
        border: 2px solid #b11d85;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #9c1575;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: #fff;
        border: 2px solid #6c757d;
        padding: 8px 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .forum-messages {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 20px;
    }

    .forum-message {
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        width: 48%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .forum-message:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .message-header {
        display: flex;
        flex-direction: column;
        margin-bottom: 15px;
    }

    .message-title {
        font-size: 2.2em;
        color: #b11d85;
        font-weight: 600;
        text-decoration: underline;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }

    .message-title:hover {
        color: #9c1575;
    }

    .message-date {
        font-size: 0.9em;
        color: #777;
    }

    .message-description {
        font-size: 1.1em;
        color: #555;
        line-height: 1.6;
    }

    /* Style pour la barre de recherche */
    .search-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0;
    }

    .search-wrapper {
        position: relative;
        width: 100%;
        max-width: 500px;
    }

    #searchInput {
        width: 100%;
        padding: 12px 40px 12px 20px;
        border: 2px solid #b11d85;
        border-radius: 30px;
        font-size: 1em;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    #searchInput:focus {
        outline: none;
        border-color: #9c1575;
        box-shadow: 0 0 10px rgba(177, 29, 133, 0.5);
    }

    .search-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #b11d85;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .search-icon:hover {
        color: #9c1575;
    }

    /* Style minimal pour la pagination */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
    }

    .pagination button {
        margin: 0 5px;
    }
</style>
{% endblock %}", "page/forum.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\page\\forum.html.twig");
    }
}
