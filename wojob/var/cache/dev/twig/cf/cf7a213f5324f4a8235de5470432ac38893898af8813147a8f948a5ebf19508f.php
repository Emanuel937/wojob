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

/* App/component/footer.html.twig */
class __TwigTemplate_3521c2861f9a7116b3ebd23bf2aaddf59864067db8f78e7fcaeb66083caf1e32 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/footer.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
     <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/> 
     <style>
      .form_pos{
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        overflow-x: hidden;
        transition: 0.5s;
        background-color:rgba(0, 0, 0, 0.2);
        overflow-x: hidden;
      } 
     #formVideo::placeholder{
       color: #faf7f7;
     }

     #formVideo  .form-control::placeholder {
        color: #ffffffd9;
      }

    .wojob-alert{
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
      width:450px;
      background-color: #fff;
      margin: auto;
      position: relative;
     transition: top 0.5s;
     position: fixed;
     top: 100%;
     left: 121px;
     z-index:1
   }
      .wojob-alert-body{
        padding:10px
      }
      #footer-fisrt{
        border-top:1px solid #ccc;
        margin-top:30px;
        padding-top:30px;
        color:#827a7acf;
      }
      #footer-fisrt h4 a {
        font-size:15px;
        color:#827a7acf;
      }
       #footer-fisrt h4 a img{
         width:15px
       }
       #footer-first ul a li{
         color:black
       }
     </style>
  </head>
   <body>
    
  \t<footer>
      <div id=\"footer-fisrt\">
      <div class=\"row\">
        <div class=\"col-md-3\">
          <h4 clas=\"text-center\">Links:</h4>
          <ul>
            <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signin");
        echo "\">
              <li> Sign in</li>
            </a>
            <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("signup");
        echo "\">
              <li>Sign up </li>
            </a>
            <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><li>Home </li></a>
            <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("video");
        echo "\">
              <li> Video</li>
            </a>
            <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruter");
        echo "\">
              <li>Annonce </li>
            </a>
            <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user");
        echo "\">
              <li>Profil </li>
            </a>
          </ul>
        </div>
        <div class=\"col-md-6\">
          <h4 class=\" text-center\">Follow us:
          </h4>
          <h4 class=\"text-center linksa\">
            <a>
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/facebook.png"), "html", null, true);
        echo "\"> Facebook
            </a>
            <a>
              <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/youtube.png"), "html", null, true);
        echo "\"> Youtube
            </a>
            <a>
              <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/twitter.png"), "html", null, true);
        echo "\"> Twitter
            </a>
          </h4>
          <p class=\"text-center\">
            Suivez nous sur les reseaux sociaux </br>enfim que vous pouvez être informé de votre aventuelle activité .
          </p>
        </div>
        <div class=\"col-md-3\">
          <h4 class=\"text-center\">Newsletter</h4>
          <p class=\"text-center \">En vous encrivant vous nous sinalé aussi que vous voulez 
            <i class=\"text-primary\">
               travailler chez Wojob
            </i>
          </p>
          <div>
            <div class=\"login_bar\">
              <input class=\"login text-dark\" placeholder=\"Email\">
              <span class=\"subscribe_button\" onclick=\"subscribeOnClick()\">subscribe
              </span>
              <span class=\"subscribing\"></span>
              <span class=\"thanks\">
               Thank you. You have been subscribed
              </span>
            </div>
          </div>
        </div>
        <hr>
        <p class=\"text-center\">&copy; WOJOB ALL RIGHT RESERVED 2021 
          <a class=\"text-center\">    -Conditions générales</a> 
          <a class=\"text-center\">-Politique de confidentialité</a>
        </p>
        <hr>
      </div>
      </div>
      
      <!-- 
       ========= the beginnner of  studio annonce ================
       =================== ***********************================
       ***********************************************************
      -->
      <form  id=\"studioAnnonceForm\" class=\"form_pos\">
      <!-- the end of alert info -->
         <!--
      ************
      *********** alert info
      ********** 
      -->
      <div class=\"wojob-alert bg-white text-dark\">
        <div class=\"alert alert-info\">
         <h5> <i class=\"fas fa-info-circle\"></i> Info:</h5>
        </div>
        <div class=\"wojob-alert-body\">
          <p> Cher utiliser , Vous devez vous connecter avant de faire un annonce, sinon ne vas pas être publier</p>
          <p>
            <a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("signin"), "html", null, true);
        echo "\">cliquer ici pour se connecter</a>
          </p>
          <hr>
          <button type=\"button\" onclick=\"closeAlert()\" class=\"btn \" style=\"background:radial-gradient(circle, rgb(63, 94, 251) 0%, rgb(70, 235, 252) 100%\">Ok</button>
        </div>
      </div>
      <div id=\"studioAnnonce\">
        <div id=\"stutioAnnonceA\">
          <p>
            <span class=\"text-danger-close\"  id=\"closeButtonAnnonce\">x</span>
          </p>
          <p class='text-white'>
          Je suis un recruteur je vais:
          </p>
          <h1 class=\"h3 text-white text-center  font-weight-bold\">
            <i class=\"fas fa-bullhorn\">
            </i>
          Faire un annonce
          </h1>
          <h2 class=\"h4 text-white\">
           Nom de l'entreprise:
          </h2>
          <input class=\"form-control not\" type=\"text\" placeholder=\"Ex.:Wojob\" name=\"entreprise\"  />
          <h2 class=\"h4 text-white\">Numero de l'entreprise:
          </h2>
          <input class=\"form-control\" type=\"text\" placeholder=\"Ex.:07xxxxx \" name=\"tel\"/>
        
          <h2 class=\"h4 text-white\">
            <i class=\"fas fa-file-signature\">
            </i> Contrat :
            <select name=\"contrat\" required>
              <option value=\"cdd\">
                CDD
              </option>
              <option value=\"cdi\">
                CDI
              </option>
              <option value=\"freelance\">
                Freelance
              </option>
              <option value=\"autre\">
               Autre
              </option>
            </select> 
          </h2>
          <h2 class=\"h4 text-white\">Je cherche:</h2>
          <input class=\"form-control\" type=\"text\" name=\"title\" placeholder=\"ex.:un informatique dans le web\" id=\"entreprise\" >
          <hr>
          <h2 class=\"h4 text-white\">
            <i class=\"fas fa-map-marker-alt\"></i>Adress de l'entreprise:
          </h2>
          <p class=\"text-white\">
            <strong>Ville:
              <input type=\"text\" placeholder=\"Ex:Paris\" name=\"city\" >
            </strong>
            <strong>Code Postal:
              <input type=\"number\" placeholder=\"Ex:75001\" name=\"codePostal\" pattern=\"[0-9]*\" >
            </strong>
          </p>
          <p class=\"text-white\">
            <strong> Adress:
              <input name=\"adress\" placeholder=\"35 rue du rhone\"   >
            </strong>
          </p>
          <h2 class=\"h4 text-white\">Salaire:
          
          ";
        // line 217
        echo "
           <span class=\"text-white\" id=\"money\">100\$/</span>
          ";
        echo "
           <select name=\"mois\">
             <option >heure</option>
             <option>Mois</option>
             <option>Année</option>
           </select>
          </h2>
          <input min =\"0\" type=\"range\"  value= \"100\" max=\"100000\"name=\"salaire\"   onchange=\"money(event)\">
          <hr>
          <div id=\"description\">
            <h2 class=\"h4 text-white\">LA MISSION:</h2>
            <textarea placeholder=\" Descrivez en quelques mots la mission que vouz proposez:\" name=\"mission\" >
            </textarea>
            <h2 class=\"h4 text-white\">
             Profil recherché
            </h2>
            <textarea placeholder=\" Descrivez en quelques mots la mission que vouz proposez:\" name=\"profil\" required>
            </textarea>
          </div>
          <button id=\"publier\">
           Ajouter un job(annonce)
          </button>
          <button id=\"preview\" style=\"background-color:#663399\">
            preview mon annonce
          </button>
        </div>
        </form>
        <!-- 
        *****************************************************************************
        ===================== the end of make annonce studio ========================
        *****************************************************************************
        -->
        <div id=\"studioAnnonceB\">
        </div>
        <div id=\"done\">
           <img src='/img/done.jpg' class='imgAjax'>
           <p class='text-center text-white h4'>Votre annonce fut publié</p>
           <p id=\"back\">
            <i class='fas fa-long-arrow-alt-left' >
            </i>
             GO back 
           </p>
           <p class=\"text-center\" id=\"seeAnnonce\">
            <a href=\"#\" class=\"text-white h6\" id=\"annonceLink\">Voir mon annonce</a>
           </p>
        </div>
      </div>
    <!--- studio cv -->
     <form  id=\"formVideo\">
      <div id=\"studioVideoCv\">
        <p>
          <span class=\"text-danger-close\" id=\"closeVideoCv\">x</span>
        </p>
        <p  classs=\"font-weight-bold\">
         Je suis un candidat je vais:
        </p>
        <h1 class=\"h3 text-white text-center font-weight-bold \">
          <i class=\"fas fa-video\"></i>
          Publier ma video cv
        </h1>
        <h2 class=\"h4 text-white\">
          <i class=\"fas fa-user-md\"></i>
          Moi je suis:
        </h2>
        <input class=\"form-control\" type=\"text\" placeholder=\"Ex.:traducteur en anglais\" id=\"title_v\" >
        <h2 class=\"h4 text-white\">
          <i class=\"fas fa-phone-volume\"></i> Appelez-moi aux:
        </h2>
        <input class=\"form-control\" type=\"number\" placeholder=\"Ex.:07xxxxxxx\" id=\"tel_v\">
        <p class=\"text-white\">
          <strong>
            <i class=\"fas fa-map-marker-alt\"></i>Ville:
            <input class=\"form-control\"type=\"text\" placeholder=\"Ex:Paris\" id=\"city_v\" >
          </strong>
          <strong>
            <i class=\"fas fa-mail-bulk\"></i>Code Postal:
            <input class=\"form-control\" type=\"number\" placeholder=\"Ex:75001\" id=\"codePostal_v\" pattern=\"[0-9]*\" >
          </strong>
        </p>
        <!-- upload cv-->
        <div class=\"dropzone text-center\">
            <img src=\"http://100dayscss.com/codepen/upload.svg\" class=\"upload-icon\" />
           <!-- <input type=\"file\" class=\"upload-input notRequired\"  />-->
          </div>
          <p class=\"text-white text-center\">Upload ma video 
            <strong class=\"text-dark\">cv(*obrigatoire)</strong>
          </p>
          <p id=\"cvideo\">
            <input id=\"sortpicture\" type=\"file\" name=\"sortpic\"  />
          </p>
          <p class=\"text-white text-center\">Upload cv en pdf 
            <strong class=\"text-success\">cv(*optionnelle)
            </strong>
          </p>
        <button type=\"submit\" id=\"preview\" style=\"background-color:#663399\" onclick=\"uploadVideo(event)\">publier</button>
      </div>
       <input type=\"hidden\" name=\"annonceUrl\" value=\"";
        // line 313
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("makeannone");
        echo "\" >
     </form>
     <!-- end of studio -->
       <input type=\"hidden\" id=\"seeAnnonce\" value=\"";
        // line 316
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("infojob");
        echo "\">
       <input type=\"hidden\" id=\"uploadUrl\" value=\"";
        // line 317
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("upload");
        echo "\">
  \t</footer>
