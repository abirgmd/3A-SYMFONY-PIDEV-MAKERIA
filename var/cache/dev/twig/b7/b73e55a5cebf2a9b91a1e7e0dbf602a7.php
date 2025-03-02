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

/* page/index.html.twig */
class __TwigTemplate_6945f917444e4059cd2a98e98d70d999 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield " Home - ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 3
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

        // line 4
        yield "<section id=\"center\" class=\"clearfix\">
   <div class=\"center clearfix\">
    \t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<!-- Indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t  \t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"\"></li>
\t\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\" class=\"\"></li>
\t\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\" class=\"active\"></li>
\t\t\t</ol>
\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\">
\t\t\t    <div class=\"item\">
\t\t\t    \t<img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/1.jpg"), "html", null, true);
        yield "\" alt=\"First slide\">
                    <!-- Static Header -->
                    <div class=\"header-text\">
                        <div class=\"col-sm-7 center_inner clearfix\">
\t\t\t\t\t\t<div class=\"center_slide clearfix\">
\t\t\t\t\t\t  <h4>ADIPISCING</h4>
\t\t\t\t\t\t  <h2>Praesent mauris. Fusce nec tellus sed augue!</h2>
\t\t\t\t\t\t  <h3><span class=\"opening_left\">12 June, 2016</span> | <span class=\"opening_right\">Open Today 10AM�5:30PM</span></h3>
\t\t\t\t\t\t  <p><a href=\"#\">BUY TICKET</a></p>
\t\t\t\t\t\t</div>
                            <br>
                        </div>
                    </div><!-- /header-text -->
\t\t\t    </div>
\t\t\t    <div class=\"item\">
\t\t\t    \t<img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/2.jpg"), "html", null, true);
        yield "\" alt=\"Second slide\">
\t\t\t    \t<!-- Static Header -->
                    <div class=\"header-text\">
                        <div class=\"col-sm-7 center_inner clearfix\">
\t\t\t\t\t\t<div class=\"center_slide clearfix\">
\t\t\t\t\t\t  <h4>ADIPISCING</h4>
\t\t\t\t\t\t  <h2>Nulla quis nibh elementum imperdiet!</h2>
\t\t\t\t\t\t  <h3><span class=\"opening_left\">13 June, 2016</span> | <span class=\"opening_right\">Open Today 10AM�5:30PM</span></h3>
\t\t\t\t\t\t  <p><a href=\"#\">BUY TICKET</a></p>
\t\t\t\t\t\t</div>
                            <br>
                        </div>
                    </div><!-- /header-text -->
\t\t\t    </div>
\t\t\t    <div class=\"item active\">
\t\t\t    \t<img src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/3.jpg"), "html", null, true);
        yield "\" alt=\"Third slide\">
\t\t\t    \t<!-- Static Header -->
                    <div class=\"header-text\">
                        <div class=\"col-sm-7 center_inner clearfix\">
\t\t\t\t\t\t<div class=\"center_slide clearfix\">
\t\t\t\t\t\t  <h4>ADIPISCING</h4>
\t\t\t\t\t\t  <h2>Class aptent taciti sociosqu ad litora torquent!</h2>
\t\t\t\t\t\t  <h3><span class=\"opening_left\">12 June, 2016</span> | <span class=\"opening_right\">Open Today 10AM�5:30PM</span></h3>
\t\t\t\t\t\t  <p><a href=\"#\">BUY TICKET</a></p>
\t\t\t\t\t\t</div>
                            <br>
                        </div>
                    </div><!-- /header-text -->
\t\t\t    </div>
\t\t\t</div>
\t\t\t<!-- Controls -->
\t\t\t<a class=\"left carousel-control\" href=\"http://bootsnipp-env.elasticbeanstalk.com/iframe/7B4x#carousel-example-generic\" data-slide=\"prev\">
\t\t    \t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"http://bootsnipp-env.elasticbeanstalk.com/iframe/7B4x#carousel-example-generic\" data-slide=\"next\">
\t\t    \t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t</a>
\t\t</div><!-- /carousel -->
\t</div>
</section>

