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

/* page/blog_detail.html.twig */
class __TwigTemplate_724e0464e6b176505e7c55a7281ac975 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/blog_detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/blog_detail.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/blog_detail.html.twig", 1);
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

        yield " Event Detail - ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    /* General Event Section */
    #event_details {
        background-color: #f9f9f9;
        padding: 30px 0;
    }

    .event-card {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        transition: all 0.3s ease;
        width: 100%;
    }

    .event-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Main Event Image */
    .event-image {
        width: 100%;
        max-width: 260px;
        height: 260px;
        border-radius: 15px;
        object-fit: cover;
        margin-bottom: 20px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    /* Event Title */
    .event-title {
        font-size: 2.5rem;
        color: #333;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: center;
    }

    /* Event Description */
    .event-description {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 25px;
        text-align: justify;
    }

    /* Event Dates */
    .event-dates {
        font-size: 1.1rem;
        color: #666;
        margin-top: 10px;
        padding: 15px;
        background-color: #f1f1f1;
        border-radius: 10px;
    }

    .event-dates h6 {
        margin-top: 10px;
        font-size: 1rem;
    }

    .event-dates i {
        margin-right: 10px;
    }

    /* Breadcrumb Navigation */
    #photograph {
        padding: 20px 0;
        background-color: #fafafa;
    }

    .photograph p {
        font-size: 1.2rem;
        color: #555;
    }

    .photograph .photo_tab {
        color: #b11d85;
    }

    /* Comment Section */
    .comment-form {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
    }

    .comment-form h3 {
        margin-bottom: 20px;
        color: #333;
    }

    .comment-form label {
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
    }

    .comment-form input, .comment-form textarea {
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .comment-form button {
        background-color: #b11d85;
        color: white;
        border-radius: 5px;
        padding: 12px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .comment-form button:hover {
        background-color: #9b1573;
    }

    /* Comment Display Section */
    .comment-card {
        background-color: #f8f9fa;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .comment-card h5 {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 10px;
    }

    .comment-card p {
        font-size: 1rem;
        margin-bottom: 10px;
        color: #555;
    }

    .comment-card small {
        font-size: 0.875rem;
        color: #6c757d;
    }

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 159
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

        // line 160
        yield "<!-- Breadcrumb Navigation -->
<section id=\"photograph\" class=\"clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"photograph clearfix\">
                <p><a href=\"#\">Home</a> > <span class=\"photo_tab\">Event Detail</span></p>
            </div>
        </div>
    </div>
</section>

<!-- Event Details Section -->
<section id=\"event_details\" class=\"container mt-5\">
    <div class=\"row\">
        <!-- Main Content Section -->
        <div class=\"col-md-12\">
            <!-- Event Card -->
            <div class=\"event-card\">
                <!-- Event Image 1 (Main Image) -->
                <img src=\"";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 179, $this->source); })()), "image1events", [], "any", false, false, false, 179), "html", null, true);
        yield "\" class=\"event-image\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 179, $this->source); })()), "titreevents", [], "any", false, false, false, 179), "html", null, true);
        yield "\">

                <div class=\"event-details\">
                    <!-- Event Title -->
                    <h1 class=\"event-title\">";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 183, $this->source); })()), "titreevents", [], "any", false, false, false, 183), "html", null, true);
        yield "</h1>

                    <!-- Event Description -->
                    <p class=\"event-description\">";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 186, $this->source); })()), "descriptionevents", [], "any", false, false, false, 186), "html", null, true);
        yield "</p>

                    <!-- Event Dates -->
                    <div class=\"event-dates\">
                        <h6>
                            <i class=\"fa fa-calendar col_pink\" style=\"margin-right:5px;\"></i>
                            <strong>Start Date: </strong>";
        // line 192
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 192, $this->source); })()), "getDateDebut", [], "method", false, false, false, 192), "F d, Y"), "html", null, true);
        yield "
                        </h6>
                        <h6>
                            <i class=\"fa fa-calendar col_pink\" style=\"margin-right:5px;\"></i>
                            <strong>End Date: </strong>";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 196, $this->source); })()), "getDateFin", [], "method", false, false, false, 196), "F d, Y"), "html", null, true);
        yield "
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comment Section -->
<section id=\"comments_section\" class=\"container\">
    <h3>Leave a Comment</h3>
    <div class=\"comment-form\">
        ";
        // line 209
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 209, $this->source); })()), 'form_start');
        yield "
        
        <!-- Nom du Commentaireur -->
        <div class=\"form-group\">
            ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 213, $this->source); })()), "nomcomment", [], "any", false, false, false, 213), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Enter your name"]]);
        yield "
        </div>

        <!-- Heure du Commentaire -->
        <div class=\"form-group\">
            ";
        // line 218
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 218, $this->source); })()), "timecomment", [], "any", false, false, false, 218), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Select the date"]]);
        yield "
        </div>

        <!-- Texte du Commentaire -->
        <div class=\"form-group\">
            ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 223, $this->source); })()), "text_commentaire", [], "any", false, false, false, 223), 'row', ["attr" => ["class" => "form-control", "rows" => "4", "placeholder" => "Write your comment here"]]);
        yield "
        </div>

        <!-- Bouton de soumission -->
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Submit </button>
        </div>
        
        ";
        // line 231
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 231, $this->source); })()), 'form_end');
        yield "
    </div>
