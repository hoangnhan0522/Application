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
class __TwigTemplate_faeca2d291522dc062f5150cb516ce9a extends Template
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
   
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        header {
            
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .product-image {
            text-align: center;
        }
        .product-image img {
            max-width: 100%;
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
        <h1>Chi tiết sản phẩm</h1>
    </header>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <div class=\"product-image\">
                    <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 101, $this->source); })()), "getImage", [], "method", false, false, false, 101))), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 101, $this->source); })()), "getTitle", [], "method", false, false, false, 101), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col-md-8\">
                <div class=\"product-details\">
                   
                    <h5 class=\"product-title\">Tên sản phẩm: ";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 107, $this->source); })()), "getTitle", [], "method", false, false, false, 107), "html", null, true);
        echo "</h5>
                    <p class=\"product-price\">Giá: ";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 108, $this->source); })()), "getPrice", [], "method", false, false, false, 108), "html", null, true);
        echo ".000.000.VND</p>
                  
                    <p class=\"product-description\">Mô tả: ";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 110, $this->source); })()), "getDescription", [], "method", false, false, false, 110), "html", null, true);
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
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 133, $this->source); })()), "id", [], "any", false, false, false, 133)]), "html", null, true);
        echo "\" method=\"POST\">
                        <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <div class=\"signup-link\">
        <a class=\"btn btn-primary\" href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">Back to Home</a>
    </div>
</body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 148
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 149
        echo "    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\" style=\"color:black;\">
                <div class=\"col-md-6\">
                    <h5>Thông tin Apple Store</h5>
                    <p>Chào mừng bạn đến với chi nhánh Apple Store Quận Bình Thạch! Chúng tôi tự hào là một trong những cửa hàng điện tử hàng đầu, mang đến cho khách hàng những trải nghiệm công nghệ tuyệt vời.</p>
                    <p>Với sản phẩm chất lượng, dịch vụ chuyên nghiệp và đội ngũ nhân viên tận tâm, chúng tôi cam kết mang đến cho khách hàng sự hài lòng tuyệt đối.</p>
                </div>
                <div class=\"col-md-6\">
                    <h5>Thông tin liên hệ</h5>
                    <ul class=\"list-unstyled\">
                        <li>Địa chỉ: 205 Nguyễn Xí, Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh</li>
                        <li>Điện thoại: 0866251347</li>
                        <li>Email: quyetdvbs00079@fpt.edu.vn</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "detail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 149,  241 => 148,  225 => 142,  213 => 133,  187 => 110,  182 => 108,  178 => 107,  167 => 101,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

   
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        header {
            
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }
        .product-image {
            text-align: center;
        }
        .product-image img {
            max-width: 100%;
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
        <h1>Chi tiết sản phẩm</h1>
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
                    
                </div>
            </div>
        </div>
    </div>
    <div class=\"signup-link\">
        <a class=\"btn btn-primary\" href=\"{{ path('app_home') }}\">Back to Home</a>
    </div>
</body>
</html>

{% endblock %}
{% block footer %}
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\" style=\"color:black;\">
                <div class=\"col-md-6\">
                    <h5>Thông tin Apple Store</h5>
                    <p>Chào mừng bạn đến với chi nhánh Apple Store Quận Bình Thạch! Chúng tôi tự hào là một trong những cửa hàng điện tử hàng đầu, mang đến cho khách hàng những trải nghiệm công nghệ tuyệt vời.</p>
                    <p>Với sản phẩm chất lượng, dịch vụ chuyên nghiệp và đội ngũ nhân viên tận tâm, chúng tôi cam kết mang đến cho khách hàng sự hài lòng tuyệt đối.</p>
                </div>
                <div class=\"col-md-6\">
                    <h5>Thông tin liên hệ</h5>
                    <ul class=\"list-unstyled\">
                        <li>Địa chỉ: 205 Nguyễn Xí, Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh</li>
                        <li>Điện thoại: 0866251347</li>
                        <li>Email: quyetdvbs00079@fpt.edu.vn</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {% endblock %}
    ", "detail/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/detail/index.html.twig");
    }
}
