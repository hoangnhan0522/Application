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

/* view_admin/index.html.twig */
class __TwigTemplate_44c4bcb691542e3379421285a9c44163 extends Template
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
        return "base_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "view_admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "view_admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base_admin.html.twig", "view_admin/index.html.twig", 1);
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
        echo "    <style>
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #007bff;
            padding: 20px;
            color: #fff;
            text-align: center;
        }
        .content{
          text-align: center;
        }
        
        .admin-links {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        .admin-links li {
            list-style: none;
            margin: 0 10px;
        }
        
        .admin-links li a {
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #007bff;
            border-radius: 5px;
            color: #007bff;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        .admin-links li a:hover {
            background-color: #007bff;
            color: #fff;
        }
        
        .content {
            padding: 20px;
            background-color: #fff;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .content h2 {
            margin-top: 0;
        }
        
        .video-container {
            max-width: 100%;
            height: auto;
            margin: 20px auto;
            border-radius: 10px;
            overflow: hidden;
        }

        .video-container video {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>

    <div class=\"header\">
        <h1>Management Page</h1>
    </div>
    <!DOCTYPE html>
            <html>
            <head>
              <style>
                .slider {
                  width: 100%;
                  height: 600px;
                  overflow: hidden;
                  position: relative;
                }
            
                .slide {
                  width: 100%;
                  height: 100%;
                  display: none;
                  position: absolute;
                  top: 0;
                  left: 0;
                  transition: opacity 0.5s ease-in-out;
                }
            
                .slide.active {
                  display: block;
                }
            
                .slider-controls {
                  position: absolute;
                  bottom: 20px;
                  left: 50%;
                  transform: translateX(-50%);
                  z-index: 1;
                }
            
                .slider-controls button {
                  background: none;
                  border: none;
                  cursor: pointer;
                  outline: none;
                  padding: 5px;
                  margin: 0 3px;
                  font-size: 20px;
                  color: #fff;
                }
            
                .slider-controls button.active {
                  color: #ff0000;
                }
              </style>
            </head>

 <div class=\"content\">
        <h2>Welcome</h2>
        <p>This is your management dashboard where you can handle various tasks related to your FPT Education</p>
        <p>Feel free to explore the different sections and manage your Topic, Course, orders, and customer feedback.</p>
        <p>If you need any assistance, don't hesitate to reach out to our support team.</p>
    </div>

           
            </body>
            </html>
    
   
    
   
    
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "view_admin/index.html.twig";
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
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_admin.html.twig' %}

{% block body %}
    <style>
        /* Custom Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #007bff;
            padding: 20px;
            color: #fff;
            text-align: center;
        }
        .content{
          text-align: center;
        }
        
        .admin-links {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }
        
        .admin-links li {
            list-style: none;
            margin: 0 10px;
        }
        
        .admin-links li a {
            text-decoration: none;
            padding: 10px 20px;
            border: 2px solid #007bff;
            border-radius: 5px;
            color: #007bff;
            font-weight: bold;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        .admin-links li a:hover {
            background-color: #007bff;
            color: #fff;
        }
        
        .content {
            padding: 20px;
            background-color: #fff;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .content h2 {
            margin-top: 0;
        }
        
        .video-container {
            max-width: 100%;
            height: auto;
            margin: 20px auto;
            border-radius: 10px;
            overflow: hidden;
        }

        .video-container video {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>

    <div class=\"header\">
        <h1>Management Page</h1>
    </div>
    <!DOCTYPE html>
            <html>
            <head>
              <style>
                .slider {
                  width: 100%;
                  height: 600px;
                  overflow: hidden;
                  position: relative;
                }
            
                .slide {
                  width: 100%;
                  height: 100%;
                  display: none;
                  position: absolute;
                  top: 0;
                  left: 0;
                  transition: opacity 0.5s ease-in-out;
                }
            
                .slide.active {
                  display: block;
                }
            
                .slider-controls {
                  position: absolute;
                  bottom: 20px;
                  left: 50%;
                  transform: translateX(-50%);
                  z-index: 1;
                }
            
                .slider-controls button {
                  background: none;
                  border: none;
                  cursor: pointer;
                  outline: none;
                  padding: 5px;
                  margin: 0 3px;
                  font-size: 20px;
                  color: #fff;
                }
            
                .slider-controls button.active {
                  color: #ff0000;
                }
              </style>
            </head>

 <div class=\"content\">
        <h2>Welcome</h2>
        <p>This is your management dashboard where you can handle various tasks related to your FPT Education</p>
        <p>Feel free to explore the different sections and manage your Topic, Course, orders, and customer feedback.</p>
        <p>If you need any assistance, don't hesitate to reach out to our support team.</p>
    </div>

           
            </body>
            </html>
    
   
    
   
    
    
{% endblock %}




", "view_admin/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/view_admin/index.html.twig");
    }
}
