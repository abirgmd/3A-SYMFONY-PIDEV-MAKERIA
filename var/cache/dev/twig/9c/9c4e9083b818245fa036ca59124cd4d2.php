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

/* evaluation/new.html.twig */
class __TwigTemplate_779b5c6804871318f4fd3d0185863a96 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evaluation/new.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "evaluation/new.html.twig", 1);
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

        yield "Créer une évaluation";
        
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
            <h4 class=\"card-title\">Créer une Nouvelle Évaluation</h4>
        </div>
        <div class=\"card-body\">
            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form-styled"]]);
        yield "

            <div class=\"form-container\">
                <div class=\"form-group\">
                    <label for=\"userName\">Nom d'utilisateur</label>
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "userName", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 17
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "userName", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) {
            // line 18
            yield "                        <div class=\"alert-card\">
                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "userName", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 20
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 20), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "                        </div>
                    ";
        }
        // line 24
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"userMail\">Email</label>
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "userMail", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 29
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "userMail", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) {
            // line 30
            yield "                        <div class=\"alert-card\">
                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "userMail", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 32
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 32), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "                        </div>
                    ";
        }
        // line 36
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"reviewText\">Texte de l'évaluation</label>
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "reviewText", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 41
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "reviewText", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41)) > 0)) {
            // line 42
            yield "                        <div class=\"alert-card\">
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "reviewText", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 44
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 44), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            yield "                        </div>
                    ";
        }
        // line 48
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"note\">Note</label>
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "note", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "note", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "                        <div class=\"alert-card\">
                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "note", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 56
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 56), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "                        </div>
                    ";
        }
        // line 60
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"datePublication\">Date de publication</label>
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "datePublication", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 65
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "datePublication", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "errors", [], "any", false, false, false, 65)) > 0)) {
            // line 66
            yield "                        <div class=\"alert-card\">
                            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "datePublication", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 68
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 68), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                        </div>
                    ";
        }
        // line 72
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"produit\">Produit</label>
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "produit", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 77
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "produit", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77)) > 0)) {
            // line 78
            yield "                        <div class=\"alert-card\">
                            ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "produit", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "errors", [], "any", false, false, false, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 80
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 80), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 82
            yield "                        </div>
                    ";
        }
        // line 84
        yield "                </div>

                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn save-btn\">";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 87, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
                    <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_evaluation_index");
        yield "\" class=\"btn back-btn\">Retour à la liste</a>
                </div>
            </div>

            ";
        // line 92
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'form_end');
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
        return "evaluation/new.html.twig";
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
        return array (  317 => 92,  310 => 88,  306 => 87,  301 => 84,  297 => 82,  288 => 80,  284 => 79,  281 => 78,  279 => 77,  275 => 76,  269 => 72,  265 => 70,  256 => 68,  252 => 67,  249 => 66,  247 => 65,  243 => 64,  237 => 60,  233 => 58,  224 => 56,  220 => 55,  217 => 54,  215 => 53,  211 => 52,  205 => 48,  201 => 46,  192 => 44,  188 => 43,  185 => 42,  183 => 41,  179 => 40,  173 => 36,  169 => 34,  160 => 32,  156 => 31,  153 => 30,  151 => 29,  147 => 28,  141 => 24,  137 => 22,  128 => 20,  124 => 19,  121 => 18,  119 => 17,  115 => 16,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Créer une évaluation{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Créer une Nouvelle Évaluation</h4>
        </div>
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'class': 'form-styled'}}) }}

            <div class=\"form-container\">
                <div class=\"form-group\">
                    <label for=\"userName\">Nom d'utilisateur</label>
                    {{ form_widget(form.userName, {'attr': {'class': 'form-control'}}) }}
                    {% if form.userName.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.userName.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"userMail\">Email</label>
                    {{ form_widget(form.userMail, {'attr': {'class': 'form-control'}}) }}
                    {% if form.userMail.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.userMail.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"reviewText\">Texte de l'évaluation</label>
                    {{ form_widget(form.reviewText, {'attr': {'class': 'form-control'}}) }}
                    {% if form.reviewText.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.reviewText.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"note\">Note</label>
                    {{ form_widget(form.note, {'attr': {'class': 'form-control'}}) }}
                    {% if form.note.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.note.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"datePublication\">Date de publication</label>
                    {{ form_widget(form.datePublication, {'attr': {'class': 'form-control'}}) }}
                    {% if form.datePublication.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.datePublication.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"produit\">Produit</label>
                    {{ form_widget(form.produit, {'attr': {'class': 'form-control'}}) }}
                    {% if form.produit.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.produit.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn save-btn\">{{ button_label|default('Enregistrer') }}</button>
                    <a href=\"{{ path('app_evaluation_index') }}\" class=\"btn back-btn\">Retour à la liste</a>
                </div>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "evaluation/new.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\evaluation\\new.html.twig");
    }
}
