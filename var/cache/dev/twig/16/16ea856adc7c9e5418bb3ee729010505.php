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

/* categorie/_form.html.twig */
class __TwigTemplate_4a3e100ae2f9ac76e930d9297aff5d5f extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/_form.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "form-styled"]]);
        yield "
    <div class=\"form-container\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 6
            yield "            <div class=\"form-group\">
                <label for=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "html", null, true);
            yield "\">
                    <strong>";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, true, false, 8), "label", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 8), "label", [], "any", false, false, false, 8), Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8)))) : (Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8)))), "html", null, true);
            yield "</strong>
                </label>

                ";
            // line 11
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
            yield "

                ";
            // line 13
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 13), "errors", [], "any", false, false, false, 13)) > 0)) {
                // line 14
                yield "                    <div class=\"alert alert-danger\">
                        <ul>
                            ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["field"], "vars", [], "any", false, false, false, 16), "errors", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 17
                    yield "                                <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 17), "html", null, true);
                    yield "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                yield "                        </ul>
                    </div>
                ";
            }
            // line 22
            yield "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn save-btn\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 26, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
            <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\" class=\"btn back-btn\">Back to list</a>
        </div>
    </div>
";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        yield "

";
        // line 32
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 33
        yield "<style>
    .alert {
        padding: 15px;
        border-radius: 8px;
        margin-top: 10px;
        font-size: 14px;
    }
    .alert-danger {
        background-color:rgb(242, 79, 217);
        border: 1px solid #f5c6cb;
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "categorie/_form.html.twig";
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
        return array (  152 => 33,  129 => 32,  124 => 30,  118 => 27,  114 => 26,  110 => 24,  103 => 22,  98 => 19,  89 => 17,  85 => 16,  81 => 14,  79 => 13,  74 => 11,  68 => 8,  64 => 7,  61 => 6,  57 => 5,  52 => 3,  49 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/categorie/_form.html.twig #}

{{ form_start(form, {'attr': {'class': 'form-styled'}}) }}
    <div class=\"form-container\">
        {% for field in form %}
            <div class=\"form-group\">
                <label for=\"{{ field.vars.id }}\">
                    <strong>{{ field.vars.label|default(field.vars.name|capitalize) }}</strong>
                </label>

                {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}

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

        <div class=\"form-actions\">
            <button type=\"submit\" class=\"btn save-btn\">{{ button_label|default('Save') }}</button>
            <a href=\"{{ path('app_categorie_index') }}\" class=\"btn back-btn\">Back to list</a>
        </div>
    </div>
{{ form_end(form) }}

{% block stylesheets %}
<style>
    .alert {
        padding: 15px;
        border-radius: 8px;
        margin-top: 10px;
        font-size: 14px;
    }
    .alert-danger {
        background-color:rgb(242, 79, 217);
        border: 1px solid #f5c6cb;
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
", "categorie/_form.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\categorie\\_form.html.twig");
    }
}
