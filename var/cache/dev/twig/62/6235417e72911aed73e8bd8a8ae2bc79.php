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

/* orderstatus/index.html.twig */
class __TwigTemplate_fc1a7a2d1f009845a19490810cc2125e extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orderstatus/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orderstatus/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orderstatus/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Order Status";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "   
    <link rel=\"stylesheet\" href=\"path/to/styles.css\">
    <style>
        /* Additional custom styles for the order status page */

        /* Update the body style */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px; /* Add some padding to the body */
        }

        /* Improve the heading style */
        h1 {
            color: #333;
            text-align: center;
            margin: 20px 0;
            font-size: 32px; /* Increase the font size for a better heading */
        }

        /* Improve the order item style */
        .order-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px; /* Add more padding to the order item */
            margin-bottom: 30px; /* Increase the margin for better spacing */
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease; /* Add a smooth transition effect on hover */
        }

        .order-item:hover {
            transform: translateY(-5px); /* Add a slight lift effect on hover */
        }

        /* Improve the order details style */
        .order-details {
            margin-bottom: 10px;
        }

        .order-details strong {
            font-weight: bold;
        }

        /* Improve the \"No orders found\" message style */
        .no-orders-message {
            text-align: center;
            color: #888;
        }

        /* Optional: Add some responsive styling */
        @media (max-width: 600px) {
            .order-item {
                padding: 10px; /* Adjust the padding for smaller screens */
            }
        }

        /* Table styles */
        .order-table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-table th, .order-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        .order-table th {
            background-color: #f2f2f2;
        }

        .order-table tbody tr:hover {
            background-color: #f9f9f9;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo "    <h1>Order Status</h1>

    ";
        // line 91
        if (twig_test_empty((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 91, $this->source); })()))) {
            // line 92
            echo "        <p class=\"no-orders-message\">No orders found.</p>
    ";
        } else {
            // line 94
            echo "        <table class=\"order-table\">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Orderer's name</th>
                    <th>Total order value</th>
                    <th>Purchase date</th>
                    <th>Order status</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 105, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 106
                echo "                    <tr class=\"order-item\">
                        <td>";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 107), "html", null, true);
                echo "</td>
                        <td>";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 108), "html", null, true);
                echo "</td>
                        <td>";
                // line 109
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 109), 0, ".", ","), "html", null, true);
                echo ".000.000VND</td>
                        <td>";
                // line 110
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "dateAt", [], "any", false, false, false, 110), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                        <td>";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 111), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "orderstatus/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 114,  233 => 111,  229 => 110,  225 => 109,  221 => 108,  217 => 107,  214 => 106,  210 => 105,  197 => 94,  193 => 92,  191 => 91,  187 => 89,  177 => 88,  89 => 8,  79 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/order/status.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Order Status{% endblock %}

{% block stylesheets %}
   
    <link rel=\"stylesheet\" href=\"path/to/styles.css\">
    <style>
        /* Additional custom styles for the order status page */

        /* Update the body style */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px; /* Add some padding to the body */
        }

        /* Improve the heading style */
        h1 {
            color: #333;
            text-align: center;
            margin: 20px 0;
            font-size: 32px; /* Increase the font size for a better heading */
        }

        /* Improve the order item style */
        .order-item {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px; /* Add more padding to the order item */
            margin-bottom: 30px; /* Increase the margin for better spacing */
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease; /* Add a smooth transition effect on hover */
        }

        .order-item:hover {
            transform: translateY(-5px); /* Add a slight lift effect on hover */
        }

        /* Improve the order details style */
        .order-details {
            margin-bottom: 10px;
        }

        .order-details strong {
            font-weight: bold;
        }

        /* Improve the \"No orders found\" message style */
        .no-orders-message {
            text-align: center;
            color: #888;
        }

        /* Optional: Add some responsive styling */
        @media (max-width: 600px) {
            .order-item {
                padding: 10px; /* Adjust the padding for smaller screens */
            }
        }

        /* Table styles */
        .order-table {
            width: 100%;
            border-collapse: collapse;
        }

        .order-table th, .order-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        .order-table th {
            background-color: #f2f2f2;
        }

        .order-table tbody tr:hover {
            background-color: #f9f9f9;
        }
    </style>
{% endblock %}

{% block body %}
    <h1>Order Status</h1>

    {% if orders is empty %}
        <p class=\"no-orders-message\">No orders found.</p>
    {% else %}
        <table class=\"order-table\">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Orderer's name</th>
                    <th>Total order value</th>
                    <th>Purchase date</th>
                    <th>Order status</th>
                </tr>
            </thead>
            <tbody>
                {% for order in orders %}
                    <tr class=\"order-item\">
                        <td>{{ order.id }}</td>
                        <td>{{ order.name }}</td>
                        <td>{{ order.total|number_format(0, '.', ',') }}.000.000VND</td>
                        <td>{{ order.dateAt|date('Y-m-d H:i:s') }}</td>
                        <td>{{ order.status }}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "orderstatus/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/orderstatus/index.html.twig");
    }
}
