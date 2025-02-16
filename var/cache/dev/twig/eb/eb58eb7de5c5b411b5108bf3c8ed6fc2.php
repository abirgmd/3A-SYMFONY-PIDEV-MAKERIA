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

/* event/new.html.twig */
class __TwigTemplate_d0240e6c14de216a96697424795b2710 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "event/new.html.twig", 1);
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

        yield "New Event";
        
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
            <h4 class=\"card-title\">Create New Event</h4>
        </div>
        <div class=\"card-body\">
            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        yield "
            <div class=\"mb-3\">
                ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "date_debut", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Start Date"]);
        yield "
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "date_debut", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "date_debut", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "errors", [], "any", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 16
            yield "                    <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 16), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "            </div>

            <div class=\"mb-3\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "date_fin", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "form-label"], "label" => "End Date"]);
        yield "
                ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "date_fin", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "date_fin", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "errors", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 24
            yield "                    <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 24), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "            </div>

            <div class=\"mb-3\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "titreevents", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Event Title"]);
        yield "
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "titreevents", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "titreevents", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 32
            yield "                    <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 32), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "            </div>

            <div class=\"mb-3\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "descriptionevents", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Description"]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "descriptionevents", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "descriptionevents", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 40
            yield "                    <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 40), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </div>

            <div class=\"mb-3\">
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "image1events", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image 1"]);
        yield "
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "image1events", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "image1events", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 48
            yield "                    <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 48), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "            </div>

            <div class=\"mb-3\">
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "image2events", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Image 2"]);
        yield "
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "image2events", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "image2events", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 56
            yield "                    <div class=\"text-danger mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 56), "html", null, true);
            yield "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "            </div>

            <div class=\"form-actions mt-4\">
                <button type=\"submit\" class=\"btn btn-success\">Create Event</button>
                <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-secondary\">Back to List</a>
            </div>
            ";
        // line 64
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'form_end');
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
        return "event/new.html.twig";
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
        return array (  274 => 64,  269 => 62,  263 => 58,  254 => 56,  250 => 55,  246 => 54,  242 => 53,  237 => 50,  228 => 48,  224 => 47,  220 => 46,  216 => 45,  211 => 42,  202 => 40,  198 => 39,  194 => 38,  190 => 37,  185 => 34,  176 => 32,  172 => 31,  168 => 30,  164 => 29,  159 => 26,  150 => 24,  146 => 23,  142 => 22,  138 => 21,  133 => 18,  124 => 16,  120 => 15,  116 => 14,  112 => 13,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}New Event{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Create New Event</h4>
        </div>
        <div class=\"card-body\">
            {{ form_start(form) }}
            <div class=\"mb-3\">
                {{ form_label(form.date_debut, 'Start Date', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.date_debut, {'attr': {'class': 'form-control'}}) }}
                {% for error in form.date_debut.vars.errors %}
                    <div class=\"text-danger mt-1\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.date_fin, 'End Date', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.date_fin, {'attr': {'class': 'form-control'}}) }}
                {% for error in form.date_fin.vars.errors %}
                    <div class=\"text-danger mt-1\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.titreevents, 'Event Title', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.titreevents, {'attr': {'class': 'form-control'}}) }}
                {% for error in form.titreevents.vars.errors %}
                    <div class=\"text-danger mt-1\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.descriptionevents, 'Description', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.descriptionevents, {'attr': {'class': 'form-control'}}) }}
                {% for error in form.descriptionevents.vars.errors %}
                    <div class=\"text-danger mt-1\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.image1events, 'Image 1', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.image1events, {'attr': {'class': 'form-control'}}) }}
                {% for error in form.image1events.vars.errors %}
                    <div class=\"text-danger mt-1\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.image2events, 'Image 2', {'label_attr': {'class': 'form-label'}}) }}
                {{ form_widget(form.image2events, {'attr': {'class': 'form-control'}}) }}
                {% for error in form.image2events.vars.errors %}
                    <div class=\"text-danger mt-1\">{{ error.message }}</div>
                {% endfor %}
            </div>

            <div class=\"form-actions mt-4\">
                <button type=\"submit\" class=\"btn btn-success\">Create Event</button>
                <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-secondary\">Back to List</a>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "event/new.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\event\\new.html.twig");
    }
}
