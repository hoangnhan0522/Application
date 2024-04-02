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

/* error/index.html.twig */
class __TwigTemplate_98fefa4ba5b48005c876465763940168 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/index.html.twig"));

        $this->parent = $this->loadTemplate("base_login.html.twig", "error/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }
    
    header {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }
    
    main {
        padding: 20px;
    }
    
    footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
    
    .content {
        text-align: center;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        color: #333;
        margin-bottom: 10px;
    }
    
    p {
        color: #666;
        margin-bottom: 20px;
    }
    
    /* Add more styles as needed to make the page look better */
    
    </style>
    <div class=\"container\">
        <div class=\"content\">
            ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 60
            echo "                <h1>Welcome, Administrator!</h1>
                <!-- Content for admin users -->
            ";
        } else {
            // line 63
            echo "                <h1>Access Denied</h1>
                <p>You don't have permission to view this page.</p>
            ";
        }
        // line 66
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "error/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 66,  132 => 63,  127 => 60,  125 => 59,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_login.html.twig' %}

{% block body %}
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f5f5f5;
    }
    
    header {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }
    
    main {
        padding: 20px;
    }
    
    footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
    
    .content {
        text-align: center;
        background-color: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        color: #333;
        margin-bottom: 10px;
    }
    
    p {
        color: #666;
        margin-bottom: 20px;
    }
    
    /* Add more styles as needed to make the page look better */
    
    </style>
    <div class=\"container\">
        <div class=\"content\">
            {% if is_granted('ROLE_ADMIN') %}
                <h1>Welcome, Administrator!</h1>
                <!-- Content for admin users -->
            {% else %}
                <h1>Access Denied</h1>
                <p>You don't have permission to view this page.</p>
            {% endif %}
        </div>
    </div>
{% endblock %}
", "error/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/error/index.html.twig");
    }
}
