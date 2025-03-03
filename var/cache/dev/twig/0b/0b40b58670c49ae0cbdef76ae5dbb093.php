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

/* facture/_form.html.twig */
class __TwigTemplate_23b7f1dea43be926ebecd37a8eab8d82 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["id" => "facture-form", "novalidate" => "novalidate"]]);
        yield "
    <div class=\"form-group\">
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "tva", [], "any", false, false, false, 4), 'label');
        yield "
        ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "tva", [], "any", false, false, false, 5), 'widget', ["attr" => ["class" => "form-control", "min" => "0", "max" => "100", "step" => "0.01", "type" => "number"]]);
        // line 13
        yield "
        <div class=\"invalid-feedback\">
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "tva", [], "any", false, false, false, 15), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "montantTtc", [], "any", false, false, false, 20), 'label');
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "montantTtc", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "min" => "0", "step" => "0.01", "type" => "number"]]);
        // line 28
        yield "
        <div class=\"invalid-feedback\">
            ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "montantTtc", [], "any", false, false, false, 30), 'errors');
        yield "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "montantDon", [], "any", false, false, false, 35), 'label');
        yield "
        ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "montantDon", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "min" => "0", "step" => "0.01", "type" => "number"]]);
        // line 43
        yield "
        <div class=\"invalid-feedback\">
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "montantDon", [], "any", false, false, false, 45), 'errors');
        yield "
        </div>
    </div>

    <button class=\"btn btn-primary\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 49, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
";
        // line 50
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        yield "

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('facture-form');
    const tvaInput = form.querySelector('[name\$=\"[tva]\"]');
    const montantTtcInput = form.querySelector('[name\$=\"[montantTtc]\"]');
    const montantDonInput = form.querySelector('[name\$=\"[montantDon]\"]');

    form.addEventListener('submit', function(event) {
        let isValid = true;

        // Validation TVA (pourcentage entre 0 et 100)
        const tva = parseFloat(tvaInput.value);
        if (isNaN(tva) || tva < 0 || tva > 100) {
            tvaInput.classList.add('is-invalid');
            tvaInput.nextElementSibling.textContent = 'La TVA doit être un pourcentage entre 0 et 100';
            isValid = false;
        } else {
            tvaInput.classList.remove('is-invalid');
        }

        // Validation Montant TTC (positif)
        const montantTtc = parseFloat(montantTtcInput.value);
        if (isNaN(montantTtc) || montantTtc <= 0) {
            montantTtcInput.classList.add('is-invalid');
            montantTtcInput.nextElementSibling.textContent = 'Le montant TTC doit être positif';
            isValid = false;
        } else {
            montantTtcInput.classList.remove('is-invalid');
        }

        // Validation Montant Don (inférieur au montant TTC)
        const montantDon = parseFloat(montantDonInput.value);
        if (isNaN(montantDon) || montantDon < 0 || montantDon >= montantTtc) {
            montantDonInput.classList.add('is-invalid');
            montantDonInput.nextElementSibling.textContent = 'Le montant du don doit être positif et inférieur au montant TTC';
            isValid = false;
        } else {
            montantDonInput.classList.remove('is-invalid');
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "facture/_form.html.twig";
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
        return array (  110 => 50,  106 => 49,  99 => 45,  95 => 43,  93 => 36,  89 => 35,  81 => 30,  77 => 28,  75 => 21,  71 => 20,  63 => 15,  59 => 13,  57 => 5,  53 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/facture/_form.html.twig #}
{{ form_start(form, {'attr': {'id': 'facture-form', 'novalidate': 'novalidate'}}) }}
    <div class=\"form-group\">
        {{ form_label(form.tva) }}
        {{ form_widget(form.tva, {
            'attr': {
                'class': 'form-control',
                'min': '0',
                'max': '100',
                'step': '0.01',
                'type': 'number'
            }
        }) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.tva) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.montantTtc) }}
        {{ form_widget(form.montantTtc, {
            'attr': {
                'class': 'form-control',
                'min': '0',
                'step': '0.01',
                'type': 'number'
            }
        }) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.montantTtc) }}
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.montantDon) }}
        {{ form_widget(form.montantDon, {
            'attr': {
                'class': 'form-control',
                'min': '0',
                'step': '0.01',
                'type': 'number'
            }
        }) }}
        <div class=\"invalid-feedback\">
            {{ form_errors(form.montantDon) }}
        </div>
    </div>

    <button class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('facture-form');
    const tvaInput = form.querySelector('[name\$=\"[tva]\"]');
    const montantTtcInput = form.querySelector('[name\$=\"[montantTtc]\"]');
    const montantDonInput = form.querySelector('[name\$=\"[montantDon]\"]');

    form.addEventListener('submit', function(event) {
        let isValid = true;

        // Validation TVA (pourcentage entre 0 et 100)
        const tva = parseFloat(tvaInput.value);
        if (isNaN(tva) || tva < 0 || tva > 100) {
            tvaInput.classList.add('is-invalid');
            tvaInput.nextElementSibling.textContent = 'La TVA doit être un pourcentage entre 0 et 100';
            isValid = false;
        } else {
            tvaInput.classList.remove('is-invalid');
        }

        // Validation Montant TTC (positif)
        const montantTtc = parseFloat(montantTtcInput.value);
        if (isNaN(montantTtc) || montantTtc <= 0) {
            montantTtcInput.classList.add('is-invalid');
            montantTtcInput.nextElementSibling.textContent = 'Le montant TTC doit être positif';
            isValid = false;
        } else {
            montantTtcInput.classList.remove('is-invalid');
        }

        // Validation Montant Don (inférieur au montant TTC)
        const montantDon = parseFloat(montantDonInput.value);
        if (isNaN(montantDon) || montantDon < 0 || montantDon >= montantTtc) {
            montantDonInput.classList.add('is-invalid');
            montantDonInput.nextElementSibling.textContent = 'Le montant du don doit être positif et inférieur au montant TTC';
            isValid = false;
        } else {
            montantDonInput.classList.remove('is-invalid');
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});
</script>", "facture/_form.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\facture\\_form.html.twig");
    }
}
