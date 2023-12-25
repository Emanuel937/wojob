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

/* App/page/infojob.html.twig */
class __TwigTemplate_1f83285dad7eeeaa582d400d33dcff4830f4803b77d903dea71b9ad176fd748c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/infojob.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/infojob.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->loadTemplate("App/signInUp/links.html.twig", "App/page/infojob.html.twig", 4)->display($context);
        // line 5
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page/nav.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page/infojob.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <style>
      main{
        background-color:#f0f2f5;
        padding-top:80px;
        padding-bottom:40px;
      }
      article{
        width: 70%;
        margin: auto;
        background-color:white;
        padding: 20px;
        max-height: 1000px;
        height: 1000px

      }

      article h1{
        text-align: center;
        color: rgb(35, 44, 122);
        font-size: 1.5rem;
        line-height: 1.875rem;
        text-align: left;
        font-style: normal;
        font-weight: 800;
        font-family: Montserrat, Helvetica, Arial, sans-serif;
        letter-spacing: 0.025rem;
        margin:20px 0px 20px 0px
      }

      article h2{
        font-size:20px;
        background-color:#fbfcfd;
        padding:10px;
        border-radius:10px;
        font-weight: bold;
        width:200px;
      }
      article button{
        width: 50%;
        font-size: 0.9375rem;
        line-height: 0.9375rem;
        text-align: center;
        font-family: Montserrat, Helvetica, Arial, sans-serif;
        font-weight: 600;
        letter-spacing: 0.016875rem;
        padding: 0rem 1.125rem;
        background-color: rgb(1, 82, 199);
        color: rgb(255, 255, 255);
        border: 1px solid rgb(1, 82, 199);
        border-radius: 2.25rem;
        cursor: pointer;
        min-height: 3.1125rem;
        margin:auto;

       
      }
      main h3{
        margin-top: 87%;
        text-align: center;
        background-color: white;
        padding-top: 30px;
        margin-left: 117px;
        padding-bottom: 31px;
        width:95px;
        border-radius: 100px;
        color:#4f0093
      }

    </style>

  </head>
  <body>
  \t<header>
       ";
        // line 81
        $this->loadTemplate("App/component/nav.html.twig", "App/page/infojob.html.twig", 81)->display($context);
        // line 82
        echo "  \t</header>
  \t<main>
        <div class=\"row\">
          <div class=\"col-md-2\">
            <h3>
              <i class=\"fas fa-chevron-left\">
              </i>
            </h3>
          </div>
          <div class=\"col-md-8\">
            <article>
      
        <div  class=\"row\">
          <div class=\"col-md-6\">
            <h1> <i class=\"fas fa-search\"></i> J'AI CHERCHE :</h1>
            <h2 class=\"text-center text-success\">
             ";
        // line 98
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 98, $this->source); })()), "title", [], "any", false, false, false, 98)), "html", null, true);
        echo "
            </h2>

           <h1>
             <i class=\"fas fa-file-signature\"></i> Type de contrat
           </h1> 
        <h2 class=\"text-primary\">";
        // line 104
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 104, $this->source); })()), "contrat", [], "any", false, false, false, 104)), "html", null, true);
        echo "</h2>
        <h1>
         <i class=\"fas fa-phone-volume\"></i> Appele-moi aux:
        </h1>
        <h2 class=\"text-primary\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 108, $this->source); })()), "tel", [], "any", false, false, false, 108), "html", null, true);
        echo "</h2>

        <h1> <i class=\"fas fa-money-bill-alt\"></i> Salaire Brut</h1> 
        <h2 class=\"text-danger\">";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 111, $this->source); })()), "salaire", [], "any", false, false, false, 111), "html", null, true);
        echo "\$ /an</h2>
       
        </div>
        <div class=\"col-md-6\">
          <h1> La mission</h1>
          <p>";
        // line 116
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 116, $this->source); })()), "mission", [], "any", false, false, false, 116)), "html", null, true);
        echo "</p>
          <h1>Tâches de la mission</h1>
          <h1>Profil recherché</h1>
          <p>";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 119, $this->source); })()), "profil", [], "any", false, false, false, 119), "html", null, true);
        echo "</p>
          </div>
          
        </div>

        <button>Postuler <i class=\"fas fa-thumbs-up\"></i></button>
      </article>
            
          </div>
          <div class=\"col-md-2\">
            <h3>
             <i class=\"fas fa-chevron-right\"></i>
            </h3>
          </div>
        </div>
      
    </main>
  
    ";
        // line 137
        $this->loadTemplate("App/component/footer.html.twig", "App/page/infojob.html.twig", 137)->display($context);
        // line 138
        echo "  
  </body>
