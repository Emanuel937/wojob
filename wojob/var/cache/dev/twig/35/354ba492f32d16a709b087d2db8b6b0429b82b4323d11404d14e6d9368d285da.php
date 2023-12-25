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

/* App/component/nav.html.twig */
class __TwigTemplate_11354edae2acb4a3910be528ca8f100c881753f8cdeb037f1f996e02a6ae43ad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/nav.html.twig"));

        // line 1
        echo "  <ul id=\"first\">
     <li id=\"sitename\" >
      <a  href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><span class=\"h3\">WO<span>JOB<span></span></span>
    </li>
  </ul>
  <ul class=\"text-center\" id=\"second\" >
    <li>
      <a  href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"  title =\"home\" ><i class=\"fas fa-home\"></i>
      </a>
    </li>
    <li>
      <a  tile=\"recruter  job\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruter");
        echo "\">
        <i class=\"fas fa-user-graduate\"></i>
      </a>
    </li>
    <li id=\"video\">
      <a  href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video");
        echo "\">
        <i class=\"fas fa-tv\"></i>
      </a>
    </li>
    <!--<li>
      <a><i class=\"fas fa-dollar-sign\"></i></a>
    </li>-->
  </ul>
  <ul id=\"third\">
    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "get", [0 => "email"], "method", false, false, false, 26)) {
            // line 27
            echo "      
      <li class=\"icons\">
       <a><i class=\"fas fa-bell\"></i></a>
      </li>
      <li class=\"icons\">
       <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tchat");
            echo "\">
        <i class=\"fas fa-comment\">
        </i>
       </a>
      </li>
      <li class=\"icons\">
        <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("session");
            echo "\"> 
          <i class=\"fas fa-sign-out-alt\">
          </i>
        </a>
      </li>
      <a href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
            echo "\">
       <img class=\"profil\"src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cv.png"), "html", null, true);
            echo "\" style=\"width:40px; height:40px; border-radius:100%\">
      </a>
    ";
        } else {
            // line 47
            echo "      <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
            echo "\" id=\"signin\">
        connecter 
        <i class=\"fas fa-sign-in-alt\"></i>
      </a>
      <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
            echo "\" id=\"signup\">
        S'inscrire     
        <i class=\"fas fa-user-plus\"></i>
      </a>
   ";
        }
        // line 56
        echo "   <input type=\"hidden\" value =\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "get", [0 => "email"], "method", false, false, false, 56), "html", null, true);
        echo "\" id=\"ap_s_e\">
  </ul>
  ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/component/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 56,  126 => 51,  118 => 47,  112 => 44,  108 => 43,  100 => 38,  91 => 32,  84 => 27,  82 => 26,  70 => 17,  62 => 12,  55 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("  <ul id=\"first\">
     <li id=\"sitename\" >
      <a  href=\"{{path('home')}}\"><span class=\"h3\">WO<span>JOB<span></span></span>
    </li>
  </ul>
  <ul class=\"text-center\" id=\"second\" >
    <li>
      <a  href=\"{{path('home')}}\"  title =\"home\" ><i class=\"fas fa-home\"></i>
      </a>
    </li>
    <li>
      <a  tile=\"recruter  job\" href=\"{{path('recruter')}}\">
        <i class=\"fas fa-user-graduate\"></i>
      </a>
    </li>
    <li id=\"video\">
      <a  href=\"{{path('video')}}\">
        <i class=\"fas fa-tv\"></i>
      </a>
    </li>
    <!--<li>
      <a><i class=\"fas fa-dollar-sign\"></i></a>
    </li>-->
  </ul>
  <ul id=\"third\">
    {% if app.session.get('email') %}
      
      <li class=\"icons\">
       <a><i class=\"fas fa-bell\"></i></a>
      </li>
      <li class=\"icons\">
       <a href=\"{{path('tchat')}}\">
        <i class=\"fas fa-comment\">
        </i>
       </a>
      </li>
      <li class=\"icons\">
        <a href=\"{{path('session')}}\"> 
          <i class=\"fas fa-sign-out-alt\">
          </i>
        </a>
      </li>
      <a href=\"{{path('user')}}\">
       <img class=\"profil\"src=\"{{asset('img/cv.png')}}\" style=\"width:40px; height:40px; border-radius:100%\">
      </a>
    {% else %}
      <a href=\"{{path('signin')}}\" id=\"signin\">
        connecter 
        <i class=\"fas fa-sign-in-alt\"></i>
      </a>
      <a href=\"{{path('signup')}}\" id=\"signup\">
        S'inscrire     
        <i class=\"fas fa-user-plus\"></i>
      </a>
   {% endif %}
   <input type=\"hidden\" value =\"{{app.session.get('email')}}\" id=\"ap_s_e\">
  </ul>
  ", "App/component/nav.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/component/nav.html.twig");
    }
}
