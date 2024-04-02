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

/* contact/new.html.twig */
class __TwigTemplate_4e4b5a29b8baaa20a715957b98ac8947 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/new.html.twig", 1);
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

        echo "New Contact";
        
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
        echo "<style>
    .login-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        height: 70vh;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .login-form .form-control {
        width: 300px;
        margin-bottom: 10px;
    }

    .login-title {
        text-align: center; /* Center the title text */
        margin-bottom: 20px;
    }

    .create {
        display: flex;
        justify-content: center;
        margin-top: 20px; /* Use margin-top instead of padding-top */
    }

    /* Use a more specific selector for the map container */
    .login-map-container {
        grid-column: span 1; /* Adjust the number of grid columns */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Responsive design for the map */
    .login-map-container iframe {
        width: 100%;
        height: 400px;
        border: 0;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 54
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 55
        echo "    <div class=\"login-container\">
        <div class=\"login-form\">
            <h1 class=\"login-title\">Contact</h1>
            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start');
        echo "
            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "first_name", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "last_name", [], "any", false, false, false, 60), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "email", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "phone_number", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "title_name", [], "any", false, false, false, 63), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "note", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control", "rows" => 5]]);
        echo "
            <div class=\"create\">
                <button class=\"btn btn-primary btn-block\" type=\"submit\">Send</button>
            </div>
            ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
        </div>
        <div class=\"login-map-container\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.945408700685!2d106.7070632!3d10.8154898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752896b7078a05%3A0xfe9d7fe53a97952e!2zVGhlIEh5Y280IFRvd2VyLCAyMDUgTmd1eeG7hW4gWMOtLCBQaMaw4budbmcgMjYsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaA!5e0!3m2!1sen!2s!4v1689512573031!5m2!1sen!2s\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 68,  184 => 64,  180 => 63,  176 => 62,  172 => 61,  168 => 60,  164 => 59,  160 => 58,  155 => 55,  145 => 54,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Contact{% endblock %}

{% block stylesheets %}
<style>
    .login-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        height: 70vh;
    }

    .login-form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .login-form .form-control {
        width: 300px;
        margin-bottom: 10px;
    }

    .login-title {
        text-align: center; /* Center the title text */
        margin-bottom: 20px;
    }

    .create {
        display: flex;
        justify-content: center;
        margin-top: 20px; /* Use margin-top instead of padding-top */
    }

    /* Use a more specific selector for the map container */
    .login-map-container {
        grid-column: span 1; /* Adjust the number of grid columns */
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Responsive design for the map */
    .login-map-container iframe {
        width: 100%;
        height: 400px;
        border: 0;
    }
</style>
{% endblock %}

{% block body %}
    <div class=\"login-container\">
        <div class=\"login-form\">
            <h1 class=\"login-title\">Contact</h1>
            {{ form_start(form) }}
            {{ form_row(form.first_name, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.last_name, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.email, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.phone_number, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.title_name, { 'attr': {'class': 'form-control'} }) }}
            {{ form_row(form.note, { 'attr': {'class': 'form-control', 'rows': 5} }) }}
            <div class=\"create\">
                <button class=\"btn btn-primary btn-block\" type=\"submit\">Send</button>
            </div>
            {{ form_end(form) }}
        </div>
        <div class=\"login-map-container\">
            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.945408700685!2d106.7070632!3d10.8154898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752896b7078a05%3A0xfe9d7fe53a97952e!2zVGhlIEh5Y280IFRvd2VyLCAyMDUgTmd1eeG7hW4gWMOtLCBQaMaw4budbmcgMjYsIELDrG5oIFRo4bqhbmgsIFRow6BuaCBwaOG7kSBI4buTIENow60gTWluaA!5e0!3m2!1sen!2s!4v1689512573031!5m2!1sen!2s\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
        </div>
    </div>
{% endblock %}
", "contact/new.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/contact/new.html.twig");
    }
}
