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

/* produit/_form.html.twig */
class __TwigTemplate_d9b096bbf4ae546b992b5a57cd59f282 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "produit/_form.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
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
            <h4 class=\"card-title\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</h4>
        </div>
        <div class=\"card-body\">
            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form-styled"]]);
        yield "

            <div class=\"form-container\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 15
            yield "                    <div class=\"form-group\">
                        <label for=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), "html", null, true);
            yield "\">
                            <strong>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 17), "label", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 17), "label", [], "any", false, false, false, 17), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17)))) : (Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17)))), "html", null, true);
            yield "</strong>
                        </label>

                        ";
            // line 21
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21) == "sizeprod")) {
                // line 22
                yield "                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control", "type" => "number", "step" => "0.01"]]);
                yield "
                        ";
            } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 23
$context["field"], "vars", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), ["prixprod", "nombreProduitsEnStock"])) {
                // line 24
                yield "                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
                yield "
                        ";
            } elseif ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 25
$context["field"], "vars", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25)) && is_string($_v1 = "image") && str_starts_with($_v0, $_v1))) {
                // line 26
                yield "                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control", "type" => "url"]]);
                yield "
                        ";
            } else {
                // line 28
                yield "                            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
                        ";
            }
            // line 30
            yield "
                        ";
            // line 32
            yield "                        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 32), "errors", [], "any", false, false, false, 32)) > 0)) {
                // line 33
                yield "                            <div class=\"alert alert-danger mt-2\">
                                ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 34), "errors", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 35
                    yield "                                    <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 35), "html", null, true);
                    yield "</p>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "                            </div>
                        ";
            }
            // line 39
            yield "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
                <div class=\"form-actions mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 43, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
                    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"btn btn-secondary\">Back to list</a>
                </div>
            </div>

            ";
        // line 48
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        yield "
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
        return "produit/_form.html.twig";
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
        return array (  210 => 48,  203 => 44,  199 => 43,  195 => 41,  188 => 39,  184 => 37,  175 => 35,  171 => 34,  168 => 33,  165 => 32,  162 => 30,  156 => 28,  150 => 26,  148 => 25,  143 => 24,  141 => 23,  136 => 22,  133 => 21,  127 => 17,  123 => 16,  120 => 15,  116 => 14,  110 => 11,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}{{ title }}{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">{{ title }}</h4>
        </div>
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'class': 'form-styled'}}) }}

            <div class=\"form-container\">
                {% for field in form %}
                    <div class=\"form-group\">
                        <label for=\"{{ field.vars.id }}\">
                            <strong>{{ field.vars.label|default(field.vars.name|capitalize) }}</strong>
                        </label>

                        {# Affichage des champs avec des attributs spécifiques selon leur type #}
                        {% if field.vars.name == 'sizeprod' %}
                            {{ form_widget(field, {'attr': {'class': 'form-control', 'type': 'number', 'step': '0.01'}}) }}
                        {% elseif field.vars.name in ['prixprod', 'nombreProduitsEnStock'] %}
                            {{ form_widget(field, {'attr': {'class': 'form-control', 'type': 'number'}}) }}
                        {% elseif field.vars.name starts with 'image' %}
                            {{ form_widget(field, {'attr': {'class': 'form-control', 'type': 'url'}}) }}
                        {% else %}
                            {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}
                        {% endif %}

                        {# Affichage des erreurs sous chaque champ #}
                        {% if field.vars.errors|length > 0 %}
                            <div class=\"alert alert-danger mt-2\">
                                {% for error in field.vars.errors %}
                                    <p>{{ error.message }}</p>
                                {% endfor %}
                            </div>
                        {% endif %}
                    </div>
                {% endfor %}

                <div class=\"form-actions mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
                    <a href=\"{{ path('app_produit_index') }}\" class=\"btn btn-secondary\">Back to list</a>
                </div>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "produit/_form.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\produit\\_form.html.twig");
    }
}
