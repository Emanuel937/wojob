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
class __TwigTemplate_8c670c43a357c8642bbde7a867aeae87c0b2710d36e4a62f34a63824e11ce6cf extends Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["user_infos"]) || array_key_exists("user_infos", $context) ? $context["user_infos"] : (function () { throw new RuntimeError('Variable "user_infos" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 26
            echo "                <div class=\"row pl-4 pt-2 ibox_infos\"  onclick =\"iboxFunction('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["x"], "pronom", [], "any", false, false, false, 26)), "html", null, true);
            echo "')\">
                    <div  class=\"col-md-3\">
                        <img class=\" user-img\" alt=\"the online user image\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/back.jpg"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"col-md-9\">
                        <p class=\"h6 font-weight-bold\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "pronom", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
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
                  <div class=\"to_id_set\">
                    <img  class=\"user-img-center\" alt=\"the online user image\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/img/back.jpg"), "html", null, true);
        echo "\" > 
                     <span class=\" h6 font-weight-bold\" id=\"to_name\"> USER NAME </span>
                  </div>
                  <div>
                    <input type=\"search\"  class=\"form-control\" placeholder=\"search ...\">
                  </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-9\">
                       <div class=\"box-tchat\" id=\"insert_text\"> 
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
                        <img  class=\"user-img-center text-center\" alt=\"the online user image\" src=\"";
        // line 62
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
    <input type=\"hidden\" value=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat");
        echo "\" id=\"url_input\">
    <input type=\"hidden\" value=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("texts");
        echo "\" id=\"texts\">
    <script src=\"";
        // line 78
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
        return array (  162 => 78,  158 => 77,  154 => 76,  137 => 62,  112 => 40,  106 => 36,  95 => 31,  89 => 28,  81 => 26,  77 => 25,  60 => 10,  58 => 9,  50 => 5,  48 => 4,  43 => 1,);
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
                {% for x in user_infos %}
                <div class=\"row pl-4 pt-2 ibox_infos\"  onclick =\"iboxFunction('{{x.id}}', '{{x.pronom|trans}}')\">
                    <div  class=\"col-md-3\">
                        <img class=\" user-img\" alt=\"the online user image\" src=\"{{asset('/img/back.jpg')}}\">
                    </div>
                    <div class=\"col-md-9\">
                        <p class=\"h6 font-weight-bold\">{{x.pronom}}</p>
                        <p> some simples mensagem come over here ...</p>
                    </div>
                </div>
                {% endfor %}
            </article>
            <div class=\"col-md-9 p-0\">
                <div class=\"d-flex justify-content-around p-1\">
                  <div class=\"to_id_set\">
                    <img  class=\"user-img-center\" alt=\"the online user image\" src=\"{{asset('/img/back.jpg')}}\" > 
                     <span class=\" h6 font-weight-bold\" id=\"to_name\"> USER NAME </span>
                  </div>
                  <div>
                    <input type=\"search\"  class=\"form-control\" placeholder=\"search ...\">
                  </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-9\">
                       <div class=\"box-tchat\" id=\"insert_text\"> 
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
    <input type=\"hidden\" value=\"{{path('chat')}}\" id=\"url_input\">
    <input type=\"hidden\" value=\"{{path('texts')}}\" id=\"texts\">
    <script src=\"{{asset(\"js/chat.js\")}}\">
    </script>
</html>", "App/page/tchat.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/page/tchat.html.twig");
    }
}
