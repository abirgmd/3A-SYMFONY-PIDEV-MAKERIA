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

/* base2.html.twig */
class __TwigTemplate_d9efb282dd9ff223e952189e84e4a358 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "Makeria</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        yield "\" />
        <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" media=\"all\">
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        yield "\" />
        <link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 15
        yield "
       
    </head>
    <body>
\t<section id=\"top\" class=\"clearfix\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"top clearfix\">
\t\t\t\t\t<div class=\"col-sm-4 top_left clearfix\">
\t\t\t\t\t\t<div class=\"top_left_inner clearfix\">
\t\t\t\t\t\t\t<p><a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        yield "\"></i>Make <span
\t\t\t\t\t\t\t\t\t\tclass=\"new_right\">Ria</span></a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 top_left clearfix\">
\t\t\t\t\t\t<div class=\"top_new clearfix\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\tGo!</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 top_right clearfix\">
\t\t\t\t\t\t<div class=\"top_right_inner clearfix\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t<li>
";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            yield "<a href=\"/user/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
            yield "\">
<img src=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("user/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "image", [], "any", false, false, false, 46))), "html", null, true);
            yield "\" width=\"50px\" height=\"50px\" style=\"margin-top: 10px;\" alt=\"Profile Photo\">
</a>
";
        }
        // line 49
        yield "
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t 
\t\t\t<li>
    ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            yield "        <a class=\"btn btn-danger\" style=\"margin-top: 10px;\" href=\"/logout\">Logout</a>
    ";
        } else {
            // line 56
            yield "        <div class=\"text-center\">
\t\t<br></br>
            <a class=\"text-danger mx-2\" href=\"/login\">Login</a> | 
            <a class=\"text-danger mx-2\" href=\"/register\">Create account</a>
        </div>
    ";
        }
        // line 62
        yield "</li>


\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

<section id=\"header\" class=\"cd-secondary-nav clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"header clearfix\">
    <nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t<div class=\"container\">
\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        yield "\"><i class=\"fa fa-pencil\"></i>New <span class=\"new_right\">Art</span></a>
\t\t\t</div>

\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t<li class=\"active\"><a class=\"header_tab\" href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_homepage");
        yield "\">Home</a></li>
\t\t\t\t\t<li><a class=\"header_tab\" href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\">About</a></li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"header_tab dropdown-toggle\" data-toggle=\"dropdown\">Product <b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu drop_1\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produits");
        yield "\">Product</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"header_tab\" href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\">Forum</a></li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"header_tab dropdown-toggle\" data-toggle=\"dropdown\">Event <b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu drop_1\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_blog");
        yield "\">Go to Event</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"header_tab dropdown-toggle\" data-toggle=\"dropdown\">Reclamation <b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu drop_1\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\">Ajouter reclamation</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_my");
        yield "\">Mes reclamations</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t
\t\t\t\t\t  </ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div><!-- /.navbar-collapse -->
\t\t</div><!-- /.container-fluid -->
\t</nav>
   </div>
  </div>
 </div>
</section>
";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "blok", [], "any", false, false, false, 128))) {
            // line 129
            yield "<div class=\"alert alert-danger text-center mt-5\">YOU ARE BLOCKED , CONTACT ADMIN FOR MORE INFOS</div>

";
        } else {
            // line 132
            yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        }
        // line 133
        yield "\t\t

 
