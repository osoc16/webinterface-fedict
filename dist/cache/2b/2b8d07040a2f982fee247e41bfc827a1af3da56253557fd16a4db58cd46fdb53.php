<?php

/* webservices.twig */
class __TwigTemplate_c855d059f69bc1314e3901362f329c607eb883649b77f5fc66b2abfe208aad1d extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["services"]) ? $context["services"] : null)), "html", null, true);
        echo "

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 9
            echo "        <div>
            <p>name=";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "name", array()), "html", null, true);
            echo "</p>
            <p>description=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "description", array()), "html", null, true);
            echo "\"</p>
            <p>uri=\"";
            // line 12
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
        return array (  55 => 12,  51 => 11,  47 => 10,  44 => 9,  40 => 8,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.twig' %}*/
/* */
/* {% set pageTitle = 'Webservices' %}*/
/* */
/* {% block pageContent %}*/
/*     {{ dump(services) }}*/
/* */
/*     {% for service in services %}*/
/*         <div>*/
/*             <p>name={{ service.name }}</p>*/
/*             <p>description="{{ service.description }}"</p>*/
/*             <p>uri="{{ service.uri }}"</p>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