</section>

<!-- Display Comments Section -->
<section id=\"comments_display\" class=\"container mt-5\">
    <h3>Comments</h3>
    ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 238, $this->source); })()), "commentaires", [], "any", false, false, false, 238));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 239
            yield "    <div class=\"comment-card\">
        <h5>";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "nomcomment", [], "any", false, false, false, 240), "html", null, true);
            yield "</h5>
        <p>";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "getTextCommentaire", [], "method", false, false, false, 241), "html", null, true);
            yield "</p>
        <small>Posted on ";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "timecomment", [], "any", false, false, false, 242), "F d, Y"), "html", null, true);
            yield "</small>
    </div>
    ";
            $context['_iterated'] = true;
        }
        // line 244
        if (!$context['_iterated']) {
            // line 245
            yield "    <p>No comments yet. Be the first to comment!</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        yield "</section>
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
        return "page/blog_detail.html.twig";
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
        return array (  420 => 247,  413 => 245,  411 => 244,  404 => 242,  400 => 241,  396 => 240,  393 => 239,  388 => 238,  378 => 231,  367 => 223,  359 => 218,  351 => 213,  344 => 209,  328 => 196,  321 => 192,  312 => 186,  306 => 183,  297 => 179,  276 => 160,  263 => 159,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %} Event Detail - {% endblock %}

{% block stylesheets %}
<style>
    /* General Event Section */
    #event_details {
        background-color: #f9f9f9;
        padding: 30px 0;
    }

    .event-card {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        transition: all 0.3s ease;
        width: 100%;
    }

    .event-card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    /* Main Event Image */
    .event-image {
        width: 100%;
        max-width: 260px;
        height: 260px;
        border-radius: 15px;
        object-fit: cover;
        margin-bottom: 20px;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    /* Event Title */
    .event-title {
        font-size: 2.5rem;
        color: #333;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: center;
    }

    /* Event Description */
    .event-description {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 25px;
        text-align: justify;
    }

    /* Event Dates */
    .event-dates {
        font-size: 1.1rem;
        color: #666;
        margin-top: 10px;
        padding: 15px;
        background-color: #f1f1f1;
        border-radius: 10px;
    }

    .event-dates h6 {
        margin-top: 10px;
        font-size: 1rem;
    }

    .event-dates i {
        margin-right: 10px;
    }

    /* Breadcrumb Navigation */
    #photograph {
        padding: 20px 0;
        background-color: #fafafa;
    }

    .photograph p {
        font-size: 1.2rem;
        color: #555;
    }

    .photograph .photo_tab {
        color: #b11d85;
    }

    /* Comment Section */
    .comment-form {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
    }

    .comment-form h3 {
        margin-bottom: 20px;
        color: #333;
    }

    .comment-form label {
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
    }

    .comment-form input, .comment-form textarea {
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .comment-form button {
        background-color: #b11d85;
        color: white;
        border-radius: 5px;
        padding: 12px;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .comment-form button:hover {
        background-color: #9b1573;
    }

    /* Comment Display Section */
    .comment-card {
        background-color: #f8f9fa;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .comment-card h5 {
        font-size: 1.2rem;
        color: #333;
        margin-bottom: 10px;
    }

    .comment-card p {
        font-size: 1rem;
        margin-bottom: 10px;
        color: #555;
    }

    .comment-card small {
        font-size: 0.875rem;
        color: #6c757d;
    }

</style>
{% endblock %}

{% block body %}
<!-- Breadcrumb Navigation -->
<section id=\"photograph\" class=\"clearfix\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"photograph clearfix\">
                <p><a href=\"#\">Home</a> > <span class=\"photo_tab\">Event Detail</span></p>
            </div>
        </div>
    </div>
</section>

<!-- Event Details Section -->
<section id=\"event_details\" class=\"container mt-5\">
    <div class=\"row\">
        <!-- Main Content Section -->
        <div class=\"col-md-12\">
            <!-- Event Card -->
            <div class=\"event-card\">
                <!-- Event Image 1 (Main Image) -->
                <img src=\"{{ event.image1events }}\" class=\"event-image\" alt=\"{{ event.titreevents }}\">

                <div class=\"event-details\">
                    <!-- Event Title -->
                    <h1 class=\"event-title\">{{ event.titreevents }}</h1>

                    <!-- Event Description -->
                    <p class=\"event-description\">{{ event.descriptionevents }}</p>

                    <!-- Event Dates -->
                    <div class=\"event-dates\">
                        <h6>
                            <i class=\"fa fa-calendar col_pink\" style=\"margin-right:5px;\"></i>
                            <strong>Start Date: </strong>{{ event.getDateDebut()|date('F d, Y') }}
                        </h6>
                        <h6>
                            <i class=\"fa fa-calendar col_pink\" style=\"margin-right:5px;\"></i>
                            <strong>End Date: </strong>{{ event.getDateFin()|date('F d, Y') }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comment Section -->
<section id=\"comments_section\" class=\"container\">
    <h3>Leave a Comment</h3>
    <div class=\"comment-form\">
        {{ form_start(commentaireForm) }}
        
        <!-- Nom du Commentaireur -->
        <div class=\"form-group\">
            {{ form_row(commentaireForm.nomcomment, {'attr': {'class': 'form-control', 'placeholder': 'Enter your name'}}) }}
        </div>

        <!-- Heure du Commentaire -->
        <div class=\"form-group\">
            {{ form_row(commentaireForm.timecomment, {'attr': {'class': 'form-control', 'placeholder': 'Select the date'}}) }}
        </div>

        <!-- Texte du Commentaire -->
        <div class=\"form-group\">
            {{ form_row(commentaireForm.text_commentaire, {'attr': {'class': 'form-control', 'rows': '4', 'placeholder': 'Write your comment here'}}) }}
        </div>

        <!-- Bouton de soumission -->
        <div class=\"form-group\">
            <button type=\"submit\" class=\"btn btn-primary btn-block\">Submit </button>
        </div>
        
        {{ form_end(commentaireForm) }}
    </div>
</section>

<!-- Display Comments Section -->
<section id=\"comments_display\" class=\"container mt-5\">
    <h3>Comments</h3>
    {% for commentaire in event.commentaires %}
    <div class=\"comment-card\">
        <h5>{{ commentaire.nomcomment }}</h5>
        <p>{{ commentaire.getTextCommentaire() }}</p>
        <small>Posted on {{ commentaire.timecomment|date('F d, Y') }}</small>
    </div>
    {% else %}
    <p>No comments yet. Be the first to comment!</p>
    {% endfor %}
</section>
{% endblock %}
", "page/blog_detail.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\page\\blog_detail.html.twig");
    }
}
