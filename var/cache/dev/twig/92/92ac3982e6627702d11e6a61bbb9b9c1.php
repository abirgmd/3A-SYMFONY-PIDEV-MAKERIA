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
class __TwigTemplate_5f7ec34520c4a232bcb7b56cbbcace58 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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

        yield "Event Detail - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "titreevents", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<meta name=\"csrf-token\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("like_dislike"), "html", null, true);
        yield "\">

<style>
    /* Styles généraux */
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
    }

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

    .event-title {
        font-size: 2.5rem;
        color: #333;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: center;
    }

    .event-description {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 25px;
        text-align: justify;
    }

    .event-dates {
        font-size: 1.1rem;
        color: #666;
        margin-top: 10px;
        padding: 15px;
        background-color: #f1f1f1;
        border-radius: 10px;
    }

    /* Section des commentaires */
    .comment-form {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        margin-top: 40px;
    }

    .comment-card {
        background-color: #f8f9fa;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .action-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    font-size: 1rem;
}
.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.alert-error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

    .btn {
        padding: 5px 10px;
        font-size: 0.9rem;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .btn-edit {
        background-color: #007bff;
    }

    .btn-delete {
        background-color: #dc3545;
    }

    .btn-edit:hover {
        background-color: #0056b3;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }
    .button-container {
    display: flex;
    justify-content: center; /* Centre horizontalement */
    align-items: center; /* Centre verticalement (si nécessaire) */
    margin-top: 20px; /* Facultatif, pour ajouter de l'espace au-dessus */
}

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 133
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

        // line 134
        yield "<section id=\"photograph\" class=\"clearfix\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"photograph clearfix\">
        <p>
          <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        yield "\">Events</a> > 
          <span class=\"photo_tab\">";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 140, $this->source); })()), "titreevents", [], "any", false, false, false, 140), "html", null, true);
        yield "</span>
        </p>
      </div>
    </div>
  </div>
</section>
<section id=\"event_details\" class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
        <div class=\"event-card\">
    <!-- Contenu existant -->
    <img src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 151, $this->source); })()), "image1events", [], "any", false, false, false, 151), "html", null, true);
        yield "\" class=\"event-image\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 151, $this->source); })()), "titreevents", [], "any", false, false, false, 151), "html", null, true);
        yield "\">
    <h1 class=\"event-title\">";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 152, $this->source); })()), "titreevents", [], "any", false, false, false, 152), "html", null, true);
        yield "</h1>
    <p class=\"event-description\">";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 153, $this->source); })()), "descriptionevents", [], "any", false, false, false, 153), "html", null, true);
        yield "</p>
    <div class=\"event-dates\">
        <h6><strong>Start Date:</strong> ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 155, $this->source); })()), "getDateDebut", [], "method", false, false, false, 155), "F d, Y"), "html", null, true);
        yield "</h6>
        <h6><strong>End Date:</strong> ";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 156, $this->source); })()), "getDateFin", [], "method", false, false, false, 156), "F d, Y"), "html", null, true);
        yield "</h6>
    </div>
    <div class=\"button-container\">
        <button id=\"addCommentBtn\" class=\"btn btn-primary\">Add Comment</button>
    </div>
</div>

        </div>
    </div>
</section>

<section id=\"comments_section\" class=\"container mt-5\">
    <h3>Leave a Comment</h3>

    <!-- Section pour afficher les messages flash -->
    ";
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "flashes", [], "any", false, false, false, 171));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 172
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 173
                yield "            <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " mt-3\" role=\"alert\">
                ";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "
<div id=\"commentForm\" class=\"comment-form\" style=\"display: none;\">
    <h3>Add a Comment</h3>
    ";
        // line 181
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 181, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    <div class=\"form-group\">
        ";
        // line 183
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 183, $this->source); })()), "user", [], "any", false, false, false, 183)) {
            // line 184
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 184, $this->source); })()), "nomcomment", [], "any", false, false, false, 184), 'row', ["attr" => ["class" => "form-control", "readonly" => "readonly", "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 188
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "name", [], "any", false, false, false, 188) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "lastname", [], "any", false, false, false, 188))]]);
            // line 190
            yield "
        ";
        } else {
            // line 192
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 192, $this->source); })()), "nomcomment", [], "any", false, false, false, 192), 'row', ["attr" => ["class" => "form-control"]]);
            yield "
        ";
        }
        // line 194
        yield "    </div>
    <div class=\"form-group\">
        ";
        // line 196
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 196, $this->source); })()), "text_commentaire", [], "any", false, false, false, 196), 'row', ["attr" => ["class" => "form-control", "rows" => "4"]]);
        yield "
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    ";
        // line 199
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 199, $this->source); })()), 'form_end');
        yield "
