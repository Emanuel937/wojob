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

/* App/component/resultCandidat.html.twig */
class __TwigTemplate_60053a0d271fcf4d6c7fe85c60209186b80a1d5c732f18fd4ea2ff64f142e299 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/resultCandidat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/resultCandidat.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
<!--card -->
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repository"]) || array_key_exists("repository", $context) ? $context["repository"] : (function () { throw new RuntimeError('Variable "repository" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 8
            echo "  <div class=\"card_div\" id=\"hideData\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">
         <span>
          <img class=\"profil\"src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cv.png"), "html", null, true);
            echo "\">
         </span>
         <span class=\"font-weight-bold\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "username", [], "any", false, false, false, 15), "html", null, true);
            echo "
         </span>
       </h5>
        <h6 class=\"card-subtitle mb-2 font-weight-bold\">
          <span class=\"text-dark\">Je suis</span> :";
            // line 19
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "title", [], "any", false, false, false, 19)), "html", null, true);
            echo "
        </h6>
        <!--- video candidat -->
        <div>
          <video width=\"100%\" height=\"315\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "video", [], "any", false, false, false, 23), "html", null, true);
            echo "\" controls=\"true\">
          </video> 
        </div>
         <hr>
         <div>
           <button class=\"btn\">
            <i class=\"fas fa-mobile-alt\"></i>
           ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "tel", [], "any", false, false, false, 30), "html", null, true);
            echo "
           </button>
           <button class=\"card-link btn\">
              <i class=\"fas fa-download\"></i> Telecharger cv en pdf
           </button>
            <button  class=\"card-link btn text-white\">
              <i class=\"fas fa-share-alt\">
              </i>Partager</button>
            <input type=\"hidden\" name=\"url_candidat\" value=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchcandidat");
            echo "\">
         </div>
        <hr>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "</body>
<html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/component/resultCandidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 45,  102 => 38,  91 => 30,  81 => 23,  74 => 19,  67 => 15,  62 => 13,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
<!--card -->
  {% for  data in repository  %}
  <div class=\"card_div\" id=\"hideData\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">
         <span>
          <img class=\"profil\"src=\"{{asset('img/cv.png')}}\">
         </span>
         <span class=\"font-weight-bold\">{{data.username}}
         </span>
       </h5>
        <h6 class=\"card-subtitle mb-2 font-weight-bold\">
          <span class=\"text-dark\">Je suis</span> :{{data.title|upper}}
        </h6>
        <!--- video candidat -->
        <div>
          <video width=\"100%\" height=\"315\" src=\"{{data.video}}\" controls=\"true\">
          </video> 
        </div>
         <hr>
         <div>
           <button class=\"btn\">
            <i class=\"fas fa-mobile-alt\"></i>
           {{data.tel}}
           </button>
           <button class=\"card-link btn\">
              <i class=\"fas fa-download\"></i> Telecharger cv en pdf
           </button>
            <button  class=\"card-link btn text-white\">
              <i class=\"fas fa-share-alt\">
              </i>Partager</button>
            <input type=\"hidden\" name=\"url_candidat\" value=\"{{path('searchcandidat')}}\">
         </div>
        <hr>
      </div>
    </div>
  </div>
{% endfor%}
</body>
<html>", "App/component/resultCandidat.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/component/resultCandidat.html.twig");
    }
}