<!-- modal -->
</body>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/emascript.js"), "html", null, true);
        echo "\"> 
</script>
<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/uploadAjax.js"), "html", null, true);
        echo "\"> 
</script>
<html>





";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/component/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 323,  410 => 321,  403 => 317,  399 => 316,  393 => 313,  292 => 217,  223 => 149,  166 => 95,  160 => 92,  154 => 89,  141 => 79,  135 => 76,  129 => 73,  125 => 72,  119 => 69,  113 => 66,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
     <link href=\"{{ asset('css/page/footer.css') }}\" rel=\"stylesheet\"/> 
     <style>
      .form_pos{
        position: fixed;
        left: 0;
        right: 0;
        top: 0;
        overflow-x: hidden;
        transition: 0.5s;
        background-color:rgba(0, 0, 0, 0.2);
        overflow-x: hidden;
      } 
     #formVideo::placeholder{
       color: #faf7f7;
     }

     #formVideo  .form-control::placeholder {
        color: #ffffffd9;
      }

    .wojob-alert{
      border: 1px solid rgba(0, 0, 0, 0.125);
      border-radius: 0.25rem;
      width:450px;
      background-color: #fff;
      margin: auto;
      position: relative;
     transition: top 0.5s;
     position: fixed;
     top: 100%;
     left: 121px;
     z-index:1
   }
      .wojob-alert-body{
        padding:10px
      }
      #footer-fisrt{
        border-top:1px solid #ccc;
        margin-top:30px;
        padding-top:30px;
        color:#827a7acf;
      }
      #footer-fisrt h4 a {
        font-size:15px;
        color:#827a7acf;
      }
       #footer-fisrt h4 a img{
         width:15px
       }
       #footer-first ul a li{
         color:black
       }
     </style>
  </head>
   <body>
    
  \t<footer>
      <div id=\"footer-fisrt\">
      <div class=\"row\">
        <div class=\"col-md-3\">
          <h4 clas=\"text-center\">Links:</h4>
          <ul>
            <a href=\"{{path('signin')}}\">
              <li> Sign in</li>
            </a>
            <a href=\"{{path('signup')}}\">
              <li>Sign up </li>
            </a>
            <a href=\"{{path('home')}}\"><li>Home </li></a>
            <a href=\"{{path('video')}}\">
              <li> Video</li>
            </a>
            <a href=\"{{path('recruter')}}\">
              <li>Annonce </li>
            </a>
            <a href=\"{{path('user')}}\">
              <li>Profil </li>
            </a>
          </ul>
        </div>
        <div class=\"col-md-6\">
          <h4 class=\" text-center\">Follow us:
          </h4>
          <h4 class=\"text-center linksa\">
            <a>
              <img src=\"{{asset('img/facebook.png')}}\"> Facebook
            </a>
            <a>
              <img src=\"{{asset('img/youtube.png')}}\"> Youtube
            </a>
            <a>
              <img src=\"{{asset('img/twitter.png')}}\"> Twitter
            </a>
          </h4>
          <p class=\"text-center\">
            Suivez nous sur les reseaux sociaux </br>enfim que vous pouvez être informé de votre aventuelle activité .
          </p>
        </div>
        <div class=\"col-md-3\">
          <h4 class=\"text-center\">Newsletter</h4>
          <p class=\"text-center \">En vous encrivant vous nous sinalé aussi que vous voulez 
            <i class=\"text-primary\">
               travailler chez Wojob
            </i>
          </p>
          <div>
            <div class=\"login_bar\">
              <input class=\"login text-dark\" placeholder=\"Email\">
              <span class=\"subscribe_button\" onclick=\"subscribeOnClick()\">subscribe
              </span>
              <span class=\"subscribing\"></span>
              <span class=\"thanks\">
               Thank you. You have been subscribed
              </span>
            </div>
          </div>
        </div>
        <hr>
        <p class=\"text-center\">&copy; WOJOB ALL RIGHT RESERVED 2021 
          <a class=\"text-center\">    -Conditions générales</a> 
          <a class=\"text-center\">-Politique de confidentialité</a>
        </p>
        <hr>
      </div>
      </div>
      
      <!-- 
       ========= the beginnner of  studio annonce ================
       =================== ***********************================
       ***********************************************************
      -->
      <form  id=\"studioAnnonceForm\" class=\"form_pos\">
      <!-- the end of alert info -->
         <!--
      ************
      *********** alert info
      ********** 
      -->
      <div class=\"wojob-alert bg-white text-dark\">
        <div class=\"alert alert-info\">
         <h5> <i class=\"fas fa-info-circle\"></i> Info:</h5>
        </div>
        <div class=\"wojob-alert-body\">
          <p> Cher utiliser , Vous devez vous connecter avant de faire un annonce, sinon ne vas pas être publier</p>
          <p>
            <a href=\"{{asset('signin')}}\">cliquer ici pour se connecter</a>
          </p>
          <hr>
          <button type=\"button\" onclick=\"closeAlert()\" class=\"btn \" style=\"background:radial-gradient(circle, rgb(63, 94, 251) 0%, rgb(70, 235, 252) 100%\">Ok</button>
        </div>
      </div>
      <div id=\"studioAnnonce\">
        <div id=\"stutioAnnonceA\">
          <p>
            <span class=\"text-danger-close\"  id=\"closeButtonAnnonce\">x</span>
          </p>
          <p class='text-white'>
          Je suis un recruteur je vais:
          </p>
          <h1 class=\"h3 text-white text-center  font-weight-bold\">
            <i class=\"fas fa-bullhorn\">
            </i>
          Faire un annonce
          </h1>
          <h2 class=\"h4 text-white\">
           Nom de l'entreprise:
          </h2>
          <input class=\"form-control not\" type=\"text\" placeholder=\"Ex.:Wojob\" name=\"entreprise\"  />
          <h2 class=\"h4 text-white\">Numero de l'entreprise:
          </h2>
          <input class=\"form-control\" type=\"text\" placeholder=\"Ex.:07xxxxx \" name=\"tel\"/>
        
          <h2 class=\"h4 text-white\">
            <i class=\"fas fa-file-signature\">
            </i> Contrat :
            <select name=\"contrat\" required>
              <option value=\"cdd\">
                CDD
              </option>
              <option value=\"cdi\">
                CDI
              </option>
              <option value=\"freelance\">
                Freelance
              </option>
              <option value=\"autre\">
               Autre
              </option>
            </select> 
          </h2>
          <h2 class=\"h4 text-white\">Je cherche:</h2>
          <input class=\"form-control\" type=\"text\" name=\"title\" placeholder=\"ex.:un informatique dans le web\" id=\"entreprise\" >
          <hr>
          <h2 class=\"h4 text-white\">
            <i class=\"fas fa-map-marker-alt\"></i>Adress de l'entreprise:
          </h2>
          <p class=\"text-white\">
            <strong>Ville:
              <input type=\"text\" placeholder=\"Ex:Paris\" name=\"city\" >
            </strong>
            <strong>Code Postal:
              <input type=\"number\" placeholder=\"Ex:75001\" name=\"codePostal\" pattern=\"[0-9]*\" >
            </strong>
          </p>
          <p class=\"text-white\">
            <strong> Adress:
              <input name=\"adress\" placeholder=\"35 rue du rhone\"   >
            </strong>
          </p>
          <h2 class=\"h4 text-white\">Salaire:
          
          {% verbatim %}
           <span class=\"text-white\" id=\"money\">100\$/</span>
          {% endverbatim %}
           <select name=\"mois\">
             <option >heure</option>
             <option>Mois</option>
             <option>Année</option>
           </select>
          </h2>
          <input min =\"0\" type=\"range\"  value= \"100\" max=\"100000\"name=\"salaire\"   onchange=\"money(event)\">
          <hr>
          <div id=\"description\">
            <h2 class=\"h4 text-white\">LA MISSION:</h2>
            <textarea placeholder=\" Descrivez en quelques mots la mission que vouz proposez:\" name=\"mission\" >
            </textarea>
            <h2 class=\"h4 text-white\">
             Profil recherché
            </h2>
            <textarea placeholder=\" Descrivez en quelques mots la mission que vouz proposez:\" name=\"profil\" required>
            </textarea>
          </div>
          <button id=\"publier\">
           Ajouter un job(annonce)
          </button>
          <button id=\"preview\" style=\"background-color:#663399\">
            preview mon annonce
          </button>
        </div>
        </form>
        <!-- 
        *****************************************************************************
        ===================== the end of make annonce studio ========================
        *****************************************************************************
        -->
        <div id=\"studioAnnonceB\">
        </div>
        <div id=\"done\">
           <img src='/img/done.jpg' class='imgAjax'>
           <p class='text-center text-white h4'>Votre annonce fut publié</p>
           <p id=\"back\">
            <i class='fas fa-long-arrow-alt-left' >
            </i>
             GO back 
           </p>
           <p class=\"text-center\" id=\"seeAnnonce\">
            <a href=\"#\" class=\"text-white h6\" id=\"annonceLink\">Voir mon annonce</a>
           </p>
        </div>
      </div>
    <!--- studio cv -->
     <form  id=\"formVideo\">
      <div id=\"studioVideoCv\">
        <p>
          <span class=\"text-danger-close\" id=\"closeVideoCv\">x</span>
        </p>
        <p  classs=\"font-weight-bold\">
         Je suis un candidat je vais:
        </p>
        <h1 class=\"h3 text-white text-center font-weight-bold \">
          <i class=\"fas fa-video\"></i>
          Publier ma video cv
        </h1>
        <h2 class=\"h4 text-white\">
          <i class=\"fas fa-user-md\"></i>
          Moi je suis:
        </h2>
        <input class=\"form-control\" type=\"text\" placeholder=\"Ex.:traducteur en anglais\" id=\"title_v\" >
        <h2 class=\"h4 text-white\">
          <i class=\"fas fa-phone-volume\"></i> Appelez-moi aux:
        </h2>
        <input class=\"form-control\" type=\"number\" placeholder=\"Ex.:07xxxxxxx\" id=\"tel_v\">
        <p class=\"text-white\">
          <strong>
            <i class=\"fas fa-map-marker-alt\"></i>Ville:
            <input class=\"form-control\"type=\"text\" placeholder=\"Ex:Paris\" id=\"city_v\" >
          </strong>
          <strong>
            <i class=\"fas fa-mail-bulk\"></i>Code Postal:
            <input class=\"form-control\" type=\"number\" placeholder=\"Ex:75001\" id=\"codePostal_v\" pattern=\"[0-9]*\" >
          </strong>
        </p>
        <!-- upload cv-->
        <div class=\"dropzone text-center\">
            <img src=\"http://100dayscss.com/codepen/upload.svg\" class=\"upload-icon\" />
           <!-- <input type=\"file\" class=\"upload-input notRequired\"  />-->
          </div>
          <p class=\"text-white text-center\">Upload ma video 
            <strong class=\"text-dark\">cv(*obrigatoire)</strong>
          </p>
          <p id=\"cvideo\">
            <input id=\"sortpicture\" type=\"file\" name=\"sortpic\"  />
          </p>
          <p class=\"text-white text-center\">Upload cv en pdf 
            <strong class=\"text-success\">cv(*optionnelle)
            </strong>
          </p>
        <button type=\"submit\" id=\"preview\" style=\"background-color:#663399\" onclick=\"uploadVideo(event)\">publier</button>
      </div>
       <input type=\"hidden\" name=\"annonceUrl\" value=\"{{path('makeannone')}}\" >
     </form>
     <!-- end of studio -->
       <input type=\"hidden\" id=\"seeAnnonce\" value=\"{{path('infojob')}}\">
       <input type=\"hidden\" id=\"uploadUrl\" value=\"{{path('upload')}}\">
  \t</footer>
<!-- modal -->
</body>
<script src=\"{{asset('js/emascript.js')}}\"> 
</script>
<script src=\"{{asset('js/uploadAjax.js')}}\"> 
</script>
<html>





", "App/component/footer.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/component/footer.html.twig");
    }
}
