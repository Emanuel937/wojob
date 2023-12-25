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

/* App/page/home.html.twig */
class __TwigTemplate_f0d55242e280f08205f5eee71d825f7f006d18ef1c5c82a164866a62b58f93f0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/home.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->loadTemplate("App/signInUp/links.html.twig", "App/page/home.html.twig", 4)->display($context);
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page/home.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/typed.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/d3j.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/topjson.js"), "html", null, true);
        echo "\"></script>
    <script type='text/javascript' src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/global.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
  \t<header>
       ";
        // line 13
        $this->loadTemplate("App/component/nav.html.twig", "App/page/home.html.twig", 13)->display($context);
        // line 14
        echo "  \t</header>
  \t<main>
      <div  class=\"typing-animation\" id=\"bar\">
       <h1 class=\"text-white text-center\" id=\"quote\"> </h1>
      </div>
      <div class=\"text-center\" id=\"seconddiv\">
        <h2 class=\"h2 \">C'EST QUOI WOJOB ?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fringilla dolor purus, sit amet eleifend enim venenatis vitae. Cras commodo vestibulum ante, sit amet tincidunt odio cursus quis.eleifend enim venenatis vitae. Cras commodo vestibulum ante, sit amet tincidunt odio cursus quis.
        </p>
      
        <p class=\"text-center m-5 text-white \" >
        <!-- this text-white is a reality a green color text -->
          <a  class=\"text-white\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video");
        echo "\" style=\"background-color:#007bff\">see all video </a>
          <a class=\"text-white\" style=\"cursor: pointer;\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("m_v_s");
        echo "\">  publier video cv</a> 
          <a  class=\"text-white \"id=\"studioAnnonceButton\" style=\"cursor: pointer;\"> je faire un annonce </a>
        </p>
       
      </div>
      <div id=\"slicedivf\"></div>
      <div id=\"slicedivr\"></div>      
      <div class=\"text-center\" id=\"tdiv\">
        <div>
           <h3 class=\"h5\">Le recrutement freelance enfin simple et rapide</h3>
          <ol>
            <li>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere cursus elementum. Vivamus lacinia eu lacus dictum porta. Etiam aliquam eros sed condimentum laoreet
            </li>
            <li>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere cursus elementum. Vivamus lacinia eu lacus dictum porta. Etiam aliquam eros sed condimentum laoreet.
            </li>
            <li>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere cursus elementum. Vivamus lacinia eu lacus dictum porta. Etiam aliquam eros sed condimentum laoreet.
            </li>
          </ol>
        </div>
      </div>
      <article class=\"row\">
       <div class=\"col-md-1\">
          <div class=\"Phone is-animating\"> </div>
       </div>
       <div class=\"col-md-11 text-white font-weigth-bold\">
        <h3 class=\"h5\"> Vous pouvez recuperez le numero de recruteur et lui appele chez wojob</h3>
       </div>
     </article>
      <div id=\"bar-video\">
        <h3 class=\"h5\">VOUS POUVEZ:</h3>
        <p class=\"first_line\"></p>
        <p class=\"first_line\"></p>
       <!--  type des contrat -->
     </div>
      <div id=\"b_slicedivf\"></div>
      <div id=\"b_slicedivr\"></div>
      <p id=\"square\"></p>
      <div class=\"row\" style=\"width: 80%;margin: auto;\"> 
      <div class=\"col-md-4\">
        <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/monde.png"), "html", null, true);
        echo "\" alt=\"wojob\" width=\"70%\">
      </div>
      <div class=\"col-md-4\">
       <h3 class=\"h2 text-center\">Pas de frontaire avec wojob</h3>
       <p> Sed at ullamcorper risus, ac gravida erat. Nullam non commodo sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras ac rhoncus velit. Vivamus eu venenatis elit. Pellentesque congue vitae neque sit amet viverra.</p>
        <p class=\"first_line\"></p>
        <p class=\"first_line\"></p>
      </div>
       <div class=\"col-md-4\">
         <canvas id='quakeCanvas'></canvas>
       </div>
      </div>
      <!-- comment ça marche -->
      <div id=\"tutorial\">
        <div>
           <h3 class=\"text-center h1\" style=\"color:#1c1b40; font-weight:800\">Comment ça marche ?</h3>
           <p class=\"text-center text-white\">Regarder ce video tutorial <p>
           <p class=\"text-center\" id=\"icon_video\"><i class=\"fas fa-play\"></i></p>
        </div>
      </div>
      <h3 class=\"text-center h2\">Les tarifs à 0 euro</h3>
      <div id=\"price\">
        <div>
          <div>
           
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"card text-center\">
                  <div class=\"title\">
                    <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
                    <h2>Basic</h2>
                  </div>
                  <div class=\"price\">
                    <h4><sup>\$</sup>25</h4>
                  </div>
                  <div class=\"option\">
                    <ul>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 10 GB Space </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 3 Domain Names </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 20 Email Address </li>
                    <li> <i class=\"fa fa-times\" aria-hidden=\"true\"></i> Live Support </li>
                    </ul>
                  </div>
                  <a href=\"#\">Order Now </a>
                </div>
              </div>
              <!-- END Col one -->
              <div class=\"col-md-4\">
                <div class=\"card text-center\">
                  <div class=\"title\">
                    <i class=\"fa fa-plane\" aria-hidden=\"true\"></i>
                    <h2>Standard</h2>
                  </div>
                  <div class=\"price\">
                    <h4><sup>\$</sup>50</h4>
                  </div>
                  <div class=\"option\">
                    <ul>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 50 GB Space </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 5 Domain Names </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Unlimited Email Address </li>
                    <li> <i class=\"fa fa-times\" aria-hidden=\"true\"></i> Live Support </li>
                    </ul>
                  </div>
                  <a href=\"#\">Order Now </a>
                </div>
              </div>
              <!-- END Col two -->
              <div class=\"col-md-4\">
                <div class=\"card text-center\">
                  <div class=\"title\">
                    <i class=\"fa fa-rocket\" aria-hidden=\"true\"></i>
                    <h2>Premium</h2>
                  </div>
                  <div class=\"price\">
                    <h4><sup>\$</sup>100</h4>
                  </div>
                  <div class=\"option\">
                    <ul>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Unlimited GB Space </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 30 Domain Names </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Unlimited Email Address </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Live Support </li>
                    </ul>
                  </div>
                  <a href=\"#\">Order Now </a>
                </div>
              </div>
              <!-- END Col three -->
            </div>
          </div>
        </div>
      </div>

  \t</main>  \t
   ";
        // line 164
        $this->loadTemplate("App/component/footer.html.twig", "App/page/home.html.twig", 164)->display($context);
        // line 165
        echo "   <input type=\"hidden\" id=\"global_json\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/global.json"), "html", null, true);
        echo "\">
  </body>
    <script   src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/RunGlobal.js"), "html", null, true);
        echo "\">
    </script>

