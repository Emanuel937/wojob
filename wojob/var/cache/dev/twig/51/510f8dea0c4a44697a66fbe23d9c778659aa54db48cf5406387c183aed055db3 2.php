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

/* App/page/listjob.html.twig */
class __TwigTemplate_f421001cb3d09ebe5e1f9755994279399021bf6080c9bd09a61c72ef67c90327 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/listjob.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/listjob.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->loadTemplate("App/signInUp/links.html.twig", "App/page/listjob.html.twig", 4)->display($context);
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page/listjob.css"), "html", null, true);
        echo "\"rel=\"stylesheet\"/>
  </head>
  <body>
  \t<header>
      ";
        // line 9
        $this->loadTemplate("App/component/nav.html.twig", "App/page/listjob.html.twig", 9)->display($context);
        // line 10
        echo "  \t</header>
  \t<main>
      <div id=\"bg_bar\">
        <div>
          <h1 class=\"text-white text-center\"> 
            TROUVER VOTRE PROCHAIN JOB <br>AVEC WOJOB PAR TOUT <br>EN FRANCE
          </h1>
          <div  class= \"row\" id=\"span\">
            <div class=\"col-md-5\" >   
              <span class=\"text-white font-weight-bold\">
                Mot clé:
              </span>
              <input placeholder=\"informatique, developpeur web , php \" name=\"keys\"> 
            </div>
            <div class=\"col-md-5\">  
              <span class=\"text-white font-weight-bold\" id=\"span\">Ville:
              </span> 
              <input placeholder=\"paris, 7\" name=\"city\">
            </div>
          </div>
          <button id=\"search\" >
            Je trouve mon job
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
      <p class=\"text-center m-5 text-white \" >
        <a class=\"green\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video");
        echo "\">
          see all video 
        </a>
        <a class=\"green\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("m_v_s");
        echo "\">  publier video cv
        </a> 
        <a class = \"green\" id=\"studioAnnonceButton\"> je faire un annonce 
        </a>
      </p>
      <p class=\"text-center\" id=\"annonceLast\">
        <strong> Les denières offres d'emploi
        </strong>
      </p>
      <div id=\"hideData\">
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["annonceInfo"]) {
            // line 51
            echo "        <a  class=\"lastAnnonce\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("infojob");
            echo "?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">         
          <article>
            <h2 class=\"row\"> 
              <div class='col-md-3'>
                <img  class=\"recruter_logos\"src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bola.jpg"), "html", null, true);
            echo "\" alt=\"logos_entreprise\">
              </div>
              <div class='col-md-9'>
                <span style=\"color: #978c8c;font-weight: normal;font-size:10px\">";
            // line 58
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "identifient", [], "any", false, false, false, 58)), "html", null, true);
            echo "</span>
                <br><strong class=\"m-2\">
                  JE CHERCHE:
                </strong>
                ";
            // line 62
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "title", [], "any", false, false, false, 62)), "html", null, true);
            echo "
              </div>
            </h2>
            <p style=\"color:#6a6969\">
              <strong class=\"m-2 text-primary\">Mission: 
              </strong>
              ";
            // line 68
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "mission", [], "any", false, false, false, 68), 0, 150)), "html", null, true);
            echo " ...
              
            </p>
            <h3 class=\"h5\"> <hr>
            <i class=\"fas fa-map-marker-alt\">
              </i>
              <span style=\"font-size:14px\">";
            // line 74
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "city", [], "any", false, false, false, 74)), "html", null, true);
            echo "
              </span>
              <span class=\"contrat m-2 p-1\">";
            // line 76
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "contrat", [], "any", false, false, false, 76)), "html", null, true);
            echo "
              </span>
              <span class=\"money m-2 p-1\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonceInfo"], "salaire", [], "any", false, false, false, 78), "html", null, true);
            echo "\$
              </span> 
              <hr>
              <span  class=\"under_span\"><i class=\"fas fa-share\"></i> </span> <span class=\"under_span\"><i class=\"fas fa-heart text-danger\"></i></span> <span class=\"under_span\"><i class=\"fas fa-book-reader\"></i></span>
              <span class=\"under_span\"><i class=\"fas fa-paper-plane\"></i></span>
            </h3>
            </article>
         </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonceInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "      </div>
      <div id=\"showData\">
      </div>
      </div>
    </main>
    <input type=\"hidden\" name=\"url_annonce\" value=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchAnnonce");
        echo "\"/>
    <div id=\"voix\" title=\"cherger par la voix\">
     <p class=\"text-center mt-3\"> <i class=\"fas fa-microphone\"></i></p>
    </div>
      <div aria-label=\"Page navigation example\" style=\"width:20%;margin:auto; margin-top:70px\">
      <ul class=\"pagination\">
          <li class=\"page-item\">
          <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
              <span aria-hidden=\"true\">&laquo;</span>
          </a>
          </li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
          <li class=\"page-item\">
          <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
              <span aria-hidden=\"true\">&raquo;</span>
          </a>
          </li>
      </ul>
      </div>
  </body>
    ";
        // line 114
        $this->loadTemplate("App/component/footer.html.twig", "App/page/listjob.html.twig", 114)->display($context);
        // line 115
        echo "    <script>
      //ajax script 
      \$(\"#search\").click(()=>
      {
        let hide_value= \$(\"input[type='hidden']\").val();
        let city = \$(\"input[name='city']\").val();
        let key= \$(\"input[name='keys']\").val();
        let url_= \$(\"input[name='url_annonce'\").val();
        
        if(hide_value !=false)
        {
          if(key !=false)
          {
           \$.post(url_,
            {key:key,
             city:city
            },function(data)
            {
              \$(\"#hideData\").hide(\"1000\",()=>{
                \$(\"#showData\").html(data);
                
              })
            });     
          }
        }
      });
    </script>
  </body>
<html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/page/listjob.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 115,  210 => 114,  185 => 92,  178 => 87,  163 => 78,  158 => 76,  153 => 74,  144 => 68,  135 => 62,  128 => 58,  122 => 55,  112 => 51,  108 => 50,  95 => 40,  89 => 37,  60 => 10,  58 => 9,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% include 'App/signInUp/links.html.twig' %}
    <link href=\"{{ asset('css/page/listjob.css')}}\"rel=\"stylesheet\"/>
  </head>
  <body>
  \t<header>
      {% include 'App/component/nav.html.twig'%}
  \t</header>
  \t<main>
      <div id=\"bg_bar\">
        <div>
          <h1 class=\"text-white text-center\"> 
            TROUVER VOTRE PROCHAIN JOB <br>AVEC WOJOB PAR TOUT <br>EN FRANCE
          </h1>
          <div  class= \"row\" id=\"span\">
            <div class=\"col-md-5\" >   
              <span class=\"text-white font-weight-bold\">
                Mot clé:
              </span>
              <input placeholder=\"informatique, developpeur web , php \" name=\"keys\"> 
            </div>
            <div class=\"col-md-5\">  
              <span class=\"text-white font-weight-bold\" id=\"span\">Ville:
              </span> 
              <input placeholder=\"paris, 7\" name=\"city\">
            </div>
          </div>
          <button id=\"search\" >
            Je trouve mon job
            <i class=\"fas fa-search\"></i>
          </button>
        </div>
      </div>
      <p class=\"text-center m-5 text-white \" >
        <a class=\"green\" href=\"{{path('video')}}\">
          see all video 
        </a>
        <a class=\"green\" href=\"{{path('m_v_s')}}\">  publier video cv
        </a> 
        <a class = \"green\" id=\"studioAnnonceButton\"> je faire un annonce 
        </a>
      </p>
      <p class=\"text-center\" id=\"annonceLast\">
        <strong> Les denières offres d'emploi
        </strong>
      </p>
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
              <span class=\"contrat m-2 p-1\">{{annonceInfo.contrat|upper}}
              </span>
              <span class=\"money m-2 p-1\">{{annonceInfo.salaire}}\$
              </span> 
              <hr>
              <span  class=\"under_span\"><i class=\"fas fa-share\"></i> </span> <span class=\"under_span\"><i class=\"fas fa-heart text-danger\"></i></span> <span class=\"under_span\"><i class=\"fas fa-book-reader\"></i></span>
              <span class=\"under_span\"><i class=\"fas fa-paper-plane\"></i></span>
            </h3>
            </article>
         </a>
        {% endfor %}
      </div>
      <div id=\"showData\">
      </div>
      </div>
    </main>
    <input type=\"hidden\" name=\"url_annonce\" value=\"{{path('searchAnnonce')}}\"/>
    <div id=\"voix\" title=\"cherger par la voix\">
     <p class=\"text-center mt-3\"> <i class=\"fas fa-microphone\"></i></p>
    </div>
      <div aria-label=\"Page navigation example\" style=\"width:20%;margin:auto; margin-top:70px\">
      <ul class=\"pagination\">
          <li class=\"page-item\">
          <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
              <span aria-hidden=\"true\">&laquo;</span>
          </a>
          </li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
          <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
          <li class=\"page-item\">
          <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
              <span aria-hidden=\"true\">&raquo;</span>
          </a>
          </li>
      </ul>
      </div>
  </body>
    {% include 'App/component/footer.html.twig'%}
    <script>
      //ajax script 
      \$(\"#search\").click(()=>
      {
        let hide_value= \$(\"input[type='hidden']\").val();
        let city = \$(\"input[name='city']\").val();
        let key= \$(\"input[name='keys']\").val();
        let url_= \$(\"input[name='url_annonce'\").val();
        
        if(hide_value !=false)
        {
          if(key !=false)
          {
           \$.post(url_,
            {key:key,
             city:city
            },function(data)
            {
              \$(\"#hideData\").hide(\"1000\",()=>{
                \$(\"#showData\").html(data);
                
              })
            });     
          }
        }
      });
    </script>
  </body>
<html>", "App/page/listjob.html.twig", "/Users/emanuelabizimi/Documents/dev/web/php/symfony/wojob/wojob/templates/App/page/listjob.html.twig");
    }
}
