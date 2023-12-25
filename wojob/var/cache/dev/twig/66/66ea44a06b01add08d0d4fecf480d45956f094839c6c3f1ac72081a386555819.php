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

/* App/component/chat_text.html.twig */
class __TwigTemplate_954fab82116ecfb7e1a7a9610558af61d85be1b492cc4bbe7b7437670cfa8956 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/chat_text.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "App/component/chat_text.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["msg"]) || array_key_exists("msg", $context) ? $context["msg"] : (function () { throw new RuntimeError('Variable "msg" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 3) == (isset($context["corrent_user"]) || array_key_exists("corrent_user", $context) ? $context["corrent_user"] : (function () { throw new RuntimeError('Variable "corrent_user" does not exist.', 3, $this->source); })()))) {
                // line 4
                echo "        <p>
            <span class=\"corrent-user\"> ";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "message_text", [], "any", false, false, false, 5), "html", null, true);
                echo " </span>
        </p>
    ";
            } else {
                // line 8
                echo "        <p> 
            <span class=\"matcher\">
                ";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "message_text", [], "any", false, false, false, 10), "html", null, true);
                echo "
            </span>
        </p>   
    ";
            }
            // line 13
            echo " 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "App/component/chat_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  66 => 10,  62 => 8,  56 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for x in msg %}
    {% if x.id == corrent_user %}
        <p>
            <span class=\"corrent-user\"> {{x.message_text}} </span>
        </p>
    {% else %}
        <p> 
            <span class=\"matcher\">
                {{x.message_text}}
            </span>
        </p>   
    {% endif %} 
{% endfor %}", "App/component/chat_text.html.twig", "/Users/emanuelabizimi/Documents/dev/web/symfony/wojob/wojob/templates/App/component/chat_text.html.twig");
    }
}
