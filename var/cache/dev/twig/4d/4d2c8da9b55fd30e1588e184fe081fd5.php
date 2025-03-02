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

/* page/blog.html.twig */
class __TwigTemplate_eb019aaf0fcc83321ce55875df635936 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/blog.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/blog.html.twig", 1);
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

        yield "Blog";
        
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
        yield "<style>
  body {
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
  }

  .blog-container {
    display: flex;
    gap: 20px;
    padding: 20px;
    justify-content: space-between;
  }

  /* Décalage de la carte de recherche de 500px vers la droite */
  .sidebar-content {
    background-color: #fff;
    flex: 1;
    max-width: 300px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    height: fit-content;
    margin-left: 200px;
  }
  

  /* Blog List - 3 cartes par ligne */
  .blog-list {
    flex: 3;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }

  /* Gestion des résolutions */
  @media (max-width: 900px) {
    .blog-list {
      grid-template-columns: repeat(2, 1fr);
          gap: 1px;

    }
  }

  @media (max-width: 600px) {
    .blog-list {
      grid-template-columns: 1fr;
          gap: 1px;

    }
  }

  /* Taille fixe des cartes */
  .blog-card {
    background-color: #fff;
    border: 1px solid #b11d85;
    border-radius: 8px;
    width: 270px;
    height: 300px;
    padding: 10px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    margin-right: 1px; /* Espace fixe entre les cartes horizontalement */

  }



  .blog-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 5px;
  }

  .blog-title {
    font-size: 14px;
    color: #b11d85;
    font-weight: bold;
    margin: 10px 0;
  }

  /* Pagination */
  .pagination-container {
    display: flex;
    justify-content: center;
    margin-top: 30px; /* Adds space between the events list and pagination */
    margin-bottom: 50px; /* Space at the bottom of the page */
  }
/* Style des boutons */
.button_link,
.participate-btn,
.remove-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background-color: #b11d85;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 8px 12px;
  text-decoration: none;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.button_link:hover,
.participate-btn:hover,
.remove-btn:hover {
  background-color: #a01677;
  transform: scale(1.05);
}

/* Bouton supprimer avec icône */
.remove-btn {
  background-color: transparent;
  color: #b11d85;
  padding: 0;
  border: none;
  cursor: pointer;
  transition: transform 0.2s ease;
}

.remove-btn:hover {
  transform: scale(1.2);
  color: #a01677;
}

/* Icône des boutons */
.remove-btn .icon {
  font-size: 18px;
}