<section id=\"footer\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"footer clearfix\">
\t  <div class=\"col-sm-4 footer_left clearfix\">
\t <div class=\"footer_left_inner clearfix\">
\t   <h4>About</h4>
\t   <p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos C. Curabitursodales ligula in libero....</p>
\t   <ul>
\t    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-youtube-square\"></i></a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t   </ul>
\t </div>
\t</div>
\t <div class=\"col-sm-2 footer_right_inner_1 clearfix\">
\t    <div class=\"informer clearfix\">
\t\t <h4>Other Link</h4>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Curabitursodales</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Torquent Nulla</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Sociosqu</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Class aptent</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Integer nec</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Integer nec</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Conubia</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Curabitursodales</a></p>
\t\t</div>
\t   </div>
\t   <div class=\"col-sm-2 footer_right_inner_1 clearfix\">
\t    <div class=\"informer clearfix\">
\t\t <h4>Popular Link</h4>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Elementum</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Mauris massa</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Nulla quis</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Conubia</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Curabitursodales</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Torquent Nulla</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Sociosqu</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Class aptent</a></p>
\t\t</div>
\t   </div>
\t   <div class=\"col-sm-4 footer_right_inner_n clearfix\">
\t    <div class=\"informer clearfix\">
\t\t <h4>Contact Us</h4>
\t\t<div class=\"footer_right_inner_ni clearfix\">
\t\t  <div class=\"col-sm-1 col-xs-1\">
\t\t   <span class=\"col_pur\"><i class=\"fa fa-map-marker\"></i></span>
\t\t  </div>
\t\t  <div class=\"col-sm-11 col-xs-11\">
\t\t   <p class=\"col_white\">Z793 STower Suat, Suite 26 Knockland, DB 8513 United Kingdom</p>
\t\t  </div>
\t\t</div>
\t\t<div class=\"footer_right_inner_ni clearfix\">
\t\t  <div class=\"col-sm-1 col-xs-1\">
\t\t   <span class=\"col_pur\"><i class=\"fa fa-headphones\"></i></span>
\t\t  </div>
\t\t  <div class=\"col-sm-11 col-xs-11\">
\t\t   <p class=\"col_white\">+(000) 345 67 89</p>
\t\t  </div>
\t\t</div>
\t\t<div class=\"footer_right_inner_ni clearfix\">
\t\t  <div class=\"col-sm-1 col-xs-1\">
\t\t   <span class=\"col_pur\"><i class=\"fa fa-envelope\"></i></span>
\t\t  </div>
\t\t  <div class=\"col-sm-11 col-xs-11\">
\t\t   <p class=\"col_white\">info@gmail.com</p>
\t\t  </div>
\t\t</div>
\t\t<div class=\"footer_right_inner_ni\">
\t\t  <div class=\"col-sm-1 col-xs-1\">
\t\t   <span class=\"col_pur fs-5\"><i class=\"fa fa-phone\"></i></span>
\t\t  </div>
\t\t  <div class=\"col-sm-11 col-xs-11\">
\t\t   <p class=\"col_white\">+(000) 345 67 89</p>
\t\t  </div>
\t\t</div>
\t\t</div>
\t   </div>
   </div>
  </div>
 </div>
 </section>
 
<section id=\"footer_end\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"footer_end clearfix\">
\t <p class=\"website\">� 2013 Your Website Name. All rights reserved | Design by<a href=\"http://www.templateonweb.com\"> TemplateOnWeb</a></p>
   </div>
  </div>
 </div>
 </section>
      <script type=\"text/javascript\"  src=\"";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-2.1.1.min.js"), "html", null, true);
        yield "\"></script>
      <script  type=\"text/javascript\" src=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
\t  <script src=\"";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/ekko-lightbox.js"), "html", null, true);
        yield "\"></script>
<script>
\t\$(document).ready(function() {              
    \$('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
        var \$this = \$(this),
        c = \$this.data('count');    
        if (!c) c = 0;
        c++;
        \$this.data('count',c);
        \$('#'+this.id+'-bs3').html(c);
    });      
    \$(document).delegate('*[data-toggle=\"lightbox\"]', 'click', function(event) {
        event.preventDefault();
        \$(this).ekkoLightbox();
    });                                        
}); 

</script>

<script>
\$(document).ready(function(){
\t/*****Fixed Menu******/
\tvar secondaryNav = \$('.cd-secondary-nav'),
\t   secondaryNavTopPosition = secondaryNav.offset().top;
\t   navbar_height = document.querySelector('.navbar').offsetHeight;
\t   
\t\t\$(window).on('scroll', function(){
\t\t    if(\$(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
\t\t\t\tsecondaryNav.addClass('is-fixed');\t
\t\t\t\tdocument.body.style.paddingTop = navbar_height + 'px';
\t\t\t\t
\t\t\t} else {
\t\t\t\tsecondaryNav.removeClass('is-fixed');
\t\t\t\tdocument.body.style.paddingTop = '0'
\t\t\t}
\t\t});\t
\t\t
});
</script>
";
        // line 271
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 273
        yield "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
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

        // line 14
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 132
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 271
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base2.html.twig";
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
        return array (  484 => 271,  462 => 132,  451 => 14,  438 => 13,  416 => 5,  403 => 273,  401 => 271,  359 => 232,  355 => 231,  351 => 230,  252 => 133,  249 => 132,  244 => 129,  242 => 128,  224 => 113,  220 => 112,  210 => 105,  203 => 101,  197 => 98,  190 => 94,  186 => 93,  177 => 87,  150 => 62,  142 => 56,  138 => 54,  136 => 53,  130 => 49,  124 => 46,  119 => 45,  117 => 44,  95 => 25,  83 => 15,  81 => 13,  76 => 11,  72 => 10,  68 => 9,  64 => 8,  58 => 5,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}Makeria</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/bootstrap.min.css')}}\" />
        <link href=\"{{asset('css/animate.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/style.css')}}\" media=\"all\">
\t    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('css/font-awesome.min.css')}}\" />
        <link href=\"https://fonts.googleapis.com/css?family=Joti+One\" rel=\"stylesheet\">
        {% block stylesheets %}
        {% endblock %}

       
    </head>
    <body>
