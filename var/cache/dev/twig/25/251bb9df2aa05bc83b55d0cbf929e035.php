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

/* event/edit.html.twig */
class __TwigTemplate_0d477fdbca9d21cb00ac37e748ba406b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "event/edit.html.twig", 1);
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

        yield "Edit Event";
        
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
            <h4 class=\"card-title\">Edit Event</h4>
        </div>
        <div class=\"card-body\">
            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form-styled"]]);
        yield "

            <div class=\"form-container\">
                <div class=\"form-group\">
                    <label for=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "date_debut", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
                        <strong>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_debut", [], "any", false, true, false, 16), "vars", [], "any", false, true, false, 16), "label", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "date_debut", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "label", [], "any", false, false, false, 16), "Date Début")) : ("Date Début")), "html", null, true);
        yield "</strong>
                    </label>
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "date_debut", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 19
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "date_debut", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19)) > 0)) {
            // line 20
            yield "                        <div class=\"alert alert-danger mt-2\">
                            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "date_debut", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "errors", [], "any", false, false, false, 21));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 22
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 22), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "                        </div>
                    ";
        }
        // line 26
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "date_fin", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        yield "\">
                        <strong>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "date_fin", [], "any", false, true, false, 30), "vars", [], "any", false, true, false, 30), "label", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "date_fin", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "label", [], "any", false, false, false, 30), "Date Fin")) : ("Date Fin")), "html", null, true);
        yield "</strong>
                    </label>
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "date_fin", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 33
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "date_fin", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "errors", [], "any", false, false, false, 33)) > 0)) {
            // line 34
            yield "                        <div class=\"alert alert-danger mt-2\">
                            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "date_fin", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 36
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 36), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "                        </div>
                    ";
        }
        // line 40
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "titreevents", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
        yield "\">
                        <strong>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "titreevents", [], "any", false, true, false, 44), "vars", [], "any", false, true, false, 44), "label", [], "any", true, true, false, 44)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "titreevents", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "label", [], "any", false, false, false, 44), "Titre Event")) : ("Titre Event")), "html", null, true);
        yield "</strong>
                    </label>
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "titreevents", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 47
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "titreevents", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "errors", [], "any", false, false, false, 47)) > 0)) {
            // line 48
            yield "                        <div class=\"alert alert-danger mt-2\">
                            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "titreevents", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "errors", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 50
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 50), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "                        </div>
                    ";
        }
        // line 54
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "descriptionevents", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "\">
                        <strong>";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "descriptionevents", [], "any", false, true, false, 58), "vars", [], "any", false, true, false, 58), "label", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "descriptionevents", [], "any", false, false, false, 58), "vars", [], "any", false, false, false, 58), "label", [], "any", false, false, false, 58), "Description Event")) : ("Description Event")), "html", null, true);
        yield "</strong>
                    </label>
                    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "descriptionevents", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 61
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "descriptionevents", [], "any", false, false, false, 61), "vars", [], "any", false, false, false, 61), "errors", [], "any", false, false, false, 61)) > 0)) {
            // line 62
            yield "                        <div class=\"alert alert-danger mt-2\">
                            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "descriptionevents", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 64
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 64), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "                        </div>
                    ";
        }
        // line 68
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "image1events", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71), "html", null, true);
        yield "\">
                        <strong>";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image1events", [], "any", false, true, false, 72), "vars", [], "any", false, true, false, 72), "label", [], "any", true, true, false, 72)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "image1events", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72), "Image 1 Event")) : ("Image 1 Event")), "html", null, true);
        yield "</strong>
                    </label>
                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "image1events", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 75
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "image1events", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "errors", [], "any", false, false, false, 75)) > 0)) {
            // line 76
            yield "                        <div class=\"alert alert-danger mt-2\">
                            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "image1events", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 78
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 78), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "                        </div>
                    ";
        }
        // line 82
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "image2events", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
        yield "\">
                        <strong>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "image2events", [], "any", false, true, false, 86), "vars", [], "any", false, true, false, 86), "label", [], "any", true, true, false, 86)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "image2events", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "label", [], "any", false, false, false, 86), "Image 2 Event")) : ("Image 2 Event")), "html", null, true);
        yield "</strong>
                    </label>
                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "image2events", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 89
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "image2events", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "errors", [], "any", false, false, false, 89)) > 0)) {
            // line 90
            yield "                        <div class=\"alert alert-danger mt-2\">
                            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "image2events", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 92
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 92), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "                        </div>
                    ";
        }
        // line 96
        yield "                </div>

                <div class=\"form-actions mt-4\">
                    <button type=\"submit\" class=\"btn btn-warning\">Update Event</button>
                    <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-secondary\">Back to List</a>
                </div>
            </div>

            ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
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
        return "event/edit.html.twig";
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
        return array (  362 => 104,  355 => 100,  349 => 96,  345 => 94,  336 => 92,  332 => 91,  329 => 90,  327 => 89,  323 => 88,  318 => 86,  314 => 85,  309 => 82,  305 => 80,  296 => 78,  292 => 77,  289 => 76,  287 => 75,  283 => 74,  278 => 72,  274 => 71,  269 => 68,  265 => 66,  256 => 64,  252 => 63,  249 => 62,  247 => 61,  243 => 60,  238 => 58,  234 => 57,  229 => 54,  225 => 52,  216 => 50,  212 => 49,  209 => 48,  207 => 47,  203 => 46,  198 => 44,  194 => 43,  189 => 40,  185 => 38,  176 => 36,  172 => 35,  169 => 34,  167 => 33,  163 => 32,  158 => 30,  154 => 29,  149 => 26,  145 => 24,  136 => 22,  132 => 21,  129 => 20,  127 => 19,  123 => 18,  118 => 16,  114 => 15,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Edit Event{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Edit Event</h4>
        </div>
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'class': 'form-styled'}}) }}

            <div class=\"form-container\">
                <div class=\"form-group\">
                    <label for=\"{{ form.date_debut.vars.id }}\">
                        <strong>{{ form.date_debut.vars.label|default('Date Début') }}</strong>
                    </label>
                    {{ form_widget(form.date_debut, {'attr': {'class': 'form-control'}}) }}
                    {% if form.date_debut.vars.errors|length > 0 %}
                        <div class=\"alert alert-danger mt-2\">
                            {% for error in form.date_debut.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"{{ form.date_fin.vars.id }}\">
                        <strong>{{ form.date_fin.vars.label|default('Date Fin') }}</strong>
                    </label>
                    {{ form_widget(form.date_fin, {'attr': {'class': 'form-control'}}) }}
                    {% if form.date_fin.vars.errors|length > 0 %}
                        <div class=\"alert alert-danger mt-2\">
                            {% for error in form.date_fin.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"{{ form.titreevents.vars.id }}\">
                        <strong>{{ form.titreevents.vars.label|default('Titre Event') }}</strong>
                    </label>
                    {{ form_widget(form.titreevents, {'attr': {'class': 'form-control'}}) }}
                    {% if form.titreevents.vars.errors|length > 0 %}
                        <div class=\"alert alert-danger mt-2\">
                            {% for error in form.titreevents.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"{{ form.descriptionevents.vars.id }}\">
                        <strong>{{ form.descriptionevents.vars.label|default('Description Event') }}</strong>
                    </label>
                    {{ form_widget(form.descriptionevents, {'attr': {'class': 'form-control'}}) }}
                    {% if form.descriptionevents.vars.errors|length > 0 %}
                        <div class=\"alert alert-danger mt-2\">
                            {% for error in form.descriptionevents.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"{{ form.image1events.vars.id }}\">
                        <strong>{{ form.image1events.vars.label|default('Image 1 Event') }}</strong>
                    </label>
                    {{ form_widget(form.image1events, {'attr': {'class': 'form-control'}}) }}
                    {% if form.image1events.vars.errors|length > 0 %}
                        <div class=\"alert alert-danger mt-2\">
                            {% for error in form.image1events.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"{{ form.image2events.vars.id }}\">
                        <strong>{{ form.image2events.vars.label|default('Image 2 Event') }}</strong>
                    </label>
                    {{ form_widget(form.image2events, {'attr': {'class': 'form-control'}}) }}
                    {% if form.image2events.vars.errors|length > 0 %}
                        <div class=\"alert alert-danger mt-2\">
                            {% for error in form.image2events.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-actions mt-4\">
                    <button type=\"submit\" class=\"btn btn-warning\">Update Event</button>
                    <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-secondary\">Back to List</a>
                </div>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "event/edit.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\event\\edit.html.twig");
    }
}
