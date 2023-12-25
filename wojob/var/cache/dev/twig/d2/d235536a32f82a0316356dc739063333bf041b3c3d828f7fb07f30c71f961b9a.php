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

/* App/page/video.html.twig */
class __TwigTemplate_b95da3e6c126d6c49339f20ce7cf03b7bf4835cc6de1df29cb86dce495343630 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/video.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/video.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->loadTemplate("App/signInUp/links.html.twig", "App/page/video.html.twig", 4)->display($context);
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page/video.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  </head>
  <body>
  \t<header>
      ";
        // line 9
        $this->loadTemplate("App/component/nav.html.twig", "App/page/video.html.twig", 9)->display($context);
        // line 10
        echo "  \t</header>
  \t<main>
      <div class=\" row\">
        <div class=\"card col-md-3\" style=\"border-bottom:none\">
            <div class=\"card-body\">
              <p class=\"text-center\">
                Désormais vous pouvez trouver votre candidat toute en  regardant sa videod'apresentation  avec
                <span style=\"color:#4f0093\" class=\"font-weight-bold\">
                  cv video studio <i class=\"fas fa-video\"></i>
                </span> 
              </p>   
              <p> 
                <span class=\"text-primary font-weight-bold\">
                  Je cherche: 
                </span> 
                <input type=\"text\" class=\"form-control\" name=\"search_candidat\" placeholder=\"métier, mots-clé\">
              </p>
               <hr>
                <p>
                  <span class=\"font-weight-bold text-primary\">
                    <i class=\"fas fa-city color_vio\"></i> City: </span>
                  <input type=\"text\" class=\"form-control \" name=\"city_candidat\" placeholder=\"Ex.: Paris\">
                </p>
                <p> 
                 <span class=\"font-weight-bold text-primary\">
                  <i class=\"fab fa-usps color_vio\"></i>  Code Postal:
                 </span>
                 <input type=\"number\" class=\"form-control\"name=\"codePostal_candidat\"
                   placeholder=\"Ex.:75007\">
                </p>
                <button class=\"btn text-white\" id=\"search_candidat\"style=\"background:#4f0093\">
              rechercher candidats 
              <i class=\"fas fa-chevron-right\"></i>
            </button>
            </div>
          </div>
          <div class=\"col-md-9 \"  id=\"title\" style=\"background-color:#f0f2f5;\">
            <h1>TROUVEZ VOTRE <br> PROCHAIN CANDIDAT</h1>
            <!--- card -->
            <div id=\"hideData\">
            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repository"]) || array_key_exists("repository", $context) ? $context["repository"] : (function () { throw new RuntimeError('Variable "repository" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 51
            echo "            <div class=\"card_div\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                   <span>
                    <img class=\"profil\"src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/cv.png"), "html", null, true);
            echo "\">
                   </span>
                   <!-- <span class=\"font-weight-bold\">";
            // line 59
            echo "                   </span> -->
                 </h5>
                  <h6 class=\"card-subtitle mb-2 font-weight-bold\">
                    <span class=\"text-dark\">Je suis</span> :";
            // line 62
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "title", [], "any", false, false, false, 62)), "html", null, true);
            echo "
                  </h6>
                
                  <div>
                    <video width=\"100%\" height=\"315\" src=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "video", [], "any", false, false, false, 66), "html", null, true);
            echo "\" controls=\"true\">
                    </video> 
                  </div>
                   <hr>
                   <div>
                     <button class=\"btn\">
                      <i class=\"fas fa-mobile-alt\"></i>
                     ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "tel", [], "any", false, false, false, 73), "html", null, true);
            echo "
                     </button>
                     <button class=\"card-link btn\">
                        <i class=\"fas fa-download\"></i> Telecharger cv en pdf
                     </button>
                      <button  class=\"card-link btn text-white\">
                        <i class=\"fas fa-share-alt\">
                        </i>Partager</button>
                      <input type=\"hidden\" name=\"url_candidat\" value=\"";
            // line 81
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
        // line 88
        echo "        </div>
          <div id=\"showData\">
          </div>
          <!-- second div -->        
      </div>
  \t</main>
    ";
        // line 94
        $this->loadTemplate("App/component/footer.html.twig", "App/page/video.html.twig", 94)->display($context);
        // line 95
        echo "  </body>
  <script>
    /*ajax code */
    \$(\"#search_candidat\").click(function(){
      
      let url = \$(\"input[name='url_candidat']\").val(),
          search_candidat = \$(\"input[name='search_candidat']\").val(),
          city_candidat = \$(\"input[name='city_candidat']\").val(),
          codePostal_candidat = \$(\"input[name='codePostal_candidat']\").val(); 

      \$.post(url, {
        search_candidat:search_candidat,
        city_candidat:city_candidat,
        codePostal_candidat:codePostal_candidat
      },(data, status , states)=>{
        // set data here ...
         \$(\"#hideData\").hide(\"1000\", function(){
          \$(\"#showData\").html(data);
         });
      });
    })
    
  </script>
<html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/page/video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 95,  172 => 94,  164 => 88,  151 => 81,  140 => 73,  130 => 66,  123 => 62,  118 => 59,  113 => 56,  106 => 51,  102 => 50,  60 => 10,  58 => 9,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% include 'App/signInUp/links.html.twig' %}
    <link href=\"{{ asset('css/page/video.css') }}\" rel=\"stylesheet\"/>
  </head>
  <body>
  \t<header>
      {% include 'App/component/nav.html.twig' %}
  \t</header>
  \t<main>
      <div class=\" row\">
        <div class=\"card col-md-3\" style=\"border-bottom:none\">
            <div class=\"card-body\">
              <p class=\"text-center\">
                Désormais vous pouvez trouver votre candidat toute en  regardant sa videod'apresentation  avec
                <span style=\"color:#4f0093\" class=\"font-weight-bold\">
                  cv video studio <i class=\"fas fa-video\"></i>
                </span> 
              </p>   
              <p> 
                <span class=\"text-primary font-weight-bold\">
                  Je cherche: 
                </span> 
                <input type=\"text\" class=\"form-control\" name=\"search_candidat\" placeholder=\"métier, mots-clé\">
              </p>
               <hr>
                <p>
                  <span class=\"font-weight-bold text-primary\">
                    <i class=\"fas fa-city color_vio\"></i> City: </span>
                  <input type=\"text\" class=\"form-control \" name=\"city_candidat\" placeholder=\"Ex.: Paris\">
                </p>
                <p> 
                 <span class=\"font-weight-bold text-primary\">
                  <i class=\"fab fa-usps color_vio\"></i>  Code Postal:
                 </span>
                 <input type=\"number\" class=\"form-control\"name=\"codePostal_candidat\"
                   placeholder=\"Ex.:75007\">
                </p>
                <button class=\"btn text-white\" id=\"search_candidat\"style=\"background:#4f0093\">
              rechercher candidats 
              <i class=\"fas fa-chevron-right\"></i>
            </button>
            </div>
          </div>
          <div class=\"col-md-9 \"  id=\"title\" style=\"background-color:#f0f2f5;\">
            <h1>TROUVEZ VOTRE <br> PROCHAIN CANDIDAT</h1>
            <!--- card -->
            <div id=\"hideData\">
            {% for  data in repository  %}
            <div class=\"card_div\">
              <div class=\"card\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">
                   <span>
                    <img class=\"profil\"src=\"{{asset('img/cv.png')}}\">
                   </span>
                   <!-- <span class=\"font-weight-bold\">{#data.username#}
                   </span> -->
                 </h5>
                  <h6 class=\"card-subtitle mb-2 font-weight-bold\">
                    <span class=\"text-dark\">Je suis</span> :{{data.title|upper}}
                  </h6>
                
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
        </div>
          <div id=\"showData\">
          </div>
          <!-- second div -->        
      </div>
  \t</main>
    {% include 'App/component/footer.html.twig' %}
  </body>
  <script>
    /*ajax code */
    \$(\"#search_candidat\").click(function(){
      
      let url = \$(\"input[name='url_candidat']\").val(),
          search_candidat = \$(\"input[name='search_candidat']\").val(),
          city_candidat = \$(\"input[name='city_candidat']\").val(),
          codePostal_candidat = \$(\"input[name='codePostal_candidat']\").val(); 

      \$.post(url, {
        search_candidat:search_candidat,
        city_candidat:city_candidat,
        codePostal_candidat:codePostal_candidat
      },(data, status , states)=>{
        // set data here ...
         \$(\"#hideData\").hide(\"1000\", function(){
          \$(\"#showData\").html(data);
         });
      });
    })
    
  </script>
<html>", "App/page/video.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/page/video.html.twig");
    }
}
