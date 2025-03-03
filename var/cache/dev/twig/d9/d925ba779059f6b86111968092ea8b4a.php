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

/* page/panier.html.twig */
class __TwigTemplate_ce26ccd1c25886b072fa17a58c54ae4f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/panier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/panier.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "page/panier.html.twig", 1);
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
        yield "<!DOCTYPE html>
<html lang=\"fr\">

    <style>
        body {
            font-family: 'Joti One', cursive;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-size: 4rem;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #962071, #702283);
            padding: 30px;
            border-radius: 25px;
            margin-bottom: 50px;
            text-transform: uppercase;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
            letter-spacing: 2px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .cart-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .cart-items, .cart-summary {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .cart-items:hover, .cart-summary:hover {
            transform: scale(1.02);
        }

        .cart-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .item-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #702283;
        }

        .item-details {
            flex: 1;
            padding: 0 15px;
        }

        .item-name {
            font-weight: bold;
            color: #962071;
        }

        .item-variant {
            color: #666;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #702283;
            background: white;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .quantity-btn:hover {
            background-color: #702283;
            color: white;
        }

        .quantity-input {
            width: 50px;
            height: 30px;
            text-align: center;
            border: 1px solid #702283;
            margin: 0 5px;
        }

        .item-price {
            font-weight: bold;
            color: #702283;
            display: flex;
            justify-content: center;
        }

        .checkout-btn {
            width: 100%;
            padding: 15px;
            background-color: #702283;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.1em;
            cursor: pointer;
            margin-top: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease;
        }

        .checkout-btn:hover {
            background-color: #962071;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .total-row {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid #e5e5e5;
        }

        .shipping-options {
            margin: 15px 0;
        }

        .shipping-option {
            display: flex;
            align-items: center;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            cursor: pointer;
        }

        .shipping-option:hover {
            background-color: #f9f9f9;
        }

        .shipping-option input {
            margin-right: 10px;
        }

        .promo-code {
            margin: 15px 0;
        }

        .promo-input {
            width: 70%;
            padding: 10px;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
        }

        .promo-button {
            width: 28%;
            padding: 10px;
            background-color: #702283;
            color: white;
            border: none;
            border-radius: 4px;
            margin-left: 2%;
            cursor: pointer;
        }

    </style>

<body>
    <div class=\"container\">
    

        <div class=\"cart-container\">
            <div class=\"cart-items\" id=\"produits\">
                <!-- Les produits seront ajoutés dynamiquement ici -->
            </div>

            <div class=\"cart-summary\">
                <h2>Résumé de la commande</h2>

                <div class=\"shipping-options\">
                    <h3>Mode de livraison</h3>
                    <label class=\"shipping-option\">
                        <input type=\"radio\" name=\"shipping\" value=\"standard\" checked>
                        <div>
                            <div>Standard (2-4 jours)</div>
                            <div style=\"color: #666;\">Gratuit</div>
                        </div>
                    </label>
                    <label class=\"shipping-option\">
                        <input type=\"radio\" name=\"shipping\" value=\"express\">
                        <div>
                            <div>Express (1-2 jours)</div>
                            <div style=\"color: #666;\">+7.99 €</div>
                        </div>
                    </label>
                </div>

                <div class=\"promo-code\">
                    <h3>Code promo</h3>
                    <div style=\"display: flex; margin-top: 10px;\">
                        <input type=\"text\" id=\"code-promo\" placeholder=\"Entrez votre code\" class=\"promo-input\">
                        <button class=\"promo-button\" onclick=\"appliquerCodePromo()\">Appliquer</button>
                    </div>
                </div>

                <div class=\"summary-row\">
                    <span>Sous-total</span>
                    <span id=\"sous-total\">0.00 €</span>
                </div>
                <div class=\"summary-row\">
                    <span>Livraison</span>
                    <span id=\"livraison\">0.00 €</span>
                </div>
                <div class=\"summary-row\">
                    <span>TVA (20%)</span>
                    <span id=\"tva\">0.00 €</span>
                </div>
                <div class=\"summary-row total-row\">
                    <span>Total</span>
                    <span id=\"total\">0.00 €</span>
                </div>

                <button class=\"checkout-btn\" type=\"button\" onclick=\"window.location.href='";
        // line 253
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payer_page");
        yield "'\">Procéder au paiement</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript pour gérer les opérations CRUD
        let produits = [
            { id: 1, nom: \"T-Shirt Premium\", taille: \"M\", couleur: \"Noir\", quantite: 1, prix: 29.99 },
            { id: 2, nom: \"Jean Slim Fit\", taille: \"32\", couleur: \"Bleu\", quantite: 1, prix: 49.99 }
        ];

        function afficherProduits() {
            const produitsDiv = document.getElementById('produits');
            produitsDiv.innerHTML = '';
            produits.forEach(produit => {
                produitsDiv.innerHTML += `
                    <div class=\"cart-item\">
                        <img src=\"/api/placeholder/120/120\" alt=\"Product\" class=\"item-image\">
                        <div class=\"item-details\">
                            <div class=\"item-name\">\${produit.nom}</div>
                            <div class=\"item-variant\">Taille: \${produit.taille} | Couleur: \${produit.couleur}</div>
                            <div class=\"quantity-controls\">
                                <button class=\"quantity-btn\" onclick=\"changerQuantite(\${produit.id}, -1)\">-</button>
                                <input type=\"number\" value=\"\${produit.quantite}\" class=\"quantity-input\" id=\"quantite-\${produit.id}\" disabled>
                                <button class=\"quantity-btn\" onclick=\"changerQuantite(\${produit.id}, 1)\">+</button>
                            </div>
                        </div>
                        <div class=\"item-price\">\${(produit.prix * produit.quantite).toFixed(2)} €</div>
                    </div>
                `;
            });

            recalculerTotal();
        }

        function changerQuantite(id, delta) {
            const produit = produits.find(p => p.id === id);
            if (produit) {
                produit.quantite = Math.max(produit.quantite + delta, 1);
                afficherProduits();
            }
        }

        function recalculerTotal() {
            let sousTotal = 0;
            produits.forEach(p => {
                sousTotal += p.prix * p.quantite;
            });

            const tva = sousTotal * 0.20;
            const livraison = sousTotal > 0 ? 0 : 0; // Calcul de la livraison (exemple)
            const total = sousTotal + tva + livraison;

            document.getElementById('sous-total').innerText = sousTotal.toFixed(2) + ' €';
            document.getElementById('tva').innerText = tva.toFixed(2) + ' €';
            document.getElementById('livraison').innerText = livraison.toFixed(2) + ' €';
            document.getElementById('total').innerText = total.toFixed(2) + ' €';
        }

        function appliquerCodePromo() {
            const code = document.getElementById('code-promo').value;
            if (code === 'PROMO10') {
                alert('Code promo appliqué : -10%');
                // Calculer et appliquer la réduction
                const sousTotal = parseFloat(document.getElementById('sous-total').innerText.replace(' €', ''));
                const nouveauTotal = sousTotal * 0.90;
                document.getElementById('total').innerText = nouveauTotal.toFixed(2) + ' €';
            } else {
                alert('Code promo invalide');
            }
        }

        afficherProduits();
    </script>
</body>
</html>
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
        return "page/panier.html.twig";
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
        return array (  351 => 253,  100 => 4,  87 => 3,  64 => 2,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base2.html.twig' %}
{% block title %} Home - {% endblock %}
{% block body %}
<!DOCTYPE html>
<html lang=\"fr\">

    <style>
        body {
            font-family: 'Joti One', cursive;
            background-color: #f9f9f9;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-size: 4rem;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(45deg, #962071, #702283);
            padding: 30px;
            border-radius: 25px;
            margin-bottom: 50px;
            text-transform: uppercase;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3);
            letter-spacing: 2px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .cart-container {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .cart-items, .cart-summary {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .cart-items:hover, .cart-summary:hover {
            transform: scale(1.02);
        }

        .cart-item {
            display: flex;
            padding: 15px 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .item-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
            border: 2px solid #702283;
        }

        .item-details {
            flex: 1;
            padding: 0 15px;
        }

        .item-name {
            font-weight: bold;
            color: #962071;
        }

        .item-variant {
            color: #666;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .quantity-controls {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            border: 1px solid #702283;
            background: white;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .quantity-btn:hover {
            background-color: #702283;
            color: white;
        }

        .quantity-input {
            width: 50px;
            height: 30px;
            text-align: center;
            border: 1px solid #702283;
            margin: 0 5px;
        }

        .item-price {
            font-weight: bold;
            color: #702283;
            display: flex;
            justify-content: center;
        }

        .checkout-btn {
            width: 100%;
            padding: 15px;
            background-color: #702283;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 1.1em;
            cursor: pointer;
            margin-top: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: background-color 0.3s ease;
        }

        .checkout-btn:hover {
            background-color: #962071;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .total-row {
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 2px solid #e5e5e5;
        }

        .shipping-options {
            margin: 15px 0;
        }

        .shipping-option {
            display: flex;
            align-items: center;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
            cursor: pointer;
        }

        .shipping-option:hover {
            background-color: #f9f9f9;
        }

        .shipping-option input {
            margin-right: 10px;
        }

        .promo-code {
            margin: 15px 0;
        }

        .promo-input {
            width: 70%;
            padding: 10px;
            border: 1px solid #e5e5e5;
            border-radius: 4px;
        }

        .promo-button {
            width: 28%;
            padding: 10px;
            background-color: #702283;
            color: white;
            border: none;
            border-radius: 4px;
            margin-left: 2%;
            cursor: pointer;
        }

    </style>

<body>
    <div class=\"container\">
    

        <div class=\"cart-container\">
            <div class=\"cart-items\" id=\"produits\">
                <!-- Les produits seront ajoutés dynamiquement ici -->
            </div>

            <div class=\"cart-summary\">
                <h2>Résumé de la commande</h2>

                <div class=\"shipping-options\">
                    <h3>Mode de livraison</h3>
                    <label class=\"shipping-option\">
                        <input type=\"radio\" name=\"shipping\" value=\"standard\" checked>
                        <div>
                            <div>Standard (2-4 jours)</div>
                            <div style=\"color: #666;\">Gratuit</div>
                        </div>
                    </label>
                    <label class=\"shipping-option\">
                        <input type=\"radio\" name=\"shipping\" value=\"express\">
                        <div>
                            <div>Express (1-2 jours)</div>
                            <div style=\"color: #666;\">+7.99 €</div>
                        </div>
                    </label>
                </div>

                <div class=\"promo-code\">
                    <h3>Code promo</h3>
                    <div style=\"display: flex; margin-top: 10px;\">
                        <input type=\"text\" id=\"code-promo\" placeholder=\"Entrez votre code\" class=\"promo-input\">
                        <button class=\"promo-button\" onclick=\"appliquerCodePromo()\">Appliquer</button>
                    </div>
                </div>

                <div class=\"summary-row\">
                    <span>Sous-total</span>
                    <span id=\"sous-total\">0.00 €</span>
                </div>
                <div class=\"summary-row\">
                    <span>Livraison</span>
                    <span id=\"livraison\">0.00 €</span>
                </div>
                <div class=\"summary-row\">
                    <span>TVA (20%)</span>
                    <span id=\"tva\">0.00 €</span>
                </div>
                <div class=\"summary-row total-row\">
                    <span>Total</span>
                    <span id=\"total\">0.00 €</span>
                </div>

                <button class=\"checkout-btn\" type=\"button\" onclick=\"window.location.href='{{ path('payer_page') }}'\">Procéder au paiement</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript pour gérer les opérations CRUD
        let produits = [
            { id: 1, nom: \"T-Shirt Premium\", taille: \"M\", couleur: \"Noir\", quantite: 1, prix: 29.99 },
            { id: 2, nom: \"Jean Slim Fit\", taille: \"32\", couleur: \"Bleu\", quantite: 1, prix: 49.99 }
        ];

        function afficherProduits() {
            const produitsDiv = document.getElementById('produits');
            produitsDiv.innerHTML = '';
            produits.forEach(produit => {
                produitsDiv.innerHTML += `
                    <div class=\"cart-item\">
                        <img src=\"/api/placeholder/120/120\" alt=\"Product\" class=\"item-image\">
                        <div class=\"item-details\">
                            <div class=\"item-name\">\${produit.nom}</div>
                            <div class=\"item-variant\">Taille: \${produit.taille} | Couleur: \${produit.couleur}</div>
                            <div class=\"quantity-controls\">
                                <button class=\"quantity-btn\" onclick=\"changerQuantite(\${produit.id}, -1)\">-</button>
                                <input type=\"number\" value=\"\${produit.quantite}\" class=\"quantity-input\" id=\"quantite-\${produit.id}\" disabled>
                                <button class=\"quantity-btn\" onclick=\"changerQuantite(\${produit.id}, 1)\">+</button>
                            </div>
                        </div>
                        <div class=\"item-price\">\${(produit.prix * produit.quantite).toFixed(2)} €</div>
                    </div>
                `;
            });

            recalculerTotal();
        }

        function changerQuantite(id, delta) {
            const produit = produits.find(p => p.id === id);
            if (produit) {
                produit.quantite = Math.max(produit.quantite + delta, 1);
                afficherProduits();
            }
        }

        function recalculerTotal() {
            let sousTotal = 0;
            produits.forEach(p => {
                sousTotal += p.prix * p.quantite;
            });

            const tva = sousTotal * 0.20;
            const livraison = sousTotal > 0 ? 0 : 0; // Calcul de la livraison (exemple)
            const total = sousTotal + tva + livraison;

            document.getElementById('sous-total').innerText = sousTotal.toFixed(2) + ' €';
            document.getElementById('tva').innerText = tva.toFixed(2) + ' €';
            document.getElementById('livraison').innerText = livraison.toFixed(2) + ' €';
            document.getElementById('total').innerText = total.toFixed(2) + ' €';
        }

        function appliquerCodePromo() {
            const code = document.getElementById('code-promo').value;
            if (code === 'PROMO10') {
                alert('Code promo appliqué : -10%');
                // Calculer et appliquer la réduction
                const sousTotal = parseFloat(document.getElementById('sous-total').innerText.replace(' €', ''));
                const nouveauTotal = sousTotal * 0.90;
                document.getElementById('total').innerText = nouveauTotal.toFixed(2) + ' €';
            } else {
                alert('Code promo invalide');
            }
        }

        afficherProduits();
    </script>
</body>
</html>
{% endblock %}", "page/panier.html.twig", "C:\\xampp\\htdocs\\RAHMA\\esprit\\templates\\page\\panier.html.twig");
    }
}
