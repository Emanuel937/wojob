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

/* App/page/studio_make_video.html.twig */
class __TwigTemplate_8a629c0762f1a3b1c6a077e080a144bed3e23b3ef7eea9378bc304ba6b9831c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/studio_make_video.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/studio_make_video.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->loadTemplate("App/signInUp/links.html.twig", "App/page/studio_make_video.html.twig", 4)->display($context);
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page/make-video-studio.css"), "html", null, true);
        echo "\"rel=\"stylesheet\"/>
  </head>
  <body>
    \t<header>
       ";
        // line 9
        $this->loadTemplate("App/component/nav.html.twig", "App/page/studio_make_video.html.twig", 9)->display($context);
        // line 10
        echo "  \t</header>
  <main>
  <article class=\"card bg-lb text-center text-dark \">
    <div class=\"row mt-1 px-4\">
      <p class=\"text-height col-md-8\"> <i class=\"fas fa-video\"></i> Welcome to workspance - make your video cv </p>
      <input  class=\"form-control col-md-4\" type=\"search\" placeholder=\"search for a background music ..\">
    </div>
  </article>
  <section class=\"row\">
    <article class=\"col-md-3 mx-3\">
      <h1 class=\"h6 pt-2\">Détails du video cv </h1>
      <p> <i class=\"fas fa-gavel\"></i> Je suis (obrigatoire):</p>
      <input type=\"text\" class=\"form-control p-4 mb-3\"  placeholder=\"Ex.: Je suis développeur web\">
      <p> <i class=\"fas fa-info\"></i>: target sont des mots clés qui vas vous permettre être trouver plus rapide..</p>
      <textarea class=\"form-control\" rows=\"4\" value=\"make a description it will help the recrutter find you so faster\">
          type some target 
      </textarea>
      <p class=\"mt-3\"> <i class=\"fas fa-american-sign-language-interpreting\"></i> contrat:</p>
      <select class=\" form-control border\" type=\"text\" placeholder=\"contrat\">
        <option> CDI</option>
        <option> CDD </option>
        <option> Freelance </option>
      <select>
    </article>
    <article class=\"col-md-8\">
      <h2 class=\"h6  pt-2 text-primary\">---Temps maximum pour la video: 1ms ---</h2>
      <div class=\"row\">
        <div class=\"col-md-9\">
          <video src=\"https://www.youtube.com/watch?v=tgJMnPRjWxE\" alt=\"video-cv-wojob\">
          </video>
        </div>
        <div class=\"col-md-3\">
          <select class=\"border mb-2\">
            <option> Angola</option>
          </select>
           <p class=\"tel\"> <i class=\"fas fa-phone-volume\"></i> Appelez moi au:</p>
           <input class=\" form-control\" placeholder =\"Ex.:075334xxxx\">
           <p  class=\"mt-3\">upload cv en pdf</p>
           <input class=\" border\"  type=\"file\">  
           <input class=\"form-control border mt-2 mb-2\" type=\"text\" placeholder=\"ville ex.:Paris\">
           <input class=\" form-control border mb-1\" type=\"text\" placeholder=\"code-postale \">
          <select class=\" form-control border\" type=\"text\" placeholder=\"code-postale \">
            <option> Junior </option>
            <option> Intermediaire </option>
            <option> Senior  </option>
          <select>
        </div>
      </div>
      <div class=\"d-flex mt-4 border p-2 justify-content-between\">
          <div class=\"card border border-primary p-5\">
             p
          </div>
          <div class=\"p-5\" title=\"upload a video that you want make as cv\">
             <i class=\"fas fa-plus \"></i>
          </div>
      </div>
      <button class=\"btn btn-primary mt-2 ml-2\"><i class=\"fas fa-binoculars\"></i> Prévisualiser</button>
      <button class=\"btn btn-primary mt-2 ml-2\" > <i class=\"fab fa-slideshare\"></i> Publier</button>
    </article>
  </section>
  </main>
  <body>
  <html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/page/studio_make_video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  58 => 9,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% include 'App/signInUp/links.html.twig' %}
    <link href=\"{{ asset('css/page/make-video-studio.css')}}\"rel=\"stylesheet\"/>
  </head>
  <body>
    \t<header>
       {% include 'App/component/nav.html.twig'%}
  \t</header>
  <main>
  <article class=\"card bg-lb text-center text-dark \">
    <div class=\"row mt-1 px-4\">
      <p class=\"text-height col-md-8\"> <i class=\"fas fa-video\"></i> Welcome to workspance - make your video cv </p>
      <input  class=\"form-control col-md-4\" type=\"search\" placeholder=\"search for a background music ..\">
    </div>
  </article>
  <section class=\"row\">
    <article class=\"col-md-3 mx-3\">
      <h1 class=\"h6 pt-2\">Détails du video cv </h1>
      <p> <i class=\"fas fa-gavel\"></i> Je suis (obrigatoire):</p>
      <input type=\"text\" class=\"form-control p-4 mb-3\"  placeholder=\"Ex.: Je suis développeur web\">
      <p> <i class=\"fas fa-info\"></i>: target sont des mots clés qui vas vous permettre être trouver plus rapide..</p>
      <textarea class=\"form-control\" rows=\"4\" value=\"make a description it will help the recrutter find you so faster\">
          type some target 
      </textarea>
      <p class=\"mt-3\"> <i class=\"fas fa-american-sign-language-interpreting\"></i> contrat:</p>
      <select class=\" form-control border\" type=\"text\" placeholder=\"contrat\">
        <option> CDI</option>
        <option> CDD </option>
        <option> Freelance </option>
      <select>
    </article>
    <article class=\"col-md-8\">
      <h2 class=\"h6  pt-2 text-primary\">---Temps maximum pour la video: 1ms ---</h2>
      <div class=\"row\">
        <div class=\"col-md-9\">
          <video src=\"https://www.youtube.com/watch?v=tgJMnPRjWxE\" alt=\"video-cv-wojob\">
          </video>
        </div>
        <div class=\"col-md-3\">
          <select class=\"border mb-2\">
            <option> Angola</option>
          </select>
           <p class=\"tel\"> <i class=\"fas fa-phone-volume\"></i> Appelez moi au:</p>
           <input class=\" form-control\" placeholder =\"Ex.:075334xxxx\">
           <p  class=\"mt-3\">upload cv en pdf</p>
           <input class=\" border\"  type=\"file\">  
           <input class=\"form-control border mt-2 mb-2\" type=\"text\" placeholder=\"ville ex.:Paris\">
           <input class=\" form-control border mb-1\" type=\"text\" placeholder=\"code-postale \">
          <select class=\" form-control border\" type=\"text\" placeholder=\"code-postale \">
            <option> Junior </option>
            <option> Intermediaire </option>
            <option> Senior  </option>
          <select>
        </div>
      </div>
      <div class=\"d-flex mt-4 border p-2 justify-content-between\">
          <div class=\"card border border-primary p-5\">
             p
          </div>
          <div class=\"p-5\" title=\"upload a video that you want make as cv\">
             <i class=\"fas fa-plus \"></i>
          </div>
      </div>
      <button class=\"btn btn-primary mt-2 ml-2\"><i class=\"fas fa-binoculars\"></i> Prévisualiser</button>
      <button class=\"btn btn-primary mt-2 ml-2\" > <i class=\"fab fa-slideshare\"></i> Publier</button>
    </article>
  </section>
  </main>
  <body>
  <html>", "App/page/studio_make_video.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/page/studio_make_video.html.twig");
    }
}
