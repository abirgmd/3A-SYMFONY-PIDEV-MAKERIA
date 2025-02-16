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

/* reponses/_form.html.twig */
class __TwigTemplate_bb9f35c1505c8734d034fa54b8f89c55 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponses/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponses/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "form-styled"]]);
        yield "

<div class=\"form-container\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 5
            yield "        <div class=\"form-group\">
            <label for=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6), "html", null, true);
            yield "\"><strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 6), "label", [], "any", true, true, false, 6)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 6), "label", [], "any", false, false, false, 6), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6)))) : (Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 6), "name", [], "any", false, false, false, 6)))), "html", null, true);
            yield "</strong></label>
            
            ";
            // line 9
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9) == "sizeprod")) {
                // line 10
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control", "type" => "number", "step" => "0.01"]]);
                yield "
            ";
            } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 11
$context["field"], "vars", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11), ["prixprod", "nombreProduitsEnStock"])) {
                // line 12
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control", "type" => "number"]]);
                yield "
            ";
            } elseif ((is_string($_v0 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 13
$context["field"], "vars", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13)) && is_string($_v1 = "image") && str_starts_with($_v0, $_v1))) {
                // line 14
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control", "type" => "url"]]);
                yield "
            ";
            } else {
                // line 16
                yield "                ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
                yield "
            ";
            }
            // line 18
            yield "            
            ";
            // line 20
            yield "            ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 20), "errors", [], "any", false, false, false, 20)) > 0)) {
                // line 21
                yield "                <div class=\"alert-card mt-2\">
                    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 22), "errors", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 23
                    yield "                        <p>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 23), "html", null, true);
                    yield "</p>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                yield "                </div>
            ";
            }
            // line 27
            yield "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "    
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn save-btn\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 31, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"btn back-btn\">Back to list</a>
    </div>
</div>

";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_end');
        yield "

<style>
    .form-container {
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 600px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #4f4f4f;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .form-actions {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
    }
    .btn {
        display: inline-block;
        padding: 10px 15px;
        margin: 5px;
        background-color: #788954;
        color: white;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        font-size: 14px;
        cursor: pointer;
    }
    .btn:hover {
        background-color: #616f43;
    }
    .save-btn {
        background-color: #788954;
    }
    .save-btn:hover {
        background-color: #788954;
    }
    .back-btn {
        background-color: #6c757d;
    }
    .back-btn:hover {
        background-color: #5a6268;
    }
    .alert-card {
        background-color: #f8d7da; /* Fond rouge clair */
        color: #721c24; /* Texte rouge foncé */
        border-radius: 5px;
        padding: 15px;
        margin-top: 10px;
        font-size: 14px;
        border: 1px solid #f5c6cb; /* Bordure rouge clair */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .alert-card p {
        margin: 0;
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reponses/_form.html.twig";
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
        return array (  145 => 36,  138 => 32,  134 => 31,  130 => 29,  123 => 27,  119 => 25,  110 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 18,  91 => 16,  85 => 14,  83 => 13,  78 => 12,  76 => 11,  71 => 10,  68 => 9,  61 => 6,  58 => 5,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'form-styled'}}) }}

<div class=\"form-container\">
    {% for field in form %}
        <div class=\"form-group\">
            <label for=\"{{ field.vars.id }}\"><strong>{{ field.vars.label|default(field.vars.name|capitalize) }}</strong></label>
            
            {# Champs avec type spécifique pour les nombres et URL #}
            {% if field.vars.name == 'sizeprod' %}
            {{ form_widget(field, {'attr': {'class': 'form-control', 'type': 'number', 'step': '0.01'}}) }}
            {% elseif field.vars.name in ['prixprod', 'nombreProduitsEnStock'] %}
                {{ form_widget(field, {'attr': {'class': 'form-control', 'type': 'number'}}) }}
            {% elseif field.vars.name starts with 'image' %}
                {{ form_widget(field, {'attr': {'class': 'form-control', 'type': 'url'}}) }}
            {% else %}
                {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}
            {% endif %}
            
            {# Affichage des erreurs dans des cartes stylisées #}
            {% if field.vars.errors|length > 0 %}
                <div class=\"alert-card mt-2\">
                    {% for error in field.vars.errors %}
                        <p>{{ error.message }}</p>
                    {% endfor %}
                </div>
            {% endif %}
        </div>
    {% endfor %}
    
    <div class=\"form-actions\">
        <button type=\"submit\" class=\"btn save-btn\">{{ button_label|default('Save') }}</button>
        <a href=\"{{ path('app_produit_index') }}\" class=\"btn back-btn\">Back to list</a>
    </div>
</div>

{{ form_end(form) }}

<style>
    .form-container {
        margin: 20px auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 600px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
        color: #4f4f4f;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .form-actions {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
    }
    .btn {
        display: inline-block;
        padding: 10px 15px;
        margin: 5px;
        background-color: #788954;
        color: white;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        font-size: 14px;
        cursor: pointer;
    }
    .btn:hover {
        background-color: #616f43;
    }
    .save-btn {
        background-color: #788954;
    }
    .save-btn:hover {
        background-color: #788954;
    }
    .back-btn {
        background-color: #6c757d;
    }
    .back-btn:hover {
        background-color: #5a6268;
    }
    .alert-card {
        background-color: #f8d7da; /* Fond rouge clair */
        color: #721c24; /* Texte rouge foncé */
        border-radius: 5px;
        padding: 15px;
        margin-top: 10px;
        font-size: 14px;
        border: 1px solid #f5c6cb; /* Bordure rouge clair */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .alert-card p {
        margin: 0;
    }
</style>
", "reponses/_form.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\reponses\\_form.html.twig");
    }
}
