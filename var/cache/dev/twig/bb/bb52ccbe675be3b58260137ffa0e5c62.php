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

/* page/about.html.twig */
class __TwigTemplate_ca420917f3d241c6a596d488356749fc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/about.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/about.html.twig", 1);
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
        yield "<section id=\"photograph\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"photograph clearfix\">
    <p><a href=\"#\">Home</a> > <span class=\"photo_tab\">About Us</span></p>
   </div>
  </div>
 </div>
</section>

<section id=\"proj_h\">
<div class=\"container\">
<div class=\"row\">
<div class=\"proj_h1 clearfix\">
<div class=\"col-sm-3\">
<div class=\"proj_h1i text-center clearfix\">
 <span><i class=\"fa fa-users\"></i></span>
 <h4 class=\"mt_15 col_black\">14 Million Business</h4>
 <p>Choose from a collection of handpicked luxury villas &amp; apartments</p>
 <h5><a class=\"button_link mgt\" href=\"#\">Explore Now</a></h5>
</div>
</div>
<div class=\"col-sm-3\">
<div class=\"proj_h1i text-center clearfix\">
 <span><i class=\"fa fa-building\"></i></span>
 <h4 class=\"mt_15 col_black\">600 Services Offered</h4>
 <p>Choose from a collection of handpicked luxury villas &amp; apartments</p>
 <h5><a class=\"button_link mgt\" href=\"#\">Explore Now</a></h5>
</div>
</div>
<div class=\"col-sm-3\">
<div class=\"proj_h1i text-center clearfix\">
 <span><i class=\"fa fa-map\"></i></span>
 <h4 class=\"mt_15 col_black\">08 Million Visitors</h4>
 <p>Choose from a collection of handpicked luxury villas &amp; apartments</p>
 <h5><a class=\"button_link mgt\" href=\"#\">Explore Now</a></h5>
</div>
</div>
<div class=\"col-sm-3\">
<div class=\"proj_h1i text-center clearfix\">
 <span><i class=\"fa fa-user-plus\"></i></span>
 <h4 class=\"mt_15 col_black\">21 Million Business</h4>
 <p>Choose from a collection of handpicked luxury villas &amp; apartments</p>
 <h5><a class=\"button_link mgt\" href=\"#\">Explore Now</a></h5>
</div>
</div>
</div>
</div>
</div>
</section>

<section id=\"course_home\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-5\">
<div class=\"course_home_r clearfix\">
 <img src=\"img/51.jpg\" class=\"iw\" alt=\"abc\">
</div>
</div>
<div class=\"col-sm-7\">
<div class=\"course_home_l clearfix\">
 <h3 class=\"mgt\">Integer Nec Odio Praesent Libero</h3>
 <p> Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.</p>
 <div class=\"course_home_li clearfix\">
  <div class=\"col-sm-6 space_left\">
   <div class=\"course_home_lii clearfix\">
\t   <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-user\"></span></div>
\t   <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Better Evaluation of Students</h4></div>
   </div>

  </div>
  <div class=\"col-sm-6 space_left\">
\t<div class=\"course_home_lii clearfix\">
\t <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-book\"></span></div>
\t <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Duis Sagittis Ipsum Praesent Mauris</h4></div>
\t</div>

  </div>
 </div>
 <div class=\"course_home_li clearfix\">
  <div class=\"col-sm-6 space_left\">
   <div class=\"course_home_lii clearfix\">
\t   <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-play-circle-o\"></span></div>
\t   <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Nulla Quis Sem At Nibh Elementum</h4></div>
   </div>

  </div>
  <div class=\"col-sm-6 space_left\">
\t<div class=\"course_home_lii clearfix\">
\t <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-pencil-square-o\"></span></div>
\t <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Sed Cursus Ante Dapibus Diam</h4></div>
\t</div>

  </div>
 </div>
 <div class=\"course_home_li clearfix\">
  <div class=\"col-sm-6 space_left\">
   <div class=\"course_home_lii clearfix\">
