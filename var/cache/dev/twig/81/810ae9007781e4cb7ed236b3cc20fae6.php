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

/* produit/new.html.twig */
class __TwigTemplate_34ebbfea54181d3b61a25180452b40ef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/new.html.twig"));

        $this->parent = $this->loadTemplate("dashboard.html.twig", "produit/new.html.twig", 1);
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

        yield "Créer un Nouveau Produit";
        
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
            <h4 class=\"card-title\">Créer un Nouveau Produit</h4>
        </div>
        <div class=\"card-body\">
            ";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form-styled"]]);
        yield "

            <div class=\"form-container\">
                <div class=\"form-group\">
                    <label for=\"nomprod\">Nom du produit</label>
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "nomprod", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 17
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "nomprod", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "errors", [], "any", false, false, false, 17)) > 0)) {
            // line 18
            yield "                        <div class=\"alert-card\">
                            ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nomprod", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "errors", [], "any", false, false, false, 19));
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
                    <label for=\"descriptionprod\">Description</label>
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "descriptionprod", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 29
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "descriptionprod", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "errors", [], "any", false, false, false, 29)) > 0)) {
            // line 30
            yield "                        <div class=\"alert-card\">
                            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "descriptionprod", [], "any", false, false, false, 31), "vars", [], "any", false, false, false, 31), "errors", [], "any", false, false, false, 31));
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
                    <label for=\"prixprod\">Prix</label>
                    ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "prixprod", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 41
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "prixprod", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "errors", [], "any", false, false, false, 41)) > 0)) {
            // line 42
            yield "                        <div class=\"alert-card\">
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "prixprod", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "errors", [], "any", false, false, false, 43));
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
                    <label for=\"nombreProduitsEnStock\">Stock</label>
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nombreProduitsEnStock", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 53
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nombreProduitsEnStock", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "errors", [], "any", false, false, false, 53)) > 0)) {
            // line 54
            yield "                        <div class=\"alert-card\">
                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "nombreProduitsEnStock", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "errors", [], "any", false, false, false, 55));
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
                    <label for=\"sizeprod\">Taille</label>
                    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "sizeprod", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 65
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "sizeprod", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "errors", [], "any", false, false, false, 65)) > 0)) {
            // line 66
            yield "                        <div class=\"alert-card\">
                            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "sizeprod", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "errors", [], "any", false, false, false, 67));
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
                    <label for=\"avantages\">Avantages</label>
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "avantages", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 77
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "avantages", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "errors", [], "any", false, false, false, 77)) > 0)) {
            // line 78
            yield "                        <div class=\"alert-card\">
                            ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "avantages", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "errors", [], "any", false, false, false, 79));
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

                <div class=\"form-group\">
                    <label for=\"categorie\">Catégorie</label>
                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "categorie", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 89
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "categorie", [], "any", false, false, false, 89), "vars", [], "any", false, false, false, 89), "errors", [], "any", false, false, false, 89)) > 0)) {
            // line 90
            yield "                        <div class=\"alert-card\">
                            ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "categorie", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91));
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

                <div class=\"form-group\">
                    <label for=\"image_large\">Image Large</label>
                    ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "image_large", [], "any", false, false, false, 100), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 101
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "image_large", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "errors", [], "any", false, false, false, 101)) > 0)) {
            // line 102
            yield "                        <div class=\"alert-card\">
                            ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "image_large", [], "any", false, false, false, 103), "vars", [], "any", false, false, false, 103), "errors", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 104
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 104), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "                        </div>
                    ";
        }
        // line 108
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"image_small1\">Image Small 1</label>
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "image_small1", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 113
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "image_small1", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "errors", [], "any", false, false, false, 113)) > 0)) {
            // line 114
            yield "                        <div class=\"alert-card\">
                            ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "image_small1", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "errors", [], "any", false, false, false, 115));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 116
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 116), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            yield "                        </div>
                    ";
        }
        // line 120
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"image_small2\">Image Small 2</label>
                    ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "image_small2", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 125
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "image_small2", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "errors", [], "any", false, false, false, 125)) > 0)) {
            // line 126
            yield "                        <div class=\"alert-card\">
                            ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "image_small2", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "errors", [], "any", false, false, false, 127));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 128
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 128), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            yield "                        </div>
                    ";
        }
        // line 132
        yield "                </div>

                <div class=\"form-group\">
                    <label for=\"image_small3\">Image Small 3</label>
                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "image_small3", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control custom-input"]]);
        yield "
                    ";
        // line 137
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "image_small3", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "errors", [], "any", false, false, false, 137)) > 0)) {
            // line 138
            yield "                        <div class=\"alert-card\">
                            ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "image_small3", [], "any", false, false, false, 139), "vars", [], "any", false, false, false, 139), "errors", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 140
                yield "                                <p>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 140), "html", null, true);
                yield "</p>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            yield "                        </div>
                    ";
        }
        // line 144
        yield "                </div>
            </div>

            <div class=\"form-actions text-end\">
                <button type=\"submit\" class=\"btn save-btn\">";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 148, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "</button>
                <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"btn back-btn\">Retour à la liste</a>
            </div>

            ";
        // line 152
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), 'form_end');
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
        return "produit/new.html.twig";
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
        return array (  477 => 152,  471 => 149,  467 => 148,  461 => 144,  457 => 142,  448 => 140,  444 => 139,  441 => 138,  439 => 137,  435 => 136,  429 => 132,  425 => 130,  416 => 128,  412 => 127,  409 => 126,  407 => 125,  403 => 124,  397 => 120,  393 => 118,  384 => 116,  380 => 115,  377 => 114,  375 => 113,  371 => 112,  365 => 108,  361 => 106,  352 => 104,  348 => 103,  345 => 102,  343 => 101,  339 => 100,  333 => 96,  329 => 94,  320 => 92,  316 => 91,  313 => 90,  311 => 89,  307 => 88,  301 => 84,  297 => 82,  288 => 80,  284 => 79,  281 => 78,  279 => 77,  275 => 76,  269 => 72,  265 => 70,  256 => 68,  252 => 67,  249 => 66,  247 => 65,  243 => 64,  237 => 60,  233 => 58,  224 => 56,  220 => 55,  217 => 54,  215 => 53,  211 => 52,  205 => 48,  201 => 46,  192 => 44,  188 => 43,  185 => 42,  183 => 41,  179 => 40,  173 => 36,  169 => 34,  160 => 32,  156 => 31,  153 => 30,  151 => 29,  147 => 28,  141 => 24,  137 => 22,  128 => 20,  124 => 19,  121 => 18,  119 => 17,  115 => 16,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'dashboard.html.twig' %}