\t<section id=\"top\" class=\"clearfix\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"top clearfix\">
\t\t\t\t\t<div class=\"col-sm-4 top_left clearfix\">
\t\t\t\t\t\t<div class=\"top_left_inner clearfix\">
\t\t\t\t\t\t\t<p><a href=\"{{path('app_homepage')}}\"></i>Make <span
\t\t\t\t\t\t\t\t\t\tclass=\"new_right\">Ria</span></a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 top_left clearfix\">
\t\t\t\t\t\t<div class=\"top_new clearfix\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\tGo!</button>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4 top_right clearfix\">
\t\t\t\t\t\t<div class=\"top_right_inner clearfix\">
\t\t\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t\t\t<li>
{% if app.user %}
<a href=\"/user/{{app.user.id}}\">
<img src=\"{{ asset('user/' ~ app.user.image) }}\" width=\"50px\" height=\"50px\" style=\"margin-top: 10px;\" alt=\"Profile Photo\">
</a>
{% endif %}

\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t 
\t\t\t<li>
    {% if app.user %}
        <a class=\"btn btn-danger\" style=\"margin-top: 10px;\" href=\"/logout\">Logout</a>
    {% else %}
        <div class=\"text-center\">
\t\t<br></br>
            <a class=\"text-danger mx-2\" href=\"/login\">Login</a> | 
            <a class=\"text-danger mx-2\" href=\"/register\">Create account</a>
        </div>
    {% endif %}
</li>


\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

<section id=\"header\" class=\"cd-secondary-nav clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"header clearfix\">
    <nav class=\"navbar navbar-default\" role=\"navigation\">
\t\t<div class=\"container\">
\t\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t</button>
\t\t\t\t<a class=\"navbar-brand\" href=\"{{path('app_homepage')}}\"><i class=\"fa fa-pencil\"></i>New <span class=\"new_right\">Art</span></a>
\t\t\t</div>

\t\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t<li class=\"active\"><a class=\"header_tab\" href=\"{{path('app_homepage')}}\">Home</a></li>
\t\t\t\t\t<li><a class=\"header_tab\" href=\"{{path('app_about')}}\">About</a></li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"header_tab dropdown-toggle\" data-toggle=\"dropdown\">Product <b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu drop_1\">
\t\t\t\t\t\t\t<li><a href=\"{{path('app_produits')}}\">Product</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"header_tab\" href=\"{{path('app_forum')}}\">Forum</a></li>
\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"header_tab dropdown-toggle\" data-toggle=\"dropdown\">Event <b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu drop_1\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_blog') }}\">Go to Event</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"header_tab dropdown-toggle\" data-toggle=\"dropdown\">Reclamation <b class=\"caret\"></b></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu drop_1\">
\t\t\t\t\t\t\t<li><a href=\"{{path('app_reclamation_new')}}\">Ajouter reclamation</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{path('app_reclamation_my')}}\">Mes reclamations</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t
\t\t\t\t\t  </ul>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div><!-- /.navbar-collapse -->
\t\t</div><!-- /.container-fluid -->
\t</nav>
   </div>
  </div>
 </div>
</section>
{% if app.user and app.user.blok %}
<div class=\"alert alert-danger text-center mt-5\">YOU ARE BLOCKED , CONTACT ADMIN FOR MORE INFOS</div>

