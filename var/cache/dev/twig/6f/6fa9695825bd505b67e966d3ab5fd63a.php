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

/* paiement/new.html.twig */
class __TwigTemplate_786b34e4aac77896c77a673d27668877 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/new.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "paiement/new.html.twig", 1);
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

        yield "Payer votre commande";
        
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
    body {
        background-color: #f3f4f6;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .form-container {
        max-width: 900px;
        margin: 50px auto;
        padding: 20px 40px;
        background-color: #fff;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        font-size: 32px;
        color: #b11d85;
        margin-bottom: 30px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .payment-image {
        display: block;
        margin-bottom: 20px;
    }

    .payment-methods-container {
        margin-bottom: 20px;
    }

    .payment-methods-label {
        font-size: 20px;
        color: #b11d85;
        display: block;
        margin-bottom: 15px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .radio-option {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .radio-option input[type=\"radio\"] {
        margin-right: 10px;
        width: auto;
    }

    .radio-option label {
        font-size: 16px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    .row {
        display: flex;
        gap: 15px;
    }

    .col {
        flex: 1;
    }

    .payer-btn {
        width: 100%;
        padding: 12px;
        background-color: #b11d85;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: bold;
        margin-top: 15px;
    }

    .payer-btn:hover {
        background-color: #a01a7a;
    }

    .form-check-label {
        display: none;
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 123
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

        // line 124
        yield "<div class=\"form-container\">
    <h1>PAYER VOTRE COMMANDE</h1>

    ";
        // line 127
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "method" => "POST"]]);
        yield "

    <div class=\"payment-methods-container\">
        ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "PaymentMethod", [], "any", false, false, false, 130), 'label', ["label_attr" => ["class" => "payment-methods-label"], "label" => "PAYMENT METHODS"]);
        yield "

        <div style=\"display: none;\">
            ";
        // line 133
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "PaymentMethod", [], "any", false, false, false, 133), 'widget');
        yield "
        </div>

        <div class=\"radio-option\">
            <input type=\"radio\" id=\"credit_card\" name=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "PaymentMethod", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "full_name", [], "any", false, false, false, 137), "html", null, true);
        yield "\" value=\"Credit Card\" checked>
            <label for=\"credit_card\">Credit Card</label>
        </div>

        <div class=\"radio-option\">
            <input type=\"radio\" id=\"debit_card\" name=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "PaymentMethod", [], "any", false, false, false, 142), "vars", [], "any", false, false, false, 142), "full_name", [], "any", false, false, false, 142), "html", null, true);
        yield "\" value=\"Debit Card\">
            <label for=\"debit_card\">Debit Card</label>
        </div>

        <div class=\"radio-option\">
            <input type=\"radio\" id=\"paypal\" name=\"";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "PaymentMethod", [], "any", false, false, false, 147), "vars", [], "any", false, false, false, 147), "full_name", [], "any", false, false, false, 147), "html", null, true);
        yield "\" value=\"Paypal\">
            <label for=\"paypal\">Paypal</label>
        </div>

        ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "PaymentMethod", [], "any", false, false, false, 151), 'errors');
        yield "
    </div>

    <div class=\"form-group\">
        <label for=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "cardDetails", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155), "id", [], "any", false, false, false, 155), "html", null, true);
        yield "\">Card Details</label>
        ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "cardDetails", [], "any", false, false, false, 156), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom et prénom du titulaire"]]);
        yield "
        ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "cardDetails", [], "any", false, false, false, 157), 'errors');
        yield "
    </div>

    <div class=\"form-group\">
        <label for=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "CardNumber", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161), "html", null, true);
        yield "\">Card Number</label>
        ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "CardNumber", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le numéro de carte"]]);
        yield "
        ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "CardNumber", [], "any", false, false, false, 163), 'errors');
        yield "
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "expiryDate", [], "any", false, false, false, 169), "vars", [], "any", false, false, false, 169), "id", [], "any", false, false, false, 169), "html", null, true);
        yield "\">Expiry Date</label>
                ";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "expiryDate", [], "any", false, false, false, 170), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "expiryDate", [], "any", false, false, false, 171), 'errors');
        yield "
            </div>
        </div>
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "CVV", [], "any", false, false, false, 176), "vars", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176), "html", null, true);
        yield "\">CVV</label>
                ";
        // line 177
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "CVV", [], "any", false, false, false, 177), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez le code de sécurité (3 chiffres)", "maxlength" => "3"]]);
        yield "
                ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "CVV", [], "any", false, false, false, 178), 'errors');
        yield "
            </div>
        </div>
    </div>

    <a href=\"";
        // line 183
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("success_page");
        yield "\">
    <button type=\"button\" class=\"payer-btn\">PAYER</button>