<section id=\"center_1\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"center_1 clearfix\">
   <div class=\"center_1_top clearfix\">
    <p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos C. Curabitursodales ligula.</p>
   </div>
   <div class=\"center_1_bottom clearfix\">
     <div class=\"col-sm-6 artist_left clearfix\">
\t  <div class=\"artist_left_inner_1 clearfix\">
\t 
\t    
\t\t
\t   </div>
\t 
\t  </div>
\t </div>
\t
   </div>
   
   </div>
  </div>
 </div>
</section>

<section id=\"center_3\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"center_3 clearfix\">
    <h2>Arcu Eget Nulla</h2>
\t<p>Lorem ipsum dolor amet, consectetur adipiscing elit. Integer nec odionec odio. Praesent</p>
   </div>
  </div>
 </div>
 </section>
 

 
<section id=\"box\">
\t\t\t\t
\t\t\t\t\t\t <div class=\"col-sm-12 box clearfix\">
\t\t\t\t\t\t    <div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/500/1.jpg"), "html", null, true);
        yield "\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/17.jpg"), "html", null, true);
        yield "\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/500/2.jpg"), "html", null, true);
        yield "\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/18.jpg"), "html", null, true);
        yield "\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/500/3.jpg"), "html", null, true);
        yield "\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/19.jpg"), "html", null, true);
        yield "\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/500/4.jpg"), "html", null, true);
        yield "\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/20.jpg"), "html", null, true);
        yield "\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div><div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/500/5.jpg"), "html", null, true);
        yield "\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/21.jpg"), "html", null, true);
        yield "\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/500/6.jpg"), "html", null, true);
        yield "\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/22.jpg"), "html", null, true);
        yield "\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t </div>
\t\t\t
            </section>
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
        return "page/index.html.twig";
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
        return array (  318 => 178,  314 => 177,  300 => 166,  296 => 165,  283 => 155,  279 => 154,  264 => 142,  260 => 141,  246 => 130,  242 => 129,  228 => 118,  224 => 117,  150 => 46,  132 => 31,  114 => 16,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block title %} Home - {% endblock %}
{% block body %}
<section id=\"center\" class=\"clearfix\">
   <div class=\"center clearfix\">
    \t<div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<!-- Indicators -->
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t  \t<li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"\"></li>
\t\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\" class=\"\"></li>
\t\t\t    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\" class=\"active\"></li>
\t\t\t</ol>
\t\t\t<!-- Wrapper for slides -->
\t\t\t<div class=\"carousel-inner\">
\t\t\t    <div class=\"item\">
\t\t\t    \t<img src=\"{{asset('img/1.jpg')}}\" alt=\"First slide\">
                    <!-- Static Header -->
                    <div class=\"header-text\">
                        <div class=\"col-sm-7 center_inner clearfix\">
\t\t\t\t\t\t<div class=\"center_slide clearfix\">
\t\t\t\t\t\t  <h4>ADIPISCING</h4>
\t\t\t\t\t\t  <h2>Praesent mauris. Fusce nec tellus sed augue!</h2>
\t\t\t\t\t\t  <h3><span class=\"opening_left\">12 June, 2016</span> | <span class=\"opening_right\">Open Today 10AM�5:30PM</span></h3>
\t\t\t\t\t\t  <p><a href=\"#\">BUY TICKET</a></p>
\t\t\t\t\t\t</div>
                            <br>
                        </div>
                    </div><!-- /header-text -->
\t\t\t    </div>
\t\t\t    <div class=\"item\">
\t\t\t    \t<img src=\"{{asset('img/2.jpg')}}\" alt=\"Second slide\">
\t\t\t    \t<!-- Static Header -->
                    <div class=\"header-text\">
                        <div class=\"col-sm-7 center_inner clearfix\">
\t\t\t\t\t\t<div class=\"center_slide clearfix\">
\t\t\t\t\t\t  <h4>ADIPISCING</h4>
\t\t\t\t\t\t  <h2>Nulla quis nibh elementum imperdiet!</h2>
\t\t\t\t\t\t  <h3><span class=\"opening_left\">13 June, 2016</span> | <span class=\"opening_right\">Open Today 10AM�5:30PM</span></h3>
\t\t\t\t\t\t  <p><a href=\"#\">BUY TICKET</a></p>
\t\t\t\t\t\t</div>
                            <br>
                        </div>
                    </div><!-- /header-text -->