{% else %}
{% block body %}{% endblock %}
{% endif %}\t\t

 
<section id=\"footer\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"footer clearfix\">
\t  <div class=\"col-sm-4 footer_left clearfix\">
\t <div class=\"footer_left_inner clearfix\">
\t   <h4>About</h4>
\t   <p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos C. Curabitursodales ligula in libero....</p>
\t   <ul>
\t    <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-youtube-square\"></i></a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-pinterest-p\"></i></a></li>
\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t   </ul>
\t </div>
\t</div>
\t <div class=\"col-sm-2 footer_right_inner_1 clearfix\">
\t    <div class=\"informer clearfix\">
\t\t <h4>Other Link</h4>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Curabitursodales</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Torquent Nulla</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Sociosqu</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Class aptent</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Integer nec</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Integer nec</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Conubia</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Curabitursodales</a></p>
\t\t</div>
\t   </div>
\t   <div class=\"col-sm-2 footer_right_inner_1 clearfix\">
\t    <div class=\"informer clearfix\">
\t\t <h4>Popular Link</h4>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Elementum</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Mauris massa</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Nulla quis</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Conubia</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Curabitursodales</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Torquent Nulla</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Sociosqu</a></p>
\t\t <p class=\"col-sm-12 col-xs-6 space_left\"><a href=\"#\">Class aptent</a></p>
\t\t</div>
\t   </div>
\t   <div class=\"col-sm-4 footer_right_inner_n clearfix\">
\t    <div class=\"informer clearfix\">
\t\t <h4>Contact Us</h4>
\t\t<div class=\"footer_right_inner_ni clearfix\">
\t\t  <div class=\"col-sm-1 col-xs-1\">
\t\t   <span class=\"col_pur\"><i class=\"fa fa-map-marker\"></i></span>
\t\t  </div>
\t\t  <div class=\"col-sm-11 col-xs-11\">
\t\t   <p class=\"col_white\">Z793 STower Suat, Suite 26 Knockland, DB 8513 United Kingdom</p>
\t\t  </div>
\t\t</div>
\t\t<div class=\"footer_right_inner_ni clearfix\">
\t\t  <div class=\"col-sm-1 col-xs-1\">
\t\t   <span class=\"col_pur\"><i class=\"fa fa-headphones\"></i></span>
\t\t  </div>
\t\t  <div class=\"col-sm-11 col-xs-11\">
\t\t   <p class=\"col_white\">+(000) 345 67 89</p>
\t\t  </div>
\t\t</div>
\t\t<div class=\"footer_right_inner_ni clearfix\">
\t\t  <div class=\"col-sm-1 col-xs-1\">
\t\t   <span class=\"col_pur\"><i class=\"fa fa-envelope\"></i></span>
\t\t  </div>
\t\t  <div class=\"col-sm-11 col-xs-11\">
\t\t   <p class=\"col_white\">info@gmail.com</p>
\t\t  </div>
\t\t</div>
\t\t<div class=\"footer_right_inner_ni\">
\t\t  <div class=\"col-sm-1 col-xs-1\">
\t\t   <span class=\"col_pur fs-5\"><i class=\"fa fa-phone\"></i></span>
\t\t  </div>
\t\t  <div class=\"col-sm-11 col-xs-11\">
\t\t   <p class=\"col_white\">+(000) 345 67 89</p>
\t\t  </div>
\t\t</div>
\t\t</div>
\t   </div>
   </div>
  </div>
 </div>
 </section>
 
<section id=\"footer_end\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"footer_end clearfix\">
\t <p class=\"website\">� 2013 Your Website Name. All rights reserved | Design by<a href=\"http://www.templateonweb.com\"> TemplateOnWeb</a></p>
   </div>
  </div>
 </div>
 </section>
      <script type=\"text/javascript\"  src=\"{{asset('js/jquery-2.1.1.min.js')}}\"></script>
      <script  type=\"text/javascript\" src=\"{{asset('js/bootstrap.min.js')}}\"></script>
\t  <script src=\"{{asset('js/ekko-lightbox.js')}}\"></script>
<script>
\t\$(document).ready(function() {              
    \$('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){    
        var \$this = \$(this),
        c = \$this.data('count');    
        if (!c) c = 0;
        c++;
        \$this.data('count',c);
        \$('#'+this.id+'-bs3').html(c);
    });      
    \$(document).delegate('*[data-toggle=\"lightbox\"]', 'click', function(event) {
        event.preventDefault();
        \$(this).ekkoLightbox();
    });                                        
}); 

</script>

<script>
\$(document).ready(function(){
\t/*****Fixed Menu******/
\tvar secondaryNav = \$('.cd-secondary-nav'),
\t   secondaryNavTopPosition = secondaryNav.offset().top;
\t   navbar_height = document.querySelector('.navbar').offsetHeight;
\t   
\t\t\$(window).on('scroll', function(){
\t\t    if(\$(window).scrollTop() > secondaryNavTopPosition + navbar_height ) {
\t\t\t\tsecondaryNav.addClass('is-fixed');\t
\t\t\t\tdocument.body.style.paddingTop = navbar_height + 'px';
\t\t\t\t
\t\t\t} else {
\t\t\t\tsecondaryNav.removeClass('is-fixed');
\t\t\t\tdocument.body.style.paddingTop = '0'
\t\t\t}
\t\t});\t
\t\t
});
</script>
{% block javascripts %}
{% endblock %}
    </body>
</html>
", "base2.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\base2.html.twig");
    }
}