</a>

    ";
        // line 187
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), 'form_end');
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
        return "paiement/new.html.twig";
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
        return array (  365 => 187,  358 => 183,  350 => 178,  346 => 177,  342 => 176,  334 => 171,  330 => 170,  326 => 169,  317 => 163,  313 => 162,  309 => 161,  302 => 157,  298 => 156,  294 => 155,  287 => 151,  280 => 147,  272 => 142,  264 => 137,  257 => 133,  251 => 130,  245 => 127,  240 => 124,  227 => 123,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Payer votre commande{% endblock %}

{% block stylesheets %}
<style>
    body {
        background-color: #f3f4f6;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .form-container {
        max-width: 900px;
        margin: 50px auto;
        padding: 20px 40px;
        background-color: #fff;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        border-radius: 8px;
    }

    h1 {
        text-align: center;
        font-size: 32px;
        color: #b11d85;
        margin-bottom: 30px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .payment-image {
        display: block;
        margin-bottom: 20px;
    }

    .payment-methods-container {
        margin-bottom: 20px;
    }

    .payment-methods-label {
        font-size: 20px;
        color: #b11d85;
        display: block;
        margin-bottom: 15px;
        text-transform: uppercase;
        font-weight: bold;
    }

    .radio-option {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .radio-option input[type=\"radio\"] {
        margin-right: 10px;
        width: auto;
    }

    .radio-option label {
        font-size: 16px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    .row {
        display: flex;
        gap: 15px;
    }

    .col {
        flex: 1;
    }

    .payer-btn {
        width: 100%;
        padding: 12px;
        background-color: #b11d85;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 18px;
        cursor: pointer;
        text-transform: uppercase;
        font-weight: bold;
        margin-top: 15px;
    }

    .payer-btn:hover {
        background-color: #a01a7a;
    }

    .form-check-label {
        display: none;
    }

    .invalid-feedback {
        color: #dc3545;
        font-size: 14px;
        margin-top: 5px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"form-container\">
    <h1>PAYER VOTRE COMMANDE</h1>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'method': 'POST'}}) }}

    <div class=\"payment-methods-container\">
        {{ form_label(form.PaymentMethod, 'PAYMENT METHODS', {'label_attr': {'class': 'payment-methods-label'}}) }}

        <div style=\"display: none;\">
            {{ form_widget(form.PaymentMethod) }}
        </div>

        <div class=\"radio-option\">
            <input type=\"radio\" id=\"credit_card\" name=\"{{ form.PaymentMethod.vars.full_name }}\" value=\"Credit Card\" checked>
            <label for=\"credit_card\">Credit Card</label>
        </div>

        <div class=\"radio-option\">
            <input type=\"radio\" id=\"debit_card\" name=\"{{ form.PaymentMethod.vars.full_name }}\" value=\"Debit Card\">
            <label for=\"debit_card\">Debit Card</label>
        </div>

        <div class=\"radio-option\">
            <input type=\"radio\" id=\"paypal\" name=\"{{ form.PaymentMethod.vars.full_name }}\" value=\"Paypal\">
            <label for=\"paypal\">Paypal</label>
        </div>

        {{ form_errors(form.PaymentMethod) }}
    </div>

    <div class=\"form-group\">
        <label for=\"{{ form.cardDetails.vars.id }}\">Card Details</label>
        {{ form_widget(form.cardDetails, {'attr': {'class': 'form-control', 'placeholder': 'Nom et prénom du titulaire'}}) }}
        {{ form_errors(form.cardDetails) }}
    </div>

    <div class=\"form-group\">
        <label for=\"{{ form.CardNumber.vars.id }}\">Card Number</label>
        {{ form_widget(form.CardNumber, {'attr': {'class': 'form-control', 'placeholder': 'Entrez le numéro de carte'}}) }}
        {{ form_errors(form.CardNumber) }}
    </div>

    <div class=\"row\">
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"{{ form.expiryDate.vars.id }}\">Expiry Date</label>
                {{ form_widget(form.expiryDate, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.expiryDate) }}
            </div>
        </div>
        <div class=\"col\">
            <div class=\"form-group\">
                <label for=\"{{ form.CVV.vars.id }}\">CVV</label>
                {{ form_widget(form.CVV, {'attr': {'class': 'form-control', 'placeholder': 'Entrez le code de sécurité (3 chiffres)', 'maxlength': '3'}}) }}
                {{ form_errors(form.CVV) }}
            </div>
        </div>
    </div>

    <a href=\"{{ path('success_page') }}\">
    <button type=\"button\" class=\"payer-btn\">PAYER</button>
</a>

    {{ form_end(form) }}
</div>
{% endblock %}
", "paiement/new.html.twig", "C:\\Users\\hp\\Downloads\\wetransfer_esprit-zip_2025-03-03_1218\\esprit\\esprit\\templates\\paiement\\new.html.twig");
    }
}