<html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/page/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 167,  239 => 165,  237 => 164,  139 => 69,  94 => 27,  90 => 26,  76 => 14,  74 => 13,  67 => 9,  63 => 8,  59 => 7,  55 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% include 'App/signInUp/links.html.twig' %}
    <link href=\"{{ asset('css/page/home.css') }}\" rel=\"stylesheet\"/>
    <script src=\"{{asset('js/typed.js')}}\"></script>
    <script type='text/javascript' src=\"{{asset('js/d3j.js')}}\"></script>
    <script type='text/javascript' src=\"{{asset('js/topjson.js')}}\"></script>
    <script type='text/javascript' src=\"{{asset('js/global.js')}}\"></script>
  </head>
  <body>
  \t<header>
       {% include 'App/component/nav.html.twig'%}
  \t</header>
  \t<main>
      <div  class=\"typing-animation\" id=\"bar\">
       <h1 class=\"text-white text-center\" id=\"quote\"> </h1>
      </div>
      <div class=\"text-center\" id=\"seconddiv\">
        <h2 class=\"h2 \">C'EST QUOI WOJOB ?</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fringilla dolor purus, sit amet eleifend enim venenatis vitae. Cras commodo vestibulum ante, sit amet tincidunt odio cursus quis.eleifend enim venenatis vitae. Cras commodo vestibulum ante, sit amet tincidunt odio cursus quis.
        </p>
      
        <p class=\"text-center m-5 text-white \" >
        <!-- this text-white is a reality a green color text -->
          <a  class=\"text-white\" href=\"{{path('video')}}\" style=\"background-color:#007bff\">see all video </a>
          <a class=\"text-white\" style=\"cursor: pointer;\" href=\"{{path('m_v_s')}}\">  publier video cv</a> 
          <a  class=\"text-white \"id=\"studioAnnonceButton\" style=\"cursor: pointer;\"> je faire un annonce </a>
        </p>
       
      </div>
      <div id=\"slicedivf\"></div>
      <div id=\"slicedivr\"></div>      
      <div class=\"text-center\" id=\"tdiv\">
        <div>
           <h3 class=\"h5\">Le recrutement freelance enfin simple et rapide</h3>
          <ol>
            <li>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere cursus elementum. Vivamus lacinia eu lacus dictum porta. Etiam aliquam eros sed condimentum laoreet
            </li>
            <li>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere cursus elementum. Vivamus lacinia eu lacus dictum porta. Etiam aliquam eros sed condimentum laoreet.
            </li>
            <li>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere cursus elementum. Vivamus lacinia eu lacus dictum porta. Etiam aliquam eros sed condimentum laoreet.
            </li>
          </ol>
        </div>
      </div>
      <article class=\"row\">
       <div class=\"col-md-1\">
          <div class=\"Phone is-animating\"> </div>
       </div>
       <div class=\"col-md-11 text-white font-weigth-bold\">
        <h3 class=\"h5\"> Vous pouvez recuperez le numero de recruteur et lui appele chez wojob</h3>
       </div>
     </article>
      <div id=\"bar-video\">
        <h3 class=\"h5\">VOUS POUVEZ:</h3>
        <p class=\"first_line\"></p>
        <p class=\"first_line\"></p>
       <!--  type des contrat -->
     </div>
      <div id=\"b_slicedivf\"></div>
      <div id=\"b_slicedivr\"></div>
      <p id=\"square\"></p>
      <div class=\"row\" style=\"width: 80%;margin: auto;\"> 
      <div class=\"col-md-4\">
        <img src=\"{{asset('img/monde.png')}}\" alt=\"wojob\" width=\"70%\">
      </div>
      <div class=\"col-md-4\">
       <h3 class=\"h2 text-center\">Pas de frontaire avec wojob</h3>
       <p> Sed at ullamcorper risus, ac gravida erat. Nullam non commodo sem. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras ac rhoncus velit. Vivamus eu venenatis elit. Pellentesque congue vitae neque sit amet viverra.</p>
        <p class=\"first_line\"></p>
        <p class=\"first_line\"></p>
      </div>
       <div class=\"col-md-4\">
         <canvas id='quakeCanvas'></canvas>
       </div>
      </div>
      <!-- comment ça marche -->
      <div id=\"tutorial\">
        <div>
           <h3 class=\"text-center h1\" style=\"color:#1c1b40; font-weight:800\">Comment ça marche ?</h3>
           <p class=\"text-center text-white\">Regarder ce video tutorial <p>
           <p class=\"text-center\" id=\"icon_video\"><i class=\"fas fa-play\"></i></p>
        </div>
      </div>
      <h3 class=\"text-center h2\">Les tarifs à 0 euro</h3>
      <div id=\"price\">
        <div>
          <div>
           
            <div class=\"row\">
              <div class=\"col-md-4\">
                <div class=\"card text-center\">
                  <div class=\"title\">
                    <i class=\"fa fa-paper-plane\" aria-hidden=\"true\"></i>
                    <h2>Basic</h2>
                  </div>
                  <div class=\"price\">
                    <h4><sup>\$</sup>25</h4>
                  </div>
                  <div class=\"option\">
                    <ul>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 10 GB Space </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 3 Domain Names </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 20 Email Address </li>
                    <li> <i class=\"fa fa-times\" aria-hidden=\"true\"></i> Live Support </li>
                    </ul>
                  </div>
                  <a href=\"#\">Order Now </a>
                </div>
              </div>
              <!-- END Col one -->
              <div class=\"col-md-4\">
                <div class=\"card text-center\">
                  <div class=\"title\">
                    <i class=\"fa fa-plane\" aria-hidden=\"true\"></i>
                    <h2>Standard</h2>
                  </div>
                  <div class=\"price\">
                    <h4><sup>\$</sup>50</h4>
                  </div>
                  <div class=\"option\">
                    <ul>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 50 GB Space </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 5 Domain Names </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Unlimited Email Address </li>
                    <li> <i class=\"fa fa-times\" aria-hidden=\"true\"></i> Live Support </li>
                    </ul>
                  </div>
                  <a href=\"#\">Order Now </a>
                </div>
              </div>
              <!-- END Col two -->
              <div class=\"col-md-4\">
                <div class=\"card text-center\">
                  <div class=\"title\">
                    <i class=\"fa fa-rocket\" aria-hidden=\"true\"></i>
                    <h2>Premium</h2>
                  </div>
                  <div class=\"price\">
                    <h4><sup>\$</sup>100</h4>
                  </div>
                  <div class=\"option\">
                    <ul>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Unlimited GB Space </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> 30 Domain Names </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Unlimited Email Address </li>
                    <li> <i class=\"fa fa-check\" aria-hidden=\"true\"></i> Live Support </li>
                    </ul>
                  </div>
                  <a href=\"#\">Order Now </a>
                </div>
              </div>
              <!-- END Col three -->
            </div>
          </div>
        </div>
      </div>

  \t</main>  \t
   {% include 'App/component/footer.html.twig' %}
   <input type=\"hidden\" id=\"global_json\" value=\"{{asset('js/global.json')}}\">
  </body>
    <script   src=\"{{asset('js/RunGlobal.js')}}\">
    </script>

<html>", "App/page/home.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/page/home.html.twig");
    }
}