<html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/page/infojob.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 138,  213 => 137,  192 => 119,  186 => 116,  178 => 111,  172 => 108,  165 => 104,  156 => 98,  138 => 82,  136 => 81,  59 => 7,  55 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% include 'App/signInUp/links.html.twig' %}
     <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/page/nav.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('css/page/infojob.css') }}\" rel=\"stylesheet\"/>
    <style>
      main{
        background-color:#f0f2f5;
        padding-top:80px;
        padding-bottom:40px;
      }
      article{
        width: 70%;
        margin: auto;
        background-color:white;
        padding: 20px;
        max-height: 1000px;
        height: 1000px

      }

      article h1{
        text-align: center;
        color: rgb(35, 44, 122);
        font-size: 1.5rem;
        line-height: 1.875rem;
        text-align: left;
        font-style: normal;
        font-weight: 800;
        font-family: Montserrat, Helvetica, Arial, sans-serif;
        letter-spacing: 0.025rem;
        margin:20px 0px 20px 0px
      }

      article h2{
        font-size:20px;
        background-color:#fbfcfd;
        padding:10px;
        border-radius:10px;
        font-weight: bold;
        width:200px;
      }
      article button{
        width: 50%;
        font-size: 0.9375rem;
        line-height: 0.9375rem;
        text-align: center;
        font-family: Montserrat, Helvetica, Arial, sans-serif;
        font-weight: 600;
        letter-spacing: 0.016875rem;
        padding: 0rem 1.125rem;
        background-color: rgb(1, 82, 199);
        color: rgb(255, 255, 255);
        border: 1px solid rgb(1, 82, 199);
        border-radius: 2.25rem;
        cursor: pointer;
        min-height: 3.1125rem;
        margin:auto;

       
      }
      main h3{
        margin-top: 87%;
        text-align: center;
        background-color: white;
        padding-top: 30px;
        margin-left: 117px;
        padding-bottom: 31px;
        width:95px;
        border-radius: 100px;
        color:#4f0093
      }

    </style>

  </head>
  <body>
  \t<header>
       {% include 'App/component/nav.html.twig'%}
  \t</header>
  \t<main>
        <div class=\"row\">
          <div class=\"col-md-2\">
            <h3>
              <i class=\"fas fa-chevron-left\">
              </i>
            </h3>
          </div>
          <div class=\"col-md-8\">
            <article>
      
        <div  class=\"row\">
          <div class=\"col-md-6\">
            <h1> <i class=\"fas fa-search\"></i> J'AI CHERCHE :</h1>
            <h2 class=\"text-center text-success\">
             {{annonce.title|upper}}
            </h2>

           <h1>
             <i class=\"fas fa-file-signature\"></i> Type de contrat
           </h1> 
        <h2 class=\"text-primary\">{{annonce.contrat|upper}}</h2>
        <h1>
         <i class=\"fas fa-phone-volume\"></i> Appele-moi aux:
        </h1>
        <h2 class=\"text-primary\">{{annonce.tel}}</h2>

        <h1> <i class=\"fas fa-money-bill-alt\"></i> Salaire Brut</h1> 
        <h2 class=\"text-danger\">{{annonce.salaire}}\$ /an</h2>
       
        </div>
        <div class=\"col-md-6\">
          <h1> La mission</h1>
          <p>{{annonce.mission|capitalize}}</p>
          <h1>Tâches de la mission</h1>
          <h1>Profil recherché</h1>
          <p>{{annonce.profil}}</p>
          </div>
          
        </div>

        <button>Postuler <i class=\"fas fa-thumbs-up\"></i></button>
      </article>
            
          </div>
          <div class=\"col-md-2\">
            <h3>
             <i class=\"fas fa-chevron-right\"></i>
            </h3>
          </div>
        </div>
      
    </main>
  
    {% include 'App/component/footer.html.twig'%}
  
  </body>
<html>", "App/page/infojob.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/page/infojob.html.twig");
    }
}
