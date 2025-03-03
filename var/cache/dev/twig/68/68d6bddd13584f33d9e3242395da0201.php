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

/* message/show2.html.twig */
class __TwigTemplate_0dc367fb4fefcd37eb524cd3cc9da416 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/show2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "message/show2.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "message/show2.html.twig", 1);
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

        yield "Détails du Message";
        
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
        yield "<div class=\"message-details-container\">
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"message-card shadow-lg border-0 rounded-3\">
                    <!-- En-tête du message -->
                    <div class=\"card-header text-white text-center py-4\" style=\"background: linear-gradient(135deg,#9c1575,rgb(21, 20, 22)); border-radius: 12px 12px 0 0;\">
                        <h1 class=\"display-4 font-weight-bold mb-3\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 13, $this->source); })()), "titremsg", [], "any", false, false, false, 13), "html", null, true);
        yield "</h1>
                        <p class=\"lead mb-0\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 14, $this->source); })()), "descriptionmsg", [], "any", false, false, false, 14), "html", null, true);
        yield "</p>
                    </div>

                    <!-- Corps du message -->
                    <div class=\"card-body p-4\">
                        <div class=\"content-section mb-5\">
                            <h4 class=\"text-muted mb-4\">Contenu du message</h4>
                            <p class=\"message-content\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 21, $this->source); })()), "contenu", [], "any", false, false, false, 21), "html", null, true);
        yield "</p>
                            ";
        // line 22
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 22, $this->source); })()), "image", [], "any", false, false, false, 22)) {
            // line 23
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23))), "html", null, true);
            yield "\" alt=\"Image du message\">
                            ";
        }
        // line 25
        yield "                            <br> <br>
                        </div>
                        <p class=\"text-muted\"><strong>Date de publication:</strong> ";
        // line 27
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 27, $this->source); })()), "datemsg", [], "any", false, false, false, 27)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 27, $this->source); })()), "datemsg", [], "any", false, false, false, 27), "d/m/Y H:i"), "html", null, true)) : ("Non spécifiée"));
        yield "</p>
                    </div>

                    <!-- Actions sur le message -->
                    <div class=\"card-footer d-flex justify-content-between py-3 bg-light\">
                        <div class=\"d-flex\">
                            <a href=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        yield "\" class=\"btn btn-edit me-2\">
                                <i class=\"fa fa-pencil-alt\"></i> Modifier
                            </a>
                            ";
        // line 36
        yield Twig\Extension\CoreExtension::include($this->env, $context, "message/_delete_form.html.twig");
        yield "
                        </div>
                    </div>

                    <!-- Formulaire d'ajout de réponse -->
                    <div class=\"form-container\">
                        <h1>Ajouter un commentaire</h1>
                        ";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start', ["attr" => ["id" => "reply-form", "class" => "ajax-form"]]);
        yield "
                            <div class=\"form-group\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "contenureply", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "id" => "reply_contenureply", "placeholder" => "Votre réponse..."]]);
        yield "
                                <div id=\"form-errors\" class=\"text-danger mb-3\"></div>
                            </div>
                                                            <div class=\"voice-controls\">
                                    <button class=\"start_recording\" type=\"button\" data-target=\"reply_contenureply\">
                                        <i class=\"fa fa-microphone\"></i> Démarrer l'enregistrement
                                    </button>
                                    <button class=\"stop_recording\" type=\"button\" data-target=\"reply_contenureply\" style=\"display: none;\">
                                        <i class=\"fa fa-stop\"></i> Arrêter l'enregistrement
                                    </button>
                                    <button class=\"clear_text\" type=\"button\" data-target=\"reply_contenureply\">
                                        <i class=\"fa fa-trash\"></i> Effacer
                                    </button>
                                </div>
                            <button type=\"submit\" class=\"btn btn-primary mt-3\" id=\"submit-button\">
                                <i class=\"fa fa-spinner fa-spin d-none\"></i> Envoyer
                            </button>
                        ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        yield "
                    </div>

                    <!-- Section des réponses -->
                    <div id=\"replies-list\" class=\"list-group\">
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 67, $this->source); })()), "replies", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 68
            yield "                            <div class=\"list-group-item reply-item shadow-sm border-0 rounded-3 mb-3 p-3 animate__animated animate__fadeIn\" id=\"reply-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "\">
                                <p class=\"reply-content\">";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "contenureply", [], "any", false, false, false, 69), "html", null, true);
            yield "</p>
                                <p class=\"reply-date text-muted\">Réponse postée le ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "createdAt", [], "any", false, false, false, 70), "d/m/Y H:i"), "html", null, true);
            yield "</p>
                                <div class=\"reply-actions d-flex justify-content-end\">
                                    <a href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reply_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\" class=\"btn btn-edit me-2\">
                                        <i class=\"fa fa-pencil-alt\"></i> Modifier
                                    </a>
                                    <form action=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reply_delete2", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\" method=\"post\" class=\"delete-form\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 76))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-delete\">
                                            <i class=\"fa fa-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['reply'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "                    </div>

                    <!-- Bouton de retour -->
                    <div class=\"card-footer text-center py-3\">
                        <a href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fa fa-arrow-left\"></i> Retourner
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        yield "<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"></script>
<script>
    \$(document).ready(function() {
        // Intercepter la soumission du formulaire de réponse
        \$('#reply-form').on('submit', function(e) {
            e.preventDefault(); // Empêcher le rechargement de la page

            const submitButton = \$('#submit-button');
            const spinner = submitButton.find('.fa-spinner');
            const formErrors = \$('#form-errors');

            // Activer l'indicateur de chargement
            submitButton.prop('disabled', true);
            spinner.removeClass('d-none');

            // Envoyer la requête AJAX
            \$.ajax({
                url: '";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_show2", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118)]), "html", null, true);
        yield "',
                method: 'POST',
                data: \$(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Ajouter la nouvelle réponse à la liste
                        \$('#replies-list').append(`
                            <div class=\"list-group-item reply-item shadow-sm border-0 rounded-3 mb-3 p-3 animate__animated animate__fadeIn\" id=\"reply-\${response.reply.id}\">
                                <p class=\"reply-content\">\${response.reply.content}</p>
                                <p class=\"reply-date text-muted\">Réponse postée le \${response.reply.createdAt}</p>
                                <div class=\"reply-actions d-flex justify-content-end\">
                                    <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reply_edit", ["id" => "\${response.reply.id}"]);
        yield "\" class=\"btn btn-edit me-2\">
                                        <i class=\"fa fa-pencil-alt\"></i> Modifier
                                    </a>
                                    <form action=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reply_delete2", ["id" => "\${response.reply.id}"]);
        yield "\" method=\"post\" class=\"delete-form\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete\${response.reply.id}"), "html", null, true);
        yield "\">
                                        <button type=\"submit\" class=\"btn btn-delete\">
                                            <i class=\"fa fa-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        `);

                        // Réinitialiser le formulaire
                        \$('#reply-form')[0].reset();
                        formErrors.html(''); // Effacer les erreurs précédentes
                    } else {
                        // Afficher les erreurs du formulaire
                        formErrors.html(response.errors.join('<br>'));
                    }
                },
                error: function(xhr, status, error) {
                    formErrors.html('Une erreur s\\'est produite lors de l\\'envoi de la réponse.');
                },
                complete: function() {
                    // Désactiver l'indicateur de chargement
                    submitButton.prop('disabled', false);
                    spinner.addClass('d-none');
                }
            });
        });

        // Gérer la suppression des réponses via AJAX
        \$(document).on('submit', 'form.delete-form', function(e) {
            e.preventDefault(); // Empêcher la soumission normale du formulaire

            if (confirm('Êtes-vous sûr de vouloir supprimer cette réponse ?')) {
                const form = \$(this);
                const url = form.attr('action');
                const token = form.find('input[name=\"_token\"]').val();

                // Envoyer la requête AJAX
                \$.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        _token: token
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Supprimer l'élément du DOM
                            form.closest('.reply-item').remove();
                        } else {
                            // Afficher un message d'erreur
                            alert(response.error || 'Une erreur s\\'est produite lors de la suppression de la réponse.');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Afficher un message d'erreur détaillé
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            alert('Erreur : ' + xhr.responseJSON.error);
                        } else {
                            alert('Erreur lors de la communication avec le serveur. Détails : ' + error);
                        }
                    }
                });
            }
        });

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
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 259
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

        // line 260
        yield "<link href=\"https://fonts.googleapis.com/css?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Joti+One&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
