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

/* App/page/user.html.twig */
class __TwigTemplate_cb2b281f00e756a239a34d3e6890ae0287ceb56b36de3b0ff9a5ad8775595d50 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/user.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->loadTemplate("App/signInUp/links.html.twig", "App/page/user.html.twig", 4)->display($context);
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page/user.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <style>
      main{
        background:#eef3f8;
        
        padding-top:10px
      }
      .main{
        width:90%;
        margin:auto;
        padding:10px;
        margin-top:30px
      }
      #photo{
        height: 60px;
        width: 60px;
        border-radius: 100%;
        border: 2px solid #6633d5;
      }
      .row{
        margin:0
      }
      .gray{
        color:#aeadad
      }
      .violet{
        color:#a855ec
      }
      article:first-child .input input{
          border: none;
  
          padding: 7px;
          background-color: #f3f3f342;
          color:#6d58fb;
          margin-top:10px
      }
      #aArticle::after{
        position: absolute;
        top: 13%;
        left: 92%;
        background-color: #eef3f8;
        padding: 44px;
        content: \" \";
        border-radius: 100%;
      }
      #location:after{
        content:\" \";
        border-width:3px;
        border-style:solid;
        border-color:red;
        border-width: 18px;
        border-style: solid;
        border-color: transparent #eef3f8 transparent transparent;
        position: absolute;
        left: 96%;
        top: 70%;
      }
      #dash:after{
        content: \" \";
        padding: 48px;
        background-color: #eef3f8;
        position: absolute;
        left: 97%;
        border-radius: 22%;
        top: 43%;
      }
    </style>
  </head>
  <body>
  \t<header>
        ";
        // line 75
        $this->loadTemplate("App/component/nav.html.twig", "App/page/user.html.twig", 75)->display($context);
        // line 76
        echo "  \t</header>
    <main>
     <div class=\"main\">
     <!--
     <article class=\"article\">
       <h1 class=\"h5\"> <i class=\"far fa-list-alt\" style=\"color:blue\"></i> MODO THAT I CAN USE</h1>
       <p>Vous pouvez changer le monde si vous êtes un recruteur. 
      </p>
      <p><input type=\"radio\" name=\"isDis\"> Je suis un recruter <input type=\"radio\" name=\"isDis\"> Je suis un candidat  </p>  
     </article>-->
        <section class=\"row\">
            <article class=\"col-md-3\" >
              <div class=\"card p-4 text-center\" id=\"aArticle\">
                <div>
                  <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/bola.jpg"), "html", null, true);
        echo "\" alt=\"User image\" id=\"photo\">
                <h2 class=\"h4\">Emanuel ABIZIMI</h2>
                <h3 class=\"h6\">Developpeur mobile et web full stack </h3>
                <p>
                  <i class=\"fas fa-circle text-success\"></i> Je suis disponible
                </p>
                <input type=\"radio\" name=\"isDis\"> disponible  <input type=\"radio\" name=\"isDis\"> No disponible
                </div>
              </div>
              <div class=\"card text-center\" style=\"margin-top:10px\">
                 <h4 class=\"h6 p-3\">change the photo</h4>
                 <input type=\"file\">
              </div>
              <div class=\"card p-4 input\" style=\"margin-top:10px\">
                <input type=\"text\" placeholder=\"type your first name and last name\" value =\"Emanuel\"> 
                <input type=\"text\" placeholder=\"Job cherché: Développeur web\" value =\"Emanuel\">    
                <input type=\"text\" name=\"contrat\" list=\"contrat\" placeholder=\"type de contrat\">
              <datalist id=\"contrat\">
                <option value=\"CDD\">
                <option value=\"CDI\">
                <option value=\"FREELANCER\">
              </datalist> 
                <p class=\"m-3\">
                   Salaire souhaité par Mois(euro):<br>
                 <span>0</span> 
                 <input type=\"range\" max=\"\" value =\"Emanuel\">
                 <span>100</span>   
                </p> 
                <input type=\"text\" placeholder=\"type phone number\" value=\"+33753346284\">
                 <button style=\"background-color: #6d58fb;color: white;padding: 7px;border-radius: 10px;\">Save</button>
              </div>
            </article>
            <article class=\"col-md-9\">
            <div class=\"card\" id=\"dash\">
                <h3 class=\"p-3\" style=\"color:#aeadad;\"> <i class=\"fas fa-tachometer-alt\"></i> Dashboard:</h3>
                <div class=\"row p-4 text-center\">
                  <div class=\"col-md-3 text-center m-2\" style=\"background-color: #6d58fb;border-radius: 10px;color: white;\">
                    <h3><i class=\"fas fa-video\"></i></h3>
                    <h4>Video views</h4>
                    <p>2000 k</p>
                  </div>
                  <div class=\"col-md-3 m-2 text-center\" style=\"background-color: #de48fc;border-radius: 10px;color: white;\">
                    <h3><i class=\"fas fa-euro-sign\"></i></h3>
                    <h4>Salaire souhaité</h4>
                    <p>2000 \$</p>
                  </div>
                  <div class=\"col-md-3 m-2 text-center\" style=\"background-color:#a855ec;;border-radius: 10px;color: white;\">
                    <h3><i class=\"fas fa-chalkboard-teacher\"></i></h3>
                    <h4>Tipe de contrat</h4>
                    <p>cdd</p>
                  </div>
                </div>
                <hr>
                <div class=\"row m-5 gray\">
                  <div class=\"col-md-4\">
                    <p class=\"violet\" > Mom numero:</p>
                    <h2 class=\"m-x-5 violet\"> <i class=\"fas fa-mobile-alt\"></i>
                      0753346284
                    </h2>
                  </div>
                <div class=\" card col-md-8\" style=\"background-color:#d0cece30\">
                  <h4> Modo </h4>
                </div>
            </div>
             </div>
            <!-- -->
            <div class=\" row\" style=\"margin-top:10px\" id=\"location\">
              <div class=\" card col-md-4\" style=\"background-color:#d0cece30\">
                <h4 class=\"text-primary\">Location:</h4>
                <h5>
                <span><i class=\"fas fa-city m-3\"></i> : Paris</span>
                <span><i class=\"fas fa-map-marker m-3\"></i> :75001</span>
                </h5>
              </div>
              <div class=\"card col-md-8\">
                <h4 class=\"text-primary\" style=\"margin-top:2px; margin-bottom:19px\">Navigate:</h4>
                <h5>
                <a href=\"#\" style=\"background-color: #a7d2e3;color: white;padding: 7px;border-radius: 10px;\">Publier mon cv</a>
                <a style=\"background-color:#8996df;color: white;padding: 7px;border-radius: 10px;\">voir les annonce</span>
                <a  style=\"background-color:#769cf28c;color: white;padding: 7px;border-radius: 10px; margin-left: 23px;\">Passer au mode recruteur</a>
                </h5>
              </div>
            </div>
          </div>
      </article>
    </section>
   </div>
  </main>
