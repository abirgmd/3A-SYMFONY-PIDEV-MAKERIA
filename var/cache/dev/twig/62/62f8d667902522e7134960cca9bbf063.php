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

/* message/new.html.twig */
class __TwigTemplate_a1bb27f05e16876877cc987b5f17a968 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/new.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "message/new.html.twig", 1);
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

        yield "Create New Message - Makeria";
        
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
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield " ";
        // line 7
        yield "    <style>
        body {
            font-family: 'Joti One', Arial, sans-serif;
            background-color: #f3f4f6;
        }

        /* Styles spécifiques à cette page */
        .form-container {
            max-width: 700px;
            margin: 30px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-container h1 {
            text-align: center;
            font-size: 32px;
            color: #b11d85;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .form-container input,
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .form-container input:focus,
        .form-container select:focus,
        .form-container textarea:focus {
            border-color: #b11d85;
            background-color: #ffffff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 14px 20px;
            background-color: #b11d85;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #8e1668;
        }

        .alert {
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 16px;
            border: 1px solid #f5c6cb;
            color: #721c24;
            background-color: #f8d7da;
        }

        .alert ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .alert li {
            margin: 5px 0;
        }

        .actions {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .actions a {
            padding: 12px 20px;
            background-color: #5d2d53;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            width: 45%;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .actions a:hover {
            background-color: #4a2345;
        }

        /* Styles pour les boutons de reconnaissance vocale */
        .voice-controls {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .voice-controls button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .voice-controls button.start_recording {
            background-color: #28a745;
            color: white;
        }

        .voice-controls button.stop_recording {
            background-color: #dc3545;
            color: white;
            display: none;
        }

        .voice-controls button.clear_text {
            background-color: #ffc107;
            color: black;
        }

        /* Styles pour les messages d'erreur */
        .error-message {
            color: #dc3545;
            font-size: 14px;
            margin-top: -15px;
            margin-bottom: 15px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 157
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

        // line 158
        yield "    <section id=\"content\" class=\"clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"form-container\">
                        <h1>Create New Message</h1>

                        ";
        // line 166
        yield "                        ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "vars", [], "any", false, false, false, 166), "errors", [], "any", false, false, false, 166)) > 0)) {
            // line 167
            yield "                            <div class=\"alert\">
                                <ul>
                                    ";
            // line 169
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 169, $this->source); })()), "vars", [], "any", false, false, false, 169), "errors", [], "any", false, false, false, 169));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 170
                yield "                                        <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 170), "html", null, true);
                yield "</li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "                                </ul>
                            </div>
                        ";
        }
        // line 175
        yield "
                        ";
        // line 177
        yield "                        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), 'form_start');
        yield "
                            <!-- Champ Titre -->
                            <div class=\"form-group\">
                                ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "titremsg", [], "any", false, false, false, 180), 'label');
        yield "
                                <div class=\"voice-controls\">
                                    <button class=\"start_recording\" type=\"button\" data-target=\"message_titremsg\">
                                        <i class=\"fa fa-microphone\"></i> Démarrer l'enregistrement
                                    </button>
                                    <button class=\"stop_recording\" type=\"button\" data-target=\"message_titremsg\">
                                        <i class=\"fa fa-stop\"></i> Arrêter l'enregistrement
                                    </button>
                                    <button class=\"clear_text\" type=\"button\" data-target=\"message_titremsg\">
                                        <i class=\"fa fa-trash\"></i> Effacer
                                    </button>
                                </div>
                                ";
        // line 192
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "titremsg", [], "any", false, false, false, 192), 'widget', ["attr" => ["class" => "form-control", "id" => "message_titremsg"]]);
        yield "
                                ";
        // line 194
        yield "                                <div class=\"error-message\">
                                    ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "titremsg", [], "any", false, false, false, 195), 'errors');
        yield "
                                </div>
                            </div>

                            <!-- Champ Description -->
                            <div class=\"form-group\">
                                ";
        // line 201
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 201, $this->source); })()), "descriptionmsg", [], "any", false, false, false, 201), 'label');
        yield "
                                <div class=\"voice-controls\">
                                    <button class=\"start_recording\" type=\"button\" data-target=\"message_descriptionmsg\">
                                        <i class=\"fa fa-microphone\"></i> Démarrer l'enregistrement
                                    </button>
                                    <button class=\"stop_recording\" type=\"button\" data-target=\"message_descriptionmsg\">
                                        <i class=\"fa fa-stop\"></i> Arrêter l'enregistrement
                                    </button>
                                    <button class=\"clear_text\" type=\"button\" data-target=\"message_descriptionmsg\">
                                        <i class=\"fa fa-trash\"></i> Effacer
                                    </button>
                                </div>
                                ";
        // line 213
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "descriptionmsg", [], "any", false, false, false, 213), 'widget', ["attr" => ["class" => "form-control", "id" => "message_descriptionmsg"]]);
        yield "
                                ";
        // line 215
        yield "                                <div class=\"error-message\">
                                    ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "descriptionmsg", [], "any", false, false, false, 216), 'errors');
        yield "
                                </div>
                            </div>

                            <!-- Champ Contenu -->
                            <div class=\"form-group\">
                                ";
        // line 222
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "contenu", [], "any", false, false, false, 222), 'label');
        yield "
                                <div class=\"voice-controls\">
                                    <button class=\"start_recording\" type=\"button\" data-target=\"message_contenu\">
                                        <i class=\"fa fa-microphone\"></i> Démarrer l'enregistrement
                                    </button>
                                    <button class=\"stop_recording\" type=\"button\" data-target=\"message_contenu\">
                                        <i class=\"fa fa-stop\"></i> Arrêter l'enregistrement
                                    </button>
                                    <button class=\"clear_text\" type=\"button\" data-target=\"message_contenu\">
                                        <i class=\"fa fa-trash\"></i> Effacer
                                    </button>
                                </div>
                                ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "contenu", [], "any", false, false, false, 234), 'widget', ["attr" => ["class" => "form-control", "id" => "message_contenu"]]);
        yield "
                                ";
        // line 236
        yield "                                <div class=\"error-message\">
                                    ";
        // line 237
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "contenu", [], "any", false, false, false, 237), 'errors');
        yield "
                                </div>
                            </div>

                            <!-- Champ Image -->
                            <div class=\"form-group\">
                                ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "image", [], "any", false, false, false, 243), 'label');
        yield "
                                ";
        // line 244
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "image", [], "any", false, false, false, 244), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                ";
        // line 246
        yield "                                <div class=\"error-message\">
                                    ";
        // line 247
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "image", [], "any", false, false, false, 247), 'errors');
        yield "
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn\">Créer</button>
                        ";
        // line 252
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), 'form_end');
        yield "

                        ";
        // line 255
        yield "                        <div class=\"actions\">
                            <a href=\"";
        // line 256
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\" class=\"back-btn\">Retourner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script pour la reconnaissance vocale -->
    <script>
        // Initialisation de la reconnaissance vocale
        const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        recognition.interimResults = true; // Permet d'afficher les résultats intermédiaires
        let listening = false; // Variable pour suivre l'état de l'enregistrement
        let currentTarget = null; // Variable pour suivre le champ actuellement en cours d'enregistrement

        // Écouteur pour les résultats de la reconnaissance vocale
        recognition.addEventListener('result', e => {
            let transcript = Array.from(e.results)
                .map(result => result[0])
                .map(result => result.transcript)
                .join('');

            // Si le résultat est final, ajoutez-le au champ cible
            if (e.results[0].isFinal && currentTarget) {
                const existingText = document.getElementById(currentTarget).value;
                document.getElementById(currentTarget).value = existingText + ' ' + transcript;
            }
        });

        // Démarrer l'enregistrement pour un champ spécifique
        document.querySelectorAll('.start_recording').forEach(button => {
            button.addEventListener('click', function() {
                currentTarget = this.getAttribute('data-target');
                recognition.start();
                document.querySelector(`.start_recording[data-target=\"\${currentTarget}\"]`).style.display = 'none';
                document.querySelector(`.stop_recording[data-target=\"\${currentTarget}\"]`).style.display = 'inline-block';
                listening = true;
            });
        });

        // Arrêter l'enregistrement
        document.querySelectorAll('.stop_recording').forEach(button => {
            button.addEventListener('click', function() {
                recognition.stop();
                document.querySelector(`.start_recording[data-target=\"\${currentTarget}\"]`).style.display = 'inline-block';
                document.querySelector(`.stop_recording[data-target=\"\${currentTarget}\"]`).style.display = 'none';
                listening = false;
            });
        });

        // Effacer le texte d'un champ spécifique
        document.querySelectorAll('.clear_text').forEach(button => {
            button.addEventListener('click', function() {
                const target = this.getAttribute('data-target');
                document.getElementById(target).value = '';
            });
        });

        // Redémarrer la reconnaissance si elle s'arrête
        recognition.addEventListener('end', () => {
            if (listening) {
                recognition.start();
            }
        });
    </script>
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
        return "message/new.html.twig";
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
        return array (  441 => 256,  438 => 255,  433 => 252,  425 => 247,  422 => 246,  418 => 244,  414 => 243,  405 => 237,  402 => 236,  398 => 234,  383 => 222,  374 => 216,  371 => 215,  367 => 213,  352 => 201,  343 => 195,  340 => 194,  336 => 192,  321 => 180,  314 => 177,  311 => 175,  306 => 172,  297 => 170,  293 => 169,  289 => 167,  286 => 166,  277 => 158,  264 => 157,  105 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Create New Message - Makeria{% endblock %}

{% block stylesheets %}
    {{ parent() }} {# Hérite des styles de base2.html.twig #}
    <style>
        body {
            font-family: 'Joti One', Arial, sans-serif;
            background-color: #f3f4f6;
        }

        /* Styles spécifiques à cette page */
        .form-container {
            max-width: 700px;
            margin: 30px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-container h1 {
            text-align: center;
            font-size: 32px;
            color: #b11d85;
            margin-bottom: 30px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .form-container input,
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            box-sizing: border-box;
            background-color: #f9f9f9;
            transition: all 0.3s ease;
        }

        .form-container input:focus,
        .form-container select:focus,
        .form-container textarea:focus {
            border-color: #b11d85;
            background-color: #ffffff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 14px 20px;
            background-color: #b11d85;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #8e1668;
        }

        .alert {
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 16px;
            border: 1px solid #f5c6cb;
            color: #721c24;
            background-color: #f8d7da;
        }

        .alert ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .alert li {
            margin: 5px 0;
        }

        .actions {
            margin-top: 30px;
            display: flex;
            justify-content: center;
        }

        .actions a {
            padding: 12px 20px;
            background-color: #5d2d53;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            text-align: center;
            font-size: 16px;
            width: 45%;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .actions a:hover {
            background-color: #4a2345;
        }

        /* Styles pour les boutons de reconnaissance vocale */
        .voice-controls {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .voice-controls button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .voice-controls button.start_recording {
            background-color: #28a745;
            color: white;
        }

        .voice-controls button.stop_recording {
            background-color: #dc3545;
            color: white;
            display: none;
        }

        .voice-controls button.clear_text {
            background-color: #ffc107;
            color: black;
        }

        /* Styles pour les messages d'erreur */
        .error-message {
            color: #dc3545;
            font-size: 14px;
            margin-top: -15px;
            margin-bottom: 15px;
        }
    </style>
{% endblock %}

{% block body %}
    <section id=\"content\" class=\"clearfix\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"form-container\">
                        <h1>Create New Message</h1>

                        {# Affichage des erreurs globales du formulaire #}
                        {% if form.vars.errors|length > 0 %}
                            <div class=\"alert\">
                                <ul>
                                    {% for error in form.vars.errors %}
                                        <li>{{ error.message }}</li>
                                    {% endfor %}
                                </ul>
                            </div>
                        {% endif %}

                        {# Formulaire #}
                        {{ form_start(form) }}
                            <!-- Champ Titre -->
                            <div class=\"form-group\">
                                {{ form_label(form.titremsg) }}
                                <div class=\"voice-controls\">
                                    <button class=\"start_recording\" type=\"button\" data-target=\"message_titremsg\">
                                        <i class=\"fa fa-microphone\"></i> Démarrer l'enregistrement
                                    </button>
                                    <button class=\"stop_recording\" type=\"button\" data-target=\"message_titremsg\">
                                        <i class=\"fa fa-stop\"></i> Arrêter l'enregistrement
                                    </button>
                                    <button class=\"clear_text\" type=\"button\" data-target=\"message_titremsg\">
                                        <i class=\"fa fa-trash\"></i> Effacer
                                    </button>
                                </div>
                                {{ form_widget(form.titremsg, {'attr': {'class': 'form-control', 'id': 'message_titremsg'}}) }}
                                {# Affichage des erreurs pour le champ titre #}
                                <div class=\"error-message\">
                                    {{ form_errors(form.titremsg) }}
                                </div>
                            </div>

                            <!-- Champ Description -->
                            <div class=\"form-group\">
                                {{ form_label(form.descriptionmsg) }}
                                <div class=\"voice-controls\">
                                    <button class=\"start_recording\" type=\"button\" data-target=\"message_descriptionmsg\">
                                        <i class=\"fa fa-microphone\"></i> Démarrer l'enregistrement
                                    </button>
                                    <button class=\"stop_recording\" type=\"button\" data-target=\"message_descriptionmsg\">
                                        <i class=\"fa fa-stop\"></i> Arrêter l'enregistrement
                                    </button>
                                    <button class=\"clear_text\" type=\"button\" data-target=\"message_descriptionmsg\">
                                        <i class=\"fa fa-trash\"></i> Effacer
                                    </button>
                                </div>
                                {{ form_widget(form.descriptionmsg, {'attr': {'class': 'form-control', 'id': 'message_descriptionmsg'}}) }}
                                {# Affichage des erreurs pour le champ description #}
                                <div class=\"error-message\">
                                    {{ form_errors(form.descriptionmsg) }}
                                </div>
                            </div>

                            <!-- Champ Contenu -->
                            <div class=\"form-group\">
                                {{ form_label(form.contenu) }}
                                <div class=\"voice-controls\">
                                    <button class=\"start_recording\" type=\"button\" data-target=\"message_contenu\">
                                        <i class=\"fa fa-microphone\"></i> Démarrer l'enregistrement
                                    </button>
                                    <button class=\"stop_recording\" type=\"button\" data-target=\"message_contenu\">
                                        <i class=\"fa fa-stop\"></i> Arrêter l'enregistrement
                                    </button>
                                    <button class=\"clear_text\" type=\"button\" data-target=\"message_contenu\">
                                        <i class=\"fa fa-trash\"></i> Effacer
                                    </button>
                                </div>
                                {{ form_widget(form.contenu, {'attr': {'class': 'form-control', 'id': 'message_contenu'}}) }}
                                {# Affichage des erreurs pour le champ contenu #}
                                <div class=\"error-message\">
                                    {{ form_errors(form.contenu) }}
                                </div>
                            </div>

                            <!-- Champ Image -->
                            <div class=\"form-group\">
                                {{ form_label(form.image) }}
                                {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                                {# Affichage des erreurs pour le champ image #}
                                <div class=\"error-message\">
                                    {{ form_errors(form.image) }}
                                </div>
                            </div>

                            <button type=\"submit\" class=\"btn\">Créer</button>
                        {{ form_end(form) }}

                        {# Bouton de retour #}
                        <div class=\"actions\">
                            <a href=\"{{ path('app_forum') }}\" class=\"back-btn\">Retourner</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Script pour la reconnaissance vocale -->
    <script>
        // Initialisation de la reconnaissance vocale
        const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        recognition.interimResults = true; // Permet d'afficher les résultats intermédiaires
        let listening = false; // Variable pour suivre l'état de l'enregistrement
        let currentTarget = null; // Variable pour suivre le champ actuellement en cours d'enregistrement

        // Écouteur pour les résultats de la reconnaissance vocale
        recognition.addEventListener('result', e => {
            let transcript = Array.from(e.results)
                .map(result => result[0])
                .map(result => result.transcript)
                .join('');

            // Si le résultat est final, ajoutez-le au champ cible
            if (e.results[0].isFinal && currentTarget) {
                const existingText = document.getElementById(currentTarget).value;
                document.getElementById(currentTarget).value = existingText + ' ' + transcript;
            }
        });

        // Démarrer l'enregistrement pour un champ spécifique
        document.querySelectorAll('.start_recording').forEach(button => {
            button.addEventListener('click', function() {
                currentTarget = this.getAttribute('data-target');
                recognition.start();
                document.querySelector(`.start_recording[data-target=\"\${currentTarget}\"]`).style.display = 'none';
                document.querySelector(`.stop_recording[data-target=\"\${currentTarget}\"]`).style.display = 'inline-block';
                listening = true;
            });
        });

        // Arrêter l'enregistrement
        document.querySelectorAll('.stop_recording').forEach(button => {
            button.addEventListener('click', function() {
                recognition.stop();
                document.querySelector(`.start_recording[data-target=\"\${currentTarget}\"]`).style.display = 'inline-block';
                document.querySelector(`.stop_recording[data-target=\"\${currentTarget}\"]`).style.display = 'none';
                listening = false;
            });
        });

        // Effacer le texte d'un champ spécifique
        document.querySelectorAll('.clear_text').forEach(button => {
            button.addEventListener('click', function() {
                const target = this.getAttribute('data-target');
                document.getElementById(target).value = '';
            });
        });

        // Redémarrer la reconnaissance si elle s'arrête
        recognition.addEventListener('end', () => {
            if (listening) {
                recognition.start();
            }
        });
    </script>
{% endblock %}", "message/new.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\message\\new.html.twig");
    }
}