\t   <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-globe\"></span></div>
\t   <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Integer Nec Odio Praesent Libero</h4></div>
   </div>

  </div>
  <div class=\"col-sm-6 space_left\">
\t<div class=\"course_home_lii clearfix\">
\t <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-bookmark-o\"></span></div>
\t <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\">  Lorem Ipsum Dolor Sit Amet Consectetur </h4></div>
\t</div>

  </div>
 </div>
</div>
</div>
</div>
</div>
</section>

<section id=\"prom\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"prom_1 clearfix\">
    <div class=\"col-sm-6\">
      <div class=\"prom_1l clearfix\">
\t    <div class=\"grid clearfix\">
\t\t  <figure class=\"effect-jazz\">
\t\t\t<a href=\"#\"><img src=\"img/52.jpg\" height=\"560\" class=\"iw\" alt=\"img25\"></a>
\t\t  </figure>
\t  </div>
\t  </div>
\t</div>
\t<div class=\"col-sm-6\">
      <div class=\"prom_1r clearfix\">
\t   <h4 class=\"mgt col_black\">ANALYSIS</h4>
\t   <h3>Get Free SEO Analysis?</h3>
\t   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum auctor justo, ac bibendum neque sollicitudin ac.</p>
\t   <input class=\"form-control\" placeholder=\"Your Name\" type=\"text\">
\t   <input class=\"form-control\" placeholder=\"Email\" type=\"text\">
\t   <input class=\"form-control\" placeholder=\"Your Phone\" type=\"text\">
\t   <input class=\"form-control\" placeholder=\"Website\" type=\"text\">
\t   <h5><a class=\"button_link\" href=\"#\">SUBMIT </a></h5>
\t  </div>
\t</div>
   </div>
  </div>
 </div>
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
        return "page/about.html.twig";
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
        return array (  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block title %} Home - {% endblock %}
{% block body %}
<section id=\"photograph\" class=\"clearfix\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"photograph clearfix\">
    <p><a href=\"#\">Home</a> > <span class=\"photo_tab\">About Us</span></p>
   </div>
  </div>
 </div>
</section>

<section id=\"proj_h\">
<div class=\"container\">
<div class=\"row\">
<div class=\"proj_h1 clearfix\">
<div class=\"col-sm-3\">
<div class=\"proj_h1i text-center clearfix\">
 <span><i class=\"fa fa-users\"></i></span>
 <h4 class=\"mt_15 col_black\">14 Million Business</h4>
 <p>Choose from a collection of handpicked luxury villas &amp; apartments</p>
 <h5><a class=\"button_link mgt\" href=\"#\">Explore Now</a></h5>
</div>
</div>
<div class=\"col-sm-3\">
<div class=\"proj_h1i text-center clearfix\">
 <span><i class=\"fa fa-building\"></i></span>
 <h4 class=\"mt_15 col_black\">600 Services Offered</h4>
 <p>Choose from a collection of handpicked luxury villas &amp; apartments</p>
 <h5><a class=\"button_link mgt\" href=\"#\">Explore Now</a></h5>
</div>
</div>
<div class=\"col-sm-3\">
<div class=\"proj_h1i text-center clearfix\">
 <span><i class=\"fa fa-map\"></i></span>
 <h4 class=\"mt_15 col_black\">08 Million Visitors</h4>
 <p>Choose from a collection of handpicked luxury villas &amp; apartments</p>
 <h5><a class=\"button_link mgt\" href=\"#\">Explore Now</a></h5>
</div>
</div>
<div class=\"col-sm-3\">
<div class=\"proj_h1i text-center clearfix\">
 <span><i class=\"fa fa-user-plus\"></i></span>
 <h4 class=\"mt_15 col_black\">21 Million Business</h4>
 <p>Choose from a collection of handpicked luxury villas &amp; apartments</p>
 <h5><a class=\"button_link mgt\" href=\"#\">Explore Now</a></h5>
