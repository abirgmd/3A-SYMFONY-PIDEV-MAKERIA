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

/* page/success.html.twig */
class __TwigTemplate_0d60f809b31a34c5d464700e4d701722 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/success.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        /* Styling for the main content and background */
        .main-content {
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
            height: 100vh;
            background: linear-gradient(to right, rgba(36,31,31,1) 0%, rgba(36,31,31,1) 32%, rgba(74,71,70,1) 100%);
            color: #fff;
            text-align: center;
        }

        /* Vignette effect */
        .vignette {
            position: absolute;
            width: 100%;
            height: 100%;
            box-shadow: inset 0px 0px 150px 20px black;
            mix-blend-mode: multiply;
            -webkit-animation: vignette-anim 3s infinite; /* Safari 4+ */
            -moz-animation: vignette-anim 3s infinite; /* Fx 5+ */
            -o-animation: vignette-anim 3s infinite; /* Opera 12+ */
            animation: vignette-anim 3s infinite; /* IE 10+, Fx 29+ */
        }

        /* Canvas noise effect */
        .noise {
            z-index: 100;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            opacity: .15;
        }

        /* Title container */
        .titleCont {
            position: relative;
        }

        /* Main title */
        .main-title {
            padding: .3em 1em .25em;    
            font-weight: 400;
            font-size: 40px;
            color: white;
            font-family: 'Bellefair', serif;
            position: relative;
            line-height: 1.3;
        }

        /* Animation for the vignette effect */
        @-webkit-keyframes vignette-anim {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        @-moz-keyframes vignette-anim {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        @-o-keyframes vignette-anim {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        @keyframes vignette-anim {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
    </style>
</head>
<body>
    <main role=\"main\" class=\"main-content\" id=\"main-content\">
        <div class=\"titleCont\">
            <h1 class=\"main-title\" id=\"main-title\">
                \"Merci !!,<br>
                <span style=\"padding-left:100px\">votre commande,</span><br>
                <span style=\"padding-right:110px\">est passée ,</span><br>
                <span style=\"padding-left:-20px\"> avec succès.\"</span>
            </h1>
        </div>
        <canvas id=\"noise\" class=\"noise\"></canvas>
        <div class=\"vignette\"></div>
    </main>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/success.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        /* Styling for the main content and background */
        .main-content {
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
            height: 100vh;
            background: linear-gradient(to right, rgba(36,31,31,1) 0%, rgba(36,31,31,1) 32%, rgba(74,71,70,1) 100%);
            color: #fff;
            text-align: center;
        }

        /* Vignette effect */
        .vignette {
            position: absolute;
            width: 100%;
            height: 100%;
            box-shadow: inset 0px 0px 150px 20px black;
            mix-blend-mode: multiply;
            -webkit-animation: vignette-anim 3s infinite; /* Safari 4+ */
            -moz-animation: vignette-anim 3s infinite; /* Fx 5+ */
            -o-animation: vignette-anim 3s infinite; /* Opera 12+ */
            animation: vignette-anim 3s infinite; /* IE 10+, Fx 29+ */
        }

        /* Canvas noise effect */
        .noise {
            z-index: 100;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            opacity: .15;
        }

        /* Title container */
        .titleCont {
            position: relative;
        }

        /* Main title */
        .main-title {
            padding: .3em 1em .25em;    
            font-weight: 400;
            font-size: 40px;
            color: white;
            font-family: 'Bellefair', serif;
            position: relative;
            line-height: 1.3;
        }

        /* Animation for the vignette effect */
        @-webkit-keyframes vignette-anim {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        @-moz-keyframes vignette-anim {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        @-o-keyframes vignette-anim {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        @keyframes vignette-anim {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
    </style>
</head>
<body>
    <main role=\"main\" class=\"main-content\" id=\"main-content\">
        <div class=\"titleCont\">
            <h1 class=\"main-title\" id=\"main-title\">
                \"Merci !!,<br>
                <span style=\"padding-left:100px\">votre commande,</span><br>
                <span style=\"padding-right:110px\">est passée ,</span><br>
                <span style=\"padding-left:-20px\"> avec succès.\"</span>
            </h1>
        </div>
        <canvas id=\"noise\" class=\"noise\"></canvas>
        <div class=\"vignette\"></div>
    </main>
</body>
</html>
", "page/success.html.twig", "C:\\Users\\hp\\Downloads\\wetransfer_esprit-zip_2025-03-03_1218\\esprit\\esprit\\templates\\page\\success.html.twig");
    }
}