</body>
<html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/page/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 90,  126 => 76,  124 => 75,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% include 'App/signInUp/links.html.twig' %}
    <link href=\"{{ asset('css/page/user.css') }}\" rel=\"stylesheet\"/>
    <style>
      main{
        background:#eef3f8;
        
        padding-top:10px
      }
      .main{
        width:90%;
        margin:auto;
        padding:10px;
        margin-top:30px
      }
      #photo{
        height: 60px;
        width: 60px;
        border-radius: 100%;
        border: 2px solid #6633d5;
      }
      .row{
        margin:0
      }
      .gray{
        color:#aeadad
      }
      .violet{
        color:#a855ec
      }
      article:first-child .input input{
          border: none;
  
          padding: 7px;
          background-color: #f3f3f342;
          color:#6d58fb;
          margin-top:10px
      }
      #aArticle::after{
        position: absolute;
        top: 13%;
        left: 92%;
        background-color: #eef3f8;
        padding: 44px;
        content: \" \";
        border-radius: 100%;
      }
      #location:after{
        content:\" \";
        border-width:3px;
        border-style:solid;
        border-color:red;
        border-width: 18px;
        border-style: solid;
        border-color: transparent #eef3f8 transparent transparent;
        position: absolute;
        left: 96%;
        top: 70%;
      }
      #dash:after{
        content: \" \";
        padding: 48px;
        background-color: #eef3f8;
        position: absolute;
        left: 97%;
        border-radius: 22%;
        top: 43%;
      }
    </style>
  </head>
  <body>
  \t<header>
        {% include 'App/component/nav.html.twig'%}
  \t</header>
    <main>
     <div class=\"main\">
     <!--
     <article class=\"article\">
       <h1 class=\"h5\"> <i class=\"far fa-list-alt\" style=\"color:blue\"></i> MODO THAT I CAN USE</h1>
       <p>Vous pouvez changer le monde si vous êtes un recruteur. 
      </p>
      <p><input type=\"radio\" name=\"isDis\"> Je suis un recruter <input type=\"radio\" name=\"isDis\"> Je suis un candidat  </p>  
     </article>-->
        <section class=\"row\">
            <article class=\"col-md-3\" >
              <div class=\"card p-4 text-center\" id=\"aArticle\">
                <div>
                  <img src=\"{{asset('img/bola.jpg')}}\" alt=\"User image\" id=\"photo\">
                <h2 class=\"h4\">Emanuel ABIZIMI</h2>
                <h3 class=\"h6\">Developpeur mobile et web full stack </h3>
                <p>
                  <i class=\"fas fa-circle text-success\"></i> Je suis disponible
                </p>
                <input type=\"radio\" name=\"isDis\"> disponible  <input type=\"radio\" name=\"isDis\"> No disponible
                </div>
              </div>
              <div class=\"card text-center\" style=\"margin-top:10px\">
                 <h4 class=\"h6 p-3\">change the photo</h4>
                 <input type=\"file\">
              </div>
              <div class=\"card p-4 input\" style=\"margin-top:10px\">
                <input type=\"text\" placeholder=\"type your first name and last name\" value =\"Emanuel\"> 
                <input type=\"text\" placeholder=\"Job cherché: Développeur web\" value =\"Emanuel\">    
                <input type=\"text\" name=\"contrat\" list=\"contrat\" placeholder=\"type de contrat\">
              <datalist id=\"contrat\">
                <option value=\"CDD\">
                <option value=\"CDI\">
                <option value=\"FREELANCER\">
              </datalist> 
                <p class=\"m-3\">
                   Salaire souhaité par Mois(euro):<br>
                 <span>0</span> 
                 <input type=\"range\" max=\"\" value =\"Emanuel\">
                 <span>100</span>   
                </p> 
                <input type=\"text\" placeholder=\"type phone number\" value=\"+33753346284\">
                 <button style=\"background-color: #6d58fb;color: white;padding: 7px;border-radius: 10px;\">Save</button>
              </div>
            </article>
            <article class=\"col-md-9\">
            <div class=\"card\" id=\"dash\">
                <h3 class=\"p-3\" style=\"color:#aeadad;\"> <i class=\"fas fa-tachometer-alt\"></i> Dashboard:</h3>
                <div class=\"row p-4 text-center\">
                  <div class=\"col-md-3 text-center m-2\" style=\"background-color: #6d58fb;border-radius: 10px;color: white;\">
                    <h3><i class=\"fas fa-video\"></i></h3>
                    <h4>Video views</h4>
                    <p>2000 k</p>
                  </div>
                  <div class=\"col-md-3 m-2 text-center\" style=\"background-color: #de48fc;border-radius: 10px;color: white;\">
                    <h3><i class=\"fas fa-euro-sign\"></i></h3>
                    <h4>Salaire souhaité</h4>
                    <p>2000 \$</p>
                  </div>
                  <div class=\"col-md-3 m-2 text-center\" style=\"background-color:#a855ec;;border-radius: 10px;color: white;\">
                    <h3><i class=\"fas fa-chalkboard-teacher\"></i></h3>
                    <h4>Tipe de contrat</h4>
                    <p>cdd</p>
                  </div>
                </div>
                <hr>
                <div class=\"row m-5 gray\">
                  <div class=\"col-md-4\">
                    <p class=\"violet\" > Mom numero:</p>
                    <h2 class=\"m-x-5 violet\"> <i class=\"fas fa-mobile-alt\"></i>
                      0753346284
                    </h2>
                  </div>
                <div class=\" card col-md-8\" style=\"background-color:#d0cece30\">
                  <h4> Modo </h4>
                </div>
            </div>
             </div>
            <!-- -->
            <div class=\" row\" style=\"margin-top:10px\" id=\"location\">
              <div class=\" card col-md-4\" style=\"background-color:#d0cece30\">
                <h4 class=\"text-primary\">Location:</h4>
                <h5>
                <span><i class=\"fas fa-city m-3\"></i> : Paris</span>
                <span><i class=\"fas fa-map-marker m-3\"></i> :75001</span>
                </h5>
              </div>
              <div class=\"card col-md-8\">
                <h4 class=\"text-primary\" style=\"margin-top:2px; margin-bottom:19px\">Navigate:</h4>
                <h5>
                <a href=\"#\" style=\"background-color: #a7d2e3;color: white;padding: 7px;border-radius: 10px;\">Publier mon cv</a>
                <a style=\"background-color:#8996df;color: white;padding: 7px;border-radius: 10px;\">voir les annonce</span>
                <a  style=\"background-color:#769cf28c;color: white;padding: 7px;border-radius: 10px; margin-left: 23px;\">Passer au mode recruteur</a>
                </h5>
              </div>
            </div>
          </div>
      </article>
    </section>
   </div>
  </main>
</body>
<html>", "App/page/user.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/page/user.html.twig");
    }
}