<style>
    body {
        font-family: 'Joti One', Arial, sans-serif;
        background-color: #f3f4f6;
    }

    .message-details-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .message-card {
        background-color: #ffffff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .message-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background: linear-gradient(135deg, #6a1b9a, #8e44ad);
        color: white;
        text-align: center;
        padding: 40px 20px;
        border-radius: 12px 12px 0 0;
    }

    .card-header h1 {
        font-size: 2.5em;
        font-weight: 700;
        margin-bottom: 10px;
        letter-spacing: 1px;
    }

    .card-header p {
        font-size: 1.2em;
        font-style: italic;
        color: rgba(255, 255, 255, 0.9);
    }

    .card-body {
        font-size: 1.1em;
        line-height: 1.6;
        color: #555;
        padding: 30px;
    }

    .content-section {
        margin-top: 30px;
    }

    .message-content {
        font-size: 1.2em;
        color: #333;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .card-footer {
        background-color: #f9f9f9;
        padding: 30px 20px;
        border-top: 1px solid #eeeeee;
    }

    .list-group-item {
        padding: 20px;
        border-radius: 8px;
        background-color: #fafafa;
        transition: background-color 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #f0f0f0;
    }

    .reply-content {
        font-size: 1.1em;
        color: #333;
        line-height: 1.6;
    }

    .reply-date {
        font-size: 0.9em;
        color: #999;
        margin-top: 10px;
    }

    .reply-actions {
        display: flex;
        justify-content: flex-end;
        margin-top: 15px;
    }

    .btn-primary {
        background-color: #b11d85;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #9c1575;
    }

    .btn-edit {
        background-color: #b11d85;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-edit:hover {
        background-color: #9c1575;
    }

    .btn-delete {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    .btn-outline-primary {
        color: #b11d85;
        border-color: #b11d85;
        font-size: 1.1em;
        padding: 12px 24px;
        border-radius: 30px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-primary:hover {
        background-color: #b11d85;
        color: white;
    }

    .fa-pencil-alt, .fa-reply, .fa-arrow-left {
        margin-right: 5px;
    }

    .d-flex {
        display: flex;
        align-items: center;
    }

    .me-2 {
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        .card-header h1 {
            font-size: 2em;
        }

        .card-header p {
            font-size: 1em;
        }

        .card-body {
            padding: 20px;
        }

        .btn-outline-primary {
            width: 100%;
            margin-top: 10px;
        }
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
        return "message/show2.html.twig";
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
        return array (  474 => 260,  461 => 259,  326 => 134,  322 => 133,  316 => 130,  301 => 118,  281 => 100,  268 => 99,  247 => 88,  241 => 84,  227 => 76,  223 => 75,  217 => 72,  212 => 70,  208 => 69,  203 => 68,  199 => 67,  191 => 62,  171 => 45,  166 => 43,  156 => 36,  150 => 33,  141 => 27,  137 => 25,  131 => 23,  129 => 22,  125 => 21,  115 => 14,  111 => 13,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Détails du Message{% endblock %}

{% block body %}
<div class=\"message-details-container\">
    <div class=\"container py-5\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"message-card shadow-lg border-0 rounded-3\">
                    <!-- En-tête du message -->
                    <div class=\"card-header text-white text-center py-4\" style=\"background: linear-gradient(135deg,#9c1575,rgb(21, 20, 22)); border-radius: 12px 12px 0 0;\">
                        <h1 class=\"display-4 font-weight-bold mb-3\">{{ message.titremsg }}</h1>
                        <p class=\"lead mb-0\">{{ message.descriptionmsg }}</p>
                    </div>

                    <!-- Corps du message -->
                    <div class=\"card-body p-4\">
                        <div class=\"content-section mb-5\">
                            <h4 class=\"text-muted mb-4\">Contenu du message</h4>
                            <p class=\"message-content\">{{ message.contenu }}</p>
                            {% if message.image %}
                            <img src=\"{{ asset('img/' ~ message.image) }}\" alt=\"Image du message\">
                            {% endif %}
                            <br> <br>
                        </div>
                        <p class=\"text-muted\"><strong>Date de publication:</strong> {{ message.datemsg ? message.datemsg|date('d/m/Y H:i') : 'Non spécifiée' }}</p>
                    </div>

                    <!-- Actions sur le message -->
                    <div class=\"card-footer d-flex justify-content-between py-3 bg-light\">
                        <div class=\"d-flex\">
                            <a href=\"{{ path('app_message_edit', {'id': message.id}) }}\" class=\"btn btn-edit me-2\">
                                <i class=\"fa fa-pencil-alt\"></i> Modifier
                            </a>
                            {{ include('message/_delete_form.html.twig') }}
                        </div>
                    </div>

                    <!-- Formulaire d'ajout de réponse -->
                    <div class=\"form-container\">
                        <h1>Ajouter un commentaire</h1>
                        {{ form_start(form, {'attr': {'id': 'reply-form', 'class': 'ajax-form'}}) }}
                            <div class=\"form-group\">
                                {{ form_widget(form.contenureply, {'attr': {'class': 'form-control', 'id': 'reply_contenureply', 'placeholder': 'Votre réponse...'}}) }}
                                <div id=\"form-errors\" class=\"text-danger mb-3\"></div>
                            </div>
                                                            <div class=\"voice-controls\">
                                    <button class=\"start_recording\" type=\"button\" data-target=\"reply_contenureply\">
                                        <i class=\"fa fa-microphone\"></i> Démarrer l'enregistrement
                                    </button>
                                    <button class=\"stop_recording\" type=\"button\" data-target=\"reply_contenureply\" style=\"display: none;\">
                                        <i class=\"fa fa-stop\"></i> Arrêter l'enregistrement
                                    </button>
                                    <button class=\"clear_text\" type=\"button\" data-target=\"reply_contenureply\">
                                        <i class=\"fa fa-trash\"></i> Effacer
                                    </button>
                                </div>
                            <button type=\"submit\" class=\"btn btn-primary mt-3\" id=\"submit-button\">
                                <i class=\"fa fa-spinner fa-spin d-none\"></i> Envoyer
                            </button>
                        {{ form_end(form) }}
                    </div>

                    <!-- Section des réponses -->
                    <div id=\"replies-list\" class=\"list-group\">
                        {% for reply in message.replies %}
                            <div class=\"list-group-item reply-item shadow-sm border-0 rounded-3 mb-3 p-3 animate__animated animate__fadeIn\" id=\"reply-{{ reply.id }}\">
                                <p class=\"reply-content\">{{ reply.contenureply }}</p>
                                <p class=\"reply-date text-muted\">Réponse postée le {{ reply.createdAt|date('d/m/Y H:i') }}</p>
                                <div class=\"reply-actions d-flex justify-content-end\">
                                    <a href=\"{{ path('app_reply_edit', {'id': reply.id}) }}\" class=\"btn btn-edit me-2\">
                                        <i class=\"fa fa-pencil-alt\"></i> Modifier
                                    </a>
                                    <form action=\"{{ path('app_reply_delete2', {'id': reply.id}) }}\" method=\"post\" class=\"delete-form\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reply.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-delete\">
                                            <i class=\"fa fa-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        {% endfor %}
                    </div>

                    <!-- Bouton de retour -->
                    <div class=\"card-footer text-center py-3\">
                        <a href=\"{{ path('app_forum') }}\" class=\"btn btn-outline-primary\">
                            <i class=\"fa fa-arrow-left\"></i> Retourner
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\"></script>
<script>
    \$(document).ready(function() {
        // Intercepter la soumission du formulaire de réponse
        \$('#reply-form').on('submit', function(e) {
            e.preventDefault(); // Empêcher le rechargement de la page

            const submitButton = \$('#submit-button');
            const spinner = submitButton.find('.fa-spinner');
            const formErrors = \$('#form-errors');

            // Activer l'indicateur de chargement
            submitButton.prop('disabled', true);
            spinner.removeClass('d-none');

            // Envoyer la requête AJAX
            \$.ajax({
                url: '{{ path('app_message_show2', {'id': message.id}) }}',
                method: 'POST',
                data: \$(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Ajouter la nouvelle réponse à la liste
                        \$('#replies-list').append(`
                            <div class=\"list-group-item reply-item shadow-sm border-0 rounded-3 mb-3 p-3 animate__animated animate__fadeIn\" id=\"reply-\${response.reply.id}\">
                                <p class=\"reply-content\">\${response.reply.content}</p>
                                <p class=\"reply-date text-muted\">Réponse postée le \${response.reply.createdAt}</p>
                                <div class=\"reply-actions d-flex justify-content-end\">
                                    <a href=\"{{ path('app_reply_edit', {'id': '\${response.reply.id}'}) }}\" class=\"btn btn-edit me-2\">
                                        <i class=\"fa fa-pencil-alt\"></i> Modifier
                                    </a>
                                    <form action=\"{{ path('app_reply_delete2', {'id': '\${response.reply.id}'}) }}\" method=\"post\" class=\"delete-form\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete\${response.reply.id}') }}\">
                                        <button type=\"submit\" class=\"btn btn-delete\">
                                            <i class=\"fa fa-trash\"></i> Supprimer
                                        </button>
                                    </form>
                                </div>
                            </div>
                        `);

                        // Réinitialiser le formulaire
                        \$('#reply-form')[0].reset();
                        formErrors.html(''); // Effacer les erreurs précédentes
                    } else {
                        // Afficher les erreurs du formulaire
                        formErrors.html(response.errors.join('<br>'));
                    }
                },
                error: function(xhr, status, error) {
                    formErrors.html('Une erreur s\\'est produite lors de l\\'envoi de la réponse.');
                },
                complete: function() {
                    // Désactiver l'indicateur de chargement
                    submitButton.prop('disabled', false);
                    spinner.addClass('d-none');
                }
            });
        });

        // Gérer la suppression des réponses via AJAX
        \$(document).on('submit', 'form.delete-form', function(e) {
            e.preventDefault(); // Empêcher la soumission normale du formulaire

            if (confirm('Êtes-vous sûr de vouloir supprimer cette réponse ?')) {
                const form = \$(this);
                const url = form.attr('action');
                const token = form.find('input[name=\"_token\"]').val();

                // Envoyer la requête AJAX
                \$.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        _token: token
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            // Supprimer l'élément du DOM
                            form.closest('.reply-item').remove();
                        } else {
                            // Afficher un message d'erreur
                            alert(response.error || 'Une erreur s\\'est produite lors de la suppression de la réponse.');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Afficher un message d'erreur détaillé
                        if (xhr.responseJSON && xhr.responseJSON.error) {
                            alert('Erreur : ' + xhr.responseJSON.error);
                        } else {
                            alert('Erreur lors de la communication avec le serveur. Détails : ' + error);
                        }
                    }
                });
            }
        });

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
    });
</script>
{% endblock %}

{% block stylesheets %}
<link href=\"https://fonts.googleapis.com/css?family=Poppins:wght@300;400;600&display=swap\" rel=\"stylesheet\">
<link href=\"https://fonts.googleapis.com/css?family=Joti+One&display=swap\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css\">
<style>
    body {
        font-family: 'Joti One', Arial, sans-serif;
        background-color: #f3f4f6;
    }

    .message-details-container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .message-card {
        background-color: #ffffff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .message-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }

    .card-header {
        background: linear-gradient(135deg, #6a1b9a, #8e44ad);
        color: white;
        text-align: center;
        padding: 40px 20px;
        border-radius: 12px 12px 0 0;
    }

    .card-header h1 {
        font-size: 2.5em;
        font-weight: 700;
        margin-bottom: 10px;
        letter-spacing: 1px;
    }

    .card-header p {
        font-size: 1.2em;
        font-style: italic;
        color: rgba(255, 255, 255, 0.9);
    }

    .card-body {
        font-size: 1.1em;
        line-height: 1.6;
        color: #555;
        padding: 30px;
    }

    .content-section {
        margin-top: 30px;
    }

    .message-content {
        font-size: 1.2em;
        color: #333;
        line-height: 1.8;
        margin-bottom: 20px;
    }

    .card-footer {
        background-color: #f9f9f9;
        padding: 30px 20px;
        border-top: 1px solid #eeeeee;
    }

    .list-group-item {
        padding: 20px;
        border-radius: 8px;
        background-color: #fafafa;
        transition: background-color 0.3s ease;
    }

    .list-group-item:hover {
        background-color: #f0f0f0;
    }

    .reply-content {
        font-size: 1.1em;
        color: #333;
        line-height: 1.6;
    }

    .reply-date {
        font-size: 0.9em;
        color: #999;
        margin-top: 10px;
    }

    .reply-actions {
        display: flex;
        justify-content: flex-end;
        margin-top: 15px;
    }

    .btn-primary {
        background-color: #b11d85;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #9c1575;
    }

    .btn-edit {
        background-color: #b11d85;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-edit:hover {
        background-color: #9c1575;
    }

    .btn-delete {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }

    .btn-outline-primary {
        color: #b11d85;
        border-color: #b11d85;
        font-size: 1.1em;
        padding: 12px 24px;
        border-radius: 30px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-primary:hover {
        background-color: #b11d85;
        color: white;
    }

    .fa-pencil-alt, .fa-reply, .fa-arrow-left {
        margin-right: 5px;
    }

    .d-flex {
        display: flex;
        align-items: center;
    }

    .me-2 {
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        .card-header h1 {
            font-size: 2em;
        }

        .card-header p {
            font-size: 1em;
        }

        .card-body {
            padding: 20px;
        }

        .btn-outline-primary {
            width: 100%;
            margin-top: 10px;
        }
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
</style>
{% endblock %}", "message/show2.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\message\\show2.html.twig");
    }
}