\t\t\t    </div>
\t\t\t    <div class=\"item active\">
\t\t\t    \t<img src=\"{{asset('img/3.jpg')}}\" alt=\"Third slide\">
\t\t\t    \t<!-- Static Header -->
                    <div class=\"header-text\">
                        <div class=\"col-sm-7 center_inner clearfix\">
\t\t\t\t\t\t<div class=\"center_slide clearfix\">
\t\t\t\t\t\t  <h4>ADIPISCING</h4>
\t\t\t\t\t\t  <h2>Class aptent taciti sociosqu ad litora torquent!</h2>
\t\t\t\t\t\t  <h3><span class=\"opening_left\">12 June, 2016</span> | <span class=\"opening_right\">Open Today 10AM�5:30PM</span></h3>
\t\t\t\t\t\t  <p><a href=\"#\">BUY TICKET</a></p>
\t\t\t\t\t\t</div>
                            <br>
                        </div>
                    </div><!-- /header-text -->
\t\t\t    </div>
\t\t\t</div>
\t\t\t<!-- Controls -->
\t\t\t<a class=\"left carousel-control\" href=\"http://bootsnipp-env.elasticbeanstalk.com/iframe/7B4x#carousel-example-generic\" data-slide=\"prev\">
\t\t    \t<span class=\"glyphicon glyphicon-chevron-left\"></span>
\t\t\t</a>
\t\t\t<a class=\"right carousel-control\" href=\"http://bootsnipp-env.elasticbeanstalk.com/iframe/7B4x#carousel-example-generic\" data-slide=\"next\">
\t\t    \t<span class=\"glyphicon glyphicon-chevron-right\"></span>
\t\t\t</a>
\t\t</div><!-- /carousel -->
\t</div>
</section>

<section id=\"center_1\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"center_1 clearfix\">
   <div class=\"center_1_top clearfix\">
    <p>Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos C. Curabitursodales ligula.</p>
   </div>
   <div class=\"center_1_bottom clearfix\">
     <div class=\"col-sm-6 artist_left clearfix\">
\t  <div class=\"artist_left_inner_1 clearfix\">
\t 
\t    
\t\t
\t   </div>
\t 
\t  </div>
\t </div>
\t
   </div>
   
   </div>
  </div>
 </div>
</section>

<section id=\"center_3\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"center_3 clearfix\">
    <h2>Arcu Eget Nulla</h2>
\t<p>Lorem ipsum dolor amet, consectetur adipiscing elit. Integer nec odionec odio. Praesent</p>
   </div>
  </div>
 </div>
 </section>
 

 
<section id=\"box\">
\t\t\t\t
\t\t\t\t\t\t <div class=\"col-sm-12 box clearfix\">
\t\t\t\t\t\t    <div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"{{asset('img/500/1.jpg')}}\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('img/17.jpg')}}\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"{{asset('img/500/2.jpg')}}\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('img/18.jpg')}}\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"{{asset('img/500/3.jpg')}}\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('img/19.jpg')}}\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"{{asset('img/500/4.jpg')}}\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('img/20.jpg')}}\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div><div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"{{asset('img/500/5.jpg')}}\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('img/21.jpg')}}\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2 box_left_top_left clearfix\">
\t\t\t\t\t\t\t <div class=\"av-container av-visible\"><article class=\"aniview animated slideInDown\" data-av-animation=\"slideInDown\" style=\"opacity: 1;\">
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t<a href=\"{{asset('img/500/6.jpg')}}\" title=\"Nature Portfolio\" class=\"zoom\" data-title=\"Trending Art\" data-footer=\"In the fashion world\" data-type=\"image\" data-toggle=\"lightbox\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('img/22.jpg')}}\" width=\"100%\" alt=\"Nature Portfolio\">
\t\t\t\t\t\t\t\t\t\t<span class=\"overlay\"><i class=\"glyphicon glyphicon-fullscreen\"></i></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</article></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t </div>
\t\t\t
            </section>
{% endblock %}", "page/index.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\page\\index.html.twig");
    }
}
