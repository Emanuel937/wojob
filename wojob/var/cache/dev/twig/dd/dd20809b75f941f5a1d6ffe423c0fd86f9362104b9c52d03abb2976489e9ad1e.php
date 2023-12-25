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

/* App/component/resultAnnonce.html.twig */
class __TwigTemplate_4cf7e2fe7f0d5bdc031e983bdf436257bc0e2e897725297487e1eb18abb66458 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/resultAnnonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/resultAnnonce.html.twig"));

        // line 1
        echo "<html>
  <head>
  </head>
  <body>
    <main>
       <div id=\"hideData\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonceInfo"]) {
            // line 8
            echo "        <a  class=\"lastAnnonce\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("infojob");
            echo "?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "\">         
          <article>
            <h2 class=\"row\"> 
              <div class='col-md-3'>
                <img  class=\"recruter_logos\"src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bola.jpg"), "html", null, true);
            echo "\" alt=\"logos_entreprise\">
              </div>
              <div class='col-md-9'>
                <span style=\"color: #978c8c;font-weight: normal;font-size:10px\">";
            // line 15
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "identifient", [], "any", false, false, false, 15)), "html", null, true);
            echo "</span>
                <br><strong class=\"m-2\">
                  JE CHERCHE:
                </strong>
                ";
            // line 19
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "title", [], "any", false, false, false, 19)), "html", null, true);
            echo "
              </div>
            </h2>
            <p style=\"color:#6a6969\">
              <strong class=\"m-2 text-primary\">Mission: 
              </strong>
              ";
            // line 25
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "mission", [], "any", false, false, false, 25), 0, 150)), "html", null, true);
            echo " ...
              
            </p>
            <h3 class=\"h5\"> <hr>
            <i class=\"fas fa-map-marker-alt\">
              </i>
              <span style=\"font-size:14px\">";
            // line 31
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "city", [], "any", false, false, false, 31)), "html", null, true);
            echo "
              </span>
              <span class=\"contrat\">";
            // line 33
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "contrat", [], "any", false, false, false, 33)), "html", null, true);
            echo "
              </span>
              <span class=\"money\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "salaire", [], "any", false, false, false, 35), "html", null, true);
            echo "\$
              </span> 
              <hr>
              <span  class=\"under_span\">partager </span> <span class=\"under_span\">garder </span> <span class=\"under_span\">postuler/read more </span>
            </h3>
            </article>
         </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonceInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </div>
    </main>
  </body>
<html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/component/resultAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 43,  106 => 35,  101 => 33,  96 => 31,  87 => 25,  78 => 19,  71 => 15,  65 => 12,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
  <head>
  </head>
  <body>
    <main>
       <div id=\"hideData\">
        {% for annonceInfo in annonce %}
        <a  class=\"lastAnnonce\" href=\"{{path('infojob')}}?id={{annonceInfo.id}}\">         
          <article>
            <h2 class=\"row\"> 
              <div class='col-md-3'>
                <img  class=\"recruter_logos\"src=\"{{asset('img/bola.jpg')}}\" alt=\"logos_entreprise\">
              </div>
              <div class='col-md-9'>
                <span style=\"color: #978c8c;font-weight: normal;font-size:10px\">{{annonceInfo.identifient|upper}}</span>
                <br><strong class=\"m-2\">
                  JE CHERCHE:
                </strong>
                {{annonceInfo.title|upper}}
              </div>
            </h2>
            <p style=\"color:#6a6969\">
              <strong class=\"m-2 text-primary\">Mission: 
              </strong>
              {{annonceInfo.mission|slice(0,150)|capitalize}} ...
              
            </p>
            <h3 class=\"h5\"> <hr>
            <i class=\"fas fa-map-marker-alt\">
              </i>
              <span style=\"font-size:14px\">{{annonceInfo.city|capitalize}}
              </span>
              <span class=\"contrat\">{{annonceInfo.contrat|upper}}
              </span>
              <span class=\"money\">{{annonceInfo.salaire}}\$
              </span> 
              <hr>
              <span  class=\"under_span\">partager </span> <span class=\"under_span\">garder </span> <span class=\"under_span\">postuler/read more </span>
            </h3>
            </article>
         </a>
        {% endfor %}
      </div>
    </main>
  </body>
<html>", "App/component/resultAnnonce.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/component/resultAnnonce.html.twig");
    }
}
