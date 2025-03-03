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

/* produit/pdf.html.twig */
class __TwigTemplate_308320952e5569b5071432db470a7d76 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/pdf.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "    <div style=\"font-family:'Joti One', cursive; padding: 20px; background-color: #f4f4f9; border-radius: 8px;\">
        <h2 style=\"text-align: center; color: #2c3e50; font-size: 36px; margin-bottom: 20px;\">Liste des Produits</h2>
        <table style=\"width: 100%; border-collapse: collapse; margin-top: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\">
            <thead style=\"background-color:rgb(179, 34, 140); color: white;\">
                <tr>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Id</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Nom Produit</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Description Produit</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Prix Produit</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Stock</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Taille</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Avantages</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Images</th>
                </tr>
            </thead>
            <tbody style=\"background-color: #ecf0f1;\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 19
            yield "                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 20), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nomprod", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "descriptionprod", [], "any", false, false, false, 22), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prixprod", [], "any", false, false, false, 23), "html", null, true);
            yield " €</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nombreProduitsEnStock", [], "any", false, false, false, 24), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "sizeprod", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "avantages", [], "any", false, false, false, 26), "html", null, true);
            yield "</td>
                        <td style=\"padding: 12px; text-align: left; color: #34495e;\">
                            ";
            // line 28
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageLarge", [], "any", false, false, false, 28)) {
                // line 29
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageLarge", [], "any", false, false, false, 29), "html", null, true);
                yield "\" alt=\"Image Large\" style=\"max-width: 100px; margin-right: 5px; border-radius: 5px;\"/>
                            ";
            }
            // line 31
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall1", [], "any", false, false, false, 31)) {
                // line 32
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall1", [], "any", false, false, false, 32), "html", null, true);
                yield "\" alt=\"Image Small 1\" style=\"max-width: 100px; margin-right: 5px; border-radius: 5px;\"/>
                            ";
            }
            // line 34
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall2", [], "any", false, false, false, 34)) {
                // line 35
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall2", [], "any", false, false, false, 35), "html", null, true);
                yield "\" alt=\"Image Small 2\" style=\"max-width: 100px; margin-right: 5px; border-radius: 5px;\"/>
                            ";
            }
            // line 37
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall3", [], "any", false, false, false, 37)) {
                // line 38
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "imageSmall3", [], "any", false, false, false, 38), "html", null, true);
                yield "\" alt=\"Image Small 3\" style=\"max-width: 100px; border-radius: 5px;\"/>
                            ";
            }
            // line 40
            yield "                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 42
        if (!$context['_iterated']) {
            // line 43
            yield "                    <tr>
                        <td colspan=\"8\" style=\"padding: 12px; text-align: center; font-size: 14px; color: #e74c3c;\">Aucun produit trouvé</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "            </tbody>
        </table>
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
        return "produit/pdf.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  179 => 47,  170 => 43,  168 => 42,  162 => 40,  156 => 38,  153 => 37,  147 => 35,  144 => 34,  138 => 32,  135 => 31,  129 => 29,  127 => 28,  122 => 26,  118 => 25,  114 => 24,  110 => 23,  106 => 22,  102 => 21,  98 => 20,  95 => 19,  90 => 18,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block content %}
    <div style=\"font-family:'Joti One', cursive; padding: 20px; background-color: #f4f4f9; border-radius: 8px;\">
        <h2 style=\"text-align: center; color: #2c3e50; font-size: 36px; margin-bottom: 20px;\">Liste des Produits</h2>
        <table style=\"width: 100%; border-collapse: collapse; margin-top: 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);\">
            <thead style=\"background-color:rgb(179, 34, 140); color: white;\">
                <tr>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Id</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Nom Produit</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Description Produit</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Prix Produit</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Stock</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Taille</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Avantages</th>
                    <th style=\"padding: 10px 15px; text-align: left; font-size: 14px; font-weight: bold;\">Images</th>
                </tr>
            </thead>
            <tbody style=\"background-color: #ecf0f1;\">
                {% for produit in produits %}
                    <tr style=\"border-bottom: 1px solid #ddd;\">
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ produit.id }}</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ produit.nomprod }}</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ produit.descriptionprod }}</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ produit.prixprod }} €</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ produit.nombreProduitsEnStock }}</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ produit.sizeprod }}</td>
                        <td style=\"padding: 12px; text-align: left; font-size: 12px; color: #34495e;\">{{ produit.avantages }}</td>
                        <td style=\"padding: 12px; text-align: left; color: #34495e;\">
                            {% if produit.imageLarge %}
                                <img src=\"{{ produit.imageLarge }}\" alt=\"Image Large\" style=\"max-width: 100px; margin-right: 5px; border-radius: 5px;\"/>
                            {% endif %}
                            {% if produit.imageSmall1 %}
                                <img src=\"{{ produit.imageSmall1 }}\" alt=\"Image Small 1\" style=\"max-width: 100px; margin-right: 5px; border-radius: 5px;\"/>
                            {% endif %}
                            {% if produit.imageSmall2 %}
                                <img src=\"{{ produit.imageSmall2 }}\" alt=\"Image Small 2\" style=\"max-width: 100px; margin-right: 5px; border-radius: 5px;\"/>
                            {% endif %}
                            {% if produit.imageSmall3 %}
                                <img src=\"{{ produit.imageSmall3 }}\" alt=\"Image Small 3\" style=\"max-width: 100px; border-radius: 5px;\"/>
                            {% endif %}
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" style=\"padding: 12px; text-align: center; font-size: 14px; color: #e74c3c;\">Aucun produit trouvé</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}
", "produit/pdf.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\produit\\pdf.html.twig");
    }
}
