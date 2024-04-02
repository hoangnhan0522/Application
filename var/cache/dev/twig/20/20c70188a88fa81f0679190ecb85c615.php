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

/* cart/order/index.html.twig */
class __TwigTemplate_80da13dcba4e2d4c467359c357107c04 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/order/index.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "cart/order/index.html.twig", 1);
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

        echo "Order";
        
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
    .table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }
    .table th,
    .table td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
    .no-records {
        text-align: center;
        padding: 20px;
        font-style: italic;
        color: #888;
    }
    .create-btn {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .create-btn a {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }
    <style>
    .cart-item-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
    }
    .btn-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }
    .table th,
    .table td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
    .no-records {
        text-align: center;
        padding: 20px;
        font-style: italic;
        color: #888;
    }
    .create-btn {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .create-btn a {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }
</style>
</style>
<div class=\"btn-center\">
  <h1>Order</h1>
</div>


<table class=\"table\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Account</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>DateAt</th>
            <th>Total</th>
            <th>Order detail</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 104, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 105
            echo "        <tr>
            <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
            <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 107), "email", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
            <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "name", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
            <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "mobile", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
            <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "address", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
            <td>";
            // line 111
            ((twig_get_attribute($this->env, $this->source, $context["order"], "dateAt", [], "any", false, false, false, 111)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "dateAt", [], "any", false, false, false, 111), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
            <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 112), "html", null, true);
            echo ".000.000.VND</td>
            <td>
                <button class=\"card product-card\" onclick=\"window.location.href = '";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "getId", [], "method", false, false, false, 114)]), "html", null, true);
            echo "'\">
                    Order Detail
                </button>
                <a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 117)]), "html", null, true);
            echo "\"class=\"btn btn-info\">edit</a>
                
                
              </td>
              
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "        <tr>
            <td colspan=\"7\" class=\"no-records\">No records found</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "    </tbody>
</table>

<div class=\"create-btn\">
    <a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_new");
        echo "\">Create new</a>
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
        return "cart/order/index.html.twig";
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
        return array (  258 => 132,  252 => 128,  243 => 124,  231 => 117,  225 => 114,  220 => 112,  216 => 111,  212 => 110,  208 => 109,  204 => 108,  200 => 107,  196 => 106,  193 => 105,  188 => 104,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block title %}Order{% endblock %}

{% block body %}
<style>
    .table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }
    .table th,
    .table td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
    .no-records {
        text-align: center;
        padding: 20px;
        font-style: italic;
        color: #888;
    }
    .create-btn {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .create-btn a {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }
    <style>
    .cart-item-image {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 20px;
    }
    .btn-center {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .table {
        margin-top: 20px;
        width: 100%;
        border-collapse: collapse;
    }
    .table th,
    .table td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
    .no-records {
        text-align: center;
        padding: 20px;
        font-style: italic;
        color: #888;
    }
    .create-btn {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    .create-btn a {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        text-decoration: none;
        border-radius: 4px;
    }
</style>
</style>
<div class=\"btn-center\">
  <h1>Order</h1>
</div>


<table class=\"table\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Account</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Address</th>
            <th>DateAt</th>
            <th>Total</th>
            <th>Order detail</th>
        </tr>
    </thead>
    <tbody>
    {% for order in orders %}
        <tr>
            <td>{{ order.id }}</td>
            <td>{{ order.user.email }}</td>
            <td>{{ order.name }}</td>
            <td>{{ order.mobile }}</td>
            <td>{{ order.address }}</td>
            <td>{{ order.dateAt ? order.dateAt|date('Y-m-d H:i:s') : '' }}</td>
            <td>{{ order.total }}.000.000.VND</td>
            <td>
                <button class=\"card product-card\" onclick=\"window.location.href = '{{ path('app_order_detail_show', {'id': order.getId()}) }}'\">
                    Order Detail
                </button>
                <a href=\"{{ path('app_order_edit', {'id': order.id}) }}\"class=\"btn btn-info\">edit</a>
                
                
              </td>
              
        </tr>
    {% else %}
        <tr>
            <td colspan=\"7\" class=\"no-records\">No records found</td>
        </tr>
    {% endfor %}
    </tbody>
</table>

<div class=\"create-btn\">
    <a href=\"{{ path('app_order_new') }}\">Create new</a>
</div>
{% endblock %}
", "cart/order/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/cart/order/index.html.twig");
    }
}