</div>


<div id=\"comments-list\" class=\"mt-4\">
    ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 204, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 205
            yield "        <div class=\"comment-card\" id=\"comment-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 205), "html", null, true);
            yield "\">
            <h5>";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "nomcomment", [], "any", false, false, false, 206), "html", null, true);
            yield "</h5>
            <p>";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "textCommentaire", [], "any", false, false, false, 207), "html", null, true);
            yield "</p>
            <small>Posted on ";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "timecomment", [], "any", false, false, false, 208), "F d, Y H:i"), "html", null, true);
            yield "</small>

            <div class=\"action-buttons\">
                ";
            // line 211
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "user", [], "any", false, false, false, 211) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "user", [], "any", false, false, false, 211))) {
                // line 212
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 212)]), "html", null, true);
                yield "\" class=\"btn btn-edit\">Edit</a>
                    <form method=\"post\" action=\"";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commentaire_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 213)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\" style=\"display: inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 214))), "html", null, true);
                yield "\">
                        <button class=\"btn btn-delete\">Delete</button>
                    </form>
                ";
            }
            // line 218
            yield "            </div>
<h4>Reacts : </h4>
<div class=\"like-dislike mt-2\">
    <button class=\"like-btn btn btn-outline-success\" data-id=\"";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 221), "html", null, true);
            yield "\" data-action=\"like\">
        👍 ";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "likes", [], "any", false, false, false, 222), "html", null, true);
            yield "
    </button>
    <button class=\"dislike-btn btn btn-outline-danger\" data-id=\"";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "id", [], "any", false, false, false, 224), "html", null, true);
            yield "\" data-action=\"dislike\">
        👎 ";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "dislikes", [], "any", false, false, false, 225), "html", null, true);
            yield "
    </button>
</div>

        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 231
        yield "</div>
</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 235
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

        // line 236
        yield "<script>
