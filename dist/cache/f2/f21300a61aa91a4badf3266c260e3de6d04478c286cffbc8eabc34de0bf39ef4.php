<?php

/* layout.twig */
class __TwigTemplate_94c8a76cde2654e8d5dbf656dfeeb57c9f984880c3183aacbee1a16f398a3fb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"nl\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo "</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <link rel=\"stylesheet\" href=\"../../dist/css/generic.css\" />
    <link rel=\"stylesheet\" href=\"../../dist/css/style.css\" />
</head>
<body>
    <div class=\"pagecontent\">
        ";
        // line 12
        $this->displayBlock('pageContent', $context, $blocks);
        // line 14
        echo "    </div>
    <div class=\"about\">
        </br>Copyright (c) 2016 Open Knowledge Belgium - Fedict
    </div>
</body>
</html>";
    }

    // line 12
    public function block_pageContent($context, array $blocks = array())
    {
        // line 13
        echo "        ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  47 => 12,  38 => 14,  36 => 12,  25 => 4,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="nl">*/
/* <head>*/
/*     <title>{{ pageTitle }}</title>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     <link rel="stylesheet" href="../../dist/css/generic.css" />*/
/*     <link rel="stylesheet" href="../../dist/css/style.css" />*/
/* </head>*/
/* <body>*/
/*     <div class="pagecontent">*/
/*         {% block pageContent %}*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="about">*/
/*         </br>Copyright (c) 2016 Open Knowledge Belgium - Fedict*/
/*     </div>*/
/* </body>*/
/* </html>*/