/* Texte des participations */
#participation-list li {
  color: #333;
  font-size: 16px;
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

 
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 155
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

        // line 156
        yield "<div class=\"blog-container\">
  <!-- Sidebar -->
  <div class=\"sidebar-content\">
    <!-- Search Box -->
    <h3>Recherche</h3>
    <div class=\"search-box\">
      <input type=\"text\" id=\"search-input\" class=\"form-control\" placeholder=\"Rechercher un article...\" oninput=\"performSearch(this.value)\">
    <h3>Événements à Participer</h3>
    <ul id=\"participation-list\"></ul>
    </div>
   
  </div>
  

 <!-- Blog List -->
  <div class=\"blog-list\" id=\"blog-container\">
    ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 172, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 173
            yield "      <div class=\"blog-card\">
        <a href=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bdetail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 174)]), "html", null, true);
            yield "\">
          <img src=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image1events", [], "any", false, false, false, 175), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titreevents", [], "any", false, false, false, 175), "html", null, true);
            yield "\">
        </a>
        <h4 class=\"blog-title\">";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "titreevents", [], "any", false, false, false, 177), "html", null, true);
            yield "</h4>
        <a href=\"";
            // line 178
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_bdetail", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 178)]), "html", null, true);
            yield "\" class=\"button_link\">Voir plus</a>
        <button class=\"btn btn-primary participate-btn\" data-id=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 179), "html", null, true);
            yield "\">Participer</button>
      </div>
    ";
            $context['_iterated'] = true;
        }
        // line 181
        if (!$context['_iterated']) {
            // line 182
            yield "      <p class=\"text-center\">Aucun article trouvé.</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        yield "  </div>

</div>

<!-- Pagination -->
<div class=\"pagination-container\">
  ";
        // line 190
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 190, $this->source); })()) > 1)) {
            // line 191
            yield "    <a href=\"?query=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 191, $this->source); })()), "html", null, true);
            yield "&page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 191, $this->source); })()) - 1), "html", null, true);
            yield "\" class=\"btn btn-primary\">Précédent</a>
  ";
        }
        // line 193
        yield "
  ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 194, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 195
            yield "    <a href=\"?query=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 195, $this->source); })()), "html", null, true);
            yield "&page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" class=\"btn ";
            if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 195, $this->source); })()))) {
                yield "btn-secondary";
            } else {
                yield "btn-light";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 197
        yield "
  ";
        // line 198
        if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 198, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 198, $this->source); })()))) {
            // line 199
            yield "    <a href=\"?query=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 199, $this->source); })()), "html", null, true);
            yield "&page=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 199, $this->source); })()) + 1), "html", null, true);
            yield "\" class=\"btn btn-primary\">Suivant</a>
  ";
        }
        // line 201
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 204
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

        // line 205
        yield "<script>
 document.addEventListener('DOMContentLoaded', () => {
  const participationList = document.getElementById('participation-list');
  const blogContainer = document.getElementById('blog-container');

  // Gérer les clics sur \"Participer\"
  document.querySelectorAll('.participate-btn').forEach(button => {
    button.addEventListener('click', () => {
      const eventId = button.dataset.id;

      fetch(`/event/participate/\${eventId}`, {
        method: 'POST',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Content-Type': 'application/json',
        },
      })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Ajouter à la liste de participation
            const listItem = document.createElement('li');
            listItem.innerHTML = `
              \${data.eventTitle}
              <button class=\"btn btn-danger btn-sm remove-btn\" data-id=\"\${eventId}\">Supprimer</button>
            `;
            participationList.appendChild(listItem);

            // Ajouter un gestionnaire pour supprimer l'événement
            listItem.querySelector('.remove-btn').addEventListener('click', () => {
              removeParticipation(eventId, listItem);
            });
          }
        })
        .catch(error => console.error('Erreur:', error));
    });
  });

