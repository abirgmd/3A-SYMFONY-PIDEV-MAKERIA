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
class __TwigTemplate_5900b5ad1464528a1fc738522585ef9e extends Template
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
        yield "    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Produits</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>Id</th>
                            <th>Nom produit</th>
                            <th>Description produit</th>
                            <th>Prix produit</th>
                            <th>Nombre Produits En Stock</th>
                            <th>Size produit</th>
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 31
            yield "                            <tr>
                                <td>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 32), "html", null, true);
            yield "</td>
                                <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                                <td>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "descriptionprod", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                                <td>";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixprod", [], "any", false, false, false, 35), "html", null, true);
            yield "</td>
                                <td>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nombreProduitsEnStock", [], "any", false, false, false, 36), "html", null, true);
            yield "</td>
                                <td>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "sizeprod", [], "any", false, false, false, 37), "html", null, true);
            yield "</td>
                                <td>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "avantages", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                                <td><img src=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageLarge", [], "any", false, false, false, 39), "html", null, true);
            yield "\" alt=\"Image Large\" class=\"img-thumbnail\" style=\"max-width: 100px;\"></td>
                                <td><img src=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall1", [], "any", false, false, false, 40), "html", null, true);
            yield "\" alt=\"Image Small 1\" class=\"img-thumbnail\" style=\"max-width: 100px;\"></td>
                                <td><img src=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall2", [], "any", false, false, false, 41), "html", null, true);
            yield "\" alt=\"Image Small 2\" class=\"img-thumbnail\" style=\"max-width: 100px;\"></td>
                                <td><img src=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall3", [], "any", false, false, false, 42), "html", null, true);
            yield "\" alt=\"Image Small 3\" class=\"img-thumbnail\" style=\"max-width: 100px;\"></td>
                                <td class=\"actions\">
                                    <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        // line 48
        if (!$context['_iterated']) {
            // line 49
            yield "                            <tr>
                                <td colspan=\"12\" class=\"text-center\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "                    </tbody>
                </table>
            </div>
           <div class=\"mt-3\">
                <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\" class=\"btn btn-primary\">Créer un Nouveau Produit</a>
            </div>
        </div>
    </div>
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
        return array (  208 => 57,  202 => 53,  193 => 49,  191 => 48,  183 => 45,  179 => 44,  174 => 42,  170 => 41,  166 => 40,  162 => 39,  158 => 38,  154 => 37,  150 => 36,  146 => 35,  142 => 34,  138 => 33,  134 => 32,  131 => 31,  126 => 30,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Produit Index{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Produits</h4>
        </div>
        <div class=\"card-body\">
            <div class=\"table-responsive\">
                <table class=\"table\">
                    <thead class=\"text-primary\">
                        <tr>
                            <th>Id</th>
                            <th>Nom produit</th>
                            <th>Description produit</th>
                            <th>Prix produit</th>
                            <th>Nombre Produits En Stock</th>
                            <th>Size produit</th>
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
                                <td>{{ produit.nombreProduitsEnStock }}</td>
                                <td>{{ produit.sizeprod }}</td>
                                <td>{{ produit.avantages }}</td>
                                <td><img src=\"{{ produit.imageLarge }}\" alt=\"Image Large\" class=\"img-thumbnail\" style=\"max-width: 100px;\"></td>
                                <td><img src=\"{{ produit.imageSmall1 }}\" alt=\"Image Small 1\" class=\"img-thumbnail\" style=\"max-width: 100px;\"></td>
                                <td><img src=\"{{ produit.imageSmall2 }}\" alt=\"Image Small 2\" class=\"img-thumbnail\" style=\"max-width: 100px;\"></td>
                                <td><img src=\"{{ produit.imageSmall3 }}\" alt=\"Image Small 3\" class=\"img-thumbnail\" style=\"max-width: 100px;\"></td>
                                <td class=\"actions\">
                                    <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\" class=\"btn btn-sm btn-primary\">Show</a>
                                    <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-sm btn-warning\">Modifier</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"12\" class=\"text-center\">No records found</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
           <div class=\"mt-3\">
                <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-primary\">Créer un Nouveau Produit</a>
            </div>
        </div>
    </div>
{% endblock %}
", "produit/index.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\produit\\index.html.twig");
    }
}
