<?php

/* webservices.twig */
class __TwigTemplate_fc22c012984893e88c20ad34af157dca1aff9742d47099bd286f6dd5702288e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "webservices.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["pageTitle"] = "Webservices";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageContent($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 7
            echo "        <div>
            <p>name=";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "name", array()), "html", null, true);
            echo "</p>
            <p>description=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "description", array()), "html", null, true);
            echo "\"</p>
            <p>uri=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "uri", array()), "html", null, true);
            echo "\"</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "webservices.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  46 => 9,  42 => 8,  39 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.twig' %}*/
/* */
/* {% set pageTitle = 'Webservices' %}*/
/* */
/* {% block pageContent %}*/
/*     {% for service in services %}*/
/*         <div>*/
/*             <p>name={{ service.name }}</p>*/
/*             <p>description="{{ service.description }}"</p>*/
/*             <p>uri="{{ service.uri }}"</p>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
