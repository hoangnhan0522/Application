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

/* new/index.html.twig */
class __TwigTemplate_14735dff990d86e2c5bc8b14c63c915f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "new/index.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lux/bootstrap.min.css\">
    ";
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 125
        echo "
    ";
        // line 126
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "</head>
<body>
    ";
        // line 131
        $this->displayBlock('header', $context, $blocks);
        // line 201
        echo "



";
        // line 205
        $this->displayBlock('body', $context, $blocks);
        // line 352
        echo "







    <hr class=\"divider\">
    
    ";
        // line 362
        $this->displayBlock('footer', $context, $blocks);
        // line 383
        echo "    

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
        <style>
            .navbar-nav .nav-item {
                margin-right: 20px;
            }
        
            .navbar-nav .nav-item:last-child {
                margin-right: 0;
            }
        
            /* Style the search form */
            .search-form {
                margin-left: auto;
                display: flex;
                align-items: center;
            }
        
            .search-input {
                margin-right: 10px;
            }
        
            /* Style the cart icon */
            .nav-link-cart {
                display: flex;
                align-items: center;
                margin-left: 10px;
            }
        
            /* Style the login/logout button */
            .login-logout-btn {
                margin-left: 10px;
            }
        
            /* Update the footer styles */
            .footer {
                background-color: #343a40;
                color: white;
                padding: 30px 0;
            }
        
            .footer .row {
                margin-top: 20px;
            }
        
            .footer h5 {
                margin-bottom: 20px;
            }
        
            .footer ul {
                padding-left: 0;
                list-style: none;
            }
        
            .footer li {
                margin-bottom: 10px;
            }
            .nav-link {
               
                padding-right: 20px;
              }
            .collapse navbar-collapse{
                
                    justify-content: center;
                    
                
            }
            .divider {
                margin-top: 2rem;
                margin-bottom: 2rem;
                border: none;
                border-top: 1px solid #eee;

            }

            .badge-cart {
                background-color: orange;
                color: white;
                font-size: 18px;
            }

            .search-form {
                display: flex;
                align-items: center;
            }

            .search-input {
                margin-right: 10px;
            }

            .footer {
                background-color: #f8f9fa;
                padding: 30px 0;
            }

            .footer .row {
                margin-top: 20px;
            }

            .footer h5 {
                margin-bottom: 20px;
            }

            .footer ul {
                padding-left: 0;
                list-style: none;
            }

            .footer li {
                margin-bottom: 10px;
            }
        </style>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 132
        echo "    <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            
                <a class=\"nav-link\" href=\"http://127.0.0.1:8000\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"#FFFFFF\" viewBox=\"0 0 16 16\" style=\"margin-left: 200px;\">
                        <path d=\"M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z\"/>
                    </svg>
                </a>
         
            
            <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarColor02\">

                <ul class=\"navbar-nav mx-auto\">
                    
                    <li class=\"nav-item mx-1 \">
                        <a class=\"nav-link\" href=\"macbook\">Mac</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"ipad\">Ipad</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"iphone\">Iphone</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"watch\">Watch</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"airpods\">Airpods</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"contactnew\">Contact</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"postnew\">News</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"orderstatus\">Order Status</a>
                    </li>
                </ul>
               
                
                <ul class=\"navbar-nav\">
                    <form class=\"d-flex\" action=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\" method=\"GET\" style=\"margin-right: 40px;\">
                        <input class=\"form-control me-sm-0\" type=\"search\" name=\"keyword\" placeholder=\"Search\" required>
                        <button class=\"btn btn-secondary my-2 my-sm-0 mx-2\" type=\"submit\">Search</button>
                    </form>
                </ul>
                  
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mx-2\">
                        <a class=\"nav-link\" href=\"/cart\" style=\"margin-right: 40px;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
                            </svg>
                        </a>
                    </li>
                </ul>
               
                <form>
                    <a class=\"btn btn-secondary\" href=\"/";
        // line 191
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 191, $this->source); })()), "user", [], "any", false, false, false, 191)) ? ("logout") : ("login"));
        echo "\" @click=\"isOpen = false\">
                        ";
        // line 192
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "user", [], "any", false, false, false, 192)) ? ("logout") : ("login"));
        echo "
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <hr class=\"divider\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 205
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 206
        echo "<style>
    /* Custom styles for the news page */
    .news-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start; /* Align items to the top */
        margin: 20px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .news-image {
        flex: 0 0 40%;
        text-align: center;
    }

    .news-img {
        max-width: 100%;
        max-height: 200px; /* Reduced image height */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .news-details {
        flex: 0 0 58%; /* Adjusted to fit the new image size */
        padding-left: 20px; /* Added padding for separation */
    }

    .news-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    .news-introduction {
        font-size: 20px;
        color: #555;
        margin-bottom: 15px;
    }

    .news-body {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #333;
    }

    .news-author {
        font-size: 16px;
        margin-bottom: 10px;
        color: #888;
    }

    .news-date {
        font-size: 14px;
        color: #888;
    }

    /* Added some spacing for the product cards */
    .products-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px;
    }

    .product-card {
        flex-basis: calc(50% - 20px); /* Two cards per row */
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        text-decoration: none;
        color: #333;
    }

    .product-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
    }

    .product-title {
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
    .product-old {
        padding: 13px;
        font-size: 13px;
        
        text-align: center;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 0;
    }

    header {
        
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 36px;
        font-weight: bold;
    }

    header p {
        margin: 0;
        font-size: 18px;
    }
</style>
<header>
    <h1>News Page</h1>
    
</header>
<div class=\"products-container\">
    ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 340, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 341
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detailnew", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 341)]), "html", null, true);
            echo "\" class=\"card product-card\">
        <img src=\"";
            // line 342
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 342))), "html", null, true);
            echo "\" class=\"product-image\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 342), "html", null, true);
            echo "\">
        <div class=\"card-body\">
            <h5 class=\"product-title\">";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 344), "html", null, true);
            echo "</h5>
        </div>
        <p class=\"product-old\">Tác giả: ";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getname", [], "method", false, false, false, 346), "html", null, true);
            echo ", Ngày đăng: ";
            ((twig_get_attribute($this->env, $this->source, $context["product"], "dateAt", [], "any", false, false, false, 346)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "dateAt", [], "any", false, false, false, 346), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</p>

    </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 350
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 362
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 363
        echo "    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
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
        return "new/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  587 => 363,  577 => 362,  566 => 350,  554 => 346,  549 => 344,  542 => 342,  537 => 341,  533 => 340,  397 => 206,  387 => 205,  368 => 192,  364 => 191,  344 => 174,  300 => 132,  290 => 131,  277 => 127,  267 => 126,  144 => 13,  134 => 12,  115 => 7,  101 => 383,  99 => 362,  87 => 352,  85 => 205,  79 => 201,  77 => 131,  73 => 129,  71 => 126,  68 => 125,  66 => 12,  63 => 11,  57 => 7,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lux/bootstrap.min.css\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

    {% block stylesheets %}
        {{ encore_entry_link_tags('app') }}
        <style>
            .navbar-nav .nav-item {
                margin-right: 20px;
            }
        
            .navbar-nav .nav-item:last-child {
                margin-right: 0;
            }
        
            /* Style the search form */
            .search-form {
                margin-left: auto;
                display: flex;
                align-items: center;
            }
        
            .search-input {
                margin-right: 10px;
            }
        
            /* Style the cart icon */
            .nav-link-cart {
                display: flex;
                align-items: center;
                margin-left: 10px;
            }
        
            /* Style the login/logout button */
            .login-logout-btn {
                margin-left: 10px;
            }
        
            /* Update the footer styles */
            .footer {
                background-color: #343a40;
                color: white;
                padding: 30px 0;
            }
        
            .footer .row {
                margin-top: 20px;
            }
        
            .footer h5 {
                margin-bottom: 20px;
            }
        
            .footer ul {
                padding-left: 0;
                list-style: none;
            }
        
            .footer li {
                margin-bottom: 10px;
            }
            .nav-link {
               
                padding-right: 20px;
              }
            .collapse navbar-collapse{
                
                    justify-content: center;
                    
                
            }
            .divider {
                margin-top: 2rem;
                margin-bottom: 2rem;
                border: none;
                border-top: 1px solid #eee;

            }

            .badge-cart {
                background-color: orange;
                color: white;
                font-size: 18px;
            }

            .search-form {
                display: flex;
                align-items: center;
            }

            .search-input {
                margin-right: 10px;
            }

            .footer {
                background-color: #f8f9fa;
                padding: 30px 0;
            }

            .footer .row {
                margin-top: 20px;
            }

            .footer h5 {
                margin-bottom: 20px;
            }

            .footer ul {
                padding-left: 0;
                list-style: none;
            }

            .footer li {
                margin-bottom: 10px;
            }
        </style>
    {% endblock %}

    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
    {% endblock %}
</head>
<body>
    {% block header %}
    <nav class=\"navbar navbar-expand-lg bg-primary\" data-bs-theme=\"dark\">
        <div class=\"container-fluid\">
            
                <a class=\"nav-link\" href=\"http://127.0.0.1:8000\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"35\" height=\"35\" fill=\"#FFFFFF\" viewBox=\"0 0 16 16\" style=\"margin-left: 200px;\">
                        <path d=\"M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z\"/>
                    </svg>
                </a>
         
            
            <div class=\"collapse navbar-collapse justify-content-center\" id=\"navbarColor02\">

                <ul class=\"navbar-nav mx-auto\">
                    
                    <li class=\"nav-item mx-1 \">
                        <a class=\"nav-link\" href=\"macbook\">Mac</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"ipad\">Ipad</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"iphone\">Iphone</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"watch\">Watch</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"airpods\">Airpods</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"contactnew\">Contact</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"postnew\">News</a>
                    </li>
                    <li class=\"nav-item mx-1\">
                        <a class=\"nav-link\" href=\"orderstatus\">Order Status</a>
                    </li>
                </ul>
               
                
                <ul class=\"navbar-nav\">
                    <form class=\"d-flex\" action=\"{{ path('search') }}\" method=\"GET\" style=\"margin-right: 40px;\">
                        <input class=\"form-control me-sm-0\" type=\"search\" name=\"keyword\" placeholder=\"Search\" required>
                        <button class=\"btn btn-secondary my-2 my-sm-0 mx-2\" type=\"submit\">Search</button>
                    </form>
                </ul>
                  
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item mx-2\">
                        <a class=\"nav-link\" href=\"/cart\" style=\"margin-right: 40px;\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"30\" height=\"30\" fill=\"currentColor\" class=\"bi bi-cart3\" viewBox=\"0 0 16 16\">
                                <path d=\"M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z\"/>
                            </svg>
                        </a>
                    </li>
                </ul>
               
                <form>
                    <a class=\"btn btn-secondary\" href=\"/{{ app.user ? 'logout' : 'login' }}\" @click=\"isOpen = false\">
                        {{ app.user ? 'logout' : 'login'}}
                    </a>
                </form>
            </div>
        </div>
    </nav>

    <hr class=\"divider\">
{% endblock %}




{% block body %}
<style>
    /* Custom styles for the news page */
    .news-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start; /* Align items to the top */
        margin: 20px;
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    .news-image {
        flex: 0 0 40%;
        text-align: center;
    }

    .news-img {
        max-width: 100%;
        max-height: 200px; /* Reduced image height */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .news-details {
        flex: 0 0 58%; /* Adjusted to fit the new image size */
        padding-left: 20px; /* Added padding for separation */
    }

    .news-title {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    .news-introduction {
        font-size: 20px;
        color: #555;
        margin-bottom: 15px;
    }

    .news-body {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
        color: #333;
    }

    .news-author {
        font-size: 16px;
        margin-bottom: 10px;
        color: #888;
    }

    .news-date {
        font-size: 14px;
        color: #888;
    }

    /* Added some spacing for the product cards */
    .products-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px;
    }

    .product-card {
        flex-basis: calc(50% - 20px); /* Two cards per row */
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        text-decoration: none;
        color: #333;
    }

    .product-card:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px 8px 0 0;
    }

    .product-title {
        padding: 10px;
        font-size: 20px;
        font-weight: bold;
        text-align: center;
    }
    .product-old {
        padding: 13px;
        font-size: 13px;
        
        text-align: center;
    }
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 0;
    }

    header {
        
        color: #fff;
        padding: 20px;
        text-align: center;
    }

    header h1 {
        margin: 0;
        font-size: 36px;
        font-weight: bold;
    }

    header p {
        margin: 0;
        font-size: 18px;
    }
</style>
<header>
    <h1>News Page</h1>
    
</header>
<div class=\"products-container\">
    {% for product in products %}
    <a href=\"{{ path('app_detailnew', {'id': product.getId()}) }}\" class=\"card product-card\">
        <img src=\"{{ asset('image/' ~ product.getImage()) }}\" class=\"product-image\" alt=\"{{ product.getTitle() }}\">
        <div class=\"card-body\">
            <h5 class=\"product-title\">{{ product.getTitle() }}</h5>
        </div>
        <p class=\"product-old\">Tác giả: {{ product.getname() }}, Ngày đăng: {{ product.dateAt ? product.dateAt|date('Y-m-d H:i:s') : '' }}</p>

    </a>
    {% endfor %}
</div>
{% endblock %}








    <hr class=\"divider\">
    
    {% block footer %}
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
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
    

</body>
</html>
", "new/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/new/index.html.twig");
    }
}