document.querySelectorAll('.like-btn, .dislike-btn').forEach(button => {
    button.addEventListener('click', function () {
        const commentaireId = this.dataset.id; // ID du commentaire
        const action = this.dataset.action; // \"like\" ou \"dislike\"

        // Récupère le token CSRF depuis un meta tag ou un autre emplacement
        const csrfToken = document.querySelector('meta[name=\"csrf-token\"]').getAttribute('content');

        // Effectue une requête AJAX
        fetch(`/commentaire/\${commentaireId}/\${action}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': csrfToken,
                'X-Requested-With': 'XMLHttpRequest',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Mise à jour de l'affichage des likes et dislikes
                const likeButton = document.querySelector(`.like-btn[data-id=\"\${commentaireId}\"]`);
                const dislikeButton = document.querySelector(`.dislike-btn[data-id=\"\${commentaireId}\"]`);

                if (likeButton) {
                    likeButton.innerHTML = `👍 \${data.likes}`;
                }
                if (dislikeButton) {
                    dislikeButton.innerHTML = `👎 \${data.dislikes}`;
                }
            } else {
                alert(data.message || 'Une erreur est survenue.');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Impossible de mettre à jour les données.');
        });
    });
});


    document.querySelector('.comment-form form').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const newComment = `
                        <div class=\"comment-card\" id=\"comment-\${data.comment.id}\">
                            <h5>\${data.comment.nomcomment}</h5>
                            <p>\${data.comment.textCommentaire}</p>
                            <small>Posted on \${data.comment.timecomment}</small>
                        </div>`;
                    document.getElementById('comments-list').insertAdjacentHTML('beforeend', newComment);
                    this.reset();
                } else {
                    alert('Failed to add comment');
                }
            })
            .catch(error => console.error('Error:', error));
    });
      document.getElementById('addCommentBtn').addEventListener('click', function () {
        const commentForm = document.getElementById('commentForm');
        if (commentForm.style.display === 'none') {
            commentForm.style.display = 'block';
        } else {
            commentForm.style.display = 'none';
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
        return array (  486 => 236,  473 => 235,  460 => 231,  448 => 225,  444 => 224,  439 => 222,  435 => 221,  430 => 218,  423 => 214,  419 => 213,  414 => 212,  412 => 211,  406 => 208,  402 => 207,  398 => 206,  393 => 205,  389 => 204,  381 => 199,  375 => 196,  371 => 194,  365 => 192,  361 => 190,  359 => 188,  357 => 184,  355 => 183,  350 => 181,  345 => 178,  339 => 177,  330 => 174,  325 => 173,  320 => 172,  316 => 171,  298 => 156,  294 => 155,  289 => 153,  285 => 152,  279 => 151,  265 => 140,  261 => 139,  254 => 134,  241 => 133,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Event Detail - {{ event.titreevents }}{% endblock %}

{% block stylesheets %}
<meta name=\"csrf-token\" content=\"{{ csrf_token('like_dislike') }}\">

<style>
    /* Styles généraux */
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
    }

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

    .event-title {
        font-size: 2.5rem;
        color: #333;
        font-weight: bold;
        margin-bottom: 15px;
        text-align: center;
    }

    .event-description {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 25px;
        text-align: justify;
    }

    .event-dates {
        font-size: 1.1rem;
        color: #666;
        margin-top: 10px;
        padding: 15px;
        background-color: #f1f1f1;
        border-radius: 10px;
    }

    /* Section des commentaires */
    .comment-form {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        margin-top: 40px;
    }

    .comment-card {
        background-color: #f8f9fa;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .action-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    font-size: 1rem;
}
.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}
.alert-error {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}

    .btn {
        padding: 5px 10px;
        font-size: 0.9rem;
        border-radius: 5px;
        text-decoration: none;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .btn-edit {
        background-color: #007bff;
    }

    .btn-delete {
        background-color: #dc3545;
    }

    .btn-edit:hover {
        background-color: #0056b3;
    }

    .btn-delete:hover {
        background-color: #c82333;
    }
    .button-container {
    display: flex;
    justify-content: center; /* Centre horizontalement */
    align-items: center; /* Centre verticalement (si nécessaire) */
    margin-top: 20px; /* Facultatif, pour ajouter de l'espace au-dessus */
}

</style>
{% endblock %}

{% block body %}
<section id=\"photograph\" class=\"clearfix\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"photograph clearfix\">
        <p>
          <a href=\"{{ path('app_blog') }}\">Events</a> > 
          <span class=\"photo_tab\">{{ event.titreevents }}</span>
        </p>
      </div>
    </div>
  </div>
</section>
<section id=\"event_details\" class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col-md-12\">
        <div class=\"event-card\">
    <!-- Contenu existant -->
    <img src=\"{{ event.image1events }}\" class=\"event-image\" alt=\"{{ event.titreevents }}\">
    <h1 class=\"event-title\">{{ event.titreevents }}</h1>
    <p class=\"event-description\">{{ event.descriptionevents }}</p>
    <div class=\"event-dates\">
        <h6><strong>Start Date:</strong> {{ event.getDateDebut()|date('F d, Y') }}</h6>
        <h6><strong>End Date:</strong> {{ event.getDateFin()|date('F d, Y') }}</h6>
    </div>
    <div class=\"button-container\">
        <button id=\"addCommentBtn\" class=\"btn btn-primary\">Add Comment</button>
    </div>
</div>

        </div>
    </div>
</section>

<section id=\"comments_section\" class=\"container mt-5\">
    <h3>Leave a Comment</h3>

    <!-- Section pour afficher les messages flash -->
    {% for label, messages in app.flashes %}
        {% for message in messages %}
            <div class=\"alert alert-{{ label }} mt-3\" role=\"alert\">
                {{ message }}
            </div>
        {% endfor %}
    {% endfor %}

<div id=\"commentForm\" class=\"comment-form\" style=\"display: none;\">
    <h3>Add a Comment</h3>
    {{ form_start(commentaireForm, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-group\">
        {% if app.user %}
            {{ form_row(commentaireForm.nomcomment, {
                'attr': {
                    'class': 'form-control',
                    'readonly': 'readonly',
                    'value': app.user.name ~ ' ' ~ app.user.lastname
                }
            }) }}
        {% else %}
            {{ form_row(commentaireForm.nomcomment, {'attr': {'class': 'form-control'}}) }}
        {% endif %}
    </div>
    <div class=\"form-group\">
        {{ form_row(commentaireForm.text_commentaire, {'attr': {'class': 'form-control', 'rows': '4'}}) }}
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
    {{ form_end(commentaireForm) }}
</div>


<div id=\"comments-list\" class=\"mt-4\">
    {% for commentaire in commentaires %}
        <div class=\"comment-card\" id=\"comment-{{ commentaire.id }}\">
            <h5>{{ commentaire.nomcomment }}</h5>
            <p>{{ commentaire.textCommentaire }}</p>
            <small>Posted on {{ commentaire.timecomment|date('F d, Y H:i') }}</small>

            <div class=\"action-buttons\">
                {% if commentaire.user == app.user %}
                    <a href=\"{{ path('app_commentaire_edit', {'id': commentaire.id}) }}\" class=\"btn btn-edit\">Edit</a>
                    <form method=\"post\" action=\"{{ path('app_commentaire_delete', {'id': commentaire.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\" style=\"display: inline;\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ commentaire.id) }}\">
                        <button class=\"btn btn-delete\">Delete</button>
                    </form>
                {% endif %}
            </div>
<h4>Reacts : </h4>
<div class=\"like-dislike mt-2\">
    <button class=\"like-btn btn btn-outline-success\" data-id=\"{{ commentaire.id }}\" data-action=\"like\">
        👍 {{ commentaire.likes }}
    </button>
    <button class=\"dislike-btn btn btn-outline-danger\" data-id=\"{{ commentaire.id }}\" data-action=\"dislike\">
        👎 {{ commentaire.dislikes }}
    </button>
</div>

        </div>
    {% endfor %}
</div>
</section>
{% endblock %}

{% block javascripts %}
<script>
document.querySelectorAll('.like-btn, .dislike-btn').forEach(button => {
    button.addEventListener('click', function () {
        const commentaireId = this.dataset.id; // ID du commentaire
        const action = this.dataset.action; // \"like\" ou \"dislike\"

        // Récupère le token CSRF depuis un meta tag ou un autre emplacement
        const csrfToken = document.querySelector('meta[name=\"csrf-token\"]').getAttribute('content');

        // Effectue une requête AJAX
        fetch(`/commentaire/\${commentaireId}/\${action}`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': csrfToken,
                'X-Requested-With': 'XMLHttpRequest',
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Mise à jour de l'affichage des likes et dislikes
                const likeButton = document.querySelector(`.like-btn[data-id=\"\${commentaireId}\"]`);
                const dislikeButton = document.querySelector(`.dislike-btn[data-id=\"\${commentaireId}\"]`);

                if (likeButton) {
                    likeButton.innerHTML = `👍 \${data.likes}`;
                }
                if (dislikeButton) {
                    dislikeButton.innerHTML = `👎 \${data.dislikes}`;
                }
            } else {
                alert(data.message || 'Une erreur est survenue.');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Impossible de mettre à jour les données.');
        });
    });
});


    document.querySelector('.comment-form form').addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(this);

        fetch(this.action, {
            method: 'POST',
            body: formData,
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const newComment = `
                        <div class=\"comment-card\" id=\"comment-\${data.comment.id}\">
                            <h5>\${data.comment.nomcomment}</h5>
                            <p>\${data.comment.textCommentaire}</p>
                            <small>Posted on \${data.comment.timecomment}</small>
                        </div>`;
                    document.getElementById('comments-list').insertAdjacentHTML('beforeend', newComment);
                    this.reset();
                } else {
                    alert('Failed to add comment');
                }
            })
            .catch(error => console.error('Error:', error));
    });
      document.getElementById('addCommentBtn').addEventListener('click', function () {
        const commentForm = document.getElementById('commentForm');
        if (commentForm.style.display === 'none') {
            commentForm.style.display = 'block';
        } else {
            commentForm.style.display = 'none';
        }
    });
</script>
{% endblock %}
", "page/blog_detail.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\page\\blog_detail.html.twig");
    }
}