{% block title %}Créer un Nouveau Produit{% endblock %}

{% block content %}
    <div class=\"card\">
        <div class=\"card-header\">
            <h4 class=\"card-title\">Créer un Nouveau Produit</h4>
        </div>
        <div class=\"card-body\">
            {{ form_start(form, {'attr': {'class': 'form-styled'}}) }}

            <div class=\"form-container\">
                <div class=\"form-group\">
                    <label for=\"nomprod\">Nom du produit</label>
                    {{ form_widget(form.nomprod, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.nomprod.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.nomprod.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"descriptionprod\">Description</label>
                    {{ form_widget(form.descriptionprod, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.descriptionprod.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.descriptionprod.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"prixprod\">Prix</label>
                    {{ form_widget(form.prixprod, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.prixprod.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.prixprod.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"nombreProduitsEnStock\">Stock</label>
                    {{ form_widget(form.nombreProduitsEnStock, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.nombreProduitsEnStock.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.nombreProduitsEnStock.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"sizeprod\">Taille</label>
                    {{ form_widget(form.sizeprod, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.sizeprod.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.sizeprod.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"avantages\">Avantages</label>
                    {{ form_widget(form.avantages, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.avantages.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.avantages.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"categorie\">Catégorie</label>
                    {{ form_widget(form.categorie, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.categorie.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.categorie.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"image_large\">Image Large</label>
                    {{ form_widget(form.image_large, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.image_large.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.image_large.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"image_small1\">Image Small 1</label>
                    {{ form_widget(form.image_small1, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.image_small1.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.image_small1.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"image_small2\">Image Small 2</label>
                    {{ form_widget(form.image_small2, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.image_small2.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.image_small2.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div class=\"form-group\">
                    <label for=\"image_small3\">Image Small 3</label>
                    {{ form_widget(form.image_small3, {'attr': {'class': 'form-control custom-input'}}) }}
                    {% if form.image_small3.vars.errors|length > 0 %}
                        <div class=\"alert-card\">
                            {% for error in form.image_small3.vars.errors %}
                                <p>{{ error.message }}</p>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"form-actions text-end\">
                <button type=\"submit\" class=\"btn save-btn\">{{ button_label|default('Enregistrer') }}</button>
                <a href=\"{{ path('app_produit_index') }}\" class=\"btn back-btn\">Retour à la liste</a>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "produit/new.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\produit\\new.html.twig");
    }
}