</div>
</div>
</div>
</div>
</div>
</section>

<section id=\"course_home\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-5\">
<div class=\"course_home_r clearfix\">
 <img src=\"img/51.jpg\" class=\"iw\" alt=\"abc\">
</div>
</div>
<div class=\"col-sm-7\">
<div class=\"course_home_l clearfix\">
 <h3 class=\"mgt\">Integer Nec Odio Praesent Libero</h3>
 <p> Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitursodales ligula in libero.Sed dignissim lacinia nunc.</p>
 <div class=\"course_home_li clearfix\">
  <div class=\"col-sm-6 space_left\">
   <div class=\"course_home_lii clearfix\">
\t   <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-user\"></span></div>
\t   <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Better Evaluation of Students</h4></div>
   </div>

  </div>
  <div class=\"col-sm-6 space_left\">
\t<div class=\"course_home_lii clearfix\">
\t <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-book\"></span></div>
\t <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Duis Sagittis Ipsum Praesent Mauris</h4></div>
\t</div>

  </div>
 </div>
 <div class=\"course_home_li clearfix\">
  <div class=\"col-sm-6 space_left\">
   <div class=\"course_home_lii clearfix\">
\t   <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-play-circle-o\"></span></div>
\t   <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Nulla Quis Sem At Nibh Elementum</h4></div>
   </div>

  </div>
  <div class=\"col-sm-6 space_left\">
\t<div class=\"course_home_lii clearfix\">
\t <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-pencil-square-o\"></span></div>
\t <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Sed Cursus Ante Dapibus Diam</h4></div>
\t</div>

  </div>
 </div>
 <div class=\"course_home_li clearfix\">
  <div class=\"col-sm-6 space_left\">
   <div class=\"course_home_lii clearfix\">
\t   <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-globe\"></span></div>
\t   <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\"> Integer Nec Odio Praesent Libero</h4></div>
   </div>

  </div>
  <div class=\"col-sm-6 space_left\">
\t<div class=\"course_home_lii clearfix\">
\t <div class=\"col-sm-2 space_left col-xs-2\"><span class=\"fa fa-bookmark-o\"></span></div>
\t <div class=\"col-sm-10 space_right col-xs-10\"><h4 class=\"mgt col_black\">  Lorem Ipsum Dolor Sit Amet Consectetur </h4></div>
\t</div>

  </div>
 </div>
</div>
</div>
</div>
</div>
</section>

<section id=\"prom\">
 <div class=\"container\">
  <div class=\"row\">
   <div class=\"prom_1 clearfix\">
    <div class=\"col-sm-6\">
      <div class=\"prom_1l clearfix\">
\t    <div class=\"grid clearfix\">
\t\t  <figure class=\"effect-jazz\">
\t\t\t<a href=\"#\"><img src=\"img/52.jpg\" height=\"560\" class=\"iw\" alt=\"img25\"></a>
\t\t  </figure>
\t  </div>
\t  </div>
\t</div>
\t<div class=\"col-sm-6\">
      <div class=\"prom_1r clearfix\">
\t   <h4 class=\"mgt col_black\">ANALYSIS</h4>
\t   <h3>Get Free SEO Analysis?</h3>
\t   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras bibendum auctor justo, ac bibendum neque sollicitudin ac.</p>
\t   <input class=\"form-control\" placeholder=\"Your Name\" type=\"text\">
\t   <input class=\"form-control\" placeholder=\"Email\" type=\"text\">
\t   <input class=\"form-control\" placeholder=\"Your Phone\" type=\"text\">
\t   <input class=\"form-control\" placeholder=\"Website\" type=\"text\">
\t   <h5><a class=\"button_link\" href=\"#\">SUBMIT </a></h5>
\t  </div>
\t</div>
   </div>
  </div>
 </div>
</section>
{% endblock %}", "page/about.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\page\\about.html.twig");
    }
}