const removeParticipation = (eventId, listItem) => {
  fetch(`/event/unparticipate/\${eventId}`, {
    method: 'POST',
    headers: {
      'X-Requested-With': 'XMLHttpRequest',
      'Content-Type': 'application/json',
    },
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Supprimez l'élément de la liste
        listItem.remove();
      } else {
        console.error('Erreur:', data.error || 'Une erreur est survenue.');
        // Optionnel : Ajoutez un message d'erreur dans l'interface
        const errorMessage = document.createElement('p');
        errorMessage.textContent = data.error || 'Impossible de supprimer la participation.';
        errorMessage.style.color = 'red';
        listItem.appendChild(errorMessage);
      }
    })
    .catch(error => {
      console.error('Erreur de suppression:', error);
      // Optionnel : Ajoutez un message d'erreur dans l'interface
      const errorMessage = document.createElement('p');
      errorMessage.textContent = 'Erreur de communication avec le serveur.';
      errorMessage.style.color = 'red';
      listItem.appendChild(errorMessage);
    });
};

  // Recherche dynamique
  const searchInput = document.getElementById('search-input');
  if (searchInput) {
    searchInput.addEventListener('input', () => {
      const query = searchInput.value;

      fetch(`/search-events?query=\${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
          blogContainer.innerHTML = '';
          data.events.forEach(event => {
            const eventCard = document.createElement('div');
            eventCard.classList.add('blog-card');
            eventCard.innerHTML = `
              <a href=\"/bdetail/\${event.id}\">
                <img src=\"\${event.image1events}\" alt=\"\${event.titreevents}\">
              </a>
              <h4 class=\"blog-title\">\${event.titreevents}</h4>
              <button class=\"btn btn-primary participate-btn\" data-id=\"\${event.id}\">Participer</button>
              
            `;
            blogContainer.appendChild(eventCard);
          });
        })
        .catch(error => console.error('Erreur de recherche:', error));
    });
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
        return "page/blog.html.twig";
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
        return array (  416 => 205,  403 => 204,  391 => 201,  383 => 199,  381 => 198,  378 => 197,  359 => 195,  355 => 194,  352 => 193,  344 => 191,  342 => 190,  334 => 184,  327 => 182,  325 => 181,  318 => 179,  314 => 178,  310 => 177,  303 => 175,  299 => 174,  296 => 173,  291 => 172,  273 => 156,  260 => 155,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Blog{% endblock %}

{% block stylesheets %}
<style>
  body {
    background-color: #f9f9f9;
    color: #333;
    margin: 0;
  }

  .blog-container {
    display: flex;
    gap: 20px;
    padding: 20px;
    justify-content: space-between;
  }

  /* Décalage de la carte de recherche de 500px vers la droite */
  .sidebar-content {
    background-color: #fff;
    flex: 1;
    max-width: 300px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    height: fit-content;
    margin-left: 200px;
  }
  

  /* Blog List - 3 cartes par ligne */
  .blog-list {
    flex: 3;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
  }

  /* Gestion des résolutions */
  @media (max-width: 900px) {
    .blog-list {
      grid-template-columns: repeat(2, 1fr);
          gap: 1px;

    }
  }

  @media (max-width: 600px) {
    .blog-list {
      grid-template-columns: 1fr;
          gap: 1px;

    }
  }

  /* Taille fixe des cartes */
  .blog-card {
    background-color: #fff;
    border: 1px solid #b11d85;
    border-radius: 8px;
    width: 270px;
    height: 300px;
    padding: 10px;
    text-align: center;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
    margin-right: 1px; /* Espace fixe entre les cartes horizontalement */

  }



  .blog-card img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 5px;
  }

  .blog-title {
    font-size: 14px;
    color: #b11d85;
    font-weight: bold;
    margin: 10px 0;
  }

  /* Pagination */
  .pagination-container {
    display: flex;
    justify-content: center;
    margin-top: 30px; /* Adds space between the events list and pagination */
    margin-bottom: 50px; /* Space at the bottom of the page */
  }
/* Style des boutons */
.button_link,
.participate-btn,
.remove-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background-color: #b11d85;
  color: #fff;
  border: none;
  border-radius: 4px;
  padding: 8px 12px;
  text-decoration: none;
  font-size: 14px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.button_link:hover,
.participate-btn:hover,
.remove-btn:hover {
  background-color: #a01677;
  transform: scale(1.05);
}

/* Bouton supprimer avec icône */
.remove-btn {
  background-color: transparent;
  color: #b11d85;
  padding: 0;
  border: none;
  cursor: pointer;
  transition: transform 0.2s ease;
}

.remove-btn:hover {
  transform: scale(1.2);
  color: #a01677;
}

/* Icône des boutons */
.remove-btn .icon {
  font-size: 18px;
}

/* Texte des participations */
#participation-list li {
  color: #333;
  font-size: 16px;
  margin-bottom: 8px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

 
</style>
{% endblock %}

{% block body %}
<div class=\"blog-container\">
  <!-- Sidebar -->
  <div class=\"sidebar-content\">
    <!-- Search Box -->
    <h3>Recherche</h3>
    <div class=\"search-box\">
      <input type=\"text\" id=\"search-input\" class=\"form-control\" placeholder=\"Rechercher un article...\" oninput=\"performSearch(this.value)\">
    <h3>Événements à Participer</h3>
    <ul id=\"participation-list\"></ul>
    </div>
   
  </div>
  

 <!-- Blog List -->
  <div class=\"blog-list\" id=\"blog-container\">
    {% for event in events %}
      <div class=\"blog-card\">
        <a href=\"{{ path('app_bdetail', {'id': event.id}) }}\">
          <img src=\"{{ event.image1events }}\" alt=\"{{ event.titreevents }}\">
        </a>
        <h4 class=\"blog-title\">{{ event.titreevents }}</h4>
        <a href=\"{{ path('app_bdetail', {'id': event.id}) }}\" class=\"button_link\">Voir plus</a>
        <button class=\"btn btn-primary participate-btn\" data-id=\"{{ event.id }}\">Participer</button>
      </div>
    {% else %}
      <p class=\"text-center\">Aucun article trouvé.</p>
    {% endfor %}
  </div>

</div>

<!-- Pagination -->
<div class=\"pagination-container\">
  {% if currentPage > 1 %}
    <a href=\"?query={{ query }}&page={{ currentPage - 1 }}\" class=\"btn btn-primary\">Précédent</a>
  {% endif %}

  {% for i in 1..totalPages %}
    <a href=\"?query={{ query }}&page={{ i }}\" class=\"btn {% if i == currentPage %}btn-secondary{% else %}btn-light{% endif %}\">{{ i }}</a>
  {% endfor %}

  {% if currentPage < totalPages %}
    <a href=\"?query={{ query }}&page={{ currentPage + 1 }}\" class=\"btn btn-primary\">Suivant</a>
  {% endif %}
</div>
{% endblock %}

{% block javascripts %}
<script>
 document.addEventListener('DOMContentLoaded', () => {
  const participationList = document.getElementById('participation-list');
  const blogContainer = document.getElementById('blog-container');

  // Gérer les clics sur \"Participer\"
  document.querySelectorAll('.participate-btn').forEach(button => {
    button.addEventListener('click', () => {
      const eventId = button.dataset.id;

      fetch(`/event/participate/\${eventId}`, {
        method: 'POST',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Content-Type': 'application/json',
        },
      })
        .then(response => response.json())
        .then(data => {
          if (data.success) {
            // Ajouter à la liste de participation
            const listItem = document.createElement('li');
            listItem.innerHTML = `
              \${data.eventTitle}
              <button class=\"btn btn-danger btn-sm remove-btn\" data-id=\"\${eventId}\">Supprimer</button>
            `;
            participationList.appendChild(listItem);

            // Ajouter un gestionnaire pour supprimer l'événement
            listItem.querySelector('.remove-btn').addEventListener('click', () => {
              removeParticipation(eventId, listItem);
            });
          }
        })
        .catch(error => console.error('Erreur:', error));
    });
  });

const removeParticipation = (eventId, listItem) => {
  fetch(`/event/unparticipate/\${eventId}`, {
    method: 'POST',
    headers: {
      'X-Requested-With': 'XMLHttpRequest',
      'Content-Type': 'application/json',
    },
  })
    .then(response => response.json())
    .then(data => {
      if (data.success) {
        // Supprimez l'élément de la liste
        listItem.remove();
      } else {
        console.error('Erreur:', data.error || 'Une erreur est survenue.');
        // Optionnel : Ajoutez un message d'erreur dans l'interface
        const errorMessage = document.createElement('p');
        errorMessage.textContent = data.error || 'Impossible de supprimer la participation.';
        errorMessage.style.color = 'red';
        listItem.appendChild(errorMessage);
      }
    })
    .catch(error => {
      console.error('Erreur de suppression:', error);
      // Optionnel : Ajoutez un message d'erreur dans l'interface
      const errorMessage = document.createElement('p');
      errorMessage.textContent = 'Erreur de communication avec le serveur.';
      errorMessage.style.color = 'red';
      listItem.appendChild(errorMessage);
    });
};

  // Recherche dynamique
  const searchInput = document.getElementById('search-input');
  if (searchInput) {
    searchInput.addEventListener('input', () => {
      const query = searchInput.value;

      fetch(`/search-events?query=\${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
          blogContainer.innerHTML = '';
          data.events.forEach(event => {
            const eventCard = document.createElement('div');
            eventCard.classList.add('blog-card');
            eventCard.innerHTML = `
              <a href=\"/bdetail/\${event.id}\">
                <img src=\"\${event.image1events}\" alt=\"\${event.titreevents}\">
              </a>
              <h4 class=\"blog-title\">\${event.titreevents}</h4>
              <button class=\"btn btn-primary participate-btn\" data-id=\"\${event.id}\">Participer</button>
              
            `;
            blogContainer.appendChild(eventCard);
          });
        })
        .catch(error => console.error('Erreur de recherche:', error));
    });
  }
});

</script>
{% endblock %}
", "page/blog.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\page\\blog.html.twig");
    }
}
