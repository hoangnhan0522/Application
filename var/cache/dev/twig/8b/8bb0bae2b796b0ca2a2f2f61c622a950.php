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

/* detail/index.html.twig */
class __TwigTemplate_ee58652f93716eac769377a3d5febdff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detail/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detail/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detail/index.html.twig", 1);
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
        echo "
   
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.4;
        }
        header {
            color: #fff;
            text-align: center;
           
        }
        .product-image {
            text-align: center;
        }
        .product-image img {
            max-width: 80%;
            height: auto;
            border-radius: 5px;
            
        }
        .product-details {
            padding: 1rem;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .product-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .product-price {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .product-description {
            margin-bottom: 1rem;
        }
        .product-quantity {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .quantity-label {
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        .quantity-input {
            width: 60px;
            text-align: center;
            font-size: 1.2rem;
        }
        .product-rating {
            margin-bottom: 1rem;
        }
        .product-rating label {
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        .product-button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1.2rem;
        }
        .product-button:hover {
            background-color: #555;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .cart{
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
    <h1 style=\"color: black;\">Chi tiết sản phẩm</h1>
</header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"product-image\">
                    <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 98, $this->source); })()), "getImage", [], "method", false, false, false, 98))), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 98, $this->source); })()), "getTitle", [], "method", false, false, false, 98), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"product-details\">
                   
                    <h5 class=\"product-title\">Tên sản phẩm: ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 104, $this->source); })()), "getTitle", [], "method", false, false, false, 104), "html", null, true);
        echo "</h5>
                    <p class=\"product-price\">Giá: ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 105, $this->source); })()), "getPrice", [], "method", false, false, false, 105), "html", null, true);
        echo ".000.000.VND</p>
                  
                    <p class=\"product-description\">Mô tả: ";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 107, $this->source); })()), "getDescription", [], "method", false, false, false, 107), "html", null, true);
        echo "</p>
                    <div class=\"product-quantity\">
                        <span class=\"quantity-label\">Số lượng:</span>
                        <input type=\"number\" class=\"quantity-input = \"0\" value=\"0\" min=\"0\">
                    </div>
                    <div class=\"product-rating\">
                        <span class=\"quantity-label\">Đánh giá:</span>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"5\"> 5 sao
                        </label>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"4\"> 4 sao
                        </label>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"3\"> 3 sao
                        </label>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"2\"> 2 sao
                        </label>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"1\"> 1 sao
                        </label>
                    </div>
                    <form class=\"cart\" action=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
        echo "\" method=\"POST\">
                        <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                    </form>
                    <div class=\"signup-link\">
                        <a class=\"btn btn-primary\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Back to Home</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 146
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 147
        echo "   
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "detail/index.html.twig";
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
        return array (  250 => 147,  240 => 146,  218 => 134,  211 => 130,  185 => 107,  180 => 105,  176 => 104,  165 => 98,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

   
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.4;
        }
        header {
            color: #fff;
            text-align: center;
           
        }
        .product-image {
            text-align: center;
        }
        .product-image img {
            max-width: 80%;
            height: auto;
            border-radius: 5px;
            
        }
        .product-details {
            padding: 1rem;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .product-title {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .product-price {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        .product-description {
            margin-bottom: 1rem;
        }
        .product-quantity {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .quantity-label {
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        .quantity-input {
            width: 60px;
            text-align: center;
            font-size: 1.2rem;
        }
        .product-rating {
            margin-bottom: 1rem;
        }
        .product-rating label {
            margin-right: 1rem;
            font-size: 1.2rem;
        }
        .product-button {
            display: inline-block;
            background-color: #333;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            font-size: 1.2rem;
        }
        .product-button:hover {
            background-color: #555;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .cart{
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
    <h1 style=\"color: black;\">Chi tiết sản phẩm</h1>
</header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"product-image\">
                    <img src=\"{{ asset('image/' ~ product.getImage()) }}\" class=\"card-img-top\" alt=\"{{ product.getTitle() }}\">
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"product-details\">
                   
                    <h5 class=\"product-title\">Tên sản phẩm: {{ product.getTitle() }}</h5>
                    <p class=\"product-price\">Giá: {{ product.getPrice() }}.000.000.VND</p>
                  
                    <p class=\"product-description\">Mô tả: {{ product.getDescription() }}</p>
                    <div class=\"product-quantity\">
                        <span class=\"quantity-label\">Số lượng:</span>
                        <input type=\"number\" class=\"quantity-input = \"0\" value=\"0\" min=\"0\">
                    </div>
                    <div class=\"product-rating\">
                        <span class=\"quantity-label\">Đánh giá:</span>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"5\"> 5 sao
                        </label>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"4\"> 4 sao
                        </label>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"3\"> 3 sao
                        </label>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"2\"> 2 sao
                        </label>
                        <label>
                            <input type=\"radio\" name=\"rating\" value=\"1\"> 1 sao
                        </label>
                    </div>
                    <form class=\"cart\" action=\"{{ path('app_add_to_cart', {'productId': product.id}) }}\" method=\"POST\">
                        <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                    </form>
                    <div class=\"signup-link\">
                        <a class=\"btn btn-primary\" href=\"{{ path('app_home') }}\">Back to Home</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

{% endblock %}
{% block footer %}
   
    {% endblock %}
    ", "detail/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/detail/index.html.twig");
    }
}
