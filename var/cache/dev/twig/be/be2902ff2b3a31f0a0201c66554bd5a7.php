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

/* page/contact.html.twig */
class __TwigTemplate_959709a62eba8c9d6410e876edcf3464 extends Template
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
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/contact.html.twig", 1);
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

        yield "Contact";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"forum-container\">
        <h1 class=\"forum-title\">Contactez-nous</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche -->
                <div class=\"image-section\">
                <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/11.jpg"), "html", null, true);
        yield "\" alt=\"Image de contact\" class=\"contact-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "contact-form"]]);
        yield "

                    <div class=\"forum-messages\">
                        <div class=\"forum-message\">
                            <div class=\"message-content\">
                                <div class=\"form-row\">
                                    <div class=\"form-group\">
                                        ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "Date_Rec", [], "any", false, false, false, 25), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "Images_Reclamation1", [], "any", false, false, false, 28), 'row');
        yield "
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"form-group\">
                                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "Images_Reclamation2", [], "any", false, false, false, 34), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "Description_Rec", [], "any", false, false, false, 37), 'row');
        yield "
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"form-group\">
                                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "Stat_Rec", [], "any", false, false, false, 43), 'row');
        yield "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "ID_Article", [], "any", false, false, false, 46), 'row');
        yield "
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"form-group\">
                                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "ID_Utilisateur", [], "any", false, false, false, 52), 'row');
        yield "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-submit\">
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </div>

                    ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
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

        // line 71
        yield "<link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
<style>
    body {
        font-family: 'Joti One', Arial, sans-serif;
    }

    .forum-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f3f4f6;
    }

    .forum-title {
        font-size: 2.5em;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .content-wrapper {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .image-section {
        flex: 1;
        max-width: 50%;
    }

    .contact-image {
        width: 100%;
        border-radius: 8px;
    }

    .form-section {
        flex: 1;
        max-width: 50%;
    }

    .forum-messages {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 20px;
    }

    .forum-message {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        width: 100%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .forum-message:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .message-content .form-row {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .form-group {
        flex: 1;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 10px;
        display: block;
        color: #333;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 6px;
        background: rgb(243, 243, 243); /* Fond rose très clair */
        color: #333;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        background: rgb(232, 232, 232); /* Fond rose clair au focus */
    }

    .btn-primary {
        background-color: #9c1575; /* Rose foncé clair */
        color: #fff;
        padding: 12px 20px;
        font-size: 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #7e0f63; /* Légèrement plus foncé au survol */
    }

    .form-submit {
        text-align: center;
        margin-top: 20px;
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
        return "page/contact.html.twig";
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
        return array (  217 => 71,  204 => 70,  187 => 63,  173 => 52,  164 => 46,  158 => 43,  149 => 37,  143 => 34,  134 => 28,  128 => 25,  118 => 18,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}
    <div class=\"forum-container\">
        <h1 class=\"forum-title\">Contactez-nous</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche -->
                <div class=\"image-section\">
                <img src=\"{{asset('img/11.jpg')}}\" alt=\"Image de contact\" class=\"contact-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    {{ form_start(form, {'attr': {'class': 'contact-form'}}) }}

                    <div class=\"forum-messages\">
                        <div class=\"forum-message\">
                            <div class=\"message-content\">
                                <div class=\"form-row\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.Date_Rec) }}
                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_row(form.Images_Reclamation1) }}
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.Images_Reclamation2) }}
                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_row(form.Description_Rec) }}
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.Stat_Rec) }}
                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_row(form.ID_Article) }}
                                    </div>
                                </div>

                                <div class=\"form-row\">
                                    <div class=\"form-group\">
                                        {{ form_row(form.ID_Utilisateur) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"form-submit\">
                        <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
<style>
    body {
        font-family: 'Joti One', Arial, sans-serif;
    }

    .forum-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f3f4f6;
    }

    .forum-title {
        font-size: 2.5em;
        text-align: center;
        margin-bottom: 40px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .content-wrapper {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .image-section {
        flex: 1;
        max-width: 50%;
    }

    .contact-image {
        width: 100%;
        border-radius: 8px;
    }

    .form-section {
        flex: 1;
        max-width: 50%;
    }

    .forum-messages {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 20px;
    }

    .forum-message {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 20px;
        width: 100%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .forum-message:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .message-content .form-row {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .form-group {
        flex: 1;
    }

    .form-group label {
        font-weight: bold;
        margin-bottom: 10px;
        display: block;
        color: #333;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 6px;
        background: rgb(243, 243, 243); /* Fond rose très clair */
        color: #333;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        background: rgb(232, 232, 232); /* Fond rose clair au focus */
    }

    .btn-primary {
        background-color: #9c1575; /* Rose foncé clair */
        color: #fff;
        padding: 12px 20px;
        font-size: 16px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #7e0f63; /* Légèrement plus foncé au survol */
    }

    .form-submit {
        text-align: center;
        margin-top: 20px;
    }
</style>
{% endblock %}
", "page/contact.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\page\\contact.html.twig");
    }
}
