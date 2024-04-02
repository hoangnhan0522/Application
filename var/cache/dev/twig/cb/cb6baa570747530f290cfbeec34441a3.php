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

/* home/airpods/index.html.twig */
class __TwigTemplate_7160abdbf0c0835887d01cc5363388dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/airpods/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/airpods/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/airpods/index.html.twig", 1);
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

        echo "Role index";
        
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
        .video-container {
            max-width: 1500px;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-card {
            transition: transform 0.9s;
            border-radius: 10px;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            object-fit: cover;
        }

        .product-card .card-body {
            padding: 10px;
        }

        .product-card .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-card .card-text {
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-card .card-footer {
            padding: 10px;
            background-color: #f5f5f5;
        }

        .addToCartBtn {
            display: block;
            margin: 0 auto;
            background-color: black; /* Set the button background color to black */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .addToCartBtn:hover {
            background-color: #333; /* Darken the button on hover */
        }

        /* Additional styles for grid layout */
        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .product-card .card-img-top {
            height: 150px;
            object-fit: contain;
            max-width: 100%;
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
        echo "    <div class=\"container\">
        <div class=\"video-container\">
            <!DOCTYPE html>
            <html>
            <head>
              <style>
                .slider {
                  width: 100%;
                  height: 300px;
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
            <body>
              <div class=\"slider\">
                <img class=\"slide active\" src=\"image/slidea1.jpg\">
               
            
                <div class=\"slider-controls\">
                  <button class=\"control\" onclick=\"prevSlide()\">&#10094;</button>
                  <button class=\"control\" onclick=\"nextSlide()\">&#10095;</button>
                </div>
              </div>
            
              <script>
                var slides = document.querySelectorAll('.slide');
                var currentSlide = 0;
                var slideInterval = setInterval(nextSlide, 2000);
            
                function nextSlide() {
                  slides[currentSlide].classList.remove('active');
                  currentSlide = (currentSlide + 1) % slides.length;
                  slides[currentSlide].classList.add('active');
                }
            
                function prevSlide() {
                  slides[currentSlide].classList.remove('active');
                  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                  slides[currentSlide].classList.add('active');
                }
              </script>
            </body>
            </html>
        <h1 class=\"text-center mt-5\">Danh sách sản phẩm</h1>
        <div class=\"product-container\">
            ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 172, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 173
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 173)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 174))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 174), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 176), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 177), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 179)]), "html", null, true);
            echo "\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "        </div>
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
        return "home/airpods/index.html.twig";
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
        return array (  312 => 186,  299 => 179,  294 => 177,  290 => 176,  283 => 174,  278 => 173,  274 => 172,  189 => 89,  179 => 88,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Role index{% endblock %}

{% block stylesheets %}
  
    <style>
        .video-container {
            max-width: 1500px;
            margin: 0 auto;
            border-radius: 10px;
            overflow: hidden;
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-card {
            transition: transform 0.9s;
            border-radius: 10px;
            overflow: hidden;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            object-fit: cover;
        }

        .product-card .card-body {
            padding: 10px;
        }

        .product-card .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-card .card-text {
            font-size: 14px;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-card .card-footer {
            padding: 10px;
            background-color: #f5f5f5;
        }

        .addToCartBtn {
            display: block;
            margin: 0 auto;
            background-color: black; /* Set the button background color to black */
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .addToCartBtn:hover {
            background-color: #333; /* Darken the button on hover */
        }

        /* Additional styles for grid layout */
        .product-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .product-card .card-img-top {
            height: 150px;
            object-fit: contain;
            max-width: 100%;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"video-container\">
            <!DOCTYPE html>
            <html>
            <head>
              <style>
                .slider {
                  width: 100%;
                  height: 300px;
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
            <body>
              <div class=\"slider\">
                <img class=\"slide active\" src=\"image/slidea1.jpg\">
               
            
                <div class=\"slider-controls\">
                  <button class=\"control\" onclick=\"prevSlide()\">&#10094;</button>
                  <button class=\"control\" onclick=\"nextSlide()\">&#10095;</button>
                </div>
              </div>
            
              <script>
                var slides = document.querySelectorAll('.slide');
                var currentSlide = 0;
                var slideInterval = setInterval(nextSlide, 2000);
            
                function nextSlide() {
                  slides[currentSlide].classList.remove('active');
                  currentSlide = (currentSlide + 1) % slides.length;
                  slides[currentSlide].classList.add('active');
                }
            
                function prevSlide() {
                  slides[currentSlide].classList.remove('active');
                  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                  slides[currentSlide].classList.add('active');
                }
              </script>
            </body>
            </html>
        <h1 class=\"text-center mt-5\">Danh sách sản phẩm</h1>
        <div class=\"product-container\">
            {% for product in products %}
                <a href=\"{{ path('app_detail_show', {'id': product.getId()}) }}\" class=\"card product-card\">
                    <img src=\"{{ asset('image/' ~ product.getImage()) }}\" class=\"card-img-top\" alt=\"{{ product.getTitle() }}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                        <p class=\"card-text\">Giá: {{ product.getPrice() }}.000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"{{ path('app_add_to_cart', {'productId': product.id}) }}\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "home/airpods/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/home/airpods/index.html.twig");
    }
}
