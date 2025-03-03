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

/* user/index.html.twig */
class __TwigTemplate_cadb5bab28ef861eb2bbea0ce9aa2e7b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "user/index.html.twig", 1);
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

        yield "User Index";
        
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
        yield "     <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Utilisateurs</h4>
            <!-- Champ de recherche -->
            <div class=\"form-group\">
                <input type=\"text\" id=\"search-input\" class=\"form-control\" placeholder=\"Rechercher un utilisateur...\">
            </div>
        </div>
        <div class=\"card-body\">
            <!-- Tableau des utilisateurs -->
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"user-table-body\">
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 31
            yield "                            <tr>
                                <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                <td>";
            // line 34
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 34)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 34)), "html", null, true)) : (""));
            yield "</td>
                                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 38
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 38)) {
                // line 39
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("user/" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "image", [], "any", false, false, false, 39))), "html", null, true);
                yield "\" width=\"50px\" height=\"50px\" style=\"margin-top: 10px;border-radius: 50px;\">
                                    ";
            } else {
                // line 41
                yield "                                        <span>No Image</span>
                                    ";
            }
            // line 43
            yield "                                </td>
                                <td class=\"actions\">
                                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                                    <div class=\"user-block mt-1\" data-user-id=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 47), "html", null, true);
            yield "\">
                                        ";
            // line 48
            if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "blok", [], "any", false, false, false, 48)) {
                // line 49
                yield "                                            <button class=\"toggle-user-btn btn btn-info unblock\">Unblock User</button>
                                        ";
            } else {
                // line 51
                yield "                                            <button class=\"toggle-user-btn btn btn-danger block\">Block User</button>
                                        ";
            }
            // line 53
            yield "                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 56
        if (!$context['_iterated']) {
            // line 57
            yield "                            <tr>
                                <td colspan=\"7\" class=\"text-center\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class=\"text-center\">
                <div class=\"navigation\">
                    ";
        // line 67
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 67, $this->source); })()));
        yield "
                </div>
            </div>
            <!-- Fin de la pagination -->
            <div class=\"mt-3 text-center\">
                <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_new");
        yield "\" class=\"btn btn-primary\">Créer un Nouvel Utilisateur</a>
            </div>
        </div>
    </div>
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
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

        // line 79
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            // Gestion de la recherche
            \$('#search-input').on('input', function() {
                const query = \$(this).val();

                \$.ajax({
                    url: '";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        yield "',
                    method: 'GET',
                    data: { query: query },
                    success: function(response) {
                        const tbody = \$('#user-table-body');
                        tbody.empty(); // Vide le tableau actuel

                        if (response.length > 0) {
                            response.forEach(function(user) {
                                const row = `
                                    <tr>
                                        <td>\${user.id}</td>
                                        <td>\${user.email}</td>
                                        <td>\${user.roles}</td>
                                        <td>\${user.name}</td>
                                        <td>\${user.lastname}</td>
                                        <td>
                                            \${user.image ? `<img src=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("user/"), "html", null, true);
        yield "\${user.image}\" width=\"50px\" height=\"50px\" style=\"margin-top: 10px;border-radius: 50px;\">` : '<span>No Image</span>'}
                                        </td>
                                        <td class=\"actions\">
                                            <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_show", ["id" => "USER_ID"]);
        yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                            <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => "USER_ID"]);
        yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                                            <div class=\"user-block mt-1\" data-user-id=\"\${user.id}\">
                                                \${user.blok ? `<button class=\"toggle-user-btn btn btn-info unblock\">Unblock User</button>` : `<button class=\"toggle-user-btn btn btn-danger block\">Block User</button>`}
                                            </div>
                                        </td>
                                    </tr>
                                `.replace(/USER_ID/g, user.id);

                                tbody.append(row);
                            });
                        } else {
                            tbody.append('<tr><td colspan=\"7\" class=\"text-center\">Aucun résultat trouvé</td></tr>');
                        }
                    },
                    error: function(xhr) {
                        alert('Une erreur s\\'est produite lors de la recherche.');
                    }
                });
            });
        });
    </script>


    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).on('click', '.toggle-user-btn', function() {
            const userId = \$(this).closest('.user-block').data('user-id');
            const action = \$(this).hasClass('block') ? 'block' : 'unblock';
            const button = \$(this);

            \$.ajax({
                url: '/api/toggle-user/' + userId,
                method: 'POST',
                success: function(response) {
                    if (response.success) {
                        if (action === 'block') {
                            button.text('Unblock User').removeClass('block').addClass('unblock');
                        } else {
                            button.text('Block User').removeClass('unblock').addClass('block');
                        }
                        alert(response.message);
                    }
                },  
                error: function(xhr) {
                    alert('An error occurred: ' + xhr.responseText);
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
        return "user/index.html.twig";
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
        return array (  301 => 110,  297 => 109,  291 => 106,  271 => 89,  257 => 79,  244 => 78,  228 => 72,  220 => 67,  212 => 61,  203 => 57,  201 => 56,  194 => 53,  190 => 51,  186 => 49,  184 => 48,  180 => 47,  176 => 46,  172 => 45,  168 => 43,  164 => 41,  158 => 39,  156 => 38,  151 => 36,  147 => 35,  143 => 34,  139 => 33,  135 => 32,  132 => 31,  127 => 30,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}User Index{% endblock %}

{% block content %}
     <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Utilisateurs</h4>
            <!-- Champ de recherche -->
            <div class=\"form-group\">
                <input type=\"text\" id=\"search-input\" class=\"form-control\" placeholder=\"Rechercher un utilisateur...\">
            </div>
        </div>
        <div class=\"card-body\">
            <!-- Tableau des utilisateurs -->
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id=\"user-table-body\">
                        {% for user in users %}
                            <tr>
                                <td>{{ user.id }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ user.roles ? user.roles|json_encode : '' }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.lastname }}</td>
                                <td>
                                    {% if user.image %}
                                        <img src=\"{{ asset('user/' ~ user.image) }}\" width=\"50px\" height=\"50px\" style=\"margin-top: 10px;border-radius: 50px;\">
                                    {% else %}
                                        <span>No Image</span>
                                    {% endif %}
                                </td>
                                <td class=\"actions\">
                                    <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"{{ path('app_user_edit', {'id': user.id}) }}\" class=\"btn btn-sm btn-warning\">Modifier</a>
                                    <div class=\"user-block mt-1\" data-user-id=\"{{ user.id }}\">
                                        {% if user.blok %}
                                            <button class=\"toggle-user-btn btn btn-info unblock\">Unblock User</button>
                                        {% else %}
                                            <button class=\"toggle-user-btn btn btn-danger block\">Block User</button>
                                        {% endif %}
                                    </div>
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
            <div class=\"text-center\">
                <div class=\"navigation\">
                    {{ knp_pagination_render(users) }}
                </div>
            </div>
            <!-- Fin de la pagination -->
            <div class=\"mt-3 text-center\">
                <a href=\"{{ path('app_user_new') }}\" class=\"btn btn-primary\">Créer un Nouvel Utilisateur</a>
            </div>
        </div>
    </div>
 {% endblock %}

{% block javascripts %}
    {{ parent() }}

<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {
            // Gestion de la recherche
            \$('#search-input').on('input', function() {
                const query = \$(this).val();

                \$.ajax({
                    url: '{{ path(\"app_user_search\") }}',
                    method: 'GET',
                    data: { query: query },
                    success: function(response) {
                        const tbody = \$('#user-table-body');
                        tbody.empty(); // Vide le tableau actuel

                        if (response.length > 0) {
                            response.forEach(function(user) {
                                const row = `
                                    <tr>
                                        <td>\${user.id}</td>
                                        <td>\${user.email}</td>
                                        <td>\${user.roles}</td>
                                        <td>\${user.name}</td>
                                        <td>\${user.lastname}</td>
                                        <td>
                                            \${user.image ? `<img src=\"{{ asset('user/') }}\${user.image}\" width=\"50px\" height=\"50px\" style=\"margin-top: 10px;border-radius: 50px;\">` : '<span>No Image</span>'}
                                        </td>
                                        <td class=\"actions\">
                                            <a href=\"{{ path('app_user_show', {'id': 'USER_ID'}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                            <a href=\"{{ path('app_user_edit', {'id': 'USER_ID'}) }}\" class=\"btn btn-sm btn-warning\">Modifier</a>
                                            <div class=\"user-block mt-1\" data-user-id=\"\${user.id}\">
                                                \${user.blok ? `<button class=\"toggle-user-btn btn btn-info unblock\">Unblock User</button>` : `<button class=\"toggle-user-btn btn btn-danger block\">Block User</button>`}
                                            </div>
                                        </td>
                                    </tr>
                                `.replace(/USER_ID/g, user.id);

                                tbody.append(row);
                            });
                        } else {
                            tbody.append('<tr><td colspan=\"7\" class=\"text-center\">Aucun résultat trouvé</td></tr>');
                        }
                    },
                    error: function(xhr) {
                        alert('Une erreur s\\'est produite lors de la recherche.');
                    }
                });
            });
        });
    </script>


    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).on('click', '.toggle-user-btn', function() {
            const userId = \$(this).closest('.user-block').data('user-id');
            const action = \$(this).hasClass('block') ? 'block' : 'unblock';
            const button = \$(this);

            \$.ajax({
                url: '/api/toggle-user/' + userId,
                method: 'POST',
                success: function(response) {
                    if (response.success) {
                        if (action === 'block') {
                            button.text('Unblock User').removeClass('block').addClass('unblock');
                        } else {
                            button.text('Block User').removeClass('unblock').addClass('block');
                        }
                        alert(response.message);
                    }
                },  
                error: function(xhr) {
                    alert('An error occurred: ' + xhr.responseText);
                }
            });
        });
    </script>
{% endblock %}", "user/index.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\user\\index.html.twig");
    }
}
