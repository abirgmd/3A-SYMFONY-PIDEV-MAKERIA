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

/* event/_list.html.twig */
class __TwigTemplate_c6a77d73a347445458853ac629b01b22 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_list.html.twig"));

        // line 1
        yield "<div class=\"list_pg_1r1 clearfix\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 2, $this->source); })()), "items", [], "any", false, false, false, 2));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 3
            yield "        <div class=\"col-md-4 mb-4\">
            <div class=\"blog_h_1i\">
                <a href=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bdetail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 5)]), "html", null, true);
            yield "\">
                    <img src=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image1events", [], "any", false, false, false, 6), "html", null, true);
            yield "\" class=\"iw\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titreevents", [], "any", false, false, false, 6), "html", null, true);
            yield "\">
                </a>
                <h4>
                    <a href=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bdetail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 9)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titreevents", [], "any", false, false, false, 9), "html", null, true);
            yield "</a>
                </h4>
                <h5 class=\"mgt\">
                    <a class=\"button_link\" href=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bdetail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            yield "\">View</a>
                </h5>
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        // line 16
        if (!$context['_iterated']) {
            // line 17
            yield "        <p class=\"text-center\">No events found.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "</div>

<div class=\"pagination\">
    ";
        // line 22
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()));
        yield "
</div>
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
        return "event/_list.html.twig";
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
        return array (  103 => 22,  98 => 19,  91 => 17,  89 => 16,  80 => 12,  72 => 9,  64 => 6,  60 => 5,  56 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"list_pg_1r1 clearfix\">
    {% for event in pagination.items %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"blog_h_1i\">
                <a href=\"{{ path('app_bdetail', {'id': event.id}) }}\">
                    <img src=\"{{ event.image1events }}\" class=\"iw\" alt=\"{{ event.titreevents }}\">
                </a>
                <h4>
                    <a href=\"{{ path('app_bdetail', {'id': event.id}) }}\">{{ event.titreevents }}</a>
                </h4>
                <h5 class=\"mgt\">
                    <a class=\"button_link\" href=\"{{ path('app_bdetail', {'id': event.id}) }}\">View</a>
                </h5>
            </div>
        </div>
    {% else %}
        <p class=\"text-center\">No events found.</p>
    {% endfor %}
</div>

<div class=\"pagination\">
    {{ knp_pagination_render(pagination) }}
</div>
", "event/_list.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\event\\_list.html.twig");
    }
}
