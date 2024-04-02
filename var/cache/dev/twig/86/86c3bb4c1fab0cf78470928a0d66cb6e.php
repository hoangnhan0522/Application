<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cart/index.html.twig */
class __TwigTemplate_2f2d0cf756f52a83ecf4c60db8c63d95 extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CartController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "   
    <style>
        /* CSS tùy chỉnh cho giao diện giỏ hàng */
        .cart-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .cart-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }

        .cart-item-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 20px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-details h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .cart-item-details p {
            margin: 5px 0;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
        }

        .update-btn {
            margin-left: 10px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 4px;
        }

        .delete-btn {
            margin-left: 10px;
            color: red;
            cursor: pointer;
        }

        .total-price {
            font-weight: bold;
            margin-top: 20px;
            font-size: 18px;
        }

        .buy-button {
            display: inline-block;
            background-color: #f44336;
            color: white;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 95
        echo "    <div class=\"cart-container\">
        <h1 class=\"cart-title\">Cart</h1>

        <div class=\"cart-items\">
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartItems"]) || array_key_exists("cartItems", $context) ? $context["cartItems"] : (function () { throw new RuntimeError('Variable "cartItems" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 100
            echo "                <div class=\"cart-item\">
                    <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 101), "image", [], "any", false, false, false, 101))), "html", null, true);
            echo "\" class=\"cart-item-image\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 101), "title", [], "any", false, false, false, 101), "html", null, true);
            echo "\">
                    <div class=\"cart-item-details\">
                        <h3>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 103), "title", [], "any", false, false, false, 103), "html", null, true);
            echo "</h3>
                        <p>Price: ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", [], "any", false, false, false, 104), "price", [], "any", false, false, false, 104), "html", null, true);
            echo ".000.000.VND</p>
                        <form action=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_update_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["cartItem"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\" method=\"post\">
                            <label for=\"quantity\">Quantity:</label>
                            <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"quantity-input\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartItem"], "quantity", [], "any", false, false, false, 107), "html", null, true);
            echo "\" min=\"1\">
                            <button type=\"submit\" class=\"update-btn\">Update</button>
                        </form>
                    </div>
                    <span class=\"delete-btn\" data-id=\"";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cartItem"], "id", [], "any", false, false, false, 111), "html", null, true);
            echo "\">Delete</span>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "        </div>
        <p class=\"total-price\">Total Price: ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 115, $this->source); })()), "html", null, true);
        echo ".000.000.VND</p>
        <a class=\"buy-button\" href=\"new\">Buy Now</a>
    </div>
   
    <script>
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', () => {
                const cartItemId = button.dataset.id;
                deleteCartItem(cartItemId);
            });
        });

        async function deleteCartItem(cartItemId) {
            try {
                const response = await fetch(`/cart/delete/\${cartItemId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    }
                });

                if (response.ok) {
                    location.reload();
                } else {
                    console.error('Failed to delete cart item');
                }
            } catch (error) {
                console.error('Failed to delete cart item:', error);
            }
        }
    </script>
    <div class=\"signup-link\">
        <a class=\"btn btn-primary\" href=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Back to Home</a>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  284 => 149,  247 => 115,  244 => 114,  235 => 111,  228 => 107,  223 => 105,  219 => 104,  215 => 103,  208 => 101,  205 => 100,  201 => 99,  195 => 95,  185 => 94,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CartController!{% endblock %}

{% block stylesheets %}
   
    <style>
        /* CSS tùy chỉnh cho giao diện giỏ hàng */
        .cart-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .cart-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }

        .cart-item-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-right: 20px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-details h3 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .cart-item-details p {
            margin: 5px 0;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
        }

        .update-btn {
            margin-left: 10px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 4px;
        }

        .delete-btn {
            margin-left: 10px;
            color: red;
            cursor: pointer;
        }

        .total-price {
            font-weight: bold;
            margin-top: 20px;
            font-size: 18px;
        }

        .buy-button {
            display: inline-block;
            background-color: #f44336;
            color: white;
            text-align: center;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"cart-container\">
        <h1 class=\"cart-title\">Cart</h1>

        <div class=\"cart-items\">
            {% for cartItem in cartItems %}
                <div class=\"cart-item\">
                    <img src=\"{{ asset('image/' ~ cartItem.product.image) }}\" class=\"cart-item-image\" alt=\"{{ cartItem.product.title }}\">
                    <div class=\"cart-item-details\">
                        <h3>{{ cartItem.product.title }}</h3>
                        <p>Price: {{ cartItem.product.price }}.000.000.VND</p>
                        <form action=\"{{ path('app_update_cart', { 'id': cartItem.id }) }}\" method=\"post\">
                            <label for=\"quantity\">Quantity:</label>
                            <input type=\"number\" id=\"quantity\" name=\"quantity\" class=\"quantity-input\" value=\"{{ cartItem.quantity }}\" min=\"1\">
                            <button type=\"submit\" class=\"update-btn\">Update</button>
                        </form>
                    </div>
                    <span class=\"delete-btn\" data-id=\"{{ cartItem.id }}\">Delete</span>
                </div>
            {% endfor %}
        </div>
        <p class=\"total-price\">Total Price: {{ totalPrice }}.000.000.VND</p>
        <a class=\"buy-button\" href=\"new\">Buy Now</a>
    </div>
   
    <script>
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach(button => {
            button.addEventListener('click', () => {
                const cartItemId = button.dataset.id;
                deleteCartItem(cartItemId);
            });
        });

        async function deleteCartItem(cartItemId) {
            try {
                const response = await fetch(`/cart/delete/\${cartItemId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                    }
                });

                if (response.ok) {
                    location.reload();
                } else {
                    console.error('Failed to delete cart item');
                }
            } catch (error) {
                console.error('Failed to delete cart item:', error);
            }
        }
    </script>
    <div class=\"signup-link\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_home') }}\">Back to Home</a>
    </div>
{% endblock %}
", "cart/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/cart/index.html.twig");
    }
}
