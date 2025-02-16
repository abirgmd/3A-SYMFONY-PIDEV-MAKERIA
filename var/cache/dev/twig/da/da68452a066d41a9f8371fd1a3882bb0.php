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

/* page/forum.html.twig */
class __TwigTemplate_1865efd47cf748030f62596c9fd93fd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/forum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/forum.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/forum.html.twig", 1);
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

        yield "Forum";
        
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
        yield "<div class=\"forum-container\">
    <h1 class=\"forum-title\">Forum</h1>

    <div class=\"container\">
        <div class=\"forum-actions\">
            <div class=\"actions-left\">
                <p class=\"comments-count\">There are 4 Comments.</p>
            </div>
            <div class=\"actions-right\">
                <h5 class=\"sort-by-title\">SORT BY</h5>
                <select class=\"form-control\" id=\"subject\" name=\"subject\">
                    <option>Alphabetically, A-Z</option>
                    <option>Alphabetically, Z-A</option>
                    <option>Date, New To Old</option>
                </select>
            </div>
        </div>

        <div class=\"action-buttons\">
            <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_new");
        yield "\" class=\"btn btn-primary\">Ajouter un nouveau message</a>
            <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reply_new");
        yield "\" class=\"btn btn-secondary\">Ajouter un commentaire</a>
        </div>

        <div class=\"forum-messages\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new RuntimeError('Variable "messages" does not exist.', 30, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            yield "                <div class=\"forum-message\">
                    <div class=\"message-header\">
                        <h2 class=\"message-title\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "titremsg", [], "any", false, false, false, 33), "html", null, true);
            yield "</h2>
                        <small class=\"message-date\">Publié le : ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "datemsg", [], "any", false, false, false, 34), "Y-m-d H:i"), "html", null, true);
            yield "</small>
                    </div>

                    <p class=\"message-description\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "descriptionmsg", [], "any", false, false, false, 37), "html", null, true);
            yield "</p>

                    <div class=\"message-content\">
                        <p>";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "contenu", [], "any", false, false, false, 40), "html", null, true);
            yield "</p>
                    </div>

                    <div class=\"message-actions\">
                        <a href=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_message_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"btn btn-edit\">Modifier</a>
                        ";
            // line 45
            yield Twig\Extension\CoreExtension::include($this->env, $context, "message/_delete_form.html.twig");
            yield "
                    </div>

                    <div class=\"replies-section\">
                        <h3 class=\"replies-title\">Réponses</h3>
                        ";
            // line 50
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["message"], "replies", [], "any", false, false, false, 50)) > 0)) {
                // line 51
                yield "                            <div class=\"replies-list\">
                                ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "replies", [], "any", false, false, false, 52));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
                    // line 53
                    yield "                                    <div class=\"reply\">
                                        <p class=\"reply-content\">";
                    // line 54
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "contenureply", [], "any", false, false, false, 54), "html", null, true);
                    yield "</p>
                                        <div class=\"reply-actions\">
                                            <a href=\"";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reply_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                    yield "\" class=\"btn btn-edit\">Modifier</a>
                                            ";
                    // line 57
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "reply/_delete_form.html.twig");
                    yield "
                                        </div>
                                        <small class=\"reply-date\">Répondu le : ";
                    // line 59
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reply"], "createdAt", [], "any", false, false, false, 59), "Y-m-d H:i"), "html", null, true);
                    yield "</small>
                                    </div>
                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                yield "                            </div>
                        ";
            } else {
                // line 64
                yield "                            <p>Aucune réponse pour ce message.</p>
                        ";
            }
            // line 66
            yield "                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 74
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

        // line 75
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

    .forum-actions {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .actions-left, .actions-right {
        display: flex;
        align-items: center;
    }

    .comments-count {
        font-size: 1.1em;
        color: #555;
    }

    .sort-by-title {
        font-size: 1.1em;
        margin-right: 10px;
        color: #555;
    }

    .action-buttons {
        text-align: center;
        margin-bottom: 30px;
    }

    .action-buttons .btn {
        margin: 0 10px;
        padding: 12px 20px;
        font-size: 1.2em;
        border-radius: 6px;
        transition: background-color 0.3s ease;
    }

    .btn-primary {
        background-color: #b11d85;
        color: #fff;
        border: 2px solid #b11d85;
    }

    .btn-primary:hover {
        background-color: #9c1575;
    }

    .btn-secondary {
        background-color: #5d2d53;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #4b1d43;
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
        width: 48%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .forum-message:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .message-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .message-title {
        font-size: 1.8em;
        color: #000;
    }

    .message-date {
        font-size: 0.9em;
        color: #7f8c8d;
    }

    .message-description {
        font-size: 1.1em;
        margin-bottom: 15px;
    }

    .message-content {
        font-size: 1.2em;
        margin-bottom: 20px;
    }

    .message-actions {
        display: flex;
        gap: 10px;
    }

    .replies-section {
        margin-top: 20px;
        padding-left: 20px;
    }

    .replies-title {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .reply {
        background-color: #f0f0f0;
        border-left: 4px solid #b11d85;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .reply-content {
        font-size: 1.1em;
    }

    .reply-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 10px;
    }

    .reply-date {
        font-size: 0.9em;
        color: #b11d85;
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
        return "page/forum.html.twig";
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
        return array (  296 => 75,  283 => 74,  269 => 69,  253 => 66,  249 => 64,  245 => 62,  228 => 59,  223 => 57,  219 => 56,  214 => 54,  211 => 53,  194 => 52,  191 => 51,  189 => 50,  181 => 45,  177 => 44,  170 => 40,  164 => 37,  158 => 34,  154 => 33,  150 => 31,  133 => 30,  126 => 26,  122 => 25,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Forum{% endblock %}

{% block body %}
<div class=\"forum-container\">
    <h1 class=\"forum-title\">Forum</h1>

    <div class=\"container\">
        <div class=\"forum-actions\">
            <div class=\"actions-left\">
                <p class=\"comments-count\">There are 4 Comments.</p>
            </div>
            <div class=\"actions-right\">
                <h5 class=\"sort-by-title\">SORT BY</h5>
                <select class=\"form-control\" id=\"subject\" name=\"subject\">
                    <option>Alphabetically, A-Z</option>
                    <option>Alphabetically, Z-A</option>
                    <option>Date, New To Old</option>
                </select>
            </div>
        </div>

        <div class=\"action-buttons\">
            <a href=\"{{ path('app_message_new') }}\" class=\"btn btn-primary\">Ajouter un nouveau message</a>
            <a href=\"{{ path('app_reply_new') }}\" class=\"btn btn-secondary\">Ajouter un commentaire</a>
        </div>

        <div class=\"forum-messages\">
            {% for message in messages %}
                <div class=\"forum-message\">
                    <div class=\"message-header\">
                        <h2 class=\"message-title\">{{ message.titremsg }}</h2>
                        <small class=\"message-date\">Publié le : {{ message.datemsg|date('Y-m-d H:i') }}</small>
                    </div>

                    <p class=\"message-description\">{{ message.descriptionmsg }}</p>

                    <div class=\"message-content\">
                        <p>{{ message.contenu }}</p>
                    </div>

                    <div class=\"message-actions\">
                        <a href=\"{{ path('app_message_edit', {'id': message.id}) }}\" class=\"btn btn-edit\">Modifier</a>
                        {{ include('message/_delete_form.html.twig') }}
                    </div>

                    <div class=\"replies-section\">
                        <h3 class=\"replies-title\">Réponses</h3>
                        {% if message.replies|length > 0 %}
                            <div class=\"replies-list\">
                                {% for reply in message.replies %}
                                    <div class=\"reply\">
                                        <p class=\"reply-content\">{{ reply.contenureply }}</p>
                                        <div class=\"reply-actions\">
                                            <a href=\"{{ path('app_reply_edit', {'id': reply.id}) }}\" class=\"btn btn-edit\">Modifier</a>
                                            {{ include('reply/_delete_form.html.twig') }}
                                        </div>
                                        <small class=\"reply-date\">Répondu le : {{ reply.createdAt|date('Y-m-d H:i') }}</small>
                                    </div>
                                {% endfor %}
                            </div>
                        {% else %}
                            <p>Aucune réponse pour ce message.</p>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
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

    .forum-actions {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .actions-left, .actions-right {
        display: flex;
        align-items: center;
    }

    .comments-count {
        font-size: 1.1em;
        color: #555;
    }

    .sort-by-title {
        font-size: 1.1em;
        margin-right: 10px;
        color: #555;
    }

    .action-buttons {
        text-align: center;
        margin-bottom: 30px;
    }

    .action-buttons .btn {
        margin: 0 10px;
        padding: 12px 20px;
        font-size: 1.2em;
        border-radius: 6px;
        transition: background-color 0.3s ease;
    }

    .btn-primary {
        background-color: #b11d85;
        color: #fff;
        border: 2px solid #b11d85;
    }

    .btn-primary:hover {
        background-color: #9c1575;
    }

    .btn-secondary {
        background-color: #5d2d53;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #4b1d43;
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
        width: 48%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .forum-message:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .message-header {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .message-title {
        font-size: 1.8em;
        color: #000;
    }

    .message-date {
        font-size: 0.9em;
        color: #7f8c8d;
    }

    .message-description {
        font-size: 1.1em;
        margin-bottom: 15px;
    }

    .message-content {
        font-size: 1.2em;
        margin-bottom: 20px;
    }

    .message-actions {
        display: flex;
        gap: 10px;
    }

    .replies-section {
        margin-top: 20px;
        padding-left: 20px;
    }

    .replies-title {
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .reply {
        background-color: #f0f0f0;
        border-left: 4px solid #b11d85;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 5px;
    }

    .reply-content {
        font-size: 1.1em;
    }

    .reply-actions {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        margin-top: 10px;
    }

    .reply-date {
        font-size: 0.9em;
        color: #b11d85;
    }
</style>
{% endblock %}
", "page/forum.html.twig", "C:\\xampp\\htdocs\\Esprit\\templates\\page\\forum.html.twig");
    }
}
