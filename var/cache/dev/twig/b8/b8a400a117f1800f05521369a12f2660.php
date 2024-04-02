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

/* base_admin.html.twig */
class __TwigTemplate_1911f8661bec0486a7473ad3e0f71504 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base_admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/flatly/bootstrap.min.css\">
    ";
        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 74
        echo "
  
</head>
";
        // line 77
        $this->displayBlock('header', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('body', $context, $blocks);
        // line 124
        echo "<hr class=\"divider\">

   


</body>
</html>


 ";
        // line 133
        $this->displayBlock('footer', $context, $blocks);
        
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

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "       
        <style>
            .navbar-nav {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
            }
            
            .nav-link {
                padding: 0 10px;
            }
            
            .container-fluid{
                
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

    // line 77
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 78
        echo "<nav class=\"navbar navbar-expand-lg bg-light\" data-bs-theme=\"light\">
    <div class=\"container-fluid justify-content-center\">
            <div class=\"collapse navbar-collapse \" id=\"navbarColor02\">
                <a class=\"nav-item mx-2\" href=\"http://127.0.0.1:8000/symfonyadmin\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACEElEQVR4nO2Yu0rEQBSGPyU2gg/gIqJ4A9PINlZ24lsIlr6BpYUgvoFaqP0qNlpZekG8FPYqWFiIiqJYiKCRgYOEkOxmx2xuez44xWZnMnPO/2cyE1AURVEURVFSZRyoAc8SNblWehxgAfgEvEB8AStAFyXFBc4l2R9gDeiVWJNrnrQxbUur+h0wHdJuCrgumxvcgOrrQE+d9t2S+Lf0uQImKLHqURTaDW6TqpfGDc4/VS+0G9yEVC+cG5wWqV4IN7gtVj23bnBSVj1XbnAzUj1zNzg5UT0TN7g5Uz01Nzg5V72lbhgLObnlUfUoekJOmCanWIwCrwVTPYppycHk8gKMxOm0JR32CqZ6FCaHfclpM06HB2lcoTz0+VzQkEdpbDr5mQSqlhM4CfkE1iiOLMeqylz99Ms9zaPdkF1pbGwzAAzKq88sKG+Wk/Isw4Z338JdkRwO5H47cRfBl4Qn1WzfJMYKxnPcRdAwDGwAt8A9sFrAApgF70lsvw0MWd7vj6IVIHE8LQDqAC8l9+gjQButAZ3APHAMnAHL7eaApYj39kcG88ykAE/y36yc5W/k90ULxsp1AeaAGV8BLjOYZyYFWGz3R6BD1DcHltNAQdKeZ110J4juBNGdIHboVhg9C9CMe8z3wMOU3BabXL6a0hzL0wJg/UnbyyAS56iJwQ//0TeJsF0/FEVRFEVRFNqFX5T3yB520CQaAAAAAElFTkSuQmCC\">
                    
                </a>
                
                <ul class=\"navbar-nav mx-auto \">
                    
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/product\">Course Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\" btn btn-outline-primary\" href=\"http://127.0.0.1:8000/category\">Topic Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/user\">User Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/order\">Orders Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/contact\">Feedback Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/post\">Post Management</a>
                    </li>
                  
                </ul>
            </div>
            <form>
                <a class=\"btn btn-primary my-2 my-sm-0\" href=\"/";
        // line 110
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110)) ? ("logout") : ("login"));
        echo "\" @click=\"isOpen = false\">
                    ";
        // line 111
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111)) ? ("logout") : ("login"));
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

    // line 120
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 121
        echo "

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 133
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 134
        echo "    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h5>FPT Education Organization</h5>
                    <p>Company</p>
                    <p>FPT Education Organization, full name is FPT Education Company Limited, established in 1999. Is one of the member units, holding 1 of the 3 cores of FPT Group, operating in the field of education education in Vietnam.</p>
                </div>
                <div class=\"col-md-6\">
                    <h5>Thông tin liên hệ</h5>
                    <ul class=\"list-unstyled\">
                        <li>Địa chỉ: 205 Nguyễn Xí, Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh</li>
                        <li>Điện thoại: 0866251347</li>
                        <li>Email: hoangnhan1122@fpt.edu.vn</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base_admin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  297 => 134,  287 => 133,  275 => 121,  265 => 120,  247 => 111,  243 => 110,  209 => 78,  199 => 77,  127 => 11,  117 => 10,  98 => 5,  88 => 133,  77 => 124,  75 => 120,  72 => 119,  70 => 77,  65 => 74,  63 => 10,  60 => 9,  54 => 5,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/flatly/bootstrap.min.css\">
    {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}

    {% block stylesheets %}
       
        <style>
            .navbar-nav {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
            }
            
            .nav-link {
                padding: 0 10px;
            }
            
            .container-fluid{
                
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

  
</head>
{% block header %}
<nav class=\"navbar navbar-expand-lg bg-light\" data-bs-theme=\"light\">
    <div class=\"container-fluid justify-content-center\">
            <div class=\"collapse navbar-collapse \" id=\"navbarColor02\">
                <a class=\"nav-item mx-2\" href=\"http://127.0.0.1:8000/symfonyadmin\">
                    <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACEElEQVR4nO2Yu0rEQBSGPyU2gg/gIqJ4A9PINlZ24lsIlr6BpYUgvoFaqP0qNlpZekG8FPYqWFiIiqJYiKCRgYOEkOxmx2xuez44xWZnMnPO/2cyE1AURVEURVFSZRyoAc8SNblWehxgAfgEvEB8AStAFyXFBc4l2R9gDeiVWJNrnrQxbUur+h0wHdJuCrgumxvcgOrrQE+d9t2S+Lf0uQImKLHqURTaDW6TqpfGDc4/VS+0G9yEVC+cG5wWqV4IN7gtVj23bnBSVj1XbnAzUj1zNzg5UT0TN7g5Uz01Nzg5V72lbhgLObnlUfUoekJOmCanWIwCrwVTPYppycHk8gKMxOm0JR32CqZ6FCaHfclpM06HB2lcoTz0+VzQkEdpbDr5mQSqlhM4CfkE1iiOLMeqylz99Ms9zaPdkF1pbGwzAAzKq88sKG+Wk/Isw4Z338JdkRwO5H47cRfBl4Qn1WzfJMYKxnPcRdAwDGwAt8A9sFrAApgF70lsvw0MWd7vj6IVIHE8LQDqAC8l9+gjQButAZ3APHAMnAHL7eaApYj39kcG88ykAE/y36yc5W/k90ULxsp1AeaAGV8BLjOYZyYFWGz3R6BD1DcHltNAQdKeZ110J4juBNGdIHboVhg9C9CMe8z3wMOU3BabXL6a0hzL0wJg/UnbyyAS56iJwQ//0TeJsF0/FEVRFEVRFNqFX5T3yB520CQaAAAAAElFTkSuQmCC\">
                    
                </a>
                
                <ul class=\"navbar-nav mx-auto \">
                    
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/product\">Course Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\" btn btn-outline-primary\" href=\"http://127.0.0.1:8000/category\">Topic Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/user\">User Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/order\">Orders Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/contact\">Feedback Management</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"btn btn-outline-primary\" href=\"http://127.0.0.1:8000/post\">Post Management</a>
                    </li>
                  
                </ul>
            </div>
            <form>
                <a class=\"btn btn-primary my-2 my-sm-0\" href=\"/{{ app.user ? 'logout' : 'login' }}\" @click=\"isOpen = false\">
                    {{ app.user ? 'logout' : 'login'}}
                </a>
            </form>
        </div>
        </div>
    </nav>
    <hr class=\"divider\">
{% endblock %}

{% block body %}


    {% endblock %}
<hr class=\"divider\">

   


</body>
</html>


 {% block footer %}
    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h5>FPT Education Organization</h5>
                    <p>Company</p>
                    <p>FPT Education Organization, full name is FPT Education Company Limited, established in 1999. Is one of the member units, holding 1 of the 3 cores of FPT Group, operating in the field of education education in Vietnam.</p>
                </div>
                <div class=\"col-md-6\">
                    <h5>Thông tin liên hệ</h5>
                    <ul class=\"list-unstyled\">
                        <li>Địa chỉ: 205 Nguyễn Xí, Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh</li>
                        <li>Điện thoại: 0866251347</li>
                        <li>Email: hoangnhan1122@fpt.edu.vn</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {% endblock %}", "base_admin.html.twig", "/Users/hoangnhan/Downloads/ASM_SEMI-26fa78b3864ea7a349dbc530076f4cb955b2245d/templates/base_admin.html.twig");
    }
}
