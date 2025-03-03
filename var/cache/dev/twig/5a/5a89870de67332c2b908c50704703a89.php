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

/* cart/index.html.twig */
class __TwigTemplate_e343d5cd22dfd278cd18ac8f8d4e7cbe extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <main class=\"container\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1>Panier</h1>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id=\"cart-items\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 20
            yield "                            <tr data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20), "html", null, true);
            yield "\">
                                <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 21), "nomprod", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                                <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 22), "prixprod", [], "any", false, false, false, 22) / 100), "html", null, true);
            yield " €</td>
                                <td>";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 23), "html", null, true);
            yield "</td>
                                <td>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 24) * CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 24), "prixprod", [], "any", false, false, false, 24)) / 100), "html", null, true);
            yield " dt</td>
                                <td>
                                    <button class=\"btn btn-success btn-add\" data-url=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26)]), "html", null, true);
            yield "\">+</button>
                                    <button class=\"btn btn-warning btn-remove\" data-url=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27)]), "html", null, true);
            yield "\">-</button>
                                    <button class=\"btn btn-danger btn-delete\" data-url=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\">Supprimer</button>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 31
        if (!$context['_iterated']) {
            // line 32
            yield "                            <tr>
                                <td colspan=\"5\">Votre panier est vide</td>
                            </tr>    
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['element'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"3\">Total</td>
                            <td id=\"total\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 40, $this->source); })()) / 100), "html", null, true);
        yield " €</td>
                            <td>
                                <button class=\"btn btn-danger btn-empty-cart\" data-url=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_empty");
        yield "\">Vider</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_validate");
        yield "\" class=\"btn btn-primary\">Valider le panier</a>
            </div>
        </section>
    </main>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {

            // Utiliser l'événement délégué pour gérer les boutons dynamiquement
            \$(document).on('click', '.btn-add', function() {
                var url = \$(this).data('url');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        \$('#cart-items').html(\$(response).find('#cart-items').html());
                        \$('#total').text(\$(response).find('#total').text());
                    }
                });
            });

            \$(document).on('click', '.btn-remove', function() {
                var url = \$(this).data('url');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        \$('#cart-items').html(\$(response).find('#cart-items').html());
                        \$('#total').text(\$(response).find('#total').text());
                    }
                });
            });

            \$(document).on('click', '.btn-delete', function() {
                var url = \$(this).data('url');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        \$('#cart-items').html(\$(response).find('#cart-items').html());
                        \$('#total').text(\$(response).find('#total').text());
                    }
                });
            });

            \$(document).on('click', '.btn-empty-cart', function() {
                var url = \$(this).data('url');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        \$('#cart-items').html(\$(response).find('#cart-items').html());
                        \$('#total').text(\$(response).find('#total').text());
                    }
                });
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
        return "cart/index.html.twig";
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
        return array (  166 => 47,  158 => 42,  153 => 40,  147 => 36,  138 => 32,  136 => 31,  128 => 28,  124 => 27,  120 => 26,  115 => 24,  111 => 23,  107 => 22,  103 => 21,  98 => 20,  93 => 19,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block body %}
    <main class=\"container\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1>Panier</h1>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id=\"cart-items\">
                        {% for element in data %}
                            <tr data-id=\"{{ element.product.id }}\">
                                <td>{{ element.product.nomprod }}</td>
                                <td>{{ element.product.prixprod / 100 }} €</td>
                                <td>{{ element.quantity }}</td>
                                <td>{{ element.quantity * element.product.prixprod / 100 }} dt</td>
                                <td>
                                    <button class=\"btn btn-success btn-add\" data-url=\"{{ path('cart_add', {id: element.product.id}) }}\">+</button>
                                    <button class=\"btn btn-warning btn-remove\" data-url=\"{{ path('cart_remove', {id: element.product.id}) }}\">-</button>
                                    <button class=\"btn btn-danger btn-delete\" data-url=\"{{ path('cart_delete', {id: element.product.id}) }}\">Supprimer</button>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\">Votre panier est vide</td>
                            </tr>    
                        {% endfor %}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"3\">Total</td>
                            <td id=\"total\">{{ total / 100 }} €</td>
                            <td>
                                <button class=\"btn btn-danger btn-empty-cart\" data-url=\"{{ path('cart_empty') }}\">Vider</button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <a href=\"{{ path('cart_validate') }}\" class=\"btn btn-primary\">Valider le panier</a>
            </div>
        </section>
    </main>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script>
        \$(document).ready(function() {

            // Utiliser l'événement délégué pour gérer les boutons dynamiquement
            \$(document).on('click', '.btn-add', function() {
                var url = \$(this).data('url');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        \$('#cart-items').html(\$(response).find('#cart-items').html());
                        \$('#total').text(\$(response).find('#total').text());
                    }
                });
            });

            \$(document).on('click', '.btn-remove', function() {
                var url = \$(this).data('url');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        \$('#cart-items').html(\$(response).find('#cart-items').html());
                        \$('#total').text(\$(response).find('#total').text());
                    }
                });
            });

            \$(document).on('click', '.btn-delete', function() {
                var url = \$(this).data('url');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        \$('#cart-items').html(\$(response).find('#cart-items').html());
                        \$('#total').text(\$(response).find('#total').text());
                    }
                });
            });

            \$(document).on('click', '.btn-empty-cart', function() {
                var url = \$(this).data('url');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    success: function(response) {
                        \$('#cart-items').html(\$(response).find('#cart-items').html());
                        \$('#total').text(\$(response).find('#total').text());
                    }
                });
            });

        });
    </script>
{% endblock %}
", "cart/index.html.twig", "C:\\Users\\hp\\Downloads\\wetransfer_esprit-zip_2025-03-03_1218\\esprit\\esprit\\templates\\Cart\\index.html.twig");
    }
}
