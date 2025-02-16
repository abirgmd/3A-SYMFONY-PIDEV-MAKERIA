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

/* commentaire/_form.html.twig */
class __TwigTemplate_686ee46629f8ab303f536d87246b7506 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commentaire/_form.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 33
        yield "
";
        // line 34
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
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

        // line 2
        yield "<style>
    /* Style des messages d'alerte */
    .alert {
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 16px;
    }

    .alert-danger {
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
    }

    .alert .alert-title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .alert ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .alert li {
        margin: 5px 0;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
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

        // line 35
        yield "<div class=\"form-container\">
    ";
        // line 37
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "errors", [], "any", false, false, false, 37)) > 0)) {
            // line 38
            yield "        <div class=\"alert alert-danger\">
            <div class=\"alert-title\">Des erreurs sont survenues :</div>
            <ul>
                ";
            // line 42
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "errors", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 43
                yield "                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 43), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "            </ul>
        </div>
    ";
        }
        // line 48
        yield "
    ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start');
        yield "
        ";
        // line 51
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 52
            yield "            <div class=\"form-group\">
                ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label');
            yield "
                ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget');
            yield "
                ";
            // line 56
            yield "                ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 56), "errors", [], "any", false, false, false, 56)) > 0)) {
                // line 57
                yield "                    <div class=\"alert alert-danger\">
                        <ul>
                            ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 59), "errors", [], "any", false, false, false, 59));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 60
                    yield "                                <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 60), "html", null, true);
                    yield "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "                        </ul>
                    </div>
                ";
            }
            // line 65
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "        <button class=\"btn btn-primary\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 67, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
    ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        yield "
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
        return "commentaire/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  223 => 68,  218 => 67,  211 => 65,  206 => 62,  197 => 60,  193 => 59,  189 => 57,  186 => 56,  182 => 54,  178 => 53,  175 => 52,  170 => 51,  166 => 49,  163 => 48,  158 => 45,  149 => 43,  144 => 42,  139 => 38,  136 => 37,  133 => 35,  120 => 34,  79 => 2,  66 => 1,  55 => 34,  52 => 33,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block stylesheets %}
<style>
    /* Style des messages d'alerte */
    .alert {
        padding: 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 16px;
    }

    .alert-danger {
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
    }

    .alert .alert-title {
        font-weight: bold;
        margin-bottom: 10px;
    }

    .alert ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .alert li {
        margin: 5px 0;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"form-container\">
    {# Vérifier si des erreurs sont présentes dans le formulaire #}
    {% if form.vars.errors|length > 0 %}
        <div class=\"alert alert-danger\">
            <div class=\"alert-title\">Des erreurs sont survenues :</div>
            <ul>
                {# Affichage des erreurs globales du formulaire #}
                {% for error in form.errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}

    {{ form_start(form) }}
        {# Afficher les erreurs pour chaque champ si elles existent #}
        {% for field in form %}
            <div class=\"form-group\">
                {{ form_label(field) }}
                {{ form_widget(field) }}
                {# Afficher les erreurs spécifiques à chaque champ #}
                {% if field.vars.errors|length > 0 %}
                    <div class=\"alert alert-danger\">
                        <ul>
                            {% for error in field.vars.errors %}
                                <li>{{ error.message }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                {% endif %}
            </div>
        {% endfor %}
        <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
    {{ form_end(form) }}
</div>
{% endblock %}
", "commentaire/_form.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\commentaire\\_form.html.twig");
    }
}
