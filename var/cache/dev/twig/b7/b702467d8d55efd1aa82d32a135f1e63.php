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

/* order_detail/show.html.twig */
class __TwigTemplate_2d5f4b35a74cd0c3544eddc46ddb3699 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order_detail/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order_detail/show.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "order_detail/show.html.twig", 1);
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

        echo "OrderDetail";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .cart-item-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
    }
</style>

<h2>Order Detail:</h2>

";
        // line 17
        if (twig_test_empty((isset($context["order_items"]) || array_key_exists("order_items", $context) ? $context["order_items"] : (function () { throw new RuntimeError('Variable "order_items" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "    <p>No order items found.</p>
";
        } else {
            // line 20
            echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Product</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 31
            $context["grand_total"] = 0;
            // line 32
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["order_items"]) || array_key_exists("order_items", $context) ? $context["order_items"] : (function () { throw new RuntimeError('Variable "order_items" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 33
                echo "                ";
                $context["item_total"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "price", [], "any", false, false, false, 33) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 33));
                // line 34
                echo "                ";
                $context["grand_total"] = ((isset($context["grand_total"]) || array_key_exists("grand_total", $context) ? $context["grand_total"] : (function () { throw new RuntimeError('Variable "grand_total" does not exist.', 34, $this->source); })()) + (isset($context["item_total"]) || array_key_exists("item_total", $context) ? $context["item_total"] : (function () { throw new RuntimeError('Variable "item_total" does not exist.', 34, $this->source); })()));
                // line 35
                echo "                <tr>
                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
                    <td><img src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "image", [], "any", false, false, false, 37))), "html", null, true);
                echo "\" class=\"cart-item-image\" alt=\"Product Image\"></td>
                    <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 38), "price", [], "any", false, false, false, 38), "html", null, true);
                echo ".000.000.VND</td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, (isset($context["item_total"]) || array_key_exists("item_total", $context) ? $context["item_total"] : (function () { throw new RuntimeError('Variable "item_total" does not exist.', 40, $this->source); })()), "html", null, true);
                echo ".000.000.VND</td>
                    
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            <tr>
                <td colspan=\"4\" style=\"text-align: right;\"><strong>Total:</strong></td>
                <td><strong>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["grand_total"]) || array_key_exists("grand_total", $context) ? $context["grand_total"] : (function () { throw new RuntimeError('Variable "grand_total" does not exist.', 46, $this->source); })()), "html", null, true);
            echo ".000.000.VND</strong></td>
            </tr>
        </tbody>
    </table>
";
        }
        // line 51
        echo "
<a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_index");
        echo "\">back to list</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "order_detail/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 52,  174 => 51,  166 => 46,  162 => 44,  152 => 40,  148 => 39,  144 => 38,  140 => 37,  136 => 36,  133 => 35,  130 => 34,  127 => 33,  122 => 32,  120 => 31,  107 => 20,  103 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}OrderDetail{% endblock %}

{% block body %}
<style>
    .cart-item-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
    }
</style>

<h2>Order Detail:</h2>

{% if order_items is empty %}
    <p>No order items found.</p>
{% else %}
    <table class=\"table\">
        <thead>
            <tr>
                <th>Product</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            {% set grand_total = 0 %}
            {% for item in order_items %}
                {% set item_total = item.product.price * item.quantity %}
                {% set grand_total = grand_total + item_total %}
                <tr>
                    <td>{{ item.product.title }}</td>
                    <td><img src=\"{{ asset('image/' ~ item.product.image) }}\" class=\"cart-item-image\" alt=\"Product Image\"></td>
                    <td>{{ item.product.price }}.000.000.VND</td>
                    <td>{{ item.quantity }}</td>
                    <td>{{ item_total }}.000.000.VND</td>
                    
                </tr>
            {% endfor %}
            <tr>
                <td colspan=\"4\" style=\"text-align: right;\"><strong>Total:</strong></td>
                <td><strong>{{ grand_total }}.000.000.VND</strong></td>
            </tr>
        </tbody>
    </table>
{% endif %}

<a href=\"{{ path('app_order_index') }}\">back to list</a>

{% endblock %}
", "order_detail/show.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/order_detail/show.html.twig");
    }
}
