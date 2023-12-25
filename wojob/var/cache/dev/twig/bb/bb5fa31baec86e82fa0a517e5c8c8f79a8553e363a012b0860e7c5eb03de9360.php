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

/* App/page/tchat.html.twig */
class __TwigTemplate_f785b43ca0fe7838201d056fd6ec8f46983ae046701afa157d90dc46a9c1e83c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/tchat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/page/tchat.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    ";
        // line 4
        $this->loadTemplate("App/signInUp/links.html.twig", "App/page/tchat.html.twig", 4)->display($context);
        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/page/tchat.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  </head>
  <body>
  \t<header>
       ";
        // line 9
        $this->loadTemplate("App/component/nav.html.twig", "App/page/tchat.html.twig", 9)->display($context);
        // line 10
        echo "  \t</header>
    <main>
       <section class=\"row\">
            <article class=\" card col-md-3 p-0\">
                <div class=\"nav-header-style p-3\">
                    <h1 class=\"h6\">Filter:
                        <select>
                            <option>Recruteur</option>
                            <option>Wojob-equipe</option>
                            <option> Posted</option>
                            <option> Loved </option>
                            
                        </select>
                    </h1>
                </div>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => 1, 1 => 2, 2 => 3, 3 => 4]);
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 26
            echo "                <div class=\"row pl-4 pt-2\">
                    <div  class=\"col-md-3\">
                        <img class=\" user-img\" alt=\"the online user image\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/back.jpg"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"col-md-9\">
                        <p class=\"h6 font-weight-bold\"> User name </p>
                        <p> some simples mensagem come over here ...</p>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </article>
            <div class=\"col-md-9 p-0\">
                <div class=\"d-flex justify-content-around p-1\">
                  <div>
                    <img  class=\"user-img-center\" alt=\"the online user image\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/back.jpg"), "html", null, true);
        echo "\" > 
                     <span class=\" h6 font-weight-bold\"> USER NAME </span>
                  </div>
                  <div>
                    <input type=\"search\"  class=\"form-control\" placeholder=\"search ...\">
                  </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-9\">
                       <div class=\"box-tchat\"> 
                             ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => 1, 1 => 2, 2 => 3, 3 => 4]);
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 51
            echo "                            <p>
                              <span  class=\"corrent-user\"> Eu te amo meu amor , rabi mendes é o meu nome sabias disso ? , agora ja sabes né ? </span>
                            </p>
                            <p> 
                               <span class=\"matcher\">
                                 Nice to meet you Emanuel
                                 </span>
                            </p>
                            
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                        </div>
                       <div class=\"row ml-2\">
                            <div class=\"col-md-7\">
                                <input class=\"form-control\"  id=\"msg\">
                            </div>
                            <div class=\"col-md-4\">
                                <button class=\"btn btn-r\" title=\"send mensage\" id=\"send_btn\"><i class=\"fas fa-paper-plane\"></i></button>
                                <button class=\"btn btn-r\"> <i class=\"fas fa-ellipsis-v\"></i></button>
                            </div>
                       </div>
                    </div>
                    <div class=\"col-md-3 pr-3 text-center\">
                        <img  class=\"user-img-center text-center\" alt=\"the online user image\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/back.jpg"), "html", null, true);
        echo "\" > 
                        <p class=\"p-2\">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec dapibus enim. Sed eget porta eros. </p>
                        <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                        <p> <i class=\"fas fa-map-pin\"></i> : France</p>
                    </div>
                </div>
            </div>
       </section>
    </main>
    <footer>
    </footer>
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chat.js"), "html", null, true);
        echo "\">
    </script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/page/tchat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 87,  151 => 73,  137 => 61,  122 => 51,  118 => 50,  105 => 40,  99 => 36,  85 => 28,  81 => 26,  77 => 25,  60 => 10,  58 => 9,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
    {% include 'App/signInUp/links.html.twig' %}
    <link href=\"{{ asset('css/page/tchat.css') }}\" rel=\"stylesheet\"/>
  </head>
  <body>
  \t<header>
       {% include 'App/component/nav.html.twig'%}
  \t</header>
    <main>
       <section class=\"row\">
            <article class=\" card col-md-3 p-0\">
                <div class=\"nav-header-style p-3\">
                    <h1 class=\"h6\">Filter:
                        <select>
                            <option>Recruteur</option>
                            <option>Wojob-equipe</option>
                            <option> Posted</option>
                            <option> Loved </option>
                            
                        </select>
                    </h1>
                </div>
                {% for x in [1, 2, 3, 4] %}
                <div class=\"row pl-4 pt-2\">
                    <div  class=\"col-md-3\">
                        <img class=\" user-img\" alt=\"the online user image\" src=\"{{asset('/img/back.jpg')}}\">
                    </div>
                    <div class=\"col-md-9\">
                        <p class=\"h6 font-weight-bold\"> User name </p>
                        <p> some simples mensagem come over here ...</p>
                    </div>
                </div>
                {% endfor %}
            </article>
            <div class=\"col-md-9 p-0\">
                <div class=\"d-flex justify-content-around p-1\">
                  <div>
                    <img  class=\"user-img-center\" alt=\"the online user image\" src=\"{{asset('/img/back.jpg')}}\" > 
                     <span class=\" h6 font-weight-bold\"> USER NAME </span>
                  </div>
                  <div>
                    <input type=\"search\"  class=\"form-control\" placeholder=\"search ...\">
                  </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-9\">
                       <div class=\"box-tchat\"> 
                             {% for x in [1, 2, 3, 4] %}
                            <p>
                              <span  class=\"corrent-user\"> Eu te amo meu amor , rabi mendes é o meu nome sabias disso ? , agora ja sabes né ? </span>
                            </p>
                            <p> 
                               <span class=\"matcher\">
                                 Nice to meet you Emanuel
                                 </span>
                            </p>
                            
                           {% endfor %}
                        </div>
                       <div class=\"row ml-2\">
                            <div class=\"col-md-7\">
                                <input class=\"form-control\"  id=\"msg\">
                            </div>
                            <div class=\"col-md-4\">
                                <button class=\"btn btn-r\" title=\"send mensage\" id=\"send_btn\"><i class=\"fas fa-paper-plane\"></i></button>
                                <button class=\"btn btn-r\"> <i class=\"fas fa-ellipsis-v\"></i></button>
                            </div>
                       </div>
                    </div>
                    <div class=\"col-md-3 pr-3 text-center\">
                        <img  class=\"user-img-center text-center\" alt=\"the online user image\" src=\"{{asset('/img/back.jpg')}}\" > 
                        <p class=\"p-2\">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec dapibus enim. Sed eget porta eros. </p>
                        <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i> <i class=\"far fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                        <i class=\"far fa-star\"></i>
                        <p> <i class=\"fas fa-map-pin\"></i> : France</p>
                    </div>
                </div>
            </div>
       </section>
    </main>
    <footer>
    </footer>
    <script src=\"{{asset(\"js/chat.js\")}}\">
    </script>
</html>", "App/page/tchat.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/page/tchat.html.twig");
    }
}
