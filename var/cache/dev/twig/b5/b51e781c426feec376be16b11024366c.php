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

/* home/index.html.twig */
class __TwigTemplate_73e08926a44307b5e49391e72b349bb5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        .slider {
          width: 100%;
          height: 500px;
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 132
        echo "    <div class=\"container\">
        <div class=\"video-container\">

            </head>
            <body>
              <div class=\"slider\">
                <img class=\"slide active\" src=\"image/2 copy.jpg\">
                <img class=\"slide\" src=\"image/slide0.jpg\">
                <img class=\"slide\" src=\"image/slide00.jpg\">
                
            
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
            
            
        </div>
        <h1 class=\"text-center mt-5\">Sản phẩm nổi bật</h1>
        <div class=\"product-container\">
            ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 173, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 174
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 174)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 175))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 175), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 177), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 178), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <!-- Move the form outside of the card-footer -->
                            <form action=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 181)]), "html", null, true);
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
        // line 188
        echo "        </div>

        <div class=\"text-center mt-4\">
            <a href=\"home1\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
        </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Macbook</h2>
        <div class=\"product-container\">
            ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["macbookProducts"]) || array_key_exists("macbookProducts", $context) ? $context["macbookProducts"] : (function () { throw new RuntimeError('Variable "macbookProducts" does not exist.', 198, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 199
            echo "                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 200)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 201))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 201), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 203), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 204
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 204), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 206)]), "html", null, true);
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
        // line 212
        echo " 
        </div>
        <div class=\"text-center mt-4\">
          <a href=\"macbook\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">IPad</h2>
        <div class=\"product-container\">
            ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["ipadProducts"]) || array_key_exists("ipadProducts", $context) ? $context["ipadProducts"] : (function () { throw new RuntimeError('Variable "ipadProducts" does not exist.', 222, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 223
            echo "                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 224)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 225))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 225), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 227
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 227), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 228
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 228), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 230
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 230)]), "html", null, true);
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
        // line 237
        echo "        </div>
        <div class=\"text-center mt-4\">
          <a href=\"ipad\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Iphone</h2>
        <div class=\"product-container\">
            ";
        // line 246
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["iphoneProducts"]) || array_key_exists("iphoneProducts", $context) ? $context["iphoneProducts"] : (function () { throw new RuntimeError('Variable "iphoneProducts" does not exist.', 246, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 247
            echo "                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 248)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 249))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 249), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 251), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 252), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 254)]), "html", null, true);
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
        // line 261
        echo "        </div>
        <div class=\"text-center mt-4\">
          <a href=\"iphone\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Smart watch</h2>
        <div class=\"product-container\">
            ";
        // line 270
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["sProducts"]) || array_key_exists("sProducts", $context) ? $context["sProducts"] : (function () { throw new RuntimeError('Variable "sProducts" does not exist.', 270, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 271
            echo "                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 272)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 273
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 273))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 273), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 275), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 276), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 278)]), "html", null, true);
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
        // line 285
        echo "        </div>
        <div class=\"text-center mt-4\">
          <a href=\"watch\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Airpods</h2>
        <div class=\"product-container\">
            ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["aProducts"]) || array_key_exists("aProducts", $context) ? $context["aProducts"] : (function () { throw new RuntimeError('Variable "aProducts" does not exist.', 294, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 295
            echo "                <!-- Remove the extra div with class=\"card product-card\" -->
                <a href=\"";
            // line 296
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_detail_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 296)]), "html", null, true);
            echo "\" class=\"card product-card\">
                    <img src=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("image/" . twig_get_attribute($this->env, $this->source, $context["product"], "getImage", [], "method", false, false, false, 297))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 297), "html", null, true);
            echo "\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getTitle", [], "method", false, false, false, 299), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Giá: ";
            // line 300
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getPrice", [], "method", false, false, false, 300), "html", null, true);
            echo ".000.000.VND</p>
                        <div class=\"action\">
                            <form action=\"";
            // line 302
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_to_cart", ["productId" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 302)]), "html", null, true);
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
        // line 309
        echo "        </div>
        <div class=\"text-center mt-4\">
          <a href=\"airpods\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>




    

    
  
  </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  571 => 309,  558 => 302,  553 => 300,  549 => 299,  542 => 297,  538 => 296,  535 => 295,  531 => 294,  520 => 285,  507 => 278,  502 => 276,  498 => 275,  491 => 273,  487 => 272,  484 => 271,  480 => 270,  469 => 261,  456 => 254,  451 => 252,  447 => 251,  440 => 249,  436 => 248,  433 => 247,  429 => 246,  418 => 237,  405 => 230,  400 => 228,  396 => 227,  389 => 225,  385 => 224,  382 => 223,  378 => 222,  366 => 212,  353 => 206,  348 => 204,  344 => 203,  337 => 201,  333 => 200,  330 => 199,  326 => 198,  314 => 188,  301 => 181,  295 => 178,  291 => 177,  284 => 175,  279 => 174,  275 => 173,  232 => 132,  222 => 131,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
        .slider {
          width: 100%;
          height: 500px;
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
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"video-container\">

            </head>
            <body>
              <div class=\"slider\">
                <img class=\"slide active\" src=\"image/2 copy.jpg\">
                <img class=\"slide\" src=\"image/slide0.jpg\">
                <img class=\"slide\" src=\"image/slide00.jpg\">
                
            
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
            
            
        </div>
        <h1 class=\"text-center mt-5\">Sản phẩm nổi bật</h1>
        <div class=\"product-container\">
            {% for product in products %}
                <a href=\"{{ path('app_detail_show', {'id': product.getId()}) }}\" class=\"card product-card\">
                    <img src=\"{{ asset('image/' ~ product.getImage()) }}\" class=\"card-img-top\" alt=\"{{ product.getTitle() }}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ product.getTitle() }}</h5>
                        <p class=\"card-text\">Giá: {{ product.getPrice() }}.000.000.VND</p>
                        <div class=\"action\">
                            <!-- Move the form outside of the card-footer -->
                            <form action=\"{{ path('app_add_to_cart', {'productId': product.id}) }}\" method=\"POST\">
                                <button class=\"btn btn-primary mt-4 addToCartBtn\" type=\"submit\">Thêm vào giỏ hàng</button>
                            </form>
                        </div>
                    </div>
                </a>
            {% endfor %}
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"home1\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
        </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Macbook</h2>
        <div class=\"product-container\">
            {% for product in macbookProducts|slice(0, 4) %}
                <!-- Remove the extra div with class=\"card product-card\" -->
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
        <div class=\"text-center mt-4\">
          <a href=\"macbook\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">IPad</h2>
        <div class=\"product-container\">
            {% for product in ipadProducts|slice(0, 4) %}
                <!-- Remove the extra div with class=\"card product-card\" -->
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
        <div class=\"text-center mt-4\">
          <a href=\"ipad\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Iphone</h2>
        <div class=\"product-container\">
            {% for product in iphoneProducts|slice(0, 4) %}
                <!-- Remove the extra div with class=\"card product-card\" -->
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
        <div class=\"text-center mt-4\">
          <a href=\"iphone\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Smart watch</h2>
        <div class=\"product-container\">
            {% for product in sProducts|slice(0, 4) %}
                <!-- Remove the extra div with class=\"card product-card\" -->
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
        <div class=\"text-center mt-4\">
          <a href=\"watch\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>

        <hr class=\"divider\">

        <h2 class=\"text-center mt-5\">Airpods</h2>
        <div class=\"product-container\">
            {% for product in aProducts|slice(0, 4) %}
                <!-- Remove the extra div with class=\"card product-card\" -->
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
        <div class=\"text-center mt-4\">
          <a href=\"airpods\" class=\"btn btn-outline-primary\">Xem tất cả sản phẩm</a>
      </div>




    

    
  
  </div>
    
{% endblock %}

", "home/index.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/home/index.html.twig");
    }
}
