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

/* App/signInUp/signin.html.twig */
class __TwigTemplate_ac747d0c8cd79ce4f8db622204e03226383d1129683ebb86c62ecfb524e1f85b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/signInUp/signin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/signInUp/signin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->loadTemplate("App/signInUp/links.html.twig", "App/signInUp/signin.html.twig", 4)->display($context);
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/signInUp/signInUp.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/particular.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
  \t<main id=\"particles-js\">
  \t\t<form id=\"signin\" class=\"card\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        echo "\" method =\"post\">
         <h1>WO<span>JOB<span></h1>
        <h2 class=\"h1\">S'identifier</h2>
        <p>Trouvez vos cadidats ou vos job</sp>
        <div class=\"mb-3\">
         <input type=\"email\" class=\"form-control form-input\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\" name =\"email\" required>
        </div>
        <div class=\"mb-3\">
          <input class=\"form-control form-input\" id=\"exampleFormControlTextarea1\" rows=\"3\" type=\"password\" required name=\"password\" >
        </div>
         <p><a href=\"#\">Mot de passe oublié </a></p>
        <button class=\" text-white\" type=\"submit\">
          S'indentifier
        </button>
        <p>Nouveau sur wojob? <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\" class=\"text-primary text-font-bold\">S'inscrire</a></p>
        <p class=\"text-center text-danger\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</p>
         <p class=\"text-center\">Wojob  &copy; all right reserverd 2021</p>
  \t\t</form>
  \t</main>
    <script   src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/RunParticular.js"), "html", null, true);
        echo "\">
    </script>
  </body>
<html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/signInUp/signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  83 => 25,  79 => 24,  62 => 10,  55 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% include 'App/signInUp/links.html.twig' %}
    <link href=\"{{ asset('css/signInUp/signInUp.css') }}\" rel=\"stylesheet\"/>
    <script src=\"{{asset('js/particular.js')}}\"></script>
  </head>
  <body>
  \t<main id=\"particles-js\">
  \t\t<form id=\"signin\" class=\"card\" action=\"{{path('signin')}}\" method =\"post\">
         <h1>WO<span>JOB<span></h1>
        <h2 class=\"h1\">S'identifier</h2>
        <p>Trouvez vos cadidats ou vos job</sp>
        <div class=\"mb-3\">
         <input type=\"email\" class=\"form-control form-input\" id=\"exampleFormControlInput1\" placeholder=\"name@example.com\" name =\"email\" required>
        </div>
        <div class=\"mb-3\">
          <input class=\"form-control form-input\" id=\"exampleFormControlTextarea1\" rows=\"3\" type=\"password\" required name=\"password\" >
        </div>
         <p><a href=\"#\">Mot de passe oublié </a></p>
        <button class=\" text-white\" type=\"submit\">
          S'indentifier
        </button>
        <p>Nouveau sur wojob? <a href=\"{{path('signup')}}\" class=\"text-primary text-font-bold\">S'inscrire</a></p>
        <p class=\"text-center text-danger\">{{status}}</p>
         <p class=\"text-center\">Wojob  &copy; all right reserverd 2021</p>
  \t\t</form>
  \t</main>
    <script   src=\"{{asset('js/RunParticular.js')}}\">
    </script>
  </body>
<html>", "App/signInUp/signin.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/signInUp/signin.html.twig");
    }
}
