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

/* login/login.html.twig */
class __TwigTemplate_cb270815d8e3ae013de6df38bb69cf3f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "login/login.html.twig", 1);
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

        yield "Home - ";
        
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
        yield "    <style>
        body {
            background-color: white;
        }

        .card {
            background-color: #f3fbe2;
        }

        /* Couleur de texte dans le titre */
        .card-header h3 {
            color: #788954;
        }

        /* Bouton de connexion */
        .btn-primary {
            background-color: #788954;
            border-color: #788954;
        }

        .btn-primary:hover {
            background-color: #6f7f46;
            border-color: #6f7f46;
        }

        /* Texte dans les champs d'entrée */
        .form-control {
            border-color: #788954;
        }

        /* Texte du lien */
        a {
            color: #788954;
        }

        a:hover {
            color: #6f7f46;
        }
    </style>

    <div id=\"layoutAuthentication\">
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card-header\">
                                    <h3 class=\"text-center font-weight-light my-4\">Login</h3>
                                </div>
                                <div class=\"card-body\">
                                    <form method=\"post\" action=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                                        <!-- Email field with label above input -->
                                        <label for=\"inputEmail\" class=\"form-label\">Email address</label>
                                        <div class=\"form-floating mb-3\">
                                            <input class=\"form-control\" id=\"inputEmail\" name=\"email\" type=\"email\" placeholder=\"name@example.com\" required />
                                        </div>

                                        <!-- Password field with label above input -->
                                        <label for=\"inputPassword\" class=\"form-label\">Password</label>
                                        <div class=\"form-floating mb-3\">
                                            <input class=\"form-control\" id=\"inputPassword\" name=\"password\" type=\"password\" placeholder=\"Password\" required />
                                        </div>

                                        <!-- Remember Me checkbox -->
                                        <div class=\"form-check mb-3\">
                                            <input class=\"form-check-input\" id=\"inputRememberPassword\" type=\"checkbox\" name=\"remember_me\" />
                                            <label class=\"form-check-label\" for=\"inputRememberPassword\">Remember Password</label>
                                        </div>

                                        <!-- Login Button -->
                                        <div class=\"d-flex align-items-center justify-content-between mt-4 mb-0\">
                                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"card-footer text-center py-3\">
                                    <div class=\"small\"><a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
     
    </div>

<br>
</br>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        yield "\"></script>

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
        return "login/login.html.twig";
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
        return array (  199 => 97,  182 => 83,  153 => 57,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Home - {% endblock %}

{% block body %}
    <style>
        body {
            background-color: white;
        }

        .card {
            background-color: #f3fbe2;
        }

        /* Couleur de texte dans le titre */
        .card-header h3 {
            color: #788954;
        }

        /* Bouton de connexion */
        .btn-primary {
            background-color: #788954;
            border-color: #788954;
        }

        .btn-primary:hover {
            background-color: #6f7f46;
            border-color: #6f7f46;
        }

        /* Texte dans les champs d'entrée */
        .form-control {
            border-color: #788954;
        }

        /* Texte du lien */
        a {
            color: #788954;
        }

        a:hover {
            color: #6f7f46;
        }
    </style>

    <div id=\"layoutAuthentication\">
        <div id=\"layoutAuthentication_content\">
            <main>
                <div class=\"container\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-lg-5\">
                            <div class=\"card shadow-lg border-0 rounded-lg mt-5\">
                                <div class=\"card-header\">
                                    <h3 class=\"text-center font-weight-light my-4\">Login</h3>
                                </div>
                                <div class=\"card-body\">
                                    <form method=\"post\" action=\"{{ path('app_login') }}\">
                                        <!-- Email field with label above input -->
                                        <label for=\"inputEmail\" class=\"form-label\">Email address</label>
                                        <div class=\"form-floating mb-3\">
                                            <input class=\"form-control\" id=\"inputEmail\" name=\"email\" type=\"email\" placeholder=\"name@example.com\" required />
                                        </div>

                                        <!-- Password field with label above input -->
                                        <label for=\"inputPassword\" class=\"form-label\">Password</label>
                                        <div class=\"form-floating mb-3\">
                                            <input class=\"form-control\" id=\"inputPassword\" name=\"password\" type=\"password\" placeholder=\"Password\" required />
                                        </div>

                                        <!-- Remember Me checkbox -->
                                        <div class=\"form-check mb-3\">
                                            <input class=\"form-check-input\" id=\"inputRememberPassword\" type=\"checkbox\" name=\"remember_me\" />
                                            <label class=\"form-check-label\" for=\"inputRememberPassword\">Remember Password</label>
                                        </div>

                                        <!-- Login Button -->
                                        <div class=\"d-flex align-items-center justify-content-between mt-4 mb-0\">
                                            <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class=\"card-footer text-center py-3\">
                                    <div class=\"small\"><a href=\"{{ path('app_register') }}\">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
     
    </div>

<br>
</br>
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js\" crossorigin=\"anonymous\"></script>
    <script src=\"{{ asset('js/scripts.js') }}\"></script>

{% endblock %}
", "login/login.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\login\\login.html.twig");
    }
}
