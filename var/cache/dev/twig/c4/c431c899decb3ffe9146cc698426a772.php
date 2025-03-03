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

/* page/payer.html.twig */
class __TwigTemplate_92599ee1b68c9dcc6fc444a6b4105140 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/payer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/payer.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/payer.html.twig", 1);
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

        yield "Payment";
        
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
        yield "    <div class=\"payment-container\">
        <h1 class=\"payment-title\">Payment Methods</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche -->
                <div class=\"image-section\">
                    <img src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/payment.jpg"), "html", null, true);
        yield "\" alt=\"Image de paiement\" class=\"payment-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    <form>
                        <div class=\"payment-options\">
                            <div class=\"payment-option\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"paymentMethod\" id=\"creditCard\" checked>
                                <label class=\"form-check-label\" for=\"creditCard\">
                                    <i class=\"fab fa-cc-mastercard fa-2x pe-2\"></i>Credit Card
                                </label>
                            </div>
                            <div class=\"payment-option\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"paymentMethod\" id=\"debitCard\">
                                <label class=\"form-check-label\" for=\"debitCard\">
                                    <i class=\"fab fa-cc-visa fa-2x pe-2\"></i>Debit Card
                                </label>
                            </div>
                            <div class=\"payment-option\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"paymentMethod\" id=\"paypal\">
                                <label class=\"form-check-label\" for=\"paypal\">
                                    <i class=\"fab fa-cc-paypal fa-2x pe-2\"></i>PayPal
                                </label>
                            </div>
                        </div>

                        <h5 class=\"mt-4\">Card Details</h5>
                        <div class=\"form-group\">
                            <input type=\"text\" id=\"cardName\" class=\"form-control\" placeholder=\"John Smith\" required>
                            <label class=\"form-label\" for=\"cardName\">Name on Card</label>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" id=\"cardNumber\" class=\"form-control\" placeholder=\"Card Number\" required>
                            <label class=\"form-label\" for=\"cardNumber\">Card Number</label>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"col-md-6 mb-4\">
                                <input type=\"text\" id=\"expiryDate\" class=\"form-control\" placeholder=\"MM/YY\" required>
                                <label class=\"form-label\" for=\"expiryDate\">Expiry Date</label>
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                <input type=\"text\" id=\"cvv\" class=\"form-control\" placeholder=\"CVV\" required>
                                <label class=\"form-label\" for=\"cvv\">CVV</label>
                            </div>
                        </div>

                        <button type=\"submit\" class=\"btn checkout-btn mt-4\">Proceed to Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 68
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

        // line 69
        yield "    <link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
    <style>
        body {
            font-family: 'Joti One', Arial, sans-serif;
        }

        .payment-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f3f4f6;
        }

        .payment-title {
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

        .payment-image {
            width: 100%;
            border-radius: 8px;
        }

        .form-section {
            flex: 1;
            max-width: 50%;
        }

        .payment-options {
            margin-top: 20px;
        }

        .payment-option {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 6px;
            background: rgb(243, 243, 243);
        }

        .form-control:focus {
            outline: none;
            background: rgb(232, 232, 232);
        }

        .checkout-btn {
            background-color: #b11d85;
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .checkout-btn:hover {
            background-color: #9c1575;
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
        return "page/payer.html.twig";
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
        return array (  188 => 69,  175 => 68,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Payment{% endblock %}

{% block body %}
    <div class=\"payment-container\">
        <h1 class=\"payment-title\">Payment Methods</h1>

        <div class=\"container\">
            <div class=\"content-wrapper\">
                <!-- Partie image à gauche -->
                <div class=\"image-section\">
                    <img src=\"{{ asset('img/payment.jpg') }}\" alt=\"Image de paiement\" class=\"payment-image\">
                </div>

                <!-- Partie formulaire à droite -->
                <div class=\"form-section\">
                    <form>
                        <div class=\"payment-options\">
                            <div class=\"payment-option\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"paymentMethod\" id=\"creditCard\" checked>
                                <label class=\"form-check-label\" for=\"creditCard\">
                                    <i class=\"fab fa-cc-mastercard fa-2x pe-2\"></i>Credit Card
                                </label>
                            </div>
                            <div class=\"payment-option\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"paymentMethod\" id=\"debitCard\">
                                <label class=\"form-check-label\" for=\"debitCard\">
                                    <i class=\"fab fa-cc-visa fa-2x pe-2\"></i>Debit Card
                                </label>
                            </div>
                            <div class=\"payment-option\">
                                <input class=\"form-check-input\" type=\"radio\" name=\"paymentMethod\" id=\"paypal\">
                                <label class=\"form-check-label\" for=\"paypal\">
                                    <i class=\"fab fa-cc-paypal fa-2x pe-2\"></i>PayPal
                                </label>
                            </div>
                        </div>

                        <h5 class=\"mt-4\">Card Details</h5>
                        <div class=\"form-group\">
                            <input type=\"text\" id=\"cardName\" class=\"form-control\" placeholder=\"John Smith\" required>
                            <label class=\"form-label\" for=\"cardName\">Name on Card</label>
                        </div>
                        <div class=\"form-group\">
                            <input type=\"text\" id=\"cardNumber\" class=\"form-control\" placeholder=\"Card Number\" required>
                            <label class=\"form-label\" for=\"cardNumber\">Card Number</label>
                        </div>
                        <div class=\"form-row\">
                            <div class=\"col-md-6 mb-4\">
                                <input type=\"text\" id=\"expiryDate\" class=\"form-control\" placeholder=\"MM/YY\" required>
                                <label class=\"form-label\" for=\"expiryDate\">Expiry Date</label>
                            </div>
                            <div class=\"col-md-6 mb-4\">
                                <input type=\"text\" id=\"cvv\" class=\"form-control\" placeholder=\"CVV\" required>
                                <label class=\"form-label\" for=\"cvv\">CVV</label>
                            </div>
                        </div>

                        <button type=\"submit\" class=\"btn checkout-btn mt-4\">Proceed to Checkout</button>
                    </form>
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

        .payment-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f3f4f6;
        }

        .payment-title {
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

        .payment-image {
            width: 100%;
            border-radius: 8px;
        }

        .form-section {
            flex: 1;
            max-width: 50%;
        }

        .payment-options {
            margin-top: 20px;
        }

        .payment-option {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 6px;
            background: rgb(243, 243, 243);
        }

        .form-control:focus {
            outline: none;
            background: rgb(232, 232, 232);
        }

        .checkout-btn {
            background-color: #b11d85;
            color: white;
            padding: 12px 20px;
            border-radius: 6px;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        .checkout-btn:hover {
            background-color: #9c1575;
        }
    </style>
{% endblock %}
", "page/payer.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\page\\payer.html.twig");
    }
}
